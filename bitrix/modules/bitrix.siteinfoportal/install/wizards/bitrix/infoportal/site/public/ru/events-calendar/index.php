<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("??????? ??????");
?><?$APPLICATION->IncludeComponent(
	"bitrix:calendar.grid",
	"",
	Array(
		"CALENDAR_TYPE" => "events_info",
		"ALLOW_SUPERPOSE" => "N",
		"ALLOW_RES_MEETING" => "N"
	),
false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>