<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{
protected $acf = true;
public function campanias()
    {
        return (object) array (
            'destacado' => get_field('featured'),
            'sub' => get_field('subtitle'),
            'intro' => get_field('intro'),
            'frase_blue' => get_field('frase_blue'),
            'intro_blue' => get_field('intro_blue'),
            'campania' => get_field('campaign'),
            'explicacion' => get_field('explanation'),

        );
    }
}
