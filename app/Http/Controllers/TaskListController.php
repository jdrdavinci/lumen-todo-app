<?php

namespace App\Http\Controllers;

use App\Models\TaskList;

class TaskListController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('TaskList/dashboard', ['taskLists' => TaskList::all()]);
    }
}
