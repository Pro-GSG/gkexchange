<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
    IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/common.css" />




    <?$APPLICATION->ShowHead();?>

    <link href="/css/styles.css" type="text/css" rel="stylesheet" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


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

</head>
<body class="gk_pages">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5FFL36"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5FFL36');</script>
<!-- End Google Tag Manager -->
<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form", 
	"brief_popup", 
	array(
		"COMPONENT_TEMPLATE" => "brief_popup",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_DETAIL_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_NAME" => "Как в вам обращаться?",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"DEFAULT_INPUT_SIZE" => "30",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array(
		),
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "gkexchange",
		"LEVEL_LAST" => "Y",
		"LIST_URL" => "",
		"MAX_FILE_SIZE" => "0",
		"MAX_LEVELS" => "100000",
		"MAX_USER_ENTRIES" => "100000",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"PROPERTY_CODES" => array(
			0 => "52",
			1 => "53",
			2 => "54",
			3 => "55",
			4 => "56",
			5 => "NAME",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "55",
			1 => "56",
			2 => "NAME",
		),
		"RESIZE_IMAGES" => "N",
		"SEF_MODE" => "N",
		"STATUS" => "ANY",
		"STATUS_NEW" => "N",
		"USER_MESSAGE_ADD" => "",
		"USER_MESSAGE_EDIT" => "",
		"USE_CAPTCHA" => "N"
	),
	false
);?>
<?//всплывающее окно 9?>
<div id="p9" class="popup">

    <div class="success">Ваша заявка приянята!</div>
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

            <div class="button" onclick="$(this).parent().submit()"></div>
            <input type="hidden" class="form1" name="form1" value="yes">
        </form>
    </div>
</div>
<?///////////////////////////?>


<div id="header">
    <?$APPLICATION->ShowPanel();?>
    <div>
        <table>
            <tr>
                <td><?$APPLICATION->IncludeFile(SITE_DIR."include/logo.php", Array(),Array("MODE"=>"html"));?></td>
                <td>
                </td>
                <td><a href="mailto:gk@gkexchange.ru">gk@gkexchange.ru</a></td>
                <td><?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php", Array(),Array("MODE"=>"html"));?></td>
            </tr>
        </table>
    </div>
</div>


<?//var_dump($obEl);
    //arshow($arFilter);?>
<div>
<div class="wrap">
<div class="zagolovok">
    <span><?$APPLICATION->ShowProperty("page_title_top");?></span>
</div>
<div class="topText"><?$APPLICATION->IncludeFile(SITE_DIR."include/brief_top_text.php", Array(),Array("MODE"=>"html"));?></div>
<a href="../upload/brief.doc"><div class="brief-consult_pages">Скачать бриф</div></a><div class="brief-consult_pages" onclick="showBriefPopup();">Отправить бриф</div>
<div class="line"></div>
<div class="obr">
<?$APPLICATION->IncludeComponent(
    "bitrix:menu", 
    "menu", 
    array(
        "ROOT_MENU_TYPE" => "bottom",
        "MAX_LEVEL" => "1",
        "CHILD_MENU_TYPE" => "bottom",
        "USE_EXT" => "Y",
        "DELAY" => "N",
        "ALLOW_MULTI_SELECT" => "Y",
        "MENU_CACHE_TYPE" => "N",
        "MENU_CACHE_TIME" => "3600",
        "MENU_CACHE_USE_GROUPS" => "Y",
        "MENU_CACHE_GET_VARS" => array(
        ),
        "COMPONENT_TEMPLATE" => "blue_tabs"
    ),
    false
    );?>
            



            <div class="content">
                <h1><?$APPLICATION->ShowProperty("page_title");?></h1>







