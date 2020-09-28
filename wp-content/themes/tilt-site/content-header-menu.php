<?php $blog_id = get_current_blog_id();?>
<?php 
    $body_class = get_body_class();
    if(in_array('single-work_item', $body_class)){
?>
<a id="workButton" class="header-item header-item--menu" href="/work">Back to work</a>
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
        <div class="telephone">
           <a href="tel:+44(0)1273 675 700"><img src="/wp-content/themes/tilt-site/images/phone-icon.svg"/></a>
        </div>
</div>