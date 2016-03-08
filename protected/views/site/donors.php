<div class="wrapper1">
    <div class="row">
        <div class="grid_9 wow" data-wow-delay="0.2s">
            <h2>Latest Update on donors</h2>

            <div class="box">
                <div class="box_cnt">
                    <p>Without the philanthropy of our donors, the school building project would not be possible. To acknowledge the gifts of our supporters permanently, we will have a donor wall which will have names of every donor inscribed, big or small.
                        In addition, for big donor recognition, we are assigning values to potential naming spaces like classrooms, office and building blocks. They can have these spaces named after them or in memory of their loved ones.</p>


                </div>
            </div>
            <br>
            <div class="maxheight">
                <h2>Spaces: </h2>
                <ul class="number-list">
                    <li data-number="1">
                        <p></p>
                        <p class="off1" style="padding-top: 20px;">USD $5,000 to $10,000 classrooms</p>
                        <p></p>
                        <div class="clearfix"></div>
                    </li>
                    <li data-number="2">
                        <p></p>
                        <p class="off1" style="padding-top: 20px;">USD $10,000 to $15,000 office building (There is 1 office building)</p>
                        <p></p>
                        <div class="clearfix"></div>
                    </li>
                    <li data-number="3">
                        <p></p>
                        <p class="off1" style="padding-top: 20px;">USD $15k and above big block (There are 2 big blocks, one we will name after Tim & Jane Meyer Family Foundation (T&JMFF))</p>
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
