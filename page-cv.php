<?php get_header(); ?>
  <section>
		<div class="grid clearfix">
			<div class="column-8">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>