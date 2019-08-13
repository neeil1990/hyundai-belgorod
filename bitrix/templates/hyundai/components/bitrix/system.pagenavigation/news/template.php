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
if (!defined('B_PROLOG_INCLUDED') || (B_PROLOG_INCLUDED !== true)) {
	die();
}

if (!$arResult["NavShowAlways"]) {
	if (
		(0 == $arResult["NavRecordCount"])
		||
		((1 == $arResult["NavPageCount"]) && (false == $arResult["NavShowAll"]))
	) {
		return;
	}
}

$navQueryString      = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$navQueryStringFull  = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

?>

<section class="pagination">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pagination__center">
                    <div class="df-pagination">
                        <ul class="df-pagination__pages">
                            <?php while ($arResult["nStartPage"] <= $arResult["nEndPage"]) { ?>
                                <?php if ($arResult["nStartPage"] == $arResult["NavPageNomer"]) { ?>
                                    <li class="df-pagination__page">
                                        <a href="#" class="df-pagination__link active"><?php echo $arResult["nStartPage"] ?></a>
                                    </li>
                                <?php } elseif ((1 == $arResult["nStartPage"]) && (false == $arResult["bSavePage"])) { ?>
                                    <li class="df-pagination__page">
                                        <a href="<?php echo $arResult["sUrlPath"] ?><?php echo $navQueryStringFull ?>" class="df-pagination__link "><?php echo $arResult["nStartPage"] ?></a>
                                    </li>
                                <?php } else { ?>
                                    <li class="df-pagination__page">
                                        <a href="<?php echo $arResult["sUrlPath"] ?>?<?php echo $navQueryString ?>PAGEN_<?php echo $arResult["NavNum"] ?>=<?php echo $arResult["nStartPage"] ?>" class="df-pagination__link "><?php echo $arResult["nStartPage"] ?></a>
                                    </li>
                                <?php } ?>
                                <?php $arResult["nStartPage"]++ ?>
                            <?php } ?>
                        </ul>
                        <a href="?PAGEN_1=<?php echo $arResult["NavPageNomer"]+1 ?>" class="df-pagination__next">
                            <svg aria-hidden="true">
                                <use xlink:href="#icon-arrow_pagination"></use>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



