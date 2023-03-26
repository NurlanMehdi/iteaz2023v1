@extends('user.master')
@section('content')
    <!-- BANNER START -->
    <div class="sections section-banner sections--bgImage sections--bgBlue" style="background-image: url('../../public/assets/images/career.png')">
        <div class="container-lg section-news--container">
            <div class="sections--block">
                <div class="row gutter-x-24px gutter-y-24px">
                    <div class="col-lg-7">
                        <div class="section-head">
                            <h3 class="section-head--header">
                                {{__('language.career')}}
                            </h3>
                            <p class="section-head--description pt-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER END -->


    <!-- START -->
    <div class="sections sections--bgWhite sections--centered section-career">
        <div class="container-lg">
            <div class="row gutter-x-24px gutter-y-24px">
                <div class="col-lg-8 mx-auto">
                    <div class="sections--block">
                        <div class="section-head">
                            <h3 class="section-head--header">
                                {{__('language.allVacancies')}}
                            </h3>
                            <p class="section-head--description">
                                {{__('language.exploreIte')}}
                            </p>
                        </div>
                        <div class="section-content">
                            @foreach($data as $career)
                                <div class="blocks block-vacancy">
                                    <div class="block-vacancy-content">
                                        <h4 class="block-vacancy-content--header">
                                            {{$career->name ?? ''}}
                                        </h4>

                                        <p class="block-vacancy-content--description">
                                            {{config('app')['work-hours'][app()->getLocale()][$career->work_hours] ?? ''}}
                                        </p>
                                    </div>
                                    <div class="block-vacancy-footer">
                                        <a href="{{route('careerInner',[$career->item_id])}}" class="button button--big button--dark">
                                            Apply
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-career-banner">
            <!--<img src="assets/images/careerBannerImage.png" class="section-career-banner&#45;&#45;img" alt="career banner image" />-->
            <div class="section-career-banner--left">
                <div class="section-career-banner-item">
                    <!--                <div class="box pt-150">-->
                    <!--                    <div class="box-resize">-->
                    <img src="{{asset('assets/images/bannerimagecareer.png')}}" class="section-career-banner-item--img" alt="Career banner image" />
                    <!--                    </div>-->
                    <!--                </div>-->
                </div>
            </div>
            <div class="section-career-banner--center">
                <div class="section-career-banner-item">
                    <!--                <div class="box pt-71">-->
                    <!--                    <div class="box-resize">-->
                    <img src="{{asset('assets/images/bannerimagecareer.png')}}" class="section-career-banner-item--img" alt="Career banner image" />
                    <!--                    </div>-->
                    <!--                </div>-->
                </div>
                <div class="section-career-banner-item">
                    <!--                <div class="box pt-100">-->
                    <!--                    <div class="box-resize">-->
                    <img src="{{asset('assets/images/bannerimagecareer.png')}}" class="section-career-banner-item--img" alt="Career banner image" />
                    <!--                    </div>-->
                    <!--                </div>-->
                </div>
                <div class="section-career-banner-item">
                    <!--                <div class="box pt-100">-->
                    <!--                    <div class="box-resize">-->
                    <img src="{{asset('assets/images/bannerimagecareer.png')}}" class="section-career-banner-item--img" alt="Career banner image" />
                    <!--                    </div>-->
                    <!--                </div>-->
                </div>
                <div class="section-career-banner-item">
                    <!--                <div class="box pt-71">-->
                    <!--                    <div class="box-resize">-->
                    <img src="{{asset('assets/images/bannerimagecareer.png')}}" class="section-career-banner-item--img" alt="Career banner image" />
                    <!--                    </div>-->
                    <!--                </div>-->
                </div>
            </div>
            <div class="section-career-banner--right">
                <div class="section-career-banner-item">
                    <!--                <div class="box pt-150">-->
                    <!--                    <div class="box-resize">-->
                    <img src="{{asset('assets/images/bannerimagecareer.png')}}" class="section-career-banner-item--img" alt="Career banner image" />
                    <!--                    </div>-->
                    <!--                </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- END -->



    <!-- BANNER START -->
    <div class="sections sections--centered sections--bgBlue sections--big">
        <div class="container-lg">
            <div class="row gutter-x-24px gutter-y-24px">
                <div class="col-lg-6 mx-auto">
                    <div class="sections--block">
                        <div class="section-head">
                            <h3 class="section-head--header">
                                Haven't found a job that fits you?
                            </h3>
                            <p class="section-head--description">
                                We will be happy to receive your CV anyways. Leave your C and we will contact you once the position that fits you will open.
                            </p>
                        </div>
                        <div class="section-content">
                            <label class="button button--primary button--big cursor-pointer">
                                Leave your CV
                                <input type="file" class="visually-hidden invisible" name="cv" id="cv" />
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER END -->
@endsection
