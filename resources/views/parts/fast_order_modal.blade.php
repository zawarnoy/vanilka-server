<div id="modal" class="skit__iziModal person-modal iziModal" aria-hidden="false" aria-labelledby="modal" role="dialog"
     style="z-index: 2000; border-radius: 3px; border-bottom: 3px solid rgb(121, 74, 94); overflow: hidden; max-width: 600px; display: block; height: 554px;">
    <div class="iziModal-header" style="background: rgb(121, 74, 94); padding-right: 44px;"><i
                class="iziModal-header-icon .icon .icon__logo"></i>
        <h2 class="iziModal-header-title">Шаг 2</h2>
        <p class="iziModal-header-subtitle">Расскажите о себе</p>
        <div class="iziModal-header-buttons"><a href="javascript:void(0)" class="iziModal-button iziModal-button-close"
                                                data-izimodal-close=""></a></div>
    </div>
    <div class="iziModal-wrap" style="height: auto;">
        <div class="iziModal-content" style="padding: 0px;">
            <form class="orderOver">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12"><label class="mt-3 text-dark">Фамилия :</label><input
                                    class="form-control text-dark" type="text" placeholder="Фамилия" name="lastName">
                        </div>
                        <div class="col-sm-12"><label class="mt-3 text-dark">Имя* :</label><input
                                    class="form-control text-dark" type="text" placeholder="Имя" name="firstName"
                                    required="required"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12"><label class="mt-3 text-dark">Телефон для связи* :</label><input
                                    class="form-control text-dark" type="text" placeholder="+375(ХХ)ХХХ-ХХ-ХХ"
                                    name="phone" required="required"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-12"><label class="mt-3 text-dark">Адрес электронной почты* :</label><input
                                    class="form-control text-dark" type="text" placeholder="Example@mail.com"
                                    name="email" required="required"></div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12 d-flex justify-content-center"><input type="submit" id="end-of-ordering"
                                                                                 class="btn btn-outline-primary p-4"
                                                                                 value="Отправить"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script type="application/javascript" src="{{ asset('js/fast_order_modal.js') }}"></script>