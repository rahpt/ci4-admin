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

        echo view('\Admin\Views\dashboard', $data);
    }
    public function profile()
    {
        $data['pageTitle'] = 'Profile';

        echo view('\Admin\Views\profile', $data);
    }

}