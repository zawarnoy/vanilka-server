$(document).ready(function () {

    let hash = location.hash;

    if (hash.includes("product__")) {
        setTimeout(function () {
            $(hash + ' img').trigger('click');
        }, 500);
    }

});