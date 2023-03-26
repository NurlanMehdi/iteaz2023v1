@extends('user.master')
@section('content')
    <!-- NEWS START -->
    <div class="sections section-news sections--absoluteBg sections--absoluteBgBlue">
        <div class="container-lg section-news--container">
            <div class="sections--block">
                <div class="section-head">
                    <div class="assistants assistant-tabs assistant-tabs--white assistant-tabs--big">
                        <div class="assistant-tabs-menu">

                            <a style="text-decoration: none;" href="{{route('news',[0])}}" class="assistant-tabs-menu--item {{((app('request')->path() ?? 0) == 'news/0') ? 'active' : ''}}" data-tabs-control="news">
                                {{__('language.news')}}

                            </a>
                            <a style="text-decoration: none;" href="{{route('news',[1])}}" class="assistant-tabs-menu--item {{((app('request')->path() ?? 0) == 'news/1') ? 'active' : ''}}" data-tabs-control="events">
                                {{__('language.events')}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="assistants assistant-tabs">
                        <div class="assistant-tabs-item active" data-tabs-control="news">
                            <div class="section-resource-items">
                                <div class="row gutter-y-24px gutter-y-24px">
                                    @foreach($data as $key => $news)
                                        <div class="{{($key == 0) ? 'col-lg-12' : 'col-lg-4'}}">
                                            <div class="blocks block-news--bgSilver block-news {{($key == 0) ? 'block-news--big' : ''}}">
                                                <div class="block-news-image">
                                                    <div class="box pt-56 block-news--category block-news--category--bottomLeft {{($key == 0) ? 'block-resource--category--lg-topRight' : 'block-news--category--bottomLeft'}}"
                                                    >
                                                        <div class="box-resize ">
                                                            <img src="{{$news->img ?? ''}}" class="block-news-image--img"
                                                                 alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-news-body">
                                                    <div class="block-news-content">
                                                        <p class="block-news-content--date">
                                                            {{\Illuminate\Support\Str::limit($news->created_at, 10, $end='')}}
                                                        </p>
                                                        <a href="{{route('newsInner',[$news->item_id])}}"
                                                           class="block-news-content--link button button--link button--big">
                                                            {{$news->name ?? ''}}
                                                        </a>
                                                        <p class="block-news--description">
                                                            {!! \Illuminate\Support\Str::limit(($news->info ?? ''), $limit = (($key == 0) ? '500' : '150'), $end = '...')  !!}

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($data->total() >= 10)
                        <div class="assistants assistant-pagination">
                            <div class="assistant-pagination-item">
                                <a href="{!! $data->previousPageUrl() !!}" class="assistant-pagination-item--link button button--big button--dark-outline button--onlyIcon ite-chevron-left">
                                    {{__('language.prev')}}
                                </a>
                            </div>
                            @for ($i = 1; $i <= $data->total(); $i++)
                                <div class="assistant-pagination-item">
                                    <a href="{!! $data->url($i) !!}" class="assistant-pagination-item--link button button--big button--link">
                                        {{$i ?? 0}}
                                    </a>
                                </div>
                            @endfor
                            <div class="assistant-pagination-item">
                                <a href="{!! $data->nextPageUrl() !!}" class="assistant-pagination-item--link button button--big button--dark-outline button--onlyIcon ite-chevron-right">
                                    {{__('language.next')}}
                                </a>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- NEWS END -->

@endsection
