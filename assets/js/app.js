var timerValue, prevTimerValue, remainder = 0, timer, activeinfo = 0, languagescreen = 0, langindex = 0, maxlang = 1,
    lastseconds = 0, langtimer, transactionTimer, active = 0, functions = {}, defaultInterval = 0;

var languages = ["NL", "EN"];

//var bar = new ProgressBar.Path('#square', {
//    easing: 'easeInOut',
//    duration: 1000
//});

/**
 * Update the timer text.
 */
function updateTimeText() {
    const minutes = Math.floor(remainder / 60);
    const seconds = (remainder % 60) > 9 ? remainder % 60 : '0' + remainder % 60;

    $('#countdown .timer-title').html(minutes + ':' + seconds);
}

function updateTimeTextDirect(time) {

    $('#countdown .timer-title').html(time);
}

/**
 * Update the progressbar.
 */
function updateProgressbar() {
    prevTimerValue = timerValue || 1;
    if (remainder >= 120) {
        timerValue = 1;
    }
    else {
        timerValue = (remainder / 120) || 0;
    }

    $('#countdown').circleProgress({
        animationStartValue: prevTimerValue,
        value: timerValue
    });
}

function updateProgressbarLast10Withoutbar(time) {
    if (time !== undefined) {
        prevTimerValue = timerValue || 1;

        time = time.split(':')

        if (time == null) {
            console.log('time null');

        }

        var seconds = (+time[0]) * 60 + (+time[1]);



        if (seconds > 10) {
            if (lastseconds === 1) {
                // change bg back to normal
                $("body").addClass("bg-gradient-primary");
                $('body').removeClass("bg-gradient-secondary");
                lastseconds = 0;
            }
        }

        if (seconds === 10) {
            lastseconds = 1;
            $("body").removeClass("bg-gradient-primary");
            $('body').addClass("bg-gradient-secondary");
            $(".timer-title").css("color", "#ffffff");
            $(".timer-text").css("color", "#ffffff");
        }

        if (seconds === 0) {
            prevTimerValue = 0;
            timerValue = 0;
            lastseconds = 0;
            active = 0;
//            $('[data-action="info"]').show();
//            $('[data-action="stop"]').hide();
            $("body").addClass("bg-gradient-primary");
            $('body').removeClass("bg-gradient-secondary");
            langindex = 0;
            setLocale(languages[langindex], false);
            getTranslations();
            setButtonInterval('stop');
            $(".timer-title").css("color", "#ffffff");
            $(".timer-text").css("color", "#ffffff");
            $(".timer-title").hide();
            $(".timer-text").hide();

        }


        // $('#countdown').circleProgress({
        //     animationStartValue: prevTimerValue,
        //     value: timerValue
        // });
    }
}
function updateProgressbarLast10(time) {
    if (time !== undefined) {
        prevTimerValue = timerValue || 1;

        time = time.split(':')

        if (time == null) {
            console.log('time null');

        }

        var seconds = (+time[0]) * 60 + (+time[1]);

        if (seconds >= 10) {
            timerValue = 1;
        }
        else {
            timerValue = (seconds / 10) || 0;

           //bar.animate(timerValue);

        }

        if (seconds > 10) {
            if (lastseconds === 1) {
                // change bg back to normal
                $("body").addClass("bg-gradient-primary");
                $('body').removeClass("bg-gradient-secondary");
                lastseconds = 0;
            }
        }

        if (seconds === 10) {
            lastseconds = 1;
            $("body").removeClass("bg-gradient-primary");
            $('body').addClass("bg-gradient-secondary");
            $(".timer-title").css("color", "#ffffff");
            $(".timer-text").css("color", "#ffffff");
        }

        if (seconds === 0) {
            prevTimerValue = 0;
            timerValue = 0;
            lastseconds = 0;
            active = 0;
//            $('[data-action="info"]').show();
//            $('[data-action="stop"]').hide();
            $("body").addClass("bg-gradient-primary");
            $('body').removeClass("bg-gradient-secondary");
            langindex = 0;
            bar.set(1.0);
            setLocale(languages[langindex], false);
            getTranslations();
            setButtonInterval('stop');
            $(".timer-title").css("color", "#ffffff");
            $(".timer-text").css("color", "#ffffff");
        }


        // $('#countdown').circleProgress({
        //     animationStartValue: prevTimerValue,
        //     value: timerValue
        // });
    }
}

/**
 * Resume or start the countdown.
 * TODO: change to external timer
 */
function startTimer() {
    if (!timer) {
        timer = window.setInterval(function () {
            updateTime();

            if (remainder > 0) {
                setTime(remainder - 1);
            }
            else {
                stopTimer();
            }
        }, 1000);
    }
}

/**
 * Pause the countdown.
 * TODO: change to external timer
 */
function stopTimer() {
    window.clearInterval(timer);
    timer = null;
}

/**
 * Add given amount of seconds to the remaining time.
 * @param time
 */
function addTime(time) {
    remainder += time;
}

/**
 * Set the amount of remaining seconds.
 * @param time
 */
function setTime(time) {
    remainder = time;
}

function updateTime() {
    updateProgressbar();
    updateTimeText();
}

/**
 * Init the progressbar.
 */
function showTime() {
    // const $countdown = $('#countdown');
    // $countdown.circleProgress({
    //     startAngle: (Math.PI / 4) * 6,
    //     size: 297,
    //     fill: {
    //         color: "white"
    //     },
    //     lineCap: "round",
    //     animation: {
    //         duration: 1000,
    //         easing: "linear"
    //     }
    // });

    setActiveNavCenter('countdown');
}

/**
 * Navigate to given url
 */
function goto(url) {
    window.location = url;
}

/**
 * Set and show the active navigation menu.
 */
function setActiveMenu(menu) {
    const $menus = $('[data-menu]');
    $menus.each(function () {
        if ($(this).data('menu') === menu) {
            $('#timer').removeClass('timer').addClass('timer-' + menu);
            $('#countdown').removeClass('countdown').addClass('countdown-' + menu);
            $(this).show()
        } else {
            $(this).hide()
        }
    });
}

/**
 *
 * Auto close language screen
 *
 */

function runLangTimer() {
    langtimer = window.setTimeout(
        function () {
            languagescreen = 0;
            $('#modal-language-options').fadeOut();
            $('#modal-language-options').modal('hide');
            $('#modal-adv43').modal('show');
        }, 2000);
}

/**
 *
 * Auto close last transaction screen
 *
 */

function runTransactionTimer(dialog) {
    transactionTimer = window.setTimeout(
        function () {
            dialog.closeAll();
        }, 3000);
}


/**
 * Choose an action
 */
function setActiveAction(action) {
    if (action !== 'action-undefined') {

        const $actions = $('[data-action]');
        if (null === action) {
            $actions.each(function () {
                if ($(this).is(':visible') && $(this).data('action') !== 'info' && $(this).data('action') !== 'stop') {
                    this.dataset.state = 'inactive';
                }
            });
        }
        else if ('stop' === action) {

            $actions.each(function () {
                if ($(this).is(':visible') && $(this).data('action') !== 'info' && $(this).data('action') !== 'stop') {
                    this.dataset.state = 'inactive';
                }
            });
            //$('[data-action="info"]').show();
            //$('[data-action="stop"]').hide();
        }
        else if ('action-99' === action) {
            console.log('action-99 touched');
            if (0 === activeinfo) {
                activeinfo = 1;
                $('#modal-2x12').modal('show');
                $('#modal-adv43').modal('hide');
            } else {
                activeinfo = 0;
                $('#modal-2x12').modal('hide');
                $('#modal-adv43').modal('show');
            }
        }
        else if ('action-98' === action) {
            console.log('action-98 touched');
            if (0 === languagescreen) {
                languagescreen = 1;
                $('#modal-language-options').modal('show');
                $('#modal-adv43').modal('hide');
                runLangTimer();
            }
            else {
                //langindex = 0, maxlang = 1;
                if (langindex < maxlang) {
                    $('#language' + langindex).hide();
                    langindex++;
                    $('#language' + langindex).show();
                    setLocale(languages[langindex], false);
                    getTranslations();

                } else {
                    $('#language' + langindex).hide();
                    langindex = 0;
                    $('#language' + langindex).show();
                    setLocale(languages[langindex], false);
                    getTranslations();
                }
                clearTimeout(langtimer)
                runLangTimer();
                console.log('#language' + langindex);
            }
        }
        else {

            $actions.each(function () {
                if ($(this).is(':visible') && $(this).data('action') !== 'info' && $(this).data('action') !== 'stop') {
                    if ($(this).data('action') === action && 'active' === this.dataset.state) {
                        //setActiveAction(null);
                        return false;

                    }
                    else if ($(this).data('action') === action) {
                        this.dataset.state = 'active';
                        // TODO: add functionality to selected item
                    }
                    else {
                        this.dataset.state = 'inactive';
                        //this.dataset.state = 'disabled';
                    }
                }
            });
            $('[data-action="info"]').hide();
            $('[data-action="stop"]').show();
            activeinfo = 0;
            $('#modal-2x12').modal('hide');
        }
    }
}

/**
 * Set the active center item.
 * @param item
 */
function setActiveNavCenter(item) {
    $(".timer-title").show();
    $(".timer-text").show();
    const $items = $('[data-navcenter]');
    $items.each(function () {
        if ($(this).data('navcenter') === item) {
            $(this).show()
        } else {
            $(this).hide()
        }
    });
}

function setActivePayment(item) {
    const $items = $('[data-payment]');
    $items.each(function () {
        if ($(this).data('payment') === item) {
            $(this).show()
        } else {
            $(this).hide()
        }
    });
}

function setAdv43Content(type, item) {

    if (active === 1) {

    }
    // access for all
    var myVideo = document.getElementById("adv43-video");


    if (type === 'video') {

        // load screenshot
        $('#modal-adv43-content').css("background-image", "url(/" + item + ".jpg)");

        // hide the rest
        $('#adv43-video').css('display', 'none');
        $('#adv43-image').css('display', 'none');

        // set first frame
        // ffmpeg -i adv1.mp4 -ss 00:00:00.050 -vframes 1 adv1.mp4.jpg
        // ffmpeg -i adv2.mp4 -ss 00:00:00.050 -vframes 1 adv2.mp4.jpg
        // ffmpeg -i adv3.mp4 -ss 00:00:00.050 -vframes 1 adv3.mp4.jpg
        // ffmpeg -i adv4.mp4 -ss 00:00:00.050 -vframes 1 adv4.mp4.jpg
        // ffmpeg -i adv5.mp4 -ss 00:00:00.050 -vframes 1 adv5.mp4.jpg
        // ffmpeg -i adv6.mp4 -ss 00:00:00.050 -vframes 1 adv6.mp4.jpg
        // ffmpeg -i adv7.mp4 -ss 00:00:00.050 -vframes 1 adv7.mp4.jpg

        setTimeout(function () {

            var video_main_channel = $('#modal-adv43-video-main-channel');
            video_main_channel.attr('src', item);

            myVideo.load();
            myVideo.play();

            // hide video player
            myVideo.addEventListener('ended', endHandler, false);

            function endHandler(e) {
                $('#adv43-video').css('display', 'none');
            }

            setTimeout(function () {
                $('#adv43-video').css('display', 'block');
            }, 250);

        }, 50);

    }

    if (type === 'image') {

        // hide the rest
        $('#adv43-video').css('display', 'none');
        // stop video
        myVideo.pause();

        var image_main_channel = $('#modal-adv43-image-main-channel');
        image_main_channel.attr('src', item);

        $('#adv43-image').css('display', 'block');
    }

}

function stopVideo() {
    var myVideo = document.getElementById("adv43-video");
    myVideo.pause();
}

function readJSON() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/assets/json/lang.json', true);
    xhr.responseType = 'blob';
    xhr.onload = function (e) {
        if (this.status == 200) {
            var file = new File([this.response], 'temp');
            var fileReader = new FileReader();
            fileReader.addEventListener('load', function () {
                //do stuff with fileReader.result
                console.log(fileReader.result);
            });
            fileReader.readAsText(file);
        }
    }
    xhr.send();
}

// function parse(str) {
//     var args = [].slice.call(arguments, 1),
//         i = 0;
//
//     return str.replace(/%s/g, () => args[i++]);
// }
// $(function(){
//
//     var frameSrc = parse('http://%s:800/slideshow.html', host);
//     $('#modal-adv43').on('show.bs.modal', function () {
//        $('iframe').attr("src", frameSrc);
//     });
//
//     var frameSrc = parse('http://%s:800/slideshow.html', host);
//     $('#modal-adv43').on('shown.bs.modal', function () {
//         var mss = new Monoslideshow('monoslideshow', {showLogo: false},  {showRegistration: false});
//         mss.load('advert/monoslideshow.xml');
//     });
//
//     $('#modal-adv43').on('hidden.bs.modal', function () {
//         $(this).data('bs.modal', null);
//     })
// });

function animateCSS(element, animationName, callback) {
    const node = document.querySelector(element)
    node.classList.add('animated', animationName)

    function handleAnimationEnd() {
        node.classList.remove('animated', animationName)
        node.removeEventListener('animationend', handleAnimationEnd)

        if (typeof callback === 'function') callback()
    }

    node.addEventListener('animationend', handleAnimationEnd)
}

function setButtonInterval(button) {

    // remove all timers
    $('[data-action]').each(function (index) {
        clearInterval(functions[$(this).attr('data-action')]);
    });

    // set new interval
    // test if data-action starts with action

    if (button.includes("action")) {

        var number = button.replace('action-', '');
        if(number == 99)
        {
            number =1;
        }
        else if (number == 1)
        {
            number =2;
        }
        else if (number == 2)
        {
            number = 3;
        }
        else if (number == 3)
        {
            number = 4;
        }
        else if (number == 4)
        {
            number = 12;
        }
        else if (number == 12)
        {
            number = 11;
        }
        else if (number == 11)
        {
            number = 10;
        }
        else if (number == 10)
        {
            number = 9;
        }
        else{

        }
        //console.log(number);

        if (typeof functions["action-" + number] !== 'undefined') {
            //console.log('YES');
            functions["action-" + number] = setInterval(function () {
                animateCSS('[data-action="action-' + number + '"]', 'tada');
            }, 3000);
        }
    }
}

$(document).ready(function () {
    setActiveMenu('small');
    //setActiveMenu('normal');
    //setActiveNavCenter('card');
    setActiveNavCenter();

    $('#modal-mhe').modal('show');
    //$('#modal-large').modal('show');
    //$('#modal-large-cutout').modal('show');
    //$('#modal-language').modal('show');
    //$('#modal-prepaid').modal('show');
    langindex = 0;
    setLocale(languages[langindex], false);
    getTranslations();
    $('#language' + langindex).show();
    initConnection();

    // create vars
    $('[data-action]').each(function (index) {
        functions[$(this).attr('data-action')] = '';
    });

    // set interval voor default interval items
    //defaultInterval = setInterval(function () {
    //    animateCSS('#changelang', 'pulse');
    //    animateCSS('#prepaid', 'pulse');
    //   animateCSS('[data-action="info"]', 'pulse');
    //}, 3000);

    //bar.set(1.0);


});