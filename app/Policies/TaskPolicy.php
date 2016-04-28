<?php

namespace App\Policies;

use App\User;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * 判断指定用户是否能删除任务
     * @param User $user
     * @param Task $task
     * @return boolean
     */
    public function destory(User $user, Task $task)
    {
        return false;
        return $user->id === $task->user_id;
    }
}
