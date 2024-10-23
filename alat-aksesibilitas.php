<?php

/**
 * Plugin Name: Alat Aksesibilitas
 * Describsion: Plugin Alat Aksesibilitas WordPress ini dirancang untuk meningkatkan aksesibilitas situs web Anda bagi semua pengguna, termasuk mereka yang memiliki kebutuhan khusus. Dengan berbagai alat dan fitur, plugin ini membantu memastikan bahwa konten Anda dapat diakses dengan mudah oleh semua orang.
 * Version: 1.0
 * Author: Alat Aksesibilitas
 */

// Exit jika file ini diakses secara langsung
if (! defined('ABSPATH')) {
  exit;
}

// Enqueue scripts and styles
function enqueue_accessibility_scripts()
{
  // Perbaikan di sini: Memanggil plugin_dir_url() di dalam fungsi
  wp_enqueue_style('alat-aksesibilitas-style', plugin_dir_url(__FILE__) . 'alat-aksesibilitas.css');
  wp_enqueue_script('alat-aksesibilitas-script', plugin_dir_url(__FILE__) . 'alat-aksesibilitas.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_accessibility_scripts');

// Menampilkan Toolbar Aksesibilitas
function display_accessibility_toolbar()
{
  include(plugin_dir_path(__FILE__) . 'toolbar.php');
}
add_action('wp_footer', 'display_accessibility_toolbar');
