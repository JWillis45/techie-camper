<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php echo get_the_date(); ?> by <?php the_author(); ?>

     <?php the_content(); ?>
      <p>
   	
	  <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
      
      </p>

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>