<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?> <!-- embed wordpress header -->
</head>
<body <?php body_class();?> > <!-- add wp body classes. The body_class() function can take string args for classes -->
    <h1>This is the header</h1>
    <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'your-nav-class')) ?> <!-- call menu and specify where to find -->
