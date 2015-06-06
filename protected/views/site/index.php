
<section id="content" class="content">

    <div class="container">
        <div class="wrapper1">
            <div class="row">
                <div class="grid_4 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="aside-border maxheight">
                        <h2>Events calendar</h2>
                        <ul class="event-list">
                            <?php foreach ($calendars as $calendar) { ?>
                                <li>
                                    <div class="box">
                                        <div class="box_left">
                                            <p class="event_date"><?php echo date('d', strtotime($calendar->EventDate)); ?> <br/><span><?php echo date('M', strtotime($calendar->EventDate)); ?></span></p>
                                        </div>
                                        <div class="box_cnt o__hidden">
                                            <h3>
                                                <a href="#"><?php echo $calendar->Title; ?></a>
                                            </h3>
                                            <p class="off1"><?php echo $calendar->Description; ?></p>
                                            <a class="btn" href="<?php echo Yii::app()->createUrl('site/events'); ?>">more info</a>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php echo $this->renderPartial('_index'); ?>
                <div class="grid_3  wow fadeInRight" data-wow-delay="0.2s">
                    <div style="margin-bottom: 20px">
                        <a href="http://igg.me/at/projecthaibung/x/10971723" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/donate.jpeg"></a>
                    </div>

                    <div>
                        <h2>Sponsors & Donors:</h2>

                        <ul class="icon-list" style="margin-top: 20px">
                            <li>
                                <div class="box">
                                    <div class="box_cnt o__hidden">
                                        <p>
                                            <span style="font-weight: bold">Surya Ply</span><br>
                                            Donation in kind: Plywood
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="box_cnt o__hidden">
                                        <p>
                                            <span style="font-weight: bold">Sarawagi Rugs</span><br>
                                            Amount: $2080
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="box_cnt o__hidden">
                                        <p>
                                            <span style="font-weight: bold">Pavle Uroda</span><br>
                                            Amount: $500
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="box_cnt o__hidden">
                                        <p>
                                            <span style="font-weight: bold">Fiona Castelino</span><br>
                                            Amount: $500
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="wrapper2">
            <div class="row">
                <div class="grid_3  wow fadeInLeft" data-wow-delay="0.2s">
                    <h2>#ProjectHaibung!</h2>

                    <div class="quote-box">
                        <p>100% of the funds raised will go directly to rebuild schools for the benefit of about 720 children in Haibung, Nepal. </p>
                    </div>
                    
                    <div class="quote-box">
                        <p>Let us not let this earthquake strip away a child's right to education.</p>
                    </div>

                </div>
                <div class="preffix_1 grid_8  wow fadeInRight" data-wow-delay="0.2s">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/noFHdM8F-qc" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <hr/>
        <div class="wrapper2">
            <div class="row">
                <div class="grid_3  wow fadeInLeft" data-wow-delay="0.2s">
                    <h2>Why Haibung?</h2>
                  
                    <h3></h3>
                    <div>
                        <p>Haibung is a village of 576 families in Sindhupalchowk district where 95% of the houses have been destroyed including all of its five schools. Almost 720 children who come from poor family backgrounds now have no access to learning and are out of school. Their only hope for a better future is through education and now they are being stripped of this opportunity.</p>
                    </div>
                </div>
                <div class="preffix_1 grid_8  wow fadeInRight" data-wow-delay="0.2s">
                    <h2>Who are we?</h2>

                    <p>We are not a registered organization. We are a team of dedicated Nepali youth who have pledged to rebuild three schools in Haibung by leveraging our resources and personal networks together with the help of volunteers in the village.</p>
                    <a class="btn" href="<?php echo Yii::app()->createUrl('site/about'); ?>">more info</a>
                    <h3></h3>
                    <div class="row">
                        <div class="grid_2">
                            <div class="img-wrap">
                                <img class="img-border" src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_1_175_125.png" alt=""/>
                                <a data-gal href="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_1.jpg"></a>
                            </div>
                        </div>
                        <div class="grid_2">
                            <div class="img-wrap">
                                <img class="img-border" src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_2_175_125.png" alt=""/>
                                <a data-gal href="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_2.jpg"></a>
                            </div>
                        </div>
                        <div class="grid_2">
                            <div class="img-wrap">
                                <img class="img-border" src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_3_175_125.png" alt=""/>
                                <a data-gal href="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_3.jpg" width="100px" height="100px"></a>
                            </div>
                        </div>
                        <div class="grid_2">
                            <div class="img-wrap">
                                <img class="img-border" src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_4_175_125.png" alt=""/>
                                <a data-gal href="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/haibung_images/haibung_4.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
    </div>

</section>
