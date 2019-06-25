@extends('layouts.showcase')

@section('content')
    <div class="vnl__article transparent container p-0 mb-0">
        <nav aria-label="breadcrumb mb-0 rounded-0 bg-light ">
            <ol class="breadcrumb mb-0 bg-light border-bottom">
                <li class="breadcrumb-item"><a href="{{ route('main') }}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Начинки</li>
            </ol>
        </nav>
    </div>

    <div class="vnl__article container">
        <div class="row">
            <div class="container showcase__navbar py-3">
                <!--<div class="d-flex justify-content-center navbar__primary"></div>-->
                <div class="d-flex justify-content-between navbar__secondary"></div>
            </div>
        </div>
        <div class="row vnl__showcase p-3"></div>
    </div>
@endsection

@section('script')
    <script>
        window.setting = {};
        window.setting.stuffingSettings = {
            thumbnailsCaption: 'Примеры возможных исполнений этой начинки',
            variantsOfExecution: false,
            minimumOrder: '2 кг',
            cost: 35,
            min: 4,
            max: 24,
            step: 1,
            weight: 0.5,
            ration: 0.4,
            tasteList: [
                {
                    val: 'single',
                    name: "Единственный"
                }
            ],
            decorCaption: 'Дополнительно оплачивается',
            decorList: [
                {name: 'Пряники: высокой сложности ( герои, тематические пряники)'},
                {name: 'Пряники средней сложности ( цифры надписи мелкий пряничный тематический декор)'},
                {name: 'Средней сложности ( звёздочки, цветочки)'},
                {name: 'Мини-бутылка алкоголя'},
                {name: 'Несезонные ягоды'},
                {name: 'Топпер (пластик, дерево, стекло)'},
                {name: 'Картинка на сахарной печати'},
                {name: 'Макаруны'},
                {name: 'Декор живыми цветами'},
                {name: 'Леденцы'},
                {name: 'Ваш индивидуальный декор'}
            ],
            note: '    Расскажите (Опишите) в произвольной форме всё, что поможет мне в осуществлении вашей задумки. ' +
                'На какой праздник нужен торт, для кого, если надо-укажите возраст. В какой цветовой гамме, тематику торта.' +
                'Нужно ли оформление пряниками, ягодами, фруктами, живыми цветами, сладостями итд, нужна ли цифра, поздравительная надпись.' +
                '\n    При необходимости Вы можете вставить ссылки понравившихся работ, либо прикрепить фотографии или картинки. ' +
                '\n    В многоярусных тортах можно комбинировать начинки',
            breakpoints: [
                {
                    "icon": "<i class='icon icon__cake_two-levels'></i><span>2 яруса</span>",
                    'className': 'revert',
                    "value": 9,
                },
                {
                    "icon": "<i class='icon icon__cake_three-levels'></i><span>3 яруса</span>",
                    "value": 14
                },
                {
                    "icon": "<i class='icon icon__cake_four-levels'></i><span>4 яруса</span>",
                    "value": 18
                }
            ],
            orderCompletionModal: '#id-card-open'
        };

        App.setAssetsPath("{{ asset('') }}");

        var showcase = new Showcase({
            showcaseContainer: $('.vnl__showcase'),
            gridSize: 3,
            orderType: 'stuffing'
        });

        $(function () {
            showcase.addRange({!! $categories !!});
            // console.log('file:');
            // console.log(data);
            // console.log('db');
            {{--                console.log({!! $categories !!});--}}
            $('img.product__thumb').lazyLoadXT();

            var urlParams = common.getURLParams();
            // console.log(urlParams);

            if (common.isSortActionRequired(urlParams))
                common.sortByTag(urlParams.sortByTag);

            if (common.isSelectTargetImageRequired(urlParams))
                common.findGalleryItemByImageName(urlParams.goto).click();

            if (common.isProductDesignSet(urlParams)) {
                common.openGuideModal();
                $('body').off('productOpen').on('productOpen', function () {
                    setTimeout(function () {
                        $('.card-img-top').attr('src', urlParams.productDesign);
                    }, 20)
                })
            }
        });
    </script>
@endsection