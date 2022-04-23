<?php

namespace App\Controllers;

use Jaxon\Demo\Ajax\Bts;
use Jaxon\Demo\Ajax\Pgw;

use function view;

class Demo extends BaseController
{
    public function index()
    {
        $jaxon = jaxon()->app();

        // Print the page
        echo view('demo/index', [
            'jaxonCss' => $jaxon->css(),
            'jaxonJs' => $jaxon->js(),
            'jaxonScript' => $jaxon->script(),
            'pageTitle' => "CodeIgniter Framework",
            // Jaxon request to the Bts Jaxon class
            'bts' => $jaxon->request(Bts::class),
            // Jaxon request to the Pgw Jaxon class
            'pgw' => $jaxon->request(Pgw::class),
        ]);
    }

    public function jaxon()
    {
        $jaxon = jaxon()->app();
        if(!$jaxon->canProcessRequest())
        {
            // Jaxon failed to find a plugin to process the request
            return; // Todo: return an error message
        }

        $jaxon->processRequest();
        return $jaxon->httpResponse();
    }
}
