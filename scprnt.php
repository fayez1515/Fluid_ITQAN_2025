<?php
	$currDir = dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	include_once("$currDir/header.php");

/* grant access to all users who have access to the projects table */
	$order_from = get_sql_from('service_call');
	if(!$order_from) exit(error_message('Access denied!', false));


	/* get invoice */
	$order_id = intval($_REQUEST['id_sc']);
	 if(!$order_id) exit(error_message('Invalid order ID!', false));

	/* retrieve order info */
	$order_fields = get_sql_fields('service_call');
	$res = sql("select {$order_fields} from {$order_from} and id_sc={$order_id}", $eo);
	if(!($order = db_fetch_assoc($res))) exit(error_message('Order not found!', false));

	//var_dump($order);




	//var_dump($items);
	
	
include_once("$currDir/header.php");











	?>

<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 15">
<link rel=File-List href="take_this_Code_files/filelist.xml">
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
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;}
.xl7712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7812171
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
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7912171
	{padding:0px;
	mso-ignore:padding;
	color:#305496;
	font-size:4.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8012171
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
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:3.0pt;
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
.xl8212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8612171
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
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8812171
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
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:3.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9112171
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
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9212171
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
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl9812171
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
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl10012171
	{padding:0px;
	mso-ignore:padding;
	color:#203764;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10112171
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
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10212171
	{padding:0px;
	mso-ignore:padding;
	color:#203764;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
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
	font-size:3.0pt;
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
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:3.0pt;
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
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10612171
	{padding:0px;
	mso-ignore:padding;
	color:#203764;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10712171
	{padding:0px;
	mso-ignore:padding;
	color:#203764;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Black", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Black", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11012171
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
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
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
	font-family:"Arial Black", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:3.0pt;
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
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl11412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:top;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl11512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:2.0pt double windowtext;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl11612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:top;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl11712171
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
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11812171
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
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl11912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Black", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12012171
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
	text-align:general;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12112171
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
	text-align:general;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12212171
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
	text-align:general;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:2.0pt double windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl12312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12412171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl12712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl12812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl12912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:18.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Black", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13012171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13112171
	{padding:0px;
	mso-ignore:padding;
	color:#203764;
	font-size:10.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:3.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13412171
	{padding:0px;
	mso-ignore:padding;
	color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13512171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13612171
	{padding:0px;
	mso-ignore:padding;
	color:#305496;
	font-size:4.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13712171
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
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13812171
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
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl13912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14612171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl14912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl15012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl15112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl15212171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl15312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl15412171
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
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:2.0pt double windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl15512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl15612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl15712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl15812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl15912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl16012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl16112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl16212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl16312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl16412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl16512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl16612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl16712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl16812171
	{padding:0px;
	mso-ignore:padding;
	color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl16912171
	{padding:0px;
	mso-ignore:padding;
	color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17012171
	{padding:0px;
	mso-ignore:padding;
	color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17112171
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
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl17212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17612171
	{padding:0px;
	mso-ignore:padding;
	color:#305496;
	font-size:4.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17712171
	{padding:0px;
	mso-ignore:padding;
	color:#305496;
	font-size:4.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl17912171
	{padding:0px;
	mso-ignore:padding;
	color:#305496;
	font-size:4.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl18012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl18112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
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
.xl18212171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl18312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl18412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl18512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl18612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl18712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl18812171
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
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:2.0pt double windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl18912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19612171
	{padding:0px;
	mso-ignore:padding;
	color:#305496;
	font-size:4.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19712171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19812171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl20012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl20112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl20212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl20312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl20412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl20512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl20612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl20712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl20812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl20912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl21012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	background:#375623;
	mso-pattern:black none;
	white-space:normal;}
.xl21112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:4.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl21212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl21312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Comic Sans MS", cursive;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl21412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Comic Sans MS", cursive;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl21512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Comic Sans MS", cursive;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl21612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Comic Sans MS", cursive;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl21712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Comic Sans MS", cursive;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl21812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Comic Sans MS", cursive;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl21912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl22012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl22112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl22212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl22312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl22412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl22512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl22612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl22712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl22812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl22912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl23012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl23112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl23212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl23312171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri Light", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl23412171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri Light", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl23512171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl23612171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl23712171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl23812171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl23912171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl24012171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl24112171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl24212171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl24312171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl24412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl24512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl24612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl24712171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri Light", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl24812171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri Light", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl24912171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl25012171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl25112171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl25212171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl25312171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl25412171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt dotted windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl25512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl25612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl25712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl25812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl25912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl26012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl26112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl26212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl26312171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl26412171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl26512171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl26612171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl26712171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl26812171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl26912171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri Light", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl27012171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.5pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri Light", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl27112171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl27212171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl27312171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl27412171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl27512171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl27612171
	{color:#203764;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt dotted windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl27712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl27812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl27912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl28012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl28112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl28212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl28312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Verdana, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl28412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:24.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Code 39-hoch-Logitogo";
	mso-generic-font-family:auto;
	mso-font-charset:2;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl28512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:24.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Code 39-hoch-Logitogo";
	mso-generic-font-family:auto;
	mso-font-charset:2;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl28612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:24.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Code 39-hoch-Logitogo";
	mso-generic-font-family:auto;
	mso-font-charset:2;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl28712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:24.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Code 39-hoch-Logitogo";
	mso-generic-font-family:auto;
	mso-font-charset:2;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl28812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:24.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Code 39-hoch-Logitogo";
	mso-generic-font-family:auto;
	mso-font-charset:2;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl28912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:24.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Code 39-hoch-Logitogo";
	mso-generic-font-family:auto;
	mso-font-charset:2;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl29012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl29112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl29212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl29312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl29412171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl29512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl29612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl29712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl29812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Black", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl29912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl30012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl30112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:top;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl30212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Calibri ";
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl30312171
	{padding:0px;
	mso-ignore:padding;
	color:#203764;
	font-size:7.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl30412171
	{padding:0px;
	mso-ignore:padding;
	color:#203764;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl30512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl30612171
	{padding:0px;
	mso-ignore:padding;
	color:#203764;
	font-size:7.0pt;
	font-weight:400;
	font-style:italic;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl30712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
-->
</style>
</head>

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

<table border=0 cellpadding=0 cellspacing=0 width=686 class=xl8812171
 style='border-collapse:collapse;table-layout:fixed;width:517pt'>
 <col class=xl8812171 width=4 style='mso-width-source:userset;mso-width-alt:
 142;width:3pt'>
 <col class=xl8812171 width=3 style='mso-width-source:userset;mso-width-alt:
 113;width:2pt'>
 <col class=xl8812171 width=33 span=4 style='mso-width-source:userset;
 mso-width-alt:1166;width:25pt'>
 <col class=xl8812171 width=4 span=2 style='mso-width-source:userset;
 mso-width-alt:142;width:3pt'>
 <col class=xl8812171 width=5 style='mso-width-source:userset;mso-width-alt:
 170;width:4pt'>
 <col class=xl8812171 width=19 style='mso-width-source:userset;mso-width-alt:
 682;width:14pt'>
 <col class=xl8812171 width=24 style='mso-width-source:userset;mso-width-alt:
 853;width:18pt'>
 <col class=xl8812171 width=7 style='mso-width-source:userset;mso-width-alt:
 256;width:5pt'>
 <col class=xl8812171 width=60 style='mso-width-source:userset;mso-width-alt:
 2133;width:45pt'>
 <col class=xl8812171 width=4 span=2 style='mso-width-source:userset;
 mso-width-alt:142;width:3pt'>
 <col class=xl8812171 width=144 style='mso-width-source:userset;mso-width-alt:
 5120;width:108pt'>
 <col class=xl8812171 width=4 style='mso-width-source:userset;mso-width-alt:
 142;width:3pt'>
 <col class=xl8812171 width=112 style='mso-width-source:userset;mso-width-alt:
 3982;width:84pt'>
 <col class=xl8812171 width=4 style='mso-width-source:userset;mso-width-alt:
 142;width:3pt'>
 <col class=xl8812171 width=50 style='mso-width-source:userset;mso-width-alt:
 1792;width:38pt'>
 <col class=xl8812171 width=78 style='mso-width-source:userset;mso-width-alt:
 2787;width:59pt'>
 <col class=xl8812171 width=14 style='mso-width-source:userset;mso-width-alt:
 512;width:11pt'>
 <col class=xl8812171 width=5 span=2 style='mso-width-source:userset;
 mso-width-alt:170;width:4pt'>
 <tr class=xl9612171 height=6 style='mso-height-source:userset;height:4.95pt'>
  <td height=6 class=xl12312171 dir=LTR width=4 style='height:4.95pt;
  width:3pt'><a name="RANGE!A1:X58"></a></td>
  <td class=xl12312171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl12312171 dir=LTR align=left width=33 style='width:25pt'><div
  class="hidden-print"><br>
    <div class="btn-group"><br>
    <button type="button" id="print"
  onclick="window.print();" title="Print" class="btn
  btn-primary"><i class="glyphicon
  glyphicon-print"></i> Print</button><span
  style='mso-spacerun:yes'>    </span><br>
    </div><br>
    </div></td>
  <td class=xl12312171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl12312171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl12312171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl12312171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12312171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12312171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl12312171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl12312171 dir=LTR width=24 style='width:18pt'></td>
  <td class=xl12312171 dir=LTR width=7 style='width:5pt'></td>
  <td class=xl12312171 dir=LTR width=60 style='width:45pt'></td>
  <td class=xl12312171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12312171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12312171 dir=LTR width=144 style='width:108pt'></td>
  <td class=xl12312171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12312171 dir=LTR width=112 style='width:84pt'></td>
  <td class=xl12312171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12312171 dir=LTR width=50 style='width:38pt'></td>
  <td class=xl12312171 dir=LTR width=78 style='width:59pt'></td>
  <td class=xl12312171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl12312171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9612171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl9812171 dir=LTR width=4 style='height:9.75pt;
  width:3pt'></td>
  <td class=xl9812171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl15512171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl15512171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl15512171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl15512171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl15512171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl15512171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl15512171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl15512171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl15512171 dir=LTR width=24 style='width:18pt'></td>
  <td class=xl15512171 dir=LTR width=7 style='width:5pt'></td>
  <td class=xl9812171 dir=LTR width=60 style='width:45pt'></td>
  <td class=xl18812171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18812171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl9812171 dir=LTR width=144 style='width:108pt'></td>
  <td class=xl9812171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl9812171 dir=LTR width=112 style='width:84pt'></td>
  <td class=xl9812171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl9812171 dir=LTR width=50 style='width:38pt'></td>
  <td class=xl9812171 dir=LTR width=78 style='width:59pt'></td>
  <td class=xl9812171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl9812171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9812171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8012171 height=3 style='mso-height-source:userset;height:2.4pt'>
  <td height=3 class=xl12012171 dir=LTR style='height:2.4pt;border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12112171 dir=LTR style='border-top:none'></td>
  <td class=xl12212171 dir=LTR style='border-top:none'></td>
 </tr>
 <tr class=xl8012171 height=2 style='mso-height-source:userset;height:1.8pt'>
  <td height=2 class=xl11712171 dir=LTR style='height:1.8pt'></td>
  <td colspan=6 rowspan=2 class=xl27712171 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'><?php echo $order['visit_date']; ?></td>
  <td class=xl17212171 dir=LTR width=4 style='border-left:none;width:3pt'></td>
  <td class=xl16112171 dir=LTR width=5 style='border-left:none;width:4pt'></td>
  <td class=xl16212171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl16212171 dir=LTR width=24 style='width:18pt'></td>
  <td class=xl16212171 dir=LTR width=7 style='width:5pt'></td>
  <td class=xl16212171 dir=LTR width=60 style='width:45pt'></td>
  <td class=xl16212171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl16212171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl16212171 dir=LTR width=144 style='width:108pt'></td>
  <td class=xl16212171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl16212171 dir=LTR width=112 style='width:84pt'></td>
  <td class=xl16212171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl16212171 dir=LTR width=50 style='width:38pt'></td>
  <td class=xl16212171 dir=LTR width=78 style='width:59pt'></td>
  <td class=xl16212171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl15612171 width=5 style='width:4pt'></td>
  <td class=xl11812171 dir=LTR></td>
 </tr>
 <tr class=xl8012171 height=8 style='mso-height-source:userset;height:6.0pt'>
  <td height=8 class=xl8712171 style='height:6.0pt'></td>
  <td class=xl17212171 dir=LTR width=4 style='border-left:none;width:3pt'></td>
  <td class=xl17112171 dir=LTR style='border-left:none'></td>
  <td colspan=13 rowspan=4 class=xl28312171 dir=LTR width=524 style='width:
  394pt'><p><img src="images/<?php echo $order['header'];
  ?>.png" style="width: 600px;" class="fr-fic
  fr-dib"></p></td>
  <td class=xl15712171 width=5 style='width:4pt'></td>
  <td class=xl11812171 dir=LTR></td>
 </tr>
 <tr class=xl8012171 height=14 style='mso-height-source:userset;height:10.2pt'>
  <td height=14 class=xl8712171 style='height:10.2pt'></td>
  <td colspan=6 rowspan=2 class=xl28412171 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>*SC_<?php echo $order['id']; ?>*</td>
  <td class=xl17212171 dir=LTR width=4 style='border-left:none;width:3pt'></td>
  <td class=xl16312171 dir=LTR width=5 style='border-left:none;width:4pt'></td>
  <td class=xl15712171 width=5 style='width:4pt'></td>
  <td class=xl11812171 dir=LTR></td>
 </tr>
 <tr class=xl8012171 height=14 style='mso-height-source:userset;height:10.2pt'>
  <td height=14 class=xl8712171 style='height:10.2pt'></td>
  <td class=xl17212171 dir=LTR width=4 style='border-left:none;width:3pt'></td>
  <td class=xl16312171 dir=LTR width=5 style='border-left:none;width:4pt'></td>
  <td class=xl15712171 width=5 style='width:4pt'></td>
  <td class=xl11812171 dir=LTR></td>
 </tr>
 <tr class=xl8012171 height=12 style='mso-height-source:userset;height:9.0pt'>
  <td height=12 class=xl8712171 style='height:9.0pt'></td>
  <td colspan=6 rowspan=2 class=xl29012171 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black'>No. ( SC_<?php echo $order['id_sc']; ?>
  )</td>
  <td class=xl17212171 dir=LTR width=4 style='border-left:none;width:3pt'></td>
  <td class=xl16312171 dir=LTR width=5 style='border-left:none;width:4pt'></td>
  <td class=xl15712171 width=5 style='width:4pt'></td>
  <td class=xl11812171 dir=LTR></td>
 </tr>
 <tr class=xl8012171 height=2 style='mso-height-source:userset;height:1.8pt'>
  <td height=2 class=xl8712171 style='height:1.8pt'></td>
  <td class=xl17212171 dir=LTR width=4 style='border-left:none;width:3pt'></td>
  <td class=xl16412171 dir=LTR width=5 style='border-left:none;width:4pt'></td>
  <td class=xl16512171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl16512171 dir=LTR width=24 style='width:18pt'></td>
  <td class=xl16512171 dir=LTR width=7 style='width:5pt'></td>
  <td class=xl16512171 dir=LTR width=60 style='width:45pt'></td>
  <td class=xl16512171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl16512171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl16512171 dir=LTR width=144 style='width:108pt'></td>
  <td class=xl16512171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl16512171 dir=LTR width=112 style='width:84pt'></td>
  <td class=xl16512171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl16512171 dir=LTR width=50 style='width:38pt'></td>
  <td class=xl16512171 dir=LTR width=78 style='width:59pt'></td>
  <td class=xl16512171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl15812171 width=5 style='width:4pt'></td>
  <td class=xl11812171 dir=LTR></td>
 </tr>
 <tr class=xl8012171 height=2 style='mso-height-source:userset;height:2.1pt'>
  <td height=2 class=xl8712171 style='height:2.1pt'></td>
  <td class=xl16612171></td>
  <td class=xl16612171></td>
  <td class=xl16612171></td>
  <td class=xl16612171></td>
  <td class=xl16612171></td>
  <td class=xl16612171></td>
  <td class=xl8012171 dir=LTR></td>
  <td class=xl8012171 dir=LTR></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl8512171></td>
  <td class=xl11812171 dir=LTR></td>
 </tr>
 <tr class=xl8112171 height=3 style='mso-height-source:userset;height:2.4pt'>
  <td height=3 class=xl12912171 width=4 style='height:2.4pt;width:3pt'></td>
  <td class=xl10312171 dir=LTR width=3 style='border-top:none;width:2pt'></td>
  <td class=xl11212171 dir=LTR width=33 style='border-top:none;width:25pt'></td>
  <td class=xl11212171 dir=LTR width=33 style='border-top:none;width:25pt'></td>
  <td class=xl11212171 dir=LTR width=33 style='border-top:none;width:25pt'></td>
  <td class=xl11212171 dir=LTR width=33 style='border-top:none;width:25pt'></td>
  <td class=xl13312171 dir=LTR width=4 style='border-top:none;width:3pt'></td>
  <td class=xl8112171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10312171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl11212171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl11112171 width=24 style='width:18pt'></td>
  <td class=xl11112171 width=7 style='width:5pt'></td>
  <td class=xl11112171 width=60 style='width:45pt'></td>
  <td class=xl11112171 width=4 style='width:3pt'></td>
  <td class=xl11112171 width=4 style='width:3pt'></td>
  <td class=xl11112171 width=144 style='width:108pt'></td>
  <td class=xl11112171 width=4 style='width:3pt'></td>
  <td class=xl11112171 width=112 style='width:84pt'></td>
  <td class=xl11112171 width=4 style='width:3pt'></td>
  <td class=xl11112171 width=50 style='width:38pt'></td>
  <td class=xl11112171 width=78 style='width:59pt'></td>
  <td class=xl11112171 width=14 style='width:11pt'></td>
  <td class=xl10812171 width=5 style='width:4pt'></td>
  <td class=xl8912171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8112171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl12912171 width=4 style='height:12.75pt;width:3pt'></td>
  <td class=xl10512171 dir=LTR width=3 style='width:2pt'></td>
  <td colspan=2 class=xl29612171 dir=LTR width=66 style='width:50pt'>Date:</td>
  <td colspan=2 class=xl29712171 dir=RTL width=66 style='width:50pt'>التاريخ:</td>
  <td class=xl16712171 dir=RTL width=4 style='width:3pt'></td>
  <td class=xl8112171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10512171 dir=LTR width=5 style='width:4pt'></td>
  <td colspan=13 rowspan=3 class=xl29812171 width=524 style='width:394pt'><?php
  echo $order['head']; ?><br>
    <font class="font512171">Reference : ( <?php echo $order['ref']; ?> )
  - ( <?php echo $order['request']; ?> )</font></td>
  <td class=xl10912171 width=5 style='width:4pt'></td>
  <td class=xl8912171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8212171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13012171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td colspan=6 class=xl29912171 dir=LTR width=139 style='border-right:.5pt solid black;
  width:105pt'><?php echo $order['visit_date']; ?></td>
  <td class=xl8212171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10412171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl10912171 width=5 style='width:4pt'></td>
  <td class=xl9012171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8612171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13012171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td class=xl10112171 dir=LTR width=3 style='width:2pt'></td>
  <td colspan=2 class=xl29612171 dir=LTR width=66 style='width:50pt'>Site:</td>
  <td colspan=2 class=xl29712171 dir=RTL width=66 style='width:50pt'>الموقع:</td>
  <td class=xl16712171 dir=RTL width=4 style='width:3pt'></td>
  <td class=xl8612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10112171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl10912171 width=5 style='width:4pt'></td>
  <td class=xl9112171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8612171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13012171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td colspan=6 class=xl29912171 dir=LTR width=139 style='border-right:.5pt solid black;
  width:105pt'><?php echo $order['site']; ?></td>
  <td class=xl8612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10112171 dir=LTR width=5 style='width:4pt'></td>
  <td colspan=13 rowspan=9 class=xl30212171 width=524 style='width:394pt'>Report:
  <?php echo $order['work_report']; ?></td>
  <td class=xl10912171 width=5 style='width:4pt'></td>
  <td class=xl9112171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8612171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13012171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td class=xl16012171 dir=LTR width=3 style='width:2pt'></td>
  <td colspan=2 class=xl29612171 dir=LTR width=66 style='width:50pt'>Customer:</td>
  <td colspan=2 class=xl29712171 dir=RTL width=66 style='width:50pt'>العميل:</td>
  <td class=xl16712171 dir=RTL width=4 style='width:3pt'></td>
  <td class=xl8612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10112171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl10912171 width=5 style='width:4pt'></td>
  <td class=xl9112171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8612171 height=14 style='mso-height-source:userset;height:10.5pt'>
  <td height=14 class=xl13012171 dir=LTR width=4 style='height:10.5pt;
  width:3pt'></td>
  <td colspan=6 class=xl29912171 dir=LTR width=139 style='border-right:.5pt solid black;
  width:105pt'><?php echo $order['customer']; ?></td>
  <td class=xl8612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10112171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl10912171 width=5 style='width:4pt'></td>
  <td class=xl9112171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8612171 height=2 style='mso-height-source:userset;height:2.25pt'>
  <td height=2 class=xl13012171 dir=LTR width=4 style='height:2.25pt;
  width:3pt'></td>
  <td class=xl14112171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl8312171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl8312171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl8312171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14712171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14212171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl8612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10112171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl10912171 width=5 style='width:4pt'></td>
  <td class=xl9112171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8612171 height=14 style='mso-height-source:userset;height:11.25pt'>
  <td height=14 class=xl13012171 dir=LTR width=4 style='height:11.25pt;
  width:3pt'></td>
  <td class=xl13912171 dir=LTR width=3 style='width:2pt'></td>
  <td colspan=4 rowspan=5 class=xl26012171 dir=LTR width=132 style='width:100pt'><p><img
  src="images/<?php echo $order['logo_value']; ?>"
  style="width: 160px;" class="fr-fic fr-dib"></p></td>
  <td class=xl14012171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl8612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10112171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl10912171 width=5 style='width:4pt'></td>
  <td class=xl9112171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8612171 height=14 style='mso-height-source:userset;height:11.25pt'>
  <td height=14 class=xl13012171 dir=LTR width=4 style='height:11.25pt;
  width:3pt'></td>
  <td class=xl13912171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl14012171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl8612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10112171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl10912171 width=5 style='width:4pt'></td>
  <td class=xl9112171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8612171 height=14 style='mso-height-source:userset;height:11.25pt'>
  <td height=14 class=xl13012171 dir=LTR width=4 style='height:11.25pt;
  width:3pt'></td>
  <td class=xl13912171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl14012171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl8612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10112171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl10612171 width=5 style='width:4pt'></td>
  <td class=xl9112171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8612171 height=14 style='mso-height-source:userset;height:11.25pt'>
  <td height=14 class=xl13112171 width=4 style='height:11.25pt;width:3pt'></td>
  <td class=xl14112171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl14212171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl8612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10112171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl10612171 width=5 style='width:4pt'></td>
  <td class=xl9112171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8612171 height=4 style='mso-height-source:userset;height:3.0pt'>
  <td height=4 class=xl13112171 width=4 style='height:3.0pt;width:3pt'></td>
  <td class=xl14112171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl14212171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl8612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl10112171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl10612171 width=5 style='width:4pt'></td>
  <td class=xl9112171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7812171 height=2 style='mso-height-source:userset;height:2.25pt'>
  <td height=2 class=xl13112171 width=4 style='height:2.25pt;width:3pt'></td>
  <td class=xl14312171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl15912171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl15912171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl15912171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl15912171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14412171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl7812171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl11012171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl11912171 width=19 style='width:14pt'></td>
  <td class=xl11912171 width=24 style='width:18pt'></td>
  <td class=xl11912171 width=7 style='width:5pt'></td>
  <td class=xl11912171 width=60 style='width:45pt'></td>
  <td class=xl11912171 width=4 style='width:3pt'></td>
  <td class=xl11912171 width=4 style='width:3pt'></td>
  <td class=xl11912171 width=144 style='width:108pt'></td>
  <td class=xl11912171 width=4 style='width:3pt'></td>
  <td class=xl11912171 width=112 style='width:84pt'></td>
  <td class=xl11912171 width=4 style='width:3pt'></td>
  <td class=xl11912171 width=50 style='width:38pt'></td>
  <td class=xl11912171 width=78 style='width:59pt'></td>
  <td class=xl11912171 width=14 style='width:11pt'></td>
  <td class=xl10712171 width=5 style='width:4pt'></td>
  <td class=xl9212171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7812171 height=2 style='mso-height-source:userset;height:2.1pt'>
  <td height=2 class=xl13112171 width=4 style='height:2.1pt;width:3pt'></td>
  <td class=xl14512171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl14512171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14512171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14512171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14512171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14512171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl7812171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl7812171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl10012171 width=19 style='width:14pt'></td>
  <td class=xl10212171 width=24 style='width:18pt'></td>
  <td class=xl10212171 width=7 style='width:5pt'></td>
  <td class=xl10212171 width=60 style='width:45pt'></td>
  <td class=xl10212171 width=4 style='width:3pt'></td>
  <td class=xl10212171 width=4 style='width:3pt'></td>
  <td class=xl10212171 width=144 style='width:108pt'></td>
  <td class=xl10212171 width=4 style='width:3pt'></td>
  <td class=xl10212171 width=112 style='width:84pt'></td>
  <td class=xl10212171 width=4 style='width:3pt'></td>
  <td class=xl10212171 width=50 style='width:38pt'></td>
  <td class=xl10212171 width=78 style='width:59pt'></td>
  <td class=xl10212171 width=14 style='width:11pt'></td>
  <td class=xl10212171 width=5 style='width:4pt'></td>
  <td class=xl9212171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13712171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td colspan=6 rowspan=2 class=xl26112171 dir=LTR width=139 style='border-right:
  .5pt solid black;width:105pt'>تقييم العميل للخدمة<br>
    Service evaluation</td>
  <td class=xl7712171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=2 class=xl26312171 dir=LTR width=24 style='border-right:.5pt solid black;
  width:18pt'></td>
  <td colspan=9 class=xl26312171 dir=LTR width=363 style='border-right:.5pt solid black;
  border-left:none;width:272pt'><?php echo $order['table_items']; ?></td>
  <td class=xl15212171 dir=LTR width=50 style='border-left:none;width:38pt'><?php
  echo $order['table_qty']; ?></td>
  <td colspan=3 class=xl26612171 dir=LTR width=97 style='border-right:.5pt solid black;
  border-left:none;width:74pt'><?php echo $order['table_part']; ?></td>
  <td class=xl9312171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7712171 height=19 style='mso-height-source:userset;height:14.4pt'>
  <td height=19 class=xl13412171 dir=LTR width=4 style='height:14.4pt;
  width:3pt'></td>
  <td class=xl7712171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=2 class=xl26912171 dir=LTR width=24 style='border-right:.5pt solid black;
  width:18pt'>1</td>
  <td colspan=9 class=xl27112171 dir=LTR width=363 style='border-right:.5pt solid black;
  border-left:none;width:272pt'><?php echo $order['Item1']; ?></td>
  <td class=xl16812171 dir=LTR width=50 style='border-top:none;border-left:
  none;width:38pt'><?php echo $order['Qty1']; ?></td>
  <td colspan=3 class=xl27412171 dir=LTR width=97 style='border-right:.5pt solid black;
  border-left:none;width:74pt'><?php echo $order['Part1']; ?></td>
  <td class=xl9312171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7712171 height=19 style='mso-height-source:userset;height:14.4pt'>
  <td height=19 class=xl13412171 dir=LTR width=4 style='height:14.4pt;
  width:3pt'></td>
  <td colspan=2 rowspan=2 class=xl25912171 dir=LTR width=36 style='width:27pt'>[…....]</td>
  <td colspan=4 class=xl24512171 dir=RTL width=103 style='border-right:.5pt solid black;
  width:78pt'><span style='mso-spacerun:yes'> </span>عدد الأيام المستهلكة</td>
  <td class=xl7712171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=2 class=xl24712171 dir=LTR width=24 style='border-right:.5pt solid black;
  width:18pt'>2</td>
  <td colspan=9 class=xl24912171 dir=LTR width=363 style='border-right:.5pt solid black;
  border-left:none;width:272pt'><?php echo $order['Item2']; ?></td>
  <td class=xl16912171 dir=LTR width=50 style='border-top:none;border-left:
  none;width:38pt'><?php echo $order['Qty2']; ?></td>
  <td colspan=3 class=xl25212171 dir=LTR width=97 style='border-right:.5pt solid black;
  border-left:none;width:74pt'><?php echo $order['Part2']; ?></td>
  <td class=xl9312171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13412171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td colspan=4 class=xl25512171 dir=RTL width=103 style='border-right:.5pt solid black;
  width:78pt'>Days consumed</td>
  <td class=xl7712171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=2 class=xl24712171 dir=LTR width=24 style='border-right:.5pt solid black;
  width:18pt'>3</td>
  <td colspan=9 class=xl24912171 dir=LTR width=363 style='border-right:.5pt solid black;
  border-left:none;width:272pt'><?php echo $order['Item3']; ?></td>
  <td class=xl16912171 dir=LTR width=50 style='border-top:none;border-left:
  none;width:38pt'><?php echo $order['Qty3']; ?></td>
  <td colspan=3 class=xl25212171 dir=LTR width=97 style='border-right:.5pt solid black;
  border-left:none;width:74pt'><?php echo $order['Part3']; ?></td>
  <td class=xl9312171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13412171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td colspan=2 rowspan=2 class=xl25912171 dir=LTR width=36 style='width:27pt'>[…....]<br>
    [ 10 ]</td>
  <td colspan=4 class=xl24512171 dir=RTL width=103 style='border-right:.5pt solid black;
  width:78pt'>تقييم الإلتزام بالمواعيد</td>
  <td class=xl7712171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=2 class=xl24712171 dir=LTR width=24 style='border-right:.5pt solid black;
  width:18pt'>4</td>
  <td colspan=9 class=xl24912171 dir=LTR width=363 style='border-right:.5pt solid black;
  border-left:none;width:272pt'><?php echo $order['Item4']; ?></td>
  <td class=xl16912171 dir=LTR width=50 style='border-top:none;border-left:
  none;width:38pt'><?php echo $order['Qty4']; ?></td>
  <td colspan=3 class=xl25212171 dir=LTR width=97 style='border-right:.5pt solid black;
  border-left:none;width:74pt'><?php echo $order['Part4']; ?></td>
  <td class=xl9312171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13412171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td colspan=4 class=xl25512171 dir=RTL width=103 style='border-right:.5pt solid black;
  width:78pt'>Timeline assessment</td>
  <td class=xl7712171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=2 class=xl24712171 dir=LTR width=24 style='border-right:.5pt solid black;
  width:18pt'>5</td>
  <td colspan=9 class=xl24912171 dir=LTR width=363 style='border-right:.5pt solid black;
  border-left:none;width:272pt'><?php echo $order['Item5']; ?></td>
  <td class=xl16912171 dir=LTR width=50 style='border-top:none;border-left:
  none;width:38pt'><?php echo $order['Qty5']; ?></td>
  <td colspan=3 class=xl25212171 dir=LTR width=97 style='border-right:.5pt solid black;
  border-left:none;width:74pt'><?php echo $order['Part5']; ?></td>
  <td class=xl9312171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13412171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td colspan=2 rowspan=2 class=xl25912171 dir=LTR width=36 style='width:27pt'>[…....]<br>
    [ 10 ]</td>
  <td colspan=4 class=xl24512171 dir=RTL width=103 style='border-right:.5pt solid black;
  width:78pt'>تقــييم مظهر العاملين</td>
  <td class=xl7712171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=2 class=xl24712171 dir=LTR width=24 style='border-right:.5pt solid black;
  width:18pt'>6</td>
  <td colspan=9 class=xl24912171 dir=LTR width=363 style='border-right:.5pt solid black;
  border-left:none;width:272pt'><?php echo $order['Item6']; ?></td>
  <td class=xl16912171 dir=LTR width=50 style='border-top:none;border-left:
  none;width:38pt'><?php echo $order['Qty6']; ?></td>
  <td colspan=3 class=xl25212171 dir=LTR width=97 style='border-right:.5pt solid black;
  border-left:none;width:74pt'><?php echo $order['Part6']; ?></td>
  <td class=xl9312171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13412171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td colspan=4 class=xl25512171 dir=RTL width=103 style='border-right:.5pt solid black;
  width:78pt'><span style='mso-spacerun:yes'> </span>Appearance Evaluat</td>
  <td class=xl7712171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=2 class=xl24712171 dir=LTR width=24 style='border-right:.5pt solid black;
  width:18pt'>7</td>
  <td colspan=9 class=xl24912171 dir=LTR width=363 style='border-right:.5pt solid black;
  border-left:none;width:272pt'><?php echo $order['Item7']; ?></td>
  <td class=xl16912171 dir=LTR width=50 style='border-top:none;border-left:
  none;width:38pt'><?php echo $order['Qty7']; ?></td>
  <td colspan=3 class=xl25212171 dir=LTR width=97 style='border-right:.5pt solid black;
  border-left:none;width:74pt'><?php echo $order['Part7']; ?></td>
  <td class=xl9312171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13412171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td colspan=2 rowspan=2 class=xl25912171 dir=LTR width=36 style='width:27pt'>[…....]<br>
    [ 10 ]</td>
  <td colspan=4 class=xl24512171 dir=RTL width=103 style='border-right:.5pt solid black;
  width:78pt'>تقــــــــييم عـــام للــخــدمة</td>
  <td class=xl7712171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=2 class=xl24712171 dir=LTR width=24 style='border-right:.5pt solid black;
  width:18pt'>8</td>
  <td colspan=9 class=xl24912171 dir=LTR width=363 style='border-right:.5pt solid black;
  border-left:none;width:272pt'><?php echo $order['Item8']; ?></td>
  <td class=xl16912171 dir=LTR width=50 style='border-top:none;border-left:
  none;width:38pt'><?php echo $order['Qty8']; ?></td>
  <td colspan=3 class=xl25212171 dir=LTR width=97 style='border-right:.5pt solid black;
  border-left:none;width:74pt'><?php echo $order['Part8']; ?></td>
  <td class=xl9312171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13412171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td colspan=4 class=xl25512171 dir=RTL width=103 style='border-right:.5pt solid black;
  width:78pt'>General evaluation</td>
  <td class=xl7712171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=2 class=xl24712171 dir=LTR width=24 style='border-right:.5pt solid black;
  width:18pt'>9</td>
  <td colspan=9 class=xl24912171 dir=LTR width=363 style='border-right:.5pt solid black;
  border-left:none;width:272pt'><?php echo $order['Item9']; ?></td>
  <td class=xl16912171 dir=LTR width=50 style='border-top:none;border-left:
  none;width:38pt'><?php echo $order['Qty9']; ?></td>
  <td colspan=3 class=xl25212171 dir=LTR width=97 style='border-right:.5pt solid black;
  border-left:none;width:74pt'><?php echo $order['Part9']; ?></td>
  <td class=xl9312171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.75pt'>
  <td height=17 class=xl13412171 dir=LTR width=4 style='height:12.75pt;
  width:3pt'></td>
  <td class=xl14312171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl15912171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl15912171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl15912171 dir=LTR width=33 style='width:25pt'></td>
  <td colspan=2 class=xl25712171 dir=RTL width=37 style='border-right:.5pt solid black;
  width:28pt'></td>
  <td class=xl7712171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=2 class=xl23312171 dir=LTR width=24 style='border-right:.5pt solid black;
  width:18pt'>10</td>
  <td colspan=9 class=xl23512171 dir=LTR width=363 style='border-right:.5pt solid black;
  border-left:none;width:272pt'><?php echo $order['Item10']; ?></td>
  <td class=xl17012171 dir=LTR width=50 style='border-top:none;border-left:
  none;width:38pt'><?php echo $order['Qty10']; ?></td>
  <td colspan=3 class=xl23812171 dir=LTR width=97 style='border-right:.5pt solid black;
  border-left:none;width:74pt'><?php echo $order['Part10']; ?></td>
  <td class=xl9312171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8412171 height=2 style='mso-height-source:userset;height:2.1pt'>
  <td height=2 class=xl13512171 dir=LTR width=4 style='height:2.1pt;width:3pt'></td>
  <td class=xl14512171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl14512171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14512171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14512171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14512171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl8412171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl14812171 dir=LTR width=5 style='border-top:none;width:4pt'></td>
  <td class=xl12412171 dir=LTR width=19 style='border-top:none;width:14pt'></td>
  <td class=xl12412171 dir=LTR width=24 style='border-top:none;width:18pt'></td>
  <td class=xl12412171 dir=LTR width=7 style='border-top:none;width:5pt'></td>
  <td class=xl12412171 dir=LTR width=60 style='border-top:none;width:45pt'></td>
  <td class=xl12412171 dir=LTR width=4 style='border-top:none;width:3pt'></td>
  <td class=xl12412171 dir=LTR width=4 style='border-top:none;width:3pt'></td>
  <td class=xl12412171 dir=LTR width=144 style='border-top:none;width:108pt'></td>
  <td class=xl12412171 dir=LTR width=4 style='border-top:none;width:3pt'></td>
  <td class=xl12412171 dir=LTR width=112 style='border-top:none;width:84pt'></td>
  <td class=xl12412171 dir=LTR width=4 style='border-top:none;width:3pt'></td>
  <td class=xl12412171 dir=LTR width=50 style='border-top:none;width:38pt'></td>
  <td class=xl12412171 dir=LTR width=78 style='border-top:none;width:59pt'></td>
  <td class=xl12412171 dir=LTR width=14 style='border-top:none;width:11pt'></td>
  <td class=xl12412171 dir=LTR width=5 style='border-top:none;width:4pt'></td>
  <td class=xl9412171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8412171 height=3 style='mso-height-source:userset;height:2.4pt'>
  <td height=3 class=xl13512171 dir=LTR width=4 style='height:2.4pt;width:3pt'></td>
  <td class=xl18312171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl18412171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl17612171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl17612171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl17612171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl17712171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18212171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=15 class=xl24112171 dir=LTR width=534 style='border-right:.5pt solid black;
  border-left:none;width:402pt'></td>
  <td class=xl9412171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl8412171 height=14 style='mso-height-source:userset;height:10.2pt'>
  <td height=14 class=xl13512171 dir=LTR width=4 style='height:10.2pt;
  width:3pt'></td>
  <td class=xl18512171 dir=LTR width=3 style='width:2pt'></td>
  <td colspan=4 class=xl14512171 dir=LTR width=132 style='width:100pt'>Stamp
  here please</td>
  <td class=xl19612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18212171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl19712171 dir=LTR width=5 style='width:4pt'></td>
  <td colspan=13 class=xl19712171 dir=LTR width=524 style='width:394pt'>Notes<span
  style='mso-spacerun:yes'>    </span>ملاحظات</td>
  <td class=xl19812171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9412171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl13212171 dir=LTR width=4 style='height:12.0pt;
  width:3pt'></td>
  <td class=xl17312171 dir=LTR width=3 style='width:2pt'></td>
  <td colspan=4 rowspan=5 class=xl9612171 dir=LTR width=132 style='width:100pt'><p><img
  src="images/<?php echo $order['stamp']; ?>.png"
  style="width: 125px;" class="fr-fic fr-dib"></p></td>
  <td class=xl17512171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl9612171 dir=LTR width=5 style='width:4pt'></td>
  <td colspan=7 class=xl20012171 dir=LTR align=left width=262 style='width:
  196pt'><p><img src="images/<?php echo $order['Photo1'];
  ?>" style="width: 290px;" class="fr-fic
  fr-dib"></p></td>
  <td class=xl20012171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=5 class=xl30512171 dir=LTR width=258 style='width:195pt'><p><img
  src="images/<?php echo $order['Photo2']; ?>"
  style="width: 290px;" class="fr-fic fr-dib"></p></td>
  <td class=xl12512171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl13212171 dir=LTR width=4 style='height:12.0pt;
  width:3pt'></td>
  <td class=xl17312171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl17512171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl9612171 dir=LTR width=5 style='width:4pt'></td>
  <td colspan=7 class=xl30312171 dir=LTR align=left width=262 style='width:
  196pt'><?php echo $order['comment1']; ?></td>
  <td class=xl20012171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=5 class=xl30612171 dir=LTR width=258 style='width:195pt'><?php
  echo $order['comment2']; ?></td>
  <td class=xl12512171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=14 style='mso-height-source:userset;height:10.2pt'>
  <td height=14 class=xl13212171 dir=LTR width=4 style='height:10.2pt;
  width:3pt'></td>
  <td class=xl17312171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl17512171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18512171 dir=LTR width=5 style='border-left:none;width:4pt'></td>
  <td class=xl20012171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl20012171 dir=LTR width=24 style='width:18pt'></td>
  <td class=xl20012171 dir=LTR width=7 style='width:5pt'></td>
  <td class=xl20012171 dir=LTR width=60 style='width:45pt'></td>
  <td class=xl20012171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl20012171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl20012171 dir=LTR width=144 style='width:108pt'></td>
  <td class=xl20012171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl30712171 dir=LTR width=112 style='width:84pt'></td>
  <td class=xl30712171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl30712171 dir=LTR width=50 style='width:38pt'></td>
  <td class=xl30712171 dir=LTR width=78 style='width:59pt'></td>
  <td class=xl30712171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl12512171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=16 style='mso-height-source:userset;height:12.0pt'>
  <td height=16 class=xl13212171 dir=LTR width=4 style='height:12.0pt;
  width:3pt'></td>
  <td class=xl17312171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl17512171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18512171 dir=LTR width=5 style='border-left:none;width:4pt'></td>
  <td colspan=7 class=xl20012171 dir=LTR align=left width=262 style='width:
  196pt'><p><img src="images/<?php echo $order['Photo3'];
  ?>" style="width: 290px;" class="fr-fic
  fr-dib"></p></td>
  <td class=xl20012171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=5 class=xl30512171 dir=LTR width=258 style='width:195pt'><p><img
  src="images/<?php echo $order['Photo4']; ?>"
  style="width: 290px;" class="fr-fic fr-dib"></p></td>
  <td class=xl12512171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=14 style='mso-height-source:userset;height:10.2pt'>
  <td height=14 class=xl13212171 dir=LTR width=4 style='height:10.2pt;
  width:3pt'></td>
  <td class=xl17312171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl17512171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18512171 dir=LTR width=5 style='border-left:none;width:4pt'></td>
  <td colspan=7 class=xl30412171 dir=LTR align=left width=262 style='width:
  196pt'><?php echo $order['comment3']; ?></td>
  <td class=xl30312171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=5 class=xl30612171 dir=LTR width=258 style='width:195pt'><?php
  echo $order['comment4']; ?></td>
  <td class=xl12512171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=2 style='mso-height-source:userset;height:2.1pt'>
  <td height=2 class=xl13212171 dir=LTR width=4 style='height:2.1pt;width:3pt'></td>
  <td class=xl17412171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl19912171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl19912171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl19912171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl19912171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14412171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18712171 dir=LTR width=5 style='border-left:none;width:4pt'></td>
  <td class=xl14912171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl14912171 dir=LTR width=24 style='width:18pt'></td>
  <td class=xl14912171 dir=LTR width=7 style='width:5pt'></td>
  <td class=xl14912171 dir=LTR width=60 style='width:45pt'></td>
  <td class=xl14912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl14912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl14912171 dir=LTR width=144 style='width:108pt'></td>
  <td class=xl14912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl14912171 dir=LTR width=112 style='width:84pt'></td>
  <td class=xl14912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl14912171 dir=LTR width=50 style='width:38pt'></td>
  <td class=xl14912171 dir=LTR width=78 style='width:59pt'></td>
  <td class=xl15012171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl15112171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=3 style='mso-height-source:userset;height:2.4pt'>
  <td height=3 class=xl13612171 dir=LTR width=4 style='height:2.4pt;width:3pt'></td>
  <td class=xl18112171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl18112171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14712171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14712171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14712171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl14712171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl9612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl9612171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7912171 dir=LTR width=24 style='width:18pt'></td>
  <td class=xl7912171 dir=LTR width=7 style='width:5pt'></td>
  <td class=xl7912171 dir=LTR width=60 style='width:45pt'></td>
  <td class=xl7912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl7912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl7912171 dir=LTR width=144 style='width:108pt'></td>
  <td class=xl7912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl7912171 dir=LTR width=112 style='width:84pt'></td>
  <td class=xl7912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl9612171 dir=LTR width=50 style='width:38pt'></td>
  <td class=xl7912171 dir=LTR width=78 style='width:59pt'></td>
  <td class=xl7912171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl7912171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=3 style='mso-height-source:userset;height:2.4pt'>
  <td height=3 class=xl13612171 dir=LTR width=4 style='height:2.4pt;width:3pt'></td>
  <td colspan=2 rowspan=3 class=xl22512171 dir=LTR width=36 style='border-bottom:
  .5pt solid black;width:27pt'>[_]</td>
  <td colspan=4 rowspan=2 class=xl22912171 dir=LTR width=103 style='border-right:
  .5pt solid black;width:78pt'>نسخة العميل</td>
  <td class=xl9612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18312171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl18412171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl18412171 dir=LTR width=24 style='width:18pt'></td>
  <td class=xl18412171 dir=LTR width=7 style='width:5pt'></td>
  <td class=xl18412171 dir=LTR width=60 style='width:45pt'></td>
  <td class=xl18412171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18412171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl17712171 dir=LTR width=144 style='width:108pt'></td>
  <td class=xl7912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl17912171 dir=LTR width=112 style='width:84pt'></td>
  <td class=xl17612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl18412171 dir=LTR width=50 style='width:38pt'></td>
  <td class=xl17612171 dir=LTR width=78 style='width:59pt'></td>
  <td class=xl17612171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl17712171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl13712171 dir=LTR width=4 style='height:9.75pt;
  width:3pt'></td>
  <td class=xl14512171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=8 class=xl21312171 dir=LTR width=267 style='border-right:.5pt solid black;
  width:200pt'>ITQAN side:</td>
  <td class=xl14512171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=6 class=xl21312171 dir=LTR width=263 style='border-right:.5pt solid black;
  width:199pt'>Customer side:</td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl13812171 dir=LTR width=4 style='height:9.75pt;
  width:3pt'></td>
  <td colspan=4 class=xl23112171 dir=LTR width=103 style='border-right:.5pt solid black;
  width:78pt'>Customer Copy</td>
  <td class=xl14512171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=8 class=xl21612171 dir=LTR width=267 style='border-right:.5pt solid black;
  width:200pt'>Name - Sign - Stamp:<span style='mso-spacerun:yes'>     
  </span>اسم - توقيع - ختم</td>
  <td class=xl14512171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=6 class=xl21612171 dir=LTR width=263 style='border-right:.5pt solid black;
  width:199pt'>Name - Sign - Stamp:<span style='mso-spacerun:yes'>     
  </span>اسم - توقيع - ختم</td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl13812171 dir=LTR width=4 style='height:9.75pt;
  width:3pt'></td>
  <td colspan=2 rowspan=2 class=xl22512171 dir=LTR width=36 style='border-bottom:
  .5pt solid black;width:27pt'>[_]</td>
  <td colspan=4 class=xl22912171 dir=LTR width=103 style='border-right:.5pt solid black;
  width:78pt'>نسخة المالية</td>
  <td class=xl14512171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=8 class=xl21612171 dir=LTR width=267 style='border-right:.5pt solid black;
  width:200pt'><?php echo $order['assigned_to']; ?></td>
  <td class=xl17812171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=6 class=xl21612171 dir=LTR width=263 style='border-right:.5pt solid black;
  width:199pt'><?php echo $order['customer']; ?></td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl13812171 dir=LTR width=4 style='height:9.75pt;
  width:3pt'></td>
  <td colspan=4 class=xl23112171 dir=LTR width=103 style='border-right:.5pt solid black;
  width:78pt'>Finance Copy</td>
  <td class=xl14512171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=8 class=xl21912171 dir=LTR width=267 style='border-right:.5pt solid black;
  width:200pt'></td>
  <td class=xl18912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl19012171 dir=LTR width=112 style='border-top:none;width:84pt'></td>
  <td class=xl19112171 dir=LTR width=4 style='border-top:none;width:3pt'></td>
  <td class=xl19112171 dir=LTR width=50 style='border-top:none;width:38pt'></td>
  <td class=xl19112171 dir=LTR width=78 style='border-top:none;width:59pt'></td>
  <td class=xl19112171 dir=LTR width=14 style='border-top:none;width:11pt'></td>
  <td class=xl19212171 dir=LTR width=5 style='border-top:none;width:4pt'></td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl13812171 dir=LTR width=4 style='height:9.75pt;
  width:3pt'></td>
  <td colspan=2 rowspan=2 class=xl22512171 dir=LTR width=36 style='border-bottom:
  .5pt solid black;width:27pt'>[_]</td>
  <td colspan=4 class=xl22912171 dir=LTR width=103 style='border-right:.5pt solid black;
  width:78pt'>نسخة الأرشيف</td>
  <td class=xl14512171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=8 class=xl21912171 dir=LTR width=267 style='border-right:.5pt solid black;
  width:200pt'></td>
  <td class=xl18912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl19012171 dir=LTR width=112 style='border-top:none;width:84pt'></td>
  <td class=xl19112171 dir=LTR width=4 style='border-top:none;width:3pt'></td>
  <td class=xl19112171 dir=LTR width=50 style='border-top:none;width:38pt'></td>
  <td class=xl19112171 dir=LTR width=78 style='border-top:none;width:59pt'></td>
  <td class=xl19112171 dir=LTR width=14 style='border-top:none;width:11pt'></td>
  <td class=xl19212171 dir=LTR width=5 style='border-top:none;width:4pt'></td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=13 style='mso-height-source:userset;height:9.75pt'>
  <td height=13 class=xl15412171 dir=LTR width=4 style='height:9.75pt;
  width:3pt'></td>
  <td colspan=4 class=xl23112171 dir=LTR width=103 style='border-right:.5pt solid black;
  width:78pt'>Archive Copy</td>
  <td class=xl14512171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=8 class=xl22212171 dir=LTR width=267 style='border-right:.5pt solid black;
  width:200pt'></td>
  <td class=xl18912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl19312171 dir=LTR width=112 style='border-top:none;width:84pt'></td>
  <td class=xl19412171 dir=LTR width=4 style='border-top:none;width:3pt'></td>
  <td class=xl19412171 dir=LTR width=50 style='border-top:none;width:38pt'></td>
  <td class=xl19412171 dir=LTR width=78 style='border-top:none;width:59pt'></td>
  <td class=xl19412171 dir=LTR width=14 style='border-top:none;width:11pt'></td>
  <td class=xl19512171 dir=LTR width=5 style='border-top:none;width:4pt'></td>
  <td class=xl9512171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=3 style='mso-height-source:userset;height:2.4pt'>
  <td height=3 class=xl15312171 dir=LTR width=4 style='height:2.4pt;width:3pt'></td>
  <td class=xl12812171 dir=LTR width=3 style='border-top:none;width:2pt'></td>
  <td class=xl12812171 dir=LTR width=33 style='border-top:none;width:25pt'></td>
  <td class=xl12712171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl12712171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl12712171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl12712171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl9912171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl9912171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl12712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl12712171 dir=LTR width=24 style='width:18pt'></td>
  <td class=xl12712171 dir=LTR width=7 style='width:5pt'></td>
  <td class=xl12712171 dir=LTR width=60 style='width:45pt'></td>
  <td class=xl12712171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12712171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12712171 dir=LTR width=144 style='width:108pt'></td>
  <td class=xl12712171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12712171 dir=LTR width=112 style='width:84pt'></td>
  <td class=xl12712171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12712171 dir=LTR width=50 style='width:38pt'></td>
  <td class=xl12712171 dir=LTR width=78 style='width:59pt'></td>
  <td class=xl12712171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl12712171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl9712171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=2 style='mso-height-source:userset;height:1.5pt'>
  <td height=2 class=xl15312171 dir=LTR width=4 style='height:1.5pt;width:3pt'></td>
  <td colspan=6 rowspan=3 class=xl20112171 dir=LTR width=139 style='border-right:
  .5pt solid black;border-bottom:.5pt solid black;width:105pt'>web link:<br>
    <?php echo $order['copy_link']; ?></td>
  <td class=xl9612171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=15 class=xl21012171 dir=LTR width=534 style='width:402pt'></td>
  <td class=xl9712171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=4 style='mso-height-source:userset;height:3.0pt'>
  <td height=4 class=xl15312171 dir=LTR width=4 style='height:3.0pt;width:3pt'></td>
  <td class=xl9912171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=15 class=xl21112171 dir=LTR width=534 style='width:402pt'></td>
  <td class=xl9712171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr class=xl9612171 height=13 style='mso-height-source:userset;height:9.6pt'>
  <td height=13 class=xl11312171 dir=LTR width=4 style='height:9.6pt;
  width:3pt'></td>
  <td class=xl18012171 dir=LTR width=4 style='width:3pt'></td>
  <td colspan=15 class=xl21212171 dir=LTR width=534 style='width:402pt'><p><img
  src="images/<?php echo $order['footer']; ?>.png"
  style="width: 650px;" class="fr-fic fr-dib"></p></td>
  <td class=xl11412171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <tr height=2 style='mso-height-source:userset;height:2.25pt'>
  <td height=2 class=xl11512171 dir=LTR width=4 style='height:2.25pt;
  width:3pt'></td>
  <td class=xl12612171 dir=LTR width=3 style='width:2pt'></td>
  <td class=xl12612171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl12612171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl12612171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl12612171 dir=LTR width=33 style='width:25pt'></td>
  <td class=xl12612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12612171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl12612171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl12612171 dir=LTR width=24 style='width:18pt'></td>
  <td class=xl12612171 dir=LTR width=7 style='width:5pt'></td>
  <td class=xl12612171 dir=LTR width=60 style='width:45pt'></td>
  <td class=xl12612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12612171 dir=LTR width=144 style='width:108pt'></td>
  <td class=xl12612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12612171 dir=LTR width=112 style='width:84pt'></td>
  <td class=xl12612171 dir=LTR width=4 style='width:3pt'></td>
  <td class=xl12612171 dir=LTR width=50 style='width:38pt'></td>
  <td class=xl12612171 dir=LTR width=78 style='width:59pt'></td>
  <td class=xl12612171 dir=LTR width=14 style='width:11pt'></td>
  <td class=xl12612171 dir=LTR width=5 style='width:4pt'></td>
  <td class=xl11612171 dir=LTR width=5 style='width:4pt'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=4 style='width:3pt'></td>
  <td width=3 style='width:2pt'></td>
  <td width=33 style='width:25pt'></td>
  <td width=33 style='width:25pt'></td>
  <td width=33 style='width:25pt'></td>
  <td width=33 style='width:25pt'></td>
  <td width=4 style='width:3pt'></td>
  <td width=4 style='width:3pt'></td>
  <td width=5 style='width:4pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=24 style='width:18pt'></td>
  <td width=7 style='width:5pt'></td>
  <td width=60 style='width:45pt'></td>
  <td width=4 style='width:3pt'></td>
  <td width=4 style='width:3pt'></td>
  <td width=144 style='width:108pt'></td>
  <td width=4 style='width:3pt'></td>
  <td width=112 style='width:84pt'></td>
  <td width=4 style='width:3pt'></td>
  <td width=50 style='width:38pt'></td>
  <td width=78 style='width:59pt'></td>
  <td width=14 style='width:11pt'></td>
  <td width=5 style='width:4pt'></td>
  <td width=5 style='width:4pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
