<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001458631546';
$dateexpire = '001494631546';
$ser_content = 'a:2:{s:7:"CONTENT";s:6224:"   
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
<div class="bleft" onclick="slider_otziv(\'prev\');"></div>
<div class="bright" onclick="slider_otziv(\'next\');"></div>  
        <div class="slide-item" id="ot1">  
             
            <div class="bottom-block-image"><img src="/upload/iblock/f73/f731725b75f5261beba26068d90cf441.png"></div>
            <div class="bottom-block-name">AUTOBODY.RU</div>
            <div class="bottom-block-project">Интернет-магазин автозапчастей</div>
            <div class="bottom-block-dash"></div>
            <div class="bottom-block-text">Передача актуальных остатков 20 000 товаров каждые 30 минут было решено сделать с помощью веб-сервиса, так как на момент выполнения задачи стандартная выгрузка не справлялась с частотой. Реализована передача из 1С данных о балансе пользователей, реквизитов юр.лиц, текущего баланса клиента.</div>
            <div class="bottom-block-price">49 000<span class="rubznak">c</span> </div>    
            </div>    
        <div class="slide-item" style="display:none;" id="ot2">  
             
            <div class="bottom-block-image"><img src="/upload/iblock/28d/28dc46032e29a517ac3685aa73f7ca19.png"></div>
            <div class="bottom-block-name">MAMINGORODOK.RU</div>
            <div class="bottom-block-project">Интернет-магазин детских товаров</div>
            <div class="bottom-block-dash"></div>
            <div class="bottom-block-text">Перевод выгрузки с самописного на стандартный функционал модуля 1С-Битрикс. Часть информации выгружалась из 1С, а часть заводилась в системе 1С-Битрикс. Все внесли в 1С. Реализована выгрузка картинок у характеристик в отдельный хайлоадблок. Обновление конфигуренной базы 1С до последнего релиза с сохранением доработок.</div>
            <div class="bottom-block-price">100 000<span class="rubznak">c</span> </div>    
            </div>    
        <div class="slide-item" style="display:none;" id="ot3">  
             
            <div class="bottom-block-image"><img src="/upload/iblock/96e/96e4ec24afaedf2928ac0cde8e1381b2.png"></div>
            <div class="bottom-block-name">DOMMEBELI.SPB.RU</div>
            <div class="bottom-block-project">Интернет-магазин мебели</div>
            <div class="bottom-block-dash"></div>
            <div class="bottom-block-text">Установка модуля Битрикс на комплексную автоматизацию. Настройка обмена заказами. Написание скрипта для предотвращения появления дублей в номенклатуре 1С при обмене с сайтом. Настройка необходимых отчетов внутри комплексной автоматизации.</div>
            <div class="bottom-block-price">69 000<span class="rubznak">c</span> </div>    
            </div>    
        <div class="slide-item" style="display:none;" id="ot4">  
             
            <div class="bottom-block-image"><img src="/upload/iblock/d21/d2134795b3b7b1c25fd419a055207273.png"></div>
            <div class="bottom-block-name">MEDTEHNO.RU</div>
            <div class="bottom-block-project">Интернет-магазин медтехники</div>
            <div class="bottom-block-dash"></div>
            <div class="bottom-block-text">Выгрузка данных из 1С в новый инфоблок. Синхронизация остатков и цен товаров в существующем инфоблоке на сайте с инфоблоком, выгруженным в 1С с помощью специального свойства. Обмен заказами. Конфигрурирование 1С для более удобной работы с поступившими заказами.</div>
            <div class="bottom-block-price">27 000<span class="rubznak">c</span> </div>    
            </div>    
        <div class="slide-item" style="display:none;" id="ot5">  
             
            <div class="bottom-block-image"><img src="/upload/iblock/3c6/3c652816578ef75abd5ae5a2a4a3abe2.png"></div>
            <div class="bottom-block-name">LIBERTI.RU</div>
            <div class="bottom-block-project">Интернет-магазин аксессуаров для цифровой техники</div>
            <div class="bottom-block-dash"></div>
            <div class="bottom-block-text">Настройка загрузки заказов в 1С с сайта. Настройка соответствия загружаемых документов в модуле Битрикс на стороне 1С. Создание дополнительных свойств заказов. Настройка необходимых параметров на хостинге для стабильной выгрузки.</div>
            <div class="bottom-block-price">30 000<span class="rubznak">c</span> </div>    
            </div>    
        <div class="slide-item" style="display:none;" id="ot6">  
             
            <div class="bottom-block-image"><img src="/upload/iblock/6f5/6f5105156b75d36e92706c7a0ce8532e.png"></div>
            <div class="bottom-block-name">BESTMA.RU</div>
            <div class="bottom-block-project">Интернет-магазин по продаже мобильных акссесуаров</div>
            <div class="bottom-block-dash"></div>
            <div class="bottom-block-text">Работа с модулем версии 5.0. Настройка пакетного обмена 1С с сайтом. Выгрузка данных из 1С в существующий инфоблок. Перенос на новый хостинг проекта и настройка параметров для стабильной работы обмена данными. Каталог 20000 товаров.</div>
            <div class="bottom-block-price">28 000<span class="rubznak">c</span> </div>    
            </div>    
                  

        
</div>";s:4:"VARS";a:2:{s:8:"arResult";a:7:{s:2:"ID";s:2:"11";s:14:"IBLOCK_TYPE_ID";s:10:"gkexchange";s:13:"LIST_PAGE_URL";s:46:"#SITE_DIR#/gkexchange/index.php?ID=#IBLOCK_ID#";s:15:"NAV_CACHED_DATA";N;s:4:"NAME";s:18:"Выполненые проекты";s:7:"SECTION";b:0;s:8:"ELEMENTS";a:6:{i:0;s:3:"235";i:1;s:3:"236";i:2;s:3:"237";i:3;s:3:"240";i:4;s:3:"239";i:5;s:3:"238";}}s:18:"templateCachedData";a:4:{s:13:"additionalCSS";s:78:"/bitrix/templates/.default/components/bitrix/news.list/WithWhoWeWork/style.css";s:9:"frameMode";b:0;s:12:"frameModeCtx";s:81:"/bitrix/templates/.default/components/bitrix/news.list/WithWhoWeWork/template.php";s:13:"__editButtons";a:12:{i:0;a:5:{i:0;s:13:"AddEditAction";i:1;s:3:"235";i:2;s:189:"/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=11&type=gkexchange&ID=235&lang=ru&force_catalog=&filter_section=0&bxpublic=Y&from_module=iblock&return_url=%2Ftest_page.php%3Fclear_cache%3DY";i:3;s:16:"Изменить элемент";i:4;a:0:{}}i:1;a:5:{i:0;s:15:"AddDeleteAction";i:1;s:3:"235";i:2;s:142:"/bitrix/admin/iblock_element_admin.php?IBLOCK_ID=11&type=gkexchange&lang=ru&action=delete&ID=235&return_url=%2Ftest_page.php%3Fclear_cache%3DY";i:3;s:15:"Удалить элемент";i:4;a:1:{s:7:"CONFIRM";s:67:"Будет удалена вся информация, связанная с этой записью. Продолжить?";}}i:2;a:5:{i:0;s:13:"AddEditAction";i:1;s:3:"236";i:2;s:189:"/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=11&type=gkexchange&ID=236&lang=ru&force_catalog=&filter_section=0&bxpublic=Y&from_module=iblock&return_url=%2Ftest_page.php%3Fclear_cache%3DY";i:3;s:16:"Изменить элемент";i:4;a:0:{}}i:3;a:5:{i:0;s:15:"AddDeleteAction";i:1;s:3:"236";i:2;s:142:"/bitrix/admin/iblock_element_admin.php?IBLOCK_ID=11&type=gkexchange&lang=ru&action=delete&ID=236&return_url=%2Ftest_page.php%3Fclear_cache%3DY";i:3;s:15:"Удалить элемент";i:4;a:1:{s:7:"CONFIRM";s:67:"Будет удалена вся информация, связанная с этой записью. Продолжить?";}}i:4;a:5:{i:0;s:13:"AddEditAction";i:1;s:3:"237";i:2;s:189:"/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=11&type=gkexchange&ID=237&lang=ru&force_catalog=&filter_section=0&bxpublic=Y&from_module=iblock&return_url=%2Ftest_page.php%3Fclear_cache%3DY";i:3;s:16:"Изменить элемент";i:4;a:0:{}}i:5;a:5:{i:0;s:15:"AddDeleteAction";i:1;s:3:"237";i:2;s:142:"/bitrix/admin/iblock_element_admin.php?IBLOCK_ID=11&type=gkexchange&lang=ru&action=delete&ID=237&return_url=%2Ftest_page.php%3Fclear_cache%3DY";i:3;s:15:"Удалить элемент";i:4;a:1:{s:7:"CONFIRM";s:67:"Будет удалена вся информация, связанная с этой записью. Продолжить?";}}i:6;a:5:{i:0;s:13:"AddEditAction";i:1;s:3:"240";i:2;s:189:"/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=11&type=gkexchange&ID=240&lang=ru&force_catalog=&filter_section=0&bxpublic=Y&from_module=iblock&return_url=%2Ftest_page.php%3Fclear_cache%3DY";i:3;s:16:"Изменить элемент";i:4;a:0:{}}i:7;a:5:{i:0;s:15:"AddDeleteAction";i:1;s:3:"240";i:2;s:142:"/bitrix/admin/iblock_element_admin.php?IBLOCK_ID=11&type=gkexchange&lang=ru&action=delete&ID=240&return_url=%2Ftest_page.php%3Fclear_cache%3DY";i:3;s:15:"Удалить элемент";i:4;a:1:{s:7:"CONFIRM";s:67:"Будет удалена вся информация, связанная с этой записью. Продолжить?";}}i:8;a:5:{i:0;s:13:"AddEditAction";i:1;s:3:"239";i:2;s:189:"/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=11&type=gkexchange&ID=239&lang=ru&force_catalog=&filter_section=0&bxpublic=Y&from_module=iblock&return_url=%2Ftest_page.php%3Fclear_cache%3DY";i:3;s:16:"Изменить элемент";i:4;a:0:{}}i:9;a:5:{i:0;s:15:"AddDeleteAction";i:1;s:3:"239";i:2;s:142:"/bitrix/admin/iblock_element_admin.php?IBLOCK_ID=11&type=gkexchange&lang=ru&action=delete&ID=239&return_url=%2Ftest_page.php%3Fclear_cache%3DY";i:3;s:15:"Удалить элемент";i:4;a:1:{s:7:"CONFIRM";s:67:"Будет удалена вся информация, связанная с этой записью. Продолжить?";}}i:10;a:5:{i:0;s:13:"AddEditAction";i:1;s:3:"238";i:2;s:189:"/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=11&type=gkexchange&ID=238&lang=ru&force_catalog=&filter_section=0&bxpublic=Y&from_module=iblock&return_url=%2Ftest_page.php%3Fclear_cache%3DY";i:3;s:16:"Изменить элемент";i:4;a:0:{}}i:11;a:5:{i:0;s:15:"AddDeleteAction";i:1;s:3:"238";i:2;s:142:"/bitrix/admin/iblock_element_admin.php?IBLOCK_ID=11&type=gkexchange&lang=ru&action=delete&ID=238&return_url=%2Ftest_page.php%3Fclear_cache%3DY";i:3;s:15:"Удалить элемент";i:4;a:1:{s:7:"CONFIRM";s:67:"Будет удалена вся информация, связанная с этой записью. Продолжить?";}}}}}}';
return true;
?>