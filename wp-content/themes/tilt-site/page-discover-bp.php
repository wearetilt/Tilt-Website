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
<div id="video-overlay" class="fullpage-overlay">
    <video id="overlay-video" class="video-js vjs-default-skin vertical-align" poster="<?php echo get_template_directory_uri(); ?>/images/work/mo_integrity/film_poster_image.jpg" width="100%" height="auto">
        <source src="https://player.vimeo.com/external/141548149.hd.mp4?s=c38947ea65f3bad06d05e9881fe92ead&profile_id=113" type="video/mp4">
    </video>
    <div id="video-overlay-close">
    </div>
</div>
<header id="page_discover_bp" class="work-item area-dark">
    <div class="module--video module--header">
       
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
                    <source id="header-video" src="https://player.vimeo.com/external/141529090.hd.mp4?s=9319fb63f3d31c680a7ccc8dea210503&profile_id=113" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag tag--work-body">Web: Case Study</p>
            <h1>BP<br />
                <span class="light underlined">Discover BP</span>
            </h1>
            <h2 class="light services">Strategy | UX | Design | Dev | Film | Motion | 3D</h2>
        </div>
    </div>
</header>

<div class="container container--half-top container--discover-bp-gradient">
	
    <div class="monitor-holder">
        <img class="iphone" src="<?php echo get_template_directory_uri(); ?>/images/work/web_discover/web_discover_iphone.jpg" alt="">
        <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="monitor-screen">
	        <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_discover/web_discover_imacsmall.jpg" alt="" style="width: 100%; height: 100%;">
        </div>
    </div>
    <section class="text-section">
        <h2>LEARNING BY STEALTH</h2>
        <div class="text-section__para">
            <p class="first-para highlight tag--work-body">Why would employees spend time learning if they don’t have to?</p>
            <p>When BP approached us to help create a website for new joiners, it was with this question in mind. Traditionally, BP provided new employees with a comprehensive overview of their organisation through a series of workshops. However, attendance was no longer mandatory, so they needed another approach.</p>
            <p>The BP team asked Tilt to create a portal that was compelling enough to encourage new joiners (and existing staff) to visit voluntarily.</p>
        </div>
    </section> <!-- /end text-section -->
</div> <!-- /end container -->

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/web_discover_01_ls.jpg')"></div>
                </div>
            </div>
            <div class="group group--right">
                <div class="module module--2-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/web_discover_02_mr.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/web_discover_03_ss.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/web_discover_04_ss.jpg')"></div>
                </div>
            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container container--carousel">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac/web_discover_gallery_01_imacsmall.jpg')"></div>
            <div id="carousel-image-2" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac/web_discover_gallery_02_imacsmall.jpg')"></div>
            <div id="carousel-image-3" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac/web_discover_gallery_03_imacsmall.jpg')"></div>
            <div id="carousel-image-4" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac/web_discover_gallery_04_imacsmall.jpg')"></div>
            <div id="carousel-image-5" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac/web_discover_gallery_05_imacsmall.jpg')"></div>
            <div id="carousel-image-6" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac/web_discover_gallery_06_imacsmall.jpg')"></div>
            <div id="carousel-image-7" class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac/web_discover_gallery_07_imacsmall.jpg')"></div>
        </div> <!-- /end carousel-images -->
        <div class="carousel-controls seven-wide grey-icons">
            <div id="carousel-control-1" class="carousel-control selected"></div>
            <div id="carousel-control-2" class="carousel-control"></div>
            <div id="carousel-control-3" class="carousel-control"></div>
            <div id="carousel-control-4" class="carousel-control"></div>
            <div id="carousel-control-5" class="carousel-control"></div>
            <div id="carousel-control-6" class="carousel-control"></div>
            <div id="carousel-control-7" class="carousel-control"></div>
        </div> <!-- /end carousel-controls -->
    </section>
</div> <!-- /end container--carousel -->

<div class="container area-dark">
    <section class="text-section">
        <h2>TELL STORIES, MAKE IT ENJOYABLE</h2>
        <div class="text-section__para">
            <p class="first-para tag--work-body">BP’s request fitted neatly with what we believe at Tilt – that if you create experiences similar to those that people enjoy on the public web, then engagement will follow.</p>
            <p>That means opting for stories over abstract concepts, making personal films rather than video lectures, focusing on visual information over text-heavy documents, and more informal delivery over stiff corporate language.</p>
			<p>In short, make the experience enjoyable for the user.</p>
        </div>
    </section>
</div>

<div class="container">
    <div class="monitor-holder">
        <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="monitor-screen monitor-screen--video">
	        <video id="video-1" controls poster="<?php echo get_template_directory_uri(); ?>/images/work/web_discover/bobp_poster.jpg" class="video-js vjs-tech vjs-default-skin page-video" width="100%" height="100%" >
            	<source src="https://player.vimeo.com/external/89606431.hd.mp4?s=7974e855095d51f7807c4ac87e8c3c5d&profile_id=113" type="video/mp4">
			</video>
        </div>
    </div>
</div>





<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--left">
                <div class="module module--16-9 module--video module--nozoom">
                    <div class="ratio">
                    	<video controls poster="<?php echo get_template_directory_uri(); ?>/images/work/web_discover/bobp_montage_poster.jpg" class="video-js vjs-default-skin page-video" controls width="100%" height="100%">
                                <source src="https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113" type="video/mp4">
                        </video>
                    </div>
                </div>

            </div>
            <div class="group group--right">
                <div class="module module--16-9 module--video module--nozoom">
                    <div class="ratio">
                    	<video controls poster="<?php echo get_template_directory_uri(); ?>/images/work/web_discover/madeline_poster_image.jpg" class="video-js vjs-default-skin page-video" controls width="100%" height="100%">
                                <source src="https://player.vimeo.com/external/141536383.sd.mp4?s=ec76d68e3231addfe57b47c24dadc826&profile_id=112" type="video/mp4">
                        </video>
	                  </div>
                </div>

            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div>




<div class="container area-dark">
    <section class="text-section">
        <h2>BEAUTIFULLY SIMPLE UX</h2>
        <div class="text-section__para">
            <p class="first-para tag--work-body">Through workshops and guided sessions, we mapped out the key messages that BP wanted to communicate through the portal, and the main goals for site users. We organised this information into categories that made sense to new joiners, resulting in a portal designed to be:</p>
            <ul class="standard-list">
            	<li>Process content (suitable for infosheets, infographics)</li>
				<li>People content (profile films, headline montages)</li>
				<li>Business content (animations, factsheets, interactive timelines)</li>
            </ul>
        </div>
    </section>
</div>

<div class="container container--carousel container--discover-bp-gradient">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-8"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac2/web_discover_gallery2_01_imacsmall.jpg')"></div>
            <div id="carousel-image-9"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac2/web_discover_gallery2_02_imacsmall.jpg')"></div>
            <div id="carousel-image-a"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac2/web_discover_gallery2_03_imacsmall.jpg')"></div>
            <div id="carousel-image-b"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac2/web_discover_gallery2_04_imacsmall.jpg')"></div>
            <div id="carousel-image-c"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac2/web_discover_gallery2_05_imacsmall.jpg')"></div>
        </div> <!-- /end carousel-images -->
        <div class="carousel-controls five-wide">
            <div id="carousel-control-8" class="carousel-control selected"></div>
            <div id="carousel-control-9" class="carousel-control"></div>
            <div id="carousel-control-a" class="carousel-control"></div>
            <div id="carousel-control-b" class="carousel-control"></div>
            <div id="carousel-control-c" class="carousel-control"></div>
        </div> <!-- /end carousel-controls -->
    </section>
</div> <!-- /end container--carousel -->

<div class="container">
    <section class="text-section">
        <h2>WHAT WE MADE</h2>
        <div class="text-section__para">
            <p class="first-para tag--work-body">Among other things, we created:</p>
        	<p><span class="serif highlight">Headline films:</span> Rapid-cut ‘trailer’ style pieces designed to introduce each portal section and entice the user to discover more.</p>
			<p><span class="serif highlight">The Business of BP:</span> An interactive 3D-rendered virtual BP city, featuring several stunning motion pieces, which helped new employees understand what the different business areas and functions actually do.</p>
			<p><span class="serif highlight">Profile films:</span> Informal, documentary style stories with friendly advice from BP colleagues. Animated overlays helped to illustrate key points.</p>
			<p><span class="serif highlight">Infosheets and factsheets:</span> Turning traditional copy content into highly visual, easy-to-absorb pieces. Infosheets help communicate journeys and processes, while factsheets convey stat-heavy info.</p>
			<p><span class="serif highlight">Leader films:</span> Short interviews with BP leaders, giving them the space to articulate their ideas for what makes someone succeed at BP.</p>           
        </div>
    </section>
</div>

<div class="container container--no-padding">
    <section>
        <div class="group-container">
            <div class="group group--right">
                <div class="module module--2-2">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/web_discover_12_ls.jpg')"></div>
                </div>
            </div>
            <div class="group group--left">
                <div class="module module--2-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/web_discover_09_mr.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/web_discover_10_ss.jpg')"></div>
                </div>
                <div class="module module--1-1">
	                <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/web_discover_11_ss.jpg')"></div>
                </div>

            </div> <!-- /end group -->
        </div> <!-- /end group-container -->
    </section>
</div> <!-- /end container -->

<div class="container">
    <section class="text-section">
        <h2>16 X the expected results</h2>
        <div class="text-section__para">
            <p class="first-para tag--work-body">Initially, BP hoped to achieve 6,000 unique hits in the first year – it generated 100,000 within twelve months.</p>
			<p>Three years on from the initial deployment, we have just finished a design refresh and made the site fully responsive. Discover BP continues to be one of the organisation’s most successful communication projects, and has led to Tilt becoming involved in other high-profile BP projects.</p>
        </div>
    </section>
</div>

<div class="container area-dark container--discover-bp-gradient">
        <div class="mobile-holder">
            <img class="mobile-phone" src="<?php echo get_template_directory_uri(); ?>/images/mobile-phone.png" alt="">
            <div class="mobile-screen">
	            <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iphone/web_discover_gallery_01_iphone.jpg" alt="">
            </div>
        </div>
        <div class="mobile-holder">
            <img class="mobile-phone" src="<?php echo get_template_directory_uri(); ?>/images/mobile-phone.png" alt="">
            <div class="mobile-screen">
	            <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iphone/web_discover_gallery_02_iphone.jpg" alt="">
            </div>
        </div>
        <div class="mobile-holder">
            <img class="mobile-phone" src="<?php echo get_template_directory_uri(); ?>/images/mobile-phone.png" alt="">
            <div class="mobile-screen">
	            <img src="<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iphone/web_discover_gallery_03_iphone.jpg" alt="">
            </div>
        </div>
</div> <!-- /end container -->

<div class="container container--no-padding">
    <div class="module module--2-1">
	    <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/web_discover_hz.jpg')"></div>
    </div>
</div>

<div class="container quote-container area-dark">
    <section class="text-section">
            <blockquote>“Thank you all for an extraordinary effort in making this all come together -on time! Truly I was staggered.”</blockquote>
            <p class="sans-serif quote-attribute"><strong class="highlight">Shane Samarawikrema</strong> Learning &amp; Performance BP</p>
    </section>
</div>

    <div class="group-container">
        <a class="project-navigation paginate_prev" href="../i360">Previous Project</a>
        <a class="project-navigation paginate_next" href="../bp-fll">Next Project</a>
    </div>

</div>

<?php get_footer(); ?>
