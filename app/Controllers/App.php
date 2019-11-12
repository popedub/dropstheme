<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }
    public function colab()
    {
        $return = '';

        $slides = get_field('collaborators');

        if(is_array($slides)) {
            foreach ($slides as $slide) {
                $return .= \App\template('partials.content-collaborators',[
                    'name' => $slide['name'],
                    'foto' => $slide['photo'],
                    'funcion' => $slide['function'],
                    ]
                );

            }
        }
        return $return;
    }

    public function parthners()
    {
        $return = '';

        $slides = get_field('partners');

        if(is_array($slides)) {
            foreach ($slides as $slide) {
                $return .= \App\template('partials.content-partners',[

                    'logo' => $slide['logo'],
                    'txt' => $slide['text'],
                    ]
                );

            }
        }
        return $return;
    }


    public function faq()
    {
        $return = '';

        $faqs = get_field('faq', 149);

        if(is_array($faqs)) {
            foreach ($faqs as $faq) {
                $return .= \App\template('partials.content-faq',[

                    'ask' => $faq['ask'],
                    'answer' => $faq['answer'],
                    ]
                );

            }
        }
        return $return;
    }

    public function campanias()
    {
        return (object) array (
            'destacado' => get_field('featured'),
            'sub' => get_field('subtitle'),
            'intro' => get_field('intro'),
            'intro_blue' => get_field('intro_blue'),
            'campania' => get_field('campaign'),
            'explicacion' => get_field('explanation'),

        );
    }
}
