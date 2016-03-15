<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="menu">
    <?if (!empty($arResult)):?>

        <?foreach($arResult as $arItem):
            ?>
            <div class="m1"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
            <?endforeach?>
        <div class="kybiki"><img src="/i/kybiki.png" alt=""></div>
        <?endif;?>  
    </div>
