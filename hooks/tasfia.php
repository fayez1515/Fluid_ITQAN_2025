<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function tasfia_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function tasfia_header($contentType, $memberInfo, &$args) {
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

	function tasfia_footer($contentType, $memberInfo, &$args) {
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

	function tasfia_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function tasfia_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function tasfia_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function tasfia_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function tasfia_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function tasfia_after_delete($selectedID, $memberInfo, &$args) {

	}

	function tasfia_dv($selectedID, $memberInfo, &$html, &$args) {
	

		/* if this is the print preview, don't modify the detail view */
		if(isset($_REQUEST['dvprint_x'])) return;
		
		ob_start(); ?>
		
		<div id="form-tabs">
			<ul class="nav nav-tabs">
				<li><a href="#info" data-toggle="tab">info</a></li>
				<li class="active"><a href="#tasfia" data-toggle="tab"> Tasfia</a></li>
				<li><a href="#prints" data-toggle="tab">Print Setting</a></li>

			</ul>
			
			<ul class="tab-content">
				<div class="tab-pane form-horizontal" id="info"></div>
				<div class="tab-pane active form-horizontal" id="tasfia"></div>
				<div class="tab-pane form-horizontal" id="prints"></div>

			</ul>
		</div>
		
		<style>
			#form-tabs .nav-tabs a{ display: block !important; }
		</style>
		
		
				<script>
			$j(function(){
				$j('#form-tabs').appendTo('#tasfia_dv_form');
				
				$j('#id').parents('.form-group').appendTo('#tasfia');
				$j('#inputdate').parents('.form-group').appendTo('#tasfia');
				$j('#from').parents('.form-group').appendTo('#tasfia');
				$j('#department').parents('.form-group').appendTo('#tasfia');				
				$j('#manager').parents('.form-group').appendTo('#tasfia');					
				$j('#value').parents('.form-group').appendTo('#tasfia');
				$j('#vat').parents('.form-group').appendTo('#tasfia');
			    $j('#tasfia_value').parents('.form-group').appendTo('#tasfia');				
				$j('#createdby').parents('.form-group').appendTo('#info');
				$j('#CountItems').parents('.form-group').appendTo('#info');
				$j('#CountSigns').parents('.form-group').appendTo('#info');

				$j('#head1').parents('.form-group').appendTo('#prints');
				$j('#head1ar').parents('.form-group').appendTo('#prints');
			})
			
			$j(function(){
				<?php if($selectedID){ ?>
					$j('#tasfia_dv_action_buttons .btn-toolbar').append(
						'<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
							'<button type="button" class="btn btn-warning btn-lg" onclick="print_tsf()">' +
								'<i class="glyphicon glyphicon-print"></i> Print Tasfia</button>' +

						'</div>'
					
	
					
					);
					
				/*	$j('#tasfia_dv_action_buttons .btn-toolbar').append(
						'<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
							'<button type="button" class="btn btn-warning btn-lg" onclick="print_cost()">' +
								'<i class="glyphicon glyphicon-print"></i> test</button>' +

						'</div>'
					
	
					
					);
					*/
					
				<?php } ?>
			});

			function print_tsf(){
				var selectedID = '<?php echo urlencode($selectedID); ?>';
				window.location = 'tsf.php?id=' + selectedID;
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

	function tasfia_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function tasfia_batch_actions(&$args) {

		return [];
	}
