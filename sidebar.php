    		<img src="<?php bloginfo('template_url'); ?>/build/images/rogue-squadron.png" alt="moño" />

        <?php get_search_form(); ?>

	<h3><?php _e( 'Publicaciones por categoría' ); ?></h3>

		<?php wp_list_categories( 'orderby=name&include=14,99,208,66,80,125,135,137'); ?>
		

	<h3><?php _e( 'Publicaciones por mes' ); ?></h3>

					<?php wp_get_archives( 'type=monthly' ); ?>

      <ul>
        <li><a target="_blank" href="http://gonzalo-alonso.com/feed/rss2/">RSS Feed</a></li>
        <li><a class="social symbol" target="_blank" href="http://twitter.com/gonzoogle">Twitter &#xe286;</a></li>
        <li><a class="social symbol" target="_blank" href="hhttps://www.facebook.com/pages/Gonzalo-Alonso/1454128954807284">FaceBook &#xe227;</a></li>
        <li><a class="social symbol" target="_blank" href="http://instagram.com/gonzoogle">Instagram &#xe300;</a></li>
        <li><a class="social symbol" target="_blank" href="http://mx.linkedin.com/in/gonzoalonso" >LinkedIn &#xe252;</a></li>
      </ul>
