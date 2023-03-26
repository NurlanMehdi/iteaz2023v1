@extends('user.master')
@section('content')
    <!-- BANNER START -->
    <div class="sections section-banner section-banner--lg-image sections--lg-left sections--centered sections--extraBig">
        <div class="container-lg section-banner--container">
            <div class="row gutter-x-24px gutter-y-24px">
                <div class="col-lg-5">
                    <div class="sections--block">
                        <div class="section-head">
                            <h2 class="section-head--header">
                                {{__('language.aboutUs')}}
                            </h2>
                            <p class="section-head--description">
                                {{__('language.aboutUsDashboardContent1')}}
                            </p>
                        </div>
{{--                        <div class="section-content">--}}
{{--                            <a href="#" class="button button--primary button--extraBig">--}}
{{--                                Learn more--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-5 ms-auto">
                    <div class="section-banner-image section-banner-image--centered animation animation--right-to-left animation--delay-04 animation--duration-04">
                        <img src="{{asset('assets/images/about_us.png')}}" class="section-banner-image--img" alt="Banner Image" />
                    </div>
                </div>
            </div>
        </div>
        <div class="assistants assistant-borders">
            <div class="assistant-borders--block assistant-borders--block-extraBig assistant-borders--block-bigPadding assistant-borders--block-right">
                <div class="assistant-borders--item assistant-borders--item-opacity1 assistant-borders--item-bgSilver animation animation--right-to-left animation--delay-04 animation--duration-05"></div>
                <div class="assistant-borders--item assistant-borders--item-opacity1 assistant-borders--item-bgSilver animation animation--right-to-left animation--delay-02 animation--duration-05"></div>
                <div class="assistant-borders--item assistant-borders--item-opacity1 assistant-borders--item-bgSilver animation animation--right-to-left animation--delay-0 animation--duration-05"></div>
            </div>
        </div>
    </div>
    <!-- BANNER END -->


    <div class="sections sections--big sections--centered sections--bgSilver">
        <div class="container-lg">
            <div class="row gutter-x-24px gutter-y-24px">
                <div class="col-lg-8 mx-auto">
                    <div class="sections--block">
                        <div class="section-head">
                            <h3 class="section-head--header">
                                {{__('language.aboutIteHeader')}}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- BANNER START -->
    <div class="sections section-banner section-banner--lg-image section-banner--image sections--lg-left sections--centered sections--big">
        <div class="container-lg section-banner--container">
            <div class="row gutter-x-24px gutter-y-24px">
                <div class="col-lg-5">
                    <div class="section-banner-image section-banner-image--centered">
                        <img src="{{asset('assets/images/about_us1.png')}}" class="section-banner-image--img" alt="Banner Image" />
                    </div>
                </div>
                <div class="col-lg-5 ms-auto">
                    <div class="sections--block">
                        <div class="section-head">
                            <h2 class="section-head--header">
                                {{__('language.aboutIte')}}
                            </h2>
                            <p class="section-head--description">
                                {{__('language.aboutUsDashboardContent2')}}
                            </p>
                        </div>
{{--                        <div class="section-content">--}}
{{--                            <a href="#" class="button button--dark-outline button--big ite-chevron-right">--}}
{{--                                Start browsing--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER END -->


    <!-- TEAM START -->
    <div class="sections sections--big sections--bgSilver section-team">
        <div class="container-lg section-team--container">
            <div class="blocks block-slider block-slider--withOutDots" data-slick-id="team">
                <div class="row gutter-x-24px gutter-y-24px">
                    <div class="col-lg-3">
                        <div class="sections--block">
                            <div class="section-head">
                                <h3 class="section-head--header">
                                    {{__('language.meetOurTeam')}}
                                </h3>
                            </div>
                            <div class="section-content">
                                <div class="assistants assistant-pagingInfo">
                                    <span class="button button--dark-outline button--big button--onlyIcon ite-chevron-left prev">
                                        Prev item
                                    </span>
                                    <span class="button button--dark-outline button--big button--onlyIcon ite-chevron-right next">
                                        Next item
                                    </span>
                                    <span class="assistant-pagingInfo--description"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="section-team-items block-slider-items" data-slick="team">
                            @foreach($data as $employee)
                                <div class="section-team-item">
                                    <div class="block block-person">
                                        <div class="block-person-image">
                                            <div class="box pt-133">
                                                <div class="box-resize">
                                                    <img src="{{$employee->img ?? ''}}" class="block-person-image--img"
                                                         alt="Name Surname" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-person-body">
                                            <h4 class="block-person-body--name">{{$employee->name ?? ''}} {{$employee->surname ?? ''}}</h4>
                                            <p class="block-person-body--description">
                                                {{$employee->position ?? ''}}
                                            </p>
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
    <!-- TEAM END -->


    <!-- START -->
    <div class="sections sections--big sections--bgImage section-education" style="background-image: url('../../public/assets/images/career-cover.png')">
        <div class="container-lg">
            <div class="row gutter-x-24px gutter-y-24px">
                <div class="col-lg-8 ms-auto">
                    <div class="section-education-content">
                        <div class="sections--block">
                            <div class="section-head">
                                <h3 class="section-head--header">
                                    Educating since 2012
                                </h3>
                                <p class="section-head--description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END -->


    <!-- WHY START -->
    <div class="sections sections--big sections--bgSilver section-why">
        <div class="container-lg section-team--container">
            <div class="row gutter-x-24px gutter-y-24px">
                <div class="col-lg-3">
                    <div class="sections--block">
                        <div class="section-head">
                            <h3 class="section-head--header">
                                Why ITE?
                            </h3>
                            <p class="section-head--description">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="sections--block">
                        <div class="section-content">
                            <div class="row gutter-x-24px gutter-y-24px">
                                <div class="col-lg-4">
                                    <div class="section-why-item">
                                        <div class="block block-why">
                                            <h4 class="block-why--head">Designed for you</h4>
                                            <p class="block-why--description">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                                accusam et justo duo dolores et ea rebum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="section-why-item">
                                        <div class="block block-why">
                                            <h4 class="block-why--head">Certification</h4>
                                            <p class="block-why--description">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                                accusam et justo duo dolores et ea rebum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="section-why-item">
                                        <div class="block block-why">
                                            <h4 class="block-why--head">Fast and easy</h4>
                                            <p class="block-why--description">
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                                accusam et justo duo dolores et ea rebum.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WHY END -->


    @include('user.browsingBanner')
    @include('user.reviewsBanner')


    <!-- PARTNERS START -->
    <div class="sections sections--bgWhite sections--big section-partners">
        <div class="container-lg section-partners--container">
            <div class="row gutter-y-48px gutter-x-24px">
                <div class="col-lg-4">
                    <div class="sections--block">
                        <div class="section-head">
                            <h5 class="section-head--header">
                                Our Partners
                            </h5>
                            <p class="section-head--description">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab earum eos, incidunt libero nihil officiis tempore voluptatum. Atque aut error facilis itaque nihil, non nostrum porro, quas, repellat rerum tempora?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 ms-lg-auto my-lg-auto">
                    <div class="row gutter-x-24px gutter-y-48px">
                        <div class="col-lg-3 col-6">
                            <div class="section-partners-item">
                                <img src="{{asset('assets/images/aven.png')}}" class="section-partners-item--img" alt="Partner 7 name" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="section-partners-item">
                                <img src="{{asset('assets/images/ztos.png')}}" class="section-partners-item--img" alt="Partner 7 name" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="section-partners-item">
                                <img src="{{asset('assets/images/kanba.png')}}" class="section-partners-item--img" alt="Partner 7 name" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="section-partners-item">
                                <img src="{{asset('assets/images/utosia-2.png')}}" class="section-partners-item--img" alt="Partner 7 name" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="section-partners-item">
                                <img src="{{asset('assets/images/velocity-9.png')}}" class="section-partners-item--img" alt="Partner 7 name" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="section-partners-item">
                                <img src="{{asset('assets/images/solaytic.png')}}" class="section-partners-item--img" alt="Partner 7 name" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="section-partners-item">
                                <img src="{{asset('assets/images/goldline.png')}}" class="section-partners-item--img" alt="Partner 7 name" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="section-partners-item">
                                <img src="{{asset('assets/images/liva.png')}}" class="section-partners-item--img" alt="Partner 7 name" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PARTNERS START -->
    @include('user.contactBanner')
@endsection
