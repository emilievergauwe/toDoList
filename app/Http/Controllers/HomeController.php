<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function login() {
        return redirect('/login');
    }

    public function userDashboard() {
        $user = Auth::user()->name;
        $currentUserEmail = Auth::user()->email;
        $userCompany = DB::select('select company from employees where email=?', [$currentUserEmail]);
        $company= (json_decode(json_encode($userCompany), true))[0]['company'];

        # Query database to get all current company tasks
        $companyTasks = DB::select('select * from tasks where company=?', [$company]);

        # Convert tasks object to array
        $tasks = json_decode(json_encode($companyTasks), true);
        # Iterate through tasks and create one array for open tasks and one for closed tasks
        $openTasks = [];
        $closedTasks = [];
        foreach($tasks as $task) {
            if ($task['status'] == "open") {
                array_push($openTasks, $task);
            }
            else {
                array_push($closedTasks, $task);
            }
        }

        return view('todo-users', [
            'openTasks' => $openTasks,
            'closedTasks' => $closedTasks,
            'tasks' => $tasks,
            'user' => $user
        ]);
    }

    public function adminDashboard() {
        // $query1 = DB::update('update tasks SET achiever="none", status="open" WHERE id= "3" ',);

        $company = "Aexavet";
        $user = "Franck";

        # Query database to get all current company tasks
        $companyTasks = DB::select('select * from tasks where company=?', [$company]);

        # Convert tasks object to array
        $tasks = json_decode(json_encode($companyTasks), true);
        # Iterate through tasks and create one array for open tasks and one for closed tasks
        $openTasks = [];
        $closedTasks = [];
        foreach($tasks as $task) {
            if ($task['status'] == "open") {
                array_push($openTasks, $task);
            }
            else {
                array_push($closedTasks, $task);
            }
        }

        return view('todo-admin', [
            'openTasks' => $openTasks,
            'closedTasks' => $closedTasks,
            'tasks' => $tasks,
            'user' => $user
        ]);
    }

    public function updateTask(Request $request) {

        # update database tasks table
        $selectedTask = $request->input('selectedTask');
        $selectedTaskAchiever = $request->input('selectedTaskAchiever');
        $query = DB::update('update tasks SET achiever=?, status="closed" WHERE id=? ', [$selectedTaskAchiever, $selectedTask]);
    
        print(json_encode('coucou'));
    }

    public function deleteTask(Request $request) {
        $selectedTask = $request->input('selectedTask');
        $query = DB::delete('delete from tasks WHERE id=? ', [$selectedTask]);

    }
}
