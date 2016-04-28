<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;
use Illuminate\Auth\Access\Response;



class TaskController extends Controller
{
    /**
     * 任务仓库初始值
     * @var TaskRepository
     */
    protected $tasks;
    /**
     * 控制器初始化
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }
    /**
     * 显示当前用户的所有任务列表
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);
    }
    /**
     * 保存任务数据
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  => 'required|max:255',
        ]);
        
        $request->user()->tasks()->create([
            'name'      => $request->name,
            'content'   => $request->content
        ]);
        return redirect('/tasks');
    }
    /**
     * 删除指定任务
     * @param Request $request
     * @param Task $task
     * @return Response
     */
    public function destory(Request $request, Task $task)
    {
        $this->authorize('destory', $task);
        $task->delete();
        return redirect('/tasks');
    }
}
