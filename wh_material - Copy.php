<?php
	$currDir = dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	include_once("$currDir/header.php");
	
	
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




/* grant access to all users who have access to the projects table */
	$order_from = get_sql_from('wh_requests');
	if(!$order_from) exit(error_message('Access denied!', false));


	/* get invoice */
	$order_id = intval($_REQUEST['id']);
	 if(!$order_id) exit(error_message('Invalid order ID!', false));

	/* retrieve order info */
	$order_fields = get_sql_fields('wh_requests');
	$res = sql("select {$order_fields} from {$order_from} and id_wh={$order_id}", $eo);
	if(!($order = db_fetch_assoc($res))) exit(error_message('Order not found!', false));

	/* retrieve order items */
	$items = array();
	$item_fields = get_sql_fields('_wh_request_items');
	$item_from = get_sql_from('_wh_request_items');
	$resa = sql("select {$item_fields} from {$item_from} and _wh_request_items.id_wh_request={$order_id}", $eo);
	while($rowa = db_fetch_assoc($resa)){
	$items[] = $rowa; 	}
	
	/* retrieve digital signatures */
	$itemsb = array();
	$order_totalb = 0;
	$item_fieldsb = get_sql_fields('digital_signatures');
	$item_fromb = get_sql_from('digital_signatures');
	$resb = sql("select {$item_fieldsb} from {$item_fromb} and digital_signatures.wh_request_link={$order_id}   ORDER BY digital_signatures.id_sign ", $eo);
	while($row = db_fetch_assoc($resb)){

	$itemsb[] = $row; }
		
include("$currDir/FORM_EXCELL/head1.html");
include("$currDir/FORM_EXCELL/pr_excell.html");

	?>

	<!-- order items table -->
	<table class="table table-striped table-bordered">
			<thead>
			<th class="text-center">#</th>
			<th>Code</th>
			<th>Part No</th>
			<th>item</th>
			<th>Note</th>
		    <th class="text-center">Stock</th>
			<th class="text-center">QTY</th>
			<th class="text-center">Unit</th>
			<th class="text-right">Value</th>
			<th class="text-right">Total</th>

		</thead>

		<tbody>
			<?php foreach($items as $i => $item){ ?>
			<tr>
				<td class="text-center"><?php echo ($i + 1); ?></td>
				<td><?php echo $item['code_wh']; ?></td>
				<td><?php echo $item['part_no']; ?></td>
				<td><?php echo $item['item']; ?></td>
				<td><?php echo $item['note']; ?></td>
				<td class="text-center">Y[_]__N[_]</td>
				<td class="text-center"><?php echo $item['qty']; ?></td>
				<td class="text-center"><?php echo $item['unit']; ?></td>
				<td class="text-right"><?php echo $item['value']; ?></td>
				<td class="text-right"><?php echo $item['total']; ?></td>

			</tr>
			<?php } ?>
		</tbody>

		
		
	</table>

<br>	



	
	
	
<!--New Signs table-->

	 
<style>
    table {
        width: 100%;
        border-collapse: separate; /* Necessary for border-radius */
        border-spacing: 0;
        border: 1px solid #333; /* Table border color */
        border-radius: 5px; /* Rounded corners */
    }
    th, td {
        padding: 1px;
        text-align: left;
        border-bottom: 1px solid #ddd; /* Row border */
    }
    /* Set column widths */
    .col-11 {
        width: 16%;
	border-left: 1px solid #333; /* Bottom border for the last row */

    }
    .col-12 {
        width: 16%; /* Adjusted for better layout */
	border-left: 1px solid #333; /* Bottom border for the last row */
    }
    .col-13 {
        width: 16%; /* Adjusted for better layout */
	border-left: 1px solid #333; /* Bottom border for the last row */
	}        
    .col-14 {
        width: 16%; /* Adjusted for better layout */
	border-left: 1px solid #333; /* Bottom border for the last row */
   }
    .col-15 {
        width: 16%; /* Adjusted for better layout */
	border-left: 1px solid #333; /* Bottom border for the last row */
    }
    .col-16 {
        width: 16%; /* Adjusted for better layout */
	border-left: 1px solid #333; /* Bottom border for the last row */
    }

    /* Responsive styles */
    @media (max-width: 600px) {
        .col-11, .col-12, .col-13, .col-14 .col-15 .col-16 {

        }
        td {
            display: block; /* Stack the cells vertically */
            width: 100%; 
        }
    }

    /* Styling for text */
    .small-text {
        font-size: 10px; /* Adjusted for readability */
    }
</style>


<table>
    <tbody>
        <tr>
            <td class="text-center col-11"><span class="small-text">CFO</span></td>
            <td class="text-center col-12"><span class="small-text">COO</span></td>
            <td class="text-center col-13"><span class="small-text">SUPPLY_CHAIN</span></td>
            <td class="text-center col-14"><span class="small-text">PMO</span></td>
            <td class="text-center col-15"><span class="small-text">PM</span></td>
            <td class="text-center col-16"><span class="small-text">REQUESTER</span></td>
        </tr>
        <tr>
            <td class="text-center col-11"><span class="small-text">المدير المالي</span></td>
            <td class="text-center col-12"><span class="small-text">مدير التشغيل</span></td>
            <td class="text-center col-13"><span class="small-text">سلسلة الإمداد</span></td>
            <td class="text-center col-14"><span class="small-text">مدير المشاريع</span></td>
            <td class="text-center col-15"><span class="small-text">مدير المشروع</span></td>
            <td class="text-center col-16"><span class="small-text">إعداد</span></td>
        </tr>

        <tr>
            <td class="text-center col-11"><span class="small-text"></span></td>
            <td class="text-center col-12"><span class="small-text"></span></td>
            <td class="text-center col-13"><span class="small-text"></span></td>
            <td class="text-center col-14"><span class="small-text"></span></td>
            <td class="text-center col-15"><span class="small-text"></span></td>
            <td class="text-center col-16"><span class="small-text"></span></td>
        </tr>
		
		
        <tr>
            <?php 
            // Initialize roles array
            $roles = [
                'CFO' => 11,
                'COO' => 12,
                'SUPPLY_CHAIN' => 13,
                'PMO' => 14,
                'PM' => 15,
                'REQUESTER' => 16,
            ];

            // Loop through each role to display signatures
            foreach ($roles as $role => $colIndex): 
                $sign = '.'; // Default placeholder
                foreach ($itemsb as $itemb) {
                    if ($itemb['sign_as'] === $role) {
                        $sign = htmlspecialchars($itemb['username']);
                        break; // Stop loop once match is found
                    }
                }
            ?>
                <td class="text-center col-<?php echo $colIndex; ?>">
                    <span class="small-text"><?php echo $sign; ?></span>
                </td>
            <?php endforeach; ?>
        </tr>









<tr>
    <?php 
    // Initialize roles array
    $roles = [
        'CFO' => 11,
        'COO' => 12,
        'SUPPLY_CHAIN' => 13,
        'PMO' => 14,
        'PM' => 15,
        'REQUESTER' => 16,
    ];

    // Create an associative array of signatures for quick access
    $signatures = [];
    foreach ($itemsb as $itemb) {
        // Store username and corresponding sign_as in the signatures array
        $signatures[$itemb['sign_as']] = htmlspecialchars($itemb['username']);
    }

    // Loop through each role to display photos
    foreach ($roles as $role => $colIndex): 
        // Use the stored username to construct the image path
        $username = isset($signatures[$role]) ? $signatures[$role] : null;
        $photo = $username ? "images/{$username}.png" : 'images/default.png'; // Fallback to a default image
    ?>
        <td class="text-center col-<?php echo $colIndex; ?>">
            <span class="small-text">
                <img src="<?php echo $photo; ?>" alt="<?php echo $role; ?>" style="width: 100px; height: auto;">
            </span>
        </td>
    <?php endforeach; ?>
</tr>




    </tbody>
</table>




</P>


<!-- digitally signed table -->

	<table class="table table-striped table-bordered">
		<thead>
		<th colspan="6" >Listing ALL Digital Signatures:</th>
		</thead>
		
	
		<tbody>
			<?php foreach($itemsb as $i => $itemb){ ?>
				<tr>
					<td>Sign ID # <?php echo $itemb['id_sign']; ?></td>
					<td><?php echo $itemb['sign']; ?></td>
					<td><?php echo $itemb['sign_as']; ?></td>
					<td><?php echo $itemb['notes']; ?></td>

				</tr>
			<?php } ?>
		</tbody>
       		
	</table>
	
	
	
	




<!-- Footer -->
<p><img src="images/4.png" style="width: 1000px;" class="fr-fic fr-dib"></p>