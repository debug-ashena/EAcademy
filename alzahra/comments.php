<?php

if ( post_password_required() ) {
	return;
}
?>
<div class="comments_area" id="comments">	
	<?php if (have_comments()) : ?>
		<h2 class="comments-title"> 
		دیدگاه ها
		</h2>
			
		<ol class="comment-list">

			<?php
			wp_list_comments(
				array(
					'short_ping'  => true,
					'avatar_size' => 20,
					'date'        => true,
					'style'       => 'ol',
				)
			);
			?>
		</ol>
		
		<?php if (get_comment_pages_count() >1 && get_option ('page_comments') ) : ?>
			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			
			    <div class="nav-previous"> <?php previous_comments_link("نظرات قدیمی تر"); ?> </div>
			    <div class="nav-next"> <?php next_comments_link("صفحه بعد"); ?> </div>
			</nav>
		<?php endif;  ?>
				
	
        <?php if ( !comments_open()  ):  ?>
		   <p class="no-comments"/> نظرات برای این صفحه بسته هستند  </p>
		   <?php _e('comments are closed'); ?>
		<?php endif; ?>
	<?php endif;  ?>
	
	<?php comment_form(); ?>
		
</div>
