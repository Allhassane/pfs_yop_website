<div class="row foundator">
    <div class="col-sm-12">
        <div class="title">
            membres fondateur
        </div>
        <div class="content">
            <div class="row">
                @foreach($foundators as $foundator)
                <div class="col-sm-6">
                    <img src="/storage/{{ $foundator->logo }}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>