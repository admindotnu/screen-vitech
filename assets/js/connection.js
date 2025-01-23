var connectInterval;

function initConnection() {
    connectInterval = window.setInterval(connect, 2000);
    watchdog();
}

function connect() {
    var socket = new WebSocket("ws://" + host + ":8000");

    socket.onopen = function (event) {
        clearInterval(connectInterval);
        console.log('connected');
    };
    socket.onclose = function (event) {
        connectInterval = setInterval(connect, 2000);
    };
    socket.onerror = function (event) {
        //
    };

    socket.onmessage = function (event) {
        var message = JSON.parse(event.data);
        console.log(JSON.stringify(message));
        /** alert */
        if (message.alert !== null && message.alert === false) {
            // hideAlert(); // TODO: add functionality
        } else if (message.alert !== null && message.alert !== '') {
            // console.log(message.alert); // TODO: add functionality
            // showAlert(message.alert);
        }
        /** storing */
        if (message.storing !== null && message.storing === false) {
            // hideStoring(); // TODO: add functionality
        } else if (message.storing !== null && message.storing !== '' && message.storing !== undefined) {
            // console.log(message.storing); // TODO: add functionality
            // showStoring(message.storing);
        }
        /** time */
        if (message.time !== null && message.time > 0) {
            addTime(message.time);
        }
        /** payoniq */
        if (message.payconiq !== null && message.payconiq > 0) {
            //console.log(message.payoniq); // TODO: add functionality
            // showPayconiq();
        }
        /** startMachine */
        if (message.StartMachine !== null && message.StartMachine !== undefined) {
            showTime();
            //$('[data-action="info"]').show();
            //$('[data-action="stop"]').hide();
            $('#modal-large-cutout').modal('hide');
            $('#modal-language').modal('hide');
            $('#modal-prepaid').modal('hide');
            //$('#modal-adv43').modal('show');
            setButtonInterval('action-99');

            // change advertising div
            //$('#adv43iframe').animate({'width':'600', 'height':'450'},"fast");
            //$('.modal-adv43').animate({'top':'340', 'left':'340'},"fast");




        }
        /** endMachine */
        if (message.EndMachine !== null && message.EndMachine !== undefined) {
            //$('#modal-large-cutout').modal('show');
            //$('#modal-language').modal('show');
            //$('#modal-prepaid').modal('show');

            // change advertising div
            //$('#adv43iframe').animate({'width':'800', 'height':'600'},"fast");
            //$('.modal-adv43').animate({'top':'180', 'left':'240'},"fast");
            setActiveAction();
            $(".timer-title").hide();
            $(".timer-text").hide();
        }
        /** showTime */
        if (message.showtime !== null) {
            //console.log('showtime', message.showtime); // TODO: add functionality
            showTime();
            updateTimeTextDirect(message.showtime);
            //updateProgressbarLast10(message.showtime, bar)
            updateProgressbarLast10Withoutbar(message.showtime)
        }
        /** program */
        if (message.program !== null && message.program !== undefined) {
            //console.log('program', message.program);
            setActiveAction('action-' + message.program);
            setButtonInterval('action-' + message.program);
        }
        /** payment */
        if (message.payment !== null && message.payment !== undefined && message.amount !== null && message.amount !== undefined) {

            var paymentMessage = '';

            if(message.payment === 'native'){
                paymentMessage = document.getElementById('native').textContent;
            }

            if(message.payment === 'payter1'){
                paymentMessage = document.getElementById('payter1').textContent;
            }

            var dialog = new BootstrapDialog({
                title: document.getElementById('transactiontitle').textContent,
                message: paymentMessage + ' ' + message.amount,
                closable: false
            });

            dialog.realize();
            dialog.getModalDialog().css('max-width', 'unset');
            dialog.getModalDialog().css('margin', 'unset');
            dialog.getModalDialog().css('margin-top', '10px');
            dialog.getModalDialog().css('margin-left', 'auto');
            dialog.getModalDialog().css('margin-right', 'auto');
            dialog.getModalDialog().css('width', '600px');
            dialog.getModalHeader().css('background-color', '#2ba653');
            dialog.open();

            setTimeout(function () {
                $.each(BootstrapDialog.dialogs, function (id, dialog) {
                    dialog.close();
                });
            }, 3500);


        }
        /** screen */
        if (message.screen !== null && message.screen !== '') {
            //console.log('screen', message.screen); // TODO: add functionality
            // switch (message.screen) {
            //     case "wassen":
            //         isWashing = true;
            //         time = 0;
            //         $('#info').addClass();
            //         $('#washing').show();
            //         break;
            //     default:
            //         isWashing = false;
            //         deactivePrograms();
            //         $('#washing').hide();
            //         $('#info').show();
            // }
        }

        /** setContent */
        if (message.setAdv43Content !== null && message.setAdv43Content !== undefined) {
            // console.log('setAdv43Content', message.setAdv43Content);
            // console.log('type', message.type);
            // console.log('item', message.item);
            // setAdv43Content(message.type, message.item);
        }

    };
    clearInterval(connectInterval);
}

function watchdog() {
    $.ajax({
        type: "get",
        url: "watchdog.php",
        success: function (data) {
            setTimeout(function () {
                watchdog();
            }, 60000);
        }
    });
}

