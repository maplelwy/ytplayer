<?php
require_once("���ļ�/ͷ.php");

//��ȡ������������

$���� = $_GET['content'];
$���� = $_GET['fontsize'];
$��ɫ = $_GET['color'];
$ģʽ = $_GET['mode'];
$Ƭʱ = $_GET['playtime'];
$������� = $_GET['id'];

$������� = intval($�������);

if($���� == '') �������('����Ϊ��');
if($Ƭʱ == '') �������('ƬʱΪ��');

if( $���� != FLY_FONTSIZE_BIG ||
	$���� != FLY_FONTSIZE_NORMAL ||
	$���� != FLY_FONTSIZE_SMALL		){
		$���� = FLY_FONTSIZE_DEFAULT;
}
if( $ģʽ != FLY_MODE_FLY ||
	$ģʽ != FLY_MODE_FLY ||
	$ģʽ != FLY_MODE_FLY	){
		$ģʽ = FLY_MODE_DEFAULT;
}
if($��ɫ == '') $��ɫ = 0xffffff;

//�ж϶����Ƿ���ڻ���������
$��� = "SELECT ��� FROM ���� WHERE ���=$�������";
$��� = $���ݿ�->��ѯ($���);
if(!$���) �������('�޴˶���');

$���߶���->���浯Ļ($�������, $����, $���߶���->�û�->���, $Ƭʱ, $��ɫ, $ģʽ, $����);
die('<message>��Ļ�ɹ�</message>');

function �������($��Ϣ){
	die('<error>' . htmlspecialchars($��Ϣ) . '</error>');
}


?>
