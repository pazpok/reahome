<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1 class="title-proprietes"><?php the_title();?></h1>
        <div class="article container">
            <div class="article-content">
                <?php the_content() ;?>
            </div>
            <aside class="sidebar">
                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
                <?php endif; ?>
            </aside>
            <?php comments_template('/comments.php', false) ;?>
        </div>
    <?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>