<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        factory(Task::class, 20)->create();
        $return = Task::all();
        return $return ;
    }

}
