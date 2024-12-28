<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function _payment_schedule_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function _payment_schedule_header($contentType, $memberInfo, &$args) {
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

	function _payment_schedule_footer($contentType, $memberInfo, &$args) {
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

	function _payment_schedule_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function _payment_schedule_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function _payment_schedule_before_update(&$data, $memberInfo, &$args) {
		
		
		
//$get_my_value = sqlValue("SELECT `header`.`id_hd`, IF(CHAR_LENGTH(`header`.`address_help`) || CHAR_LENGTH(`header`.`photo`), CONCAT_WS('', `header`.`address_help`, '/', `header`.`photo`), '') FROM `header` ORDER BY 2");
//$get_my_value = $data['header_logo_value'];

//$data['header_logo_address'] = $get_my_value ;

		return TRUE;
	}

	function _payment_schedule_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function _payment_schedule_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function _payment_schedule_after_delete($selectedID, $memberInfo, &$args) {

	}

	function _payment_schedule_dv($selectedID, $memberInfo, &$html, &$args) {
		

		/* if this is the print preview, don't modify the detail view */
		if(isset($_REQUEST['dvprint_x'])) return;
		
		ob_start(); ?>
		
		<div id="form-tabs">
			<ul class="nav nav-tabs">
				<li><a href="#info" data-toggle="tab">info</a></li>
				<li class="active"><a href="#Report" data-toggle="tab">Payment</a></li>
				<li><a href="#Items" data-toggle="tab">Items</a></li>

			</ul>
			
			<ul class="tab-content">
				<div class="tab-pane form-horizontal" id="info"></div>
				<div class="tab-pane active form-horizontal" id="Report"></div>
				<div class="tab-pane form-horizontal" id="Items"></div>

			</ul>
		</div>
		
		<style>
			#form-tabs .nav-tabs a{ display: block !important; }
		</style>
		
		<script>
			$j(function(){
				$j('#form-tabs').appendTo('#_payment_schedule_dv_form');
				
				$j('#header').parents('.form-group').appendTo('#info');
				$j('#footer').parents('.form-group').appendTo('#info');
				$j('#updated').parents('.form-group').appendTo('#info');
				$j('#created').parents('.form-group').appendTo('#info');				
				$j('#copy_link').parents('.form-group').appendTo('#info');					

			    $j('#id_pay').parents('.form-group').appendTo('#Report');					
				$j('#status').parents('.form-group').appendTo('#Report');
				$j('#order').parents('.form-group').appendTo('#Report');
				$j('#description').parents('.form-group').appendTo('#Report');				
				$j('#value').parents('.form-group').appendTo('#Report');
				$j('#due_date').parents('.form-group').appendTo('#Report');
				$j('#notes').parents('.form-group').appendTo('#Report');
				$j('#region').parents('.form-group').appendTo('#Report');
				$j('#projects_name').parents('.form-group').appendTo('#Report');
				$j('#customer').parents('.form-group').appendTo('#Report');
				$j('#total_po_value').parents('.form-group').appendTo('#Report');
				$j('#type').parents('.form-group').appendTo('#Report');
				$j('#po_no').parents('.form-group').appendTo('#Report');
				$j('#po_start_date').parents('.form-group').appendTo('#Report');				
				$j('#po_end_date').parents('.form-group').appendTo('#Report');
				$j('#actual_finish_date').parents('.form-group').appendTo('#Report');
				$j('#approval_type').parents('.form-group').appendTo('#Report');
				$j('#sales_man').parents('.form-group').appendTo('#Report');		
				$j('#project').parents('.form-group').appendTo('#Report');


			})
			
			$j(function(){
				<?php if($selectedID){ ?>
					$j('#_payment_schedule_dv_action_buttons .btn-toolbar').append(
						'<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
							'<button type="button" class="btn btn-warning btn-lg" onclick="print_pay()">' +
								'<i class="glyphicon glyphicon-print"></i> Print Request</button>' +

						'</div>'
					
	
					
					);
					
				/*	$j('#_payment_schedule_dv_action_buttons .btn-toolbar').append(
						'<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
							'<button type="button" class="btn btn-warning btn-lg" onclick="print_cost()">' +
								'<i class="glyphicon glyphicon-print"></i> test</button>' +

						'</div>'
					
	
					
					);
					*/
					
				<?php } ?>
			});

			function print_pay(){
				var selectedID = '<?php echo urlencode($selectedID); ?>';
				window.location = 'payment_req.php?id_pay=' + selectedID;
			}
			function print_cost(){
				var selectedID = '<?php echo urlencode($selectedID); ?>';
				window.location = 'costsc.php?id=' + selectedID;
			}

			function do_something_else(){
				alert("We're doing something else!");
			}
			
			
			
		</script>
		
		<?php
		$tabs = ob_get_contents();
		ob_end_clean();
		
		$html .= $tabs;
		

	}

	function _payment_schedule_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function _payment_schedule_batch_actions(&$args) {

		return [];
	}
