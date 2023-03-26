@extends('user.master')
@section('content')


{{--    <div class="container-lg ">--}}
{{--        <div class="assistants assistant-tabs">--}}
{{--            <div class="assistant-tabs-menu">--}}
{{--                <div class="assistant-tabs-menu--item active" data-tabs-control="forTeachers">--}}
{{--                    For teachers--}}
{{--                </div>--}}
{{--                <div class="assistant-tabs-menu--item" data-tabs-control="forStudents">--}}
{{--                    For students--}}
{{--                </div>--}}
{{--                <div class="assistant-tabs-menu--item" data-tabs-control="forParents">--}}
{{--                    For parents--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <!-- START -->
    <div class="sections sections--bgBlue sections--centered">
        <div class="container-lg ">
            <div class="sections--block">
                <div class="section-head">
                    <h3 class="section-head--header">Select courses to your liking and fit</h3>
                    <p class="section-head--description"></p>
                </div>
                <div class="section-content">
                    <div class="assistants assistant-tabs">
                        <div class="assistant-tabs-item active" data-tabs-control="forTeachers">
                            <div class="assistants assistant-buttons assistant-buttons--scroll assistant-buttons--centered">
                                @foreach($course as $val)
                                    <a href="{{route('trainings',[$val->id])}}" class="button button--white-outline button--rounded button--extraSmall">
                                        {{$val->name}}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row gutter-x-24px gutter-y-24px">
                        <div class="col-lg-8 mx-auto">
                            <div class="assistants assistant-search">
                                <input class="input input--big" name="training_search" id="training_search" />
                                <button class="button button--primary button--big">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->


    <!-- TRAINING START -->
    <!-- RECOMMENDED TRAINING START -->
    <div class="sections sections--big section-training">
        <div class="container-lg section-training--container">
            <div class="sections--block">
                <div class="section-content">
                    <div class="assistants assistant-tabs">
                        <div class="assistant-tabs-item active" data-tabs-control="forTeachers">
                            <div class="section-training-items">
                                <div class="row gutter-x-24px gutter-y-24px">
                                    @foreach($data as $val)
                                        <div class="col-lg-3">
                                            <div class="section-training-item">
                                                <div class="blocks block-training block-training--status">
                                                    <div class="block-training-image">
                                                        <div class="box pt-56">
                                                            <div class="box-resize">
                                                                <img src="{{$val->cert_img ?? ''}}" class="block-training-image--img" alt="Python for STEAM" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="block-training-operations">
                                                        <a href="{{route('trainings',$val->category)}}" class="button button--dark-outline button--rounded button--extraSmall">
                                                            {{$val->category_name ?? ''}}
                                                        </a>
                                                        <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                            Add/Remove basket
                                                        </button>
                                                    </div>
                                                    <div class="block-training-content">
                                                        <p class="block-training-content--date">
                                                            {{\Illuminate\Support\Str::limit(($val->created_at ?? ''), 10, $end='')}}

                                                        </p>
                                                        <a href="{{route('traningInner',$val->item_id)}}" class="block-training-content--link button button--link button--big">
                                                            {{$val->name ?? ''}}                                                        </a>
                                                        <p class="block-training-content--price" data-old-price=" {{$val->old_price ?? ''}}">
                                                            {{$val->price ?? ''}} Azn
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="assistant-tabs-item" data-tabs-control="forStudents">
                            <div class="section-training-items">
                                <div class="row gutter-x-24px gutter-y-24px">
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="assistant-tabs-item" data-tabs-control="forParents">
                            <div class="section-training-items">
                                <div class="row gutter-x-24px gutter-y-24px">
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="section-training-item">
                                            <div class="blocks block-training block-training--status block-training--offline">
                                                <div class="block-training-image">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            <img src="../../public/assets/images/trainingItemImage.png" class="block-training-image--img" alt="Python for STEAM" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block-training-operations">
                                                    <a href="training.html" class="button button--dark-outline button--rounded button--extraSmall">
                                                        Information Technology 1tab
                                                    </a>
                                                    <button class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket" data-basket="false" data-item-id="1">
                                                        Add/Remove basket
                                                    </button>
                                                </div>
                                                <div class="block-training-content">
                                                    <p class="block-training-content--date">
                                                        04 NOVEMBER - 15 November
                                                    </p>
                                                    <a href="trainingInner.html" class="block-training-content--link button button--link button--big">
                                                        Python for STEAM
                                                    </a>
                                                    <p class="block-training-content--price" data-old-price="85">
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="assistants assistant-pagination">
                        <div class="assistant-pagination-item">
                            <a href="#" class="assistant-pagination-item--link button button--big button--dark-outline button--onlyIcon ite-chevron-left">
                                Prev item
                            </a>
                        </div>
                        <div class="assistant-pagination-item">
                            <a href="#" class="assistant-pagination-item--link button button--big button--link">
                                1
                            </a>
                        </div>
                        <div class="assistant-pagination-item">
                            <a href="#" class="assistant-pagination-item--link button button--big button--link">
                                2
                            </a>
                        </div>
                        <div class="assistant-pagination-item">
                            <a href="#" class="assistant-pagination-item--link button button--big button--link">
                                3
                            </a>
                        </div>
                        <div class="assistant-pagination-item">
                            <a href="#" class="assistant-pagination-item--link button button--big button--link">
                                4
                            </a>
                        </div>
                        ...
                        <div class="assistant-pagination-item">
                            <a href="#" class="assistant-pagination-item--link button button--big button--link">
                                10
                            </a>
                        </div>
                        <div class="assistant-pagination-item">
                            <a href="#" class="assistant-pagination-item--link button button--big button--dark-outline button--onlyIcon ite-chevron-right">
                                Next item
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RECOMMENDED TRAINING END -->
    <!-- TRAINING END -->


    <!-- CONTACT END -->
    @include('user.contactBanner')
    <!-- CONTACT START -->
@endsection
