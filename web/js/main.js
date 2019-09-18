function showCart(cart) {
    $('#cart .modal-body2').html(cart);
    $('#cart').modal();
}

function showAnswer(callback) {
    $('#answer-callback-modal .modal-body2').html(callback);
    $('#answer-callback-modal').modal();
}

$('.buy').click(function () {
    var id = $(this).data('id');
    var count = $(this).data('count');
    $.ajax({
        url: '/cart/add',
        data: {id: id, count: count},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
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
     $.ajax({
         url: '/cart/add',
         data: {id: id, count: count},
         type: 'get',
         success: function (res) {
             if (!res) res = 'cart empty';
             showCart(res);
             $('.t706__cartwin-count').css({display: 'none'});
             $('.cartwin-prodamount-wrap').css({textAlign: 'right'});
         },
         error: function (res) {
             res = 'error';
             showCart(res);
         }
     });
 });
$('#cart .modal-body2').on('click', '#minus-cart', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var count = $(this).data('count');
    var $link = $(e.target);
    if (!$link.data('lockedAt') || +new Date() - $link.data('lockedAt') > 190) {
        $.ajax({
            url: '/cart/remove',
            data: {id: id, count: count},
            type: 'get',
            success: function (res) {
                if (!res) res = 'cart empty';
                showCart(res);
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
    }
    $link.data('lockedAt', +new Date());
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
            $('.t706__cartwin-count').css({display: 'none'});
            $('.cartwin-prodamount-wrap').css({textAlign: 'right'});
            if ($('.t706__cartwin-count').text() == '') {
                $('.t706__cartwin-bottom').css({display: 'none'});
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
        data: {value: area, text:areatext},
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
    var pay=$('input[name=paymentsystem]:checked').val();
    name = name.trim();
    mail = mail.trim();
    e.preventDefault();
    if ($('#clients-name').val().length == 0 || $('#clients-phone').val().length == 0 || $('#clients-email').val().length == 0 || $('#orders-area').val().length == 0 || $('#orders-city').val().length == 0 || $('#orders-warehouse').val().length == 0) {
        $('.error-send').text('Заполните все поля перед оформлением заказа.');
        $('.error-send').css({color: '#a94442'});
    }else if($('.help-block').text()!=''){
        $('.error-send').text('Заполните все поля перед оформлением заказа.');
        $('.error-send').css({color: '#a94442'});
    } else {
        $.ajax({
            url: '/cart/view',
            data: {name: name, phone: phone, mail: mail, area: area, city: city, warehouse: warehouse, pay: pay},
            type: 'post',
            success: function (res) {
                if (!res) res = 'cart empty';
                showCart(res);
                $('.t706__cartwin-bottom').css({display: 'none'});
                if(pay=='liqpay'){
                    $('.liqpaySend').submit();
                }
                $("#cart").on("hidden.bs.modal", function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: '/cart/redirect'
                    });
                });
                $("#cart").on(".close", function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: '/cart/redirect'
                    });
                });
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
    if (count <= 0) {
        count = 1;
    }
    if (count == undefined || id == undefined) {
        return false;
    } else {
        $.ajax({
            url: '/cart/change',
            data: {id: id, count: count,},
            type: 'get',
            success: function (res) {
                if (!res) res = 'cart empty';
                showCart(res);
                $('.t706__cartwin-count').css({display: 'none'});
                $('.cartwin-prodamount-wrap').css({textAlign: 'right'});
                $(this).replaceWith("<span class='t706__product-quantity cart-count' data-id=" + $('#message').data("id")+">" + $('#message').val() + "</span>");
            },
            error: function (res) {
                res = 'error';
                showCart(res);
            }
        });
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