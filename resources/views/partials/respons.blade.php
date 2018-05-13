<div class="row">
    <div class="col-sm-12">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                <i class="fa fa-check-circle-o"></i> {{ session('success') }}
            </div>

        @elseif(session('warning'))
            <div class="alert alert-warning" role="alert">
                <i class="fa fa-exclamation-triangle"></i> {{ session('warning') }}
            </div>
        @elseif(session('danger'))
            <div class="alert alert-danger" role="alert">
                <i class="fa fa-close"></i> {{ session('danger') }}
            </div>
        @elseif(session('info'))
            <div class="alert alert-info" role="alert">
                <i class="fa fa-info"></i> {{ session('info') }}
            </div>
        @endif

    </div>
</div>
