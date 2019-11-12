<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateContributors extends Controller
{
    public function intro()
    {
        return (object) array (
            'intro' => get_field('quote'),
            'texto' => get_field('intro'),

        );
    }
}
