@extends('layouts.showcase')

@section('content')
    <div class="vnl__article transparent container p-0 mb-0 mt-5">
        <nav aria-label="breadcrumb mb-0 rounded-0 bg-light ">
            <ol class="breadcrumb mb-0 bg-light border-bottom">
                <li class="breadcrumb-item"><a href="main.html">Главная</a></li>
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
        <div class="row vnl__showcase p-3"></div>
    </div>

@endsection

@section('script')
    <script>
        window.setting = {};
        window.setting.cakepopsSettings = {
            minimumOrder: '6 шт.',
            cost: 3.70,
            min: 6,
            max: 48,
            step: 1,
            weight: 0.30,
            ration: 6,
            tasteList: [
                {
                    val: 'vanilla_cakepops',
                    name: "Ванильный"
                },
                {
                    val: 'chocolate_cakepops',
                    name: "Шоколадный",
                }
            ],
            note: "В произвольной форме расскажите всё, что поможет мне в осуществлении вашей задумки. На какой праздник " +
                "нужны десерты, для кого, если надо-укажите возраст, в какой цветовой гамме, нужна ли посыпка, бусины. " +
                "Пришлите ссылки понравившихся работ.",
            orderCompletionModal: "#id-card__cakepops-open"
        };
        window.setting.zephyrSettings = {
            minimumOrder: '9 шт.',
            cost: 0.90,
            min: 9,
            max: 45,
            step: 1,
            weight: 0.30,
            ration: 9,
            tasteList: [
                {
                    val: 'zephyr_vanilla',
                    name: "Ванильный"
                },
                {
                    val: 'zephyr_currant',
                    name: "Смородиновый",
                },
                {
                    val: 'zephyr_cranberry',
                    name: "Клюквенный",
                },
                {
                    val: 'zephyr_cranberry',
                    name: "Клубничный",
                },
                {
                    val: 'zephyr_sour',
                    name: "Ягодный микс (с кислинкой)",
                },
                {
                    val: 'zephyr_sweet',
                    name: "Ягодный микс (сладкий)",
                }
            ],
            note: "В произвольной форме расскажите всё, что поможет мне в осуществлении вашей задумки. " +
                "На какой праздник нужны десерты, для кого, если надо-укажите возраст, в какой цветовой гамме, " +
                "нужна ли посыпка, бусины. Пришлите ссылки понравившихся работ.",
            orderCompletionModal: '#id-card__zephyr-open'
        };
        window.setting.marmaladeSettings = {
            minimumOrder: '100гр. (8-10) шт.',
            cost: 0.35,
            min: 10,
            max: 50,
            step: 1,
            weight: 0.10,
            ration: 10,
            tasteList: [
                {
                    val: 'marmalade_pomegranate',
                    name: "Гранатовый"
                },
                {
                    val: 'marmalade_orange',
                    name: "Апельсиновый",
                },
                {
                    val: 'marmalade_cherry',
                    name: "Вишнёвый",
                },
                {
                    val: 'marmalade_cranberry',
                    name: "Клубничный",
                },
                {
                    val: 'marmalade_currant',
                    name: "Смородиновый",
                }
            ],
            note: "В произвольной форме расскажите всё, что поможет мне в осуществлении вашей задумки. " +
                "На какой праздник нужны десерты, для кого, если надо-укажите возраст. " +
                "Пришлите ссылки понравившихся работ.",
            orderCompletionModal: '#id-card__marmalade-open'
        };
        window.setting.trifleySettings = {
            useDefaultCard: false,
            minimumOrder: '6 шт. одного вкуса',
            cost: 5.5,
            min: 6,
            max: 60,
            step: 1,
            weight: 0.250,
            ration: 6,
            tasteList: [
                {
                    val: 'carrot-trifley',
                    name: "Морковный"
                },
                {
                    val: 'pigeons-milk-trifley',
                    name: 'Птичье молоко'
                },
                {
                    val: 'red-velvet-trifley',
                    name: 'Красный бархат'
                },
                {
                    val: 'chocolate-trifley',
                    name: 'Шоколадный'
                },
                {
                    val: 'chocolate-caramel-trifley',
                    name: 'Шоко-карамель'
                },
                {
                    val: 'chocolate-strawberry-trifley',
                    name: "Шоко-вишня"
                },
                {
                    val: 'chocolate-currant-trifley',
                    name: 'Шоко-смородина'
                },
                {
                    val: 'berry-trifley',
                    name: 'Ягодный'
                },
                {
                    val: 'lemon-nut-trifley',
                    name: 'Лимон-орех'
                },
                {
                    val: 'poppy-lemon-trifley',
                    name: 'Маково-лимонный'
                },
                {
                    val: 'poppy-nut-trifley',
                    name: 'Маково-ореховый'
                },
                {
                    val: 'vanilla-blueberries-trifley',
                    name: 'Ваниль-черника'
                },
                {
                    val: 'custom-trifley',
                    name: "Другой вариант(Указать ссылку на разрез в комментариях)"
                }
            ],
            decorList: [
                {name: 'Ягодами'},
                {name: 'Сладостями'},
                {name: 'Тематический (пряник)'},
                {name: 'Не определился'}
            ],
            note: 'В произвольной форме расскажите всё, что поможет мне в осуществлении вашей задумки. ' +
                'На какой праздник нужны десерты, для кого, если надо-укажите возраст, тематику праздника. ' +
                'Нужно ли оформление ягодами, пряниками, бусинами, сладостями итд. Нужна ли цифра, ' +
                'поздравительная надпись. Пришлите ссылки понравившихся работ.',
            orderCompletionModal: '#id-card__trifley-open'
        };
        window.setting.cupcakesSettings = {
            minimumOrder: '6 шт.',
            cost: 3.7,
            min: 6,
            max: 48,
            step: 1,
            weight: 0.100,
            ration: 10,
            tasteList: [
                {
                    val: 'cupcake__red_velvet',
                    name: "Красный бархат"
                },
                {
                    val: 'poppy-cupcake',
                    name: 'Маковый'
                },
                {
                    val: 'vanilla-cupcake',
                    name: 'Ванильный'
                },
                {
                    val: 'blueberry-cupcake',
                    name: "Черничный"
                },
                {
                    val: 'cherry-cupcake',
                    name: 'Вишнёвый'
                },
                {
                    val: 'strawberry-cupcake',
                    name: "Клубничный"
                },
                {
                    val: 'banana-cupcake',
                    name: 'Банановый'
                },
                {
                    val: 'orange-cupcake',
                    name: 'Апельсиновый'
                },
                {
                    val: 'carrot-cupcake',
                    name: 'Морковный'
                },
                {
                    val: 'chocolate-cupcake',
                    name: 'Шоколадный'
                },
                {
                    val: 'chocolate-banana-cupcake',
                    name: 'Шоко-банан'
                },
                {
                    val: 'nut-cupcake',
                    name: 'Ореховый'
                }
            ],
            additionalStuffingList: [
                {name: 'Солёная карамель'},
                {name: 'Лимонный курд'},
                {name: 'Кусочки белого шоколада'},
                {name: 'Кусочки темного шоколада'}
            ],
            decorList: [
                {name: 'Живыми цветами'},
                {name: 'Тематические пряники'},
                {name: 'Картинка, логотип'},
                {name: 'Сезонные ягоды'}
            ],
            note: "В произвольной форме расскажите всё, что поможет мне в осуществлении вашей задумки. " +
                "На какой праздник нужны десерты, для кого, если надо-укажите возраст. В какой цветовой гамме, " +
                "тематику праздника. Нужно ли оформление ягодами, пряниками, бусинами, сладостями итд. Нужна ли цифра, " +
                "поздравительная надпись. Пришлите ссылки понравившихся работ.",
            orderCompletionModal: '#id-card__cupcake-open'

        };
        window.setting.marshmalloySettings = {
            minimumOrder: '100гр. (8-10) шт.',
            cost: 0.35,
            min: 10,
            max: 50,
            step: 1,
            weight: 0.100,
            ration: 10,
            tasteList: [
                {
                    val: 'marshmalloy_cranberry',
                    name: "Клубничный"
                },
                {
                    val: 'marshmalloy_raspberry',
                    name: "Малиновый",
                }
            ],
            note: "В произвольной форме расскажите всё, что поможет мне в осуществлении вашей задумки. " +
                "На какой праздник нужны десерты, для кого, если надо-укажите возраст. " +
                "Пришлите ссылки понравившихся работ.",
            orderCompletionModal: '#id-card__marshmalloy-open'
        };
        window.setting.lollipopsSettings = {
            minimumOrder: '6 шт.',
            min: 6,
            max: 48,
            rations: 6,
            step: 1,
            cost: 2,
            weight: 0.030,
            tasteList: [
                {
                    val: 'single',
                    name: "Единственный"
                }
            ],
            sizeList: [
                {
                    image: './img/Lollipops/type7.jpg',
                    name: 'Диаметр 4,5 - 5 см'
                },
                {
                    image: './img/Lollipops/type6.jpg',
                    name: 'Диаметр 6 - 8 см'
                },
                {
                    image: './img/Lollipops/type8.jpg',
                    name: 'Диаметр 6 - 8 см с картинкой'
                }
            ],
            note: 'В произвольной форме расскажите всё, что поможет мне в осуществлении вашей задумки. ' +
                'На какой праздник, для кого, если надо-укажите возраст, желаемый цвет, нужна ли посыпка, ' +
                'бусины, картинка внутри. Пришлите ссылки понравившихся работ.',
            orderCompletionModal: "#id-card__lollipop-open"
        };
        window.setting.gingerbreadSettings = {
            minimumOrder: '6 шт.',
            min: 6,
            max: 48,
            rations: 6,
            step: 1,
            cost: 2.5,
            weight: 0.100,
            tasteList: [
                {
                    val: 'single',
                    name: "Единственный"
                }
            ],
            note: "В произвольной форме укажите какие пряники нужны, по какому поводу, размер.",
            orderCompletionModal: '#id-card__gingerbread-open'
        };

        let showcase = new Showcase({
            showcaseContainer: $('.vnl__showcase'),
            gridSize: 3,
            assetsPath : '{{asset('')}}'
        });

        $(document).ready(function () {

            setAssetsPath('{{ asset('') }}');

            $(function () {
                $.get("{{asset('src/desserts.json')}}", function (data) {
                    showcase.addRange(data);
                    $('img.product__thumb').lazyLoadXT();
                });

                let urlParams = common.getURLParams();
                console.log(urlParams);

                if (common.isSortActionRequired(urlParams))
                    common.sortByTag(urlParams.sortByTag);

                if (common.isSelectTargetImageRequired(urlParams))
                    common.findGalleryItemByImageName(urlParams.goto).click();

                if (common.isProductDesignSet(urlParams)) {
                    if (common.isDirectTransitionSet(urlParams))
                        common.transitionTo(urlParams.directTransitionTo);
                    else
                        common.openGuideModal();

                    $('body').off('productOpen').on('productOpen', function () {
                        setTimeout(function () {
                            $('.card-img-top').attr('src', urlParams.productDesign);
                        }, 20)
                    })
                }
            });
        });
    </script>
@endsection