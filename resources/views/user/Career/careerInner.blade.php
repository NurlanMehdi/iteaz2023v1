@extends('user.master')
@section('content')
    @if($data == null)
        <div class="sections section-innerPage">

            <div class="container-lg section-innerPage--container">
                <div class="row gutter-x-24px gutter-y-24px">

                    <div class="col-lg-8">
                        <div class="row sections--bgWhite">
                            <div class="col-lg-10 mx-auto">
                                <div class="section-innerPage-content">
                                    <div class="section-innerPage-content-operation">
                                        <a href="{{route('career')}}" class="button button--primary-outline button--reverse button--link ite-chevron-left">
                                            {{__("language.career")}}
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
        <div class="sections sections--bgWhite">
            <div class="container-lg">
                <div class="row gutter-x-24px gutter-y-24px">
                    <div class="col-md-7">
                        {!! $data->info ?? '' !!}
                    </div>
                    <div class="col-lg-5">
                        <div class="blocks block-career">
                            <div class="block-career-head">
                                <h4 class="block-career-head--header">
                                    Apply for this role
                                </h4>
                            </div>
                            <div class="block-career-content">
                                <div class="form-group">
                                    <label class="label visually-hidden" for="full_name">Full Name*</label>
                                    <input class="input input--big" type="text" name="full_name" id="full_name" placeholder="Full Name*" required />
                                </div>
                                <div class="form-group">
                                    <label class="label visually-hidden" for="full_name">Email Address*</label>
                                    <input class="input input--big" type="email" name="email" id="email" placeholder="Email Address*" required />
                                </div>
                                <div class="form-group">
                                    <label class="label visually-hidden" for="number">Telephone Number*</label>
                                    <input class="input input--big" type="tel" name="number" id="number" placeholder="Telephone Number*" required />
                                </div>
                                <div class="button--group button--group-full button--group-nowrap">
                                    <label class="button button--centered button--white button--big">Attach your CV</label>
                                    <input class="input input--big visually-hidden" type="file" name="cv" id="cv" />
                                    <button type="submit" class="button button--centered button--big button--white-outline">
                                        SEND
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->
    @endif

@endsection
