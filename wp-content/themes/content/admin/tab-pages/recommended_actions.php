<?php 
	$content_actions = $this->recommended_actions;
	$content_actions_todo = get_option( 'recommended_actions', false );
?>
<div id="recommended_actions" class="content-tab-pane panel-close">
<div class="action-list">
	<?php if($content_actions): foreach ($content_actions as $key => $content_action): ?>
	<div class="col-md-6">
	<div class="action" id="<?php echo esc_attr($content_action['id']); ?>">
		<div class="action-watch">
		<?php if(!$content_action['is_done']): ?>
			<?php if(!isset($content_actions_todo[$content_action['id']]) || !$content_actions_todo[$content_action['id']]): ?>
				<span class="dashicons dashicons-visibility"></span>
			<?php else: ?>
				<span class="dashicons dashicons-hidden"></span>
			<?php endif; ?>
		<?php else: ?>
			<span class="dashicons dashicons-yes"></span>
		<?php endif; ?>
		</div>
		<div class="action-inner">
			<h3 class="action-title"><?php echo esc_html($content_action['title']); ?></h3>
			<div class="action-desc"><?php echo esc_html($content_action['desc']); ?></div>
			<?php echo wp_kses_post($content_action['link']); ?>
		</div>
	</div>
	</div>
	<?php endforeach; endif; ?>
</div>
</div>