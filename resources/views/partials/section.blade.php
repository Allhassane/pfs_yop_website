<div class="rubrique-block">
    <div class="title">
        <ul class="rubrique" role="tablist">
            <li role="presentation" class="active mission"><a href="#mission" aria-controls="mission" role="tab" data-toggle="tab">{{ $mission->title }}</a></li>
            <li role="organisation" class="organisation"><a href="#organisation" aria-controls="organisation" role="tab" data-toggle="tab">{{ $organisation->title }}</a></li>
            <li role="projet" class="projet"><a href="#projet" aria-controls="projet" role="tab" data-toggle="tab">{{ $projet->title }}</a></li>
        </ul>
    </div>

    <!-- Tab panes -->
    <div class="tab-content rubrique-content">
        <div role="tabpanel" class="tab-pane active" id="mission">
            <div class="title">{{ $mission->title }}</div>
            <div class="text-center"><img src="/img/td_bg3.png" style="width: 50%" alt=""></div>
            {!! $mission->content !!}
        </div>
        <div role="tabpanel" class="tab-pane" id="organisation">
            <div class="title">{{ $organisation->title }}</div>
            <div class="text-center"><img src="/img/td_bg3.png" style="width: 50%" alt=""></div>
            {!! $organisation->content !!}
        </div>
        <div role="tabpanel" class="tab-pane" id="projet">
            <div class="title">{{ $projet->title }}</div>
            <div class="text-center"><img src="/img/td_bg3.png" style="width: 50%" alt=""></div>
            {!! $projet->content !!}
        </div>
    </div>
</div>