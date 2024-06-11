<?php

namespace Asm\Controllers\Admin;

use Asm\Commons\Controller;
use Asm\Models\User;
use PDO;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $userModel = new User();
        $users = $userModel->all();
        $this->renderViewAdmin(__FUNCTION__, ['users' => $users]);
    }
}
