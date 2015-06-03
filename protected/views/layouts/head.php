    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="en">

        <meta name="format-detection" content="telephone=no"/>


        <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/asset/css/grid.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/asset/css/camera.css"/>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/asset/css/touchTouch.css"/>
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/asset/css/style.css">
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/asset/js/jquery.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/asset/js/jquery-migrate-1.2.1.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/asset/js/camera.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/asset/js/jquery.equalheights.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/asset/js/touchTouch.jquery.js"></script>
        <script>
            $(function () {
                $('a[data-gal]').touchTouch();
            });
        </script>
        <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/asset/js/jquery.mobile.customized.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/asset/js/wow/wow.js"></script>
        <script>
            $(document).ready(function () {
                if ($('html').hasClass('desktop')) {
                    new WOW().init();
                }
            });
        </script>
        <title> Project Haibung </title>
    </head>
