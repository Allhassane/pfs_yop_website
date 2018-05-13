<div class="row">
    <div class="col-sm-8">
        <div class="photo-block">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title">
                        Photothèque
                    </div>
                    <div class="content">
                        <div class="row">
                            @foreach($albums as $album)
                            <div class="col-sm-6">
                                <div class="photo-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <img src="/storage/{{ str_replace('.', '-thumb.', $album->picture) }}" alt="">

                                            <div class="photo-date-block">
                                                <p class="photo-title"><a href="">{{ $album->title }}</a></p>
                                                <p class="photo-date"><i class="fa fa-clock-o"></i> Publié le {{ date('d/m/Y', strtotime($album->created_at)) }}</p>
                                            </div>

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
    </div>
    <div class="col-sm-4">
        <div class="video-block">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title">
                        vidéothèque
                    </div>
                    <div class="content">
                        <video controls>
                            <source src="/storage/presentation.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>