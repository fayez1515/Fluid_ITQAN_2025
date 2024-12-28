<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function mobily_ppm_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function mobily_ppm_header($contentType, $memberInfo, &$args) {
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

	function mobily_ppm_footer($contentType, $memberInfo, &$args) {
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

	function mobily_ppm_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function mobily_ppm_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function mobily_ppm_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function mobily_ppm_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function mobily_ppm_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function mobily_ppm_after_delete($selectedID, $memberInfo, &$args) {

	}

	function mobily_ppm_dv($selectedID, $memberInfo, &$html, &$args) {
		
		/* if this is the print preview, don't modify the detail view */
		if(isset($_REQUEST['dvprint_x'])) return;
		
		ob_start(); ?>
		
		<div id="form-tabs">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#PPM" data-toggle="tab">PPM</a></li>
				<li><a href="#Fire_Alarm" data-toggle="tab">Fire_Alarm</a></li>
				<li><a href="#Fire_Fighting" data-toggle="tab">Fire_Fighting</a></li>
				<li><a href="#photo" data-toggle="tab">Photoes</a></li>

			</ul>
			
			<ul class="tab-content">
				<div class="tab-pane active form-horizontal" id="PPM"></div>
				<div class="tab-pane form-horizontal" id="Fire_Alarm"></div>
				<div class="tab-pane form-horizontal" id="Fire_Fighting"></div>
				<div class="tab-pane form-horizontal" id="photo"></div>

			</ul>
		</div>
		
		<style>
			#form-tabs .nav-tabs a{ display: block !important; }
		</style>
		
		<script>
			$j(function(){
				$j('#form-tabs').appendTo('#mobily_ppm_dv_form');
				
				$j('#site').parents('.form-group').appendTo('#PPM');
				$j('#location').parents('.form-group').appendTo('#PPM');
				$j('#date').parents('.form-group').appendTo('#PPM');
				$j('#time').parents('.form-group').appendTo('#PPM');

				
 				$j('#header').parents('.form-group').appendTo('#PPM'); 
				$j('#id').parents('.form-group').appendTo('#PPM');
				$j('#created').parents('.form-group').appendTo('#PPM');
				$j('#updated').parents('.form-group').appendTo('#PPM');
				


     				
				$j('#Photo1').parents('.form-group').appendTo('#photo');
				$j('#comment1').parents('.form-group').appendTo('#photo');
				$j('#Photo2').parents('.form-group').appendTo('#photo');
				$j('#comment2').parents('.form-group').appendTo('#photo');
				$j('#Photo3').parents('.form-group').appendTo('#photo');
				$j('#comment3').parents('.form-group').appendTo('#photo');
				$j('#Photo4').parents('.form-group').appendTo('#photo');
				$j('#comment4').parents('.form-group').appendTo('#photo');				
				$j('#Photo5').parents('.form-group').appendTo('#photo');
				$j('#comment5').parents('.form-group').appendTo('#photo');
				$j('#Photo6').parents('.form-group').appendTo('#photo');
				$j('#comment6').parents('.form-group').appendTo('#photo');
				$j('#Photo7').parents('.form-group').appendTo('#photo');
				$j('#comment7').parents('.form-group').appendTo('#photo');
				$j('#Photo8').parents('.form-group').appendTo('#photo');
				$j('#comment8').parents('.form-group').appendTo('#photo');					
				$j('#Photo9').parents('.form-group').appendTo('#photo');
				$j('#comment9').parents('.form-group').appendTo('#photo');				
	
	
				$j('#fa_cabinet_key').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#power_switch').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#fuses').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#led_indicators').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#batteries').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#battery_reading').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#faults').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#wiring').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#smoke_clean').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#not_appearing').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#fe_pressure_gauge').parents('.form-group').appendTo('#Fire_Alarm');
				$j('#idate').parents('.form-group').appendTo('#Fire_Alarm');

				
				$j('#flow_rate').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#suction_pressure').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#discharge_pressure').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#bearing_oil').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#sound').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#leak').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#oil_level').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#fuel_level').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#water_level').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#hose_leaking').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#water').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#pressure').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#cabinet').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#hose').parents('.form-group').appendTo('#Fire_Fighting');
				$j('#nozzle').parents('.form-group').appendTo('#Fire_Fighting');
				


			


			})
		</script>
		
		<?php
		$tabs = ob_get_contents();
		ob_end_clean();
		
		$html .= $tabs;
		

	}

	function mobily_ppm_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function mobily_ppm_batch_actions(&$args) {

		return array();
	}
