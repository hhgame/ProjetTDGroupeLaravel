<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        // Récupère les catégories de l'utilisateur connecté
        $categories = Category::where('user_id', Auth::id())->get();

        // Calcul des statistiques pour chaque catégorie
        $statistics = $categories->map(function ($category) {
            $totalTasks = $category->tasks->count();
            $completedTasks = $category->tasks->where('status', 'done')->count();
            $completionRate = $totalTasks > 0 ? ($completedTasks / $totalTasks) * 100 : 0;

            return [
                'name' => $category->name,
                'total_tasks' => $totalTasks,
                'completed_tasks' => $completedTasks,
                'completion_rate' => round($completionRate, 2),
            ];
        });

        return view('private.statistics.index', compact('statistics'));
    }

    public function activity()
    {
        // Récupère les 10 dernières actions de l'utilisateur connecté
        $activities = Task::where('user_id', Auth::id())
            ->latest()
            ->take(10)
            ->get()
            ->map(function ($task) {
                return [
                    'title' => $task->title,
                    'updated_at' => $task->updated_at,
                    'status' => $task->status,
                ];
            });

        return view('private.activity.index', compact('activities'));
    }
}
?>