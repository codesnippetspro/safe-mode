<?php
/**
 * Plugin Name:  Code Snippets Safe Mode
 * Plugin URI:   https://help.codesnippets.pro/article/12-safe-mode
 * Description:  Extension for the Code Snippets plugin which will stop snippets from running. Activate it if snippets are causing issues, and turn it off when you're done.
 * Author:       Code Snippets Pro
 * Author URI:   https://codesnippets.pro
 * License:      GPL-2.0-or-later
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Version:      0.1.0
 */

add_filter( 'code_snippets/execute_snippets', '__return_false' );
