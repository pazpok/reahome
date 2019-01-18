<?php $image = get_field('image') ;?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="title-container">
    <?php if(get_field('title')): ?>
            <h1 class="home-main-title" ><?php the_field('title') ;?></h1>
    <?php endif; ?>
            <img class="home-main-img" src="<?php echo $image['url'] ;?>" alt="<?php echo $image['alt'] ;?>">
        </div>
    <section class="agency-section">
        <?php get_field('block-agence-title');?>
            <h2 class="title-agency"><?php the_field('block-agence-title') ;?></h2>
        <?php get_field('block-agence-text') ;?>
        <?php the_field('block-agence-text');?>
    </section>
    <section class="four-icon">
        <?php if( have_rows('icon') ): ?>
            <?php while( have_rows('icon') ): the_row(); ?>
            <div class="icon-all">
                <i class="<?php the_sub_field('icon-fw');?>"></i>
                <h3><?php the_sub_field('icon-title'); ?></h3>
                <?php the_sub_field('icon-text'); ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
    <?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>