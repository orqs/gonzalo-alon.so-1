<?php
    /*
    Template Name: Publish
    */
get_header(); ?>
    <section class="book cf">
      <div class="grid">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>

        <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>

      </div>
      <?php endwhile; endif; ?>
    </section>
<?php get_footer(); ?>
