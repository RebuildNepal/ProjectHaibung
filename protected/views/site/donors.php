<div class="wrapper1">
    <div class="row">
        <div class="grid_9 wow" data-wow-delay="0.2s">
            <h2>Latest Update on donors</h2>

            <div class="box">
                <div class="box_cnt">
                    <p>
                    Without the generosity of our donors, the school building project would not be possible. To permanently acknowledge the gifts of our supporters, the name of every donor will be inscribed on a dedicated wall of the school. In addition, naming opportunities are available in recognition of larger donations as follows:
                    </p>
                </div>
            </div>
            <br>
            <div class="maxheight">
                <h2>Spaces: </h2>
                <ul class="number-list">
                    <li data-number="1">
                        <p></p>
                        <p class="off1" style="padding-top: 20px;">USD $5,000 to $10,000:  multiple classrooms are available</p>
                        <p></p>
                        <div class="clearfix"></div>
                    </li>
                    <li data-number="2">
                        <p></p>
                        <p class="off1" style="padding-top: 20px;">USD $10,000 to $15,000: one administration building is available</p>
                        <p></p>
                        <div class="clearfix"></div>
                    </li>
                    <li data-number="3">
                        <p></p>
                        <p class="off1" style="padding-top: 20px;"> USD $15k and above: two big blocks are available (one is already reserved for our cornerstone donor, the T & J Meyer Family Foundation)</p>
                        <p></p>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="wrapper2 wrapper2__in1">
    <h2 class=" wow fadeInUp" data-wow-delay="0.2s">Donors</h2>


    <div class="row">
        <?php foreach ($donors as $donor) { ?>
            <div class="grid_3  wow fadeInLeft" data-wow-delay="0.2s">
                <div class="partner">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibungblue_43_41.png" alt=""/>
                    <div class="partner_cnt">
                        <h3>
                            <a href="#"><?php echo $donor->FirstName . ' ' . $donor->LastName; ?></a>
                        </h3>
                        <p><b><?php echo $donor->CurrencyCode . ' ' . $donor->Amount; ?></b></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<p style="font: 9px; font-style: italic; padding-bottom: 20px">List of donors funding Project Haibung Last update, February 2016</p>
