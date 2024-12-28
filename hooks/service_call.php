<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function service_call_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function service_call_header($contentType, $memberInfo, &$args) {
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

	function service_call_footer($contentType, $memberInfo, &$args) {
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

	function service_call_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function service_call_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function service_call_before_update(&$data, $memberInfo, &$args) {
		
		
		
//$get_my_value = sqlValue("SELECT `header`.`id_hd`, IF(CHAR_LENGTH(`header`.`address_help`) || CHAR_LENGTH(`header`.`photo`), CONCAT_WS('', `header`.`address_help`, '/', `header`.`photo`), '') FROM `header` ORDER BY 2");
//$get_my_value = $data['header_logo_value'];

//$data['header_logo_address'] = $get_my_value ;

		return TRUE;
	}

	function service_call_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function service_call_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function service_call_after_delete($selectedID, $memberInfo, &$args) {

	}

	function service_call_dv($selectedID, $memberInfo, &$html, &$args) {
		

		/* if this is the print preview, don't modify the detail view */
		if(isset($_REQUEST['dvprint_x'])) return;
		
		ob_start(); ?>
		
		<div id="form-tabs">
			<ul class="nav nav-tabs">
				<li><a href="#info" data-toggle="tab">info</a></li>
				<li class="active"><a href="#Report" data-toggle="tab">Report</a></li>
				<li><a href="#Items" data-toggle="tab">Items</a></li>
				<li><a href="#Site_Photo" data-toggle="tab">Site_Photo</a></li>
				<li><a href="#Print_Setting" data-toggle="tab">Print_Setting</a></li>
			</ul>
			
			<ul class="tab-content">
				<div class="tab-pane form-horizontal" id="info"></div>
				<div class="tab-pane active form-horizontal" id="Report"></div>
				<div class="tab-pane form-horizontal" id="Items"></div>
				<div class="tab-pane form-horizontal" id="Site_Photo"></div>
				<div class="tab-pane form-horizontal" id="Print_Setting"></div>
			</ul>
		</div>
		
		<style>
			#form-tabs .nav-tabs a{ display: block !important; }
		</style>
		
		<script>
			$j(function(){
				$j('#form-tabs').appendTo('#service_call_dv_form');
				
				$j('#id_sc').parents('.form-group').appendTo('#info');
				$j('#user').parents('.form-group').appendTo('#info');
				$j('#created').parents('.form-group').appendTo('#info');				
				$j('#updated').parents('.form-group').appendTo('#info');					
			    $j('#copy_link').parents('.form-group').appendTo('#info');	
				
				$j('#assigned_to').parents('.form-group').appendTo('#Report');
				$j('#head').parents('.form-group').appendTo('#Report');
				$j('#visit_date').parents('.form-group').appendTo('#Report');				
				$j('#customer').parents('.form-group').appendTo('#Report');
				$j('#logo_value').parents('.form-group').appendTo('#Report');
				$j('#site').parents('.form-group').appendTo('#Report');
				$j('#request').parents('.form-group').appendTo('#Report');
				$j('#ref').parents('.form-group').appendTo('#Report');
				$j('#project').parents('.form-group').appendTo('#Report');
				$j('#work_report').parents('.form-group').appendTo('#Report');
				
				

				$j('#fasel__1').parents('.form-group').appendTo('#Items');
				$j('#Item1').parents('.form-group').appendTo('#Items');
				$j('#Qty1').parents('.form-group').appendTo('#Items');
				$j('#Part1').parents('.form-group').appendTo('#Items');				
				$j('#fasel__2').parents('.form-group').appendTo('#Items');
				$j('#Item2').parents('.form-group').appendTo('#Items');
				$j('#Qty2').parents('.form-group').appendTo('#Items');
				$j('#Part2').parents('.form-group').appendTo('#Items');		
				$j('#fasel__3').parents('.form-group').appendTo('#Items');
				$j('#Item3').parents('.form-group').appendTo('#Items');
				$j('#Qty3').parents('.form-group').appendTo('#Items');
				$j('#Part3').parents('.form-group').appendTo('#Items');		
				$j('#fasel__4').parents('.form-group').appendTo('#Items');
				$j('#Item4').parents('.form-group').appendTo('#Items');
				$j('#Qty4').parents('.form-group').appendTo('#Items');
				$j('#Part4').parents('.form-group').appendTo('#Items');		
				$j('#fasel__5').parents('.form-group').appendTo('#Items');
				$j('#Item5').parents('.form-group').appendTo('#Items');
				$j('#Qty5').parents('.form-group').appendTo('#Items');
				$j('#Part5').parents('.form-group').appendTo('#Items');		
				$j('#fasel__6').parents('.form-group').appendTo('#Items');
				$j('#Item6').parents('.form-group').appendTo('#Items');
				$j('#Qty6').parents('.form-group').appendTo('#Items');
				$j('#Part6').parents('.form-group').appendTo('#Items');		
				$j('#fasel__7').parents('.form-group').appendTo('#Items');
				$j('#Item7').parents('.form-group').appendTo('#Items');
				$j('#Qty7').parents('.form-group').appendTo('#Items');
				$j('#Part7').parents('.form-group').appendTo('#Items');		
				$j('#fasel__8').parents('.form-group').appendTo('#Items');
				$j('#Item8').parents('.form-group').appendTo('#Items');
				$j('#Qty8').parents('.form-group').appendTo('#Items');
				$j('#Part8').parents('.form-group').appendTo('#Items');		
				$j('#fasel__9').parents('.form-group').appendTo('#Items');
				$j('#Item9').parents('.form-group').appendTo('#Items');
				$j('#Qty9').parents('.form-group').appendTo('#Items');
				$j('#Part9').parents('.form-group').appendTo('#Items');		
				$j('#fasel__10').parents('.form-group').appendTo('#Items');
				$j('#Item10').parents('.form-group').appendTo('#Items');
				$j('#Qty10').parents('.form-group').appendTo('#Items');
				$j('#Part10').parents('.form-group').appendTo('#Items');		
					
				
				
				$j('#Photo1').parents('.form-group').appendTo('#Site_Photo');
				$j('#comment1').parents('.form-group').appendTo('#Site_Photo');
				$j('#Photo2').parents('.form-group').appendTo('#Site_Photo');
				$j('#comment2').parents('.form-group').appendTo('#Site_Photo');
				$j('#Photo3').parents('.form-group').appendTo('#Site_Photo');
				$j('#comment3').parents('.form-group').appendTo('#Site_Photo');
				$j('#Photo4').parents('.form-group').appendTo('#Site_Photo');
				$j('#comment4').parents('.form-group').appendTo('#Site_Photo');				
				
				
				

                $j('#header').parents('.form-group').appendTo('#Print_Setting');				
				$j('#header_left').parents('.form-group').appendTo('#Print_Setting');
				$j('#header_right').parents('.form-group').appendTo('#Print_Setting');
				$j('#footer').parents('.form-group').appendTo('#Print_Setting');
				$j('#stamp').parents('.form-group').appendTo('#Print_Setting');

				$j('#table_items').parents('.form-group').appendTo('#Print_Setting');
				$j('#table_qty').parents('.form-group').appendTo('#Print_Setting');
				$j('#table_part').parents('.form-group').appendTo('#Print_Setting');
				$j('#pdf_count').parents('.form-group').appendTo('#Print_Setting');
			


			})
			
			$j(function(){
				<?php if($selectedID){ ?>
					$j('#service_call_dv_action_buttons .btn-toolbar').append(
						'<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
							'<button type="button" class="btn btn-warning btn-lg" onclick="print_sc()">' +
								'<i class="glyphicon glyphicon-print"></i> Print Report</button>' +

						'</div>'
					
	
					
					);
					
				/*	$j('#service_call_dv_action_buttons .btn-toolbar').append(
						'<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
							'<button type="button" class="btn btn-warning btn-lg" onclick="print_cost()">' +
								'<i class="glyphicon glyphicon-print"></i> test</button>' +

						'</div>'
					
	
					
					);
					*/
					
				<?php } ?>
			});

			function print_sc(){
				var selectedID = '<?php echo urlencode($selectedID); ?>';
				window.location = 'scprnt.php?id_sc=' + selectedID;
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

	function service_call_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function service_call_batch_actions(&$args) {

		return [];
	}
