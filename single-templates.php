<?php get_header(); ?>

<section class="row no-max pad">
    <div class="row"> 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- Primary Column -->
      <div class="left-column">
      
      <h1><?php the_title(); ?>
        <hr />
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <p>Completed on <span class="custom-field"><?php the_field('date_completed'); ?></span></p>
        
        <hr />
        <nav class="portfolio-nav">
        <p><?php previous_post_link(); ?> - <a href="<?php bloginfo('url'); ?>/portfolio">Back to Portfolio
         - <?php next_post_link(); ?> </p></a>
        </nav>
      	
      </div>
      
      <!-- end of left column -->
  
   <!-- Secondary Column -->
      <div class="right-column">
        <?php the_content(); ?>
        <?php comment_form(); ?>  
      </div>
      
      <!-- end of right column -->
     
    </div>
 
      <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
