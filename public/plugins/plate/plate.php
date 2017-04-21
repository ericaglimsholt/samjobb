<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
 * Plugin Name: Plate
 * Description: A framework plugin for WordPlate.
 * Author: WordPlate
 * Author URI: https://wordplate.github.io
 * Version: 2.3.0
 * Plugin URI: https://github.com/wordplate/plate#readme
 */

declare(strict_types=1);

add_action('after_setup_theme', function () {
    require_if_theme_supports('plate-dashboard', __DIR__.'/src/dashboard.php');
    require_if_theme_supports('plate-editor', __DIR__.'/src/editor.php');
    require_if_theme_supports('plate-footer', __DIR__.'/src/footer.php');
    require_if_theme_supports('plate-login', __DIR__.'/src/login.php');
    require_if_theme_supports('plate-menu', __DIR__.'/src/menu.php');
    require_if_theme_supports('plate-permalink', __DIR__.'/src/permalink.php');
    require_if_theme_supports('plate-tabs', __DIR__.'/src/tabs.php');
    require_if_theme_supports('plate-toolbar', __DIR__.'/src/toolbar.php');
}, 100);

// Remove menu items.
add_theme_support('plate-menu', [
   'comments',
   'links',
   'media',
]);
// Remove meta boxes in post editor.
add_theme_support('plate-editor', [
    'commentsdiv',
    'commentstatusdiv',
    'linkadvanceddiv',
    'linktargetdiv',
    'linkxfndiv',
    'postcustom',
    'postexcerpt',
    'revisionsdiv',
    'slugdiv',
    'sqpt-meta-tags',
    'trackbacksdiv',
    //'categorydiv',
    //'tagsdiv-post_tag',
]);
// Remove dashboard widgets.
add_theme_support('plate-dashboard', [
    'dashboard_activity',
    'dashboard_incoming_links',
    'dashboard_plugins',
    'dashboard_recent_comments',
    'dashboard_primary',
    'dashboard_quick_press',
    'dashboard_recent_drafts',
    'dashboard_secondary',
    //'dashboard_right_now',
]);
// Remove links from admin toolbar.
add_theme_support('plate-toolbar', [
    'comments',
    'wp-logo',
    'edit',
    'appearance',
    'view',
    'new-content',
    'updates',
    'search',
]);
// Remove dashboard tabs.
add_theme_support('plate-tabs', ['help', 'screen-options']);
// Set custom permalink structure.
add_theme_support('plate-permalink', '/%postname%/');
// Set custom login logo.
add_theme_support('plate-login', sprintf('%s/%s', get_template_directory_uri(), '/assets/images/logo.png'));
// Set custom footer text.
add_theme_support('plate-footer', 'Thank you for creating with <a href="https://wordplate.github.io" target="_blank">WordPlate</a>.');
