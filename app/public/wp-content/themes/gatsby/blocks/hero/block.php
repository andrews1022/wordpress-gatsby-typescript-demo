<?php 
  $image = block_field('image', $echo = false);
?>

<section class="hero">
  <img
    class="hero__image"
    src="<?php echo wp_get_attachment_url($image, 'full'); ?>"
    alt="text describing image here"
  />
</section>
