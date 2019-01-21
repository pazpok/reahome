<?php $image = get_field('image') ;?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="title-container">
    <?php if(get_field('title')): ?>
    <h1 class="home-main-title">
        <?php the_field('title') ;?>
    </h1>
    <?php endif; ?>
    <img class="home-main-img" src="<?php echo $image['url'] ;?>" alt="<?php echo $image['alt'] ;?>">
</div>
<div class="agency-section">
    <?php get_field('block-agence-title');?>
    <h2 class="title-agency">
        <?php the_field('block-agence-title') ;?>
    </h2>
    <?php get_field('block-agence-text') ;?>
    <?php the_field('block-agence-text');?>
</div>
<div class="four-icon">
    <?php if( have_rows('icon') ): ?>
    <?php while( have_rows('icon') ): the_row(); ?>
    <div class="icon-all">
        <i class="<?php the_sub_field('icon-fw');?>"></i>
        <h3>
            <?php the_sub_field('icon-title'); ?>
        </h3>
        <?php the_sub_field('icon-text'); ?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="proprietes-home">
    <div class="texte-proprietes-home">
        <h2>
            <?php get_field('titre-propriete') ;?>
            <?php the_field('titre-propriete');?>
        </h2>
        <span></span>
        <?php get_field('texte-propriete') ;?>
        <?php the_field('texte-propriete');?>
    </div>
    <?php $args = array(
    'post_type' => 'proprietes',
    'posts_per_page' => 6,
    'order' => 'ASC',);?>
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
    <?php wp_reset_postdata() ?>
</div>
<div class="team">
    <?php get_field('team-title') ;?>
    <h2>
        <?php the_field('team-title');?>
    </h2>
    <hr>    
    <div class="team-content">
        <?php $teamImage = get_field('team-image') ;?>
        <img src="<?php echo $teamImage['url'] ;?>" alt="agent">
        <?php get_field('team-title-text') ;?>
        <h3>
            <?php the_field('team-title-text');?>
        </h3>
        <?php get_field('team-text') ;?>
        <?php the_field('team-text');?>
    </div>
</div>
<?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>