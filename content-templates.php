 <?php 
 
 
 $num_posts = -1;
 if( is_front_page() ) $num_posts = 4;
	
	$args = array(
    'post_type' => 'templates',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );
	
	?>
    
    
    <section class="row no-max pad">
    
    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    
      <div class="small-6 medium-4 large-3 columns grid-item">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cropped-thumb'); ?><span class="hover-text"><h2><?php the_title(); ?></h2></span></a>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
	  
      </section>