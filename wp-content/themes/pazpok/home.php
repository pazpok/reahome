<?php get_header(); ?>
<h1 class="title-actualites">Nos Actualités</h1>
<?php if (have_posts()) : ?>
<div class="container-actu">
    <?php while (have_posts()) : the_post(); ?>
        <div class="single-actu">
            <h2><?php the_title();?></h2>
            <?php if ( has_post_thumbnail() ) : ?>
            <img class="main-picture" src="<?php the_post_thumbnail_url('full'); ?>" />
            <?php endif; ?>
            <?php echo the_excerpt();?>
            <a class="read-more" href="<?php the_permalink() ;?>">Lire plus ...</a>
        </div>
        <?php endwhile;?>
        <div class="actu-sidebar">
            <?php get_sidebar('sidebar') ;?>
        </div>
    </div>
<?php endif;?>

<?php get_footer(); ?>