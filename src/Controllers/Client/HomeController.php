<?php

namespace Nguyenlong\BaseWd18405\Controllers\client;

use Nguyenlong\BaseWd18405\Commons\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Long';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}
