<div id="faq-modal-open" data-izimodal-title="Вопросы|Ответы"
     data-izimodal-subtitle="Ответы на часто задаваемые вопросы">
    <div class="skit-modal__body p-3 pb-5">
        <div class="accordion" id="faq__accordion">
            <!--1-->
            @if (!empty($modalComponents))
                @for($i = 1; $i <= count($modalComponents); $i++)

                    <div class="product-review">
                        <div class="card-header" id="faq__heading-{{$i}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq__collapse-{{ $i }}" aria-expanded="true" aria-controls="faq__collapse-{{ $i }}">
                                    {{ $modalComponents[$i - 1]->title }}
                                </button>
                            </h5>
                        </div>

                        <div id="faq__collapse-{{ $i }}" class="collapse {{ $i === 1 ? 'show' : '' }}" aria-labelledby="faq__heading-{{ $i }}" data-parent="#faq__accordion">
                            <div class="card-body">
                                {{ $modalComponents[$i - 1]->content }}
                            </div>
                        </div>

                    </div>

                @endfor
            @endif
        </div>
    </div>
</div>
<div id="delivery-modal-open" data-izimodal-title="Вес готовых изделий"
     data-izimodal-subtitle="Правильно расчитать объем заказа">
    <div class="skit-modal__body p-3 pb-5">
        <p>
            Средняя порция 150-200 гр. Увеличивайте её при отсутствии другой еды, если хотите оставить на утро, либо
            угостить не пришедших гостей.
            Погрешность: торт может иметь погрешность в весе до 10 %
        </p>
    </div>
</div>
<div id="decorate-modal-open" data-izimodal-title="Оформление"
     data-izimodal-subtitle="Информация об оформлении кондитерских изделий">
    <div class="skit-modal__body p-3 pb-5">
        <p>
            <span>В стоимость входит:</span>
            Оформление в любом цвете, градиент, мазки, несколько цветов, стекающая глазурь любого цвета, сезонные ягоды,
            безе на палочках, маленькие безе, бусины, блёстки, посыпки, 2 небольших леденца,
            1 пряник (поздравительная надпись, либо цифра), стёклышко, декор лепестками шоколада ( + 500 гр к весу),
            декор лепестками груши ( +500 гр к весу), горка сладостей ( +300-500 гр к весу)
        </p>
        <p>
            <span>Дополнительно оплачивается:</span>
        <ul>
            <li>Пряники</li>
            <li>Мини-бутылка алкоголя</li>
            <li>Несезонные ягоды</li>
            <li>Топпер (пластик, дерево, стекло)</li>
            <li>Картинка на сахарной печати</li>
            <li>Макаруны</li>
            <li>Декор живыми цветами</li>
            <li>Леденцы</li>
            <li>Ваш индивидуальный декор</li>
            <li>Безе на палочках</li>
            <li>Маленькие безе</li>
            <li>Бусины, блёстки посыпки</li>
            <li>Не определился</li>
            <li>Какое оформление входит в стоимость</li>
        </ul>
        </p>
    </div>
</div>

<script>
    $(function () {
        $("#decorate-modal-open,#delivery-modal-open,#faq-modal-open").iziModal({

            onClosed: function () {
                history.pushState("", document.title, location.href.replace(/#.*/, ""));
            },

            headerColor: common.primaryColor
        });
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>