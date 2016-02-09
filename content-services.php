 <?php 
 
 
 $num_posts = -1;
 if( is_front_page() ) $num_posts = 4;
	
	$args = array(
    'post_type' => 'services',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );
	
	?>
    
    
    <section class="row no-max pad">
    
    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    
      <div class="small-6 medium-3 columns grid-item">
     	<div class="service">
        <a href="<?php the_permalink(); ?>" class="services-title"><?php the_title(); ?></a>
        <?php the_content(); ?>
        </div>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
	  
      </section>