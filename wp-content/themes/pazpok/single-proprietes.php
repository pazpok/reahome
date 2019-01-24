<?php get_header(); ?>

<?php if (have_posts()) : ?>
<h1 class="title-proprietes"><?php the_title();?></h1>
    <div class="bloc-proprietes">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="img-proprietes">
                    <img class="main-picture" src="<?php the_post_thumbnail_url('full'); ?>" />
                </div>
            <?php endif; ?>
            <div class="info-proprietes">
                <div class="prix-proprietes">
                    <i class="fas fa-bookmark"></i>
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
    </div>
<?php endif;?>
<hr class="single-propriete-hr">
<h2 class="title-related-property">Nos Propiétés</h2>
<?php

$args = array(
    'post_type' => 'proprietes',
    'posts_per_page' => 4,
    'order' => 'rand',
);
?>

<!-- The Query -->
<?php $the_query  = new WP_Query($args);?>

<!-- The Loop -->
<?php if ( $the_query->have_posts() ) : ?>
    <div class="all-mini-card">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="mini-card">
            <a class="propriete-link" href="<?php the_permalink() ?>">
                <?php if ( has_post_thumbnail() ) : ?>
                    <img class="main-picture" src="<?php the_post_thumbnail_url('thumbnail'); ?>" />
                <?php endif; ?>
                <h4>
                    <?php the_title() ?>
                </h4>
                <p>
                    <?php get_field('localisation') ;?>
                    <?php the_field('localisation');?>
                </p>
            </a>
        </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>	

<?php get_footer(); ?>