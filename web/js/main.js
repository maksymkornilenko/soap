function showCart(cart) {
    $('#cart .modal-body2').html(cart);
    $('#cart').modal();
}

function showAnswer(callback) {
    $('#answer-callback-modal .modal-bodycallback').html(callback);
    $('#answer-callback-modal').modal();
}

$('.t706__carticon-wrapper').click(function () {
    $.ajax({
        url: '/cart/show',
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
            $(".t706__carticon_showed").css({display: 'none'});
            if ($('.t706__cartwin-count').text() == '') {
                $('.t706__cartwin-bottom').css({display: 'none'});
            } else {
                $('.t706__cartwin-bottom').css({display: 'block'});
            }
            $('.t706__cartwin-count').css({display: 'none'});
            $('.cartwin-prodamount-wrap').css({textAlign: 'right'});
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
$('.buy').click(function () {
    var id = $(this).data('id');
    var count = $(this).data('count');
    var name = $(this).data('name');
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
            $('.cartwin-prodamount-wrap').css({textAlign: 'right'});
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
$('.buy-nav').click(function () {
    var id = $('#for-nav').data('id');
    var count = $('#for-nav').data('count');
    $.ajax({
        url: '/cart/add',
        data: {id: id, count: count},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
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
            $('.cartwin-prodamount-wrap').css({textAlign: 'right'});
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
$('#cart .modal-body2').on('click', '#plus-cart', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var count = $(this).data('count');
    var name = $(this).data('name');
    var newCount = +$('.cart-count').text();
    newCount += count;
    $('.cart-count').text(newCount);
    var price = 150;
    $('.t706__product-amount').text(sum + ' грн');
    if (newCount <= 0) {
        newCount = 1;
        $('.cart-count').text(newCount);
        var sum = newCount * price;
        $('.t706__product-amount').text(sum + ' грн');
        $('.t706__cartwin-prodamount').text(sum + ' грн');
    } else if (newCount == 1) {
        price = +$('.cart-price').text();
        $('.cart-count').text(newCount);
        sum = newCount * price;
        $('.t706__product-amount').text(sum + ' грн');
        $('.t706__cartwin-prodamount').text(sum + ' грн');
    } else if (newCount == 2) {
        var newprice = 125;
        $('.cart-count').text(newCount);
        sum = newCount * price;
        var newSum = newCount * newprice;
        $('.t706__product-amount').text(sum + ' грн');
        $('.t706__cartwin-prodamount').text(newSum + ' грн');
    } else if (newCount >= 3) {
        newprice = 100;
        $('.cart-count').text(newCount);
        sum = newCount * price;
        newSum = newCount * newprice;
        $('.t706__product-amount').text(sum + ' грн');
        $('.t706__cartwin-prodamount').text(newSum + ' грн');
    }
    $('.t706__carticon-counter').text(newCount);
    $('.t706__cartwin-count').text(newCount);
});
$('#cart .modal-body2').on('click', '#minus-cart', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var count = $(this).data('count');
    var name = $(this).data('name');
    var newCount = +$('.cart-count').text();
    newCount -= count;
    $('.cart-count').text(newCount);
    var price = 150;
    $('.t706__product-amount').text(sum + ' грн');
    if (newCount <= 0) {
        newCount = 1;
        $('.cart-count').text(newCount);
        var sum = newCount * price;
        $('.t706__product-amount').text(sum + ' грн');
        $('.t706__cartwin-prodamount').text(sum + ' грн');
    } else if (newCount == 1) {
        price = +$('.cart-price').text();
        $('.cart-count').text(newCount);
        sum = newCount * price;
        $('.t706__product-amount').text(sum + ' грн');
        $('.t706__cartwin-prodamount').text(sum + ' грн');
    } else if (newCount == 2) {
        var newprice = 125;
        $('.cart-count').text(newCount);
        sum = newCount * price;
        var newSum = newCount * newprice;
        $('.t706__product-amount').text(sum + ' грн');
        $('.t706__cartwin-prodamount').text(newSum + ' грн');
    } else if (newCount >= 3) {
        newprice = 100;
        $('.cart-count').text(newCount);
        sum = newCount * price;
        newSum = newCount * newprice;
        $('.t706__product-amount').text(sum + ' грн');
        $('.t706__cartwin-prodamount').text(newSum + ' грн');
    }
    $('.t706__carticon-counter').text(newCount);
    $('.t706__cartwin-count').text(newCount);
});
$('#cart .modal-body').on('click', '.del-item', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
        url: '/cart/delete',
        data: {id: id},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
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
            $('.cartwin-prodamount-wrap').css({textAlign: 'right'});
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
});
$('#cart .modal-body').on('click', '.clearCart', function (e) {
    e.preventDefault();
    $.ajax({
        url: '/cart/clear',
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
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
        },
        error: function (res) {
            res = 'error';
            showCart(res);
            $('.t706__cartwin-bottom').css({display: 'none'});
        }
    });
});

$('#cart .modal-body').on('change', '#orders-area', function (e) {
    e.preventDefault();
    var area = $(this).find(":selected").val();
    var areatext = $(this).find(":selected").text();
    $.ajax({
        url: '/cart/area',
        data: {value: area, text: areatext},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            res = JSON.parse(res);
            $('#orders-city').empty().append('<option value=" ">Выберите город...</option>' + res);
            if ($('#orders-area').val() == '') {
                $('#orders-warehouse').empty();
                $('#orders-city').empty();
                $('.control-label').css({color: '#000'})
                $('.select2-selection').css({borderColor: '#ccc'})
            }
            $('#orders-warehouse').empty();
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
$('#cart .modal-body').on('change', '#orders-city', function (e) {
    e.preventDefault();
    var city = $(this).find(":selected").val();
    $.ajax({
        url: '/cart/city',
        data: {city: city},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            res = JSON.parse(res);
            $('#orders-warehouse').empty().append('<option value=" ">Выберите отделение Новой почты...</option>' + res);
            if ($('#orders-city').val() == null) {
                $('#orders-warehouse').empty();
            }
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
$('#cart .modal-body').on('click', '.sendOrder', function (e) {
    var name = $('#clients-name').val();
    var phone = $('#clients-phone').val();
    var mail = $('#clients-email').val();
    var area = $('#orders-area').find(":selected").text();
    var city = $('#orders-city').find(":selected").text();
    var warehouse = $('#orders-warehouse').find(":selected").text();
    var pay = $('input[name=paymentsystem]:checked').val();
    var count = $('.t706__cartwin-count').text();
    var sum = $('.t706__cartwin-prodamount').text();
    var id = $('.cart-count').data('id');
    console.log(count);
    console.log(sum);
    name = name.trim();
    mail = mail.trim();
    e.preventDefault();
    console.log($('#orders-area').val());
    if ($('#clients-name').val().length == 0 || $('#clients-phone').val().length == 0 || $('#clients-email').val().length == 0 || $('#orders-area').val().length == 0 || $('#orders-city').val().length == 0 || $('#orders-warehouse').val().length == 0) {
        $('.error-send').text('Заполните все поля перед оформлением заказа.');
        $('.error-send').css({color: '#a94442'});
    } else if ($('.help-block').text() != '') {
        $('.error-send').text('Заполните все поля перед оформлением заказа.');
        $('.error-send').css({color: '#a94442'});
    } else {
        $.ajax({
            url: '/cart/view',
            data: {
                name: name,
                phone: phone,
                mail: mail,
                area: area,
                city: city,
                warehouse: warehouse,
                pay: pay,
                count: count,
                sum: sum,
                id: id
            },
            type: 'post',
            success: function (res) {
                if (!res) res = 'cart empty';
                showCart(res);
                $('#clients-name').val('');
                $('#clients-phone').val('');
                $('#clients-email').val('');
                $('#orders-area').val(null).trigger("change");
                // $('#orders-city').prop('selectedIndex', -1);
                // $('#orders-warehouse').prop('selectedIndex', -1);
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
            error: function (res) {
                res = 'error';
                showCart(res);
            }
        });
    }
});

function inputCount() {
    var count = $('#message').val();
    var id = $('#message').data('id');
    var price = +$('.cart-price').text();

    if (count == undefined || id == undefined) {
        return false;
    } else {
        if (count <= 0) {
            count = 1;
        } else if (count == 1) {
            price
        } else if (count == 2) {
            newprice = 125;
        } else if (count >= 3) {
            newprice = 100;
        }
        newsum = newprice * count;
        sum = price * count;
        $('.t706__carticon-counter').text(count);
        $('.t706__product-amount').text(sum + ' грн');
        $('.t706__cartwin-prodamount').text(newsum + ' грн');
        $('.t706__cartwin-count').text(count);
    }

}

$('#cart .modal-body').on('change', '#message', function (e) {
    $('.t706__product-plusminus').css({position: 'relative'});
    $('.t706__product-plusminus').css({left: '-30px'});
    inputCount();
});
/**
 * callback input field for change count of products
 */
$('#cart .modal-body').on('click', '.cart-count', function (e) {
    $(this).replaceWith("<input class='t706__product-quantity cartcount' min='1' type='number'data-id=" + $(this).data('id') + " id='message' name='message' autofocus class='manFl' value=" + $(this).text() + ">");
    $('.t706__product-plusminus').css({position: 'relative'});
    $('.t706__product-plusminus').css({left: '-36px'});
});
/**
 * return span tag after change
 */
$('#cart .modal-body').on('blur', '#message', function (e) {
    $(this).replaceWith("<span class='t706__product-quantity cart-count' data-id=" + $(this).data("id") + " data-gender=" + $(this).data("gender") + ">" + $(this).val() + "</span>");
    $('.t706__product-plusminus').css({position: 'relative'});
    $('.t706__product-plusminus').css({left: '0px'});
});
$(document).ready(function ($) {
    $("#clients-phone").mask('8(099)999-99-99');
    $("#callback-phone").mask('8(099)999-99-99');
});

function closeNav() {
    $('#w0-collapse').attr("aria-expanded", "false")
    $('#w0-collapse').removeClass('navbar-collapse collapse in');
    $('#w0-collapse').toggleClass('navbar-collapse collapse');
}

$('.nav-label').on('click', function (e) {
    closeNav();
});
$('.tel-1').on('click', function (e) {
    closeNav();
});
$('.tel-2').on('click', function (e) {
    closeNav();
});
$('.icon-nav').on('click', function (e) {
    closeNav();
});
$('.callback').click(function (e) {
    e.preventDefault();
    closeNav();
    $('#callback-modal').modal('show');
});
$('.sendCallbackForm').on('click', function (e) {
    var name = $('#callback-name').val();
    var phone = $('#callback-phone').val();
    $('.t706__carticon').css({display: 'none'});
    name = name.trim();
    e.preventDefault();
    if ($('#callback-name').val().length == 0 || $('#callback-phone').val().length == 0) {
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
                $("#answer-callback-modal").on("hidden.bs.modal", function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: '/cart/redirect',
                    });
                });
                $("#answer-callback-modal").on(".close", function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: '/cart/redirect',
                    });
                });
            },
            error: function (res) {
                res = 'error';
                $('#callback-modal').modal('hide');
                $('.t706__carticon').css({display: 'none'});
                showAnswer(res);
            }
        });
    }
});

$("#cart").on("hidden.bs.modal", function (e) {
    e.preventDefault();
    var sum = $(".t706__cartwin-prodamount").text();
    var count = $(".cart-count").text();
    var name = $(".t706__product-title").text();
    var price = $(".cart-price").text();
    var id = $(".cart-count").data('id');
    console.log(count);
    console.log(sum);
    console.log(name);
    console.log(price);
    console.log(id);
    var cart = $('.modal-body2').text();
    console.log(cart);
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
                $('.cartwin-prodamount-wrap').css({textAlign: 'right'});
                if ($('.t706__cartwin-count').text() == '') {
                    $("#cart").on("hidden.bs.modal", function (e) {
                        e.preventDefault();
                        $.ajax({
                            url: '/cart/redirect',
                        });
                    });
                    $("#cart").on(".close", function (e) {
                        e.preventDefault();
                        $.ajax({
                            url: '/cart/redirect',
                        });
                    });
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