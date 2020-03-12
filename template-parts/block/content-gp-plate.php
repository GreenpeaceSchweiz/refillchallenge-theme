<?php
/**
 * Block Name: Plate block
 *
 * This is the template that displays the Plate block.
 */


$image = get_field('image');
$date1 = get_field('date1');
$date2 = get_field('date2');

// create id attribute for specific styling
$id = 'gp_plate-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="gp-plate <?php echo $align_class; ?>">
    <img src= "<?php echo $image['url']; ?>" />
    <?php //if($date1 || $date2) { ?>
    <div>
        <span><?php echo $date1; ?></span>
    	<span><?php echo $date2; ?></span>
    </div>
    <?php //} ?>
</div>
<style type="text/css">
	#<?php echo $id; ?> {
		
	}
</style>