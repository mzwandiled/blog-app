@extends('layouts.app')

@section('content')
    <main class="container">
        <div class="container-fluid">
            <div class="jumbotron ">
                <h1>Our Blog posts</h1>
            </div>
            <div class="col-sm-12">
                @foreach($blogs as $blog)
                    <article>
                        <h2>{{$blog->title}}</h2>
                        <p>{{$blog->body}}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </main>

<hr>
@endsection
