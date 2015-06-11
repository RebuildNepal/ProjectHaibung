
<div class="wrapper1">
    <h2 class="wow fadeInUp" data-wow-delay="0.3s">Our Blog</h2>

    <?php foreach($blogs as $blog){?>
    <div class="post  wow fadeInLeft" data-wow-delay="0.3s">
        <div class="event_date"><?php echo date('d',  strtotime($blog->DateCreated));?> <br/><span><?php echo date('M',  strtotime($blog->DateCreated));?></span></div>
        <div class="post_header_cnt o__hidden">
            <h3>
                <a href="#"><?php echo $blog->Title;?></a>
            </h3>

            <div class="post_meta">
                <p class="post_author">Posted by
                    <a href="#">Project Haibung Team</a>
                </p>

                <!--<p class="post_comment">
                    <a href="#">9 comments</a>
                </p>-->
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="post_cnt">
            <div class="o__hidden">
                <?php echo $blog->Description;?>
                <!--<a class="btn" href="#">read more</a>-->
            </div>
        </div>
        
        <div class="clearfix"></div>
        
        <div style="margin-top: 10px">
        </div>
    </div>
    <?php } ?>
</div>
