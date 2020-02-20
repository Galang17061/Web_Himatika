<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\models;

class UserController extends Controller
{
    protected $models;

    public function __construct()
    {
        $this->middleware('auth');
        $this->model = new models();
    }

    public function user()
    {
        $data = $this->model->User()->get();
        return view('admin.master.user.user', compact('data'));
    }
    public function user_save()
    {

    }
    public function user_update()
    {

    }
    public function user_delete()
    {

    }
    public function user_datatable()
    {

    }
}
