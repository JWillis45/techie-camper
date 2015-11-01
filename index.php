<?php get_header(); ?>


<?php query_posts('showposts=2'); ?>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>
<div class="row">
	<div class="col-xs-12">
      <div class="main-image">
      	<a href="<?php the_permalink() ?>">
      		
      		<?php the_content();
?>
      	</a>
      </div>
    </div>
</div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>