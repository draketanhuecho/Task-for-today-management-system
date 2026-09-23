<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class TaskController extends BaseController
{
    protected $taskModel;
    protected $userModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'page_title' => "Today's Tasks",
            'tasks'      => $this->taskModel->getTodayTasks()
        ];
        return view('tasks/index', $data);
    }

    public function listAll()
    {
        $data = [
            'page_title' => 'All System Tasks',
            'tasks'      => $this->taskModel->getAllTasksOrdered()
        ];
        return view('tasks/list', $data);
    }

    public function profile()
    {
        $data = [
            'page_title' => 'User Profile',
            'user'       => $this->userModel->getDemoUser()
        ];
        return view('pages/profile', $data);
    }

    public function about()
    {
        $data = [
            'page_title' => 'About Developer'
        ];
        return view('pages/about', $data);
    }
}