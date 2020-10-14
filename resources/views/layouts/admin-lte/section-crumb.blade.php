<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $title }} <span class="brand-text font-weight-light h6">{{ $subtitle }}</span></h1>
            </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ asset('./corporativo') }}">Corporativo</a></li>
            @if(!Request::is('corporativo'))
            <li class="breadcrumb-item"><a href="#" title="{{$cat}}">{{$cat}}</a></li>
            <li class="breadcrumb-item"><a href="#" title="{{$subcat}}">{{$subcat}}</a></li>
            @endif
            <li class="breadcrumb-item active" title="{{$subtitle}}">{{$subtitle}}</a></li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
