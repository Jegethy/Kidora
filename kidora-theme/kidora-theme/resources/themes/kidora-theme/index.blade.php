@extends('theme::layouts.app')
@section('theme::title', __('seo.index'))
@section('theme::content')

    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 news-container">
        <div class="latest-news container-fluid">
            <div class="container">

                <div class="row">
                    @forelse($news as $newsData)

                        <div class="blog margin-bottom-30">
                            <a href="{{ route('news-slug', ['slug' => $newsData->slug]) }}"><h3>{{ $newsData->title }}</h3></a>
                            <div class="blog-post-tags">
                                <ul class="list-unstyled list-inline blog-info">
                                    <li><i class="fas fa-calendar-alt"></i> {{ __('news.posted', ['date' => $newsData->published_at->diffForHumans()]) }}</li>
                                </ul>
                            </div>
                            <div class="blog-content-image">
                                {!! $newsData->body !!}
                            </div>
                        </div>

                    @empty
                    @endforelse

                    @if($news->count() > 4)
                        <div class="col-sm-4">
                            <div class="main-btn-holder">
                                <a href="{{ route('news-archive') }}" class="hbtn hbtn-default">
                                    {{ __('index.show-all') }}
                                </a>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
