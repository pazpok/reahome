<?php get_header(); ?>

<div class="container">
    <h1 class="title-proprietes">Nos Propriétés</h1>
    <div class="ville-link hvr-underline-from-center">
        <a href="<?php bloginfo('url') ?>/nos-proprietes/">Tous</a>
        <?php $villes = get_terms('ville', array(
            'hide_empty' => false,
        )); ?>
        <?php foreach ($villes as $ville) : ?>
            <a href="<?php echo get_term_link($ville->slug, 'ville'); ?>"><?php echo $ville->name; ?></a>
        <?php endforeach ?>
    </div>
    <?php wp_reset_postdata() ;?>
    <div class="all-card">
        <?php if ( have_posts() ) : ?>
            <?php while (have_posts() ) : the_post(); ?>
                <div class="card">
                    <a class="propriete-link" href="<?php the_permalink() ?>">
                        <div class="property-singlecard">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img class="main-picture" src="<?php the_post_thumbnail_url('medium'); ?>" />
                            <?php endif; ?>
                            <h2><?php the_title() ?></h2>
                            <p>
                                <?php get_field('localisation') ;?>
                                <?php the_field('localisation') ?>
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
                            <?php $id=get_the_ID() ;?>
                            <?php $terms = get_the_terms( $id, 'ville' ); ?>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
