<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function ppm_renf_fe_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function ppm_renf_fe_header($contentType, $memberInfo, &$args) {
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

	function ppm_renf_fe_footer($contentType, $memberInfo, &$args) {
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

	function ppm_renf_fe_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function ppm_renf_fe_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function ppm_renf_fe_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function ppm_renf_fe_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function ppm_renf_fe_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function ppm_renf_fe_after_delete($selectedID, $memberInfo, &$args) {

	}

	function ppm_renf_fe_dv($selectedID, $memberInfo, &$html, &$args) {
		
		/* if this is the print preview, don't modify the detail view */
		if(isset($_REQUEST['dvprint_x'])) return;
		
		ob_start(); ?>
		
		<div id="form-tabs">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#Report" data-toggle="tab">Report</a></li>
				<li><a href="#Print_Setting" data-toggle="tab">Print_Setting</a></li>
			</ul>
			
			<ul class="tab-content">
				<div class="tab-pane active form-horizontal" id="Report"></div>
		        <div class="tab-pane form-horizontal" id="Print_Setting"></div>
			</ul>
		</div>
		
		<style>
			#form-tabs .nav-tabs a{ display: block !important; }
		</style>
		
		<script>
			$j(function(){
				$j('#form-tabs').appendTo('#ppm_renf_fe_dv_form');
				
				$j('#user').parents('.form-group').appendTo('#Report');
				$j('#id_renf_fe').parents('.form-group').appendTo('#Report');
				$j('#visit_date').parents('.form-group').appendTo('#Report');				
				$j('#next_date').parents('.form-group').appendTo('#Report');					
				$j('#customer').parents('.form-group').appendTo('#Report');
				$j('#site').parents('.form-group').appendTo('#Report');				
				$j('#notes').parents('.form-group').appendTo('#Report');
				
				$j('#id_renf_fe').parents('.form-group').appendTo('#Print_Setting');			
				$j('#header').parents('.form-group').appendTo('#Print_Setting');
				$j('#stamp').parents('.form-group').appendTo('#Print_Setting');
				$j('#stamp').parents('.form-group').appendTo('#Print_Setting');



			})
		</script>
		
		<?php
		$tabs = ob_get_contents();
		ob_end_clean();
		
		$html .= $tabs;
		

	}

	function ppm_renf_fe_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function ppm_renf_fe_batch_actions(&$args) {

		return [];
	}
