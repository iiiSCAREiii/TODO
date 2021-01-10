@extends( 'layouts.main' )

@section( 'title', "User's board" )


@section( 'content' )
    <a href="{{ route( 'boards.show', $board ) }}">Retour au Board</a>

    <h2>Liste des tâches de {{ $board->title }}</h2>

    <a href="{{ route( 'boards.tasks.create', $board ) }}">Ajouter une tâche</a>

    @foreach ( $board->tasks as $task )
        <p>{{ $task->title }}.
            <a href="{{ route( 'tasks.show', [$board, $task] ) }}">detail</a> <a href="{{ route( 'tasks.edit', [$board, $task] ) }}">edit</a></p>
            <form action="{{ route( 'boards.destroy', [$board, $task] ) }}" method='POST'>
                @method( 'DELETE' )
                @csrf

                <button type="submit">Delete</button>
            </form>
    @endforeach
@endsection
