<?php get_header(); ?>

<div class="boxBackground">

  <div class="container pt-5 pb-5 contentBox">

    <h1><?php the_title(); ?></h1>

    <?php while (have_posts()) :  the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; ?>

  </div>

</div>

<?php get_footer(); ?>