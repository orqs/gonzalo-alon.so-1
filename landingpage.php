<?php
    /*
    Template Name: Landingpage
    */
get_header(); ?>

    <section class="landing cf">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>

        <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>

      <?php endwhile; endif; ?>
    </section>


<?php get_footer(); ?>
