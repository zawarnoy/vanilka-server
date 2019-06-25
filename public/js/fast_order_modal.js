$(document).ready(function () {
    $("#popular-order").iziModal({
        headerColor: common.primaryColor
    });

    $(document).on('click', '.popular-product-link', function (event) {
        event.preventDefault();

        let $popularOrder = $('#popular-order'),
            $this = $(this);

        $popularOrder.iziModal('setTitle', 'Заказать ' + $this.attr('data-name'));
        $popularOrder.iziModal('setSubtitle', $this.attr('data-price'));
        $popularOrder.iziModal('open');
        $popularOrder.find('input[name="product-name"]').attr('value', $this.attr('data-name'));
    });

    $(".popularOrderForm").submit(function (e) {
        e.preventDefault();

        let $popularOrderForm = $('.popularOrderForm'),
            $popularOrder = $('#popular-order'),
            lastName = $popularOrderForm.find('input[name="lastName"]').val(),
            firstName = $popularOrderForm.find('input[name="firstName"]').val(),
            phone = $popularOrderForm.find('input[name="phone"]').val(),
            email = $popularOrderForm.find('input[name="email"]').val(),
            productName = $popularOrderForm.find('input[name="product-name"]').val();

        $popularOrder.iziModal('close');

        $.ajax({
            type: "POST",
            url: "/order",
            data: {
                personData: {
                    lastName: lastName,
                    firstName: firstName,
                    phone: phone,
                    productName: productName,
                    email: email
                },

                fastOrder: true
            },
            success: function (html) {
                new OrderConfirmationModal({
                    content: html
                })
            }
        });
    });
});
