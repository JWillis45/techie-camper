<?php get_header(); ?>



<?php 

$args = array ('post_type' => 'features');

$features = new WP_Query( $args );


if ($features -> have_posts()) : while ($features -> have_posts()) : $features -> the_post(); 


?>


<div class="row">
	<div class="col-xs-12">
      <div class="main-image">
      	<a href="<?php the_permalink() ?>">
     
 <div class="row">
  <div class="col-xs-12 feature-image">
    <?php the_content();?>
  </div>
</div>

<div class="row">     
    <div class="col-xs-12">
      <div class="title-box">
        <?php the_title();?>
      </div>
    </div>
</div>

  </div>
      	</a>
      </div>
    </div>

    <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>




<?php get_footer(); ?>