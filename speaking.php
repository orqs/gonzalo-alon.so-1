<?php
    /*
    Template Name: Speaking
    */
get_header(); ?>
  <section>
    <div class="talks">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>

      <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>

    <?php endwhile; endif; ?>
    </div>
  </section>
<?php get_footer(); ?>
