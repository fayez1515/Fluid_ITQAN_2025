<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function projects_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function projects_header($contentType, $memberInfo, &$args) {
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

	function projects_footer($contentType, $memberInfo, &$args) {
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

	function projects_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function projects_after_insert($data, $memberInfo, &$args) {


		return TRUE;
	}

	function projects_before_update(&$data, $memberInfo, &$args) {
		
//  $get_my_value = sqlValue("SELECT `sign_count` from `projects` where `id`='{$data['selectedID']}'");
//  $data['save_sign_count_value'] = $get_my_value;
 
//  if( $get_my_value > 0 )  return FALSE;

//  $get_total = sqlValue("SELECT `total` from `projects` where `id`='{$data['selectedID']}'");

//  $get_gp_ratio = sqlValue("SELECT `gp_ratio` from `projects` where `id`='{$data['selectedID']}'");
 
//	if(  $get_gp_ratio > 40  )  $data['level_result'] = 1  ;
//  if(  $get_gp_ratio < 40  )  $data['level_result'] = 2  ;
	
//	if(  $level_result = 1  )  $data['gp_note'] = With_in_limited_range  ;
//	if(  $level_result = 2  )  $data['gp_note'] = NOT_IN_RANGE__NEED_APPROVAL  ;



		return TRUE;
	}

	function projects_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function projects_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function projects_after_delete($selectedID, $memberInfo, &$args) {

	}

	function projects_dv($selectedID, $memberInfo, &$html, &$args) {
		
		/* if this is the print preview, don't modify the detail view */
		if(isset($_REQUEST['dvprint_x'])) return;
		
		ob_start(); ?>
		
		<div id="form-tabs">
			<ul class="nav nav-tabs">
				<li><a href="#info" data-toggle="tab">info</a></li>
				<li class="active"><a href="#QTN" data-toggle="tab"> My Quotation</a></li>
				<li><a href="#cost" data-toggle="tab"> My Cost Sheet</a></li>				
				<li><a href="#PR" data-toggle="tab"> My Project</a></li>
                <li><a href="#other" data-toggle="tab"> Others</a></li>

			</ul>
			
			<ul class="tab-content">
				<div class="tab-pane form-horizontal" id="info"></div>
				<div class="tab-pane active form-horizontal" id="QTN"></div>
				<div class="tab-pane form-horizontal" id="cost"></div>
				<div class="tab-pane form-horizontal" id="PR"></div>

				<div class="tab-pane form-horizontal" id="other"></div>


			</ul>
		</div>
		
		<style>
			#form-tabs .nav-tabs a{ display: block !important; }
		</style>
		
		<script>
			$j(function(){
				$j('#form-tabs').appendTo('#projects_dv_form');

				$j('#copy_contract_value').parents('.form-group').appendTo('#info');	
			    $j('#all_sched_payments').parents('.form-group').appendTo('#info');
			    $j('#all_sched_sites').parents('.form-group').appendTo('#info');	
				$j('#status').parents('.form-group').appendTo('#info');
			    $j('#logo').parents('.form-group').appendTo('#info');	
			    $j('#site_counter').parents('.form-group').appendTo('#info');	
				$j('#last_update').parents('.form-group').appendTo('#info');
				$j('#copy_link').parents('.form-group').appendTo('#info');
                $j('#all_invoices_percent').parents('.form-group').appendTo('#info');
                $j('#all_invoices').parents('.form-group').appendTo('#info');				
				$j('#sign_count').parents('.form-group').appendTo('#info');


				$j('#id').parents('.form-group').appendTo('#QTN');
				$j('#CostCode').parents('.form-group').appendTo('#QTN');
				$j('#region').parents('.form-group').appendTo('#QTN');						
				$j('#date').parents('.form-group').appendTo('#QTN');	
				$j('#subject').parents('.form-group').appendTo('#QTN');
				$j('#attn').parents('.form-group').appendTo('#QTN');
				$j('#customer').parents('.form-group').appendTo('#QTN');
				$j('#sales_man').parents('.form-group').appendTo('#QTN');
				$j('#payment').parents('.form-group').appendTo('#QTN');
				$j('#execution').parents('.form-group').appendTo('#QTN');
				$j('#offer_validity').parents('.form-group').appendTo('#QTN');
				$j('#terms').parents('.form-group').appendTo('#QTN');
				$j('#total').parents('.form-group').appendTo('#QTN');	
				$j('#vat').parents('.form-group').appendTo('#QTN');
				$j('#total_fine').parents('.form-group').appendTo('#QTN');				
				
				$j('#gp_ratio').parents('.form-group').appendTo('#cost');
				$j('#gp_note').parents('.form-group').appendTo('#cost');

				$j('#Fasel_1').parents('.form-group').appendTo('#cost');
				
				$j('#total_material_cost').parents('.form-group').appendTo('#cost');
				$j('#Fasel_2').parents('.form-group').appendTo('#cost');

				$j('#hours').parents('.form-group').appendTo('#cost');	
				$j('#technicains').parents('.form-group').appendTo('#cost');
				$j('#hour_cost').parents('.form-group').appendTo('#cost');					
				$j('#labour_cost').parents('.form-group').appendTo('#cost');
				$j('#notes_labour_cost').parents('.form-group').appendTo('#cost');
				$j('#Fasel_3').parents('.form-group').appendTo('#cost');

				$j('#other_cost').parents('.form-group').appendTo('#cost');			
				$j('#notes_other_cost').parents('.form-group').appendTo('#cost');
				$j('#Fasel_4').parents('.form-group').appendTo('#cost');
				
				$j('#other_cost2').parents('.form-group').appendTo('#cost');			
				$j('#notes_other_cost2').parents('.form-group').appendTo('#cost');
				$j('#Fasel_5').parents('.form-group').appendTo('#cost');				
				
				$j('#other_cost3').parents('.form-group').appendTo('#cost');			
				$j('#notes_other_cost3').parents('.form-group').appendTo('#cost');
				$j('#Fasel_6').parents('.form-group').appendTo('#cost');
				
				$j('#total_cost').parents('.form-group').appendTo('#cost');				
				$j('#gp').parents('.form-group').appendTo('#cost');



				$j('#actual_finish_date').parents('.form-group').appendTo('#PR');
				$j('#ref').parents('.form-group').appendTo('#PR');	
				$j('#name').parents('.form-group').appendTo('#PR');
				$j('#description').parents('.form-group').appendTo('#PR');	
				$j('#site').parents('.form-group').appendTo('#PR');
				$j('#con_customer_manager').parents('.form-group').appendTo('#PR');
                $j('#type').parents('.form-group').appendTo('#PR');
				$j('#po_no').parents('.form-group').appendTo('#PR');
				$j('#project_value').parents('.form-group').appendTo('#PR');
				$j('#approval_type').parents('.form-group').appendTo('#PR');
				$j('#po_start_date').parents('.form-group').appendTo('#PR');
				$j('#planned_start_date').parents('.form-group').appendTo('#PR');
				$j('#po_end_date').parents('.form-group').appendTo('#PR');
				$j('#contract_period').parents('.form-group').appendTo('#PR');
				$j('#number_sites').parents('.form-group').appendTo('#PR');
				$j('#number_visits_year').parents('.form-group').appendTo('#PR');
				$j('#visit_every').parents('.form-group').appendTo('#PR');
				$j('#auto_renew').parents('.form-group').appendTo('#PR');
				




			

				$j('#remaining_uninvoiced').parents('.form-group').appendTo('#other');
				$j('#days_consumed').parents('.form-group').appendTo('#other');				
				$j('#all_paid_amount').parents('.form-group').appendTo('#other');
				$j('#unpaid_amount').parents('.form-group').appendTo('#other');
				$j('#current_year_invoices').parents('.form-group').appendTo('#other');
				$j('#current_year_payments').parents('.form-group').appendTo('#other');
				$j('#last_years_invoices').parents('.form-group').appendTo('#other');
				$j('#last_years_payments').parents('.form-group').appendTo('#other');

				
				$j('#header').parents('.form-group').appendTo('#other');	
				$j('#stamp').parents('.form-group').appendTo('#other');	
 				$j('#footer').parents('.form-group').appendTo('#other');		
    			$j('#docs').parents('.form-group').appendTo('#other');	
				$j('#created').parents('.form-group').appendTo('#other');				
				$j('#updated').parents('.form-group').appendTo('#other');				


			})
			
			
			
			$j(function(){
				<?php if($selectedID){ ?>
					$j('#projects_dv_action_buttons .btn-toolbar').append(
						'<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
							'<button type="button" class="btn btn-warning btn-lg" onclick="print_qtn()">' +
								'<i class="glyphicon glyphicon-print"></i> Quotation</button>' +

						'</div>'
					
	
					
					);
					
					$j('#projects_dv_action_buttons .btn-toolbar').append(
						'<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
							'<button type="button" class="btn btn-warning btn-lg" onclick="print_cost()">' +
								'<i class="glyphicon glyphicon-print"></i> Cost Sheet</button>' +

						'</div>'
										
					);
					
					
					$j('#projects_dv_action_buttons .btn-toolbar').append(
				    '<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
					'<button type="button" class="btn btn-warning btn-lg" onclick="print_dl()">' +
					'<i class="glyphicon glyphicon-print"></i> Delivery note</button>' +
					'</div>'
					);
					
					
					
					
				<?php } ?>
			});

			function print_qtn(){
				var selectedID = '<?php echo urlencode($selectedID); ?>';
				window.location = 'qtnprojects.php?id=' + selectedID;
			}
			function print_cost(){
				var selectedID = '<?php echo urlencode($selectedID); ?>';
				window.location = 'costprojects.php?id=' + selectedID;
			}
			function print_dl(){
				var selectedID = '<?php echo urlencode($selectedID); ?>';
				window.location = 'deliverynote.php?id=' + selectedID;
			}
			function do_something_else(){
				alert("We're doing something else!");
			}
			
			
			
		</script>
		
		<?php

		$form_code = ob_get_contents();
		ob_end_clean();

		$html .= $form_code;
		

	}

	function projects_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function projects_batch_actions(&$args) {

		return array();
	}
