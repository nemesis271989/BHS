<?php
/*
  Template Name: Full Width Template
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
<div class="container">
<div class="page-header">
<div class="row">
<div class="col-xs-9">
<h1>Players</h1>
</div>
<div class="col-xs-3 prev-next">
<?php next_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>' ); ?>
<a href="<?php bloginfo('url'); ?>/?p=54"><span class="glyphicon glyphicon-th"></span></a>
<?php previous_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>' ); ?>
</div>
</div>
<div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="col-sm-8 portfolio-image">
<?php
$thumbnail_id = get_post_thumbnail_id();
$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
?>
<p>
<a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title(); ?> graphic"></a>
</p>
</div>
<div class="col-md-4">
<h1>
<?php the_title(); ?>
</h1>
<?php the_content(); ?>
<p>
<a class="btn btn-large btn-primary" href="<?php the_field('link'); ?>" target="_blank">View Final Piece
<span class="glyphicon glyphicon-fullscreen"></span></a>
</p>
</div>
<?php endwhile; else: ?>
<!-- we run this else if there is no content -->
<div class="page-header">
<h1>Wups!</h1>
</div>
<p>Looks like we have no content for this page?</p>
<?php endif; ?>
</div><!-- END .row -->
<!-- Site footer -->
<footer class="footer">
<?php get_footer(); ?>