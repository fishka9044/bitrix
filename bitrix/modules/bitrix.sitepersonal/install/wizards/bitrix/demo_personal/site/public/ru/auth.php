<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

if (is_string($_REQUEST["backurl"]) && mb_strpos($_REQUEST["backurl"], "/") === 0)
{
	LocalRedirect($_REQUEST["backurl"]);
}

LocalRedirect(SITE_DIR);

$APPLICATION->SetTitle("���� �� ����");
?>
<p>�� ���������������� � ������� ��������������.</p>

<p>����������� ���������������� ������ � ������� ����� ������ ��� �������� ������� � �������� ���������� ���������� � �������������� ����������� �����. ����� ������ ������� ������ ���������� ��� ��������� �������� �����. ��� ��������� ������ �������� ������������� ��� ���������� ����������� ���������� �������, ������������� ������������ (���������, ���������, ������������) � �.�.</p>

<p><a href="<?=SITE_DIR?>">��������� �� ������� ��������</a></p>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>