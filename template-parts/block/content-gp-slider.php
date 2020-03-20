<?php
/**
 * Block Name: Lightbox block
 *
 * This is the template that displays the Button block.
 */

// create id attribute for specific styling
$id = 'gp_button-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<div id="<?php echo $id; ?>" class="gp-slider <?php echo $align_class; ?>">

    <?php if( have_rows('gp_image_slider') ): ?>

    <div class="gp-slides">

    <?php while( have_rows('gp_image_slider') ): the_row(); 

        // vars
        $image = get_sub_field('image');
        //$content = get_sub_field('content');
        //$link = get_sub_field('link');

        ?>

        <div class="gp-slide">

            <?php //if( $link ): ?>
                <!--<a href="<?php //echo $link; ?>">-->
            <?php //endif; ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="gp-image" />

            <?php //if( $link ): ?>
                <!--</a>-->
            <?php //endif; ?>

            <?php //echo $content; ?>

            </div>

    <?php endwhile; ?>

    </div>

    <?php endif; ?>

</div>

<style type="text/css">
	#<?php echo $id; ?> {
		
	}
</style>