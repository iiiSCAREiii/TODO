@extends('layouts.main')

@section('title', "Task" .  $task->title)


@section('content')
    <a href="{{ route( 'tasks.index', $task->board_id ) }}">Retour à la liste des tâches</a>
    <br />
    <a href="{{ route( 'boards.show', $task->board_id ) }}">Retour au board</a>

    <h2>{{ $task->title }}</h2>

    <h3>Description de la tâche :</h3>
    <p>{{ $task->description }}</p>

    <p>À finir avant le {{$task->due_date}}</p>

    <p>Status :  {{$task->state}}</p>

    <p>Categorie : {{$task->category->name}}</p>

    <div class="participants">
        @foreach($task->assignedUsers as $user)
            <p>{{$user->name}} : {{$user->email}}</p>
            <form action="{{route('tasks.user.destroy', $user->pivot)}}" method="POST">
                @csrf
                <button type="submit">Supprimer</button>
            </form>
        @endforeach
    </div>




@endsection
