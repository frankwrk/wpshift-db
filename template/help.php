<?php
$videos = array(
	'SlfSuuePYaQ' => array(
		'title' => __( 'Feature Walkthrough', 'wp-shift-db' ),
		'desc' => __( 'A brief walkthrough of the WP Sync DB plugin showing all of the different options and explaining them.', 'wp-shift-db' )
	),
	'IFdHIpf6jjc' => array(
		'title' => __( 'Pulling Live Data Into Your Local Development&nbsp;Environment', 'wp-shift-db' ),
		'desc' => __( 'This screencast demonstrates how you can pull data from a remote, live WordPress install and update the data in your local development environment.', 'wp-shift-db' )
	),
	'FjTzNqAlQE0' => array(
		'title' => __( 'Pushing Local Development Data to a Staging&nbsp;Environment', 'wp-shift-db' ),
		'desc' => __( 'This screencast demonstrates how you can push a local WordPress database you\'ve been using for development to a staging environment.', 'wp-shift-db' )
	),
	'0aR8-jC2XXM' => array(
		'title' => __( 'Media Files Addon Demo', 'wp-shift-db' ),
		'desc' => __( 'A short demo of how the Media Files addon allows you to sync up your WordPress Media Libraries.', 'wp-shift-db' )
	)
);
?>

<div class="help-tab content-tab">
	<div class="support">
		<h3>Support</h3>
		<p>Please report bugs or ask questions in the <a href="https://github.com/wp-shift-db/wp-shift-db/issues">GitHub Issue Tracker</a>.</p>
	</div>
	<div class="debug">
		<h3><?php _e( 'Diagnostic Info &amp; Error Log', 'wp-shift-db' ); ?></h3>
		<textarea class="debug-log-textarea" autocomplete="off" readonly></textarea>
		<a class="button clear-log js-action-link"><?php _e( 'Clear Error Log', 'wp-shift-db' ); ?></a>
	</div>
	<div class="videos">
		<h3><?php _e( 'Videos', 'wp-shift-db' ); ?></h3>

		<iframe class="video-viewer" style="display: none;" width="640" height="360" src="" frameborder="0" allowfullscreen></iframe>
		<ul>
		<?php foreach ( $videos as $id => $video ) : ?>
			<li class="video" data-video-id="<?php echo $id; ?>">
				<a href="//www.youtube.com/watch?v=<?php echo $id; ?>" target="_blank"><img src="//img.youtube.com/vi/<?php echo $id; ?>/0.jpg" alt="" /></a>
				<h4><?php echo $video['title']; ?></h4>
				<p>
					<?php echo $video['desc']; ?>
				</p>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>
