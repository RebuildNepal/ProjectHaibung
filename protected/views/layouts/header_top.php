<div id="stuck_container">
    <div class="container">
        <div class="company">
            <div class="company_cnt">
                <h1 class="name">
                    <a href="<?php echo Yii::app()->createUrl('/'); ?>">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/HaibungBlue.png" alt="" width="200px" height="150px"/>
                    </a>
                </h1>

                <p class="company_slogan" style="padding-left: 10px">"आज नगरे कहिले! हामीले नगरे कस्ले?"</p>
            </div>
        </div>
        <div class="wrap">
            <div class="social-wrap">
                <ul class="social-list">
                    <li>
                        <a class="fa fa-facebook" target="_blank" href="https://www.facebook.com/groups/1583152681970817/"></a>
                    </li>
                    <li>
                        <a class="fa fa-twitter" href="#"></a>
                    </li>
                   
                   <a href="http://igg.me/at/projecthaibung/x/10971723" target="_blank" style="margin-left: 20px;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/donate.jpeg" width="100" height="60"/></a>
                    
                </ul>
                <?php //$this->renderPartial('//layouts/search'); ?>
                <div class="clearfix"></div>
            </div>
            <?php $this->renderPartial('//layouts/nav'); ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
