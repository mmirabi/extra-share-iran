<?php
/*
Plugin Name: Extra Iranian Share Buttons (Extra Theme)
Description: Add Bale, Soroush and Eitaa share buttons to Extra theme
Version: 1.0.1
Plugin URI: https://www.giumeeh.ir/plugin
Author: Mehdi Mirabi
Author URI: https://mehdimirabi.com/
Text Domain: Giumeeh
*/

if (!defined('ABSPATH')) exit;

class CZ_Iran_Share {

    public function __construct() {
        add_action('codevz/share', [$this,'render'],20);
        add_action('woocommerce_share', [$this,'render'],20);
        add_action('wp_enqueue_scripts', [$this,'enqueue_assets']);
    }

    public function enqueue_assets() {
        wp_enqueue_style(
            'extra-share-iran',
            plugin_dir_url(__FILE__) . 'assets/iran-share.css',
            [],
            '1.3.0'
        );
    }

    public function render(){

        if ( ! is_singular() ) {
            return;
        }

        $url   = urlencode( get_permalink() );
        $title = urlencode( get_the_title() );
        $icons = plugin_dir_url(__FILE__) . 'assets/icons/';

        echo '<div class="cz-iran-share-wrapper">';
        echo '<span class="cz-iran-share-label">اشتراک</span>';

        echo '<div class="cz-iran-share-icons">';

        echo '<a href="https://bale.ai/share?url='.$url.'" target="_blank" rel="nofollow noopener" class="cz-bale" data-title="بله">
                <i class="cz_iran_icon"><img src="'.$icons.'bale.svg" alt="بله"></i>
              </a>';

        echo '<a href="https://splus.ir/share?url='.$url.'" target="_blank" rel="nofollow noopener" class="cz-soroush" data-title="سروش">
                <i class="cz_iran_icon"><img src="'.$icons.'soroush.svg" alt="سروش"></i>
              </a>';

        echo '<a href="https://eitaa.com/share?url='.$url.'&text='.$title.'" target="_blank" rel="nofollow noopener" class="cz-eitaa" data-title="ایتا">
                <i class="cz_iran_icon"><img src="'.$icons.'eitaa.svg" alt="ایتا"></i>
              </a>';

        echo '<a href="https://api.whatsapp.com/send?text='.$title.'%20'.$url.'" target="_blank" rel="nofollow" class="cz-whatsapp" data-title="واتساپ">
                <i class="cz-icon fab fa-whatsapp"></i>
              </a>';

        echo '<a href="https://t.me/share/url?url='.$url.'&text='.$title.'" target="_blank" rel="nofollow" class="cz-telegram" data-title="تلگرام">
                <i class="cz-icon fab fa-telegram-plane"></i>
              </a>';

        echo '<a href="mailto:?subject='.$title.'&body='.$url.'" class="cz-email" data-title="ایمیل">
                <i class="cz-icon fas fa-envelope"></i>
              </a>';

        echo '<a href="#" class="cz-link" data-title="کپی لینک" onclick="navigator.clipboard.writeText(window.location.href);return false;">
                <i class="cz-icon fas fa-link"></i>
              </a>';

        echo '</div>'; // .cz-iran-share-icons
        echo '</div>'; // .cz-iran-share-wrapper
    }

}

new CZ_Iran_Share();
