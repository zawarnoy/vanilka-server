<!DOCTYPE html>
<html lang="en">

@include('parts.header')

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
        <!-- Image -->
        <div class="entity-page__table__wrapper entity-page__not-last-element">
            <button type="button"
                    class="btn btn-primary tables__table-button"
                    data-toggle="modal"
                    data-target="#exampleModal1"
            >
                <img src="./img/Stuffing/type50.jpg" class="table__image-content"/>
            </button>
            <!-- Modal which appears on image click -->
            <div class="modal fade" id="exampleModal1" tabIndex="-1" role="dialog"
                 aria-labelledby="modalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-component__opened">
                        <div class="modal-header modal-header__custom">
                            <img src="./img/Stuffing/type50.jpg"/>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <span class="table-details__name">Торт-чизкейк «Лакшери»</span>
            <!-- Table -->
            <div class="tables__table__details-wrapper">
                <hr class="table-details__divider"/>
                <span class="table-details__description">
                        Варианты: «Классический», «Орео», «Лайм», «Шоко»
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
                            <th scope="row">1кг/шт.</th>
                            <td>25</td>
                            <td>1-4</td>
                            <td>2 недели**</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>23</td>
                            <td>5-30</td>
                            <td>2 недели**</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>21.4</td>
                            <td>от 30</td>
                            <td>2 недели**</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr class="tables__divider"/>

    </div>
</div>

<script type="text/javascript" src="{{ asset('js/libs.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bundle.js') }}"></script>

@include('parts.modals')
@include('parts.footer')

</body>
</html>