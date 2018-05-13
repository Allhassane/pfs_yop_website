@extends('layout.layout')

@section('title')
    {{ $data->title }} | PFS-YOP
@endsection

@section('meta')
    <meta name="description" content="{{ $data->resume }}" />
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="bread">
                <a href="/">Accueil</a> <i class="fa fa-angle-right"></i> <a href="">{{ strtoupper($data->title) }}</a>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">

                    <div class="body-page">

                        <div class="title">
                            {{ $data->subtitle }}
                        </div>

                        <div class="" style="color: rgb(0, 153, 0);font-size: 20px;font-weight: bold; margin-left: 7px;">
                            {{ $data->title }}
                        </div>

                        <div class="subtitle">
                            <em>{{ $data->resume }}</em>
                        </div>

                        <div class="content text-justify">

                            <a href="/storage/{{ $data->image }}" data-lightbox="gallery" data-title="{{ $data->title }}">
                                <img class="img-responsive" src="/storage/{{ $data->image }}" alt="{{ $data->title }}" style="border: 3px solid #eee;">
                            </a>

                            {!! $data->content !!}

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-3">
            @include('partials.sidebar')
        </div>
    </div>

@endsection