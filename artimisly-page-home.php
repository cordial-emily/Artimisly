<?php
/**
 * Template Name: Artimisly Front Page
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package ultrabootstrap
 */
get_header(); ?>


<!-- masthead -->

<section class="welcome masthead">
  	<div class="container">
      <div class="row">

        <div class="col-md-2 col-md-offset-4">
          <div class="mastheadcolor">
            <div style="text-align:center;padding-top:120px;"><img src="/wp-content/uploads/2016/11/ArtimislyLogo.png" alt="Artimisly Marketing" height="280px" width="280px"><h1 style="text-align:center;color:#afb2b1;font-size:1.3em;">Marketing By And For The Kick-Ass<br> Women Of Today.</h1><h2 style="text-align:center;color:#fff;font-size:1.9em;">LIVE LIFE ARTIMISLY</h2></div>
          </div>
        </div>

      </div>
    </div>
</section>

<section class="welcome red">
  	<div class="container">
      <div class="row">
        <div class="col-sm-7 spacer">
          			<h4>CONSULTATION</h4>
          			<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet</p>
          			<a href="http://thebootstrapthemes.com" title="Read More" class="btn btn-danger">Read More</a>
        </div>
        <div class="col-sm-4 col-sm-offset-1">
          <div class="spacer message" style="background-color:rgb(196, 196, 196);">
          <h2>FREE RESPONSIVE, MULTIPURPOSE BUSINESS AND CORPORATE THEME PERFECT FOR ANY ONE.</h2>
          </div>
        </div>
      </div>
    	</div>
</section>
<section class="welcome">
  	<div class="container">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
          <div class="spacer message" style="background-color: rgb(77, 27, 0);">
          <h2>FREE RESPONSIVE, MULTIPURPOSE BUSINESS AND CORPORATE THEME PERFECT FOR ANY ONE.</h2>
          </div>
        </div>
        <div class="col-sm-7 spacer">
          			<h4>MILESTONES</h4>
          			<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet</p>
          			<a href="http://thebootstrapthemes.com" title="Read More" class="btn btn-danger">Read More</a>
        </div
      </div>
    	</div>
</section>
<section class="welcome red">
  	<div class="container">
      <div class="row">
        <div class="col-sm-7 spacer">
          			<h4>KEEPING ARTIMISLY ON RETAINER</h4>
          			<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore Lorem ipsum dolor sit amet</p>
          			<a href="http://thebootstrapthemes.com" title="Read More" class="btn btn-danger">Read More</a>
        </div>
        <div class="col-sm-4 col-sm-offset-1">
          <div class="spacer message" style="background-color:rgb(196, 196, 196);">
          <h1>FREE RESPONSIVE, MULTIPURPOSE BUSINESS AND CORPORATE THEME PERFECT FOR ANY ONE.</h1>
          </div>
        </div>
      </div>
    	</div>
</section>
<!-- welcome message -->
<section class="page-section">
<div class="detail-content">
 <?php while ( have_posts() ) : the_post(); ?>
 <?php get_template_part( 'template-parts/content', 'page' ); ?>
 <?php endwhile; // End of the loop. ?>
 <?php comments_template(); ?>
</div>
</section>
<!-- welcome message -->


<!-- Header Image -->
<?php if (has_header_image()): ?>
<div class="text-center">
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
</div>
<?php endif;?>
<!-- Header Image -->



<!-- post list  -->
<section class="post-list spacer">
  	<div class="container">
          <?php
            $cid = get_theme_mod('features_display');
            $category_link = get_category_link($cid);
            $ultrabootstrap_cat = get_category($cid);
            if ($ultrabootstrap_cat) {
          ?>

          <div class="clearfix">
            <h4><?php echo esc_attr(get_theme_mod( 'features_title', __('Featured Category' , 'ultrabootstrap') )); ?></h4>
            <a href="<?php echo esc_url( $category_link ); ?>" title="" class="pull-right">View All</a>
          </div>

          <div class="row">

  		    <?php
  		        $args = array(
  		            'posts_per_page' => 8,
  		            'paged' => 1,
  		            'cat' => $cid
  		        );
  		        $loop = new WP_Query($args);
  		        if ($loop->have_posts()) :  while ($loop->have_posts()) : $loop->the_post();
  		    ?>

      		<div class="col-lg-3 col-md-4 col-sm-6 eq-blocks">
              <div class="post-block">
                <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" rel="bookmark" class="featured-image"><?php the_post_thumbnail('home-thumb'); ?></a>
                <?php else : ?>
                <a href="<?php the_permalink(); ?>" rel="bookmark" class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/images/no-blog-thumbnail.jpg" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" class="img-responsive" /></a>
              <?php endif; ?>
              <!-- summary -->
              <div class="summary">
          		<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a></h3>

          		<?php the_excerpt('ultrabootstrap_excerpt_length');?>

              <a href="<?php the_permalink(); ?>" rel="bookmark" class="readmore">Read More</a>
              </div>
                 <!-- summary -->
              </div>
      		</div>

      		<?php
		        endwhile;
		          	wp_reset_postdata();
		        endif; }
		    ?>
      </div>
		     	</div>  <!-- /.end of container -->
</section>  <!-- /.end of section -->
<!-- post list  -->
<?php get_footer();?>
