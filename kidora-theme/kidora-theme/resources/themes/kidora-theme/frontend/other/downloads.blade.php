@extends('theme::layouts.app', ['alias' => 'Downloads'])
@section('theme::title', __('seo.downloads'))
@section('theme::content')
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1>{{ __('downloads.title') }}</h1>
                    <div class="row">
                        @forelse($downloads as $download)
                            <div class="col-md-3">
                                <div class="card download-card">
                                    @if(isset($download->image))
                                        <img src="{{ route('images.image', ['image'=> ($download->image) ? $download->image->filename : null]) }}"
                                             class="card-img-top"
                                             loading="lazy"
                                             alt="{{ $download->name }}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $download->name }}
                                        </h5>
                                        <p class="card-text">
                                            {{ $download->file_size }}
                                        </p>
                                        <a href="{{ $download->link }}" target="_blank"
                                           class="btn btn-sm btn-primary">
                                            {{ __('downloads.download-button') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="alert alert-warning" role="alert">
                                    {{ __('downloads.no-downloads') }}
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
