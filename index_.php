<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="assets/css/app.css">

    <script> var host = '<?php echo $_SERVER["SERVER_ADDR"]; ?>'; </script>

    <title>Carwash</title>
</head>
<body class="bg-gradient-primary page-welcome">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center welcome-text">
                <h1 class="text-white welcome-text__title" data-trans="welcome.welcome_title"></h1>
                <p class="text-white welcome-text__text" data-trans="welcome.welcome_text"></p>
                <p class="text-white welcome-text__subtitle" data-trans="welcome.welcome_subtitle"></p>
            </div>
        </div>
    </div>
    <div class="container-fluid welcome-actions">
        <div class="row welcome-actions__row">
            <div class="col-4">
                <div class="card nav-box-left" onclick="$('#payoniq-modal').modal('show')">
                    <div class="nav-box__icon">
                        <span class="nav-box__icon--icon icon-icon_payconiq"></span>
                    </div>
                    <div class="nav-box__body">
                        <h2 class="nav-box__body--title text-payoniq" data-trans="welcome.payoniq.title"></h2>
                        <p class="nav-box__body--text" data-trans="welcome.payoniq.text"></p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h2 class="text-white welcome-action-text text-center" data-trans="welcome.payment_method"></h2>
            </div>
            <div class="col-4">
                <div class="card nav-box-right" onclick="goto('/navigation.php'); startTimer()">
                    <div class="nav-box__icon">
                        <span class="nav-box__icon--icon icon-icon_contactloosbetalen text-contactless-payment"></span>
                    </div>
                    <div class="nav-box__body">
                        <h2 class="nav-box__body--title text-contactless-payment" data-trans="welcome.contactless_payment.title"></h2>
                        <p class="nav-box__body--text" data-trans="welcome.contactless_payment.text"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row welcome-actions__row">
            <div class="col-4">
                <div class="card nav-box-left bg-card-secondary" onclick="goto('/language.php')">
                    <div class="nav-box__icon">
                        <span class="nav-box__icon--icon icon-chevron_left text-white"></span>
                    </div>
                    <div class="nav-box__body">
                        <h2 class="nav-box__body--title text-white" data-trans="welcome.change_language.title"></h2>
                        <p class="nav-box__body--text text-white" data-trans="welcome.change_language.text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div id="payoniq-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-normal">
                <div class="modal-content">
                    <div id="qrcode-1"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- scripts -->
    <script src="vendor/jquery/dist/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery-circle-progress/dist/circle-progress.js"></script>

    <script src="assets/js/lang.js"></script>

    <script src="assets/js/payoniq.js"></script>
    <script src="assets/js/connection.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>