<?php get_header(); ?>

<?php if (have_posts()) : ?>
<h1 class="title-proprietes"><?php the_title();?></h1>
    <div class="bloc-proprietes">
        <?php while (have_posts()) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="img-proprietes">
                    <img class="main-picture" src="<?php the_post_thumbnail_url('full'); ?>" />
                </div>
            <?php endif; ?>
            <div class="info-proprietes">
                <div class="prix-proprietes">
                    <?php get_field('prix') ;?>
                    <?php the_field('prix');?>
                </div>
                <hr>
                <div class="localisation-proprietes">
                    <?php get_field('localisation') ;?>
                    Ville : <?php the_field('localisation');?>
                </div>
                <div class="pieces-proprietes">
                    <?php get_field('pieces') ;?>
                    <p>Nombre de pièces : <?php the_field('pieces');?></p>
                </div>
                <div class="info-proprietes">
                    <?php get_field('info') ;?>
                    Info : <?php the_field('info');?>
                </div>
                <hr>
                <div class="lg-desc-proprietes">
                    <?php get_field('long-description') ;?>
                    <?php the_field('long-description');?>
                </div>
            </div>
    <?php endwhile;?>
    </div>
<?php endif;?>

<?php get_footer(); ?>