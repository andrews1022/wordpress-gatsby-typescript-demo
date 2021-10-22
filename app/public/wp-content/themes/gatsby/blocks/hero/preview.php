<section style="border: 1px solid black; padding: 1rem 0; text-align: center;">
  <p>
    <?php 
      $block_settings = block_config();
      $block_title = $block_settings['title'];
      echo $block_title;
    ?>
  </p>
</section>