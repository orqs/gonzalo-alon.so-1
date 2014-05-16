    		<img src="<?php bloginfo('template_url'); ?>/build/images/mono.png" alt="moño" />

        <?php get_search_form(); ?>
      <ul>
        <li>RSS Feed</li>
        <li>@twitter</li>
        <li>Facebook</li>
      </ul>


				<h3><?php _e( 'Archives' ); ?></h3>

					<?php wp_get_archives( 'type=monthly' ); ?>
