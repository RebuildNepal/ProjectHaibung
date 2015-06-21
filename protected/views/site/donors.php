<div class="wrapper2 wrapper2__in1">
    <h2 class=" wow fadeInUp" data-wow-delay="0.2s">Donors</h2>
    
    <div class="row">
        <?php foreach($donors as $donor){?>
        <div class="grid_3  wow fadeInLeft" data-wow-delay="0.2s">
            <div class="partner">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibungblue_43_41.png" alt=""/>
                <div class="partner_cnt">
                    <h3>
                        <a href="#"><?php echo $donor->FirstName . ' ' . $donor->LastName;?></a>
                    </h3>
                    <p><b><?php echo $donor->CurrencyCode . ' ' . $donor->Amount;?></b></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
