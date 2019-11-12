<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateAbout extends Controller
{

    public function bloke()
    {
        return (object) array (
            'contexto' => get_field('context'),
            'photo_contexto' => get_field('photo_context'),
            'project' => get_field('text_project'),
            'photo_project' => get_field('photo_project'),
            'campania' => get_field('campaign_about'),
            'intro_team' => get_field('intro'),
        );
    }

    public function slides()
    {
        $return = '';

        $slides = get_field('slide_support');

        if(is_array($slides)) {
            foreach ($slides as $slide) {
                $return .= \App\template('partials.content-slide',[
                    'title' => $slide['title'],
                    'foto' => $slide['photo'],
                    'description' => $slide['description'],
                    ]
                );

            }
        }
        return $return;
    }

    public function team()
    {
        $return = '';

        $slides = get_field('team');

        if(is_array($slides)) {
            foreach ($slides as $slide) {
                $return .= \App\template('partials.content-team',[
                    'name' => $slide['name'],
                    'foto' => $slide['photo'],
                    'excrpt' => $slide['excerpt'],
                    'bio' => $slide['bio'],
                    ]
                );

            }
        }
        return $return;
    }

    public function modal()
    {
        $return = '';

        $slides = get_field('team');

        if(is_array($slides)) {
            foreach ($slides as $slide) {
                $return .= \App\template('partials.content-modal',[
                    'name' => $slide['name'],
                    'foto' => $slide['photo'],
                    'bio' => $slide['bio'],
                    ]
                );

            }
        }
        return $return;
    }
}
