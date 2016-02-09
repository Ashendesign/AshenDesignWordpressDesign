<?php
	/*
	Template Name: Painting Page
	*/
	
	?>

<?php get_header(); ?>



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
    
   <?php get_template_part('content', 'painting'); ?>
    

<?php get_footer(); ?>