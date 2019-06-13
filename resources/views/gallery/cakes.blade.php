@extends('layouts.gallery')

@section('content')

    <div class="vnl__article transparent container p-0 mb-0 mt-5">
        <nav aria-label="breadcrumb mb-0 rounded-0 bg-light ">
            <ol class="breadcrumb mb-0 bg-light border-bottom">
                <li class="breadcrumb-item"><a href="{{ route('main') }}">Главная</a></li>
                <li class="breadcrumb-item active"><a href="#">Галлерея Тортов</a></li>
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
                    src: JSON.parse('{!! $categories !!}')
                }
            );

            var urlParams = common.getURLParams();
            if (common.isSortActionRequired(urlParams))
                common.sortByTag(urlParams.sortByTag);
            if (common.isSelectTargetImageRequired(urlParams))
                common.findGalleryItemByImageName(urlParams.goto).click();
        });

    </script>
@endsection