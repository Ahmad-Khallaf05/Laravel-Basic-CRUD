<h1>Creat</h1>


<form action="{{route('movies.store')}}" method="post">

    @csrf

    <input type="text" name="movie_name" placeholder="Enter movie name">
    <input type="text" name="movie_description" placeholder="Enter movie description">
    <input type="text" name="movie_gener" placeholder="Enter movie gener">

    <button type="submit">Submit</button>

</form>