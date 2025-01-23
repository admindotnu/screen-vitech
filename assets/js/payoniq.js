function getDataQR(id) {
    var obj = { "qrcodenr": id };
    $.ajax({
        type: "POST",
        url: "http://" + host + ":800/api/payconiq/v1/gentransactionid",
        data: JSON.stringify(obj),
        contentType: "application/json; charset=utf-8",
        crossDomain: true,
        dataType: "json",
        success: function (data, status, jqXHR) {
            $('#qrcode' + id).prepend('<img style=";" id="qr' + id + '" src="http://' + host + ':800/qrcode.php?amount=' + data['amount'] + '&transactionid=' + data['transactionid'] + '" />');
            $('#qrcode' + id).css({ 'display': 'block', 'opacity': '0' }).animate({
                bottom: "100px",
                opacity: 1
            }, {
                duration: 2500,
                queue: false
            });
        },
        error: function (jqXHR, status) {
            // error handler
        }
    });
}

function clearPayconiq() {
    $('#qrcode1').css({ 'display': 'block', 'opacity': '1' }).animate({
        opacity: 0
    }, {
        duration: 2500,
        queue: false,
        complete: function () {
            $('#qr1').empty();
            $('#qrcode1').empty();
        }
    });
}

function showPayconiq() {
    $('#qr1').empty();
    $('#qrcode1').empty();
    getDataQR(1);

    setTimeout(function () {
        clearPayconiq()
    }, 10000);
}
