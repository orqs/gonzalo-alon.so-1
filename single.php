<?php get_header(); ?>
  <section class="posts cf">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <article>
      <header>
        <h2 class="titulo"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
      </header>
        <?php the_content(); ?>
      <footer>
        <p class="meta"><?php the_time('d') ?> <?php the_time('M') ?><?php the_time('Y') ?></p>
      </footer>
    </article>
  <?php endwhile; endif; ?>
  <div class="comments">
    <?php comments_template(); ?>
  </div>
  </section>
  <aside>
      <?php get_sidebar(); ?>
  </aside>
<?php get_footer(); ?>
