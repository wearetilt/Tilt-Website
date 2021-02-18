<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section id="primary" class="content-area">
    <main id="film-archive" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <header id="services--list" class="container container--header container--work-list">
                <p> View work by: </p>
                <a class='list-all' href="/work">All</a>
                <a class="list-web" href="/web">Web</a>
                <a class="list-motion" href="/motion">Motion</a>
                <a class="list-film" href="/film">Film</a>
            </header>

            <div class="film-show-reel area-dark">
                <div class="embed-container">
                    <iframe src="https://player.vimeo.com/video/312876149" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>

            <div class="group-container area-dark">
                <?php
                while (have_posts()) :
                    the_post();

                    get_template_part( 'content-web-link', get_post_format() );

                endwhile;

                // the_posts_pagination( array(
                //     'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                //     'next_text'          => __( 'Next page', 'twentyfifteen' ),
                //     'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
                // ) );

                ?>
                <?php
            else :
                get_template_part( 'content', 'none' );
            endif;
            ?>
        </div>

            <div class="new_client_logos container area-dark">
                <h2> Featured Clients</h2>
                    <div class="logos">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/1_bp.png" alt="bp logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/2_bbc.png" alt="bbc logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/20_Deloitte_logo.png" alt="Deloitte logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/10_barclays.png" alt="barclays bank logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/5_nick.png" alt="Nickelodeon logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/6_ford.png" alt="ford logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/19_Bupa_logo.png" alt="Bupa logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/17_Reuters_logo.png" alt="Reuters logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/13_sdnp.png" alt="southdowns national park logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/16_Open-Unievrsity_logo.png" alt="open university logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/4_bnp.png" alt="bnp paribas logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/11_sainos.png" alt="Sainsburys logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/12_rb.png" alt="redbull logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/18_Shell_logo.png" alt="Shell logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/14_land_rover.png" alt="land rover logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/15_02.png" alt="o2 mobile network logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/9_alzheimers.png" alt="alzheimers research UK logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/7_visit_brighton.png" alt="visit brighton logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/8_tui.png" alt="Tui logo" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/3_a&o.png" alt="Allen and Overy logo" />
                    </div>
                    <div class="logos-mobile">
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/bp.png" alt="bp logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/bbc.png" alt="bbc logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/allen.png" alt="allen & overy logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/bnp.png" alt="bnp paribas logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo/mobile/nick.png" alt="nickelodeon logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/ford.png" alt="ford logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/visitbrighton.png" alt="Visit brighton logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/tui.png" alt="TUI logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/alzheimers.png" alt="alzheimers research UK logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/barclays.png" alt="barclays paribas logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/sainsburys.png" alt="Sainsburys logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/redbull.png" alt="redbull logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/sdnp.png" alt="south downs national park logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/landrover.png" alt="land rover logo" />
    </div>
    <div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/mobile/o2.png" alt="o2 mobile network logo" />
    </div>
  </div>
            </div>

    </main>
</section>

<?php get_footer(); ?>
