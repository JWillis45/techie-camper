<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <h2 class="category-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>


<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>