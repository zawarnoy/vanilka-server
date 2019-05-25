@extends('layouts.showcase')

@section('content')
    <div class="vnl__article vnl__container transparent container p-0 mb-0 mt-5">
        <nav aria-label="breadcrumb mb-0 rounded-0 bg-light ">
            <ol class="breadcrumb mb-0 bg-light border-bottom">
                <li class="breadcrumb-item"><a href="main.html">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Candybar</li>
            </ol>
        </nav>
    </div>

    <div class="vnl__article vnl__container container">
        <div class="row">
            <div class="col-12 py-5 px-3">
                <p>Кэнди-бар – это оформленный в соответствии с определённой концепцией десертно-фуршетный стол, на
                    котором
                    расположены различные кексы и пирожные, печенье, выпечка, нежнейший зефир и маршмелоу, воздушные
                    безе,
                    шоколад, мармелад, всевозможные драже и леденцы, конфеты и любые другие кондитерские изделия.
                </p>
            </div>
        </div>
        <div class="row p-3">
            <a class="stock__product tetragon-6 p-1" href="#">
                <div class="tetragon__wrapper">
                    <div class="tetragon__content">
                        <img class="product__thumb d-block w-100 h-100"
                             src="{{ asset('img/pre-loader.gif') }}"
                             data-src="img/cdbr/type1.jpg"
                             alt="Candybar"
                             onerror="this.classList.add('invalid-image-src')">
                    </div>
                </div>
            </a>
            <a class="stock__product tetragon-6 p-1" href="#">
                <div class="tetragon__wrapper">
                    <div class="tetragon__content">
                        <img class="product__thumb d-block w-100 h-100"
                             src="../../../public/img/pre-loader.gif"
                             data-src="img/cdbr/type2.jpg"
                             alt="Candybar"
                             onerror="this.classList.add('invalid-image-src')">
                    </div>
                </div>
            </a>
        </div>

        <form class="card__form" action="core/sendDessertMail.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 mt-3 include-notification"></div>
                <div class="col-12 mt-3 include-images"></div>
            </div>
            <div class="row py-5">
                <div class="col-12 d-flex justify-content-center">
                    <a href="#" class="btn btn-outline-primary p-4" onclick="proceedToRegistration()">Оформить
                        заявку</a>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('script')
    <script>
        const ID = 1001;
        let ntfArea = new ComponentNotification({
            container: $('.include-notification'),
            productId: ID,
            title: 'Концепция и меню',
            text: 'Опишите ваше видение кэндибара (основная концепция, для какого мероприятия, особые элементы). Укажите количество, виды и вкусы изделий, которые вы бы хотели видеть в кэндибаре'
        });
        let imgList = new ComponentImage({
            container: $('.include-images'),
            id: ID
        });
        let prsCard = new PersonCardModal({
            container: $('body'),
        });
        $('body').off('personModalClosed').on('personModalClosed', function (e, personData) {
            sendData();
        });

        function proceedToRegistration() {
            prsCard.show();
        }

        function sendData() {
            $.post('./core/orderController.php',
                {
                    personData: JSON.stringify(prsCard.getData()),
                    orderData: JSON.stringify({
                        ComponentNotification: ntfArea.getData(),
                        ComponentImage: imgList.getData(),
                    })
                },
                function (data) {
                    new OrderConfirmationModal({
                        content: data
                    })
                })
        }
    </script>
@endsection