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
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
// $('.buy').click(function () {
//     var id = $(this).data('id');
//     var count = $(this).data('count');
//     $.ajax({
//         url: '/cart/add',
//         data: {id: id, count: count},
//         type: 'get',
//         success: function (res) {
//             if (!res) res = 'cart empty';
//             showCart(res);
//         },
//         error: function (res) {
//             res = 'error';
//             showCart(res);
//         }
//     });
// });
