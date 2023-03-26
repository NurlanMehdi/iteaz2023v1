@extends('user.master')
@section('content')
    <!-- NEWS INNER START -->
    @if($data == null)
        <div class="sections section-innerPage">

            <div class="container-lg section-innerPage--container">
                <div class="row gutter-x-24px gutter-y-24px">

                    <div class="col-lg-8">
                        <div class="row sections--bgWhite">
                            <div class="col-lg-10 mx-auto">
                                <div class="section-innerPage-content">
                                    <div class="section-innerPage-content-operation">
                                        <a href="{{route('resource')}}" class="button button--primary-outline button--reverse button--link ite-chevron-left">
                                            {{__("language.resource")}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="sections section-innerPage">
            <div class="section-innerPage-image">
                <img src="{{asset('assets/images/newsInner.png')}}" class="section-innerPage-image--img" />
            </div>
            <div class="container-lg section-innerPage--container">
                <div class="row gutter-x-24px gutter-y-24px">
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="section-innerPage-shareMenu">
                            <div class="section-innerPage-shareMenu-item">
                                <a href="{{json_decode($socialMedia->social)->facebook ?? ''}}" target="_blank" class="button button--link button--big button--silver-outline ite-fb button--onlyIcon section-innerPage-shareMenu-item--link">
                                    Facebook share
                                </a>
                            </div>
                            <div class="section-innerPage-shareMenu-item">
                                <a href="{{json_decode($socialMedia->social)->twitter ?? ''}}" target="_blank" class="button button--link button--big button--silver-outline ite-telegram button--onlyIcon section-innerPage-shareMenu-item--link">
                                    Twitter share
                                </a>
                            </div>
                            <div class="section-innerPage-shareMenu-item">
                                <a href="{{json_decode($socialMedia->social)->linkedn ?? ''}}" target="_blank" class="button button--link button--big button--silver-outline ite-linkedn button--onlyIcon section-innerPage-shareMenu-item--link">
                                    Linkedn share
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row sections--bgWhite">
                            <div class="col-lg-10 mx-auto">
                                <div class="section-innerPage-content">
                                    <div class="section-innerPage-content-operation">
                                        <a href="{{route('news')}}" class="button button--primary-outline button--reverse button--link ite-chevron-left">
                                            {{__("language.news")}}
                                        </a>
                                    </div>
                                    <h3 class="section-innerPage-content--header">
                                        {{$data->name ?? ''}}
                                    </h3>
                                    <div class="section-innerPage-content-info">
                                        <div class="section-innerPage-content-info-item">
                                            {{\Illuminate\Support\Str::limit(($new->created_at ?? ''), 10, $end='')}}
                                        </div>
                                        {{--                                    <div class="section-innerPage-content-info-item">--}}
                                        {{--                                        18:00-19:00--}}
                                        {{--                                    </div>--}}
                                        {{--                                    <div class="section-innerPage-content-info-item">--}}
                                        {{--                                        Online--}}
                                        {{--                                    </div>--}}
                                    </div>
                                    <div class="section-innerPage-content--description">
                                        {!! $data->info ?? '' !!}
                                        <p>&nbsp;</p>
                                        <p><span style="font-size:18px;"><img alt="" src="{{$data->img ?? ''}}" /></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- NEWS INNER END -->

        <!-- NEXT POSTS START -->
        <div class="sections sections--bgSilver">
            <div class="container-lg ">
                <div class="row gutter-x-24px gutter-y-24px">
                    <div class="col-lg-8 mx-auto">
                        <div class="row gutter-x-24px gutter-y-24px">
                            <div class="col-lg-10 mx-auto">
                                <div class="sections--block">
                                    <div class="section-head">
                                        <h4 class="section-head--header">{{__('language.nextPosts')}}</h4>
                                    </div>
                                    <div class="section-content">
                                        <div class="row gutter-x-24px gutter-y-24px">
                                            @foreach($lastresource as $new)
                                                <div class="col-lg-6">
                                                    <div class="blocks block-news--bgWhite block-news">
                                                        <div class="block-news-image">
                                                            <div class="box pt-56 block-news--category block-news--category--bottomLeft"
                                                                 data-category="e-book">
                                                                <div class="box-resize ">
                                                                    <img src="{{$new->img ?? ''}}" class="block-news-image--img"
                                                                         alt="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block-news-body">
                                                            <div class="block-news-content">
                                                                <p class="block-news-content--date">
                                                                    {{\Illuminate\Support\Str::limit(($new->created_at ?? ''), 10, $end='') }}
                                                                </p>
                                                                <a href="{{route('newsInner',[$new->item_id])}}"
                                                                   class="block-news-content--link button button--link button--big">
                                                                    {{$new->name ?? ''}}
                                                                </a>
                                                                <p class="block-news--description">
                                                                    {!! \Illuminate\Support\Str::limit(($new->info ?? ''), $limit = '150', $end = '...')  !!}

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- NEXT POSTS END -->
    @endif

@endsection
