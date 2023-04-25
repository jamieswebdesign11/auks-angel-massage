<!--/**
* Template Name: Home Page
*/-->
<?php get_header(); if(have_posts()): while(have_posts()): the_post(); 
$bannerGroup = get_field('banner_group');
$bannerImage = $bannerGroup['banner_image']; 
$caption = $bannerGroup['caption'];
?>
<div id="banner">
    <div class="banner-inner">
        <?php echo $bannerImage ? '<img class="banner-img img-responsive parallax-file-item" src="'. $bannerImage['url'] .'" title="'. $bannerImage['title'] .'" alt="'. $bannerImage['alt'] .'">' : ''; ?>
        <?php echo $caption ? '<h1 class="caption">'. $caption .'</h1>' : ''; ?>
    </div>
</div>
<div class="page-content">
    <?php $mainGroup = get_field('main_group'); 
    $mainHeading = $mainGroup['main_heading']; 
    $mainImage = $mainGroup['main_image']; 
    $mainContent = $mainGroup['main_content']; ?>
    <div id="main">
        <div class="main-inner flex-container">
            <?php echo $mainHeading ? '<h2>'. $mainHeading .'</h2>' : ''; ?>
            <div class="main-content-box flex-display-align">
                <?php echo $mainImage ? '<div class="main-content-image flex-40"><img class="img-responsive center-block" src="'. $mainImage['url'] .'" title="'. $mainImage['title'] .'" alt="'. $mainImage['alt'] .'"></div>' : ''; ?>
                <?php echo $mainContent ? '<div class="main-content-text flex-60">'. $mainContent .'</div>' : ''; ?>
            </div>
        </div>
    </div>
    <?php if(have_rows('certificates')): $certificatesHeading = get_field('certificates_heading'); ?>
    <div id="certificates">
        <?php echo $certificatesHeading ? '<h2>'. $certificatesHeading .'</h2>' : ''; ?>
        <div class="certificates-inner flex-display">
            <?php while(have_rows('certificates')): the_row(); 
            $image = get_sub_field('image'); $title = get_sub_field('title'); $link = get_sub_field('link');
            ?>
            <div class="certificates-box flex-4-col-shrink flex-2-col-shrink-sm">
                <div class="certificates-box-content">
                    <?php echo $link ? '<a href="'. $link['url'] .'" title="'. $link['title'] .'" alt="'. $link['alt'] .'"'. ($link['target'] ? ' target="_blank"' : '') .'>' : ''; ?>
                    <?php echo $image ? '<img class="img-responsive center-block" src="'. $image['url'] .'" title="'. $image['title'] .'" alt="'. $image['alt'] .'">' : ''; ?>
                    <?php echo $title ? '<div class="certificates-title">'. $title .'</div>' : ''; ?>
                    <?php echo $link ? '</a>' : ''; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php $aboutGroup = get_field('about_group'); 
    $aboutHeading = $aboutGroup['about_heading']; 
    $aboutImage = $aboutGroup['about_image']; 
    $aboutContent = $aboutGroup['about_content']; ?>
    <div id="about">
        <div class="about-inner flex-container">
            <?php echo $aboutHeading ? '<h2>'. $aboutHeading .'</h2>' : ''; ?>
            <div class="about-content-box">
                <?php echo $aboutImage ? '<div class="about-content-image"><img class="img-responsive center-block" src="'. $aboutImage['url'] .'" title="'. $aboutImage['title'] .'" alt="'. $aboutImage['alt'] .'"></div>' : ''; ?>
                <?php echo $aboutContent ? '<div class="about-content-text">'. $aboutContent .'</div>' : ''; ?>
            </div>
        </div>
    </div>
    <?php $contactForm = get_field('contact_form_shortcode'); ?>
    <?php echo $contactForm ? '<div id="contact-form"><div class="contact-form-inner flex-container"><h2>Contact</h2>'. $contactForm .'</div></div>' : ''; ?>
</div>
<?php endwhile; endif; get_footer(); ?>
