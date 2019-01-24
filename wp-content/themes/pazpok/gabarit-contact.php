<?php /* Template Name: Gabarit contact */ ?>
<?php get_header(); ?>
<?php get_field('titre-contact') ;?>
<div class="container">
    <h1 class="title-contact"><?php the_field('titre-contact') ;?></h1>
    <?php $img = get_field('image-google-map') ;?>
    <img src="<?php echo $img['url'] ;?>" alt="">
    
    <div class="info-contact">
        <div class="company-info">
            <h2>
                <?php get_field('titre-info-contact') ;?>
                <?php the_field('titre-info-contact') ;?>
            </h2>
            <div class="company-text">
                <?php get_field('texte-info-contact') ;?>
                <?php the_field('texte-info-contact') ;?>
            </div>
            <div class="company-adress">
                <?php get_field('rue-info-contact') ;?>
                <?php the_field('rue-info-contact') ;?>
                <?php get_field('ville-info-contact') ;?>
                <?php the_field('ville-info-contact') ;?>
            </div>
            <div class="company-tel">
            <?php get_field('tel-info-contact') ;?>
            <?php the_field('tel-info-contact') ;?>
            </div>
            <div class="company-fax">
            <?php get_field('fax-info-contact') ;?>
            <?php the_field('fax-info-contact') ;?>
            </div>
            <div class="company-email">
            <?php get_field('email-info-contact') ;?>
            <?php the_field('email-info-contact') ;?>
            </div>
        </div>
        <div class="form-contact">
        <?php get_field('titre-form-contact') ;?>
            <h2><?php the_field('titre-form-contact') ;?></h2>
            <?php $id= get_the_ID(); 
                $post = get_post($id);
                $content = apply_filters('the_content', $post->post_content);
                echo $content;  ;?>
        </div>
    </div>
</div>

<?php get_footer(); ?>