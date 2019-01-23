<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1 class="title-proprietes"><?php the_title();?></h1>
        <div class="container">
            <div class="article">
                <div class="article-content">
                    <?php the_content() ;?>
                </div>
                <aside class="sidebar">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
                    <?php endif; ?>
                </aside>
            </div>
            <div class="article-auteur">
                <p><?php the_time('d F Y');?> / par <?php the_author() ;?></p>
            </div>
            <?php comments_template();?>
        </div>
    <?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>