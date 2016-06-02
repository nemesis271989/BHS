<?php
/*
  Template Name: Page-Portfolio
 */
?>
<?php get_header(); ?>
</header>
<!-- ORIGINAL PAGE CONSTRUCTION -->
<!-- Main Content -->
<!--<div class="row">
<aside class="col-md-3 side-bar">
<div class="side-nav-wrapper">
<div class="side-nav">
<p> Side Nav </p>
</div>
</div>
<div class="get-involved-wrapper">
<div class="get-involded">
<p> Get Involved </p>
</div>
</div>
<div class="success-stories-wrapper">
<div class="success-stories">
<p> Success Stories </p>
</div>
</div>
</aside>
<div class="col-md-9">
<div class="row  content-wrapper">
<div class="col-md-12">
<h4> Prevention & Services for Older Adults </h4>
<img src="<?php bloginfo('template_directory'); ?>/img/bhs-main-slide.png"> </div>
</div>
<div class="row content-wrapper">
<div class="col-md-9">
<h4> Prevention & Services for Older Adults </h4>
<p>Donec sit amet eros lacus. In hac habitasse platea dictumst. Duis consequat nunc a metus accumsan consectetur. Nam efficitur gravida mollis. Nulla in mi ac elit luctus fermentum. Nulla laoreet lobortis pellentesque. Phasellus ac bibendum ipsum, sit amet tempus mauris. Vestibulum mollis lobortis auctor. Duis eget nibh et elit varius viverra. Cras vitae vehicula justo. Phasellus non justo enim. Sed venenatis eget massa nec rutrum. Duis a suscipit mi, sit amet scelerisque dolor. Ut magna lectus, sollicitudin ut venenatis nec, fringilla non tellus.</p>
</div>
<aside class="col-md-3">
<h4>Latest Newest</h4>
<p>Donec sit amet eros lacus. In hac habitasse platea dictumst. Duis consequat nunc a metus accumsan consectetur.</p>
</aside>
</div>
</div>
</div>
</div>  --> 
<div class="container-fluid">
<div class="row">
<?php
$args = array(
'post_type' => 'portfolio'
);
$the_query = new WP_Query( $args );
?>
<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<div class="col-xs-12 col-md-3 portfolio-piece">
<?php
$thumbnail_id = get_post_thumbnail_id();
$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
?>
<p>
<a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"></a>
</p>
<h4>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h4>
</div>
<?php $portfolio_count = $the_query->current_post + 1; ?>
<?php if ( $portfolio_count % 4 === 0): ?>
</div>
<div class="row">
<?php endif; ?>
<?php endwhile; endif; ?>
</div>
</div><!-- END .row -->
<!-- Site footer -->
<footer class="footer">
<?php get_footer(); ?>