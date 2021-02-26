<aside class="left-sidebar">
				<section  class="sidebox">
				   <h3>  Last papers </h3>
				   <ul>
				    <?php
						$q=new WP_Query(
							array("posts_per_page"=>5)
							);
						while($q-> have_posts())
						{
							$q->the_post();
					?>
						<li><a href=" <?php the_permalink(); ?> "> <?php the_title(); ?> </a></li>

					<?php
						}
						wp_reset_postdata();
					 ?>
				
				   </ul>
				</section>
				
				<h3></h3>
				<?php dynamic_sidebar('sidebar-id'); ?>
					   
					   
			    <section  class="sidebox">
				   <h3>  Most Views </h3>
				   <ul>
				    <?php
						$q=new WP_Query(
							array(
							    "posts_per_page"=>5,
							    "meta_key"=>"views",
								"orderby"=>"meta_value_num",
								"order"=>"DECS"
							)
							);
						while($q-> have_posts())
						{
							$q->the_post();
					?>
						<li><a href=" <?php the_permalink(); ?> "> <?php the_title(); ?> </a></li>

					<?php
						}
						wp_reset_postdata();
					 ?>
					 
					   
					  

				   </ul>
				</section>
				
				<?php dynamic_sidebar('text-ads') ?>
</aside>
