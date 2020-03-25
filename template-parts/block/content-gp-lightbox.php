<?php
/**
 * Block Name: Lightbox block
 *
 * This is the template that displays the Button block.
 */


$img = get_field('image');

// create id attribute for specific styling
$id = 'gp_button-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="gp-button <?php echo $align_class; ?>">
    <a href="<?php echo $url; ?>"><?php echo $label; ?></a>
    <a class="gp-image-link" href="<?php echo $img['url']; ?>" data-lightbox="gpi-<?php echo $id; ?>"><figure class="<?php echo $block['className']; ?>"><img class="gp-image" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" /></figure></a>
</div>
<style type="text/css">
	#<?php echo $id; ?> {
		
	}
</style>