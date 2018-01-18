<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Http\Response;
use function MongoDB\BSON\toJSON;

class TaskController extends Controller
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
     * Get all tasks.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
        return view('Task/index');
    }

    /**
     * Get all tasks.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function search() {
        return response()->json(Task::all());
    }

    /**
     * Create task.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Laravel\Lumen\Http\Redirector
     */
    public function create(Request $request)
    {
        Task::create($request->all());
        return redirect('/');
    }

    /**
     * Delete task by id.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Laravel\Lumen\Http\Redirector
     */
    public function delete($id)
    {
        $task = Task::find($id);

        if ($task != null) {
            $task->delete();
        }
        return redirect('/');
    }

    /**
     * Check task by id (set status to done -> 2).
     *
     * @todo dependency injection? dus task meegeven ipv id
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Laravel\Lumen\Http\Redirector
     */
    public function check($id)
    {
        $task = Task::find($id);

        if ($task != null) {
            $task->status_id = $task->status_id == 1 ? 2 : 1;
            $task->save();
        }
    }

}
