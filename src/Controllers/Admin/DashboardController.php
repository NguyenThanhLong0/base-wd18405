<?php

namespace Nguyenlong\BaseWd18405\Controllers\Admin;

use Nguyenlong\BaseWd18405\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
