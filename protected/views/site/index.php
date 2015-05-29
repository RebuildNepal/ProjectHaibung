
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
                        <a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/donate.jpeg"></a>
                    </div>

                    <div>
                        <h2>Sponsors & Donors:</h2>

                        <ul class="icon-list" style="margin-top: 20px">
                            <li>
                                <div class="box">
                                    <div class="box_left">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/profile.png" alt=""/>
                                    </div>
                                    <div class="box_cnt o__hidden">
                                        <p>
                                            <span style="font-weight: bold">Lorem ipsum</span><br>
                                            Amount: $300
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="box_left">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/profile.png" alt=""/>
                                    </div>
                                    <div class="box_cnt o__hidden">
                                        <p>
                                            <span style="font-weight: bold">Lorem ipsum</span><br>
                                            Amount: $300
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="box">
                                    <div class="box_left">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/asset/images/profile.png" alt=""/>
                                    </div>
                                    <div class="box_cnt o__hidden">
                                        <p>
                                            <span style="font-weight: bold">Lorem ipsum</span><br>
                                            Amount: $300
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
                    <h2>Why Education?</h2>

                    <div class="quote-box">
                        <p>Education is our passport to the future, for tomorrow belongs to the people who prepare for it today.</p>

                        <h3>
                            <a href="#">Malcolm X</a>
                        </h3>
                    </div>

                    <div class="quote-box">
                        <p>The educated differ from the uneducated as much as the living differ from the dead.</p>

                        <h3>
                            <a href="#">Aristotle</a>
                        </h3>
                    </div>

                </div>
                <div class="preffix_1 grid_8  wow fadeInRight" data-wow-delay="0.2s">
                    <h2>Photostream</h2>

                    <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing. Praesent vestibu lum molestie. lacuiirhs.
                        Aenean non ummy hendreriau. ris. Phasellllus. porta. Fusce suscipit varius mium sociis totdnatibus
                        et magis dis parturient montes, nascetur ridiculus mus.</p>

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