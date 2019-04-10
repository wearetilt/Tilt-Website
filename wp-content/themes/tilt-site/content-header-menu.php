<?php $blog_id = get_current_blog_id();?>
<?php 
    $body_class = get_body_class();
    if(in_array('page-template-new-work', $body_class)){
?>
<a id="backButton" class="header-item header-item--menu" href="/work">Back to work</a>
<?php } ?>
<a id="menuButton" class="header-item header-item--menu">Menu</a>
<a id="closeButton" class="header-item header-item--menu">Close</a>

<div id="pageMenu" class="menu">

<?php
    $menu = wp_nav_menu(array(
        'container' => false,
        'echo' => false,
        'menu_class' => 'menu__items'
    ));

    echo str_replace('menu-item', 'menu-item menu__item', $menu);
    ?>

    <div class="nav-icons">
        <div class="nav-icon"><a href="https://www.facebook.com/wearetilt" aria-label="Check out our facebook page" target="_blank" ><svg class="f-ico_facebook"> <use xlink:href="#facebook"></use></svg></a></div>
        <div class="nav-icon"><a href="https://twitter.com/wearetilt" aria-label="Check out our twitter page" target="_blank" ><svg class="f-ico_twitter"> <use xlink:href="#twitter"></use></svg></a></div>
        <div class="nav-icon"><a href="https://vimeo.com/wearetilt/" aria-label="Check out our vimeo page" target="_blank" ><svg class="f-ico_vimeo"> <use xlink:href="#vimeo"></use></svg></a></div>
        <div class="nav-icon"><a href="https://instagram.com/we_are_tilt" aria-label="Check out our instagram page" target="_blank" ><svg class="f-ico_instagram"> <use xlink:href="#instagram"></use></svg></a></div>
        <div class="nav-icon"><a href="https://www.youtube.com/channel/UC0JTRabxxDhTzUUBd9CatiQ" aria-label="Check out our youtube page" target="_blank" ><svg class="f-ico_youtube"> <use xlink:href="#youtube"></use></svg></a></div>
        <div class="nav-icon"><a href="http://bakery.wearetilt.com/" aria-label="Check out our tumblr page" target="_blank" ><svg class="f-ico_tumblr"> <use xlink:href="#tumblr"></use></svg></a></div>
        <div class="telephone">
        <?php if($blog_id == 1) : ?>
            <span>Tel: +44(0)1273 675 700</span>
        <?php endif;?>
        <?php if($blog_id == 3) : ?>
            <span>Tel: +1 (778) 835-6414</span>
        <?php endif;?>
        </div>
    </div>
</div>