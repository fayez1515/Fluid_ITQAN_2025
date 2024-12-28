<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function ppm_all_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function ppm_all_header($contentType, $memberInfo, &$args) {
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

	function ppm_all_footer($contentType, $memberInfo, &$args) {
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

	function ppm_all_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function ppm_all_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function ppm_all_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function ppm_all_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function ppm_all_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function ppm_all_after_delete($selectedID, $memberInfo, &$args) {

	}

	function ppm_all_dv($selectedID, $memberInfo, &$html, &$args) {
		
		/* if this is the print preview, don't modify the detail view */
		if(isset($_REQUEST['dvprint_x'])) return;
		
		ob_start(); ?>
		
		<div id="form-tabs">
			<ul class="nav nav-tabs">
				<li><a href="#info" data-toggle="tab">info</a></li>
				<li class="active"><a href="#PPM" data-toggle="tab">PPM</a></li>
				<li><a href="#Fire_Alarm" data-toggle="tab">Fire_Alarm</a></li>
				<li><a href="#Fire_Fighting" data-toggle="tab">Fire_Fighting</a></li>
				<li><a href="#Extinguishers" data-toggle="tab">Extinguishers</a></li>
				<li><a href="#fm" data-toggle="tab">FM200 and Auto system</a></li>
				<li><a href="#others" data-toggle="tab">others</a></li>
				<li><a href="#Setting" data-toggle="tab">Setting</a></li>
			</ul>
			
			<ul class="tab-content">
				<div class="tab-pane form-horizontal" id="info"></div>
				<div class="tab-pane active form-horizontal" id="PPM"></div>
				<div class="tab-pane form-horizontal" id="Fire_Alarm"></div>
				<div class="tab-pane form-horizontal" id="Fire_Fighting"></div>
				<div class="tab-pane form-horizontal" id="Extinguishers"></div>
				<div class="tab-pane form-horizontal" id="fm"></div>
				<div class="tab-pane form-horizontal" id="others"></div>
				<div class="tab-pane form-horizontal" id="Setting"></div>
			</ul>
		</div>
		
		<style>
			#form-tabs .nav-tabs a{ display: block !important; }
		</style>
		
		<script>
			$j(function(){
				$j('#form-tabs').appendTo('#ppm_all_dv_form');
				
				$j('#id').parents('.form-group').appendTo('#info');
				$j('#user').parents('.form-group').appendTo('#info');
				$j('#created').parents('.form-group').appendTo('#info');
				$j('#updated').parents('.form-group').appendTo('#info');
				
				$j('#assigned_to').parents('.form-group').appendTo('#PPM');
				$j('#VisitDate').parents('.form-group').appendTo('#PPM');
 				$j('#Customer').parents('.form-group').appendTo('#PPM');            
				$j('#site').parents('.form-group').appendTo('#PPM');
				$j('#logo_value').parents('.form-group').appendTo('#PPM');			
				$j('#Need_Quotation').parents('.form-group').appendTo('#PPM');				
				$j('#_PMResult').parents('.form-group').appendTo('#PPM');
				$j('#_PPM_Notes').parents('.form-group').appendTo('#PPM');
                $j('#tag').parents('.form-group').appendTo('#PPM');
				
				
				
				

				$j('#created').parents('.form-group').appendTo('#info');				
				$j('#updated').parents('.form-group').appendTo('#info');
				
				$j('#FA_Pan_Brand').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#FA_Cir').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#FA_Power').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#FA_Charger').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#FA_Battery').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#FA_Cabling').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#FA_Detectors').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#FA_MCP').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#FA_Bells').parents('.form-group').appendTo('#Fire_Alarm');
				
				$j('#FF_Hose').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#FF_Jockey').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#FF_Elec').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#FF_Diesel').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#FF_Guage').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#FF_Control').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#FF_Valves').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#FF_Oil').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#FF_Fuel').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#FF_WaterTank').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#FF_Battery').parents('.form-group').appendTo('#Fire_Fighting');
				
				$j('#Powder_FE_Small').parents('.form-group').appendTo('#Extinguishers');
				$j('#Powder_FE_Big').parents('.form-group').appendTo('#Extinguishers');
				$j('#CO2_FE').parents('.form-group').appendTo('#Extinguishers');
				$j('#Other_FE').parents('.form-group').appendTo('#Extinguishers');
				
				$j('#r_panel').parents('.form-group').appendTo('#fm');
				$j('#r_devices').parents('.form-group').appendTo('#fm');
				$j('#r_units').parents('.form-group').appendTo('#fm');
				$j('#r_rooms').parents('.form-group').appendTo('#fm');
				
				$j('#Doors_1').parents('.form-group').appendTo('#others');
				$j('#Doors_2').parents('.form-group').appendTo('#others');
				$j('#E_Lights').parents('.form-group').appendTo('#others');
				$j('#FAN_No').parents('.form-group').appendTo('#others');
				$j('#FAN_Power').parents('.form-group').appendTo('#others');
				$j('#FAN_Battery').parents('.form-group').appendTo('#others');
				$j('#FAN_Working').parents('.form-group').appendTo('#others');
				
				$j('#header_left').parents('.form-group').appendTo('#Setting');
				$j('#stamp').parents('.form-group').appendTo('#Setting');
				$j('#footer').parents('.form-group').appendTo('#Setting');
				$j('#pdf_count').parents('.form-group').appendTo('#Setting');

			


			})
		</script>
		
		<?php
		$tabs = ob_get_contents();
		ob_end_clean();
		
		$html .= $tabs;
		

	}

	function ppm_all_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function ppm_all_batch_actions(&$args) {

		return array();
	}
