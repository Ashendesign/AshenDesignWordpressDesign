
<?php get_header(); ?>
  

    <div class="container">
  
      <div class="row">
      
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          <div class="col-md-8 portfolio-image">
          <?php 
	  	$thumbnail_id = get_post_thumbnail_id();
		$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
        ?>
        
      
      <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?>" /></a></p>
      
      <?php the_field('images'); ?>
      
          </div>
          
          <div class="col-md-4">
          <div class="page-header">
            	<h1><?php the_title(); ?></h1>
                <em><p>
          	By <?php the_author(); ?> 
            on <?php the_time( 'l, F, jS, Y' ); ?>
            in <?php the_category( ', ' ); ?>
            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
          </p></em>
                
                <?php the_content(); ?>
                
              
                
            </div>
          </div>
          	
            
          <?php endwhile; else: ?>
          
          <div class="page-header">
          	<h1>oh no!</h1>
            
            <p>no content here!</p>
          </div>
          
          <?php endif; ?>
   
        <?php comments_template(); ?> 

        
      </div>

     <?php get_footer(); ?>