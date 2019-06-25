<div id="popular-order">
    <form class="popularOrderForm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12"><label class="mt-3 text-dark">Фамилия :</label>
                    <input class="form-control text-dark" type="text" placeholder="Фамилия" name="lastName">
                </div>
                <div class="col-sm-12"><label class="mt-3 text-dark">Имя* :</label>
                    <input class="form-control text-dark" type="text" placeholder="Имя" name="firstName"
                           required="required">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <label class="mt-3 text-dark">Телефон для связи* :</label>
                    <input class="form-control text-dark" type="text" placeholder="+375(ХХ)ХХХ-ХХ-ХХ" name="phone"
                           required="required">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <label class="mt-3 text-dark">Адрес электронной почты* :</label>
                    <input class="form-control text-dark" type="text" placeholder="Example@mail.com" name="email"
                           required="required"></div>
            </div>
            <div class="row my-3">
                <div class="col-12 d-flex justify-content-center">
                    <input type="submit" id="end-of-ordering" class="btn btn-outline-primary p-4" value="Отправить">
                </div>
            </div>
        </div>
        <input type="hidden" name="product-name" value="">
    </form>
</div>

<script type="application/javascript" src="{{ asset('js/fast_order_modal.js') }}"></script>