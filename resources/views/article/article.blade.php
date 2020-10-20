    @extends('layout.app')

    @section('content')
    <h1>This is Article Page</h1>
    <a href="/article/1">Go to first article</a>
    <a href="/">Back to home page</a>

    @foreach ($articles as $article)
        <p><strong>Judul : {{ $article['title'] }} </strong></p>
        <p>Deskripsi : {{ $article['subject'] }} </p>
    @endforeach

    @endsection
