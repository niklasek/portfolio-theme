<?php get_header(); ?>
  <section>
		<div class="grid clearfix">
      <div class="column-4">
        <h3>Projekt</h3>
        <ul>
        <?php
          $portfolio_posts = get_posts('category_name=portfolio&numberposts=-1&orderby=date&order=DESC');
          foreach($portfolio_posts as $post) : setup_postdata($post);
        ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endforeach; ?>
          </ul>
      </div>
			<div class="column-8">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>">
              <a href="<?php the_permalink(); ?>">
              <?php 
                if ( has_post_thumbnail()) {
                   $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
                 echo '<img src="' . $full_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" />';
 }
              ?>
                </a>
              
                <h3><?php the_title(); ?></h3>
              
              <p><?php the_content(); ?></p>
            </article>

          <?php endwhile; ?>
        <?php endif; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>