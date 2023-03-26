@extends('user.master')
@section('content')
    <!-- BANNER START -->
    <div class="sections section-banner sections--extraBig">
        <div class="container-lg section-banner--container">
            <div class="row gutter-x-24px gutter-y-24px">
                <div class="col-lg-5">
                    <div class="sections--block">
                        <div class="section-head">
                            <h2 class="section-head--header">
                                Upgrade your knowledge to a newer level
                            </h2>
                            <p class="section-head--description">
                                Start, switch, advance your career. Get certification.<br/>
                                Join our online/offline trainings based in Baku.
                            </p>
                        </div>
                        <div class="section-content">
                            <a href="#" class="button button--primary button--extraBig">
                                Start browsing
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ms-auto">
                    <div
                        class="section-banner-image animation animation--right-to-left animation--delay-04 animation--duration-04"
                    >
                        <img
                            src="{{asset('assets/images/banner.png')}}"
                            class="section-banner-image--img"
                            alt="Banner Image"
                        />
                    </div>
                </div>
            </div>
        </div>
        <div class="assistants assistant-ellipse">
            <div class="assistant-ellipse-block assistant-ellipse--block-right">
                <div
                    class="assistant-ellipse--item animation animation--right-to-left animation--delay-03 animation--duration-05"
                ></div>
            </div>
        </div>
        <div class="assistants assistant-borders">
            <div
                class="assistant-borders--block assistant-borders--block-extraBig assistant-borders--block-bigPadding assistant-borders--block-right"
            >
                <div
                    class="assistant-borders--item assistant-borders--item-opacity1 animation animation--right-to-left animation--delay-04 animation--duration-05"
                ></div>
                <div
                    class="assistant-borders--item assistant-borders--item-opacity1 animation animation--right-to-left animation--delay-02 animation--duration-05"
                ></div>
                <div
                    class="assistant-borders--item assistant-borders--item-opacity1 animation animation--right-to-left animation--delay-0 animation--duration-05"
                ></div>
            </div>
        </div>
    </div>
    <!-- BANNER END -->

    <!-- PARTNERS START -->
    <div class="sections sections--bgSilver section-partners">
        <div class="container-lg section-partners--container">
            <div class="block-slider block-slider--withOutDots">
                <div
                    class="section-partners-items block-slider-items"
                    data-slick="partners"
                >
                    <div class="section-partners-item">
                        <img
                            src="{{asset('assets/images/aven.png')}}"
                            class="section-partners-item--img"
                            alt="Partner 1 name"
                        />
                    </div>
                    <div class="section-partners-item">
                        <img
                            src="{{asset('assets/images/ztos.png')}}"
                            class="section-partners-item--img"
                            alt="Partner 2 name"
                        />
                    </div>
                    <div class="section-partners-item">
                        <img
                            src="{{asset('assets/images/utosia-2.png')}}"
                            class="section-partners-item--img"
                            alt="Partner 3 name"
                        />
                    </div>
                    <div class="section-partners-item">
                        <img
                            src="{{asset('assets/images/velocity-9.png')}}"
                            class="section-partners-item--img"
                            alt="Partner 4 name"
                        />
                    </div>
                    <div class="section-partners-item">
                        <img
                            src="{{asset('assets/images/goldline.png')}}"
                            class="section-partners-item--img"
                            alt="Partner 5 name"
                        />
                    </div>
                    <div class="section-partners-item">
                        <img
                            src="{{asset('assets/images/solaytic.png')}}"
                            class="section-partners-item--img"
                            alt="Partner 6 name"
                        />
                    </div>
                    <div class="section-partners-item">
                        <img
                            src="{{asset('assets/images/liva.png')}}"
                            class="section-partners-item--img"
                            alt="Partner 7 name"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PARTNERS START -->

    <!-- TRAINING START -->
    <!-- RECOMMENDED TRAINING START -->
    <div class="sections sections--big section-training">
        <div class="container-lg section-training--container">
            <div class="sections--block">
                <div class="section-head">
                    <h3 class="section-head--header">
                        Select courses to your liking and fit
                    </h3>
                    <p class="section-head--description"></p>
                </div>
                <div class="section-content">
                    <div class="assistants assistant-tabs">
                        <div class="assistant-tabs-menu">
                            <div
                                class="assistant-tabs-menu--item active"
                                data-tabs-control="forTeachers"
                                data-tabs-slick="recommendedTraining"
                            >
                                For teachers
                            </div>
                            <div
                                class="assistant-tabs-menu--item"
                                data-tabs-control="forStudents"
                                data-tabs-slick="recommendedTraining"
                            >
                                For students
                            </div>
                            <div
                                class="assistant-tabs-menu--item"
                                data-tabs-control="forParents"
                                data-tabs-slick="recommendedTraining"
                            >
                                For parents
                            </div>
                        </div>
                    </div>
                    <div class="assistants assistant-tabs">
                        <div
                            class="assistant-tabs-item active"
                            data-tabs-control="forTeachers"
                            data-tabs-slick="recommendedTraining"
                        >
                            <div
                                class="assistants assistant-buttons assistant-buttons--scroll"
                            >
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                            </div>
                            <div
                                class="blocks block-slider block-slider--withOutDots"
                                data-slick-id="recommendedTraining"
                            >
                                <div
                                    class="section-training-items block-slider-items"
                                    data-slick="recommendedTraining"
                                >
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology 1tab
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--online"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Microsoft Minecraft Certified Educator beynəlxalq
                                                    dərəcəsi üçün müəllim hazırlığı üzrə distant təlim
                                                </a>
                                                <p class="block-training-content--price">85 AZN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--online"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p class="block-training-content--price">85 AZN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="assistants assistant-pagingInfo">
                    <span
                        class="button button--dark-outline button--big button--onlyIcon ite-chevron-left prev"
                    >
                      Prev item
                    </span>
                                    <span
                                        class="button button--dark-outline button--big button--onlyIcon ite-chevron-right next"
                                    >
                      Next item
                    </span>
                                    <span class="assistant-pagingInfo--description"></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="assistant-tabs-item"
                            data-tabs-control="forStudents"
                            data-tabs-slick="recommendedTraining"
                        >
                            <div
                                class="assistants assistant-buttons assistant-buttons--scroll"
                            >
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                            </div>
                            <div
                                class="blocks block-slider block-slider--withOutDots"
                                data-slick-id="recommendedTraining"
                            >
                                <div
                                    class="section-training-items block-slider-items"
                                    data-slick="recommendedTraining"
                                >
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology 2tab
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--online"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p class="block-training-content--price">85 AZN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="assistants assistant-pagingInfo">
                    <span
                        class="button button--dark-outline button--big button--onlyIcon ite-chevron-left prev"
                    >
                      Prev item
                    </span>
                                    <span
                                        class="button button--dark-outline button--big button--onlyIcon ite-chevron-right next"
                                    >
                      Next item
                    </span>
                                    <span class="assistant-pagingInfo--description"></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="assistant-tabs-item"
                            data-tabs-control="forParents"
                            data-tabs-slick="recommendedTraining"
                        >
                            <div
                                class="assistants assistant-buttons assistant-buttons--scroll"
                            >
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                            </div>
                            <div
                                class="blocks block-slider block-slider--withOutDots"
                                data-slick-id="recommendedTraining"
                            >
                                <div
                                    class="section-training-items block-slider-items"
                                    data-slick="recommendedTraining"
                                >
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--online"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology 3tab
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Microsoft Minecraft Certified Educator beynəlxalq
                                                    dərəcəsi üçün müəllim hazırlığı üzrə distant təlim
                                                </a>
                                                <p class="block-training-content--price">85 AZN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--online"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p class="block-training-content--price">85 AZN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="assistants assistant-pagingInfo">
                    <span
                        class="button button--dark-outline button--big button--onlyIcon ite-chevron-left prev"
                    >
                      Prev item
                    </span>
                                    <span
                                        class="button button--dark-outline button--big button--onlyIcon ite-chevron-right next"
                                    >
                      Next item
                    </span>
                                    <span class="assistant-pagingInfo--description"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RECOMMENDED TRAINING END -->

    <!-- EXPLORE TRAINING START -->
    <div class="sections sections--big sections--bgSilver section-training">
        <div class="container-lg section-training--container">
            <div class="sections--block">
                <div class="section-head">
                    <h3 class="section-head--header">Explore more</h3>
                    <p class="section-head--description"></p>
                </div>
                <div class="section-content">
                    <div class="assistants assistant-tabs">
                        <div class="assistants assistant-tabs-menu">
                            <div
                                class="assistant-tabs-menu--item active"
                                data-tabs-control="forTeacher"
                                data-tabs-slick="exploreTraining"
                            >
                                For teachers
                            </div>
                            <div
                                class="assistant-tabs-menu--item"
                                data-tabs-control="forStudent"
                                data-tabs-slick="exploreTraining"
                            >
                                For students
                            </div>
                            <div
                                class="assistant-tabs-menu--item"
                                data-tabs-control="forParent"
                                data-tabs-slick="exploreTraining"
                            >
                                For parents
                            </div>
                        </div>
                    </div>
                    <div class="assistants assistant-tabs">
                        <div
                            class="assistant-tabs-item active"
                            data-tabs-control="forTeacher"
                            data-tabs-slick="exploreTraining"
                        >
                            <div
                                class="assistants assistant-buttons assistant-buttons--scroll"
                            >
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                            </div>
                            <div
                                class="blocks block-slider block-slider--withOutDots"
                                data-slick-id="exploreTraining"
                            >
                                <div
                                    class="section-training-items block-slider-items"
                                    data-slick="exploreTraining"
                                >
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--online"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Microsoft Minecraft Certified Educator beynəlxalq
                                                    dərəcəsi üçün müəllim hazırlığı üzrə distant təlim
                                                </a>
                                                <p class="block-training-content--price">85 AZN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--online"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p class="block-training-content--price">85 AZN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="assistants assistant-pagingInfo">
                    <span
                        class="button button--dark-outline button--big button--onlyIcon ite-chevron-left prev"
                    >
                      Prev item
                    </span>
                                    <span
                                        class="button button--dark-outline button--big button--onlyIcon ite-chevron-right next"
                                    >
                      Next item
                    </span>
                                    <span class="assistant-pagingInfo--description"></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="assistant-tabs-item"
                            data-tabs-control="forStudent"
                            data-tabs-slick="exploreTraining"
                        >
                            <div
                                class="assistants assistant-buttons assistant-buttons--scroll"
                            >
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                            </div>
                            <div
                                class="blocks block-slider block-slider--withOutDots"
                                data-slick-id="exploreTraining"
                            >
                                <div
                                    class="section-training-items block-slider-items"
                                    data-slick="exploreTraining"
                                >
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--online"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Microsoft Minecraft Certified Educator beynəlxalq
                                                    dərəcəsi üçün müəllim hazırlığı üzrə distant təlim
                                                </a>
                                                <p class="block-training-content--price">85 AZN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--online"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p class="block-training-content--price">85 AZN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="assistants assistant-pagingInfo">
                    <span
                        class="button button--dark-outline button--big button--onlyIcon ite-chevron-left prev"
                    >
                      Prev item
                    </span>
                                    <span
                                        class="button button--dark-outline button--big button--onlyIcon ite-chevron-right next"
                                    >
                      Next item
                    </span>
                                    <span class="assistant-pagingInfo--description"></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="assistant-tabs-item"
                            data-tabs-control="forParent"
                            data-tabs-slick="exploreTraining"
                        >
                            <div
                                class="assistants assistant-buttons assistant-buttons--scroll"
                            >
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                                <a
                                    href="training.html"
                                    class="button button--dark-outline button--rounded button--extraSmall"
                                >
                                    Information Technology
                                </a>
                            </div>
                            <div
                                class="blocks block-slider block-slider--withOutDots"
                                data-slick-id="exploreTraining"
                            >
                                <div
                                    class="section-training-items block-slider-items"
                                    data-slick="exploreTraining"
                                >
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--online"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Microsoft Minecraft Certified Educator beynəlxalq
                                                    dərəcəsi üçün müəllim hazırlığı üzrə distant təlim
                                                </a>
                                                <p class="block-training-content--price">85 AZN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--online"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p class="block-training-content--price">85 AZN</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-training-item">
                                        <div
                                            class="blocks block-training block-training--status block-training--offline"
                                        >
                                            <div class="block-training-image">
                                                <div class="box pt-56">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-training-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-training-operations">
                                                <a
                                                    href="training.html"
                                                    class="button button--dark-outline button--rounded button--extraSmall"
                                                >
                                                    Information Technology
                                                </a>
                                                <button
                                                    class="button button--rounded button--extraBig button--transparent button--onlyIcon button--link ite-basket-outline block-training-operations--basket"
                                                    data-basket="false" data-item-id="1"
                                                >
                                                    Add/Remove basket
                                                </button>
                                            </div>
                                            <div class="block-training-content">
                                                <p class="block-training-content--date">
                                                    04 NOVEMBER - 15 November
                                                </p>
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-training-content--link button button--link button--big"
                                                >
                                                    Python for STEAM
                                                </a>
                                                <p
                                                    class="block-training-content--price"
                                                    data-old-price="85"
                                                >
                                                    56 AZN
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="assistants assistant-pagingInfo">
                    <span
                        class="button button--dark-outline button--big button--onlyIcon ite-chevron-left prev"
                    >
                      Prev item
                    </span>
                                    <span
                                        class="button button--dark-outline button--big button--onlyIcon ite-chevron-right next"
                                    >
                      Next item
                    </span>
                                    <span class="assistant-pagingInfo--description"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- EXPLORE TRAINING END -->
    <!-- TRAINING END -->



    @include('user.browsingBanner')
    @include('user.reviewsBanner')
    @include('user.contactBanner')
@endsection
