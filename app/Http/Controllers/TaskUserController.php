<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Task;
use App\Models\TaskUser;
use Illuminate\Http\Request;

class TaskUserController extends Controller
{

    /**
     * Store a newly created resource in storage for a given task (in uri param).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Board $task le task dans lequel on souhaite ajouter un utilisateur
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Task $task, Board $board)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer|exists:users,id'
        ]);
        $board_user = new TaskUser(); 
        $board_user->user_id = $validatedData['user_id']; 
        $board_user->task_id = $task->id; 
        $board_user->save(); 
        return redirect()->route('tasks.show', [$board, $task]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BoardUser  $boardUser l'instance à supprimer
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskUser $taskuser)
    {
        //TODO : correct bug
        $task = $taskuser->task; 
        $task->delete(); 
        return redirect()->route('boards.show', $task);
    }
    
}
