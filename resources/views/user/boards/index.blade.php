@extends( 'layouts.main' )

@section( 'title', "User's board" )


@section( 'content' )
    <a href="{{ route( 'dashboard' ) }}">Retour</a>
    <h2>Tous vos boards</h2>
    <br />

    <a href="{{ route( 'boards.create' ) }}">Créer une Board</a>
    <br /><br />

    @foreach ( $boards as $board )
        <a href="{{ route( 'boards.show', $board ) }}"><h3>{{ $board->title }}</h3></a>

            <form action="{{ route( 'boards.destroy', $board->id ) }}" method='POST'>
                @method( 'DELETE' )
                @csrf

                <button type="submit">Supprimer la board</button>
            </form>
    @endforeach
@endsection
