<?php get_header(); ?>
  <section>
		<div class="grid clearfix">
			<div class="column-12 clearfix">
         <?php
          $portfolio_posts = get_posts('category_name=portfolio&numberposts=6&orderby=date&order=DESC');
          foreach($portfolio_posts as $post) : setup_postdata($post);
        ?>
            <article id="post-<?php the_ID(); ?>">
              <a href="<?php the_permalink(); ?>">
              <?php 
                if ( has_post_thumbnail()) {
                   $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                 echo '<img src="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" />';
 }
              ?>
                </a>
              <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
              </a>
              <p><?php the_excerpt(); ?></p>
            </article>


        <?php endforeach; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>