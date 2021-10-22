<?php get_header(); ?>

<main class="main" id="main">
  <?php if (have_posts()) : while (have_posts()) : the_post();       
    // Displays whatever you wrote in the WordPress editor
    the_content();

    // Ends the loop
    endwhile; endif;
  ?>
</main>

<?php get_footer(); ?>