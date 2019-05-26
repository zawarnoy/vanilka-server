@extends('layouts.gallery')

@section('content')

    <div class="vnl__article transparent container p-0 mb-0 mt-5">
        <nav aria-label="breadcrumb mb-0 rounded-0 bg-light ">
            <ol class="breadcrumb mb-0 bg-light border-bottom">
                <li class="breadcrumb-item"><a href="{{ asset('') }}">Главная</a></li>
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
                productLink: '/showcase/stuffing',
                productLinkTitle: 'Заказать',
                assetsPath: '{{ asset('') }}',
                galleryContainer: $('.vnl__gallery'),
                src: [
                    {
                        tagList: ["Для мальчиков"],
                        folder: 'img/Cakes/Cakes_for_boy',
                        prefix: 'For_boys',
                        length: 38
                    },
                    {
                        tagList: ["Для мужчин"],
                        folder: 'img/Cakes/Men',
                        prefix: 'Men',
                        length: 36
                    },
                    {
                        tagList: ["Чизкейки"],
                        folder: 'img/Cakes/Cheesecakes',
                        prefix: 'Cheesecakes',
                        length: 18
                    },
                    {
                        tag: ["Корпоративные"],
                        folder: 'img/Cakes/Corporate',
                        prefix: 'Corporate',
                        length: 13
                    },
                    {
                        tagList: ["Для девочек"],
                        folder: 'img/Cakes/Cakes_for_girls',
                        prefix: 'Cakes_for_girls',
                        length: 34
                    },
                    {
                        tagList: ["Для женщин"],
                        folder: 'img/Cakes/Women',
                        prefix: 'Women',
                        length: 21
                    },
                    {
                        tagList: ["Классические"],
                        folder: 'img/Cakes/Classic_decor',
                        prefix: 'Classic_decor',
                        length: 35
                    },
                    {
                        tagList: ["Свадебные"],
                        folder: 'img/Cakes/Wedding_buns',
                        prefix: 'Wedding_buns',
                        length: 13
                    }

                ]
            });

            var urlParams = common.getURLParams();
            console.log(urlParams);
            if (common.isSortActionRequired(urlParams))
                common.sortByTag(urlParams.sortByTag);
            if (common.isSelectTargetImageRequired(urlParams))
                common.findGalleryItemByImageName(urlParams.goto).click();
        });

    </script>
@endsection