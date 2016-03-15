<?
$connection = \Bitrix\Main\Application::getConnection();
$connection->queryExecute("SET NAMES 'cp1251'");
$connection = Bitrix\Main\Application::getConnection(); 
$connection->queryExecute("SET sql_mode=''");
?>