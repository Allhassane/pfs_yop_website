@extends('layout.layout')

@section('title')
    Nos Partenaires | PFS-YOP
@endsection

@section('meta')
    <meta name="description" content="{{ setting('site.description') }}" />
@endsection

@section('content')
    <div class="row">

        <div class="col-sm-12">
            <div class="bread">
                <a href="/">Accueil</a> <i class="fa fa-angle-right"></i> <a href="">Partenaires</a>
            </div>
        </div>
        <!-- content bar -->
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">

                    <div class="body-page">

                        <div class="title">
                            Nos Partenaires
                        </div>
                        <div class="separator-second">

                        </div>

                        <div class="row">
                            @if(count($datas) > 0)
                                @foreach($datas as $post)
                                    <div class="col-sm-12">
                                        <div class="posts-style" style="padding: 10px 0 50px 0 !important;">
                                            <a href="/storage/{{ $post->logo }}" data-lightbox="gallery" data-title="{{ $post->libelle }}">
                                                <img src="/storage/{{ $post->logo }}" alt="{{ $post->libelle }}" style="height: 150px; width: auto !important;padding-bottom: 20px;">
                                            </a>
                                            <div class="title">
                                                {{ $post->libelle }}
                                            </div>
                                            {{--                                    <i class="fa fa-clock-o"></i> &nbsp;&nbsp; {{ date('d', strtotime($post->updated_at)) .' / '. date('m', strtotime($post->updated_at)).' / '. date('Y', strtotime($post->updated_at)) }}--}}
                                            <p>{!! strip_tags($post->content) !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                @include('partials.empty')
                            @endif
                        </div>


                    </div>

                </div>
            </div>

        </div>

        <!-- sidebar -->
        <div class="col-sm-3">
            @include('partials.sidebar')
        </div>

    </div>
@endsection

@section('js')
    <script src="/admin/lightbox2/dist/js/lightbox.js"></script>
@endsection