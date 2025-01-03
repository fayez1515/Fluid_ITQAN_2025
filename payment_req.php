<?php
	$currDir = dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	include_once("$currDir/header.php");

/* grant access to all users who have access to the _payment_schedule table */
	$order_from = get_sql_from('_payment_schedule');
	if(!$order_from) exit(error_message('Access denied!', false));


	/* get invoice */
	$order_id = intval($_REQUEST['id_pay']);
	 if(!$order_id) exit(error_message('Invalid order ID!', false));

	/* retrieve order info */
	$order_fields = get_sql_fields('_payment_schedule');
	$res = sql("select {$order_fields} from {$order_from} and id_pay={$order_id}", $eo);
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
.xl7712171
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
.xl7812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
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
	mso-number-format:"\#\,\#\#0";
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8012171
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
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:8.0pt;
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
.xl8312171
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
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8412171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:13.0pt;
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
	white-space:nowrap;}
.xl8512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:13.0pt;
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
.xl8612171
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
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8812171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:14.0pt;
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
.xl8912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
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
.xl9012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
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
.xl9112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
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
	white-space:nowrap;}
.xl9212171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
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
	white-space:nowrap;}
.xl9312171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
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
	white-space:nowrap;}
.xl9412171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
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
	text-align:left;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:middle;
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
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
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
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
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
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
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
.xl10112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:right;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10212171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10312171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10412171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10512171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
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
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10612171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
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
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl10712171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
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
	font-size:8.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
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
.xl10912171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:12.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:2.0pt double windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11012171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
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
.xl11112171
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
	vertical-align:top;
	background:white;
	mso-pattern:black none;
	white-space:normal;}
.xl11212171
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
	text-align:left;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11312171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:20.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
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
.xl11412171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:20.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
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
	white-space:nowrap;}
.xl11512171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:20.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
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
	white-space:nowrap;}
.xl11612171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
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
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11712171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
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
.xl11812171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
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
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl11912171
	{color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
.xl12012171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl12112171
	{color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;
	padding-left:12px;
	mso-char-indent-count:1;}
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

<table border=0 cellpadding=0 cellspacing=0 width=656 class=xl7712171
 style='border-collapse:collapse;table-layout:fixed;width:491pt'>
 <col class=xl7712171 width=14 style='mso-width-source:userset;mso-width-alt:
 483;width:10pt'>
 <col class=xl8012171 width=42 style='mso-width-source:userset;mso-width-alt:
 1507;width:32pt'>
 <col class=xl8012171 width=64 style='mso-width-source:userset;mso-width-alt:
 2275;width:48pt'>
 <col class=xl8012171 width=12 style='mso-width-source:userset;mso-width-alt:
 426;width:9pt'>
 <col class=xl8012171 width=57 style='mso-width-source:userset;mso-width-alt:
 2019;width:43pt'>
 <col class=xl7712171 width=19 style='mso-width-source:userset;mso-width-alt:
 682;width:14pt'>
 <col class=xl7912171 width=70 style='mso-width-source:userset;mso-width-alt:
 2474;width:52pt'>
 <col class=xl7912171 width=42 style='mso-width-source:userset;mso-width-alt:
 1507;width:32pt'>
 <col class=xl7712171 width=62 style='mso-width-source:userset;mso-width-alt:
 2190;width:46pt'>
 <col class=xl7712171 width=55 style='mso-width-source:userset;mso-width-alt:
 1962;width:41pt'>
 <col class=xl7712171 width=23 style='mso-width-source:userset;mso-width-alt:
 824;width:17pt'>
 <col class=xl7712171 width=30 style='mso-width-source:userset;mso-width-alt:
 1080;width:23pt'>
 <col class=xl7712171 width=79 span=2 style='mso-width-source:userset;
 mso-width-alt:2816;width:59pt'>
 <col class=xl8212171 width=8 style='mso-width-source:userset;mso-width-alt:
 284;width:6pt'>
 <tr height=10 style='mso-height-source:userset;height:7.2pt'>
  <td colspan=14 height=10 class=xl9712171 dir=LTR width=648 style='height:
  7.2pt;width:485pt'><a name="RANGE!A1:O29"><div
  class="hidden-print"><br>
    <div class="btn-group"><br>
    <button type="button" id="print"
  onclick="window.print();" title="Print" class="btn
  btn-primary"><i class="glyphicon
  glyphicon-print"></i> Print</button><span
  style='mso-spacerun:yes'>    </span><br>
    </div><br>
    </div></a></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.4pt'>
  <td colspan=15 height=19 class=xl9812171 dir=LTR width=656 style='height:
  14.4pt;width:491pt'><p><img src="images/<?php echo
  $order['header']; ?>.png" style="width: 700px;"
  class="fr-fic fr-dib"></p></td>
 </tr>
 <tr height=36 style='height:27.0pt'>
  <td colspan=15 height=36 class=xl11312171 dir=LTR width=656 style='border-right:
  2.0pt double black;height:27.0pt;width:491pt'>PAYMENT REQUEST</td>
 </tr>
 <tr height=22 style='height:16.2pt'>
  <td colspan=15 height=22 class=xl10912171 dir=LTR width=656 style='height:
  16.2pt;width:491pt'></td>
 </tr>
 <tr height=21 style='height:15.6pt'>
  <td height=21 class=xl7812171 dir=LTR width=14 style='height:15.6pt;
  width:10pt'></td>
  <td class=xl7812171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl7812171 dir=LTR width=64 style='width:48pt'></td>
  <td class=xl7812171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl7812171 dir=LTR width=57 style='width:43pt'></td>
  <td class=xl7812171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7812171 dir=LTR width=70 style='width:52pt'></td>
  <td class=xl7812171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl7812171 dir=LTR width=62 style='width:46pt'></td>
  <td class=xl7812171 dir=LTR width=55 style='width:41pt'></td>
  <td class=xl7812171 dir=LTR width=23 style='width:17pt'></td>
  <td class=xl7812171 dir=LTR width=30 style='width:23pt'></td>
  <td class=xl7812171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl7812171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl7812171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.6pt'>
  <td height=25 class=xl8712171 dir=LTR width=14 style='height:18.6pt;
  width:10pt'></td>
  <td colspan=7 rowspan=3 class=xl11212171 dir=LTR width=306 style='width:230pt'>Respected
  financial management<br>
    <br>
    Please issue an invoice based on the extracted data and according to the
  details and value below.</td>
  <td class=xl8912171 dir=RTL width=62 style='width:46pt'></td>
  <td colspan=5 rowspan=3 class=xl10112171 dir=RTL width=266 style='width:199pt'>السادة
  الإدارة المالية<span style='mso-spacerun:yes'>             
  </span>المحترمين<br>
    <br>
    برجاء إصدار فاتورة بناءا على بيانات المستخلص و حسب التفاصيل والقيمة أدناه.</td>
  <td class=xl8812171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.6pt'>
  <td height=25 class=xl8712171 dir=LTR width=14 style='height:18.6pt;
  width:10pt'></td>
  <td class=xl8912171 dir=RTL width=62 style='width:46pt'></td>
  <td class=xl8812171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.6pt'>
  <td height=25 class=xl8712171 dir=LTR width=14 style='height:18.6pt;
  width:10pt'></td>
  <td class=xl8912171 dir=RTL width=62 style='width:46pt'></td>
  <td class=xl8812171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=23 style='height:17.4pt'>
  <td height=23 class=xl8712171 dir=LTR width=14 style='height:17.4pt;
  width:10pt'></td>
  <td class=xl9612171 dir=RTL width=42 style='width:32pt'></td>
  <td class=xl9612171 dir=RTL width=64 style='width:48pt'></td>
  <td class=xl9612171 dir=RTL width=12 style='width:9pt'></td>
  <td class=xl9612171 dir=RTL width=57 style='width:43pt'></td>
  <td class=xl9612171 dir=RTL width=19 style='width:14pt'></td>
  <td class=xl9612171 dir=RTL width=70 style='width:52pt'></td>
  <td class=xl9612171 dir=RTL width=42 style='width:32pt'></td>
  <td class=xl9612171 dir=RTL width=62 style='width:46pt'></td>
  <td class=xl9612171 dir=RTL width=55 style='width:41pt'></td>
  <td class=xl9612171 dir=RTL width=23 style='width:17pt'></td>
  <td class=xl9612171 dir=RTL width=30 style='width:23pt'></td>
  <td class=xl9612171 dir=RTL width=79 style='width:59pt'></td>
  <td class=xl9612171 dir=RTL width=79 style='width:59pt'></td>
  <td class=xl8812171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=23 style='height:17.4pt'>
  <td height=23 class=xl8712171 dir=LTR width=14 style='height:17.4pt;
  width:10pt'></td>
  <td class=xl9612171 dir=RTL width=42 style='width:32pt'></td>
  <td class=xl9612171 dir=RTL width=64 style='width:48pt'></td>
  <td class=xl9612171 dir=RTL width=12 style='width:9pt'></td>
  <td class=xl9612171 dir=RTL width=57 style='width:43pt'></td>
  <td class=xl9612171 dir=RTL width=19 style='width:14pt'></td>
  <td class=xl9612171 dir=RTL width=70 style='width:52pt'></td>
  <td class=xl9612171 dir=RTL width=42 style='width:32pt'></td>
  <td class=xl9612171 dir=RTL width=62 style='width:46pt'></td>
  <td class=xl9612171 dir=RTL width=55 style='width:41pt'></td>
  <td class=xl9612171 dir=RTL width=23 style='width:17pt'></td>
  <td class=xl9612171 dir=RTL width=30 style='width:23pt'></td>
  <td class=xl9612171 dir=RTL width=79 style='width:59pt'></td>
  <td class=xl9612171 dir=RTL width=79 style='width:59pt'></td>
  <td class=xl8812171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.6pt'>
  <td height=25 class=xl7712171 dir=LTR width=14 style='height:18.6pt;
  width:10pt'></td>
  <td colspan=2 class=xl9512171 dir=LTR width=106 style='width:80pt'>Due date</td>
  <td class=xl9512171 dir=LTR width=12 style='width:9pt'>:</td>
  <td colspan=6 class=xl9512171 dir=LTR width=305 style='width:228pt'><?php
  echo $order['due_date']; ?></td>
  <td class=xl8512171 dir=LTR width=23 style='width:17pt'></td>
  <td colspan=3 class=xl10812171 dir=LTR width=188 style='width:141pt'>Pay ID:
  <?php echo $order['id_pay']; ?></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.6pt'>
  <td height=25 class=xl7712171 dir=LTR width=14 style='height:18.6pt;
  width:10pt'></td>
  <td colspan=2 class=xl9512171 dir=LTR width=106 style='width:80pt'>Customer</td>
  <td class=xl9512171 dir=LTR width=12 style='width:9pt'>:</td>
  <td colspan=6 class=xl9512171 dir=LTR width=305 style='width:228pt'><?php
  echo $order['customer']; ?></td>
  <td class=xl8412171 dir=LTR></td>
  <td colspan=3 rowspan=2 class=xl10212171 dir=LTR width=188 style='border-right:
  .5pt solid black;border-bottom:.5pt solid black;width:141pt'><?php echo
  $order['type']; ?></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.6pt'>
  <td height=25 class=xl7712171 dir=LTR width=14 style='height:18.6pt;
  width:10pt'></td>
  <td colspan=2 class=xl9512171 dir=LTR width=106 style='width:80pt'>PO ( # )</td>
  <td class=xl9512171 dir=LTR width=12 style='width:9pt'>:</td>
  <td colspan=6 class=xl9512171 dir=LTR width=305 style='width:228pt'><?php
  echo $order['po_no']; ?></td>
  <td class=xl8412171 dir=LTR></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.6pt'>
  <td height=25 class=xl7712171 dir=LTR width=14 style='height:18.6pt;
  width:10pt'></td>
  <td colspan=2 class=xl9512171 dir=LTR width=106 style='width:80pt'>PO start
  date</td>
  <td class=xl9512171 dir=LTR width=12 style='width:9pt'>:</td>
  <td colspan=6 class=xl9512171 dir=LTR width=305 style='width:228pt'><?php
  echo $order['po_start_date']; ?></td>
  <td class=xl8412171 dir=LTR></td>
  <td colspan=3 rowspan=3 class=xl11612171 dir=LTR width=188 style='border-right:
  .5pt solid black;border-bottom:.5pt solid black;width:141pt'><?php echo
  $order['projects_name']; ?></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.6pt'>
  <td height=25 class=xl7712171 dir=LTR width=14 style='height:18.6pt;
  width:10pt'></td>
  <td colspan=2 class=xl9512171 dir=LTR width=106 style='width:80pt'>Approval
  Type</td>
  <td class=xl9512171 dir=LTR width=12 style='width:9pt'>:</td>
  <td colspan=6 class=xl9512171 dir=LTR width=305 style='width:228pt'><?php
  echo $order['approval_type']; ?></td>
  <td class=xl8412171 dir=LTR></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.6pt'>
  <td height=25 class=xl7712171 dir=LTR width=14 style='height:18.6pt;
  width:10pt'></td>
  <td colspan=2 class=xl9512171 dir=LTR width=106 style='width:80pt'>Sales Man</td>
  <td class=xl9512171 dir=LTR width=12 style='width:9pt'>:</td>
  <td colspan=6 class=xl9512171 dir=LTR width=305 style='width:228pt'><?php
  echo $order['sales_man']; ?></td>
  <td class=xl8412171 dir=LTR></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=25 style='mso-height-source:userset;height:18.6pt'>
  <td height=25 class=xl7712171 dir=LTR width=14 style='height:18.6pt;
  width:10pt'></td>
  <td colspan=2 class=xl9512171 dir=LTR width=106 style='width:80pt'>Customer contact</td>
  <td class=xl9512171 dir=LTR width=12 style='width:9pt'>:</td>
  <td colspan=6 class=xl9512171 dir=LTR width=305 style='width:228pt'><?php
  echo $order['notes']; ?></td>
  <td class=xl8412171 dir=LTR></td>
  <td class=xl9412171 dir=LTR width=30 style='width:23pt'></td>
  <td class=xl9412171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl9412171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=19 style='mso-height-source:userset;height:14.4pt'>
  <td height=19 class=xl7712171 dir=LTR width=14 style='height:14.4pt;
  width:10pt'></td>
  <td class=xl9012171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl9012171 dir=LTR width=64 style='width:48pt'></td>
  <td class=xl9012171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl9112171 dir=LTR></td>
  <td class=xl9112171 dir=LTR></td>
  <td class=xl7712171 dir=LTR width=70 style='width:52pt'></td>
  <td class=xl7712171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl9212171 dir=LTR></td>
  <td class=xl9212171 dir=LTR></td>
  <td class=xl9312171 dir=LTR></td>
  <td class=xl7712171 dir=LTR width=30 style='width:23pt'></td>
  <td class=xl7712171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl7712171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=8 style='mso-height-source:userset;height:6.0pt'>
  <td height=8 class=xl7712171 dir=LTR width=14 style='height:6.0pt;width:10pt'></td>
  <td colspan=11 class=xl11912171 dir=LTR width=476 style='width:357pt'><u
  style='visibility:hidden;mso-ignore:visibility'></u></td>
  <td colspan=2 class=xl12012171 dir=LTR width=158 style='border-left:none;
  width:118pt'><u style='visibility:hidden;mso-ignore:visibility'></u></td>
  <td class=xl8812171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=23 style='height:17.4pt'>
  <td height=23 class=xl7712171 dir=LTR width=14 style='height:17.4pt;
  width:10pt'></td>
  <td colspan=11 class=xl12112171 dir=LTR width=476 style='width:357pt'><?php
  echo $order['description']; ?></td>
  <td colspan=2 class=xl9912171 dir=LTR width=158 style='border-left:none;
  width:118pt'><?php echo $order['value']; ?></td>
  <td class=xl8812171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=8 style='mso-height-source:userset;height:6.0pt'>
  <td height=8 class=xl7712171 dir=LTR width=14 style='height:6.0pt;width:10pt'></td>
  <td colspan=11 class=xl10012171 dir=LTR width=476 style='width:357pt'><u
  style='visibility:hidden;mso-ignore:visibility'></u></td>
  <td colspan=2 class=xl10012171 dir=LTR width=158 style='border-left:none;
  width:118pt'><u style='visibility:hidden;mso-ignore:visibility'></u></td>
  <td class=xl8812171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=22 style='mso-height-source:userset;height:16.8pt'>
  <td height=22 class=xl7712171 dir=LTR width=14 style='height:16.8pt;
  width:10pt'></td>
  <td class=xl8112171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl8112171 dir=LTR width=64 style='width:48pt'></td>
  <td class=xl8112171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl8112171 dir=LTR width=57 style='width:43pt'></td>
  <td class=xl8212171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl8612171 dir=LTR width=70 style='width:52pt'></td>
  <td class=xl8612171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl8612171 dir=LTR width=62 style='width:46pt'></td>
  <td class=xl8612171 dir=LTR width=55 style='width:41pt'></td>
  <td class=xl8312171 dir=LTR width=23 style='width:17pt'></td>
  <td class=xl8312171 dir=LTR width=30 style='width:23pt'></td>
  <td class=xl8312171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl8312171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.8pt'>
  <td height=18 class=xl7712171 dir=LTR width=14 style='height:13.8pt;
  width:10pt'></td>
  <td class=xl8012171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl8012171 dir=LTR width=64 style='width:48pt'></td>
  <td class=xl8012171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl8012171 dir=LTR width=57 style='width:43pt'></td>
  <td class=xl7712171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl7912171 dir=LTR width=70 style='width:52pt'></td>
  <td class=xl7912171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl7712171 dir=LTR width=62 style='width:46pt'></td>
  <td class=xl7712171 dir=LTR width=55 style='width:41pt'></td>
  <td class=xl8312171 dir=LTR width=23 style='width:17pt'></td>
  <td class=xl8312171 dir=LTR width=30 style='width:23pt'></td>
  <td class=xl8312171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl8312171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.8pt'>
  <td height=18 class=xl7712171 dir=LTR width=14 style='height:13.8pt;
  width:10pt'></td>
  <td colspan=13 class=xl11012171 dir=LTR width=634 style='width:475pt'>Document
  created <?php echo $order['created']; ?></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.8pt'>
  <td height=18 class=xl7712171 dir=LTR width=14 style='height:13.8pt;
  width:10pt'></td>
  <td colspan=13 class=xl11012171 dir=LTR width=634 style='width:475pt'>Document
  updated <?php echo $order['updated']; ?></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.8pt'>
  <td height=18 class=xl7712171 dir=LTR width=14 style='height:13.8pt;
  width:10pt'></td>
  <td class=xl9512171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl9512171 dir=LTR width=64 style='width:48pt'></td>
  <td class=xl9512171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl9512171 dir=LTR width=57 style='width:43pt'></td>
  <td class=xl9512171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl9512171 dir=LTR width=70 style='width:52pt'></td>
  <td class=xl9512171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl9512171 dir=LTR width=62 style='width:46pt'></td>
  <td class=xl9512171 dir=LTR width=55 style='width:41pt'></td>
  <td class=xl8312171 dir=LTR width=23 style='width:17pt'></td>
  <td class=xl8312171 dir=LTR width=30 style='width:23pt'></td>
  <td class=xl8312171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl8312171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.8pt'>
  <td height=18 class=xl7712171 dir=LTR width=14 style='height:13.8pt;
  width:10pt'></td>
  <td class=xl9512171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl9512171 dir=LTR width=64 style='width:48pt'></td>
  <td class=xl9512171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl9512171 dir=LTR width=57 style='width:43pt'></td>
  <td class=xl9512171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl9512171 dir=LTR width=70 style='width:52pt'></td>
  <td class=xl9512171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl9512171 dir=LTR width=62 style='width:46pt'></td>
  <td class=xl9512171 dir=LTR width=55 style='width:41pt'></td>
  <td class=xl8312171 dir=LTR width=23 style='width:17pt'></td>
  <td class=xl8312171 dir=LTR width=30 style='width:23pt'></td>
  <td class=xl8312171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl8312171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=18 style='height:13.8pt'>
  <td height=18 class=xl7712171 dir=LTR width=14 style='height:13.8pt;
  width:10pt'></td>
  <td class=xl9512171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl9512171 dir=LTR width=64 style='width:48pt'></td>
  <td class=xl9512171 dir=LTR width=12 style='width:9pt'></td>
  <td class=xl9512171 dir=LTR width=57 style='width:43pt'></td>
  <td class=xl9512171 dir=LTR width=19 style='width:14pt'></td>
  <td class=xl9512171 dir=LTR width=70 style='width:52pt'></td>
  <td class=xl9512171 dir=LTR width=42 style='width:32pt'></td>
  <td class=xl9512171 dir=LTR width=62 style='width:46pt'></td>
  <td class=xl9512171 dir=LTR width=55 style='width:41pt'></td>
  <td class=xl8312171 dir=LTR width=23 style='width:17pt'></td>
  <td class=xl8312171 dir=LTR width=30 style='width:23pt'></td>
  <td class=xl8312171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl8312171 dir=LTR width=79 style='width:59pt'></td>
  <td class=xl8212171 dir=LTR width=8 style='width:6pt'></td>
 </tr>
 <tr height=18 style='height:13.8pt'>
  <td colspan=15 height=18 class=xl11112171 dir=LTR width=656 style='height:
  13.8pt;width:491pt'><p><img src="images/<?php echo
  $order['footer']; ?>.png" style="width: 700px;"
  class="fr-fic fr-dib"></p></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=14 style='width:10pt'></td>
  <td width=42 style='width:32pt'></td>
  <td width=64 style='width:48pt'></td>
  <td width=12 style='width:9pt'></td>
  <td width=57 style='width:43pt'></td>
  <td width=19 style='width:14pt'></td>
  <td width=70 style='width:52pt'></td>
  <td width=42 style='width:32pt'></td>
  <td width=62 style='width:46pt'></td>
  <td width=55 style='width:41pt'></td>
  <td width=23 style='width:17pt'></td>
  <td width=30 style='width:23pt'></td>
  <td width=79 style='width:59pt'></td>
  <td width=79 style='width:59pt'></td>
  <td width=8 style='width:6pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
