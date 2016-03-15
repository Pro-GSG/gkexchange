<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>   
<div class="bottom-block-projects"><img src="/i/title_projects_block.jpg"/></div>
<script>
var curSlides=1;
var curSlides2=1;
function slider_otziv(dir, sl) {
    var col = $(".slide-item").length;
    
    $(".slide-item").css("display", "none");
    switch(dir) {
        case "prev" :  
            if (curSlides2==1) {
                curSlides2=col;
                //$(".slide-item").fadeOut(500);
                $("#ot" + col).fadeIn(500);

            }
            else {
                curSlides2=curSlides2-1;
                //$(".slide-item").fadeOut(500);
                $("#ot" + curSlides2).fadeIn(500);

            }

            break;
        case "next" : 
            if (curSlides2==col) {
                curSlides2=1;
                //$(".slide-item").fadeOut(500);
                $("#ot" + curSlides2).fadeIn(500); 


            }
            else {
                curSlides2=parseInt(curSlides2)+1;
                //$(".slide-item").fadeOut(500);
                $("#ot" + curSlides2).fadeIn(500);

            }
            break;
    }                           
};
</script>
<div class="bottom-block">
<div class="bleft" onclick="slider_otziv('prev');"></div>
<div class="bright" onclick="slider_otziv('next');"></div>  
<?if (!empty($arResult)):?>
        <?
        $i=1;
        foreach($arResult["ITEMS"] as $arItem):
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], 
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], 
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), 
                array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                if($i===1){echo '<div class="slide-item" id="ot'.$i.'">';}
                else echo '<div class="slide-item" style="display:none;" id="ot'.$i.'">';
                $i++;
            ?>  
             
            <div class="bottom-block-image"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>"></div>
            <div class="bottom-block-name"><?=$arItem["PROPERTIES"]["SITE_NAME"]["VALUE"];?></div>
            <div class="bottom-block-project"><?=$arItem["PROPERTIES"]["PROJECT_NAME"]["VALUE"];?></div>
            <div class="bottom-block-dash"></div>
            <div class="bottom-block-text"><?=htmlspecialcharsbx($arItem["PREVIEW_TEXT"]);?></div>
            <div class="bottom-block-price"><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"];?><span class="rubznak">c</span> </div>    
            </div>    
        <?endforeach;?>
          

<?endif?>        
</div>