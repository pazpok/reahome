<?php /* Template Name: Gabarit A Propos */ ?>
<?php get_header(); ?>
<h1><?php the_title() ;?></h1>
<div class="agency-section">
    <img src="http://127.0.0.1/wordpress/wp-content/uploads/2019/01/Clip@2x-768x531.png" alt="a propos">
    <?php get_field('texte-a-propos') ;?>
    <?php the_field('texte-a-propos');?>
</div>

<div class="four-icon">
    <?php if( have_rows('icon-a-propos') ): ?>
    <?php while( have_rows('icon-a-propos') ): the_row(); ?>
    <div class="icon-all">
        <i class="<?php the_sub_field('icone-a-propos');?>"></i>
        <h3>
            <?php the_sub_field('icon-a-propos-titre'); ?>
        </h3>
        <?php the_sub_field('icon-a-propos-texte'); ?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_field('our-team-title') ;?>

<h2><?php the_field('our-team-title');?></h2>

<div class="four-team">
    <?php if( have_rows('our-team') ): ?>
    <?php while( have_rows('our-team') ): the_row(); ?>
    <div class="icon-all">
        <?php $teamImage = get_sub_field("our-team-image") ;?>
        <img src="<?php echo $teamImage['url'];?>" alt="">
        <h3>
            <?php the_sub_field('our-team-nom'); ?>
        </h3>
        <?php the_sub_field('our-team-text'); ?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>