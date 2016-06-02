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
<!-- *** DEFAULT TEMPLATE PAGE *** -->
<div class="container-fluid">
<div class="row">
<div class="col-md-9">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- tbs class for headers -->
<div class="page-header">
<!-- the_title() is WP function that shows the title of the post -->
<h1><?php the_title(); ?></h1>
</div>
<!-- WP function that outputs post content -->
<?php the_content(); ?>
<?php endwhile; else: ?>
<!-- we run this else if there is no content -->
<div class="page-header">
<h1>Wups!</h1>
</div>
<p>Looks like we have no content for this page?</p>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
</div>
<!-- Site footer -->
<footer class="footer">
<?php get_footer(); ?>