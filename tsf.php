<?php
	$currDir = dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	include_once("$currDir/header.php");

/* grant access to all users who have access to the projects table */
	$order_from = get_sql_from('tasfia');
	if(!$order_from) exit(error_message('Access denied!', false));


	/* get invoice */
	$order_id = intval($_REQUEST['id']);
	 if(!$order_id) exit(error_message('Invalid order ID!', false));

	/* retrieve order info */
	$order_fields = get_sql_fields('tasfia');
	$res = sql("select {$order_fields} from {$order_from} and tasfia.id={$order_id}", $eo);
	if(!($order = db_fetch_assoc($res))) exit(error_message('Order not found!', false));

	/* retrieve Tasfia items */
	$itemst = array();
	$item_fields = get_sql_fields('_tasfia_items');
	$item_from = get_sql_from('_tasfia_items');
	$resa = sql("select {$item_fields} from {$item_from} and _tasfia_items.newtasfia_link={$order_id}", $eo);
	while($rowa = db_fetch_assoc($resa)){
	$itemst[] = $rowa; 	}


	
	/* retrieve digital signatures */
	$itemsb = array();
	$order_totalb = 0;
	$item_fieldsb = get_sql_fields('digital_signatures');
	$item_fromb = get_sql_from('digital_signatures');
	$resb = sql("select {$item_fieldsb} from {$item_fromb} and digital_signatures.id_tasfia={$order_id}", $eo);
	while($row = db_fetch_assoc($resb)){
	$itemsb[] = $row; }

	/* retrieve Documents signatures */
	$itemsd = array();
	$order_totald = 0;
	$item_fieldsd = get_sql_fields('documents');
	$item_fromd = get_sql_from('documents');
	$resd = sql("select {$item_fieldsd} from {$item_fromd} and documents.id_tasfia={$order_id}", $eo);
	while($row = db_fetch_assoc($resd)){
	$itemsd[] = $row; }
	
include("$currDir/FORM_EXCELL/head1.html");
include("$currDir/FORM_EXCELL/tasfia.html");
	?>


	<!-- order items table -->
	<table class="table table-striped table-bordered">
	
		<thead>
			<th class="text-center"><font size='1pt'>#</th>
			<th class="text-center"><font size='1pt'>bahr#</th>
			<th class="text-center"><font size='1pt'>Description</th>
			<th class="text-center"><font size='1pt'>Project / QTN</th>
			<th class="text-center"><font size='1pt'>Invoice#</th>
			<th class="text-center"><font size='1pt'>Supplier</th>
			<th class="text-center"><font size='1pt'>value</th>
			<th class="text-center"><font size='1pt'>vat</th>
			<th class="text-center"><font size='1pt'>Total</th>
		</thead>

		<tbody>
			<?php foreach($itemst as $i => $itemt){ ?>
				<tr>
					<td class="text-center"><font size='1pt'><?php echo ($i + 1); ?></td>
					<td class="text-center"><font size='1pt'><?php echo $itemt['bahr_no']; ?></td>
					<td class="text-left"><font size='1pt'><?php echo $itemt['invoice_desc']; ?></td>
					<td class="text-left"><font size='1pt'><?php echo $itemt['project']; ?></td>
					<td class="text-center"><font size='1pt'><?php echo $itemt['invoice_no']; ?></td>
					<td class="text-right"><font size='1pt'><?php echo $itemt['supplier']; ?></td>
					<td class="text-right"><font size='1pt'><?php echo $itemt['value']; ?></td>
					<td class="text-right"><font size='1pt'><?php echo $itemt['vat']; ?></td>
					<td class="text-right"><font size='1pt'><?php echo $itemt['all_value']; ?></td>
				</tr>
			<?php } ?>
		</tbody>

		<tfoot>
			<tr>
				<th colspan="7" class="text-right"><font size='1pt'><?php echo number_format($order['value'], 2); ?></th>
				<th colspan="1" class="text-right"><font size='1pt'><?php echo number_format($order['vat'], 2); ?></th>
				<th colspan="1" class="text-right"><font size='1pt'><?php echo number_format($order['tasfia_value'], 2); ?></th>

             </tr>
		</tfoot>
		
	</table>
	




<!-- digitally signed table -->

	<table class="table table-striped table-bordered">
		<thead>
		<th colspan="6" >Digital Signatures:</th>
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









<!-- Manual Sign table -->
<?php include("$currDir/FORM_EXCELL/sign1.html");	?>





<!-- Footer -->
<p><img src="images/4.png" style="width: 1000px;" class="fr-fic fr-dib"></p>
		
