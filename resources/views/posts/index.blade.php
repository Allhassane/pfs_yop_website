@extends('layout.layout')

@section('title')
    {{ setting('site.title') }}
@endsection

@section('meta')
    <meta name="description" content="{{ setting('site.description') }}" />
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="bread">
                <a href="/">Accueil</a> <i class="fa fa-angle-right"></i> <a href="">Tous les articles</a>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">

                    <div class="body-page">

                        <div class="title">
                            Tous les articles
                        </div>
                        <div class="separator-second"></div>

                        @foreach($datas as $data)
                        <div class="posts-style">
                            <a href="{{ route('posts.show', $data->slug) }}">
                                <img src="/storage/{{ str_replace('.', '-thumb.', $data->picture) }}" alt="{{ $data->title }}">
                            </a>
                            <div class="title" style="font-size: 1.2em;">
                                <a href="{{ route('posts.show', $data->slug) }}">
                                    {{ $data->title }}
                                </a>
                            </div>
                            <i class="fa fa-clock-o"></i> PUBLIÉ LE {{ date('d/m/Y', strtotime($data->created_at)) }} | Consulté {{ $data->vues }} fois
                            <p>{{ substr($data->resume, 0, 160) }} ...</p>
                        </div>
                        @endforeach
                        <br>

                        {{ $datas->links() }}

                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-3">
            @include('partials.sidebar')
        </div>
    </div>

@endsection