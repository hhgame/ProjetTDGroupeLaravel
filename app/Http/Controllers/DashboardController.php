<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $today = Carbon::today();
        $tasksToday = Task::where('user_id', $user->id)
            ->whereDate('due_date', $today)
            ->where('status', '!=', 'done')
            ->count();
        $tasksLate = Task::where('user_id', $user->id)
            ->whereDate('due_date', '<', $today)
            ->where('status', '!=', 'done')
            ->count();
        $totalTasks = Task::where('user_id', $user->id)->count();
        $doneTasks = Task::where('user_id', $user->id)->where('status', 'done')->count();
        $progress = $totalTasks > 0 ? round(($doneTasks / $totalTasks) * 100) : 0;
        return view('dashboard', compact('tasksToday', 'tasksLate', 'progress'));
    }
}

?>