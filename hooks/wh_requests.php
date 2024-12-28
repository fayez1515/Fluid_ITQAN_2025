<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function wh_requests_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function wh_requests_header($contentType, $memberInfo, &$args) {
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

	function wh_requests_footer($contentType, $memberInfo, &$args) {
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

	function wh_requests_before_insert(&$data, $memberInfo, &$args) {



		return TRUE;
	}

	function wh_requests_after_insert($data, $memberInfo, &$args) {



		return TRUE;
	}

	function wh_requests_before_update(&$data, $memberInfo, &$args) {
		
//$get_my_value = sqlValue("SELECT `sign_count` from `wh_requests` where `id_wh`='{$data['selectedID']}'");
//$data['save_sign_count_value'] = $get_my_value;
 
//if( $get_my_value > 0 )  return FALSE;


		return TRUE;
	}

	function wh_requests_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function wh_requests_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function wh_requests_after_delete($selectedID, $memberInfo, &$args) {

	}

	function wh_requests_dv($selectedID, $memberInfo, &$html, &$args) {
		
		/* if this is the print preview, don't modify the detail view */
		if(isset($_REQUEST['dvprint_x'])) return;
		
		ob_start(); ?>
		
		<div id="form-tabs">
			<ul class="nav nav-tabs">
				<li><a href="#info" data-toggle="tab">info</a></li>
                <li class="active"><a href="#mr" data-toggle="tab">Material Request</a></li>
				<li><a href="#prints" data-toggle="tab">Print Setting</a></li>
			</ul>
			
			<ul class="tab-content">
				<div class="tab-pane form-horizontal" id="info"></div>
				<div class="tab-pane active form-horizontal" id="mr"></div>
				<div class="tab-pane form-horizontal" id="prints"></div>

			</ul>
		</div>
		
		<style>
			#form-tabs .nav-tabs a{ display: block !important; }
		</style>
		
		<script>
			$j(function(){
				$j('#form-tabs').appendTo('#wh_requests_dv_form');

				$j('#id_wh').parents('.form-group').appendTo('#info');
				$j('#qtn').parents('.form-group').appendTo('#info');
				$j('#user').parents('.form-group').appendTo('#info');
				$j('#created').parents('.form-group').appendTo('#info');				
				$j('#updated').parents('.form-group').appendTo('#info');	
				$j('#ref').parents('.form-group').appendTo('#info');
				$j('#sign_count').parents('.form-group').appendTo('#info');	
				
				
				$j('#status_remarks').parents('.form-group').appendTo('#mr');	
				$j('#time_line').parents('.form-group').appendTo('#mr');
				$j('#date').parents('.form-group').appendTo('#mr');	
				$j('#date_required').parents('.form-group').appendTo('#mr');
				$j('#project').parents('.form-group').appendTo('#mr');
				$j('#requester').parents('.form-group').appendTo('#mr');
				$j('#ship_to').parents('.form-group').appendTo('#mr');				
				$j('#priority').parents('.form-group').appendTo('#mr');				
				$j('#department').parents('.form-group').appendTo('#mr');				
				
				
			

				$j('#id').parents('.form-group').appendTo('#prints');
				$j('#head1').parents('.form-group').appendTo('#prints');
				$j('#head1ar').parents('.form-group').appendTo('#prints');
				$j('#copy_link_1').parents('.form-group').appendTo('#prints');	
				$j('#header').parents('.form-group').appendTo('#prints');	
 				$j('#footer').parents('.form-group').appendTo('#prints');

			})
			
			
			
			$j(function(){
				<?php if($selectedID){ ?>
					$j('#wh_requests_dv_action_buttons .btn-toolbar').append(
						'<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
							'<button type="button" class="btn btn-warning btn-lg" onclick="print_whrq()">' +
								'<i class="glyphicon glyphicon-print"></i> Print Request</button>' +

						'</div>'
					
	
					
					);
					
				/*	$j('#wh_requests_dv_action_buttons .btn-toolbar').append(
						'<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
							'<button type="button" class="btn btn-warning btn-lg" onclick="print_test()">' +
								'<i class="glyphicon glyphicon-print"></i> Test</button>' +

						'</div>'
					
	
					
					); 
					*/
					
				<?php } ?>
			});

			function print_whrq(){
				var selectedID = '<?php echo urlencode($selectedID); ?>';
				window.location = 'wh_material.php?id=' + selectedID;
			}
			function print_test(){
				var selectedID = '<?php echo urlencode($selectedID); ?>';
				window.location = 'test.php?id=' + selectedID;
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

	function wh_requests_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function wh_requests_batch_actions(&$args) {

		return array();
	}
