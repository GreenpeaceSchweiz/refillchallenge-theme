<?php
/**
 * Block Name: Button block
 *
 * This is the template that displays the Button block.
 */


$url = get_field('url');
$label = get_field('label');
$new_tab = get_field('new_tab');
// create id attribute for specific styling
$id = 'gp_button-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="gp-button <?php echo $align_class; ?>">
    <a href="<?php echo $url; ?>" class="gp-btn" <?php if($new_tab) echo 'target="_blank"'; ?>><?php echo $label; ?></a>
</div>
<style type="text/css">
	#<?php echo $id; ?> {
		
	}
</style>