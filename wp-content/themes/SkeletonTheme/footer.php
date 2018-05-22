
        <h1>Footer</h1>
    <?php wp_nav_menu(array('theme_location' => 'secondary', 'menu_class' => 'your-nav-class')) ?> <!-- call menu and specify where to find -->
        <?php wp_footer(); ?> <!-- embed script info and footer data in footer -->
    </body>
</html>