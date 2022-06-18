<?php

namespace Admin\Controllers;

use App\Controllers\BaseController;

/**
 * Class Home
 */
class Home extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Squadfree Bootstrap Template - Index';

        echo view('Landing\Views\content', $data);
    }

}