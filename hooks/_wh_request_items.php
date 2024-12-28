<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function _wh_request_items_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	function _wh_request_items_header($contentType, $memberInfo, &$args) {
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

	function _wh_request_items_footer($contentType, $memberInfo, &$args) {
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

	function _wh_request_items_before_insert(&$data, $memberInfo, &$args) {

//$get_my_valuea = $data['id_wh_request']  ;	

//$data['test1'] = $get_my_valuea;

//$get_my_value1 = sqlValue("SELECT `sign_count` from `wh_requests`  where `wh_requests`.`id_wh` = '{$get_my_valuea}' ");


//if( $get_my_value1 > 0 ) return FALSE;

		return TRUE;
	}

	function _wh_request_items_after_insert($data, $memberInfo, &$args) {



		return TRUE;
	}

	function _wh_request_items_before_update(&$data, $memberInfo, &$args) {
		

//$get_my_value2 = sqlValue("SELECT `sign_count_from_father` from `_wh_request_items` where `id`='{$data['selectedID']}'");
//if( $get_my_value2 > 0 ) return FALSE;


		return TRUE;
	}

	function _wh_request_items_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	function _wh_request_items_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	function _wh_request_items_after_delete($selectedID, $memberInfo, &$args) {

	}

	function _wh_request_items_dv($selectedID, $memberInfo, &$html, &$args) {
		
		

	}

	function _wh_request_items_csv($query, $memberInfo, &$args) {

		return $query;
	}
	function _wh_request_items_batch_actions(&$args) {

		return array();
	}
