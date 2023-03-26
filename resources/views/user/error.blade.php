@extends('user.master')
@section('content')


    <!-- ERROR START -->
    <div class="sections sections--bgWhite sections--full sections--extraBig sections--centered section-error">
        <div class="container-lg section-error--container">
            <div class="sections--block">
                <div class="section-head">
                    <h3 class="section-head--header">404</h3>
                    <p class="section-head--description">Page not found</p>
                </div>
                <div class="section-content">
                    <a href="{{route('dashboard')}}" class="button button--primary button--big">
                        Go back to Homepage
                    </a>
                </div>
            </div>
        </div>
        <div class="assistants assistant-borders">
            <div class="assistant-borders--block assistant-borders--block-big assistant-borders--block-bigPadding">
                <div class="assistant-borders--item assistant-borders--item-bgSilver assistant-borders--item-opacity1 animation animation--left-to-right animation--delay-0 animation--duration-05"></div>
                <div class="assistant-borders--item assistant-borders--item-bgSilver assistant-borders--item-opacity1 animation animation--left-to-right animation--delay-02 animation--duration-05"></div>
                <div class="assistant-borders--item assistant-borders--item-bgSilver assistant-borders--item-opacity1 animation animation--left-to-right animation--delay-04 animation--duration-05"></div>
            </div>
            <div class="assistant-borders--block assistant-borders--block-big assistant-borders--block-bigPadding assistant-borders--block-right">
                <div class="assistant-borders--item assistant-borders--item-bgSilver assistant-borders--item-opacity1 animation animation--right-to-left animation--delay-04 animation--duration-05"></div>
                <div class="assistant-borders--item assistant-borders--item-bgSilver assistant-borders--item-opacity1 animation animation--right-to-left animation--delay-02 animation--duration-05"></div>
                <div class="assistant-borders--item assistant-borders--item-bgSilver assistant-borders--item-opacity1 animation animation--right-to-left animation--delay-0 animation--duration-05"></div>
            </div>
        </div>
    </div>
    <!-- ERROR END -->

@endsection




