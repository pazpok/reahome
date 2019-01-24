<?php /* Template Name: Gabarit A Propos */ ?>
<?php get_header(); ?>
<div class="container">
    <h1 class="title-ap"><?php the_title() ;?>
    <hr>
    </h1>
    <div class="agency-apropos">
            <img src="<?php the_post_thumbnail_url('medium') ?>" alt="a propos">
        <div class="agency-text">
        <?php get_field('texte-a-propos') ;?>
        <?php the_field('texte-a-propos');?>
        </div>
    </div>
</div>
<div class="background-four-icon">
    <div class="four-icon container">
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
</div>
<?php get_field('our-team-title') ;?>

<h2 class="team-title"><?php the_field('our-team-title');?><hr></h2>

<div class="four-team container">
    <?php if( have_rows('our-team') ): ?>
    <?php while( have_rows('our-team') ): the_row(); ?>
    <div class="team-all">
            <?php $teamImage = get_sub_field("our-team-image") ;?>
            <img src="<?php echo $teamImage['url'];?>" alt="<?php echo $teamImage['alt'];?>">
        <div class="team-content">
            <h3>
                <?php the_sub_field('our-team-nom'); ?>
            </h3>
            <?php the_sub_field('our-team-text'); ?>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>