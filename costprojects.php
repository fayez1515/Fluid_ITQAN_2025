<?php
	$currDir = dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
//	include_once("$currDir/header.php");
/* grant access to all users who have access to the projects table */
	$order_from = get_sql_from('projects');
	if(!$order_from) exit(error_message('Access denied!', false));
/* get invoice */
	$order_id = intval($_REQUEST['id']);
	 if(!$order_id) exit(error_message('Invalid order ID!', false));
/* retrieve order info */
	$order_fields = get_sql_fields('projects');
	$res = sql("select {$order_fields} from {$order_from} and id={$order_id}", $eo);
	if(!($order = db_fetch_assoc($res))) exit(error_message('Order not found!', false));
//var_dump($order);
/* retrieve order items */
	$items = array();
	$order_total = 0;
	$item_fields = get_sql_fields('_qtn_items');
	$item_from = get_sql_from('_qtn_items');
	$res = sql("select {$item_fields} from {$item_from} and _qtn_items.id_projects={$order_id}", $eo);
	while($row = db_fetch_assoc($res)){
		$row['LineTotal'] = str_replace(' ', '', $row['value']) * $row['qty'];
		$items[] = $row;
		$order_total += $row['LineTotal'];
	}
/* retrieve digital signatures */
	$itemsb = array();
//$order_totalb = 0;
	$item_fieldsb = get_sql_fields('digital_signatures');
	$item_fromb = get_sql_from('digital_signatures');
	$resb = sql("select {$item_fieldsb} from {$item_fromb} and digital_signatures.projects_link={$order_id}", $eo);
	while($row = db_fetch_assoc($resb)){
	$itemsb[] = $row;
	}
//var_dump($items);
include_once("$currDir/header.php");


	?>
	
	


<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">



<head>





<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
x\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<style id="itqan-Variables_22093_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
.font512171
	{color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Black", sans-serif;
	mso-font-charset:0;}
.xl7712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:2.0pt double windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl10112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:2.0pt double windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:2.0pt double windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:2.0pt double windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Black", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Black", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Black", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:2.0pt double windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:right;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:right;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:right;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:right;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:right;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:right;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
-->
</style>
</head>

	<title><?php echo $order['id']; ?></title>


<body>
<!--[if !excel]><![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="itqan-Variables_22093" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=751 class=xl7712171
 style='border-collapse:collapse;table-layout:fixed;width:557pt'>
 <col class=xl8812171 width=58 style='mso-width-source:userset;mso-width-alt:
 2048;width:43pt'>
 <col class=xl7712171 width=14 style='mso-width-source:userset;mso-width-alt:
 512;width:11pt'>
 <col class=xl7712171 width=76 style='mso-width-source:userset;mso-width-alt:
 2702;width:57pt'>
 <col class=xl7712171 width=8 style='mso-width-source:userset;mso-width-alt:
 284;width:6pt'>
 <col class=xl7712171 width=62 style='mso-width-source:userset;mso-width-alt:
 2190;width:46pt'>
 <col class=xl7712171 width=6 style='mso-width-source:userset;mso-width-alt:
 227;width:5pt'>
 <col class=xl7712171 width=12 style='mso-width-source:userset;mso-width-alt:
 426;width:9pt'>
 <col class=xl7712171 width=19 span=23 style='mso-width-source:userset;
 mso-width-alt:682;width:14pt'>
 <col class=xl7712171 width=20 style='mso-width-source:userset;mso-width-alt:
 711;width:15pt'>
 <col class=xl7712171 width=58 style='mso-width-source:userset;mso-width-alt:
 2048;width:43pt'>
 <tr class=xl7712171 height=14 style='height:10.2pt'>
  <td colspan=32 height=14 class=xl8612171 dir=LTR width=751 style='height:
  10.2pt;width:557pt'><a name="RANGE!A1:AF26"><div
  class="hidden-print"><br>
    <div class="btn-group"><br>
    <button type="button" id="print"
  onclick="window.print();" title="Print" class="btn
  btn-primary"><i class="glyphicon
  glyphicon-print"></i> Print</button><span
  style='mso-spacerun:yes'>    </span><br>
    </div><br>
    </div></a></td>
 </tr>
 <tr class=xl7912171 height=19 style='mso-height-source:userset;height:14.4pt'>
  <td colspan=32 height=19 class=xl8612171 dir=LTR width=751 style='height:
  14.4pt;width:557pt'><p><img src="images/<?php echo
  $order['header']; ?>.png" style="width: 1000px;"
  class="fr-fic fr-dib"></p></td>
 </tr>
 <tr class=xl7712171 height=14 style='height:10.8pt'>
  <td height=14 class=xl8612171 dir=LTR width=58 style='height:10.8pt;
  width:43pt'></td>
  <td class=xl8612171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl8612171 dir=LTR width=76 style='width:57pt'></td>
  <td class=xl8612171 dir=LTR width=8 style='width:6pt'></td>
  <td class=xl8612171 dir=LTR width=62 style='width:46pt'></td>
  <td class=xl8612171 dir=LTR width=6 style='width:5pt'></td>
  <td class=xl8612171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=20 style='width:15pt'></td>
  <td class=xl8612171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr class=xl7712171 height=57 style='mso-height-source:userset;height:42.6pt'>
  <td colspan=32 height=57 class=xl10712171 dir=LTR width=751 style='border-right:
  2.0pt double black;height:42.6pt;width:557pt'>COST SHEET<br>
    <font class="font512171">(ESTIMATED)</font></td>
 </tr>
 <tr class=xl8212171 height=11 style='height:8.4pt'>
  <td height=11 class=xl8112171 dir=LTR width=58 style='height:8.4pt;
  width:43pt'></td>
  <td class=xl8112171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl8112171 dir=LTR width=76 style='width:57pt'></td>
  <td class=xl8112171 dir=LTR width=8 style='width:6pt'></td>
  <td class=xl8112171 dir=LTR width=62 style='width:46pt'></td>
  <td class=xl8112171 dir=LTR width=6 style='width:5pt'></td>
  <td class=xl8112171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=20 style='width:15pt'></td>
  <td class=xl8112171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr class=xl8212171 height=14 style='height:10.2pt'>
  <td height=14 class=xl8112171 dir=LTR width=58 style='height:10.2pt;
  width:43pt'></td>
  <td colspan=30 class=xl11012171 dir=LTR width=635 style='width:471pt'>Project:
  <?php echo $order['name']; ?></td>
  <td class=xl8112171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr class=xl8212171 height=11 style='height:8.4pt'>
  <td height=11 class=xl8112171 dir=LTR width=58 style='height:8.4pt;
  width:43pt'></td>
  <td class=xl8112171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl8112171 dir=LTR width=76 style='width:57pt'></td>
  <td class=xl8112171 dir=LTR width=8 style='width:6pt'></td>
  <td class=xl8112171 dir=LTR width=62 style='width:46pt'></td>
  <td class=xl8112171 dir=LTR width=6 style='width:5pt'></td>
  <td class=xl8112171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8112171 dir=LTR width=20 style='width:15pt'></td>
  <td class=xl8112171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr class=xl7712171 height=14 style='mso-height-source:userset;height:10.8pt'>
  <td height=14 class=xl8912171 dir=LTR width=58 style='height:10.8pt;
  width:43pt'></td>
  <td colspan=2 class=xl10012171 dir=LTR>Date</td>
  <td class=xl10012171 dir=LTR></td>
  <td colspan=13 class=xl8712171 dir=LTR width=270 style='width:200pt'><?php
  echo $order['date']; ?></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td colspan=8 rowspan=4 class=xl11112171 dir=LTR width=153 style='border-right:
  2.0pt double black;width:113pt'>QTN # <?php echo $order['id']; ?></td>
  <td class=xl7812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr class=xl7712171 height=14 style='mso-height-source:userset;height:10.2pt'>
  <td height=14 class=xl8912171 dir=LTR width=58 style='height:10.2pt;
  width:43pt'></td>
  <td colspan=2 class=xl10012171 dir=LTR>Customer</td>
  <td class=xl10012171 dir=LTR></td>
  <td colspan=13 class=xl8712171 dir=LTR width=270 style='width:200pt'><?php
  echo $order['customer']; ?></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr class=xl7712171 height=14 style='mso-height-source:userset;height:10.8pt'>
  <td height=14 class=xl8912171 dir=LTR width=58 style='height:10.8pt;
  width:43pt'></td>
  <td colspan=2 class=xl10012171 dir=LTR>Subject</td>
  <td class=xl10012171 dir=LTR></td>
  <td colspan=13 class=xl8712171 dir=LTR width=270 style='width:200pt'><?php
  echo $order['subject']; ?></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr class=xl7712171 height=14 style='mso-height-source:userset;height:10.8pt'>
  <td height=14 class=xl8912171 dir=LTR width=58 style='height:10.8pt;
  width:43pt'></td>
  <td colspan=2 class=xl10012171 dir=LTR>Sales</td>
  <td class=xl10012171 dir=LTR></td>
  <td colspan=13 class=xl8712171 dir=LTR width=270 style='width:200pt'><?php
  echo $order['sales_man']; ?></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr class=xl7712171 height=14 style='mso-height-source:userset;height:10.2pt'>
  <td height=14 class=xl8912171 dir=LTR width=58 style='height:10.2pt;
  width:43pt'></td>
  <td colspan=2 class=xl10012171 dir=LTR>Approval Date</td>
  <td class=xl10012171 dir=LTR></td>
  <td colspan=13 class=xl8712171 dir=LTR width=270 style='width:200pt'><?php
  echo $order['po_start_date']; ?></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td colspan=8 rowspan=2 class=xl11712171 dir=LTR width=153 style='border-right:
  2.0pt double black;border-bottom:2.0pt double black;width:113pt'><?php
  echo $order['total']; ?> SR</td>
  <td class=xl7812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr class=xl7712171 height=14 style='mso-height-source:userset;height:10.8pt'>
  <td height=14 class=xl8912171 dir=LTR width=58 style='height:10.8pt;
  width:43pt'></td>
  <td colspan=2 class=xl10012171 dir=LTR>Customer Side</td>
  <td class=xl10012171 dir=LTR></td>
  <td colspan=13 class=xl8712171 dir=LTR width=270 style='width:200pt'><?php
  echo $order['con_customer_manager']; ?></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr class=xl7712171 height=18 style='height:13.2pt'>
  <td height=18 class=xl8912171 dir=LTR width=58 style='height:13.2pt;
  width:43pt'></td>
  <td class=xl8512171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl8512171 dir=LTR width=76 style='width:57pt'></td>
  <td class=xl8012171 dir=LTR width=8 style='width:6pt'></td>
  <td class=xl8012171 dir=LTR width=62 style='width:46pt'></td>
  <td class=xl8012171 dir=LTR width=6 style='width:5pt'></td>
  <td class=xl8012171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8412171 dir=LTR width=20 style='width:15pt'></td>
  <td class=xl7812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.6pt'>
  <td height=21 class=xl8812171 dir=LTR width=58 style='height:15.6pt;
  width:43pt'></td>
  <td class=xl9012171 dir=LTR width=14 style='width:11pt'>-</td>
  <td class=xl10112171 dir=LTR width=76 style='width:57pt'>Materials cost</td>
  <td class=xl13912171 dir=RTL align=left width=8 style='width:6pt'>:</td>
  <td class=xl12512171 dir=RTL width=62 style='width:46pt'><?php echo
  $order['total_material_cost']; ?></td>
  <td class=xl12612171 dir=RTL width=6 style='width:5pt'></td>
  <td class=xl12312171 dir=LTR width=12 style='width:9pt'>-</td>
  <td colspan=24 class=xl10112171 dir=LTR width=457 style='border-right:2.0pt double black;
  width:337pt'>Estimated as per the BOQ of quotation</td>
  <td class=xl8812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.6pt'>
  <td height=21 class=xl8812171 dir=LTR width=58 style='height:15.6pt;
  width:43pt'></td>
  <td class=xl9112171 dir=LTR width=14 style='border-top:none;width:11pt'>-</td>
  <td class=xl9912171 dir=LTR width=76 style='border-top:none;width:57pt'>Our
  labour cost</td>
  <td class=xl13712171 dir=RTL align=left width=8 style='border-top:none;
  width:6pt'>:</td>
  <td class=xl12712171 dir=RTL width=62 style='border-top:none;width:46pt'><?php
  echo $order['labour_cost']; ?></td>
  <td class=xl12812171 dir=RTL width=6 style='border-top:none;width:5pt'></td>
  <td class=xl10212171 dir=LTR width=12 style='border-top:none;width:9pt'>-</td>
  <td colspan=2 class=xl9912171 dir=LTR width=38 style='width:28pt'>Details:</td>
  <td colspan=2 class=xl10212171 dir=LTR width=38 style='width:28pt'><?php
  echo $order['hours']; ?></td>
  <td colspan=2 class=xl10212171 dir=LTR width=38 style='width:28pt'>Hours</td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'>x</td>
  <td colspan=2 class=xl10212171 dir=LTR width=38 style='width:28pt'><?php
  echo $order['technicains']; ?></td>
  <td colspan=3 class=xl10212171 dir=LTR width=57 style='width:42pt'>Technician</td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'>x</td>
  <td colspan=3 class=xl10212171 dir=LTR width=57 style='width:42pt'><?php
  echo $order['hour_cost']; ?> SR</td>
  <td colspan=8 class=xl9912171 dir=LTR width=153 style='border-right:2.0pt double black;
  width:113pt'>(<?php echo $order['notes_labour_cost']; ?>)</td>
  <td class=xl8312171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.6pt'>
  <td height=21 class=xl8812171 dir=LTR width=58 style='height:15.6pt;
  width:43pt'></td>
  <td class=xl9112171 dir=LTR width=14 style='border-top:none;width:11pt'>-</td>
  <td class=xl9912171 dir=LTR width=76 style='border-top:none;width:57pt'>Other
  cost 1</td>
  <td class=xl13712171 dir=RTL align=left width=8 style='border-top:none;
  width:6pt'>:</td>
  <td class=xl12712171 dir=RTL width=62 style='border-top:none;width:46pt'><?php
  echo $order['other_cost']; ?></td>
  <td class=xl12812171 dir=RTL width=6 style='border-top:none;width:5pt'></td>
  <td class=xl10212171 dir=LTR width=12 style='border-top:none;width:9pt'>-</td>
  <td colspan=24 class=xl9912171 dir=LTR width=457 style='border-right:2.0pt double black;
  width:337pt'><?php echo $order['notes_other_cost']; ?></td>
  <td class=xl8812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.6pt'>
  <td height=21 class=xl8812171 dir=LTR width=58 style='height:15.6pt;
  width:43pt'></td>
  <td class=xl9112171 dir=LTR width=14 style='border-top:none;width:11pt'>-</td>
  <td class=xl9912171 dir=LTR width=76 style='border-top:none;width:57pt'>Other
  cost 2</td>
  <td class=xl13712171 dir=RTL align=left width=8 style='border-top:none;
  width:6pt'>:</td>
  <td class=xl12712171 dir=RTL width=62 style='border-top:none;width:46pt'><?php
  echo $order['other_cost2']; ?></td>
  <td class=xl12812171 dir=RTL width=6 style='border-top:none;width:5pt'></td>
  <td class=xl10212171 dir=LTR width=12 style='border-top:none;width:9pt'>-</td>
  <td colspan=24 class=xl9912171 dir=LTR width=457 style='border-right:2.0pt double black;
  width:337pt'><?php echo $order['notes_other_cost2']; ?></td>
  <td class=xl8812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.6pt'>
  <td height=21 class=xl8812171 dir=LTR width=58 style='height:15.6pt;
  width:43pt'></td>
  <td class=xl9212171 dir=LTR width=14 style='width:11pt'>-</td>
  <td class=xl9912171 dir=LTR width=76 style='border-top:none;width:57pt'>Other
  cost 3</td>
  <td class=xl13812171 dir=RTL align=left width=8 style='width:6pt'>:</td>
  <td class=xl12912171 dir=RTL width=62 style='width:46pt'><?php echo
  $order['other_cost3']; ?></td>
  <td class=xl13012171 dir=RTL width=6 style='width:5pt'></td>
  <td class=xl12412171 dir=LTR width=12 style='border-top:none;width:9pt'>-</td>
  <td colspan=24 class=xl10512171 dir=LTR width=457 style='border-right:2.0pt double black;
  width:337pt'><?php echo $order['notes_other_cost3']; ?></td>
  <td class=xl8812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.6pt'>
  <td height=21 class=xl8812171 dir=LTR width=58 style='height:15.6pt;
  width:43pt'></td>
  <td class=xl9312171 dir=LTR width=14 style='border-top:none;width:11pt'>-</td>
  <td class=xl14312171 dir=LTR width=76 style='width:57pt'>Total cost</td>
  <td class=xl14112171 dir=RTL align=left width=8 style='border-top:none;
  width:6pt'>:</td>
  <td class=xl13112171 dir=RTL width=62 style='border-top:none;width:46pt'><?php
  echo $order['total_cost']; ?></td>
  <td class=xl13212171 dir=RTL width=6 style='border-top:none;width:5pt'><u
  style='visibility:hidden;mso-ignore:visibility'></u></td>
  <td class=xl14512171 dir=LTR width=12 style='border-top:none;width:9pt'>-</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9612171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9712171 dir=LTR width=19 style='border-top:none;border-left:none;
  width:14pt'>---</td>
  <td class=xl9712171 dir=LTR width=19 style='border-top:none;width:14pt'>---</td>
  <td class=xl9712171 dir=LTR width=19 style='border-top:none;width:14pt'>---</td>
  <td class=xl9712171 dir=LTR width=19 style='border-top:none;width:14pt'>---</td>
  <td class=xl9712171 dir=LTR width=19 style='border-top:none;width:14pt'>---</td>
  <td class=xl9712171 dir=LTR width=19 style='border-top:none;width:14pt'>---</td>
  <td class=xl9812171 dir=LTR width=20 style='border-top:none;width:15pt'>---</td>
  <td class=xl8812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.6pt'>
  <td height=21 class=xl8812171 dir=LTR width=58 style='height:15.6pt;
  width:43pt'></td>
  <td class=xl9012171 dir=LTR width=14 style='border-top:none;width:11pt'>-</td>
  <td class=xl10112171 dir=LTR width=76 style='border-top:none;width:57pt'>QTN
  Value</td>
  <td class=xl13912171 dir=RTL align=left width=8 style='border-top:none;
  width:6pt'>:</td>
  <td class=xl12512171 dir=RTL width=62 style='border-top:none;width:46pt'><?php
  echo $order['total']; ?></td>
  <td class=xl12612171 dir=RTL width=6 style='border-top:none;width:5pt'></td>
  <td class=xl12312171 dir=LTR width=12 style='border-top:none;width:9pt'>-</td>
  <td colspan=24 class=xl10112171 dir=LTR width=457 style='border-right:2.0pt double black;
  width:337pt'>Without VAT</td>
  <td class=xl8812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.6pt'>
  <td height=21 class=xl8812171 dir=LTR width=58 style='height:15.6pt;
  width:43pt'></td>
  <td class=xl9412171 dir=LTR width=14 style='width:11pt'>-</td>
  <td class=xl12212171 dir=LTR width=76 style='width:57pt'>Gross Profit</td>
  <td class=xl14012171 dir=RTL align=left width=8 style='width:6pt'>:</td>
  <td class=xl13312171 dir=RTL width=62 style='width:46pt'><?php echo
  $order['gp']; ?></td>
  <td class=xl13412171 dir=RTL width=6 style='width:5pt'></td>
  <td class=xl10212171 dir=LTR width=12 style='border-top:none;width:9pt'>-</td>
  <td colspan=24 class=xl9912171 dir=LTR width=457 style='border-right:2.0pt double black;
  width:337pt'><?php echo $order['gp_rules']; ?></td>
  <td class=xl8812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.6pt'>
  <td height=21 class=xl8812171 dir=LTR width=58 style='height:15.6pt;
  width:43pt'></td>
  <td class=xl9512171 dir=LTR width=14 style='border-top:none;width:11pt'>-</td>
  <td class=xl14412171 dir=LTR width=76 style='border-top:none;width:57pt'>GP %</td>
  <td class=xl14212171 dir=RTL align=left width=8 style='border-top:none;
  width:6pt'>:</td>
  <td class=xl13512171 dir=LTR width=62 style='border-top:none;width:46pt'><?php
  echo $order['gp_ratio']; ?> %</td>
  <td class=xl13612171 dir=RTL width=6 style='border-top:none;width:5pt'><u
  style='visibility:hidden;mso-ignore:visibility'></u></td>
  <td class=xl12412171 dir=LTR width=12 style='border-top:none;width:9pt'>-</td>
  <td colspan=24 class=xl10512171 dir=LTR width=457 style='border-right:2.0pt double black;
  width:337pt'><?php echo $order['gp_notexxx']; ?></td>
  <td class=xl8812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr height=14 style='height:10.8pt'>
  <td height=14 class=xl8812171 dir=LTR width=58 style='height:10.8pt;
  width:43pt'></td>
  <td class=xl7712171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl7712171 dir=LTR width=76 style='width:57pt'></td>
  <td class=xl8812171 dir=LTR width=8 style='width:6pt'></td>
  <td class=xl8812171 dir=LTR width=62 style='width:46pt'></td>
  <td class=xl8812171 dir=LTR width=6 style='width:5pt'></td>
  <td class=xl8812171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8812171 dir=LTR width=20 style='width:15pt'></td>
  <td class=xl8812171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr height=14 style='height:10.2pt'>
  <td height=14 class=xl8812171 dir=LTR width=58 style='height:10.2pt;
  width:43pt'></td>
  <td class=xl7712171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl7712171 dir=LTR width=76 style='width:57pt'></td>
  <td class=xl7712171 dir=LTR width=8 style='width:6pt'></td>
  <td class=xl7712171 dir=LTR width=62 style='width:46pt'></td>
  <td class=xl7712171 dir=LTR width=6 style='width:5pt'></td>
  <td class=xl7712171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7712171 dir=LTR width=20 style='width:15pt'></td>
  <td class=xl7712171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <tr height=14 style='mso-height-source:userset;height:10.2pt'>
  <td colspan=31 height=14 class=xl14612171 dir=LTR width=693 style='height:
  10.2pt;width:514pt'>BOQ of quotation:</td>
  <td class=xl7712171 dir=LTR width=58 style='width:43pt'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=58 style='width:43pt'></td>
  <td width=14 style='width:11pt'></td>
  <td width=76 style='width:57pt'></td>
  <td width=8 style='width:6pt'></td>
  <td width=62 style='width:46pt'></td>
  <td width=6 style='width:5pt'></td>
  <td width=12 style='width:9pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=20 style='width:15pt'></td>
  <td width=58 style='width:43pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>


	<!-- order items table -->
	<table class="table table-striped table-bordered">
			<thead>
			<th class="text-center">#</th>
			<th>Item</th>
			<th class="text-center">Qty</th>
			<th class="text-center">Price/u</th>
			<th class="text-center">Total</th>
			<th class="text-center">Notes</th>
			<th class="text-center">Cost/u</th>
			<th class="text-center">total cost</th>
		</thead>

		<tbody>
			<?php foreach($items as $i => $item){ ?>
			<tr>
				<td class="text-center"><?php echo ($i + 1); ?></td>
				<td><?php echo $item['item']; ?></td>
				<td class="text-right"><?php echo $item['qty']; ?></td>
				<td class="text-right"><?php echo $item['value']; ?></td>
				<td class="text-left"><?php echo $item['total']; ?></td>
				<td class="text-left"><?php echo $item['note']; ?></td>
				<td class="text-left"><?php echo $item['cost_copy']; ?></td>
				<td class="text-left"><?php echo $item['total_cost']; ?></td>
			</tr>
			<?php } ?>
		</tbody>

		
		
	</table>

<br>	
<!-- digitally signed table -->

	<table class="table table-striped ">
		<thead>
		<th colspan="6" >Digital signatures:</th>
		</thead>
		
	
		<tbody>
			<?php foreach($itemsb as $i => $itemb){ ?>
				<tr>
					<td><?php echo $itemb['sign_as']; ?></td>
					<td><?php echo $itemb['sign']; ?></td>
					<td><?php echo $itemb['notes']; ?></td>
					<td>Sign ID # <?php echo $itemb['id_sign']; ?></td>

				</tr>
			<?php } ?>
		</tbody>
       		
		<tfoot>
		<th colspan="6" class="text-center" ></th>	
		</tfoot>
	</table>
	
<br>	
	This document was CREATED <?php echo $order['created']; ?>
<br>
	This document was UPDATED <?php echo $order['updated']; ?>
<br>
<br>

		<p><img src="images/<?php echo $order['footer']; ?>.png" style="width: 800px;" class="fr-fic fr-dib"></p>
		

