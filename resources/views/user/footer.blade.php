<!-- FOOTER START -->
<div class="sections section-footer">
    <div class="container-lg section-footer--container">
        <!-- MAIN FOOTER START -->
        <div class="section-mainFooter">
            <div class="section-mainFooter-startBar">
                <a href="{{route('dashboard')}}" class="section-mainFooter-startBar-logo">
                    <i class="ite-icons ite-logo-withText"
                    ><span class="path1"></span><span class="path2"></span
                        ><span class="path3"></span><span class="path4"></span
                        ><span class="path5"></span><span class="path6"></span
                        ><span class="path7"></span><span class="path8"></span
                        ><span class="path9"></span
                        ></i>
                </a>
                <div class="section-mainFooter-startBar-menu">
                    <div class="section-mainFooter-startBar-menu-item">
                        <a
                            href="{{json_decode($socialMedia->social)->facebook ?? ''}}" target="_blank"
                            class="section-mainFooter-startBar-menu-item--link button button--link button--silver-outline"
                        >
                            <i class="ite-icons ite-fb"></i>
                        </a>
                    </div>
                    <div class="section-mainFooter-startBar-menu-item">
                        <a
                            href="{{json_decode($socialMedia->social)->instagram ?? ''}}" target="_blank"
                            class="section-mainFooter-startBar-menu-item--link button button--link button--silver-outline"
                        >
                            <i class="ite-icons ite-instagram"></i>
                        </a>
                    </div>
                    <div class="section-mainFooter-startBar-menu-item">
                        <a
                            href="{{json_decode($socialMedia->social)->youtube ?? ''}}" target="_blank"
                            class="section-mainFooter-startBar-menu-item--link button button--link button--silver-outline"
                        >
                            <i class="ite-icons ite-youtube"></i>
                        </a>
                    </div>
                    <div class="section-mainFooter-startBar-menu-item">
                        <a
                            href="{{json_decode($socialMedia->social)->linkedn ?? ''}}" target="_blank"
                            class="section-mainFooter-startBar-menu-item--link button button--link button--silver-outline"
                        >
                            <i class="ite-icons ite-linkedn"></i>
                        </a>
                    </div>
                    <div class="section-mainFooter-startBar-menu-item">
                        <a
                            href="{{json_decode($socialMedia->social)->telegram ?? ''}}" target="_blank"
                            class="section-mainFooter-startBar-menu-item--link button button--link button--silver-outline"
                        >
                            <i class="ite-icons ite-telegram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="section-mainFooter-endBar">
                <div class="section-mainFooter-endBar-menu">
                    <div class="section-mainFooter-endBar-menu-item">
                        <a
                            href="{{route('trainings')}}"
                            class="section-mainFooter-endBar-menu-item--link button button--link button--silver-outline"
                        >
                            {{__('language.trainings')}}
                        </a>
                    </div>
                    <div class="section-mainFooter-endBar-menu-item">
                        <a
                            href="{{route('resource')}}"
                            class="section-mainFooter-endBar-menu-item--link button button--link button--silver-outline"
                        >
                            {{__('language.resources')}}
                        </a>
                    </div>
                    <div class="section-mainFooter-endBar-menu-item">
                        <a
                            href="{{route('news')}}"
                            class="section-mainFooter-endBar-menu-item--link button button--link button--silver-outline"
                        >
                            {{__('language.news')}}
                        </a>
                    </div>
                    <div class="section-mainFooter-endBar-menu-item">
                        <a
                            href="{{route('career')}}"
                            class="section-mainFooter-endBar-menu-item--link button button--link button--silver-outline"
                        >
                            {{__('language.career')}}
                        </a>
                    </div>
                    <div class="section-mainFooter-endBar-menu-item">
                        <a
                            href="{{route('company')}}"
                            class="section-mainFooter-endBar-menu-item--link button button--link button--silver-outline"
                        >
                            {{__('language.company')}}
                        </a>
                    </div>
                    <div class="section-mainFooter-endBar-menu-item">
                        <a
                            href="{{route('contact')}}"
                            class="section-mainFooter-endBar-menu-item--link button button--link button--silver-outline"
                        >
                            {{__('language.contact')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- MAIN FOOTER END -->

        <!-- BOTTOM FOOTER START -->
        <div class="section-bottomFooter">
            <div class="section-bottomFooter-menu">
                <div class="section-bottomFooter-menu-item">
                    <a
                        class="section-bottomFooter-menu-item--link button button--link button--extraSmall button--silver-outline"
                    >
                        Copyright © 2004 - 2022 ITE. All rights reserved
                    </a>
                </div>
            </div>
            <div class="section-bottomFooter-menu">
                <div class="section-bottomFooter-menu-item">
                    <a
                        href="{{route('terms')}}"
                        class="section-bottomFooter-menu-item--link button button--link button--extraSmall button--silver-outline"
                    >
                        Terms of use
                    </a>
                </div>
                <div class="section-bottomFooter-menu-item">
                    <a
                        href="{{route('sitemap')}}"
                        class="section-bottomFooter-menu-item--link button button--link button--extraSmall button--silver-outline"
                    >
                        Sitemap
                    </a>
                </div>
            </div>
        </div>
        <!-- BOTTOM FOOTER END -->
    </div>
</div>
<!-- FOOTER END -->

<div class="assistants assistant-overlay"></div>

<script src="{{asset('assets/vendors/jQuery/jquery.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.js')}}"></script>

<div id="slickSliderScripts"></div>

<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
