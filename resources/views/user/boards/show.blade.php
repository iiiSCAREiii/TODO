@extends( 'layouts.main' )

@section( 'title', "User's board {{ $board->title }}" )


@section( 'content' )
    <a href="{{ route('boards.index') }}">Retour aux boards</a>
    <br />

    <a href="{{ route('boards.edit', $board->id) }}">Editer le board</a>

    <h2>{{ $board->title }}</h2>
    <br />

    <h3>Description du board :</h3>
    <p>{{ $board->description }}</p>

    <br />

    <div class="participants">
        <h3>Participants :</h3>

        @foreach( $board->users as $user )
            <p>{{ $user->name }}</p>
            <form action="{{ route( 'boards.boarduser.destroy', $user->pivot ) }}" method="POST">
                @csrf
                @method( "DELETE" )
                <button type="submit">Supprimer</button>
            </form>
        @endforeach
    </div>

    <br />

    <h3>Ajouter un participant</h3>
    <form action="{{ route( 'boards.boarduser.store', $board ) }}" method="POST">
        @csrf
        <select name="user_id" id="user_id">
            @foreach( $users as $user )
            <option value="{{ $user->id }}">{{ $user->name }} : {{ $user->email }}</option>
            @endforeach
        </select>

        @error( 'user_id' )
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit">Ajouter</button>
    </form>

    <a href="{{ route( 'tasks.index', $board ) }}">Voir les tâches</a>


@endsection
