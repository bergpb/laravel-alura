<?php

namespace App\Http\Controllers;

class SeriesController extends Controller {
    public function index() {
        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD'
        ];

        $html = "<ul>";
        foreach ($series as $serie){
            $html .="<li>$serie</li>";
        }
        $html .= "</ul>";

        return $html;
    }
}