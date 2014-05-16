<?php
    /*
    Template Name: Blog
    */
define('WP_USE_THEMES', false);  get_header(); ?>
    <section class="posts cf">
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <article>
        <header>
          <h2 class="titulo"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        </header>
          <?php the_content('<p class="serif">Read the rest of this page �</p>'); ?>
        <footer>
          <p class="meta">T	<?php the_time('d') ?> <?php the_time('M') ?><?php the_time('Y') ?></p>
        </footer>
      </article>
      <?php endwhile; endif; ?>
    <aside>
      <img src="/build/images/mono.png" alt="moño" />
      <ul>
        <li>RSS Feed</li>
        <li>@twitter</li>
        <li>Facebook</li>
        <h3>Recent Post</h3>
        <li>Sharks Choke</li>
        <li>Mothers Day</li>
        <li>Emprendete</li>
      </ul>
    </aside>
<?php get_footer(); ?>
