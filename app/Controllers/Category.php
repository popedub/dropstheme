<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Category extends Controller
{
public function campanias()
    {
        return (object) array (
            'destacado' => get_field('featured'),
            'sub' => get_field('subtitle'),
            'intro' => get_field('intro'),

        );
    }
}
