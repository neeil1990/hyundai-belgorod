<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

//
?>
<link rel="stylesheet" type="text/css" href="/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="/css/slick-theme.css"/>
<script type="text/javascript" src="/js/slick.min.js"></script>

<div class="offers">

	<div class="news-line"></div>
	<div class="news-center no-padding clearfix">
		<span class="h1-offer"><?=$arResult['NAME']?></span>
	</div>
	<div class="news-line mt14"></div>


	<div class="super-offer-slider-giant">

<?
foreach($arResult["ITEMS"] as $arItem) {

	?>
	<div class="super-offer-slide-giant">
		<div class="item" id="bx_<?=$arItem['ID']?>">
			<a href="<?=$arItem['DETAIL_PAGE_URL']?>">


				<img data-lazy="<?=$arItem["PROPERTIES"]["SLIDER"]['VALUE'][0]?>" alt="<?=$arItem['NAME']?>"/>

			</a>

			<div class="mCarListCards_Item_Info">
				<div class="mCarListCards_Item_Info_Name">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>">
						<?=$arItem['PROPERTIES']['folder_id']['VALUE'].' '.$arItem['PROPERTIES']['CAPACITY']['VALUE'].' / '.$arItem['PROPERTIES']['TRANSMISS']['VALUE']?>
					</a>
				</div>

				<div class="offer-sale">
					<span>Скидка</span>
					<span><p>На авто с ПТС</p></span>
				</div>



				<div class="mCarListCards_Item_Info_Props">

					<span class="t1">Новая цена</span>
					<span class="t2"><?=$arItem['PROPERTIES']['NEW_PRICE']['VALUE']?></span>
					<span class="t3">Выгода</span>
					<span class="t4"><?=$arItem['PROPERTIES']['CREDIT']['VALUE']?></span>

					<div class="clear"></div>
				</div>
				<a class="mtr-btn mtr-btn-blue mtr-btn-wide" href="<?=$arItem['DETAIL_PAGE_URL']?>">Подробнее</a>
			</div>
		</div>
	</div>
	<?
}
?>


	</div>


	<script>
		$(document).ready(function(){

				$('.super-offer-slider-giant').slick({
					slidesToShow: 3,
					slidesToScroll: 1,
					speed: 500,
					lazyLoad: 'ondemand',
					autoplay: true,
					autoplaySpeed: 6000,
					pauseOnHover: false,
					responsive: [
						{
							breakpoint: 1845,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1,
							}
						},
						{
							breakpoint: 1250,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1,
							}
						},
					]
				});
		});
	</script>

</div>




