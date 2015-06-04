<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <?php $this->renderPartial('//layouts/head');?>
    <body>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-63732372-1', 'auto');
        ga('send', 'pageview');
        </script>
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
