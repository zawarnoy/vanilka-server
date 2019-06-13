<?php

namespace App\Services;


class OrderEntityService
{
    const TASTE_COMPONENT = 'ComponentTaste';
    const STUFFING_COMPONENT = 'ComponentAdditionalStuffing';
    const DECOR_COMPONENT = 'ComponentDecor';
    const SIZE_COMPONENT = 'ComponentSize';
    const IMAGE_COMPONENT = 'ComponentImage';
    const NOTIFICATION_COMPONENT = 'ComponentNotification';

    protected $boundary;

    protected $result;

    public function sendMail(array $requestData)
    {
        $subject = 'Номер заказа: ' . time();
        $this->boundary = "--" . md5(uniqid(time()));
        $mailheaders = "MIME-Version: 1.0;\r\n";
        $mailheaders .= "Content-Type: multipart/related; boundary=\"$this->boundary\"\r\n";
        $mailheaders .= "From: <orderbot@vanilka.by>\r\n";
        $mailheaders .= "To: vanilka.by@yandex.by\r\n";

        $common = $this->getHandledPersonDataFromRequestData($requestData);
        $taste = $this->getHandledTasteDataFromRequestData($requestData);

        $multipart = "--$this->boundary\r\n";
        $multipart .= "Content-Type: text/html; charset=utf-8\r\n";
        $multipart .= "Content-Transfer-Encoding: 8bit\r\n";
        $multipart .= "\r\n";
        $multipart .= $common . " " . $taste;
        $multipart .= $this->getAttachments(json_decode($requestData['orderData'])->{self::IMAGE_COMPONENT});

        $multipart = wordwrap($multipart);

        if (mail(setting('site.order_email'), $subject, $multipart, $mailheaders)) {
            $this->result = "<center>" . $subject . "</center>";
        } else {
            $this->result ="<center>Заказ не сформирован, приносим извинения</center>";
        }
    }

    public function getResult()
    {
        return $this->result;
    }

    protected function getHandledTasteDataFromRequestData(array $requestData)
    {
        $taste = '';

        if (isset($requestData['orderData'])) {
            $orderData = json_decode($requestData['orderData']);
            $taste .= '<br>Информация о товаре: <br>';

            $taste = $this->isTasteSpecified($orderData) ?
                $taste . $this->prepareComponentTasteResponse($orderData->{self::TASTE_COMPONENT}) : $taste;

            $taste = $this->isAdditionalStuffingSpecified($orderData) ?
                $taste . $this->prepareComponentAdditionalStuffingResponse($orderData->{self::STUFFING_COMPONENT}) : $taste;

            $taste = $this->isDecorSpecified($orderData) ?
                $taste . $this->prepareComponentDecorResponse($orderData->{self::DECOR_COMPONENT}) : $taste;

            $taste = $this->isSizeSpecified($orderData) ?
                $taste . $this->prepareComponentSizeResponse($orderData->{self::SIZE_COMPONENT}) : $taste;

            $taste = $this->isImageSpecified($orderData) ?
                $taste . $this->prepareComponentImageResponse($orderData->{self::IMAGE_COMPONENT}) : $taste;

            $taste = $this->isNotificationSpecified($orderData) ?
                $taste . $this->prepareComponentNotificationResponse($orderData->{self::NOTIFICATION_COMPONENT}) : $taste;
        }

        return $taste;
    }

    protected function getHandledPersonDataFromRequestData(array $requestData)
    {
        $result = '';

        if (isset($requestData['personData'])) {
            $personInfo = json_decode($requestData['personData']);
            $result .= 'Клиент: <br>';
            $result .= 'Фамилия: ' . $personInfo->lastName . '<br/>';
            $result .= 'Имя: ' . $personInfo->firstName . '<br/>';
            $result .= 'Телефон: ' . $personInfo->phone . '<br/>';
            $result .= 'еMail: ' . $personInfo->email . '<hr/>';
        }

        return $result;
    }

    protected function isTasteSpecified($o)
    {
        return property_exists($o, self::TASTE_COMPONENT);
    }

    protected function isAdditionalStuffingSpecified($o)
    {
        return property_exists($o, self::STUFFING_COMPONENT);
    }

    protected function isDecorSpecified($o)
    {
        return property_exists($o, self::DECOR_COMPONENT);
    }

    protected function isSizeSpecified($o)
    {
        return property_exists($o, self::SIZE_COMPONENT);
    }

    protected function isImageSpecified($o)
    {
        return property_exists($o, self::IMAGE_COMPONENT);
    }

    protected function isNotificationSpecified($o)
    {
        return property_exists($o, self::NOTIFICATION_COMPONENT);
    }


    /**
     * Проверить загружены ли дополнительные изображения
     * /**
     * Подготовить ответ по компоненту "Выбор вкуса"
     * @param {[]} $componentData - данные компонента
     * @return string
     */
    protected function prepareComponentTasteResponse($componentData)
    {
        $result = 'Вкусы: <br/>';

        if (is_array($componentData)) {
            for ($i = 0; $i < count($componentData); $i++) {

                $taste = trim($componentData[$i]->taste) == 'единственный' ? $componentData[$i]->name : $componentData[$i]->taste;

                $result .= ' - Вкус: ' . $taste;
                $result .= ', вес: ' . $componentData[$i]->weight;
//                $result .= ', значение слайдера: ' . $componentData[$i]->value;
                $result .= ', количество порций: ' . $componentData[$i]->rationCount;
                $result .= '<hr/>';
            }
        }
        return $result;
    }


    /**
     * Подготовить ответ по компоненту "Дополнения к начинке"
     * @param {[]} $componentData - данные компонента
     * @return string
     */
    protected function prepareComponentAdditionalStuffingResponse($componentData)
    {
        $result = 'Дополнить начинкой: <br/>';

        if (is_array($componentData)) {
            for ($i = 0; $i < count($componentData); $i++) {
                $result .= ' - ' . $componentData[$i] . '<br/>';
            }
        }

        return $result . '<hr/>';
    }


    /**
     * Подготовить ответ по компоненту "Оформление"
     * @param {[]} $componentData - данные компонента
     * @return string
     */
    protected function prepareComponentDecorResponse($componentData)
    {
        $result = 'Оформить: <br/>';

        if (is_array($componentData)) {
            for ($i = 0; $i < count($componentData); $i++) {
                $result .= ' - ' . $componentData[$i] . '<br/>';
            }
        }

        return $result;
    }


    /**
     * Подготовить ответ по компоненту "Выбор размера"
     * @param {string} $componentData
     * @return string
     */
    protected function prepareComponentSizeResponse($componentData)
    {
        return 'Указанный размер изделия: <br> - ' . $componentData;
    }


    /**
     * Подготовить ответ по загруженным изображениям
     * @param {[]} $componentData - загруженные изображения (приходят в base64 либо ссылкой на источник)
     * @return string
     */
    protected function prepareComponentImageResponse($componentData)
    {
        $result = 'Загруженные изображения: <br/>';
        if (is_array($componentData)) {
            for ($i = 0; $i < count($componentData); $i++) {
                $result .= "<img width='400' style='margin: 10px; border:3px solid gray' src='cid:img_" . $i . "'> \r\n";
            }
        }
        $result .= '<br/>';
        return $result;
    }


    /**
     * Прикрепить изображения к письму
     * @param {[]} $componentData - загруженные изображения (приходят в base64 либо ссылкой на источник)
     * @return string
     */
    protected function getAttachments($componentData)
    {
        $basedir = realpath('./../');

        $result = '';
        if (is_array($componentData)) {
            for ($i = 0; $i < count($componentData); $i++) {
                if (!$this->is_base64_encoded($componentData[$i])) {
                    if ($this->is_self_image($componentData[$i])) {
//                        print_r($componentData); die;
                        $fb = file_get_contents($componentData[$i], 'r');
                    } else {
                        $fb = file_get_contents($componentData[$i], 'r');
                    }
                    $componentData[$i] = base64_encode($fb);
                }
                $result .= "\r\n--$this->boundary\r\n";
                $result .= "Content-Type: image/png; name=\"attachment_$i\"\r\n";
                $result .= "Content-Transfer-Encoding:base64\r\n";
                $result .= "Content-ID: img_" . $i . "\r\n";
                $result .= "\r\n";
                $result .= chunk_split($componentData[$i]);
            }
        }
        $result .= "\r\n--$this->boundary--\r\n";
        return $result;
    }

    /**
     * Подготовить ответ по коментариям к заказу
     * @param {string} $componentData
     * @return string
     */
    protected function prepareComponentNotificationResponse($componentData)
    {
        $result = 'Комментарий к заказу: <br/>';
        return $result .= $componentData;
    }

    /**
     * Проверить является ли входящая строка закодированной в base64
     * @param {string} $data
     * @return bool
     */
    protected function is_base64_encoded($data)
    {
        if (preg_match('%^[a-zA-Z0-9/+]*={0,2}$%', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    protected function is_self_image($data)
    {
        return stripos($data, 'img/') !== false;
    }


}