<?php get_header();

$custom1 = get_post_meta($post->ID, 'post1', true);
$custom2 = get_post_meta($post->ID, 'post2', true);
$custom3 = get_post_meta($post->ID, 'post3', true);

// the query
$the_query = new WP_Query(array(
  'category_name' => 'example',
  'posts_per_page' => 3,
));

?>


<div>

  <section class="sec1 pt-5 pb-5">

    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="pt-5">
            <?php the_title(); ?>
          </h1>
          <div class="pt-4 postWrap">
            <?php while (have_posts()) :  the_post(); ?>

              <?php the_content(); ?>

            <?php endwhile; ?>
          </div>
          <button id="contactBtn" class="btn btn-primary mt-4">
            Contact Us
          </button>
        </div>
        <div class="col">
          <div class="sunImg"></div>
        </div>
      </div>
    </div>

  </section>

  <section class="sec2 pt-5">

    <div class="container contentBox">
      <div class="row">
        <div class="col pt-5 pb-5 imgBox1">
        </div>
        <div class="col pt-5 pb-5 ">
          <h5 class="userText">
            <?php echo $custom1; ?>
          </h5>
        </div>
      </div>
      <div class="row">
        <div class="col pt-5 pb-5">
          <h5 class="userText">
            <?php echo $custom2; ?>
          </h5>
        </div>
        <div class="col pt-5 pb-5 imgBox2"></div>
      </div>
      <div class="row">
        <div class="col pt-5 pb-5 imgBox3"></div>
        <div class="col pt-5 pb-5">
          <h5 class="userText">
            <?php echo $custom3; ?>
          </h5>

        </div>
      </div>
    </div>

  </section>
  <section class="sec3">
    <div class="container-fluid">
      <div class="row text-center pt-5">


        <?php if ($the_query->have_posts()) : ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="sec3Text col mt-4 pt-1">
              <h5>
                <?php the_title(); ?>
              </h5>
              <p>
                <?php the_excerpt(); ?>
              </p>

            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>

        <?php else : ?>
          <p><?php __('No News'); ?></p>
        <?php endif; ?>
      </div>
    </div>

  </section>

</div>


<?php get_footer(); ?>