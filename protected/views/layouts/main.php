<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <?php $this->renderPartial('//layouts/head');?>
    <body>
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NGQW8G"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NGQW8G');</script>
        <!-- End Google Tag Manager -->
        <div class="page">
            <div class="wrap-container">
                <?php $this->renderPartial('//layouts/header'); ?>
                <?php echo $content; ?>
                <?php $this->renderPartial('//layouts/footer'); ?>
            </div>
        </div>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/asset/js/script.js"></script>
    </body>
</html>
