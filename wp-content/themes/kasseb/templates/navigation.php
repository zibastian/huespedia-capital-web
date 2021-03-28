<?php
$menu_options = Kasseb_Menu_Helper::format_menu_data( wp_get_nav_menu_items('menu-principal') );
$user         = wp_get_current_user();
?>
<span><a class="nav-link correo" href="mailto:info@huespediacapital.com"><i class="far fa-envelope mail" aria-hidden="true"></i> info@huespediacapital.com</a></span>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="/">
        <img class="img-fluid" src="/wp-content/themes/kasseb/assets/images/logov2.png" alt="">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
        <ul class="navbar-nav mr-auto">
            <?php foreach( $menu_options as $menu_option ){ ?>
                <?php if( array_key_exists('children', $menu_option) ){ ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?php echo $menu_option['link']; ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo __(strtoupper($menu_option['title']), 'kasseb'); ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                        <?php foreach( $menu_option['children'] as $submenu_option ){ ?>
                            <a class="dropdown-item" href="<?php echo $submenu_option['link']; ?>">
                                <?php echo __($submenu_option['title'], 'kasseb'); ?>
                            </a>
                        <?php } ?>
                    </div>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $menu_option['link']; ?>">
                        <?php echo __(strtoupper($menu_option['title']), 'kasseb'); ?>
                    </a>
                </li>
                <?php } ?>
            <?php } ?>
            <?php if( $user->ID != '0' ){ ?>
            <li type="button" class="btn btn-sm nav-item dropdown">
                <a class="nav-link-s dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo wp_sprintf( '%s %s', __('Hi','kasseb'), $user->display_name ); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/logout/"><?php echo __('Logout','kasseb') ?></a>
                </div>
            </li>
            <?php } else { ?>
            <li class="nav-item">
                <a class="nav-link" href="/register"><?php echo __('SIGN UP','kasseb') ?></a>
            </li>
            <button type="button" class="btn btn-sm">
                <a class="nav-link-s log" href="/login"><?php echo __('LOG IN','kasseb') ?></a>
            </button>
            <?php } ?>
        </ul>
    </div>
</nav>
<div class="row d-none d-sm-block d-md-block d-lg-block" style="background-color: #000; height: 5px;"></div>