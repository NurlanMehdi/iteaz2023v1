@extends('user.master')
@section('content')

    <div class="sections section-sitemap">
        <div class="container-lg section-sitemap--container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="sections--block">
                        <div class="section-head">
                            <h3 class="section-sitemap--header">Sitemap</h3>
                            <p class="section-sitemap--description"></p>
                        </div>
                        <div class="section-content section-sitemap--content">
                            <div class="section-sitemap-content--item">
                                <h4 class="section-sitemap-content-item--head">Pages</h4>
                                <ul class="section-sitemap-content-item--links">
                                    <li class="section-sitemap-content-item--link">
                                        <a href="{{route('trainings')}}" class="button button--link">Trainings</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="{{route('resource')}}" class="button button--link">Resources</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="{{route('news')}}" class="button button--link">News</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="{{route('career')}}" class="button button--link">Career</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="{{route('company')}}" class="button button--link">Company</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="{{route('contact')}}" class="button button--link">Contact</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="{{route('error')}}" class="button button--link">Error page</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="section-sitemap-content--item">
                                <h4 class="section-sitemap-content-item--head">Trainings</h4>
                                <ul class="section-sitemap-content-item--links">
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link"
                                        >Trainings inner</a
                                        >
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link"
                                        >Trainings inner</a
                                        >
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link"
                                        >Trainings inner</a
                                        >
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link"
                                        >Trainings inner</a
                                        >
                                    </li>
                                </ul>
                            </div>

                            <div class="section-sitemap-content--item">
                                <h4 class="section-sitemap-content-item--head">Resources</h4>
                                <ul class="section-sitemap-content-item--links">
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link">Resources page</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link">Resources page</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link">Resources page</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link">Resources page</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="section-sitemap-content--item">
                                <h4 class="section-sitemap-content-item--head">Career</h4>
                                <ul class="section-sitemap-content-item--links">
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link">Caree inner</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link">Caree inner</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link">Caree inner</a>
                                    </li>
                                    <li class="section-sitemap-content-item--link">
                                        <a href="#" class="button button--link">Caree inner</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a
        href=""
        id="upButton"
        class="button button--extraBig button--dark box-shadow button--circle button--onlyIcon ite-chevron-up"
    ></a>

@endsection




