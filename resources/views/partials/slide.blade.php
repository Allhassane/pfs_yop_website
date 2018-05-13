<!-- content bar -->
<div class="col-md-9 col-sm-8">
    <div class="row">
        <div class="col-sm-12">
            <div id="main-slide">
                <div class="main-slide-content">
                    @foreach($slides as $slide)
                    <div class="item-one" style="background: url(storage/{{ str_replace('.', '-slide.', $slide->picture) }}) no-repeat; background-size: cover;">
                        <div class="caption">
                            <a href="" class="title">
                                {{ substr($slide->resume, 0, 260) }} @if(strlen($slide->resume) > 260) ... @endif
                                <br>
                                <span class="date"><i class="fa fa-clock-o"></i> PUBLIÉ LE {{ date('d/m/Y', strtotime($slide->created_at)) }}</span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="main-slide-control">
                    <div class="control-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                    <div class="control-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>