<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row"> 
      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">
        
        
        <div class="leader">
        	<h1>All Posts by <?php wp_title(); ?></h1>
           <p><?php echo get_the_author_meta('description'); ?></p>
        </div>
        
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          <article class="post">
        
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h2><?php echo strip_tags( get_the_excerpt() ); ?></h2>
                <ul class="post-meta no-bullet">
                  
                  <li class="cat">Posted in <?php the_category( ', ' ); ?></a></li>
                  <li class="date">on <?php the_time( 'F j, Y' ); ?></a></li>
                </ul>
                <?php if( get_the_post_thumbnail() ): ?>
                <div class="img-container">
                  <?php the_post_thumbnail( 'large' ); ?>
                </div>
                <?php endif; ?>
                </article>
          
          <?php endwhile; else : ?>
          <p>
            <?php _e( 'Sorry, no pages matched your criteria.', 'ashendesign-portfolio' ); ?>
          </p>
          <?php endif; ?>
        </div>
      </div>
  
<?php get_sidebar(); ?>

  </div>
</section>
<?php get_footer(); ?>
