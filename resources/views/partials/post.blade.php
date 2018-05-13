<div class="post-block">
    <div class="row">
        <div class="col-sm-12">
            <div class="title">
                Actualités
            </div>
            <div class="content">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-sm-6">
                        <div class="post-content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="/storage/{{ str_replace('.', '-thumb.', $post->picture) }}" alt="">
                                    <div class="caption-date">
                                        <i class="fa fa-clock-o"></i> {{ date('d/m/Y', strtotime($post->created_at)) }} | {{ $post->vues }} vues
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p class="post-subtitle">{{ substr($post->subtitle, 0, 120) }} ...</p>
                                    <p class="post-title"><a href="">{{ $post->title }}</a></p>
                                    {{--<p class="post-date"><i class="fa fa-clock-o"></i> Publié le {{ date('d/m/Y', strtotime($post->created_at)) }}</p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>