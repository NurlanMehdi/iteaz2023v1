@extends('user.master')
@section('content')
    <div class="sections section-contact sections--gap-0 sections--bgSilver sections--absoluteBg sections--absoluteBgPrimary">
        <div class="container-lg section-contact--container">
            <div class="row gutter-x-24px gutter-y-24px">
                <div class="col-lg-10 mx-auto">
                    <div class="sections--block">
                        <div class="section-head">
                            <h3 class="section-head--header">
                                {{__('language.contactUs')}}
                            </h3>
                            <div class="assistants assistant-tabs assistant-tabs--white pt-4">
                                <div class="assistant-tabs-menu mb-0">
                                    <div class="assistant-tabs-menu--item  active" data-tabs-control="main">
                                        {{__('language.mainOffice')}}
                                    </div>
                                    <div class="assistant-tabs-menu--item" data-tabs-control="training">
                                        {{__('language.trainingCenter')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <div class="assistants assistant-tabs">
                                @foreach($contactData as $data)
                                    <div class="assistant-tabs-item {{(($data->page ?? '') == 0) ? 'active' : ''}}" data-tabs-control="{{(($data->page ?? '') == 0) ? 'main' : 'training'}}">
                                        <div class="section-contact-content sections--bgWhite">
                                            <div class="row gutter-x-24px gutter-y-24px">
                                                <div class="col-lg-8 order-2 order-lg-1">
                                                    <div class="box pt-56">
                                                        <div class="box-resize">
                                                            @if(($data->page ?? '') == 0)
                                                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48616.72348608979!2d49.816695!3d40.396771!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x229a7709239745f0!2zVMmZaHNpbGTJmSDEsG5ub3ZhdGl2IFRleG5vbG9naXlhbGFyIMaPbGF2yZkgVMmZaHNpbCBNyZlya8mZemkgKEJhxZ8gb2Zpcyk!5e0!3m2!1sen!2sus!4v1674120387096!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                            @else
                                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48626.381989898124!2d49.83564540237534!3d40.383392963472865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307dd893ba330d%3A0x1c1a530cea7215d3!2zVMmZaHNpbGTJmSDEsG5ub3ZhdGl2IFRleG5vbG9naXlhbGFyIMaPbGF2yZkgVMmZaHNpbCBNyZlya8mZemkgKFTJmWxpbSBtyZlya8mZemkp!5e0!3m2!1sen!2s!4v1674122202893!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 order-1 order-lg-2">
                                                    <div class="section-contact-content-items">
                                                        <div class="section-contact-content-item">
                                                            <h6 class="section-contact-content-item--header">
                                                                {{__('language.email')}}:
                                                            </h6>
                                                            <p class="section-contact-content-item--description">
                                                                {{$data->email ?? ''}}
                                                            </p>
                                                        </div>
                                                        <div class="section-contact-content-item">
                                                            <h6 class="section-contact-content-item--header">
                                                                {{__('language.phone')}}:
                                                            </h6>
                                                            <p class="section-contact-content-item--description">
                                                                +{{$data->phone ?? ''}}
                                                            </p>
                                                        </div>
                                                        <div class="section-contact-content-item">
                                                            <h6 class="section-contact-content-item--header">
                                                                {{__('language.address')}}:
                                                            </h6>
                                                            <p class="section-contact-content-item--description">
                                                                {{$data->address ?? ''}}
                                                            </p>
                                                        </div>
                                                        <div class="section-contact-content-item">
                                                            <h6 class="section-contact-content-item--header">
                                                                {{__('language.workHours')}}:
                                                            </h6>
                                                            <p class="section-contact-content-item--description">
                                                                {{$data->workingHours ?? ''}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="section-contact-content sections--bgDark sections--lg-left sections--centered">
                                <div class="row gutter-x-24px gutter-y-24px">
                                    <div class="col-lg-4">
                                        <div class="sections--block">
                                            <div class="section-head">
                                                <h6 class="section-head--header">
                                                    {{__('language.messageUs')}}
                                                </h6>
                                                <p class="section-head--description">
                                                    Any questions, suggestions or propositions? Let us know!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="label visually-hidden">{{__('language.fullName')}}*</label>
                                                    <input type="text" class="input input--medium input--dark" id="full_name" name="full_name" placeholder="{{__('language.fullName')}}*" required />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="label visually-hidden">{{__('language.email')}}*</label>
                                                    <input type="email" class="input input--medium input--dark" id="email" name="email" placeholder="{{__('language.email')}}*" required />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="label visually-hidden">{{__('language.phone')}}*</label>
                                                    <input type="tel" class="input input--medium input--dark" id="number" name="number" placeholder="{{__('language.phone')}}*" required />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="label visually-hidden">{{__('language.helpQuestion')}}</label>
                                                    <input type="text" class="input input--medium input--dark" id="subject" name="subject" placeholder="{{__('language.helpQuestion')}}" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="label visually-hidden">{{__('language.yourMessage')}}</label>
                                                    <textarea type="text" class="input input--medium input--dark" id="message" name="message" placeholder="{{__('language.yourMessage')}}" required ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button type="button" class="button button--primary button--big button--full button--centered">
                                                        {{__('language.submit')}}
                                                    </button>
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
        </div>
    </div
@endsection
