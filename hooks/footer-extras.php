<script>
	$j(function() {
		if($j('#current_view').val() == 'DVP' && AppGini.currentTableName() == 'car_tools') {
			$j('.form-group').eq(2).addClass('hidden');
			$j('.form-group').eq(14).addClass('hidden');
		}
	})
</script>