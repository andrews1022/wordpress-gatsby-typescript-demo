<?php 
  $heading = block_field('heading', $echo = false);
  $copy = block_field('copy', $echo = false);
  $image = block_field('image', $echo = false);
?>

<section class="fifty-fifty">
  <div class="fifty-fifty__row">
    <div class="fifty-fifty__box">
      <h1 class="fifty-fifty__heading">
        <?php echo $heading; ?>
      </h1>
      <p class="fifty-fifty__copy">
        <?php echo $copy; ?>
      </p>
    </div>
    <div class="fifty-fifty__box">
      <img
        class="fifty-fifty__image"
        src="<?php echo wp_get_attachment_url($image, 'full'); ?>"
        alt="text describing image here"
      />
    </div>
  </div>
</section>
