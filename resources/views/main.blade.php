@extends('layouts.layout')

@section('content')
    <div class="vnl__container vnl__slider container mt-5">
        <div id="vnl__slider-body" class="carousel slide vnl__banner-container" data-ride="carousel">
            <ol class="carousel-indicators">
                @for($i=0; $i < count($sliderPosts);$i++)
                    <li data-target="#vnl__slider-body" data-slide-to="{{ $i }}" class="{{ !$i ? 'active' : '' }}"></li>
                @endfor
            </ol>

            <div class="carousel-inner">
                @php($i=0)
                @foreach($sliderPosts as $post)
                    <div class="carousel-item {{ !$i ? 'active' : '' }}">
                        <img class="vnl__banner" src="{{asset($post['img'])}}"
                             onerror="this.classList.add('invalid-image-src')" alt="Slide {{$i}}">
                        <div class="vnl__banner-caption carousel-caption d-none d-md-block d-flex align-items-center justify-content-center">
                            <div class="vnl__banner-content">
                                <h3>{{ $post['title'] }}</h3>
                                <a href="{{ $post['linkHref'] }}"
                                   class="btn btn-outline-primary mt-3">{{ $post['linkText'] }}</a>
                            </div>
                        </div>
                    </div>
                    @php($i++)
                @endforeach
            </div>

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

    @if (!empty($popularProducts) && count($popularProducts) > 4)

        <div class="vnl__article container mt-5 pl-2" style="padding-right: 20px!important">
            <h2 class="w-100 text-center my-3 pt-2">Популярные товары</h2>
            <div class="vnl__popular-goods row p-2">
                <div class="popular-goods__most-viewed col-md-6 pt-3 pr-0" style="padding-left: 14px!important;">
                    <a class="stock__product tetragon-12 popular-product-link" href="#" data-name="{{ $popularProducts[0]->title }}">
                        <div class="tetragon__wrapper">
                            <div class="tetragon__content">
                                <img class="product__thumb d-block w-100 mh-100"
                                     src="../../public/img/pre-loader.gif"
                                     data-src="{{ Voyager::image($popularProducts[0]->image) }}"
                                     alt="{{ $popularProducts[0]->title }}"
                                     data-src-small="small-image.jpg"
                                     onerror="this.classList.add('invalid-image-src')">
                                <div class="product__description">
                                    <h2>{{ $popularProducts[0]->title }}</h2>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="popular-goods__less-viewed col-md-6 d-flex flex-column">
                    <div class="row h-100">
                        @for($i = 1; $i < 3; $i++)
                            <div class="col-sm-6 pt-3 pr-0">
                                <a class="stock__product tetragon-12 popular-product-link" href="#" data-name="{{ $popularProducts[$i]->title }}">
                                    <div class="tetragon__wrapper">
                                        <div class="tetragon__content">
                                            <img class="product__thumb d-block w-100 h-100"
                                                 src="../../public/img/pre-loader.gif"
                                                 data-src="{{ Voyager::image($popularProducts[$i]->image) }}"
                                                 alt="{{ $popularProducts[$i]->title }}"
                                                 onerror="this.classList.add('invalid-image-src')">
                                            <div class="product__description">
                                                <h2>{{ $popularProducts[$i]->title }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                    <div class="row h-100">
                        @for($i = 3; $i < 5; $i++)
                            <div class="col-sm-6 pt-3 pr-0">
                                <a class="stock__product tetragon-12 popular-product-link" href="#" data-name="{{ $popularProducts[$i]->title }}">
                                    <div class="tetragon__wrapper">
                                        <div class="tetragon__content">
                                            <img class="product__thumb d-block w-100 h-100"
                                                 src="../../public/img/pre-loader.gif"
                                                 data-src="{{ Voyager::image($popularProducts[$i]->image) }}"
                                                 alt="{{ $popularProducts[$i]->title }}"
                                                 onerror="this.classList.add('invalid-image-src')">
                                            <div class="product__description">
                                                <h2>{{ $popularProducts[$i]->title }}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="vnl__article container mt-5 pb-3">
        <h2 class="w-100 text-center my-3 pt-2">Ассортимент товаров</h2>
        <div class="row m-0">

            <div class="col-md pr-md-2">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row mb-3">

                            <a class="stock__product tetragon-12" href="gallery/desserts?sortByTag=Трайфлы"
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

                            <a class="stock__product tetragon-12" href="gallery/cakes?sortByTag=Свадебные"
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

                        <a class="stock__product " href="gallery/cakes?sortByTag=Классические"
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

                        <a class="stock__product" href="gallery/desserts?sortByTag=Пряники"
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

                            <a class="stock__product tetragon-12" href="gallery/desserts?sortByTag=zephyr"
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

                            <a class="stock__product tetragon-12" href="showcase/candybar"
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

    <script type="text/javascript" src="{{asset("js/libs.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/bundle.js")}}"></script>

    @include('parts.modals')

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
