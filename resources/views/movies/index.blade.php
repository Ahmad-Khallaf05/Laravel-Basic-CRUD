<h1>show all Movies</h1>
<a href="{{route('movies.create')}}">Create Movie</a>
<table>
    <th>#</th>
    <th>movie name</th>
    <th>movie description</th>
    <th>button</th>
    @foreach ($movies as $movie)
    <tr>
        <td>{{$movie->id}}</td>
        <td>{{$movie->movie_name}}</td>
        <td>{{$movie->movie_description}}</td>
        <td>
            <a href="{{route('movies.details',$movie->id)}}">Details</a>
            <a href="{{route('movies.edit',$movie->id)}}">Edit</a>
            <form action="{{route('movies.destroy', $movie->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button type="supmit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>