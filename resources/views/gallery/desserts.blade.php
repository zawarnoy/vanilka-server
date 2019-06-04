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
                productLink: '/showcase/desserts',
                productLinkTitle: 'К десертам',
                galleryContainer: $('.vnl__gallery'),
                assetsPath: '{{ asset('') }}',
                src: '{!! $categories !!}'
            });

            var params = common.getURLParams();
            if (common.isSortActionRequired(params))
                common.sortByTag(params.sortByTag);
            if (common.isSelectTargetImageRequired(params))
                common.findGalleryItemByImageName(params.goto).click();
        });
    </script>
@endsection