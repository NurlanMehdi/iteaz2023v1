/**
 *    Version: 1.0.1
 *     Author: Ali Mahmudlu (alimahmudlu), Taleh Rzayev (rzayevtaleh01)
 *    Website: http://alimahmudlu.github.io
 *     Github: https://github.com/alimahmudlu/, https://github.com/rzayevtaleh01/
 *       Repo: https://github.com/alimahmudlu/ite.az/
 *  Telephone: +994708550235
 *      Email: alimahmudlu@gmail.com
*/

let lastScrollTop  = 0;
const $body        = $('body');


$(document).on('scroll', function () {
	var st = window.pageYOffset || document.documentElement.scrollTop;

	if (st > lastScrollTop){
		$('.section-mainHeader').removeClass('top-0 box-shadow')
	}
	else if (st == 0){
		$('.section-mainHeader').removeClass('top-0 box-shadow')
	}
	else {
		$('.section-mainHeader').addClass('top-0 box-shadow')
	}
	lastScrollTop = st <= 0 ? 0 : st;
})

$(document).on('click', '.customDropdown-toggle', function (e) {
	const outside = $(this).attr('data-outside'),
		  target  = $(this).attr('data-target');

	$('.customDropdown').not($(this).parents('.customDropdown')).removeClass('active')
	$('.customDropdown-menu').not($(this).parents('.customDropdown').find('.customDropdown-menu')).hide('300')

	if (outside) {
		$(this).parents('.customDropdown').toggleClass('active')
		$('#'+target).toggle('300')
	}
	else {
		$(this).parents('.customDropdown').toggleClass('active').find('.customDropdown-menu').toggle('300')
	}
})

$(document).on('click', '.widget-search--toggle', function (e) {
	$('.widget-search--toggle').toggleClass('active')
	$('.widget-search').toggleClass('active')
	$('body').toggleClass('is-open')
})

$(document).on('click', '.section-mainHeader-mobilContainer-head--close, .section-mainHeader-startBar-toggle', function (e) {
	e.preventDefault();

	$('.section-mainHeader-mobilContainer').toggleClass('active');
})

$(document).on('click', '.block-accordion-item-head', function (e) {
	e.preventDefault();


	if (!$(this).parents('[data-type=free].block-accordion-item').length) {
		$('.block-accordion-item-content').not($(this).parents('.block-accordion-item').find('.block-accordion-item-content')).not($('[data-type=free].block-accordion-item').find('.block-accordion-item-content')).css('maxHeight', '0').parents('.block-accordion-item').removeClass('active')
	}
	let panel = $(this).parents('.block-accordion-item').find('.block-accordion-item-content')[0];

	if (panel.style.maxHeight && panel.style.maxHeight != '0px') {
		panel.style.maxHeight = 0;
	} else {
		panel.style.maxHeight = panel.scrollHeight + "px";
	}
	$(this).parents('.block-accordion-item').toggleClass('active')
})

function absoluteOrderCartFn() {
	var height = $('.widget-orderCart--absoluteBanner').innerHeight();
	$('.widget-orderCart--absolute').css('margin-top', -height)
}

function redirectFn() {
	if ($('[data-redirect-url]').length > 0) {
		var url        = $('[data-redirect-url]').attr('data-redirect-url') || '/',
			breakpoint = $('[data-redirect-url]').attr('data-redirect-breakpoint') || 0;

		if ($(document).width() > breakpoint) {
			location.href = url
		}
	}
}

$(document).ready(function () {
	absoluteOrderCartFn();
	redirectFn();
})

$(window).resize(function () {
	absoluteOrderCartFn();
	redirectFn();
})




function slickFn(customSlick) {
	if($body.find('[data-slick]').length) {
		if($body.find('#slickSliderCss').length && !customSlick) {
			$('[data-slick]').slick();
		}
		else {
			$('body #slickSliderScripts').empty().append(
				`
                    <link id="slickSliderCss" href="assets/vendors/slick-1.8.1/slick/slick.css" rel="stylesheet preload">
                    <link id="slickSliderThemeCss" href="assets/vendors/slick-1.8.1/slick/slick-theme.css" rel="stylesheet preload">
                    <script id="slickSliderJS" src="assets/vendors/slick-1.8.1/slick/slick.js" rel="prelaod"></script>
                `
			);
			if ($('[data-slick=recommendedTraining]') && (!customSlick || customSlick == 'recommendedTraining')) {
				var $slickElement = $('.assistant-tabs-item.active [data-slick=recommendedTraining]');
				$slickElement.on('init reInit afterChange', function (event, slick, currentSlide) {
					if(!slick.$dots){
						return;
					}
					var i = (currentSlide ? currentSlide : 0) + 1;
					$('.assistant-tabs-item.active [data-slick-id=recommendedTraining] .assistant-pagingInfo--description').text(i + '/' + (slick.$dots[0].children.length));
				});

				$('.assistant-tabs-item.active [data-slick=recommendedTraining]').slick(
					{
						"slidesToShow": 4,
						"slidesToScroll": 1,
						// variableWidth: true,
						centerMode: true,
						centerPadding: '30px',
						infinite: true,
						dots: true,
						// arrows: false,
						prevArrow: $('.assistant-tabs-item.active [data-slick-id=recommendedTraining] .prev'),
						nextArrow: $('.assistant-tabs-item.active [data-slick-id=recommendedTraining] .next'),
						responsive:[
							{
								breakpoint: 1200,
								settings:
									{
										centerPadding: '30px',
										slidesToShow: 3,
										slidesToScroll: 1
									}
							},
							{
								breakpoint: 992,
								settings:
									{
										centerPadding: '30px',
										slidesToShow: 1,
										slidesToScroll: 1
									}
							}
						]
					}
				);
			}
			if ($('[data-slick=exploreTraining]') && (!customSlick || customSlick == 'exploreTraining')) {
				var $slickElement = $('.assistant-tabs-item.active [data-slick=exploreTraining]');
				$slickElement.on('init reInit afterChange', function (event, slick, currentSlide) {
					if(!slick.$dots){
						return;
					}
					var i = (currentSlide ? currentSlide : 0) + 1;
					$('.assistant-tabs-item.active [data-slick-id=exploreTraining] .assistant-pagingInfo--description').text(i + '/' + (slick.$dots[0].children.length));
				});

				$('.assistant-tabs-item.active [data-slick=exploreTraining]').slick(
					{
						"slidesToShow": 4,
						"slidesToScroll": 1,
						// variableWidth: true,
						centerMode: true,
						centerPadding: '30px',
						infinite: true,
						dots: true,
						// arrows: false,
						prevArrow: $('.assistant-tabs-item.active [data-slick-id=exploreTraining] .prev'),
						nextArrow: $('.assistant-tabs-item.active [data-slick-id=exploreTraining] .next'),
						responsive:[
							{
								breakpoint: 1200,
								settings:
									{
										centerPadding: '30px',
										"slidesToShow": 4,
										"slidesToScroll": 1,
									}
							},
							{
								breakpoint: 992,
								settings:
									{
										centerPadding: '30px',
										slidesToShow: 1,
										slidesToScroll: 1
									}
							}
						]
					}
				);
			}
			if ($('[data-slick=team]') && (!customSlick || customSlick == 'team')) {
				var $slickElement = $('[data-slick=team]');
				$slickElement.on('init reInit afterChange', function (event, slick, currentSlide) {
					if(!slick.$dots){
						return;
					}
					var i = (currentSlide ? currentSlide : 0) + 1;
					$('[data-slick-id=team] .assistant-pagingInfo--description').text(i + '/' + (slick.$dots[0].children.length));
				});

				$('[data-slick=team]').slick(
					{
						"slidesToShow": 3,
						"slidesToScroll": 1,
						// variableWidth: true,
						centerMode: true,
						centerPadding: '30px',
						infinite: true,
						dots: true,
						// arrows: false,
						prevArrow: $('[data-slick-id=team] .prev'),
						nextArrow: $('[data-slick-id=team] .next'),
						responsive:[
							{
								breakpoint: 1200,
								settings:
									{
										centerPadding: '175px',
									}
							},
							{
								breakpoint: 992,
								settings:
									{
										centerPadding: '30px',
										slidesToShow: 1,
										slidesToScroll: 1
									}
							}
						]
					}
				);
			}
			if ($('[data-slick=review]') && (!customSlick || customSlick == 'review')) {
				$('[data-slick=review]').slick(
					{
						"slidesToShow": 3,
						"slidesToScroll": 1,
						// variableWidth: true,
						centerMode: true,
						centerPadding: '0',
						infinite: true,
						dots: true,
						// arrows: false,
						prevArrow: $('[data-slick-id=review] .prev'),
						nextArrow: $('[data-slick-id=review] .next'),
						responsive:[
							{
								breakpoint: 1200,
								settings:
									{
										centerPadding: '0',
									}
							},
							{
								breakpoint: 992,
								settings:
									{
										centerPadding: '30px',
										slidesToShow: 1,
										slidesToScroll: 1
									}
							}
						]
					}
				)
			}
			if ($('[data-slick=partners]') && (!customSlick || customSlick == 'review')) {
				$('[data-slick=partners]').slick(
					{
						"slidesToShow": 7,
						"slidesToScroll": 1,
						// variableWidth: true,
						centerMode: true,
						centerPadding: '0',
						infinite: true,
						dots: true,
						// arrows: false,
						prevArrow: $('[data-slick-id=partners] .prev'),
						nextArrow: $('[data-slick-id=partners] .next'),
						responsive:[
							{
								breakpoint: 1200,
								settings:
									{
										centerPadding: '0',
										slidesToShow: 5,
										slidesToScroll: 1
									}
							},
							{
								breakpoint: 992,
								settings:
									{
										centerPadding: '0',
										slidesToShow: 3,
										slidesToScroll: 3
									}
							}
						]
					}
				)
			}
		}
	}
}

slickFn()


$(document).on('click', '.assistant-tabs-menu--item', function (e) {
	const tabControl = $(this).attr('data-tabs-control'),
		  tabSlick   = $(this).attr('data-tabs-slick');

	$(this).parents('.assistant-tabs-menu').find('.assistant-tabs-menu--item').not($(this)).removeClass('active')
	$(this).addClass('active')

	if (tabSlick) $(`[data-tabs-control=${tabControl}].assistant-tabs-item.active [data-slick=${tabSlick}]`).slick('unslick');

	$(`[data-tabs-control=${tabControl}].assistant-tabs-item`).parents('.assistant-tabs').find('.assistant-tabs-item').not($(`[data-tabs-control=${tabControl}].assistant-tabs-item`)).removeClass('active')
	$(`[data-tabs-control=${tabControl}].assistant-tabs-item`).addClass('active')

	if (tabSlick) slickFn(tabSlick)
})


const upButton = $('#upButton');


$(window).scroll(function() {
  if ($(window).scrollTop() > 400) {
    upButton.addClass('show');
  } else {
    upButton.removeClass('show');
  }
});

upButton.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '400');
});


$(document).on('click', '[data-basket]', function (e) {
	e.preventDefault();

	let basketStatus   = $(this).attr('data-basket'),
		itemId         = $(this).attr('data-item-id');


	toggle_basket(basketStatus, itemId).then(resolve => {
		basketStatus = basketStatus == 'false' ? true : false;
		$(this).attr('data-basket', basketStatus)
	}).catch(reject => {
		console.log(reject)
	})
})

$(document).on('click', '[data-basket-remove]', function (e) {
	e.preventDefault();

	let basketStatus   = true,
		itemId         = $(this).attr('data-item-id');


	toggle_basket(basketStatus, itemId).then(resolve => {
		basketStatus = basketStatus == 'false' ? true : false;
		$(this).attr('data-basket', basketStatus)
	}).catch(reject => {
		console.log(reject)
	})
})

function toggle_basket(basketStatus, itemId) {
	return new Promise((resolve, reject) => {
		$.ajax({
			url: 'BASKET_ADD_AND_REMOVE_URL',
			method: 'POST',
			data: {
				'item_id': itemId,
				'item_status': basketStatus
			}
		})
			.done(function (response) {
			/*
			* Burada api nəticəsində səbətdə olan bütün məhsullar qayıtmalıdır.
			* Eyni zamanda səbətdəki məhsulların arrayından kənarda bu məhsulların ümumi cəmi, endirimin məbləği və faizi gəlməlidir.
			*
			* Təxmini olaraq mənə lazım olan response-u aşağıda qeyd edirəm:
			* {
			* 	status: true,
			* 	message: 'SOME MESSAGE',
			* 	data: {
			* 		items: [
			* 			{
			* 				id: 1,
			* 				name: 'Microsoftun Yenilikçi Müəllim (MİE) proqramına hazırlıq',
			* 				image: '/images/image_url.png',
			* 				start_date: '14 Noyabr',
			* 				end_date: '18 Noyabr',
			* 				status: 'Online',
			* 				price: '56',
			* 				old_price: '85',
			* 				sale_price: '20',
			* 				sale_rate: '15%'
			* 			},
			* 			{
			* 				id: 2,
			* 				name: 'Microsoftun Yenilikçi Müəllim (MİE) proqramına hazırlıq',
			* 				image: '/images/image_url.png',
			* 				start_date: '14 Noyabr',
			* 				end_date: '18 Noyabr',
			* 				status: 'Online',
			* 				price: '56',
			* 				old_price: '85',
			* 				sale_price: '20',
			* 				sale_rate: '15%'
			* 			}
			* 		],
			* 		total_price: '123',
			* 		total_old_price: '156',
			*		total_sale_price: '30',
			* 		total_sale_rate: '16%'
			* 	}
			* }
			*
			**/

			let cardHtml        = '',
				cardHtmlArray   = [],
				widgetHtml      = '',
				widgetHtmlArray = [];

			(response?.data?.items || []).map(el => {
				widgetHtml =
					`
						<a href="#" class="widget-shopping-cart-item">
							<div class="widget-shopping-cart-item-image">
								<img src="${el.image}" class="widget-shopping-cart-item-image--img" alt="${el.name}" />
							</div>
							<div class="widget-shopping-cart-item-content">
								<h4 class="widget-shopping-cart-item-content--header">
									${el.name}
								</h4>
								<p class="widget-shopping-cart-item-content--date">
									${el.start_date} - ${el.end_date}
								</p>
								<span class="widget-shopping-cart-item-content--price" ${el.old_price ? `data-old-price="${el.old_price}"` : ''}>
									${el.price} AZN
								</span>
							</div>
						</a>
					`
				widgetHtmlArray.push(widgetHtml);

				cardHtml =
					`
						<div class="section-shopping-cart-item">
							<div class="blocks block-shopping-cart block-shopping-cart--bgWhite">
								<div class="block-shopping-cart-body">
									<div class="block-shopping-cart-image">
										<div class="box pt-100">
											<div class="box-resize">
												<img src="${el.image}" class="block-shopping-cart-image--img" alt="${el.name}" />
											</div>
										</div>
									</div>
									<div class="block-shopping-cart-content">
										<a href="trainingInner.html" class="block-shopping-cart-content--link button button--link button--big">
											${el.name}
										</a>
										<p class="block-shopping-cart-content--date">
											${el.start_date}-${el.end_date}
										</p>
										<div class="block-shopping-cart-content-info">
											<p class="block-shopping-cart-content-info-item">
												${el.duration}
											</p>
											<p class="block-shopping-cart-content-info-item">
												<span>${el.status}</span>
											</p>
										</div>
										<div class="block-shopping-cart-content--priceBlock">
											<p class="block-shopping-cart-content--price" ${el.old_price ? `data-old-price="${el.old_price}"` : ''}>
												${el.price} AZN
											</p>
										</div>
									</div>
								</div>
								<div class="block-shopping-cart-operations">
									<p class="block-shopping-cart-content--price" ${el.old_price ? `data-old-price="${el.old_price}"` : ''}>
										${el.price} AZN
									</p>
									<a href="" class="block-shopping-cart-content--remove button--link button button--small ite-times button--reverse" data-basket-remove="true" data-item-id="${el.id}">
										Remove Item
									</a>
								</div>
							</div>
						</div>
					`
				cardHtmlArray.push(cardHtml)
			});

			$('.section-shopping-cart-items').html(cardHtmlArray.join(''))
			$('.widget-orderCart-total--description').html(response.data.total_price+' AZN')
			$('.widget-orderCart-details-item--sale .widget-orderCart-details-item--description').html(response.data.total_old_price+' AZN')
			$('.widget-orderCart-details-item--saleOff .widget-orderCart-details-item--description').html(response.data.total_sale_price+' AZN')

			$('.widget-shopping-cart-items').html(widgetHtmlArray.join(''))
			$('.widget-shopping-cart-footer-head--price').html(response.data.total_price+' AZN')

			if (response.data.total_old_price) {
				$('.widget-shopping-cart-footer-head--price').attr('data-old-price', response.data.total_old_price)
				$('.widget-orderCart-total--description').attr('data-old-price', response.data.total_old_price)
			}
			else {
				$('.widget-shopping-cart-footer-head--price').removeAttr('data-old-price')
				$('.widget-orderCart-total--description').removeAttr('data-old-price')
			}

			resolve({ status: true, data: response?.data?.items || [], error: {} })
		})
			.fail(function (error) {
				reject({status: false, data: [], error: error})
			})
	})
}

$(document).on('change', '#cv', function (e) {
	var formData = new FormData();
	var files = e.target.files || [];

	for (var i = 0; i < files.length; i++) {
		formData.append('file', files[i]);

		if (i + 1 == files.length) {
			$.ajax({
				url: '/CV_UPLOAD_URL',
				data: formData,
				processData: false,
				contentType: false,
				method: 'post'
			}).done(response => {
				console.log(response)
			}).fail(error => {
				console.log(error)
			})
		}
	}
})