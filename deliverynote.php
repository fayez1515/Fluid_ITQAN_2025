<?php
	$currDir = dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	include_once("$currDir/header.php");
/* grant access to all users who have access to the projects table */
	$order_from = get_sql_from('projects');
	if(!$order_from) exit(error_message('Access denied!', false));
/* get report */
	$order_id = intval($_REQUEST['id']);
	 if(!$order_id) exit(error_message('Invalid order ID!', false));
/* retrieve order */
	$order_fields = get_sql_fields('projects');
	$res = sql("select {$order_fields} from {$order_from} and projects.id={$order_id}", $eo);
	if(!($order = db_fetch_assoc($res))) exit(error_message('Order not found!', false));

/* retrieve items */
	$items = array();
	$order_total = 0;
	$item_fields = get_sql_fields('_qtn_items');
	$item_from = get_sql_from('_qtn_items');
	$res = sql("select {$item_fields} from {$item_from} and _qtn_items.id_projects={$order_id}", $eo);
	while($row = db_fetch_assoc($res)){$items[] = $row;}

//var_dump($order);

include_once("$currDir/FORM_EXCELL/delivery_note.html");

	?>



<!-- BOQ table -->
	<table class="table table-striped table-bordered">

		<thead>
			<th class="text-center">#</th>
			<th>Item</th>
			<th class="text-center">QTY</th>
			<th class="text-center">Unit</th>
			<th class="text-center">Notes</th>
		</thead>

		<tbody>
			<?php foreach($items as $i => $item){ ?>
				<tr>
					<td class="text-center"><?php echo ($i + 1); ?></td>
					<td><?php echo $item['item']; ?></p><?php echo $item['note']; ?></td>
					<td class="text-center"><?php echo $item['qty']; ?></td>
					<td class="text-center"><?php echo $item['unit']; ?></td>
					<td class="text-center">[____]</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	
	
	

</p>
.
</p>	

<!-- Sign & Stamp table -->
<table width="685">
<tbody>
<tr>
<td colspan="4" width="343">Customer:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $order['customer']; ?></td>
</tr>
<tr>
<tr>
<td colspan="4" width="343">Name:&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td colspan="4" width="343">Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
<td colspan="4" width="343">Sign: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</td>
</tr>
</tbody>
</table>

</p>	
<img style="display: block; margin-left: auto; margin-right: auto;"  src="images/4.png" style="width: 800px;" class="fr-fic fr-dib">

