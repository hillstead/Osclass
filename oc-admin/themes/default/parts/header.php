<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php _e('OSClass Admin Panel'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <script src="<?php echo osc_current_admin_theme_js_url('jquery.min.js') ; ?>"></script>
        <script src="<?php echo osc_current_admin_theme_js_url('jquery-ui-1.8.20.min.js') ; ?>"></script>
        <script src="<?php echo osc_current_admin_theme_js_url('ui-osc.js') ; ?>"></script>
        <!-- styles
        ================================================== -->
                <link href="<?php echo osc_current_admin_theme_styles_url('jquery-ui/jquery-ui-1.8.20.custom.css'); ?>" rel="stylesheet">

        <link href="<?php echo osc_current_admin_theme_styles_url('main.css'); ?>" rel="stylesheet">
        <!-- favicons
        ================================================== -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="shortcut icon" href="<?php echo osc_current_web_theme_url('images/favicon-48.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo osc_current_web_theme_url('images/favicon-144.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo osc_current_web_theme_url('images/favicon-114.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo osc_current_web_theme_url('images/favicon-72.png'); ?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo osc_current_web_theme_url('images/favicon-57.png'); ?>">

        <?php osc_run_hook('admin_header') ; ?>
    </head>

<body>
        <?php AdminToolbar::newInstance()->render() ;?>
    </div>

    <div id="content">
        <?php osc_current_admin_theme_path( 'parts/sidebar.php' ) ; ?>
        <div id="content-render">
            <div id="content-head">
                <?php osc_run_hook('admin_page_header'); ?>
            </div>
            <?php osc_show_flash_message('admin') ; ?>
            <div id="content-page">
                <div class="grid-system">
                    <div class="grid-row grid-first-row grid-100">
                        <div class="row-wrapper <?php echo osc_apply_filter('render-wrapper',''); ?>">