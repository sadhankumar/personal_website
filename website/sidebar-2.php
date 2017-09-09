<?php
if ( ! is_active_sidebar('sidebar-2') ) {
    return;
}
?>

<nav id="site-navigation" class="main-navigation" role="navigation">
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
</nav><!-- #site-navigation -->