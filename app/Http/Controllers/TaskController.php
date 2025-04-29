<?php

use App\Models\Task;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller{
public function create()
{
    $categories = Category::where('user_id', Auth::id())->get();
    return view('tasks.create', compact('categories'));
}
public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'due_date' => 'nullable|date',
        'priority' => 'required|in:low,medium,high',
        'category_id' => 'nullable|exists:categories,id',
    ]);
    $validated['user_id'] = Auth::id();
    $validated['status'] = 'todo';
    Task::create($validated);
    return redirect()->route('dashboard')->with('success', 'Tâche créée avec succès.');
}

}

?>
