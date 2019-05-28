<!DOCTYPE html>
<html lang="en">

@include('parts.header')

<link type="text/css" rel="stylesheet" href="{{asset("css/menu_with_opacity.css")}}">


<body>

<div class="entity-page__wrapper">

    @include('parts.menu')

    <div class="entity-page__page-name__wrapper">
        <span class="entity-page__page-name">Общества с ограниченной ответственностью «Ванилькабай торты и пирожные»</span>
    </div>
    <div class="entity-page__description__wrapper">
            <span class="entity-page__description">
                <div>220018, г.Минск, ул.Шаранговича, д.19, корп.1</div>
                <div>УНП 193199379, ОКПО 502669445000, Р/С BY70OLMP30120001185770000933</div>
                <div>в ОАО «Белгазпромбанк»,220121, г. Минск, ул.Притыцкого, 60/2</div>
            </span>
    </div>

    <div class="entity-page__tables__wrapper">
        <hr class="tables__divider"/>

        @for($i = 0; $i < count($items); $i++)
            <div class="entity-page__table__wrapper entity-page__not-last-element">
                <button type="button"
                        class="btn btn-primary tables__table-button"
                        data-toggle="modal"
                        data-target="#exampleModal{{ $i }}"
                >
                    <img src="{{ \TCG\Voyager\Facades\Voyager::image($items[$i]->image) }}"
                         class="table__image-content"/>
                </button>
                <!-- Modal which appears on image click -->
                <div class="modal fade" id="exampleModal{{ $i }}" tabIndex="-1" role="dialog"
                     aria-labelledby="modalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content modal-component__opened">
                            <div class="modal-header modal-header__custom">
                                <img src="{{ \TCG\Voyager\Facades\Voyager::image($items[$i]->image) }}"/>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="table-details__name">{{ $items[$i]->title }}</span>
                <!-- Table -->
                <div class="tables__table__details-wrapper">
                    <hr class="table-details__divider"/>
                    <span class="table-details__description">
                        {{ $items[$i]->description }}
                </span>
                    <div class="table__wrapper">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Ед. измерения</th>
                                <th scope="col">Цена(бел.руб)</th>
                                <th scope="col">Кол-во(шт.)</th>
                                <th scope="col">Отсрочка</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">{{ $items[$i]->units }}.</th>
                                <td>{{ $items[$i]->price1 }}</td>
                                <td>{{ $items[$i]->count1 }}</td>
                                <td>{{ $items[$i]->delay1 }}</td>
                            </tr>
                            @if ($items[$i]->price2)
                                <tr>
                                    <th scope="row"></th>
                                    <td>{{ $items[$i]->price2 }}</td>
                                    <td>{{ $items[$i]->count2 }}</td>
                                    <td>{{ $items[$i]->delay2 }}</td>
                                </tr>
                            @endif
                            @if ($items[$i]->price3)
                                <tr>
                                    <th scope="row"></th>
                                    <td>{{ $items[$i]->price3 }}</td>
                                    <td>{{ $items[$i]->count3 }}</td>
                                    <td>{{ $items[$i]->delay3 }}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr class="tables__divider"/>
        @endfor

    </div>

    <div class="container">
        <div class="row">
            <h2 style="width: 100%; text-align: center">Примечания</h2>
        </div>
        <ul>
            <li>НА ПРОДУКЦИЮ ЕСТЬ ДЕКЛАРАЦИИ СООТВЕТСТВИЯ</li>
            <li>ПЕРВАЯ ПАРТИЯ ОТ 200 РУБ ПО ПРЕДОПЛАТЕ</li>
            <li>ВСЯ ПРОДУКЦИЯ СВЕЖАЯ, НЕ МОРОЖЕНИЯ</li>
            <li>СРОК ГОДНОСТИ ПРЯНИКИ 20 СУТОК, ЗЕФИР 30 СУТОК, ЛЕДЕНЦЫ 6 МЕС., ТОРТЫ/ КАПКЕЙКИ/ ТРАЙФЛЫ 72 ЧАСА</li>
            <li>ДОСТАВКА: бесплатно при заказа от 150 руб или при заказе 220 в течение раб.недели. Также
                возможен самовывоз с ул. Шаранговича 19
            </li>
        </ul>
        {{--        <div class="row">--}}
        {{--            <h6>НА ПРОДУКЦИЮ ЕСТЬ ДЕКЛАРАЦИИ СООТВЕТСТВИЯ</h6>--}}
        {{--        </div>--}}
        {{--        <div class="row">--}}
        {{--            <h6>*ПЕРВАЯ ПАРТИЯ ОТ 200 РУБ ПО ПРЕДОПЛАТЕ;</h6>--}}
        {{--        </div>--}}

        {{--        <div class="row">--}}
        {{--            <h6>**ВСЯ ПРОДУКЦИЯ СВЕЖАЯ, НЕ МОРОЖЕНИЯ;</h6>--}}
        {{--        </div>--}}
        {{--        <div class="row">--}}
        {{--            <h6>***СРОК ГОДНОСТИ: ПРЯНИКИ 20 СУТОК, ЗЕФИР 30 СУТОК, ЛЕДЕНЦЫ 6 МЕС., ТОРТЫ/ КАПКЕЙКИ/ ТРАЙФЛЫ 72 ЧАСА;</h6>--}}
        {{--        </div>--}}
        {{--        <div class="row">--}}
        {{--            <h6>***ДОСТАВКА: бесплатно при заказа от 150 руб или при заказе 220 в течение раб.недели. Также--}}
        {{--                возможен самовывоз с ул. Шаранговича 19.</h6>--}}
        {{--        </div>--}}
        <div class="row">
            <h4 style="width: 100%; text-align: center"><a href="{{ route('main') }}">ФОТО ПРОДУКЦИИ</a></h4>
        </div>

    </div>

</div>

</div>

<script type="text/javascript" src="{{ asset('js/libs.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bundle.js') }}"></script>

@include('parts.modals')
@include('parts.footer')

</body>
</html>