    		<img src="<?php bloginfo('template_url'); ?>/build/images/rogue-squadron.png" alt="moño" />

        <?php get_search_form(); ?>
      <ul>
        <li><a href="http://gonzalo-alonso.com/feed/rss2/">RSS Feed</a></li>
        <li><a class="social symbol" href="http://twitter.com/gonzoogle">Twitter &#xe286;</a></li>
        <li><a class="social symbol" href="hhttps://www.facebook.com/pages/Gonzalo-Alonso/1454128954807284">FaceBook &#xe227;</a></li>
        <li><a class="social symbol" href="http://instagram.com/gonzoogle">Instagram &#xe300;</a></li>
        <li><a class="social symbol" href="http://mx.linkedin.com/in/gonzoalonso" >LinkedIn &#xe252;</a></li>
      </ul>


				<h3><?php _e( 'Archives' ); ?></h3>

					<?php wp_get_archives( 'type=monthly' ); ?>
