<?php get_header(); ?>

<section class="row">

    <div class="leader">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <p>
        <?php the_content(); ?>
      </p>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
<div class="row services">
	<h1>Services</h1>
	<?php get_template_part('content', 'services'); ?>
</div>

<div class="row">
  <h3>New Templates</h3>
  <?php get_template_part('content', 'templates'); ?>
</div>
<div class="row">
  <h3>New Websites</h3>
  <?php get_template_part('content', 'websites'); ?>
</div>
<div class="row">
  <h3>New Paintings</h3>
  <?php get_template_part('content', 'painting'); ?>
</div>

<?php get_footer(); ?>
