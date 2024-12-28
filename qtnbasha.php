<?php
	$currDir = dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");

//	include_once("$currDir/header.php");

	/* grant access to all users who have access to the qtn table */
	$order_from = get_sql_from('qtn');
	if(!$order_from) exit(error_message('Access denied!', false));

	/* get invoice */
	$order_id = intval($_REQUEST['id']);
	 if(!$order_id) exit(error_message('Invalid order ID!', false));

	/* retrieve order info */
	$order_fields = get_sql_fields('qtn');
	$res = sql("select {$order_fields} from {$order_from} and id={$order_id}", $eo);
	if(!($order = db_fetch_assoc($res))) exit(error_message('Order not found!', false));

	//var_dump($order);

	/* retrieve order items */
	$items = array();
	$order_total = 0;
	$item_fields = get_sql_fields('_qtn_items');
	$item_from = get_sql_from('_qtn_items');
	$res = sql("select {$item_fields} from {$item_from} and _qtn_items.qtn_link={$order_id}", $eo);
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
	$resb = sql("select {$item_fieldsb} from {$item_fromb} and digital_signatures.qtn_link={$order_id}", $eo);
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
	white-space:nowrap;}
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
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8112171
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
	white-space:nowrap;}
.xl8212171
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
.xl8312171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
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
.xl8412171
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
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8512171
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
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl8712171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:underline;
	text-underline-style:single;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
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
	text-align:left;
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
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9012171
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
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9112171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:22.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Code 39-hoch-Logitogo";
	mso-generic-font-family:auto;
	mso-font-charset:2;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9212171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:24.0pt;
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
	white-space:nowrap;}
.xl9312171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:24.0pt;
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
.xl9412171
	{padding:0px;
	mso-ignore:padding;
	color:windowtext;
	font-size:24.0pt;
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
.xl9512171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:top;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl9612171
	{padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:9.0pt;
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

<table border=0 cellpadding=0 cellspacing=0 width=752 class=xl7712171
 style='border-collapse:collapse;table-layout:fixed;width:564pt'>
 <col class=xl7712171 width=26 style='mso-width-source:userset;mso-width-alt:
 938;width:20pt'>
 <col class=xl7712171 width=67 style='mso-width-source:userset;mso-width-alt:
 2389;width:50pt'>
 <col class=xl7712171 width=417 style='mso-width-source:userset;mso-width-alt:
 14819;width:313pt'>
 <col class=xl7712171 width=242 style='mso-width-source:userset;mso-width-alt:
 8590;width:181pt'>
 <tr class=xl7712171 height=14 style='mso-height-source:userset;height:10.2pt'>
  <td colspan=2 height=14 class=xl8912171 dir=LTR width=93 style='height:10.2pt;
  width:70pt'><a name="RANGE!A1:D19"><div
  class="hidden-print"><br>
    <div class="btn-group"><br>
    <button type="button" id="print"
  onclick="window.print();" title="<?php echo
  $order['Print']; ?>" class="btn btn-primary"><i
  class="glyphicon glyphicon-print"></i> <?php echo
  $order['Print']; ?></button><br>
    </div><br>
    </div><br>
    </a></td>
  <td class=xl7812171 dir=LTR width=417 style='width:313pt'></td>
  <td class=xl7812171 dir=LTR width=242 style='width:181pt'></td>
 </tr>
 <tr class=xl7712171 height=14 style='mso-height-source:userset;height:10.2pt'>
  <td colspan=4 height=14 class=xl8812171 dir=LTR width=752 style='height:10.2pt;
  width:564pt'><p><img src="images/<?php echo
  $order['header']; ?>.png" style="width: 820px;"
  class="fr-fic fr-dib"></p></td>
 </tr>
 <tr class=xl7712171 height=14 style='mso-height-source:userset;height:10.2pt'>
  <td height=14 class=xl7812171 dir=LTR width=26 style='height:10.2pt;
  width:20pt'></td>
  <td class=xl7912171 dir=LTR></td>
  <td class=xl7912171 dir=LTR></td>
  <td class=xl7912171 dir=LTR></td>
 </tr>
 <tr class=xl7712171 height=43 style='height:32.4pt'>
  <td colspan=4 height=43 class=xl9212171 dir=LTR style='border-right:2.0pt double black;
  height:32.4pt'>QUOTATION</td>
 </tr>
 <tr class=xl9612171 height=17 style='height:12.6pt'>
  <td height=17 class=xl8012171 dir=LTR style='height:12.6pt'></td>
  <td class=xl8112171 dir=LTR></td>
  <td class=xl8112171 dir=LTR></td>
  <td class=xl8012171 dir=LTR></td>
 </tr>
 <tr class=xl7712171 height=18 style='mso-height-source:userset;height:13.8pt'>
  <td colspan=4 height=18 class=xl8712171 dir=LTR width=752 style='height:13.8pt;
  width:564pt'><?php echo $order['subject']; ?></td>
 </tr>
 <tr class=xl7712171 height=14 style='mso-height-source:userset;height:10.2pt'>
  <td height=14 class=xl8712171 dir=LTR width=26 style='height:10.2pt;
  width:20pt'></td>
  <td class=xl8712171 dir=LTR width=67 style='width:50pt'></td>
  <td class=xl8712171 dir=LTR width=417 style='width:313pt'></td>
  <td class=xl8712171 dir=LTR width=242 style='width:181pt'></td>
 </tr>
 <tr class=xl7712171 height=16 style='height:12.0pt'>
  <td height=16 class=xl8612171 dir=LTR width=26 style='height:12.0pt;
  width:20pt'>=></td>
  <td class=xl8112171 dir=LTR>Date</td>
  <td class=xl8212171 dir=LTR width=417 style='width:313pt'><?php echo
  $order['date']; ?></td>
  <td class=xl8012171 dir=LTR><?php echo $order['sales_man']; ?></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.6pt'>
  <td height=17 class=xl8312171 dir=LTR width=26 style='height:12.6pt;
  width:20pt'>=></td>
  <td class=xl8112171 dir=LTR>Customer</td>
  <td class=xl8212171 dir=LTR width=417 style='width:313pt'><?php echo
  $order['customer']; ?> - <?php echo $order['location']; ?></td>
  <td class=xl8012171 dir=LTR><span
  id="Sales_Email<%%RND1%%>"><?php echo
  $order['sales_email']; ?></span></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.6pt'>
  <td height=17 class=xl8312171 dir=LTR width=26 style='height:12.6pt;
  width:20pt'>=></td>
  <td class=xl8112171 dir=LTR>Attention</td>
  <td class=xl8212171 dir=LTR width=417 style='width:313pt'><?php echo
  $order['attn']; ?></td>
  <td class=xl8012171 dir=LTR><span
  id="Sales_Tel<%%RND1%%>"><?php echo
  $order['sales_tel']; ?></span></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.6pt'>
  <td height=17 class=xl8312171 dir=LTR width=26 style='height:12.6pt;
  width:20pt'>=></td>
  <td class=xl8412171 dir=LTR width=67 style='width:50pt'>Payment</td>
  <td class=xl8512171 dir=LTR align=left width=417 style='width:313pt'><?php
  echo $order['payment']; ?></td>
  <td rowspan=2 class=xl9112171 dir=LTR width=242 style='width:181pt'>*QTN_<?php
  echo $order['id']; ?>*</td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.6pt'>
  <td height=17 class=xl8612171 dir=LTR width=26 style='height:12.6pt;
  width:20pt'>=></td>
  <td class=xl8412171 dir=LTR width=67 style='width:50pt'>Validity</td>
  <td class=xl8512171 dir=LTR align=left width=417 style='width:313pt'><?php
  echo $order['offer_validity']; ?></td>
 </tr>
 <tr class=xl7712171 height=16 style='height:12.0pt'>
  <td height=16 class=xl8612171 dir=LTR width=26 style='height:12.0pt;
  width:20pt'>=></td>
  <td class=xl8412171 dir=LTR width=67 style='width:50pt'>Execution</td>
  <td class=xl8512171 dir=LTR align=left width=417 style='width:313pt'><?php
  echo $order['execution']; ?></td>
  <td rowspan=2 class=xl9512171 dir=LTR width=242 style='width:181pt'>QTN #
  <?php echo $order['id']; ?></td>
 </tr>
 <tr class=xl7712171 height=18 style='mso-height-source:userset;height:13.8pt'>
  <td height=18 class=xl8612171 dir=LTR width=26 style='height:13.8pt;
  width:20pt'>=></td>
  <td class=xl8412171 dir=LTR width=67 style='width:50pt'>Terms</td>
  <td rowspan=5 class=xl8412171 dir=LTR width=417 style='width:313pt'><?php
  echo $order['terms']; ?></td>
 </tr>
 <tr class=xl7712171 height=16 style='height:12.0pt'>
  <td height=16 class=xl8612171 dir=LTR width=26 style='height:12.0pt;
  width:20pt'></td>
  <td class=xl7712171 dir=LTR width=67 style='width:50pt'></td>
  <td rowspan=4 class=xl9012171 dir=LTR width=242 style='width:181pt'><p><img
  src="images/<?php echo $order['stamp']; ?>.png"
  style="width: 95px;" class="fr-fic fr-dib"></p></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.6pt'>
  <td height=17 class=xl7712171 dir=LTR width=26 style='height:12.6pt;
  width:20pt'></td>
  <td class=xl7712171 dir=LTR width=67 style='width:50pt'></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.6pt'>
  <td height=17 class=xl7712171 dir=LTR width=26 style='height:12.6pt;
  width:20pt'></td>
  <td class=xl7712171 dir=LTR width=67 style='width:50pt'></td>
 </tr>
 <tr class=xl7712171 height=17 style='mso-height-source:userset;height:12.6pt'>
  <td height=17 class=xl7712171 dir=LTR width=26 style='height:12.6pt;
  width:20pt'></td>
  <td class=xl7712171 dir=LTR width=67 style='width:50pt'></td>
 </tr>
 <tr class=xl7712171 height=20 style='mso-height-source:userset;height:15.0pt'>
  <td colspan=4 height=20 class=xl8712171 dir=LTR width=752 style='height:15.0pt;
  width:564pt'>BOQ for the works :</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=26 style='width:20pt'></td>
  <td width=67 style='width:50pt'></td>
  <td width=417 style='width:313pt'></td>
  <td width=242 style='width:181pt'></td>
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
			<th class="text-center">Notes</th>
			<th class="text-center">Qty</th>
			<th class="text-center">Price/u</th>

			<th class="text-center">Total</th>
		</thead>

		<tbody>
			<?php foreach($items as $i => $item){ ?>
				<tr>
					<td class="text-center"><?php echo ($i + 1); ?></td>
					<td><?php echo $item['item']; ?></td>
					<td class="text-left"><?php echo $item['note']; ?></td>
					<td class="text-right"><?php echo $item['qty']; ?></td>
					<td class="text-right"><?php echo $item['value']; ?></td>

					<td class="text-right"><?php echo number_format($item['LineTotal'], 2); ?></td>
				</tr>
			<?php } ?>
		</tbody>

		<tfoot>
			<tr>
				<th colspan="5" class="text-right">SUM</th>
				<th class="text-right"><?php echo number_format($order_total, 2); ?></th>
			</tr>
			<tr>
				<th colspan="5" class="text-right">VAT 15%</th>
				<th class="text-right"><?php echo number_format($order['vat'], 2); ?></th>
			</tr>
			<tr>
				<th colspan="5" class="text-right">TOTAL AFTER VAT</th>
				<th class="text-right"><?php echo number_format($order_total + $order['vat'], 2); ?></th>
			</tr>
		</tfoot>
		
	</table>
	



<!-- digitally signed table -->


<p>&nbsp;</p>
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
	
	<p><img src="images/<?php echo $order['footer']; ?>.png" style="width: 800px;" class="fr-fic fr-dib"></p>

