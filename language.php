<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="assets/css/app.css">

    <title>Carwash</title>
</head>
<body class="bg-gradient-primary page-language">
<div class="container-fluid language-actions">
    <div class="row language-actions__row justify-content-end">
        <div class="col-4">
            <div class="card nav-box-right" onclick="setLocale('NL', true)">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_dutch flag-icon">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                    </span>
                </div>
                <div class="nav-box__body">
                    <h2 class="nav-box__body--title">Nederlands</h2>
                    <p class="nav-box__body--text">Druk hier om verder te<br>gaan in uw eigen taal</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row language-actions__row justify-content-end">
        <div class="col-4">
            <div class="card nav-box-right" onclick="setLocale('FR', true)">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_francais flag-icon">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                    </span>
                </div>
                <div class="nav-box__body">
                    <h2 class="nav-box__body--title">Français</h2>
                    <p class="nav-box__body--text">Appuyez ici pour continuer dans votre propre langue</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row language-actions__row justify-content-end">
        <div class="col-4">
            <div class="card nav-box-right" onclick="setLocale('EN', true)">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_english flag-icon">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                    </span>
                </div>
                <div class="nav-box__body">
                    <h2 class="nav-box__body--title">English</h2>
                    <p class="nav-box__body--text">Press here to continue in your own language</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row language-actions__row">
        <div class="col-4">
            <div class="card nav-box-left" data-state="warning" onclick="goto('/')">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_close text-light"></span>
                </div>
                <div class="nav-box__body">
                    <h2 class="nav-box__body--title" data-trans="language.cancel.title"></h2>
                    <p class="nav-box__body--text" data-trans="language.cancel.text"></p>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card nav-box-right" onclick="setLocale('DE', true)">
                <div class="nav-box__icon">
                    <span class="nav-box__icon--icon icon-icon_deutsch flag-icon">
                        <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                    </span>
                </div>
                <div class="nav-box__body">
                    <h2 class="nav-box__body--title">Deutch</h2>
                    <p class="nav-box__body--text">Klicken Sie hier, um in Ihrer eigenen Sprache fortzufahren</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery-circle-progress/dist/circle-progress.js"></script>
<script src="assets/js/lang.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>