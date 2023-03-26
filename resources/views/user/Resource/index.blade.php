@extends('user.master')
@section('content')
    <div class="sections sections--bgSilver section-resource">
        <div class="container-lg section-training--container">
            <div class="sections--block">
                <div class="row gutter-x-24px gutter-y-24px">
                    <div class="col-lg-6">
                        <div class="section-head">
                            <h3 class="section-head--header">
                                Find recources you need
                            </h3>
                            <p class="section-head--description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit egestas diam eget consequat. Praesent rhoncus, justo luctus iaculis
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row align-items-end h-100">
                            <div class="col-lg-4 ms-auto pt-lg-0 pt-4">
                                <div class="form-group">
                                    <select class="select select--big">
                                        <option selected disabled hidden value="">Knowledge Area</option>
                                        @foreach(config('app')['category-resource'][app()->getLocale()] as $key => $category)
                                            <option value="{{$key}}">{{$category ?? ''}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
{{--                            <div class="col-lg-4">--}}
{{--                                <div class="form-group">--}}
{{--                                    <select class="select select--big">--}}
{{--                                        <option selected disabled hidden value="">Content Type</option>--}}
{{--                                        <option value="1">Option 1</option>--}}
{{--                                        <option value="2">Option 2</option>--}}
{{--                                        <option value="3">Option 3</option>--}}
{{--                                        <option value="4">Option 4</option>--}}
{{--                                        <option value="5">Option 5</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="section-resource-items">
                        <div class="row gutter-y-24px gutter-y-24px">
                            @foreach($data as $resource)
                                <div class="col-lg-4">
                                    <div class="section-resource-item">
                                        <div class="blocks block-resource--bgWhite block-resource">
                                            <div class="block-resource-image">
                                                <div class="box pt-56 block-resource--category block-resource--category--bottomRight"
                                                     >
                                                    <div class="box-resize">
                                                        <img src="{{$resource->img ?? ''}}"
                                                             class="block-resource-image--img" alt="Python for STEAM" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-resource-body">
                                                <div class="block-resource-operations">
                                                    <a href=""
                                                       class="button button--dark-outline button--rounded button--extraSmall">
                                                        {{config('app')['category-resource'][app()->getLocale()][$resource->category] ?? ''}}

                                                    </a>
                                                </div>
                                                <div class="block-resource-content">
                                                    <a href="{{route('resourceInner',[$resource->item_id])}}"
                                                       class="block-training-content--link button button--link button--big">
                                                        {{$resource->name ?? ''}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

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
@endsection
@section('js')
    <script>
        $('.select--big').on('change', function () {
            var id = $(this).val(); // get selected value

            if (id) {
                var url = '{{route('resource',[":id"])}}';
                url = url.replace(':id', id);
                window.location = url;
            }
            return false;
        });
    </script>
@endsection
