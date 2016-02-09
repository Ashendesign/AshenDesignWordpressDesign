<?php
	/*
	Template Name: Services
	*/
	
	?>

<?php get_header(); ?>

<div class="main-content">

<section class="row">
      <div class="small-12 columns text-center">
        <div class="leader">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        
          <h1><?php the_title(); ?></h1>
          <hr />
          <?php the_content(); ?>   
          
          
          <?php endwhile; else : ?>

<?php endif; ?>    
        </div>
      </div>
    </section>
    
   <?php get_template_part('content', 'services'); ?>
    
</div>
<?php get_footer(); ?>