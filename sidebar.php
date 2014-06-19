    		<img src="<?php bloginfo('template_url'); ?>/build/images/rogue-squadron.png" alt="moño" />

        <?php get_search_form(); ?>
      <ul>
        <li><a href="http://gonzalo-alonso.com/feed/rss2/">RSS Feed</a></li>
        <li><a class="social symbol" href="http://twitter.com/gonzoogle">&#xe286; Twitter</a></li>
        <li><a class="social symbol" href="hhttps://www.facebook.com/pages/Gonzalo-Alonso/1454128954807284">&#xe227; FaceBook</a></li>
        <li><a class="social symbol" href="http://instagram.com/gonzoogle">&#xe300; Instagram</a></li>
        <li><a class="social symbol" href="http://mx.linkedin.com/in/gonzoalonso" >&#xe252; LinkedIn</a></li>
      </ul>


				<h3><?php _e( 'Archives' ); ?></h3>

					<?php wp_get_archives( 'type=monthly' ); ?>
