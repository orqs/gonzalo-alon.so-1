<?php
    /*
    Template Name: lpages
    */
get_header(); ?>
    <section class="lpages">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <div class="lp-one-right">
        <?php the_content('<p class="serif">Read the rest of this page �</p>'); ?>
</div>
      <?php endwhile; endif; ?>
    </section>
<?php get_footer(); ?>
