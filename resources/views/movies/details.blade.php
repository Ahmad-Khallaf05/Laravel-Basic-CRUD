<h1>details</h1>

<table>
    <th>#</th>
    <th>movie name</th>
    <th>movie description</th>
    <th>movie  gener</th>
    <th>button</th>
    <tr>
        <td>{{$movie->id}}</td>
        <td>{{$movie->movie_name}}</td>
        <td>{{$movie->movie_description}}</td>
        <td>{{$movie->movie_gener}}</td>
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
</table>