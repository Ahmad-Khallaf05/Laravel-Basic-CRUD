<h1>edit</h1>

<form action="{{route('movies.update',$movie->id)}}" method="post">
    @method('put')
    @csrf

    <input type="text" name="movie_name" value="{{$movie->movie_name}}">
    <input type="text" name="movie_description" value="{{$movie->movie_description}}">
    <input type="text" name="movie_gener" value="{{$movie->movie_gener}}">

    <button type="submit">Update</button>

</form>