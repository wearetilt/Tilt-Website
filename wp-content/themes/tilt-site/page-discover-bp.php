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

<header id="page_discover_bp" class="work-item work-item--motion area-dark">
    <div class="module--video module--header">
        <div id="header-play" class="header-play">

        </div>
        <div class="ratio">
            <video id="header-video-player" class="video-js vjs-default-skin" autoplay loop muted width="100%" height="100%" >
                    <source id="header-video" src="https://player.vimeo.com/external/141529090.hd.mp4?s=9319fb63f3d31c680a7ccc8dea210503&profile_id=113" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container container--header">
        <div class="header-title">
            <p class="tag tag--no-italic">Web: Case Study</p>
            <h1>BP<br />
                <span class="light underlined">Discover BP</span>
            </h1>
            <h2 class="light">Strategy | UX | Design | Dev | Film | Motion | 3D</h2>
        </div>
        <div class="header-text">
            <div class="header-text__module header-text__module--padding">
                <h2>The Challenge</h2>
                <p class="first-para">The onboarding F2F programme became became a non-mandatory requirement. The challenge we faced was to encourage new joiners to spend time learning about the company despite this.</p>
            </div>
            <div class="header-text__module header-text__module--padding">
                <h2>The Big Idea</h2>
                <p class="first-para">Create a learning experience that emulated the experience and content that users choose to interact with in their free time.</p>
            </div>
        </div>
    </div>
</header>

<div class="container container--half-top">
    <div class="monitor-holder">
        <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="monitor-screen"></div>
    </div>
    <section class="text-section">
        <h2>LEARNING BY STEALTH</h2>
        <div class="text-section__para">
            <p class="first-para">Why would employees spend time learning if they don’t have to?</p>
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
        <div class="carousel-controls">
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
            <p class="first-para">BP’s request fitted neatly with what we believe at Tilt – that if you create experiences similar to those that people enjoy on the public web, then engagement will follow.</p>
            <p>That means opting for stories over abstract concepts, making personal films rather than video lectures, focusing on visual information over text-heavy documents, and more informal delivery over stiff corporate language.</p>
			<p>In short, make the experience enjoyable for the user.</p>
        </div>
    </section>
</div>

<div class="container">
    <div class="monitor-holder">
        <img class="monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="monitor-screen monitor-screen--video">
	        <video class="video-js vjs-default-skin" controls poster="<?php echo get_template_directory_uri(); ?>/images/work/web_discover/bobp_poster.jpg" width="100%" height="100%" >
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
                    	 <video class="video-js vjs-default-skin" controls poster="<?php echo get_template_directory_uri(); ?>/images/work/web_discover/bobp_montage_poster.jpg" width="100%" height="100%" >
							 <source src="https://player.vimeo.com/external/140771096.hd.mp4?s=18276ebc9ead0e5b936f685afac90314&profile_id=113" type="video/mp4">
						 </video>
                    </div>
                </div>
                
            </div>
            <div class="group group--right">
                <div class="module module--16-9 module--video module--nozoom">
                    <div class="ratio">
                    	<video class="video-js vjs-default-skin" controls poster="<?php echo get_template_directory_uri(); ?>/images/work/web_discover/madeline_poster_image.jpg" width="100%" height="100%" >
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
            <p class="first-para">Through workshops and guided sessions, we mapped out the key messages that BP wanted to communicate through the portal, and the main goals for site users. We organised this information into categories that made sense to new joiners, resulting in a portal designed to be:</p>
            <ul>
            	<li>Process content (suitable for infosheets, infographics)</li>
				<li>People content (profile films, headline montages)</li>
				<li>Business content (animations, factsheets, interactive timelines)</li>
            </ul>
        </div>
    </section>
</div>

<div class="container container--carousel">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac2/web_discover_gallery2_01_imacsmall.jpg')"></div>
            <div id="carousel-image-2"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac2/web_discover_gallery2_02_imacsmall.jpg')"></div>
            <div id="carousel-image-3"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac2/web_discover_gallery2_03_imacsmall.jpg')"></div>
            <div id="carousel-image-4"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac2/web_discover_gallery2_04_imacsmall.jpg')"></div>
            <div id="carousel-image-5"class="carousel-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/gallery_iMac2/web_discover_gallery2_05_imacsmall.jpg')"></div>
        </div> <!-- /end carousel-images -->
        <div class="carousel-controls">
            <div id="carousel-control-1" class="carousel-control selected"></div>
            <div id="carousel-control-2" class="carousel-control"></div>
            <div id="carousel-control-3" class="carousel-control"></div>
            <div id="carousel-control-4" class="carousel-control"></div>
            <div id="carousel-control-5" class="carousel-control"></div>
        </div> <!-- /end carousel-controls -->
    </section>
</div> <!-- /end container--carousel -->

<div class="container area-dark">
    <section class="text-section">
        <h2>WHAT WE MADE</h2>
        <div class="text-section__para">
            <p class="first-para">Among other things, we created:</p>
            <ul>
				<li><strong>Headline films.</strong> Rapid-cut ‘trailer’ style pieces designed to introduce each portal section and entice the user to discover more.</li>
				<li><strong>The Business of BP.</strong> An interactive 3D-rendered virtual BP city, featuring several stunning motion pieces, which helped new employees understand what the different business areas and functions actually do.</li>
				<li><strong>Profile films.</strong> Informal, documentary style stories with friendly advice from BP colleagues. Animated overlays helped to illustrate key points.</li>
				<li><strong>Infosheets and factsheets.</strong> Turning traditional copy content into highly visual, easy-to-absorb pieces. Infosheets help communicate journeys and processes, while factsheets convey stat-heavy info.</li>
				<li><strong>Leader films.</strong> Short interviews with BP leaders, giving them the space to articulate their ideas for what makes someone succeed at BP.</li>
            </ul>
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
        <h2>RESULTS: 16x EXPECTED UPTAKE</h2>
        <div class="text-section__para">
            <p class="first-para">Initially, BP hoped to achieve 6,000 unique hits in the first year – it generated 100,000 within twelve months.</p>
			<p>Three years on from the initial deployment, we have just finished a design refresh and made the site fully responsive. Discover BP continues to be one of the organisation’s most successful communication projects, and has led to Tilt becoming involved in other high-profile BP projects.</p>
        </div>
    </section>
</div>

<div class="container container--carousel">
    <section class="carousel">
        <img class="carousel-monitor centre-image" src="<?php echo get_template_directory_uri(); ?>/images/monitor.png" alt="">
        <div class="carousel-images">
            <div id="carousel-image-1"class="carousel-image"></div>
            <div id="carousel-image-2"class="carousel-image"></div>
            <div id="carousel-image-3"class="carousel-image"></div>
            <div id="carousel-image-4"class="carousel-image"></div>
        </div> <!-- /end carousel-images -->
        <div class="carousel-controls">
            <div id="carousel-control-1" class="carousel-control selected"></div>
            <div id="carousel-control-2" class="carousel-control"></div>
            <div id="carousel-control-3" class="carousel-control"></div>
            <div id="carousel-control-4" class="carousel-control"></div>
        </div> <!-- /end carousel-controls -->
    </section>
</div> <!-- /end container--carousel -->

<div class="container area-dark">
    <section class="text-section">
        <h2>Feedback from BP</h2>
        <div class="text-section__para">
            <p class="first-para">“Thank you all for an extraordinary effort in making this all come together -on time! Truly I was staggered.”</p>
            <p>Shane Samarawikrema Learning & Performance BP</p>
        </div>
    </section>
</div>

<div class="container container--no-padding">
    <div class="module module--2-1">
	    <div class="ratio" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/work/web_discover/web_discover_hz.jpg')"></div>
    </div>
</div>

    <div class="group-container">
        <a class="project-navigation" href="../i360">< Previous Project</a>
        <a class="project-navigation" href="../bp-fll">Next Project ></a>
    </div>

</div>

<?php get_footer(); ?>
