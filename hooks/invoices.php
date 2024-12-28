<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function invoices_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function invoices_header($contentType, $memberInfo, &$args) {
		$header='';

		switch($contentType) {
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function invoices_footer($contentType, $memberInfo, &$args) {
		$footer='';

		switch($contentType) {
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function invoices_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function invoices_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function invoices_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function invoices_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function invoices_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function invoices_after_delete($selectedID, $memberInfo, &$args) {

	}

	function invoices_dv($selectedID, $memberInfo, &$html, &$args) {
		
		/* if this is the print preview, don't modify the detail view */
		if(isset($_REQUEST['dvprint_x'])) return;
		
		ob_start(); ?>
		
		<div id="form-tabs">
			<ul class="nav nav-tabs">
				<li><a href="#info" data-toggle="tab">info</a></li>
				<li class="active"><a href="#invoice" data-toggle="tab">My invoice</a></li>
				<li><a href="#items" data-toggle="tab">items</a></li>



			</ul>
			
			<ul class="tab-content">
				<div class="tab-pane form-horizontal" id="info"></div>
				<div class="tab-pane active form-horizontal" id="invoice"></div>
				<div class="tab-pane form-horizontal" id="items"></div>


			</ul>
		</div>
		
		<style>
			#form-tabs .nav-tabs a{ display: block !important; }
		</style>
		
		<script>
			$j(function(){
				$j('#form-tabs').appendTo('#invoices_dv_form');
				

				$j('#id').parents('.form-group').appendTo('#info');
				$j('#user').parents('.form-group').appendTo('#info');	
				$j('#created').parents('.form-group').appendTo('#info');				
				$j('#updated').parents('.form-group').appendTo('#info');

                
				$j('#date').parents('.form-group').appendTo('#invoice');
				$j('#finance_Invoice_ref').parents('.form-group').appendTo('#invoice');		
				$j('#Item_1').parents('.form-group').appendTo('#invoice');
				$j('#Qty_1').parents('.form-group').appendTo('#invoice');
				$j('#Value_1').parents('.form-group').appendTo('#invoice');
				$j('#Total_1').parents('.form-group').appendTo('#invoice');
				$j('#sum').parents('.form-group').appendTo('#invoice');	

                $j('#customer').parents('.form-group').appendTo('#invoice');
				$j('#project_id').parents('.form-group').appendTo('#invoice');
				$j('#project').parents('.form-group').appendTo('#invoice');
				$j('#tahseel_info').parents('.form-group').appendTo('#invoice');
				$j('#status').parents('.form-group').appendTo('#invoice');
				$j('#region').parents('.form-group').appendTo('#invoice');
				$j('#city').parents('.form-group').appendTo('#invoice');
				$j('#invoice_assign').parents('.form-group').appendTo('#invoice');

	
				$j('#Note_1').parents('.form-group').appendTo('#items');
				$j('#Fasel__1').parents('.form-group').appendTo('#items');
				
				$j('#Note_2').parents('.form-group').appendTo('#items');
				$j('#Item_2').parents('.form-group').appendTo('#items');
				$j('#Qty_2').parents('.form-group').appendTo('#items');
				$j('#Value_2').parents('.form-group').appendTo('#items');
				$j('#Total_2').parents('.form-group').appendTo('#items');
				$j('#Fasel__2').parents('.form-group').appendTo('#items');
				
				$j('#Note_3').parents('.form-group').appendTo('#items');
				$j('#Item_3').parents('.form-group').appendTo('#items');
				$j('#Qty_3').parents('.form-group').appendTo('#items');
				$j('#Value_3').parents('.form-group').appendTo('#items');
				$j('#Total_3').parents('.form-group').appendTo('#items');
				$j('#Fasel__3').parents('.form-group').appendTo('#items');

				$j('#Note_4').parents('.form-group').appendTo('#items');
				$j('#Item_4').parents('.form-group').appendTo('#items');
				$j('#Qty_4').parents('.form-group').appendTo('#items');
				$j('#Value_4').parents('.form-group').appendTo('#items');
				$j('#Total_4').parents('.form-group').appendTo('#items');
				$j('#Fasel__4').parents('.form-group').appendTo('#items');

				$j('#Note_5').parents('.form-group').appendTo('#items');
				$j('#Item_5').parents('.form-group').appendTo('#items');
				$j('#Qty_5').parents('.form-group').appendTo('#items');
				$j('#Value_5').parents('.form-group').appendTo('#items');
				$j('#Total_5').parents('.form-group').appendTo('#items');
				$j('#Fasel__5').parents('.form-group').appendTo('#items');

				$j('#Note_6').parents('.form-group').appendTo('#items');
				$j('#Item_6').parents('.form-group').appendTo('#items');
				$j('#Qty_6').parents('.form-group').appendTo('#items');
				$j('#Value_6').parents('.form-group').appendTo('#items');
				$j('#Total_6').parents('.form-group').appendTo('#items');
				$j('#Fasel__6').parents('.form-group').appendTo('#items');				

				$j('#vat').parents('.form-group').appendTo('#items');
				$j('#total_all').parents('.form-group').appendTo('#items');
				$j('#total_alfa').parents('.form-group').appendTo('#items');	
				
				


			})
		</script>
		
		<?php
		$tabs = ob_get_contents();
		ob_end_clean();
		
		$html .= $tabs;
		

	}

	function invoices_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function invoices_batch_actions(&$args) {

		return array();
	}
