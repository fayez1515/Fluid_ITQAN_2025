<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function qtn_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function qtn_header($contentType, $memberInfo, &$args) {
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

	function qtn_footer($contentType, $memberInfo, &$args) {
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

	function qtn_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	function qtn_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	function qtn_before_update(&$data, $memberInfo, &$args) {

 
$get_my_value = sqlValue("SELECT `sign_count` from `qtn` where `id`='{$data['selectedID']}'");
//$data['save_sign_count_value'] = $get_my_value;
 
if( $get_my_value > 0 )  return FALSE;


		return TRUE;

		
	}

	function qtn_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function qtn_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function qtn_after_delete($selectedID, $memberInfo, &$args) {

	}

	function qtn_dv($selectedID, $memberInfo, &$html, &$args) {
		
			if(isset($_REQUEST['dvprint_x'])) return;
		
		ob_start(); ?>
		
		<div id="form-tabs">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#qtn-tab" data-toggle="tab">QTN</a></li>
				<li><a href="#sales-tab" data-toggle="tab">Sales man</a></li>
				<li><a href="#terms-tab" data-toggle="tab">Terms & condition</a></li>
				<li><a href="#setting-tab" data-toggle="tab">Setting</a></li>
				<li><a href="#cost" data-toggle="tab">cost</a></li>
				<li><a href="#info" data-toggle="tab">info</a></li>
			</ul>
			
			<ul class="tab-content">				
				<div class="tab-pane active form-horizontal" id="qtn-tab"></div>
				<div class="tab-pane form-horizontal" id="sales-tab"></div>
				<div class="tab-pane form-horizontal" id="terms-tab"></div>
				<div class="tab-pane form-horizontal" id="setting-tab"></div>
				<div class="tab-pane form-horizontal" id="cost"></div>
				<div class="tab-pane form-horizontal" id="info"></div>
			</ul>
		</div>
		
		<style>
			#form-tabs .nav-tabs a{ display: block !important; }
		</style>
		
		<script>
			$j(function(){
				$j('#form-tabs').appendTo('#qtn_dv_form');
					
			    $j('#copy_link_out').parents('.form-group').appendTo('#qtn-tab');
				$j('#date').parents('.form-group').appendTo('#qtn-tab');
				$j('#subject').parents('.form-group').appendTo('#qtn-tab');	
				$j('#customer').parents('.form-group').appendTo('#qtn-tab');
				$j('#location').parents('.form-group').appendTo('#qtn-tab');
				$j('#attn').parents('.form-group').appendTo('#qtn-tab');
				$j('#email').parents('.form-group').appendTo('#qtn-tab');
				$j('#total').parents('.form-group').appendTo('#qtn-tab');
				$j('#vat').parents('.form-group').appendTo('#qtn-tab');
				$j('#total_fine').parents('.form-group').appendTo('#qtn-tab');
								

				
				$j('#sales_man').parents('.form-group').appendTo('#sales-tab');
				$j('#sales_tel').parents('.form-group').appendTo('#sales-tab');
				$j('#sales_email').parents('.form-group').appendTo('#sales-tab');
				
				$j('#payment').parents('.form-group').appendTo('#terms-tab');
				$j('#execution').parents('.form-group').appendTo('#terms-tab');
				$j('#offer_validity').parents('.form-group').appendTo('#terms-tab');
				$j('#terms').parents('.form-group').appendTo('#terms-tab');
								
                $j('#http_out').parents('.form-group').appendTo('#setting-tab');
				$j('#stamp').parents('.form-group').appendTo('#setting-tab');
				$j('#header').parents('.form-group').appendTo('#setting-tab');
				$j('#footer').parents('.form-group').appendTo('#setting-tab');

                $j('#id').parents('.form-group').appendTo('#info');
				$j('#user').parents('.form-group').appendTo('#info');
				$j('#created_by_on').parents('.form-group').appendTo('#info');
				$j('#status').parents('.form-group').appendTo('#info');			
				$j('#sign_count').parents('.form-group').appendTo('#info');
				$j('#created').parents('.form-group').appendTo('#info');
				$j('#updated').parents('.form-group').appendTo('#info');
				
				$j('#total_material_cost').parents('.form-group').appendTo('#cost');
				$j('#labour_cost').parents('.form-group').appendTo('#cost');
				$j('#notes_labour_cost').parents('.form-group').appendTo('#cost');
				$j('#other_cost').parents('.form-group').appendTo('#cost');			
				$j('#notes_other_cost').parents('.form-group').appendTo('#cost');
				$j('#total_cost').parents('.form-group').appendTo('#cost');
				$j('#gp').parents('.form-group').appendTo('#cost');
				$j('#gp_ratio').parents('.form-group').appendTo('#cost');
			
				
			})




			$j(function(){
				<?php if($selectedID){ ?>
					$j('#qtn_dv_action_buttons .btn-toolbar').append(
						'<div class="btn-group-vertical btn-group-lg" style="width: 100%;">' +
							'<button type="button" class="btn btn-warning btn-lg" onclick="print_invoice()">' +
								'<i class="glyphicon glyphicon-print"></i> Print QTN</button>' +

						'</div>'
					);
				<?php } ?>
			});

			function print_invoice(){
				var selectedID = '<?php echo urlencode($selectedID); ?>';
				window.location = 'qtnbasha.php?id=' + selectedID;
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

	function qtn_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function qtn_batch_actions(&$args) {

		return array();
	}
