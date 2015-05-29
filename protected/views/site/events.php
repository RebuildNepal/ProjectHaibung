<div class="grid_12 wow fadeInLeft" data-wow-delay="0.2s" style="margin: 20px 0">
        <h1>Events calendar</h1>
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
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
</div>

