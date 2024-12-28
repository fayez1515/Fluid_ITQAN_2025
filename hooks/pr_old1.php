<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function pr_old1_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function pr_old1_header($contentType, $memberInfo, &$args) {
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

	function pr_old1_footer($contentType, $memberInfo, &$args) {
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

	function pr_old1_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function pr_old1_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function pr_old1_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function pr_old1_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function pr_old1_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function pr_old1_after_delete($selectedID, $memberInfo, &$args) {

	}

	function pr_old1_dv($selectedID, $memberInfo, &$html, &$args) {
		
		/* if this is the print preview, don't modify the detail view */
		if(isset($_REQUEST['dvprint_x'])) return;
		
		ob_start(); ?>
		
		<div id="form-tabs">
			<ul class="nav nav-tabs">
				<li><a href="#info" data-toggle="tab">info</a></li>
				<li class="active"><a href="#PR" data-toggle="tab">PR</a></li>
				<li><a href="#Items" data-toggle="tab">Items</a></li>

			</ul>
			
			<ul class="tab-content">
				<div class="tab-pane form-horizontal" id="info"></div>
				<div class="tab-pane active form-horizontal" id="PR"></div>
				<div class="tab-pane form-horizontal" id="Items"></div>

			</ul>
		</div>
		
		<style>
			#form-tabs .nav-tabs a{ display: block !important; }
		</style>
		
		<script>
			$j(function(){
				$j('#form-tabs').appendTo('#pr_old1_dv_form');
				
				$j('#id').parents('.form-group').appendTo('#info');
				$j('#Prepared_By').parents('.form-group').appendTo('#info');	
				$j('#created').parents('.form-group').appendTo('#info');				
				$j('#updated').parents('.form-group').appendTo('#info');	
				$j('#logo').parents('.form-group').appendTo('#info');
						
				$j('#head').parents('.form-group').appendTo('#PR');
				$j('#Status_Remarks').parents('.form-group').appendTo('#PR');
				$j('#time_line').parents('.form-group').appendTo('#PR');
				$j('#PRDate').parents('.form-group').appendTo('#PR');
				$j('#Date_Required').parents('.form-group').appendTo('#PR');
				$j('#Project').parents('.form-group').appendTo('#PR');
				$j('#Requester').parents('.form-group').appendTo('#PR');
				$j('#Ship_to').parents('.form-group').appendTo('#PR');
				$j('#priority').parents('.form-group').appendTo('#PR');
				$j('#ref_projects').parents('.form-group').appendTo('#PR');
				
				$j('#Item1').parents('.form-group').appendTo('#Items');
				$j('#Qty1').parents('.form-group').appendTo('#Items');
				$j('#Part1').parents('.form-group').appendTo('#Items');				
				$j('#Unit1').parents('.form-group').appendTo('#Items');	
				$j('#Fasel1').parents('.form-group').appendTo('#Items');
				$j('#Item2').parents('.form-group').appendTo('#Items');
				$j('#Qty2').parents('.form-group').appendTo('#Items');
				$j('#Part2').parents('.form-group').appendTo('#Items');		
				$j('#Unit2').parents('.form-group').appendTo('#Items');
				$j('#Fasel1_1').parents('.form-group').appendTo('#Items');
				$j('#Item3').parents('.form-group').appendTo('#Items');
				$j('#Qty3').parents('.form-group').appendTo('#Items');
				$j('#Part3').parents('.form-group').appendTo('#Items');		
				$j('#Unit3').parents('.form-group').appendTo('#Items');
				$j('#Fasel1_1_1').parents('.form-group').appendTo('#Items');
				$j('#Item4').parents('.form-group').appendTo('#Items');
				$j('#Qty4').parents('.form-group').appendTo('#Items');
				$j('#Part4').parents('.form-group').appendTo('#Items');		
				$j('#Unit4').parents('.form-group').appendTo('#Items');
				$j('#Fasel1_1_1_1').parents('.form-group').appendTo('#Items');
				$j('#Item5').parents('.form-group').appendTo('#Items');
				$j('#Qty5').parents('.form-group').appendTo('#Items');
				$j('#Part5').parents('.form-group').appendTo('#Items');		
				$j('#Unit5').parents('.form-group').appendTo('#Items');
				$j('#Fasel1_1_1_1_1').parents('.form-group').appendTo('#Items');
				$j('#Item6').parents('.form-group').appendTo('#Items');
				$j('#Qty6').parents('.form-group').appendTo('#Items');
				$j('#Part6').parents('.form-group').appendTo('#Items');		
				$j('#Unit6').parents('.form-group').appendTo('#Items');
				$j('#Fasel1_1_1_1_1_1').parents('.form-group').appendTo('#Items');
				$j('#Item7').parents('.form-group').appendTo('#Items');
				$j('#Qty7').parents('.form-group').appendTo('#Items');
				$j('#Part7').parents('.form-group').appendTo('#Items');		
				$j('#Unit7').parents('.form-group').appendTo('#Items');
				$j('#Fasel1_1_1_1_1_1_1').parents('.form-group').appendTo('#Items');
				$j('#Item8').parents('.form-group').appendTo('#Items');
				$j('#Qty8').parents('.form-group').appendTo('#Items');
				$j('#Part8').parents('.form-group').appendTo('#Items');		
				$j('#Unit8').parents('.form-group').appendTo('#Items');
				$j('#Fasel1_1_1_1_1_1_1_1').parents('.form-group').appendTo('#Items');
				$j('#Item9').parents('.form-group').appendTo('#Items');
				$j('#Qty9').parents('.form-group').appendTo('#Items');
				$j('#Part9').parents('.form-group').appendTo('#Items');		
				$j('#Unit9').parents('.form-group').appendTo('#Items');
				$j('#Fasel1_1_1_1_1_1_1_2').parents('.form-group').appendTo('#Items');
				$j('#Item10').parents('.form-group').appendTo('#Items');
				$j('#Qty10').parents('.form-group').appendTo('#Items');
				$j('#Part10').parents('.form-group').appendTo('#Items');		
				$j('#Unit10').parents('.form-group').appendTo('#Items');
				$j('#Fasel1_1_1_1_1_1_1_3').parents('.form-group').appendTo('#Items');
				$j('#Item11').parents('.form-group').appendTo('#Items');
				$j('#Qty11').parents('.form-group').appendTo('#Items');
				$j('#Part11').parents('.form-group').appendTo('#Items');				
				$j('#Unit11').parents('.form-group').appendTo('#Items');
				$j('#Fasel1_1_1_1_1_1_1_3_1').parents('.form-group').appendTo('#Items');
				$j('#Item12').parents('.form-group').appendTo('#Items');
				$j('#Qty12').parents('.form-group').appendTo('#Items');
				$j('#Part12').parents('.form-group').appendTo('#Items');			
				$j('#Unit12').parents('.form-group').appendTo('#Items');
			


			})
		</script>
		
		<?php
		$tabs = ob_get_contents();
		ob_end_clean();
		
		$html .= $tabs;
		

	}

	function pr_old1_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function pr_old1_batch_actions(&$args) {

		return array();
	}
