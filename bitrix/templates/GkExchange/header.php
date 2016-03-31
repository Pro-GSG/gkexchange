<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?

    IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<!-- Google Analytics Content Experiment code -->
<script>function utmx_section(){}function utmx(){}(function(){var
k='117677115-1',d=document,l=d.location,c=d.cookie;
if(l.search.indexOf('utm_expid='+k)>0)return;
function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
'<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
'://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
'&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
'" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
</script><script>utmx('url','A/B');</script>
<!-- End of Google Analytics Content Experiment code -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/common.css" /> 



    <?$APPLICATION->ShowHead();?>

    <link href="/css/styles.css" type="text/css" rel="stylesheet" />
    <?//<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    ?><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>   


    <script type="text/javascript" src="/js/mousewheel.js"></script>
    <script type="text/javascript" src="/js/main.js"></script> 

    <link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

    <!--[if lte IE 6]>
    <style type="text/css">

    #support-question { 
    background-image: none;
    filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='./images/question.png', sizingMethod = 'crop'); 
    }

    #support-question { left: -9px;}

    #banner-overlay {
    background-image: none;
    filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='./images/overlay.png', sizingMethod = 'crop');
    }

    </style>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/colors.css" />

    <script>
        //дата для Обратного отсчета в формате 'dd.mm.yyyy', кавычки обязательны!
        finish_date = '<?=COption::GetOptionString("grain.customsettings","timer")?>';
        //////////////////////
    </script>

    <script>
        <?// изменение главного пункта меню?>

        $( document ).ready(function() {
            var x = (window.location.href).substr((window.location.href).indexOf('/?'));
            $("li a[href ='"+x+"']").text();
            $(".dropdown").html($("li a[href ='"+x+"']").html());
        });
    </script> 




    <script>
        $(function() {
            $('.cons_titles').hover(function() {
                $('.consult').css({'border':'3px solid #f2393a', 'color':'#f2393a'});
                },
                function() {
                    $('.consult').css({'border':'3px solid #000000', 'color':'#000000'});
            });



            $('.cons_title').click(function() {
                show_popup(3);  
            });

            $('.cons_desc').click(function() {
                show_popup(2);  
            });

            $('.cons_desc2').click(function() {
                show_popup(1);   
            });           


            $('.icon').hover(function() {

                this_src=$(this).find('.icon_img').attr('src');

                /*// меняем картинки на красные при наведении
                arr_src=this_src.split('/');
                old_name_spl=arr_src[3].split('.');
                //alert(old_name_spl[0]);
                this_src.replace(old_name_spl[0], old_name_spl[0]+'_red');
                $(this).find('.icon_img').attr('src', arr_src[0]+'/'+arr_src[1]+'/'+arr_src[2]+'/'+old_name_spl[0]+'_red.png');
                */

                /*$(this).find('.icon_div').css({'background-position' : '0 -47px'});*/



                // меняем стрелки на красные при наведении
                this_arrow_src=$(this).find('.arrow').attr('src');    
                if ( this_arrow_src)  {                 
                    arrow_arr_src=this_arrow_src.split('/');
                    old_name_spl_arrow=arrow_arr_src[3].split('.');
                    this_arrow_src.replace(old_name_spl_arrow[0], old_name_spl_arrow[0]+'_red');
                    $(this).find('.arrow').attr('src', arrow_arr_src[0]+'/'+arrow_arr_src[1]+'/'+arrow_arr_src[2]+'/'+old_name_spl_arrow[0]+'_red.png');
                }

                },
                function() {
                    //$(this).find('.icon_div').css({'background-position' : '0 0'});
                    $(this).find('.icon_img').attr('src',this_src);
                    $(this).find('.arrow').attr('src',this_arrow_src);
            }); 
        });   
    </script>
    <?
        if (isset($_GET["utm_content"]))
            $utm_content=strtoupper($_GET["utm_content"]);
        else
            $utm_content="INTEGRACIA";

        define("IBLOCK_ID",8);

        $arFilter=array(
            "IBLOCK_ID" => IBLOCK_ID,
            "CODE" => $utm_content,
        );

        $arSelectRows=array("ID", "IBLOCK_ID");


        $dbEl = CIBlockElement::GetList(Array(), $arFilter, $arSelectRows);

        if ($dbEl->SelectedRowsCount()<1) {
            $arFilter["CODE"]="INTEGRACIA";
            $dbEl = CIBlockElement::GetList(Array(), $arFilter, $arSelectRows);    
        }

        if($obEl = $dbEl->GetNextElement())
        {   
            $props = $obEl->GetProperties();
        }


    ?>



</head>
<body> 
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5FFL36"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5FFL36');</script>
<!-- End Google Tag Manager -->
<?//всплывающее окно 9?>
<div id="p9" class="popup">

    <div class="success">Ваша заявка принята!</div>
    <div class="button" onclick="popup_close(this)"></div>

</div>
<?///////////////////////////?>


<?//всплывающее окно 0?>
<div id="p0" class="popup">
    <div class="popup_close" title="закрыть форму" onclick="popup_close(this)"></div>
    <div class="popup_desc"><span>*</span>обязательно для заполнения</div>

    <div class="popup_content">
        <div class="popud_head"><span>Перезвоните</span> мне</div>
        <div class="popup_hr"></div>

        <form action="" id="form0" method="post">
            <table class="popup_fields">
                <tr>
                    <td>Контактное лицо <span>*</span></td>
                    <td><div><input type="text" name="name" class="req"></div></td>
                </tr>

                <tr>
                    <td>Телефон <span>*</span></td>
                    <td><div><input type="text" name="phone" class="req"></div></td>
                </tr>
                <tr style="display: none;"><td></td></tr>
            </table>

            <div class="button" onclick="$(this).parent().submit(); "></div>
            <input type="hidden" class="form0" name="form0" value="yes">
        </form>
    </div>
</div>
<?///////////////////////////?>

<?//всплывающее окно 1?>
<div id="p1" class="popup">
    <div class="popup_close" title="закрыть форму" onclick="popup_close(this)"></div>
    <div class="popup_desc"><span>*</span>обязательно для заполнения</div>

    <div class="popup_content">
        <div class="popud_head"><span>Форма заказа</span> работ по 1С</div>
        <div class="popup_hr"></div>

        <form action="" id="form1" method="post">
            <table class="popup_fields">
                <tr>
                    <td>Контактное лицо <span>*</span></td>
                    <td><div><input type="text" name="name" class="req"></div></td>
                </tr>

                <tr>
                    <td>Название организации <span>*</span></td>
                    <td><div><input type="text" name="company" class="req"></div></td>
                </tr>

                <tr>
                    <td>Телефон <span>*</span></td>
                    <td><div><input type="text" name="phone" class="req"></div></td>
                </tr>

                <tr>
                    <td>Email <span>*</span></td>
                    <td><div><input type="text" name="email" class="req"></div></td>
                </tr>

                <tr>
                    <td>Пожелания</td>
                    <td><div><textarea name="text"></textarea></div></td>
                </tr>
            </table>

            <div class="button4" onclick="$(this).parent().submit();yaCounter23705659.reachGoal('ORDER51'); return true;"></div>
            <input type="hidden" class="form1" name="form1" value="yes">
        </form>
    </div>
</div>


<?///////////////////////////?>






<div id="nav" onclick="yaCounter23705659.reachGoal('ORDER8'); return true;">

    <div class="nav_block active" id="n1" onclick="main_scroll(1)">
        <div class="block_name"><?//Внимание, акция! ?></div>
    </div>

    <div class="nav_block" id="n2" onclick="main_scroll(2)">
        <div class="block_name"><?//Почему мы ?></div>
    </div>

    <div class="nav_block" id="n3" onclick="main_scroll(3)">
        <div class="block_name"><?//Консультация специалиста?></div>
    </div>

    <div class="nav_block" id="n4" onclick="main_scroll(4)">
        <div class="block_name"><?//Решение всех проблем ?></div>
    </div>

    <div class="nav_block" id="n5" onclick="main_scroll(5)">
        <div class="block_name"><?//Настройка 1С ?> </div>
    </div>

    <div class="nav_block" id="n6" onclick="main_scroll(6)">
        <div class="block_name"><?//Как мы работаем ?></div>
    </div>


</div>


<div id="header"> 
    <?$APPLICATION->ShowPanel();?> 
    <div> 
        <table> 
            <tr> 
                <td style="position: relative; left: -20px;"><?$APPLICATION->IncludeFile(SITE_DIR."include/logo.php", Array(),Array("MODE"=>"html"));?></td> 
                <td><? // menu ?><nav id="nav_menu_main"><li ><a onclick="color_change(); yaCounter23705659.reachGoal('ORDER7'); return true;" class="dropdown" href="javascript:void(0);" tabindex="1" style="color: black !important;" >Интеграция 1С и 1С-Битрикс</a> 
                            <ul id="nav_menu_items" class="sub-menu"> 
                                <li> 
                                    <!--                       
                                    <a href="/" onclick="change_item(0)">Выгрузка и загрузка данных в 1С-Битрикс</a> 
                                    </li> 
                                    <li> 
                                    <a href="/" onclick="change_item(1)">Интеграция 1С через API</a> 
                                    </li> 
                                    <li> 
                                    <a href="/" onclick="change_item(2)">Интеграция 1С-Битрикс через API</a> 
                                    </li> 
                                    <li> 
                                    <a href="/" onclick="change_item(3)">Интеграция 1С и Битрикс24</a> 
                                    </li> 
                                    <li> 
                                    <a href="/" onclick="change_item(4)">Интеграция интернет-магазина и Битрикс24</a> 

                                    -->
                                    <?$APPLICATION->IncludeComponent( 
                                            "bitrix:menu", 
                                            "new_menu1", 
                                            Array( 
                                            ) 
                                        );?> 
                                </li> 
                            </ul> 
                        </li> 
                    </nav>
                </td>
                <td>
                    <a href="javascript:void(0)" onclick="yaCounter23705659.reachGoal('ORDER1'); return true;" style="visibility: hidden;">
                        <div onclick="show_popup(0);">перезвоните мне</div></a>
                </td>
                <td><?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php", Array(),Array("MODE"=>"html"));?></td>
                <td><a href="mailto:gk@gkexchange.ru">gk@gkexchange.ru</a></td>
            </tr>
        </table>
    </div>
</div>






<div class="block block1" id="b1">
    <div class="i1" style="display: none;"><?$APPLICATION->IncludeFile(SITE_DIR."include/i1.php", Array(),Array("MODE"=>"html"));?></div>
    <div class="t1">
        <div class="h1">
            <img src="<?=CFile::GetPath($props["H1"]["VALUE"]);?>" />
        </div>
        <div class="h2"><?
            if ($props["TEXT1"]["VALUE"]["TYPE"]=="html")
                echo $props["TEXT1"]["~VALUE"]["TEXT"];
            else
                echo $props["TEXT1"]["VALUE"]["TEXT"];
        ?></div>

    </div>
    <div id=new_form_div>


        <!-- New_Offer form -->
        <form id="sOF1">
            <table class="offer" border="0" style="border-collapse: collapse">
                <tr>
                    <td><div><span class="bold">Получить</span><br/>для работ по сайту:</div></td><td><div><span class="bold">5 000 РУБЛЕЙ</span></div></td>
                </tr>
                <tr>
                    <td colspan="2"><div>
                        <input id="i1email" class="input_foc"  placeholder="Ваш e-mail" value="" required /></div>
                    </td>
                </tr>
                <tr>
                    <td><div>
                        <input id="i2name" class="input_foc" name="offer_name" placeholder="Ваше имя" value="" required  /></div> 
                    </td>
                    <td>
                        <div id="knopka" class="knopka" onclick="check_form();yaCounter23705659.reachGoal('ORDER2'); return true;">Отправить заявку</div>
                    </td>
                </tr>
            </table>   
        </form>         



        <script>

            function check_form(){
                var strmail = $("#i1email").val();                
                var strname = $("#i2name").val();
                var re_mail = /^[\w\.\d-_]+@[\w\.\d-_]+\.\w{2,4}$/i;
                var re_name = /^[а-яА-ЯёЁ]+$/i;
                if (isEmpty(strmail) || isEmpty(strname)) alert("Заполните все поля");                                      
                else if (!re_mail.test(strmail) && !isEmpty(strname))  alert("Введите Ваш email корректно");
                    else if (!re_name.test(strname) && !isEmpty(strmail)) alert("Введите Ваше имя корректно");
                        else if (re_mail.test(strmail) && re_name.test(strname)) send_offer(strmail,strname);
            }
            function isEmpty(vava){
                return (vava == null) || (vava.length == 0);
            }



            function send_offer(strmail,strname) { 
                $.post( "/ajax/offer.php",{ name : strname, email : strmail }, function(data){ 
                    dataLayer.push({'event': 'form1'});
                    if(data=="OK"){
                        $("#knopka").css("background","green").html("Заявка отправлена");
                        $("#knopka").css("pointerEvents","none");                                 
                    }
                });




            }   
        </script>


        <!--       
        <a href="javascript:void(0)" onclick="yaCounter23705659.reachGoal('ORDER2'); return true;">
        <div class="button" onclick="show_popup(1)"></div>
        </a>
        <div class="new_menu">
        <div class="krugi">

        <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "new_menu",
                Array(
                )
            );?>


        </div>

        </div>     


        -->

    </div>

    <div class="timer" style="display: none;">
        <div class="desc">До конца осталось</div>
        <div class="sub_desc"><span>*</span>акция действует до 28 декабря</div>

        <div class="nums days">
            <div class="num">14</div>
            <div class="num_name">дней</div>
        </div>

        <div class="nums hours">
            <div class="num">23</div>
            <div class="num_name">часа</div>
        </div>

        <div class="nums minutes">
            <div class="num">57</div>
            <div class="num_name">минут</div>
        </div>

        <div class="nums seconds">
            <div class="num">08</div>
            <div class="num_name">секунд</div>
        </div>
    </div>

    <div class="action" style="display: none;">
        <img src="<?=CFile::GetPath($props["TEXT2"]["VALUE"]);?>" />
    </div>

</div>



<?//var_dump($obEl);
    //arshow($arFilter);?>




<div class="block" id="b2">
    <div class="t2">
        <div class="h1">
            <img src="<?=CFile::GetPath($props["H2"]["VALUE"]);?>" />
        </div>


        <?foreach($props["LIST1"]["VALUE"] as $el):

                $num=strstr($el," ",true);
                if (ctype_digit($num)) {
                    $el=substr($el,strlen($num)+1);    
                }
            ?>  
            <div class="list">
                <div class="list_circle"> <?=$num?></div>
                <?=$el?>
            </div>
            <?endforeach;?>    






    </div>


    <div class="pluses">
        <div class="pluses_title"><?$APPLICATION->IncludeFile(SITE_DIR."include/pluses.php", Array(),Array("MODE"=>"html"));?></div>
        <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "Pluses",
                Array(
                    "IBLOCK_TYPE" => "gkexchange",
                    "IBLOCK_ID" => "4",
                    "NEWS_COUNT" => "20",
                    "SORT_BY1" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_BY2" => "NAME",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => array("NAME", ""),
                    "PROPERTY_CODE" => array("", ""),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "36000000",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "N",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "DISPLAY_TOP_PAGER" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "PAGER_TITLE" => "Новости",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_OPTION_ADDITIONAL" => ""
                )
            );?>
       <a href="/integration/integratsiya-1s-i-1s-bitriks/"><div class="button-detail" onclick="yaCounter23705659.reachGoal('ORDER9');">узнать подробнее</div></a>
    </div>


</div>



<div class="block" id="b3">
    <div class="ox"><?$APPLICATION->IncludeFile(SITE_DIR."include/ox.php", Array(),Array("MODE"=>"html"));?></div>
    <div class="slogan"><?
        if ($props["H3"]["VALUE"]["TYPE"]=="html")
            echo $props["H3"]["~VALUE"]["TEXT"];
        else
            echo $props["H3"]["VALUE"]["TEXT"];
    ?></div>

    <div class="order">
        <a href="javascript:void(0)" onclick="yaCounter23705659.reachGoal('ORDER3'); return true;">
            <div class="button2" onclick="show_popup(2)">
        </a>
    </div>
    Бесплатную консультацию специалиста
</div>

</div>



<div class="block" id="b4">
    <div class="h4"><?$APPLICATION->IncludeFile(SITE_DIR."include/h4.php", Array(),Array("MODE"=>"html"));?></div>

    <div class="problems">
        <ul>
            <?$i=0; 
                foreach($props["LIST2"]["VALUE"] as $el):?>
                <li>
                    <?if ($i==0) 
                            echo "<span>".$el."</span>";
                        else
                            echo $el; 
                        $i++;
                    ?>
                </li>  
                <?endforeach;?>
        </ul>
        <div class="and_others">и многое другое...</div>
        <div class="dash"></div>

        <a href="/problems/"><div class="button-detail" onclick="yaCounter23705659.reachGoal('ORDER10');">узнать подробнее</div></a>
    </div>


</div>



<div class="block" id="b5">
    <div class="leps"><?$APPLICATION->IncludeFile(SITE_DIR."include/leps.php", Array(),Array("MODE"=>"html"));?></div>
    <div class="slogan"><?$APPLICATION->IncludeFile(SITE_DIR."include/slogan2.php", Array(),Array("MODE"=>"html"));?></div>


    <div class="order">
        <a href="javascript:void(0)" onclick="yaCounter23705659.reachGoal('ORDER4'); return true;">
            <div class="button3" onclick="show_popup(3);"></div>
        </a>
        Консультацию по интеграции
    </div>

</div>



<div class="block" id="b6">

    <?$APPLICATION->IncludeComponent(
            "bitrix:news.list", 
            "WithWhoWeWork", 
            array(
                "IBLOCK_TYPE" => "gkexchange",
                "IBLOCK_ID" => "11",
                "NEWS_COUNT" => "20",
                "SORT_BY1" => "SORT",
                "SORT_ORDER1" => "ASC",
                "SORT_BY2" => "NAME",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "",
                "FIELD_CODE" => array(
                    0 => "NAME",
                    1 => "PREVIEW_TEXT",
                    2 => "PREVIEW_PICTURE",
                    3 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "PROJECT_NAME",
                    1 => "SITE_NAME",
                    2 => "PRICE",
                    3 => "",
                ),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "AJAX_OPTION_HISTORY" => "N",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "N",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "Y",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "AJAX_OPTION_ADDITIONAL" => "",
                "COMPONENT_TEMPLATE" => "WithWhoWeWork",
                "SET_BROWSER_TITLE" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_META_DESCRIPTION" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => ""
            ),
            false
        );?>
        <div class="consult-new-button" onclick="show_popup(2); yaCounter23705659.reachGoal('ORDER3'); return true;">заказать консультацию</div>







    <div class="bomb_text"><script> 
            var d=new Date(); 
            var day=d.getDate(); 
            var month=d.getMonth() + 1; 
            document.write(day + "." + month); 
        </script></div>

    <div class="attention"><span>внимание! </span>Не забудьте получить бесплатно 5000 рублей на счет.</div>

    </div> 
  

