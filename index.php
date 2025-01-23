<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/css/app.css">
    <script async> var host = '<?php echo $_SERVER["SERVER_ADDR"]; ?>'; </script>
    <title>Carwash</title>
</head>
<body class="bg-gradient-primary page-navigation">
<div class="container">

    <div class="row justify-content-center" data-navcenter="countdown">
        <svg viewBox="0 0 100 100" width="300" height="300">
            <g>
                <!-- <path id="square" d="M-12.5 4 L112.5 4 Q122.5 4 122.5 14 L122.5 64 Q122.5 74 112.5 74 L-12.5 74 Q-22.5 74 -22.5 64 L-22.5 14 Q-22.5 4 -12.5 4 Z"  stroke="#fff" stroke-width="5" fill-opacity="0" style="stroke-dasharray: 384, 384; stroke-dashoffset: 0;"/> -->
                <div id="countdown" class="countdown text-center">
                    <div id="timer" class="timer">
                        <h1 class="timer-title">00:00</h1>
                        <p class="timer-text" data-trans="navigation.countdown.remaining_time"></p>
                    </div>
                </div>
            </g>
        </svg>

    </div>
</div>
<!-- menu small -->
<div class="container-fluid navigation-actions" data-menu="small">
    <div class="row navigation-actions__row">
        <div class="col-4">
            <div class="card nav-box-left" data-state="inactive" data-action="action-1"
                 onclick="setActiveAction('action-1')">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_check text-light"></span>
                    <span class="nav-box__icon--icon icon-chevron_left text-secondary"></span>
                </div>
                <div class="nav-box__body-small">
                    <h7 data-trans="navigation.actions.action_1.title"></h7>
                    <h8 data-trans="navigation.actions.action_1.text"></h8>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card nav-box-right" data-state="inactive" data-action="action-12"
                 onclick="setActiveAction('action-12')">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_check text-light"></span>
                    <span class="nav-box__icon--icon icon-chevron_right text-secondary"></span>
                </div>
                <div class="nav-box__body-small">
                    <h7 data-trans="navigation.actions.action_12.title"></h7>
                    <h8 data-trans="navigation.actions.action_12.text"></h8>
                </div>
            </div>
        </div>
    </div>
    <div class="row navigation-actions__row">
        <div class="col-4">
            <div class="card nav-box-left" data-state="inactive" data-action="action-2"
                 onclick="setActiveAction('action-2')">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_check text-light"></span>
                    <span class="nav-box__icon--icon icon-chevron_left text-secondary"></span>
                </div>
                <div class="nav-box__body-small">
                    <h7 data-trans="navigation.actions.action_2.title"></h7>
                    <h8 data-trans="navigation.actions.action_2.text"></h8>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card nav-box-right" data-state="inactive" data-action="action-11"
                 onclick="setActiveAction('action-11')">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_check text-light"></span>
                    <span class="nav-box__icon--icon icon-chevron_right text-secondary"></span>
                </div>
                <div class="nav-box__body-small">
                    <h7 data-trans="navigation.actions.action_11.title"></h7>
                    <h8 data-trans="navigation.actions.action_11.text"></h8>
                </div>
            </div>
        </div>
    </div>
    <div class="row navigation-actions__row">
        <div class="col-4">
            <div class="card nav-box-left" data-state="inactive" data-action="action-3"
                 onclick="setActiveAction('action-3')">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_check text-light"></span>
                    <span class="nav-box__icon--icon icon-chevron_left text-secondary"></span>
                </div>
                <div class="nav-box__body-small">
                    <h7 data-trans="navigation.actions.action_3.title"></h7>
                    <h8 data-trans="navigation.actions.action_3.text"></h8>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card nav-box-right" data-state="inactive" data-action="action-10"
                 onclick="setActiveAction('action-10')">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_check text-light"></span>
                    <span class="nav-box__icon--icon icon-chevron_right text-secondary"></span>
                </div>
                <div class="nav-box__body-small">
                    <h7 data-trans="navigation.actions.action_10.title"></h7>
                    <h8 data-trans="navigation.actions.action_10.text"></h8>
                </div>
            </div>
        </div>
    </div>
    <div class="row navigation-actions__row">
        <div class="col-4">
            <div class="card nav-box-left" data-state="inactive" data-action="action-4"
                 onclick="setActiveAction('action-4')">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_check text-light"></span>
                    <span class="nav-box__icon--icon icon-chevron_left text-secondary"></span>
                </div>
                <div class="nav-box__body-small">
                    <h7 data-trans="navigation.actions.action_4.title"></h7>
                    <h8 data-trans="navigation.actions.action_4.text"></h8>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card nav-box-right warning" data-state="warning" data-action="stop"
                 onclick="setActiveAction('action-8')">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_close text-light"></span>
                </div>
                <div class="nav-box__body-small">
                    <h7 data-trans="navigation.actions.stop.title"></h7>
                    <h8 data-trans="navigation.actions.stop.text"></h8>
                </div>
            </div>

        </div>
        <div class="col-4">
            <div class="card nav-box-right" data-state="inactive" data-action="action-9"
                 onclick="setActiveAction('action-9')">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_check text-light"></span>
                    <span class="nav-box__icon--icon icon-chevron_left text-secondary"></span>
                </div>
                <div class="nav-box__body-small">
                    <h7 data-trans="navigation.actions.action_9.title"></h7>
                    <h8 data-trans="navigation.actions.action_9.text"></h8>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- menu normal -->

<!-- modals -->
<div>
    <div id="modal-large" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-large">
            <div class="modal-content col-12">
                <div class="modal-large__image text-center">
                    <!--<h1 class="modal-large__text-title--title text-primary-dark col-12" data-trans="splash.welcome_title"></h1> -->
                    <img class="modal-large__image--image" src="assets/images/carwash-logo.png" alt="Logo">
                </div>
                <div class="modal-large__text-title text-center row justify-content-center">
                    <p class="modal-large__text-title--text col-10" data-trans="splash.welcome_text"></p>
                    <img src="assets/images/paymentoptions.png">
                    <p class="modal-large__text-title--subtitle text-primary-dark col-8"
                       data-trans="splash.welcome_subtitle"></p>
                </div>
                <div class="modal-large__usps row">
                    <div class="col-3 modal-large__usps--usp text-center">
                        <img class="modal-large__usps--usp-image" src="assets/images/icon1.png" alt="usp-1">
                        <p class="modal-large__usps--usp-text text-primary" data-trans="splash.icon1"></p>
                    </div>
                    <div class="col-3 modal-large__usps--usp text-center">
                        <img class="modal-large__usps--usp-image" src="assets/images/icon2.png" alt="usp-2">
                        <p class="modal-large__usps--usp-text text-primary" data-trans="splash.icon2"></p>
                    </div>
                    <div class="col-3 modal-large__usps--usp text-center">
                        <img class="modal-large__usps--usp-image" src="assets/images/icon3.png" alt="usp-3">
                        <p class="modal-large__usps--usp-text text-primary" data-trans="splash.icon3"></p>
                    </div>
                    <div class="col-3 modal-large__usps--usp text-center">
                        <img class="modal-large__usps--usp-image" src="assets/images/icon4.png" alt="usp-4">
                        <p class="modal-large__usps--usp-text text-primary" data-trans="splash.icon4"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-large-cutout" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-large-cutout">
            <div class="modal-content-cutout col-12">
                <div class="row">
                    <div class="col-*-*" style="background-color: white; height: 338px; width: 333px; background-image: url('assets/images/bg1.png'); ">

                    </div>
                    <div class="col-*-*"
                         style="background-color: white; height: 338px; width: 592px; text-align: center; background-image: url('assets/images/bg2.png');">
                        <h1 class="modal-2x12__text-title--title text-center text-primary-dark"
                            data-trans="splash.welcome_title"></h1>
                        <div class="modal-large__text-title text-center row justify-content-center">
                            <p class="modal-large__text-title--text col-12" data-trans="splash.welcome_text"></p>
                            <img src="assets/images/paymentoptions%20-%20590.png">
                        </div>
                    </div>
                    <div class="col-*-*" style="background-color: white; height: 338px; width: 335px; background-image: url('assets/images/bg3.png');">

                    </div>
                </div>
                <div class="row">
                    <div class="col-*-*" style="background-color: white; height: 442px; width: 333px; background-image: url('assets/images/bg4.png');">
                        <!--<div class="modal-large-cutout__usps row" style="margin-bottom: 45px;">
                            <div class="col-12 modal-large-cutout__usps--usp text-center">
                                <img class="modal-large-cutout__usps--usp-image" src="assets/images/icon1.png" alt="usp-1">
                                <p class="modal-large-cutout__usps--usp-text text-primary" data-trans="splash.icon1"></p>
                            </div>
                        </div>

                        <div class="modal-large-cutout__usps row">
                            <div class="col-12 modal-large-cutout__usps--usp text-center">
                                <img class="modal-large-cutout__usps--usp-image" src="assets/images/icon2.png" alt="usp-2">
                                <p class="modal-large-cutout__usps--usp-text text-primary" data-trans="splash.icon2"></p>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-*-*" style="height: 442px; width: 592px; background-image: url('assets/images/bg5.png');">

                    </div>
                    <div class="col-*-*" style="background-color: white; height: 442px;width: 335px; background-image: url('assets/images/bg6.png');">
                        <!--<div class="modal-large-cutout__usps row" style="margin-bottom: 45px;">
                            <div class="col-12 modal-large-cutout__usps--usp text-center">
                                <img class="modal-large-cutout__usps--usp-image" src="assets/images/icon3.png"
                                     alt="usp-3">
                                <p class="modal-large-cutout__usps--usp-text text-primary"
                                   data-trans="splash.icon3"></p>
                            </div>
                        </div>

                        <div class="modal-large-cutout__usps row">
                            <div class="col-12 modal-large-cutout__usps--usp text-center">
                                <img class="modal-large-cutout__usps--usp-image" src="assets/images/icon4.png"
                                     alt="usp-4">
                                <p class="modal-large-cutout__usps--usp-text text-primary"
                                   data-trans="splash.icon4"></p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-normal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-normal">
            <div class="modal-content">

            </div>
        </div>
    </div>

    <div id="modal-mhe" class="modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
        <div class="modal-mhe">
            System by: HOFFS - ENGINEERING B.V. - Empowering Carwash Experience
        </div>
    </div>

    <div id="modal-2x12" class="modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-2x12">
            <div class="modal-content col-12">
                <div class="row">
                    <div class="modal-2x12__image text-center col-4">
                        <img class="modal-2x12__image--image" src="assets/images/carwash-logo.png" alt="Logo">
                    </div>
                    <div class="modal-2x12__text-title col-8">
                        <h1 class="modal-2x12__text-title--title text-left text-primary-dark"
                            data-trans="washinstructions.welcome_title"></h1>
                        <p class="modal-2x12__text-title--text" data-trans="washinstructions.instructions"></p>
                        <p class="modal-2x12__text-title--subtitle text-primary-dark"
                           data-trans="washinstructions.finishline"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-language" class="modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-language">
            <div class="modal-content col-12" style="box-shadow: unset; text-align: right; background-color: unset;">
                <div class="row">
                    <div class="modal-language__text-title col-12">
                        <img id="changelang" class="modal-large__usps--usp-image" src="assets/images/changlang.png" alt="usp-2"
                             onclick="$('#modal-language-options').modal('show')">
                        <p class="modal-language--text text-primary-dark" data-trans="language.language"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-prepaid" class="modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-prepaid">
            <div class="modal-content col-12" style="box-shadow: unset; text-align: left; background-color: unset;">
                <div class="row">
                    <div class="modal-prepaid-title col-12">
                        <img id="prepaid" class="modal-large__usps--usp-image pulse-button" src="assets/images/prepaid.png" alt="usp-2"
                             onclick="$('#modal-prepaid-options').modal('show')">
                        <p class="modal-prepaid--text text-primary-dark" data-trans="prepaid.prepaid"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-language-options" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="row justify-content-center " style="min-height: 100%; display: flex; align-items: center;">
            <div class="col-4 text-center modal-language-show">
                <div class="row modal-language-options__text-title">
                    <div class="col-5 modal-large__usps--usp text-center">
                        <span id="language0" class="nav-box__icon--icon icon-chevron_right text-light text-secondary"
                              style="display: none;"></span>
                    </div>
                    <div class="col-5 modal-large__usps--usp text-right">
                        <p class="modal-language--text text-primary" data-trans="language.dutch"
                           style="margin-top: 10px;"></p>
                    </div>
                    <div class="col-2 modal-large__usps--usp text-center">
                        <img src="assets/images/dutchflag.png">
                    </div>
                </div>
                <div class="row modal-language-options__text-title">
                    <div class="col-5 modal-large__usps--usp text-center">
                        <span id="language1" class="nav-box__icon--icon icon-chevron_right text-light text-secondary"
                              style="display: none;"></span>
                    </div>
                    <div class="col-5 modal-large__usps--usp text-right">
                        <p class="modal-language--text text-primary" data-trans="language.english"
                           style="margin-top: 10px;"></p>
                    </div>
                    <div class="col-2 modal-large__usps--usp text-center">
                        <img src="assets/images/united-kingdom-flag.png">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-last-money" class="modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-last-money">
            <div class="modal-content col-12 bg bg-money" style="box-shadow: unset;">
                <div class="row">
                    <div class="col-12">
                        <p id="transactiontitle" class="modal-last-money__text-title text-primary-dark"
                           data-trans="transaction.title"></p>
                    </div>
                    <div class="col-12">
                        <p id="native" class="modal-last-money--text text-primary-dark"
                           data-trans="transaction.microcoin" style="display: inline;" data-payment="native"></p>
                        <p id="payter1" class="modal-last-money--text text-primary-dark"
                           data-trans="transaction.contactloos" style="display: inline;" data-payment="payter1"></p>
                        <p id="amount" class="modal-last-money--text text-primary-dark"
                           style="display: inline;"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-adv43" class="modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
        <div class="modal-adv43" >
            <div id="modal-adv43-content" style="width: 600px; height: 450px;">
                <iframe id="adv43iframe" src="http://<?php echo $_SERVER["SERVER_ADDR"]; ?>:803/" width="800px" height="600"
                        frameborder="1" seamless="seamless" scrolling="no">Your browser does not support
                    iframes.<br/>
                </iframe>

            </div>
        </div>
    </div>

</div>

</div>
<!-- scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/bootstrap-dialog/js/bootstrap-dialog.min.js"></script>
<script src="vendor/jquery-circle-progress/dist/circle-progress.js"></script>
<script src="vendor/progressbar/progressbar.js"></script>

<script src="assets/js/lang.js"></script>

<script src="assets/js/payoniq.js"></script>
<script src="assets/js/connection.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>