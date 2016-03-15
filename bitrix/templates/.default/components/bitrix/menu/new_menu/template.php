<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

    <?
        foreach($arResult as $arItem):
            if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
                continue;
        ?>
        
        <?
        if (!$arItem["LINK"]) {$arItem["LINK"] = $arItem[1];}
        if (!$arItem["TEXT"]) {$arItem["TEXT"] = $arItem[0];}
        ?>
        
         
        <div class="krug">   
            <div class="main_link active"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
        </div>

        <?endforeach?>

    <?endif?>

