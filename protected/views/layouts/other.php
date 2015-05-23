<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
    <?php $this->renderPartial('//layouts/head'); ?>
    <body>
        <div class="page">
            <div class="wrap-container">
                <?php $this->renderPartial('//layouts/_header'); ?>
                <section id="content" class="content">

                    <div class="container">
                        <?php echo $content; ?>
                    </div>
                </section>
                <?php $this->renderPartial('//layouts/footer'); ?>
            </div>
        </div>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/asset/js/script.js"></script>
    </body>
</html>


