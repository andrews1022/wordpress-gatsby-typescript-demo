<?php get_header(); ?>

<!-- this file will be used to display a single "post" -->

<main class="main" id="main">
  <?php while (have_posts()) : the_post(); ?>
    <div class="post">
      <?php the_title($post->ID); ?>
      <?php the_content($post->ID); ?>
      <?php echo get_the_time($post->ID); ?>
      <?php echo get_the_author($post->ID); ?>
    </div>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>