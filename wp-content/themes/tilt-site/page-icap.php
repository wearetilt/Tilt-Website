<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header('work-item'); ?>

<header id="icap" class="work-item area-dark container--icap-gradient">
	<div class="monitor-wrapper">
	    <div class="monitor-holder">
	        <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
	        <div class="monitor-screen">
	            <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_icap/web_icap_imacsmall.jpg" alt="" style="width: 100%; height: 100%;">
	        </div>
	    </div>
	</div>

    <div class="container container--header">
        <div class="header-title no--shadow">
            <p class="tag tag--work-body">Interactive</p>
            <h1>ICAP<br />
                <span class="light underlined">Graduate Portal</span>
            </h1>
            <h2 class="light services">Strategy | UX | Design | Dev</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padded">
                <h2>The Brief</h2>
                <p class="first-para tag--work-title">How can an onboarding portal help communicate the new brand and ethos behind one of the world’s leading providers of trading technologies?</p>
            </div>
            <div class="header-text__module">
                <h2>The Big Idea</h2>
                <p class="first-para tag--work-title">Put people front and centre to create a engaging experience that lets graduate recruits tell the story of what it’s like to work at ICAP.</p>
            </div>
        </div>
    </div>
</header>

<div id="iCap-carousel" class="container container--carousel" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/Gallery/web_icap_gallery_background.jpg')">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/Gallery/web_icap_gallery_01_imacsmall.jpg')"></div>
            <div id="carousel-image-2" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/Gallery/web_icap_gallery_02_imacsmall.jpg')"></div>
            <div id="carousel-image-3" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/Gallery/web_icap_gallery_03_imacsmall.jpg')"></div>
            <div id="carousel-image-4" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/Gallery/web_icap_gallery_04_imacsmall.jpg')"></div>
        </div> <!-- /end carousel-images -->
        <div class="carousel-controls">
            <div id="carousel-control-1" class="carousel-control selected"></div>
            <div id="carousel-control-2" class="carousel-control"></div>
            <div id="carousel-control-3" class="carousel-control"></div>
            <div id="carousel-control-4" class="carousel-control"></div>
        </div> <!-- /end carousel-controls -->
    </section>
</div>

<div class="container container--icap-gradient">
        <div class="mobile-holder">
            <img class="mobile-phone" src="<?php echo get_template_directory_uri();?>/images/mobile-phone.png" alt="">
            <div class="mobile-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_icap/iphone/web_icap_01_iphone.jpg" alt="">
            </div>
        </div>
        <div class="mobile-holder">
            <img class="mobile-phone" src="<?php echo get_template_directory_uri();?>/images/mobile-phone.png" alt="">
            <div class="mobile-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_icap/iphone/web_icap_02_iphone.jpg" alt="">
            </div>
        </div>
        <div class="mobile-holder">
            <img class="mobile-phone" src="<?php echo get_template_directory_uri();?>/images/mobile-phone.png" alt="">
            <div class="mobile-screen">
                <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_icap/iphone/web_icap_03_iphone.jpg" alt="">
            </div>
        </div>
</div> <!-- /end container -->

<div class="container container--no-padding module-dark">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 module--text-pad module--dark">
                    <div class="module__text">
                        <h2 class="underlined">What We Did</h2>
                        <p class="first-para tag--work-title">ICAP wanted to move away from an “eat what you kill” trader mentality to something that reflected the emerging 'gen-edge' demographic. Think “potential Google engineer” rather than “Gordon Gecko”. This new direction needed to be built into the branding and structure of their graduate onboarding portal. In part, this meant telling ICAP’s story through first person films and profiles featuring graduate recruits from all around the world.</p>
                    </div>
                </div>
               <div class="module module--2-1 module--video">
                    <div class="ratio">
                        <video poster="<?php echo get_template_directory_uri(); ?>/images/work/web_icap/ipad_poster_frame.jpg" autoplay loop="true" muted="true">
                                <source src="https://player.vimeo.com/external/141036693.sd.mp4?s=4b68b5569a3006368994e68721a7bcf3&profile_id=112" type="video/mp4">
                        </video>
                    </div>
                </div> <!-- /end module -->
            </div>
            <div class="group group--right">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/web_icap_02_ls.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-1 module--text-pad module--dark">
                    <div class="module__text">
                        <p>We carried out a strategic audit of ICAP’s available site content and re-wrote the site copy. We then created a responsive framework, suitable for the highly mobile-centric young audience. The design direction was bold, active and made use of ambient background header videos to convey the ‘feel’ of an ICAP office environment. The result is a portal that expresses the thrill and adventure behind a career at ICAP without resorting to marketing clichés. Finally, we produced a series of print marketing collateral for use at global graduate events.</p>
                    </div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/web_icap_03_ss.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/web_icap_04_ss.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--no-top">
    <div class="module module--2-1">
	    <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_icap/web_icap_05_hz.jpg')"></div>
    </div>
</div>

<div class="group-container">
    <a class="project-navigation paginate_prev" href="../bp-fll">Previous Project</a>
    <a class="project-navigation paginate_next" href="../i360">Next Project</a>
</div>

</div>

<?php get_footer(); ?>
