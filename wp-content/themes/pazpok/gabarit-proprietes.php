<?php /* Template Name: Gabarit propriétés */ ?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1 class="title-proprietes"><?php the_title();?></h1>
    <?php endwhile;?>
<?php endif;?>

<?php

$args = array(
    'post_type' => 'proprietes',
    'posts_per_page' => 9,
    'order' => 'ASC',
);
?>

<!-- The Query -->
<?php $the_query  = new WP_Query($args);?>

<!-- The Loop -->
<?php if ( $the_query->have_posts() ) : ?>
    <div class="all-card">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="card">
            <a class="propriete-link" href="<?php the_permalink() ?>">
                <?php if ( has_post_thumbnail() ) : ?>
                    <img class="main-picture" src="<?php the_post_thumbnail_url('medium'); ?>" />
                <?php endif; ?>
                <h2>
                    <?php the_title() ?>
                </h2>
                <p>
                    <?php get_field('localisation') ;?>
                    <?php the_field('localisation');?>
                </p>
                <p class="prix-card">
                    <?php get_field('prix') ;?>
                    <?php the_field('prix');?>
                </p>
                <div class="info-card">
                    <p>
                        <?php get_field('surface') ;?>
                        <?php the_field('surface');?>
                    </p>
                    <p>
                        <?php get_field('chambres') ;?>
                        <?php the_field('chambres');?> chambre
                    </p>
                    <p>
                        <?php get_field('salle-de-bain') ;?>
                        <?php the_field('salle-de-bain');?> salle de bain
                    </p>
                </div>
            </a>
        </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>	
<?php get_footer(); ?>