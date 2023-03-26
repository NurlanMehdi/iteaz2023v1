@extends('user.master')
@section('content')

    <!-- TRAINING START -->
    <div
        class="sections sections--bgSilver sections--small section-shopping-cart"
    >
        <div class="container-lg section-shopping-cart--container">
            <div class="sections--block">
                <div class="section-head">
                    <h3 class="section-head--header">Shopping cart</h3>
                    <p class="section-head--description">2 items in the cart</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section-shopping-cart-items">
                                <div class="section-shopping-cart-item">
                                    <div
                                        class="blocks block-shopping-cart block-shopping-cart--bgWhite"
                                    >
                                        <div class="block-shopping-cart-body">
                                            <div class="block-shopping-cart-image">
                                                <div class="box pt-100">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-shopping-cart-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-shopping-cart-content">
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-shopping-cart-content--link button button--link button--big"
                                                >
                                                    Microsoftun Yenilikçi Müəllim (MİE) proqramına
                                                    hazırlıq
                                                </a>
                                                <p class="block-shopping-cart-content--date">
                                                    14 November-18 November
                                                </p>
                                                <div class="block-shopping-cart-content-info">
                                                    <p class="block-shopping-cart-content-info-item">
                                                        4 days
                                                    </p>
                                                    <p class="block-shopping-cart-content-info-item">
                                                        <span>Online</span>
                                                    </p>
                                                </div>
                                                <div class="block-shopping-cart-content--priceBlock">
                                                    <p
                                                        class="block-shopping-cart-content--price"
                                                        data-old-price="85"
                                                    >
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block-shopping-cart-operations">
                                            <p
                                                class="block-shopping-cart-content--price"
                                                data-old-price="85"
                                            >
                                                56 AZN
                                            </p>
                                            <a
                                                href=""
                                                class="block-shopping-cart-content--remove button--link button button--small ite-times button--reverse"
                                                data-basket-remove="true"
                                                data-item-id="1"
                                            >Remove Item
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="section-shopping-cart-item">
                                    <div
                                        class="blocks block-shopping-cart block-shopping-cart--bgWhite"
                                    >
                                        <div class="block-shopping-cart-body">
                                            <div class="block-shopping-cart-image">
                                                <div class="box pt-100">
                                                    <div class="box-resize">
                                                        <img
                                                            src="../../public/assets/images/trainingItemImage.png"
                                                            class="block-shopping-cart-image--img"
                                                            alt="Python for STEAM"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="block-shopping-cart-content">
                                                <a
                                                    href="trainingInner.html"
                                                    class="block-shopping-cart-content--link button button--link button--big"
                                                >
                                                    Microsoftun Yenilikçi Müəllim (MİE) proqramına
                                                    hazırlıq
                                                </a>
                                                <p class="block-shopping-cart-content--date">
                                                    14 November-18 November
                                                </p>
                                                <div class="block-shopping-cart-content-info">
                                                    <p class="block-shopping-cart-content-info-item">
                                                        4 days
                                                    </p>
                                                    <p class="block-shopping-cart-content-info-item">
                                                        <span>Online</span>
                                                    </p>
                                                </div>
                                                <div class="block-shopping-cart-content--priceBlock">
                                                    <p
                                                        class="block-shopping-cart-content--price"
                                                        data-old-price="85"
                                                    >
                                                        56 AZN
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-shopping-cart-operations">
                                            <p
                                                class="block-shopping-cart-content--price"
                                                data-old-price="85"
                                            >
                                                56 AZN
                                            </p>
                                            <a
                                                href=""
                                                class="block-shopping-cart-content--remove button--link button button--small ite-times button--reverse"
                                                data-basket-remove="true"
                                                data-item-id="1"
                                            >Remove Item
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 position-sticky bottom-0">
                            <div
                                class="widgets widget-orderCart widget-orderCart--fixed widget-orderCart--withOrder widget-orderCart--bgWhite"
                            >
                                <div class="widget-orderCart-head">
                                    <h6 class="widget-orderCart-head--header">Order Summary</h6>
                                </div>
                                <div class="widget-orderCart-items"></div>
                                <div class="widget-orderCart-details">
                                    <div class="widget-orderCart-details-item widget-orderCart-details-item--sale">
                                        <div class="widget-orderCart-details-item--header">
                                            Subtotal:
                                        </div>
                                        <div class="widget-orderCart-details-item--description">
                                            153 AZN
                                        </div>
                                    </div>
                                    <div class="widget-orderCart-details-item widget-orderCart-details-item--saleOff">
                                        <div class="widget-orderCart-details-item--header">
                                            Total savings:
                                        </div>
                                        <div class="widget-orderCart-details-item--description">
                                            -20AZN
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="widget-orderCart-total">
                                    <div class="widget-orderCart-total--header">Total:</div>
                                    <div
                                        class="widget-orderCart-total--description"
                                        data-old-price="85"
                                    >
                                        153 AZN
                                    </div>
                                </div>
                                <div class="widget-orderCart-footer">
                                    <button
                                        class="button button--dark button--big button--full button--centered"
                                    >
                                        Proceed to checkout
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TRAINING END -->

    <div class="sections sections--bgSilver section-training">
        <div class="container-lg section-training--container">
            <div class="sections--block">
                <div class="section-head">
                    <h5 class="section-head--header">Get another trainig</h5>
                </div>
                <div class="section-content">
                    <div class="row gutter-x-24px gutter-y-48px">
                        <div class="col-lg-3">
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
                        </div>
                        <div class="col-lg-3">
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
                        </div>
                        <div class="col-lg-3">
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
                        </div>
                        <div class="col-lg-3">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




