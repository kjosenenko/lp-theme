<?php get_header(); ?>

<?php //get_template_part( 'content', get_post_format() );  ?>

<div id="introBox" class="justify-content-center">
    <div id="cheesepizza">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/cheesePizza.jpg">
    </div>
    <div class="d-none d-md-block">Authentic New York Style Pizza</div>
    <div class="d-md-none">
        <h4>Authentic New York Style Pizza</h4>
    </div>
</div>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>