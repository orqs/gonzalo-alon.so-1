    		<img src="<?php bloginfo('template_url'); ?>/build/images/mono.png" alt="moño" />

        <?php get_search_form(); ?>
      <ul>
        <li><a href="http://gonzalo-alonso.com/feed/rss2/">RSS Feed</a></li>
        <li><a href="https://twitter.com/gonzoogle">Twitter</a></li>
        <li><a href="https://www.facebook.com/gonzoogle">Facebook</a></li>
      </ul>


				<h3><?php _e( 'Archives' ); ?></h3>

					<?php wp_get_archives( 'type=monthly' ); ?>
