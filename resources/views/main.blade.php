@extends('layouts.layout')

@section('content')
    <div class="vnl__container vnl__slider container mt-5">
        <div id="vnl__slider-body" class="carousel slide vnl__banner-container" data-ride="carousel">
            <ol class="carousel-indicators">
                @for($i=0; $i++; $i < count($sliderPosts))
                    <li data-target="#vnl__slider-body" data-slide-to="{{ $i }}" class="active"></li>
                @endfor
            </ol>
            @foreach($sliderPosts as $post)
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="vnl__banner" src="{{asset("")}}"
                             onerror="this.classList.add('invalid-image-src')" alt="Slide">
                        <div class="vnl__banner-caption carousel-caption d-none d-md-block d-flex align-items-center justify-content-center">
                            <div class="vnl__banner-content">
                                <h3></h3>
                                <a href="{{ $post['link'] }}" class="btn btn-outline-primary mt-3"></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="vnl__banner" src="{{asset("img/processed/slide2.jpg")}}"
                             onerror="this.classList.add('invalid-image-src')" alt="Second slide">
                        <div class="vnl__banner-caption carousel-caption d-none d-md-block d-flex align-items-center justify-content-center">
                            <div class="vnl__banner-content">
                                <h3>Любой каприз за ваши деньги</h3>
                                <a href="gallery__cakes.html" class="btn btn-outline-primary mt-3">Что у вас есть?</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="vnl__banner" src="{{asset("img/processed/slide3.jpg")}}"
                             onerror="this.classList.add('invalid-image-src')" alt="Third slide">
                        <div class="vnl__banner-caption carousel-caption d-none d-md-block d-flex align-items-center justify-content-center">
                            <div class="vnl__banner-content">
                                <h3>Пряники по индивидуальному заказу</h3>
                                <a href="gallery__dessert.html?sortByTag=Пряники"
                                   class="btn btn-outline-primary mt-3">Пряники</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <a class="carousel-control-prev" href="#vnl__slider-body" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Туда</span>
            </a>
            <a class="carousel-control-next" href="#vnl__slider-body" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Сюда</span>
            </a>
        </div>
    </div>

    <div class="vnl__article container mt-5 pl-2" style="padding-right: 20px!important">
        <h2 class="w-100 text-center my-3 pt-2">Популярные товары</h2>
        <div class="vnl__popular-goods row p-2">
            <div class="popular-goods__most-viewed col-md-6 pt-3 pr-0" style="padding-left: 14px!important;">

                <a class="stock__product tetragon-12" href="gallery__cakes.html?goto=Women13">
                    <div class="tetragon__wrapper">
                        <div class="tetragon__content">
                            <img class="product__thumb d-block w-100 mh-100"
                                 src="../../public/img/pre-loader.gif"
                                 data-src="img/Popular/type1.jpg"
                                 alt="Торт для любимой мамочки"
                                 data-src-small="small-image.jpg"
                                 onerror="this.classList.add('invalid-image-src')">
                            <div class="product__description">
                                <h2>Торт "Любимой мамочке"</h2>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="popular-goods__less-viewed col-md-6 d-flex flex-column">
                <div class="row h-100">
                    <div class="col-sm-6 pt-3 pr-0">

                        <a class="stock__product tetragon-12" href="gallery__dessert.html?goto=Trifley2">
                            <div class="tetragon__wrapper">
                                <div class="tetragon__content">
                                    <img class="product__thumb d-block w-100 h-100"
                                         src="../../public/img/pre-loader.gif"
                                         data-src="img/Popular/type4.jpg"
                                         alt="Трайфлы 'Красный бархат'"
                                         onerror="this.classList.add('invalid-image-src')">
                                    <div class="product__description">
                                        <h2>Трайфлы "Красный бархат"</h2>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-sm-6 pt-3 pr-0">

                        <a class="stock__product tetragon-12" href="gallery__dessert.html?goto=heroBread11">
                            <div class="tetragon__wrapper">
                                <div class="tetragon__content">
                                    <img class="product__thumb d-block w-100 h-100"
                                         src="../../public/img/pre-loader.gif"
                                         data-src="img/Popular/type3.jpg"
                                         alt="Пряник 'Марвел'"
                                         onerror="this.classList.add('invalid-image-src')">
                                    <div class="product__description">
                                        <h2>Пряники 'Марвел'</h2>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="row h-100">
                    <div class="col-sm-6 pt-3 pr-0">

                        <a class="stock__product tetragon-12" href="gallery__cakes.html?goto=Cheesecakes12">
                            <div class="tetragon__wrapper">
                                <div class="tetragon__content">
                                    <img class="product__thumb d-block w-100 h-100"
                                         src="../../public/img/pre-loader.gif"
                                         data-src="img/Popular/type5.jpg"
                                         alt="Чизкейк"
                                         onerror="this.classList.add('invalid-image-src')">
                                    <div class="product__description">
                                        <h2>Чизкейк</h2>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-sm-6 pt-3 pr-0">

                        <a class="stock__product tetragon-12" href="showcase__stuffing.html?goto=type47">
                            <div class="tetragon__wrapper">
                                <div class="tetragon__content">
                                    <img class="product__thumb d-block w-100 h-100"
                                         src="../../public/img/pre-loader.gif"
                                         data-src="img/Popular/type2.jpg"
                                         alt="Маково-ореховый торт"
                                         onerror="this.classList.add('invalid-image-src')">
                                    <div class="product__description">
                                        <h2>Маково-ореховый торт</h2>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="vnl__article container mt-5 pb-3">
        <h2 class="w-100 text-center my-3 pt-2">Ассортимент товаров</h2>
        <div class="row m-0">

            <div class="col-md pr-md-2">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row mb-3">

                            <a class="stock__product tetragon-12" href="gallery__dessert.html?sortByTag=Трайфлы"
                               style='max-height: 245px'>
                                <div class="tetragon__wrapper">
                                    <div class="tetragon__content" style='max-height: 245px'>
                                        <img class="product__thumb d-block w-100 mh-100"
                                             src="../../public/img/pre-loader.gif"
                                             data-src="img/Assortiment/type1.jpg"
                                             alt="Категория 'Капкейки, Кейпопсы, Трайфлы'"
                                             onerror="this.classList.add('invalid-image-src')">
                                        <div class="product__description">
                                            <h2>Капкейки, Кейпопсы, Трайфлы</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="row mb-3">

                            <a class="stock__product tetragon-12" href="gallery__cakes.html?sortByTag=Свадебные"
                               style='max-height: 245px'>
                                <div class="tetragon__wrapper">
                                    <div class="tetragon__content" style='max-height: 245px'>
                                        <img class="product__thumb d-block w-100 mh-100"
                                             src="../../public/img/pre-loader.gif"
                                             data-src="img\Cakes\Wedding_buns\Wedding_buns1.jpg"
                                             alt="Категория 'Свадебная выпечка'"
                                             onerror="this.classList.add('invalid-image-src')">
                                        <div class="product__description">
                                            <h2>Свадебные торты</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-sm-6 mb-3 px-0 px-sm-3">

                        <a class="stock__product " href="gallery__cakes.html?sortByTag=Классические"
                           style="max-height:510px">
                            <img class="product__thumb d-block w-100"
                                 src="../../public/img/pre-loader.gif"
                                 data-src="img\Cakes\Classic_decor\Classic_decor1.jpg"
                                 alt="Категория 'Торты'"
                                 onerror="this.classList.add('invalid-image-src')">
                            <div class="product__description">
                                <h2>Торты</h2>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-md pl-md-2 ">
                <div class="row h-100">
                    <div class="col-sm-6 mb-3 px-0 px-sm-3">

                        <a class="stock__product" href="gallery__dessert.html?sortByTag=Пряники"
                           style="max-height:510px">
                            <img class="product__thumb d-block w-100 mh-100"
                                 src="../../public/img/pre-loader.gif"
                                 data-src="img/Gingerbread/For_children/For_children16.jpg"
                                 alt="Категория 'Пряники и Леденцы'"
                                 onerror="this.classList.add('invalid-image-src')">
                            <div class="product__description">
                                <h2>Пряники, леденцы</h2>
                            </div>
                        </a>

                    </div>
                    <div class="col-sm-6 d-flex flex-column">
                        <div class="row h-100 mb-3">

                            <a class="stock__product tetragon-12" href="gallery__dessert.html?sortByTag=zephyr"
                               style='max-height: 245px'>
                                <div class="tetragon__wrapper">
                                    <div class="tetragon__content" style='max-height: 245px'>
                                        <img class="product__thumb d-block w-100"
                                             src="../../public/img/pre-loader.gif"
                                             data-src="img/Assortiment/type3.jpg"
                                             alt="Категория 'Зефир, мармелад, маршмеллоу'"
                                             onerror="this.classList.add('invalid-image-src')">
                                        <div class="product__description">
                                            <h2>Зефир, мармелад, маршмеллоу</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="row mb-3 h-100">

                            <a class="stock__product tetragon-12" href="showcase__candybar.html"
                               style='max-height: 245px'>
                                <div class="tetragon__wrapper">
                                    <div class="tetragon__content" style='max-height: 245px'>
                                        <img class="product__thumb d-block w-100"
                                             src="../../public/img/pre-loader.gif"
                                             data-src="img/Assortiment/type2.jpg"
                                             alt="Категория 'Candy Bar'"
                                             onerror="this.classList.add('invalid-image-src')">
                                        <div class="product__description">
                                            <h2>Candy Bar</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="vnl__article !transparent container mt-5 mb-5 pb-4">
        <div class="row">
            <div class="col-md-9">
                <!--<h2 class="w-100 text-center my-3 pt-2">Обо мне</h2> -->
                <div class="row">
                    <div class="col-4">
                        <img width='100%' src="../../public/img/processed/aboutme.jpg"
                             alt="Это я, прошу любить и жаловать">
                    </div>
                    <div class="col d-flex align-items-center">
                        В сентябре 2014-го Тони Навари, который выполнял грязную работу, убил двух мужчин в ресторане в
                        здании Венского западного вокзала. Когда я приехал туда, чтобы разобраться, я нашел Тони под
                        кухонный плитой. Пуля разорвала его в клочья и он попросил у меня сделать чизкейк. Я встал в
                        большую
                        лужу крови и начал готовить. Я сказал, что все будет в порядке. Он ответил, что он в
                        предвкушении
                        еды . Хотя он знал, что у него вместо желудка огромная кровоточащая дыра.
                    </div>
                </div>
            </div>
            <div class="col-3 d-none d-md-block">
                <div class="w-100 h-100 d-flex align-items-center justify-content-center">
                    <i class="icon icon__xl icon__logo_full"></i>
                </div>
            </div>
        </div>
    </div>

    <div id="faq-modal-open" data-izimodal-title="Вопросы|Ответы"
         data-izimodal-subtitle="Ответы на часто задаваемые вопросы">
        <div class="skit-modal__body p-3 pb-5">
            <div class="accordion" id="faq__accordion">
                <!--1-->
                <div class="product-review">
                    <div class="card-header" id="faq__heading-1">
                        <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#faq__collapse-1"
                                    aria-expanded="true" aria-controls="faq__collapse-1">
                                Как хранить торт/десерты?
                            </button>
                        </h5>
                    </div>
                    <div id="faq__collapse-1" class="collapse show" aria-labelledby="faq__heading-1"
                         data-parent="#faq__accordion">
                        <div class="card-body">
                            В холодильнике, перед употреблением дайте ему постоять немного при комнатной температуре
                        </div>
                    </div>
                </div>
                <!--2-->
                <div class="product-review">
                    <div class="card-header" id="faq__heading-2">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#faq__collapse-2" aria-expanded="false"
                                    aria-controls="faq__collapse-2">
                                Можно ли изменить, отменить заказ?
                            </button>
                        </h5>
                    </div>
                    <div id="faq__collapse-2" class="collapse" aria-labelledby="faq__heading-2"
                         data-parent="#faq__accordion">
                        <div class="card-body">
                            Да, но не позже чем за 5 дней до даты выполнения. Свяжитесь со мной удобным Вам способом.
                        </div>
                    </div>
                </div>
                <!--3-->
                <div class="product-review">
                    <div class="card-header" id="faq__heading-3">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#faq__collapse-3" aria-expanded="false"
                                    aria-controls="faq__collapse-3">
                                За какое время нужно сделать заказ?
                            </button>
                        </h5>
                    </div>
                    <div id="faq__collapse-3" class="collapse" aria-labelledby="faq__heading-3"
                         data-parent="#faq__accordion">
                        <div class="card-body">
                            Как можно раньше. Если ещё не определились с заказом, свяжитесь со мной и забронируйте дату.
                        </div>
                    </div>
                </div>
                <!--4-->
                <div class="product-review">
                    <div class="card-header" id="faq__heading-4">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#faq__collapse-4" aria-expanded="false"
                                    aria-controls="faq__collapse-4">
                                Можно ли сделать торт/десерты с мастикой?
                            </button>
                        </h5>
                    </div>
                    <div id="faq__collapse-4" class="collapse" aria-labelledby="faq__heading-4"
                         data-parent="#faq__accordion">
                        <div class="card-body">
                            Нет. Это не современно, сильно снижает полезный вес торта ( мастику обычно выкидывают, а это
                            ¼
                            веса торта). Вместо этого могу покрыть торт кремом и поставить съедобные пряники. <a
                                    href="gallery__cakes.html">См фото работ</a>
                        </div>
                    </div>
                </div>
                <!--5-->
                <div class="product-review">
                    <div class="card-header" id="faq__heading-5">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#faq__collapse-5" aria-expanded="false"
                                    aria-controls="faq__collapse-5">
                                Можно ли повторить чужой торт/пряники/десерты?
                            </button>
                        </h5>
                    </div>
                    <div id="faq__collapse-5" class="collapse" aria-labelledby="faq__heading-5"
                         data-parent="#faq__accordion">
                        <div class="card-body">
                            Да, если это <a href="gallery__cakes.html">в моём стиле</a>
                        </div>
                    </div>
                </div>
                <!--6-->
                <div class="product-review">
                    <div class="card-header" id="faq__heading-6">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#faq__collapse-6" aria-expanded="false"
                                    aria-controls="faq__collapse-6">
                                Как перевозить торт/десерты?
                            </button>
                        </h5>
                    </div>
                    <div id="faq__collapse-6" class="collapse" aria-labelledby="faq__heading-6"
                         data-parent="#faq__accordion">
                        <div class="card-body">
                            Перевозить лучше всего на ровном полу автомобиля. В жару обязательно включайте кондиционер.
                            Чем
                            выше и больше торт, тем аккуратнее нужно ехать, чтобы ярусы не поехали.
                        </div>
                    </div>
                </div>
                <!--7-->
                <div class="product-review">
                    <div class="card-header" id="faq__heading-7">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#faq__collapse-7" aria-expanded="false"
                                    aria-controls="faq__collapse-7">
                                Можно и заказать диетический/веганский торт/десерты?
                            </button>
                        </h5>
                    </div>
                    <div id="faq__collapse-7" class="collapse" aria-labelledby="faq__heading-7"
                         data-parent="#faq__accordion">
                        <div class="card-body">
                            Нет, мои торты/десерты содержат муку, сахар, молочные продукты и яйца, которые я не могу
                            заменить. Есть возможность использовать перепелиные яйца. При заказе указывайте
                            необходимость.
                        </div>
                    </div>
                </div>
                <!--8-->
                <div class="product-review">
                    <div class="card-header" id="faq__heading-8">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#faq__collapse-8" aria-expanded="false"
                                    aria-controls="faq__collapse-8">
                                Входит ли транспортировочная упаковка в стоимость?
                            </button>
                        </h5>
                    </div>
                    <div id="faq__collapse-8" class="collapse" aria-labelledby="faq__heading-8"
                         data-parent="#faq__accordion">
                        <div class="card-body">
                            Нет
                        </div>
                    </div>
                </div>
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
                Оформление в любом цвете, градиент, мазки, несколько цветов, стекающая глазурь любого цвета, сезонные
                ягоды,
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

    <script type="text/javascript" src="{{asset("js/libs.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/bundle.js")}}"></script>
    <script>
        $(function () {
            $("#decorate-modal-open,#delivery-modal-open,#faq-modal-open").iziModal({
                headerColor: common.primaryColor
            });
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script>
        $(function () {
            $('img.product__thumb').lazyLoadXT();
        });
    </script>

@endsection