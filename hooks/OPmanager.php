<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function OPmanager_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function OPmanager_header($contentType, $memberInfo, &$args) {
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

	function OPmanager_footer($contentType, $memberInfo, &$args) {
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

	function OPmanager_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function OPmanager_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function OPmanager_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function OPmanager_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function OPmanager_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function OPmanager_after_delete($selectedID, $memberInfo, &$args) {

	}

	function OPmanager_dv($selectedID, $memberInfo, &$html, &$args) {
		
		
		/* if this is the print preview, don't modify the detail view */
		if(isset($_REQUEST['dvprint_x'])) return;
		
		ob_start(); ?>
		
		<div id="form-tabs">
			<ul class="nav nav-tabs">
				<li><a href="#info" data-toggle="tab">info</a></li>
				<li class="active"><a href="#OPmanager" data-toggle="tab">OPmanager</a></li>
				<li><a href="#Items" data-toggle="tab">Items</a></li>
				<li><a href="#PDF_Attach" data-toggle="tab">PDF_Attach</a></li>

			</ul>
			
			<ul class="tab-content">
				<div class="tab-pane form-horizontal" id="info"></div>
				<div class="tab-pane active form-horizontal" id="OPmanager"></div>
				<div class="tab-pane form-horizontal" id="Items"></div>
				<div class="tab-pane form-horizontal" id="PDF_Attach"></div>

			</ul>
		</div>
		
		<style>
			#form-tabs .nav-tabs a{ display: block !important; }
		</style>
		
		<script>
			$j(function(){
				$j('#form-tabs').appendTo('#OPmanager_dv_form');
				
				$j('#id').parents('.form-group').appendTo('#info');
				$j('#Created_By').parents('.form-group').appendTo('#info');	
				$j('#created').parents('.form-group').appendTo('#info');				
				$j('#updated').parents('.form-group').appendTo('#info');	
				$j('#tail').parents('.form-group').appendTo('#info');
				$j('#tail_adding').parents('.form-group').appendTo('#info');
								
				$j('#Status').parents('.form-group').appendTo('#OPmanager');
				$j('#InputDate').parents('.form-group').appendTo('#OPmanager');
				$j('#Admin').parents('.form-group').appendTo('#OPmanager');
				$j('#ClosingDate').parents('.form-group').appendTo('#OPmanager');
				$j('#Op_Name').parents('.form-group').appendTo('#OPmanager');
				$j('#City').parents('.form-group').appendTo('#OPmanager');
				$j('#comment').parents('.form-group').appendTo('#OPmanager');
				$j('#Customer').parents('.form-group').appendTo('#OPmanager');
				$j('#logo_value').parents('.form-group').appendTo('#OPmanager');
				$j('#BranchNo').parents('.form-group').appendTo('#OPmanager');
				$j('#QT_Approval').parents('.form-group').appendTo('#OPmanager');
				$j('#RFQ').parents('.form-group').appendTo('#OPmanager');
				$j('#PO_No').parents('.form-group').appendTo('#OPmanager');
				$j('#DeliveryNote_No').parents('.form-group').appendTo('#OPmanager');
				$j('#Invoice_No').parents('.form-group').appendTo('#OPmanager');
				$j('#year').parents('.form-group').appendTo('#OPmanager');
				$j('#Invoice_Desc').parents('.form-group').appendTo('#OPmanager');
				$j('#Invoice_Value').parents('.form-group').appendTo('#OPmanager');
				$j('#Paid').parents('.form-group').appendTo('#OPmanager');
	
				$j('#QTN_PDF').parents('.form-group').appendTo('#PDF_Attach');
				$j('#PO_PDF').parents('.form-group').appendTo('#PDF_Attach');
				$j('#Delivery_PDF').parents('.form-group').appendTo('#PDF_Attach');
				$j('#Invoice_PDF').parents('.form-group').appendTo('#PDF_Attach');
				$j('#Other_PDF').parents('.form-group').appendTo('#PDF_Attach');

                $j('#Fasel_1').parents('.form-group').appendTo('#Items');
				$j('#Item_1').parents('.form-group').appendTo('#Items');
				$j('#Qty_1').parents('.form-group').appendTo('#Items');
				$j('#Value_1').parents('.form-group').appendTo('#Items');				
				$j('#Total_1').parents('.form-group').appendTo('#Items');	
				$j('#Fasel_2').parents('.form-group').appendTo('#Items');
				$j('#Item_2').parents('.form-group').appendTo('#Items');
				$j('#Qty_2').parents('.form-group').appendTo('#Items');
				$j('#Value_2').parents('.form-group').appendTo('#Items');		
				$j('#Total_2').parents('.form-group').appendTo('#Items');
				$j('#Fasel_3').parents('.form-group').appendTo('#Items');
				$j('#Item_3').parents('.form-group').appendTo('#Items');
				$j('#Qty_3').parents('.form-group').appendTo('#Items');
				$j('#Value_3').parents('.form-group').appendTo('#Items');		
				$j('#Total_3').parents('.form-group').appendTo('#Items');
				$j('#Fasel_4').parents('.form-group').appendTo('#Items');
				$j('#Item_4').parents('.form-group').appendTo('#Items');
				$j('#Qty_4').parents('.form-group').appendTo('#Items');
				$j('#Value_4').parents('.form-group').appendTo('#Items');		
				$j('#Total_4').parents('.form-group').appendTo('#Items');
				$j('#Fasel_5').parents('.form-group').appendTo('#Items');
				$j('#Item_5').parents('.form-group').appendTo('#Items');
				$j('#Qty_5').parents('.form-group').appendTo('#Items');
				$j('#Value_5').parents('.form-group').appendTo('#Items');		
				$j('#Total_5').parents('.form-group').appendTo('#Items');
				$j('#Fasel_6').parents('.form-group').appendTo('#Items');
				$j('#Item_6').parents('.form-group').appendTo('#Items');
				$j('#Qty_6').parents('.form-group').appendTo('#Items');
				$j('#Value_6').parents('.form-group').appendTo('#Items');		
				$j('#Total_6').parents('.form-group').appendTo('#Items');
				$j('#Fasel_7').parents('.form-group').appendTo('#Items');
				$j('#Item_7').parents('.form-group').appendTo('#Items');
				$j('#Qty_7').parents('.form-group').appendTo('#Items');
				$j('#Value_7').parents('.form-group').appendTo('#Items');		
				$j('#Total_7').parents('.form-group').appendTo('#Items');
				$j('#Fasel_8').parents('.form-group').appendTo('#Items');
				$j('#Item_8').parents('.form-group').appendTo('#Items');
				$j('#Qty_8').parents('.form-group').appendTo('#Items');
				$j('#Value_8').parents('.form-group').appendTo('#Items');		
				$j('#Total_8').parents('.form-group').appendTo('#Items');
				$j('#Fasel_9').parents('.form-group').appendTo('#Items');
				$j('#Item_9').parents('.form-group').appendTo('#Items');
				$j('#Qty_9').parents('.form-group').appendTo('#Items');
				$j('#Value_9').parents('.form-group').appendTo('#Items');		
				$j('#Total_9').parents('.form-group').appendTo('#Items');
				$j('#Fasel_10').parents('.form-group').appendTo('#Items');
				$j('#Item_10').parents('.form-group').appendTo('#Items');
				$j('#Qty_10').parents('.form-group').appendTo('#Items');
				$j('#Value_10').parents('.form-group').appendTo('#Items');		
				$j('#Total_10').parents('.form-group').appendTo('#Items');
				$j('#Fasel11').parents('.form-group').appendTo('#Items');
				$j('#Item_11').parents('.form-group').appendTo('#Items');
				$j('#Qty_11').parents('.form-group').appendTo('#Items');
				$j('#Value_11').parents('.form-group').appendTo('#Items');				
				$j('#Total_11').parents('.form-group').appendTo('#Items');
				$j('#Fasel12').parents('.form-group').appendTo('#Items');
				$j('#Item_12').parents('.form-group').appendTo('#Items');
				$j('#Qty_12').parents('.form-group').appendTo('#Items');
				$j('#Value_12').parents('.form-group').appendTo('#Items');			
				$j('#Total_12').parents('.form-group').appendTo('#Items');
				$j('#Fasel13').parents('.form-group').appendTo('#Items');
				$j('#Item_13').parents('.form-group').appendTo('#Items');
				$j('#Qty_13').parents('.form-group').appendTo('#Items');
				$j('#Value_13').parents('.form-group').appendTo('#Items');				
				$j('#Total_13').parents('.form-group').appendTo('#Items');
				$j('#Fasel14').parents('.form-group').appendTo('#Items');
				$j('#Item_14').parents('.form-group').appendTo('#Items');
				$j('#Qty_14').parents('.form-group').appendTo('#Items');
				$j('#Value_14').parents('.form-group').appendTo('#Items');			
				$j('#Total_14').parents('.form-group').appendTo('#Items');			
				
				$j('#Fasel3').parents('.form-group').appendTo('#Items');
				$j('#Total').parents('.form-group').appendTo('#Items');	

			})
		</script>
		
		<?php
		$tabs = ob_get_contents();
		ob_end_clean();
		
		$html .= $tabs;
		
		
		

	}

	function OPmanager_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function OPmanager_batch_actions(&$args) {

		return array();
	}
