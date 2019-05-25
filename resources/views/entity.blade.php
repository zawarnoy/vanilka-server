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
                <img src="../../public/img/Stuffing/type50.jpg" class="table__image-content"/>
            </button>
            <!-- Modal which appears on image click -->
            <div class="modal fade" id="exampleModal1" tabIndex="-1" role="dialog"
                 aria-labelledby="modalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-component__opened">
                        <div class="modal-header modal-header__custom">
                            <img src="../../public/img/Stuffing/type50.jpg"/>
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
        <hr class="tables__divider"/>


        <!-- Image -->
        <div class="entity-page__table__wrapper entity-page__not-last-element">
            <button type="button"
                    class="btn btn-primary tables__table-button"
                    data-toggle="modal"
                    data-target="#exampleModal2"
            >
                <img src="../../public/img/Stuffing/type19.jpg" class="table__image-content"/>
            </button>
            <!-- Modal which appears on image click -->
            <div class="modal fade" id="exampleModal2" tabIndex="-1" role="dialog"
                 aria-labelledby="modalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-component__opened">
                        <div class="modal-header modal-header__custom">
                            <img src="../../public/img/Stuffing/type19.jpg"/>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <span class="table-details__name">Торт творожно-ягодный «Лакшери»</span>
            <!-- Table -->
            <div class="tables__table__details-wrapper">
                <hr class="table-details__divider"/>
                <span class="table-details__description">
                        Нежный бисквит с ванильным кремом на основе сливочного сыра/либо творога, на выбор, и прослойкой из ягод (черника, вишня, клубника), на выбор
                    </span>
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
                        <td>27</td>
                        <td>1-4</td>
                        <td>2 недели**</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>25</td>
                        <td>5-30</td>
                        <td>2 недели**</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>23</td>
                        <td>от 30</td>
                        <td>2 недели**</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr class="tables__divider"/>

        <!-- Image -->
        <div class="entity-page__table__wrapper entity-page__not-last-element">
            <button type="button"
                    class="btn btn-primary tables__table-button"
                    data-toggle="modal"
                    data-target="#exampleModal3"
            >
                <img src="../../public/img/Stuffing/type1.jpg" class="table__image-content"/>
            </button>
            <!-- Modal which appears on image click -->
            <div class="modal fade" id="exampleModal3" tabIndex="-1" role="dialog"
                 aria-labelledby="modalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-component__opened">
                        <div class="modal-header modal-header__custom">
                            <img src="../../public/img/Stuffing/type1.jpg"/>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <span class="table-details__name">Торт морковный «Лакшери»</span>
            <!-- Table -->
            <div class="tables__table__details-wrapper">
                <hr class="table-details__divider"/>
                <span class="table-details__description">
                        Пряные коржи с морковкой и грецкими орехами, с кремом на основе сливочного сыра, может быть дополнен начинкой из черники или домашней карамелью
                    </span>
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
                        <td>27</td>
                        <td>1-4</td>
                        <td>2 недели**</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>25</td>
                        <td>5-30</td>
                        <td>2 недели**</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>23</td>
                        <td>от 30</td>
                        <td>2 недели**</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr class="tables__divider"/>

        <!-- Image -->
        <div class="entity-page__table__wrapper entity-page__not-last-element">
            <button type="button"
                    class="btn btn-primary tables__table-button"
                    data-toggle="modal"
                    data-target="#exampleModal4"
            >
                <img src="../../public/img/Stuffing/type23.jpg" class="table__image-content"/>
            </button>
            <!-- Modal which appears on image click -->
            <div class="modal fade" id="exampleModal4" tabIndex="-1" role="dialog"
                 aria-labelledby="modalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-component__opened">
                        <div class="modal-header modal-header__custom">
                            <img src="../../public/img/Stuffing/type23.jpg"/>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <span class="table-details__name">Торт Красный бархат «Лакшери» (в асортименте)</span>
            <!-- Table -->
            <div class="tables__table__details-wrapper">
                <hr class="table-details__divider"/>
                <span class="table-details__description">
                        Влажный бисквит с шоколадными нотками с кремом на основе сливочного сыра, может быть дополнен лимонным курдом (вид лимонного крема), домашней солёной карамелью, ореховым пралине, на выбор
                </span>
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
                        <td>27</td>
                        <td>1-4</td>
                        <td>2 недели**</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>25</td>
                        <td>5-30</td>
                        <td>2 недели**</td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td>23</td>
                        <td>от 30</td>
                        <td>2 недели**</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr class="tables__divider"/>


        <!-- Image -->
        <div class="entity-page__table__wrapper entity-page__not-last-element">
            <button type="button"
                    class="btn btn-primary tables__table-button"
                    data-toggle="modal"
                    data-target="#exampleModal5"
            >
                <img src="../../public/img/Lollipops/type8.jpg" class="table__image-content"/>
            </button>
            <!-- Modal which appears on image click -->
            <div class="modal fade" id="exampleModal5" tabIndex="-1" role="dialog"
                 aria-labelledby="modalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-component__opened">
                        <div class="modal-header modal-header__custom">
                            <img src="../../public/img/Lollipops/type8.jpg"/>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <span class="table-details__name">Леденцы на палочке «Лакшери»</span>
            <!-- Table -->
            <div class="tables__table__details-wrapper">
                <hr class="table-details__divider"/>
                <span class="table-details__description">
                    Прозрачная конфета на палочке любого цвета и размера, украшенная кондитерской посыпкой или дополненная картинкой.
                </span>
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
                        <td>2.90</td>
                        <td>от 30</td>
                        <td>2 недели**</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr class="tables__divider"/>

        <!-- Image -->
        <div class="entity-page__table__wrapper entity-page__not-last-element">
            <button type="button"
                    class="btn btn-primary tables__table-button"
                    data-toggle="modal"
                    data-target="#exampleModal6"
            >
                <img src="../../public/img/Gingerbread/Gingerbreads_corporeal/type1.jpg" class="table__image-content"/>
            </button>
            <!-- Modal which appears on image click -->
            <div class="modal fade" id="exampleModal6" tabIndex="-1" role="dialog"
                 aria-labelledby="modalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-component__opened">
                        <div class="modal-header modal-header__custom">
                            <img src="../../public/img/Gingerbread/Gingerbreads_corporeal/type1.jpg"/>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <span class="table-details__name">Пряники глазированные «Лакшери»</span>
            <!-- Table -->
            <div class="tables__table__details-wrapper">
                <hr class="table-details__divider"/>
                <span class="table-details__description">
                    Высококачественные, высоковкусные пряники
                </span>
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
                        <td>от 2.5 до 70</td>
                        <td>от 6</td>
                        <td>2 недели**</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr class="tables__divider"/>

        <!-- Image -->
        <div class="entity-page__table__wrapper entity-page__not-last-element">
            <button type="button"
                    class="btn btn-primary tables__table-button"
                    data-toggle="modal"
                    data-target="#exampleModal7"
            >
                <img src="../../public/img/Cupcakes/Cupcakes2.jpg" class="table__image-content"/>
            </button>
            <!-- Modal which appears on image click -->
            <div class="modal fade" id="exampleModal7" tabIndex="-1" role="dialog"
                 aria-labelledby="modalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-component__opened">
                        <div class="modal-header modal-header__custom">
                            <img src="../../public/img/Cupcakes/Cupcakes2.jpg"/>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <span class="table-details__name">Капкейки(в ассортименте)</span>
            <!-- Table -->
            <div class="tables__table__details-wrapper">
                <hr class="table-details__divider"/>
                <span class="table-details__description">
                    Сочный бисквит, нежный крем на основе сливочного сыра различных цветов, украшеный на любой вкус.
                </span>
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
                        <td>2.8</td>
                        <td>от 10</td>
                        <td>2 недели**</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr class="tables__divider"/>

        <!-- Image -->
        <div class="entity-page__table__wrapper entity-page__not-last-element">
            <button type="button"
                    class="btn btn-primary tables__table-button"
                    data-toggle="modal"
                    data-target="#exampleModal8"
            >
                <img src="../../public/img/Trifley/Trifley2.jpg" class="table__image-content"/>
            </button>
            <!-- Modal which appears on image click -->
            <div class="modal fade" id="exampleModal8" tabIndex="-1" role="dialog"
                 aria-labelledby="modalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-component__opened">
                        <div class="modal-header modal-header__custom">
                            <img src="../../public/img/Trifley/Trifley2.jpg"/>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <span class="table-details__name">Трайфлы(в ассортименте)</span>
            <!-- Table -->
            <div class="tables__table__details-wrapper">
                <hr class="table-details__divider"/>
                <span class="table-details__description">
                    Изящная миниатюра любимого торта, порционный десерт в стаканчике.
                </span>
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
                        <td>4.3</td>
                        <td>от 6</td>
                        <td>2 недели**</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr class="tables__divider"/>


    </div>
</div>

@include('parts.footer')

</body>
<script type="text/javascript" src="{{ asset('js/libs.min.js') }}"></script>
</html>