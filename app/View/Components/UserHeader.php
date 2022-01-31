<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;
use App\Http\Controllers\UserController;

class UserHeader extends Component
{
    public $user;

    public function __construct()
    {
        $user_model = new User();
        $this->user = $user_model->getUserfname(session("id"));

    }


    public function render()
    {
        return view('components.user-header', ['user' => $this->user]);
    }
}
