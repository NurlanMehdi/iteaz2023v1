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
                                        <a href="{{route('trainings')}}" class="button button--primary-outline button--reverse button--link ite-chevron-left">
                                            {{__("language.trainings")}}
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
        <!-- BANNER START -->
        <div class="sections section-banner sections--bgImage sections--bgBlue" style="background-image: url('../../public/assets/images/trainingItemImage.png')">
            <div class="container-lg section-news--container">
                <div class="sections--block">
                    <div class="row gutter-x-24px gutter-y-24px">
                        <div class="col-lg-7">
                            <div class="section-head">
                                <h3 class="section-head--header">
                                    {{$data->name ?? ''}}
                                </h3>
                                <div>
                                    <a href="{{route('trainings',$data->category)}}" class="button button--extraSmall button--rounded button--white-outline ">
                                        {{$data->category_name ?? ''}}
                                    </a>
                                </div>
                                <p class="section-head--description pt-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada
                                </p>
                            </div>
                        </div>
                        @php
                        $endirim = 100*$data->price;
$endirim = $endirim/$data->old_price;
$endirim = 100-$endirim;

                        @endphp
                        <div class="col-lg-auto ms-lg-auto my-lg-auto">
                            <div class="widgets widget-price widget-price--big widget-price--dark widget-price--rounded" data-old-price="  {{$data->price}}" data-sale-off="   {{\Illuminate\Support\Str::limit(($endirim ?? ''), 2, $end='')}}%">
                                {{$data->old_price}} AZN
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BANNER END -->


        <!-- TRAINING INFO START -->
        <div class="sections sections--bgSilver sections--extraSmall section-trainingInfo">
            <div class="container-lg section-trainingInfo--container">
                <div class="section-trainingInfo-content">
                    <div class="section-trainingInfo-content-item ite-duration">
                        <div>
                            <h6 class="section-trainingInfo-content-item--header">
                                Duration
                            </h6>
                            <p class="section-trainingInfo-content-item--description">
                                {{$data->duration ?? ''}}
                            </p>
                        </div>
                    </div>
                    <div class="section-trainingInfo-content-item ite-calendar">
                        <div>
                            <h6 class="section-trainingInfo-content-item--header">
                                Schedule
                            </h6>
                            <p class="section-trainingInfo-content-item--description">
                                {{$data->schedule ?? ''}}
                            </p>
                        </div>
                    </div>
                    <div class="section-trainingInfo-content-item ite-web">
                        <div>
                            <h6 class="section-trainingInfo-content-item--header">
                                Language
                            </h6>
                            <p class="section-trainingInfo-content-item--description">
                                {{$data->course_lang ?? ''}}
                            </p>
                        </div>
                    </div>
                    <div class="section-trainingInfo-content-item ite-location">
                        <div>
                            <h6 class="section-trainingInfo-content-item--header">
                                Place
                            </h6>
                            <p class="section-trainingInfo-content-item--description">
                                ITE Ofis
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-trainingInfo-footer">
                    <a href="#" class="button button--big button--centered button--dark-outline" data-basket="false" data-item-id="1" data-button-fake-name="true" data-button-add-name="ADD TO BASKET" data-button-remove-name="REMOVE TO BASKET"></a>
                    <a href="#" class="button button--big button--centered button--dark">BUY NOW</a>
                </div>
            </div>
        </div>
        <!-- TRAINING INFO END -->


        <!-- START -->
        <div class="sections sections--bgWhite">
            <div class="container-lg">
                <div class="row gutter-x-24px gutter-y-24px">
                    <div class="col-lg-8 mx-auto">
                        <div class="sections--block">
                            <div class="section-content">
                                {!! $data->info ?? ''!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->


        <!-- START -->
        <div class="sections sections--bgWhite pt-0">
            <div class="container-lg">
                <div class="row gutter-x-24px gutter-y-24px">
                    <div class="col-lg-8 mx-auto">
                        <div class="sections--block">
                            <div class="section-head">
                                <h4 class="section-head--header">
                                    Lesson structure
                                </h4>
                            </div>
                            <div class="section-content">
                                <div class="blocks block-accordion">
                                    <div class="block-accordion-item">
                                        <div class="block-accordion-item-head">
                                            <h5 class="block-accordion-item-head--header">
                                                Program name
                                            </h5>
                                        </div>
                                        <div class="block-accordion-item-content">
                                            <div class="block-accordion-item-content--description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-accordion-item" data-type='free'>
                                        <div class="block-accordion-item-head">
                                            <h5 class="block-accordion-item-head--header">
                                                Program name
                                            </h5>
                                        </div>
                                        <div class="block-accordion-item-content">
                                            <div class="block-accordion-item-content--description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-accordion-item">
                                        <div class="block-accordion-item-head">
                                            <h5 class="block-accordion-item-head--header">
                                                Program name
                                            </h5>
                                        </div>
                                        <div class="block-accordion-item-content">
                                            <div class="block-accordion-item-content--description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-accordion-item">
                                        <div class="block-accordion-item-head">
                                            <h5 class="block-accordion-item-head--header">
                                                Program name
                                            </h5>
                                        </div>
                                        <div class="block-accordion-item-content">
                                            <div class="block-accordion-item-content--description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-accordion-item">
                                        <div class="block-accordion-item-head">
                                            <h5 class="block-accordion-item-head--header">
                                                Program name
                                            </h5>
                                        </div>
                                        <div class="block-accordion-item-content">
                                            <div class="block-accordion-item-content--description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-accordion-item">
                                        <div class="block-accordion-item-head">
                                            <h5 class="block-accordion-item-head--header">
                                                Program name
                                            </h5>
                                        </div>
                                        <div class="block-accordion-item-content">
                                            <div class="block-accordion-item-content--description">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id fringilla felis. Duis placerat sapien neque, eu aliquet turpis feugiat et. Fusce vehicula malesuada erat, eu dapibus tellus. Vivamus facilisis mattis velit, sit amet fermentum lacus viverra non. Aenean dapibus lacus lacinia nisi imperdiet, ac sollicitudin tortor placerat. Aenean mattis mollis orci, non hendrerit ipsum. In malesuada diam sit amet ex iaculis, tincidunt placerat eros laoreet. Suspendisse vitae nulla erat. Duis eleifend fringilla fermentum. Cras quam diam, lobortis sed neque vel, suscipit scelerisque felis.
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
        <!-- END -->


        <!-- START -->
        <div class="sections sections--bgWhite pt-0">
            <div class="container-lg">
                <div class="row gutter-x-24px gutter-y-24px">
                    <div class="col-lg-8 mx-auto">
                        <div class="sections--block">
                            <div class="section-head">
                                <h4 class="section-head--header">
                                    Instructors
                                </h4>
                            </div>
                            <div class="section-content">
                                <div class="row gutter-y-24px gutter-x-24px">
                                    <div class="col-lg-4 col-6">
                                        <div class="block block-person block-person--rounded block-person--centered block-person--reverse">
                                            <div class="block-person-image">
                                                <div class="box pt-100">
                                                    <div class="box-resize">
                                                        <img src="{{$employee->img ?? ''}}" class="block-person-image--img"
                                                             alt="{{$employee->name ?? ''}} {{$employee->surname ?? ''}}" />
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->


        <!-- START -->
        <div class="sections sections--bgWhite pt-0">
            <div class="container-lg">
                <div class="row gutter-x-24px gutter-y-24px">
                    <div class="col-lg-8 mx-auto">
                        <div class="sections--block">
                            <div class="section-head">
                                <h4 class="section-head--header">
                                    Certification of completion
                                </h4>
                                <p class="section-head--description">
                                    {!! $data->cert_info ?? '' !!}
                                </p>
                            </div>
                            <div class="section-content">
                                <div class="row gutter-x-24px gutter-y-24px">
                                    <div class="col-lg-4">
                                        <img src="{{$data->cert_img}}" style="width: 100%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->


        <!-- TRAINING INFO START -->
        <div class="sections sections--bgSilver sections--extraSmall section-trainingInfo section-trainingInfo--sticky d-block d-lg-none">
            <div class="container-lg section-trainingInfo--container">
                <div class="section-trainingInfo-footer">
                    <a href="#" class="button button--big button--full button--centered button--dark-outline">ADD TO BASKET</a>
                    <a href="#" class="button button--big button--full button--centered button--dark">BUY NOW</a>
                </div>
            </div>
        </div>
        <!-- TRAINING INFO END -->


        <!-- CONTACT END -->
        @include('user.contactBanner')
        <!-- CONTACT START -->

    @endif

@endsection
