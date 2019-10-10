/**
 * function for show cart modal window
 */
function showCart(cart) {
    $('#cart .modal-body2').html(cart);
    $('#cart').modal();
}

/**
 * function for show callback modal window
 */
function showAnswer(callback) {
    $('#answer-callback-modal .modal-bodycallback').html(callback);
    $('#answer-callback-modal').modal();
}

/**
 * function for add to cart item
 */
function addToCart(id, count, name) {
    $.ajax({
        url: '/cart/add',
        data: {id: id, count: count, name: name},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
            $(".t706__carticon_showed").css({display: 'none'});
            if ($('.t706__cartwin-count').text() == '') {
                $('.t706__carticon-counter').text(0);
                $('.t706__carticon-text').text('Ваша корзина пуста');
                $('.t706__cartwin-bottom').css({display: 'none'});
            } else {
                $('.t706__carticon-counter').text($('.t706__cartwin-count').text());
                $('.t706__carticon-text').text($('.t706__cartwin-prodamount').text());
                $('.t706__cartwin-bottom').css({display: 'block'});
            }
            $('.t706__cartwin-count').css({display: 'none'});
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
}

/**
 * function for delete or clear cart
 */
function deleteAndClearCart(res) {
    if (!res) res = 'cart empty';
    showCart(res);
    if ($('.t706__cartwin-count').text() == '') {
        $("#1contact-form")[0].reset();
        $("#1contact-form").yiiActiveForm('resetForm');
        $('#orders-area').val(null).trigger("change");
        $('.t706__carticon-counter').text(0);
        $('.t706__carticon-text').text('Ваша корзина пуста');
        $('.t706__cartwin-bottom').css({display: 'none'});
    } else {
        $('.t706__carticon-counter').text($('.t706__cartwin-count').text());
        $('.t706__carticon-text').text($('.t706__cartwin-prodamount').text());
        $('.t706__cartwin-bottom').css({display: 'block'});
    }
    $('.t706__cartwin-count').css({display: 'none'});
    if ($('.t706__cartwin-count').text() == '') {
        $('.t706__cartwin-bottom').css({display: 'none'});
    } else {
        $('.t706__cartwin-bottom').css({display: 'block'});
    }
}

/**
 * function for show result of calculate
 */
function resultCalc(newCount, price, newprice) {
    $('.cart-count').text(newCount);
    var sum = newCount * price;
    var newSum = newCount * newprice;
    $('.t706__product-amount').text(sum + ' грн');
    $('.t706__cartwin-prodamount').text(newSum + ' грн');
}

/**
 * function for calculate sum count and sum with discount
 */
function calculator(count, newCount) {
    newCount += count;
    $('.cart-count').text(newCount);
    var price = 150;
    if (newCount == 0 || newCount == 1) {
        newCount = 1
        var newprice = price;
        $('.t706__cartwin-prodamount-label').text('Сумма: ')
    } else if (newCount == 2) {
        newprice = 125;
        $('.t706__cartwin-prodamount-label').text('Сумма с учётом скидки: ')
    } else if (newCount >= 3) {
        $('.t706__cartwin-prodamount-label').text('Сумма с учётом скидки: ')
        newprice = 100;
    }
    resultCalc(newCount, price, newprice);
    $('.t706__carticon-counter').text(newCount);
    $('.t706__cartwin-count').text(newCount);
}

/**
 * function for change count by form input
 */
function inputCount() {
    var count = $('#message').val();
    var id = $('#message').data('id');
    var price = 150;

    if (count == undefined || id == undefined) {
        return false;
    } else {
        if (count <= 0) {
            var newprice = price;
            $('#message').val(1);
            count = 1;
        } else if (count == 1) {
            newprice = price;
            $('.t706__cartwin-prodamount-label').text('Сумма: ')
        } else if (count == 2) {
            newprice = 125;
            $('.t706__cartwin-prodamount-label').text('Сумма с учётом скидки: ')
        } else if (count >= 3) {
            newprice = 100;
            $('.t706__cartwin-prodamount-label').text('Сумма с учётом скидки: ')
        }
        var newsum = newprice * count;
        var sum = price * count;
        $('.t706__carticon-counter').text(count);
        $('.t706__product-amount').text(sum + ' грн');
        $('.t706__cartwin-prodamount').text(newsum + ' грн');
        $('.t706__cartwin-count').text(count);
    }

}

/**
 * function for close navigation when click on the one of navigation elements
 */
function closeNav() {
    $('#w0-collapse').attr("aria-expanded", "false")
    $('#w0-collapse').removeClass('navbar-collapse collapse in');
    $('#w0-collapse').toggleClass('navbar-collapse collapse');
}

/**
 * function for add to cart items
 */
$('.buy').click(function () {
    var id = $(this).data('id');
    var count = $(this).data('count');
    var name = $(this).data('name');
    $(".sendOrder").attr("disabled", false);
    $(".clearCart").attr("disabled", false);
    addToCart(id, count, name);
});
/**
 * function for show cart
 */
$('.t706__carticon-wrapper').click(function () {
    $.ajax({
        url: '/cart/show',
        type: 'get',
        success: function (res) {
            $(".sendOrder").attr("disabled", false);
            $(".clearCart").attr("disabled", false);
            if (!res) res = 'cart empty';
            showCart(res);
            $(".t706__carticon_showed").css({display: 'none'});
            if ($('.t706__cartwin-count').text() == '') {
                $('.t706__cartwin-bottom').css({display: 'none'});
            } else {
                $('.t706__cartwin-bottom').css({display: 'block'});
            }
            $('.t706__cartwin-count').css({display: 'none'});
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
/**
 * function for change count of items on click plus
 */
$('#cart .modal-body2').on('click', '#plus-cart', function (e) {
    e.preventDefault();
    var count = $(this).data('count');
    var newCount = +$('.cart-count').text();
    calculator(count, newCount);
});
/**
 * function for change count of items on click minus
 */
$('#cart .modal-body2').on('click', '#minus-cart', function (e) {
    e.preventDefault();
    var count = $(this).data('count') * (-1);
    var newCount = +$('.cart-count').text();
    calculator(count, newCount);
});
/**
 * function for change count of order
 */
$('#cart .modal-body2').on('change', '#message', function (e) {
    $('.t706__product-title ').css({width: '45%'});
    $('.t706__product-plusminus').css({position: 'relative'});
    $('.t706__product-plusminus').css({left: '-14px'});
    inputCount();
});
/**
 * callback input field for change count of products
 */
$('#cart .modal-body2').on('click', '.cart-count', function (e) {
    $('.t706__product-title ').css({width: '45%'});
    $(this).replaceWith("<input class='t706__product-quantity cartcount' min='1' type='number'data-id=" + $(this).data('id') + " id='message' name='message' autofocus class='manFl' value=" + $(this).text() + ">");
    $('.t706__product-plusminus').css({position: 'relative'});
    $('.t706__product-plusminus').css({left: '-25px'});
});
/**
 * return span tag after change
 */
$('#cart .modal-body2').on('blur', '#message', function (e) {
    $('.t706__product-title ').css({width: '45%'});
    $(this).replaceWith("<span class='t706__product-quantity cart-count' data-id=" + $(this).data("id") + " data-gender=" + $(this).data("gender") + ">" + $(this).val() + "</span>");
    $('.t706__product-plusminus').css({position: 'relative'});
    $('.t706__product-plusminus').css({left: '0px'});
});
/**
 * function for delete item in cart
 */
$('#cart .modal-body2').on('click', '.del-item', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
        url: '/cart/delete',
        data: {id: id},
        type: 'get',
        success: function (res) {
            deleteAndClearCart(res);
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
/**
 * function for clear cart
 */
$('#cart .modal-body').on('click', '.clearCart', function (e) {
    e.preventDefault();
    $.ajax({
        url: '/cart/delete',
        type: 'get',
        success: function (res) {
            deleteAndClearCart(res);
        },
        error: function (res) {
            res = 'error';
            showCart(res);
            $('.t706__cartwin-bottom').css({display: 'none'});
        }
    });
});
/**
 * function for choice city
 */
$('#cart .modal-body').on('change', '#orderform-area', function (e) {
    e.preventDefault();
    var area = $(this).find(":selected").val();
    var areatext = $(this).find(":selected").text();
    $.ajax({
        url: '/cart/city',
        data: {value: area, text: areatext},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            res = JSON.parse(res);
            $('#orderform-city').empty().append('<option value=" ">Выберите город...</option>' + res);
            if ($('#orderform-area').val() == '') {
                $('#orderform-warehouse').empty();
                $('#orderform-city').empty();
                $('.control-label').css({color: '#000'})
                $('.select2-selection').css({borderColor: '#ccc'})
            }
            $('#orderform-warehouse').empty();
            $('.control-label').css({color: '#000'})
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
/**
 * function for choice city and warehouse of Nova Poshta
 */
$('#cart .modal-body').on('change', '#orderform-city', function (e) {
    e.preventDefault();
    var city = $(this).find(":selected").val();
    $.ajax({
        url: '/cart/warehouse',
        data: {city: city},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            res = JSON.parse(res);
            $('#orderform-warehouse').empty().append('<option value=" ">Выберите отделение Новой почты...</option>' + res);
            if ($('#orderform-city').val() == null) {
                $('#orderform-warehouse').empty();
            }
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
$('#clientform-name').change(function () {
    if ($('#clientform-name').val().length != 0) {
        $('.error-name').text('');
    } else {
        $('.error-name').text('Необходимо заполнить «Полное имя».');
        $('.error-name').css({color: '#a94442'});
    }
});
$('#clientform-phone').change(function () {
    if ($('#clientform-phone').val().length != 0) {
        $('.error-phone').text('');
    } else {
        $('.error-phone').text('Необходимо заполнить «Телефон».');
        $('.error-phone').css({color: '#a94442'});
    }
});
$('#clientform-email').change(function () {
    if ($('#clientform-email').val().length != 0) {
        $('.error-email').text('');
    } else {
        $('.error-email').text('Необходимо заполнить «email».');
        $('.error-email').css({color: '#a94442'});
    }
});
$('#orderform-area').change(function () {
    if ($('#orderform-area').val().length != 0) {
        $('.error-area').text('');
    }
});
$('#orderform-city').change(function () {
    if ($('#orderform-city').val().length != 0) {
        $('.error-city').text('');
    }
});
$('#orderform-warehouse').change(function () {
    if ($('#orderform-warehouse').val().length != 0) {
        $('.error-warehouse').text('');
    }
});
/**
 * function for send order
 */
$('#cart .modal-body').on('click', '.sendOrder', function (e) {
    var name = $('#clientform-name').val();
    var phone = $('#clientform-phone').val();
    var mail = $('#clientform-email').val();
    var area = $('#orderform-area').find(":selected").text();
    var city = $('#orderform-city').find(":selected").text();
    var warehouse = $('#orderform-warehouse').find(":selected").text();
    var areaRef = $('#orderform-area').find(":selected").val();
    var cityRef = $('#orderform-city').find(":selected").val();
    var warehouseRef = $('#orderform-warehouse').find(":selected").val();
    var number = $('#orderform-warehouse').find(":selected").data('number');
    var pay = $('input[name=paymentsystem]:checked').val();
    var count = $('.t706__cartwin-count').text();
    var id = $('.cart-count').data('id');
    name = name.trim();
    mail = mail.trim();
    e.preventDefault();
    if ($('#clientform-name').val().length == 0) {
        $('.error-name').text('Необходимо заполнить «Полное имя».');
        $('.error-name').css({color: '#a94442'});
    }
    if ($('#clientform-phone').val().length == 0) {
        $('.error-phone').text('Необходимо заполнить «Телефон».');
        $('.error-phone').css({color: '#a94442'});
    }
    if ($('#clientform-email').val().length == 0) {
        $('.error-email').text('Необходимо заполнить «Email».');
        $('.error-email').css({color: '#a94442'});
    }
    if ($('#orderform-area').val().length == 0) {
        $('.error-area').text('Выберите «Область»');
        $('.error-area').css({color: '#a94442'});
    }
    if ($('#orderform-city').val().length == 0) {
        $('.error-city').text('Выберите «Город»');
        $('.error-city').css({color: '#a94442'});
    }
    if ($('#orderform-warehouse').val().length == 0) {
        $('.error-warehouse').text('Выберите «Отделение новой почты»');
        $('.error-warehouse').css({color: '#a94442'});
    }
    if ($('#clientform-name').val().length != 0 && $('#clientform-phone').val().length != 0 && $('#clientform-email').val().length != 0 && $('#orderform-area').val().length != 0 && $('#orderform-city').val().length != 0 && $('#orderform-warehouse').val().length != 0 && $('#orderform-warehouse').val().length != 0 && $('.help-block-error').text().length == 0) {
        $.ajax({
            url: '/cart/send',
            data: {
                name: name,
                phone: phone,
                mail: mail,
                area: area,
                city: city,
                warehouse: warehouse,
                areaRef: areaRef,
                cityRef: cityRef,
                warehouseRef: warehouseRef,
                number: number,
                count: count,
                id: id
            },
            type: 'post',
            success: function (res) {
                if (!res) res = 'cart empty';
                showCart(res);
                $("#1contact-form")[0].reset();
                $("#1contact-form").yiiActiveForm('resetForm');
                $('#orderform-area').val(null).trigger("change");
                if ($('.t706__cartwin-count').text() == '') {
                    $('.t706__carticon-counter').text(0);
                    $('.t706__carticon-text').text('Ваша корзина пуста');
                    $('.t706__cartwin-bottom').css({display: 'none'});
                } else {
                    $('.t706__carticon-counter').text($('.t706__cartwin-count').text());
                    $('.t706__carticon-text').text($('.t706__cartwin-prodamount').text());
                    $('.t706__cartwin-bottom').css({display: 'block'});
                }
                $('.t706__cartwin-bottom').css({display: 'none'});
                if (pay == 'liqpay') {
                    $('.liqpaySend').submit();
                }
            },
            beforeSend: function () {
                $(".sendOrder").attr("disabled", true);
                $(".clearCart").attr("disabled", true);
            },
            error: function (res) {
                res = 'error'
                showCart(res);
            }
        });
    }
});
/**
 * function mask for phone
 */
$(document).ready(function ($) {
    $("#clientform-phone").mask('+38(099)999-99-99');
    $("#callbackform-phone").mask('+38(099)999-99-99');
});
/**
 * function for close navigation when click on one of the elements of navigation
 */
$('.close-nav').on('click', function () {
    closeNav();
});
/**
 * function for open modal callback
 */
$('.callback').click(function (e) {
    e.preventDefault();
    $('#callback-modal').modal('show');
});
/**
 * function for send callback form
 */
$('#callbackform-name').change(function () {
    if ($('#callbackform-name').val().length == 0) {
        $('.error-callbackname').text('Необходимо заполнить «Полное имя».');
        $('.error-callbackname').css({color: '#a94442'});
    } else {
        $('.error-callbackname').text('');
    }
});
$('#callbackform-phone').change(function () {
    if ($('#callbackform-phone').val().length == 0) {
        $('.error-callbackphone').text('Необходимо заполнить «Телефон».');
        $('.error-callbackphone').css({color: '#a94442'});
    } else {
        $('.error-callbackphone').text('');
    }
});
$('.sendCallbackForm').on('click', function (e) {
    var name = $('#callbackform-name').val();
    var phone = $('#callbackform-phone').val();
    name = name.trim();
    e.preventDefault();
    if ($('#callbackform-name').val().length == 0) {
        $('.error-callbackname').text('Необходимо заполнить «Полное имя».');
        $('.error-callbackname').css({color: '#a94442'});
    }
    if ($('#callbackform-phone').val().length == 0) {
        $('.error-callbackphone').text('Необходимо заполнить «Телефон».');
        $('.error-callbackphone').css({color: '#a94442'});
    }
    if ($('#callbackform-name').val().length == 0 || $('#callbackform-phone').val().length == 0 || $('.help-block-error').text() != '') {
        return false;
    } else {
        $.ajax({
            url: '/site/callback',
            data: {name: name, phone: phone},
            type: 'post',
            success: function (res) {
                if (!res) res = 'empty';
                $('#callback-modal').modal('hide');
                showAnswer(res);
            },
            error: function (res) {
                res = 'error';
                $('#callback-modal').modal('hide');
                showAnswer(res);
            }
        });
    }
});
/**
 * functions for save order in cookies
 */
$("#cart").on("hidden.bs.modal", function (e) {
    e.preventDefault();
    var sum = $(".t706__cartwin-prodamount").text();
    var count = $(".cart-count").text();
    var name = $(".t706__product-title").text();
    var price = $(".cart-price").text();
    var id = $(".cart-count").data('id');
    if (count != '') {
        $.ajax({
            url: '/cart/save',
            data: {id: id, count: count, price: price, name: name, sum: sum},
            type: 'get',
            success: function (res) {
                if (!res) res = 'cart empty';
                if ($('.t706__cartwin-count').text() == '') {
                    $('.t706__carticon-counter').text(0);
                    $('.t706__carticon-text').text('Ваша корзина пуста');
                    $('.t706__cartwin-bottom').css({display: 'none'});

                } else {
                    $('.t706__carticon-counter').text(count);
                    $('.t706__carticon-text').text($('.t706__cartwin-prodamount').text());
                    $('.t706__cartwin-bottom').css({display: 'block'});
                }
                $('.t706__cartwin-count').css({display: 'none'});
                if ($('.t706__cartwin-count').text() == '') {
                    $('.t706__cartwin-bottom').css({display: 'none'});
                } else {
                    $('.t706__cartwin-bottom').css({display: 'block'});
                }
            },
            error: function (res) {
                res = 'error';
                showCart(res);
            }
        });
        $(".t706__carticon-text").text(sum);
        $(".t706__carticon-counter").text(count);
        $(".t706__carticon_showed").css({display: 'block'});
    } else {
        $(".t706__carticon-text").text('Ваша корзина пуста');
        $(".t706__carticon-counter").text("0");
        $(".t706__carticon_showed").css({display: 'block'});
    }
    $('#cart').modal('hide');
    $("div.modal-backdrop").remove();
});
$('#answer-callback-modal').on("hidden.bs.modal", function (e) {
    $('body').css({paddingRight: '0px'});
    $('#callback-form').yiiActiveForm('resetForm');
})