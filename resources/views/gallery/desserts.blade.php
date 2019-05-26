@extends('layouts.gallery')

@section('content')

    <div class="vnl__article transparent container p-0 mb-0 mt-5">
        <nav aria-label="breadcrumb mb-0 rounded-0 bg-light ">
            <ol class="breadcrumb mb-0 bg-light border-bottom">
                <li class="breadcrumb-item"><a href="{{ route('main') }}">Главная</a></li>
                <li class="breadcrumb-item"><a href="#">Галлерея</a></li>
                <li class="breadcrumb-item active" aria-current="page">Десерты</li>
            </ol>
        </nav>
    </div>

    <div class="vnl__article container">
        <div class="row">
            <div class="container showcase__navbar py-3">
                <div class="d-flex justify-content-center navbar__primary"></div>
                <!--div class="d-flex justify-content-center navbar__secondary"></div-->
            </div>
        </div>
        <div class="row vnl__gallery p-3"></div>
    </div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            App.setAssetsPath("{{ asset('') }}");

            var gallery = new Gallery({
                productLink: 'showcase__dessert.html',
                productLinkTitle: 'К десертам',
                galleryContainer: $('.vnl__gallery'),
                assetsPath: '{{ asset('') }}',
                src: [
                    {
                        tagList: ["Капкейки"],
                        directTransitionTo: 'Капкейки',
                        folder: 'img/Cupcakes',
                        prefix: 'Cupcakes',
                        length: 17
                    },
                    {
                        tagList: ["Зефир"],
                        directTransitionTo: 'Зефир',
                        folder: 'img/Zephyr',
                        prefix: 'Zephyr',
                        length: 5
                    },
                    {
                        tagList: ["Пряники"],
                        directTransitionTo: 'Пряники',
                        folder: 'img/Gingerbread/Heroes_characters',
                        prefix: 'heroBread',
                        length: 19
                    },
                    {
                        tagList: ["Пряники", "Детские"],
                        directTransitionTo: 'Пряники',
                        folder: 'img/Gingerbread/For_children',
                        prefix: 'For_children',
                        length: 37
                    },
                    {
                        tagList: ["Кейкпопсы"],
                        directTransitionTo: 'Кейкпопсы',
                        folder: 'img/Cakepops',
                        prefix: 'cakepops',
                        length: 10
                    },
                    {
                        tagList: ["Мармелад"],
                        directTransitionTo: 'Мармелад',
                        folder: 'img/Marmalade',
                        prefix: 'Marmalade',
                        length: 3
                    },
                    {
                        tagList: ["Леденцы"],
                        directTransitionTo: 'Леденцы',
                        folder: 'img/Lollipops',
                        prefix: 'type',
                        length: 25
                    },
                    {
                        tagList: ["Пряники", "Новогодние"],
                        directTransitionTo: 'Пряники',
                        folder: 'img/Gingerbread/New_Year',
                        prefix: 'New_Year',
                        length: 17
                    },
                    {
                        tagList: ["Трайфлы"],
                        directTransitionTo: 'Трайфлы',
                        folder: 'img/Trifley',
                        prefix: 'Trifley',
                        length: 6
                    },
                    {
                        tagList: ["Маршмеллоу"],
                        directTransitionTo: 'Маршмеллоу',
                        folder: 'img/Marshmalloy',
                        prefix: 'type',
                        length: 2
                    },
                    {
                        tagList: ["Пряники", "Корпоративные"],
                        directTransitionTo: 'Пряники',
                        folder: 'img/Gingerbread/Gingerbreads_corporeal',
                        prefix: 'type',
                        length: 6
                    },
                    {
                        tagList: ["Пряники", "Классические"],
                        directTransitionTo: 'Пряники',
                        folder: 'img/Gingerbread/Heroes_characters',
                        prefix: 'heroBread',
                        length: 19
                    },
                    {
                        tagList: ["Пряники", "Длямужчин"],
                        directTransitionTo: 'Пряники',
                        folder: 'img/Gingerbread/4men',
                        prefix: 'type',
                        length: 3
                    },
                    {
                        tagList: ["Пряники", "Дляженщин"],
                        directTransitionTo: 'Пряники',
                        folder: 'img/Gingerbread/4woman',
                        prefix: 'type',
                        length: 8
                    },
                ]
            });

            var params = common.getURLParams();
            console.log(params);
            if (common.isSortActionRequired(params))
                common.sortByTag(params.sortByTag);
            if (common.isSelectTargetImageRequired(params))
                common.findGalleryItemByImageName(params.goto).click();
        });
    </script>
@endsection