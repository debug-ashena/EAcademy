<?php get_header(); ?>
<div class="clear"></div>

 <?php

            while (have_posts())
            {
                the_post();
                ?>

                <article  class="post">
                    <header>
                        <div  class="post-title">
                            <h2><a href=" <?php the_permalink();?> "><?php  the_title();?> </a></h2>
                        </div>
                    </header>

                    <div class="post-content">
                        <?php
                        the_content("");
                        ?>
                    </div>
                    <footer>
                        <div>
                            <a href="#" onmouseover="tooltip.pop(this,'#sub1<?php the_ID(); ?>',{position:0,effect:'slide'})"> <span class="fa fa-user fa-2x"></span></a>
                            <div style="display: none">
                                <div id="sub1<?php the_ID(); ?>">نویسنده:<?php  the_author(); ?> </div>
                            </div>
                        </div>

                        <div>
                            <a href="#" onmouseover="tooltip.pop(this,'#sub2<?php the_ID(); ?>',{position:0,effect:'slide'})"> <span class="fa fa-comments fa-2x"></span></a>
                            <div style="display: none">
                                <div id="sub2<?php the_ID(); ?>">نظرات: <?php echo get_comments_number(); ?> </div>
                            </div>
                        </div>

                        <div>
                            <a href="#" onmouseover="tooltip.pop(this,'#sub3<?php the_ID(); ?>',{position:0,effect:'slide'})"> <span class="fa fa-tags fa-2x"></span></a>
                            <div style="display: none">
                                <div id="sub3<?php the_ID(); ?>">برچسب ها: <?php  the_tags("-");?> </div>
                            </div>
                        </div>
						<div>
                            <a href="#" onmouseover="tooltip.pop(this,'#sub4<?php the_ID(); ?>',{position:0,effect:'slide'})"> <span class="fa fa-sitemap fa-2x"></span></a>
                            <div style="display: none">
                                <div id="sub4<?php the_ID(); ?>"> دسته:<?php  the_category(",");?> </div>
                            </div>
                        </div>

                        <div>
                            <a href="#" onmouseover="tooltip.pop(this,'#sub5<?php the_ID(); ?>',{position:0,effect:'slide'})"> <span class="fa fa-calendar fa-2x"></span></a>
                            <div style="display: none">
                                <div id="sub5<?php the_ID(); ?>">  تاریخ انتشار:<?php echo get_the_date("y/m  /d");?> </div>
                            </div>
                        </div>
                        
                    </footer>
                </article>
			   <?php

            }
            ?>
				<?php 
		    if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif ;
		        ?>
				
				<?php //get_sidebar("single"); ?>		
		</div>
		
		
		
		</div>
	<div class="clear"></div>
<?php get_footer(); ?>

             
	

 