$j(function(){


	$j('input').change(function(){
		
		
		var value1 = parseFloat($j('#Value1').val()) || 0;
		var value2 = parseFloat($j('#Value2').val()) || 0;
		var value3 = parseFloat($j('#Value3').val()) || 0;
		var value4 = parseFloat($j('#Value4').val()) || 0;
		var value5 = parseFloat($j('#Value5').val()) || 0;
		var value6 = parseFloat($j('#Value6').val()) || 0;
		var value7 = parseFloat($j('#Value7').val()) || 0;

		
		var total = Math.round(value1 + value2 + value3 + value4 + value5 + value6 + value7);
		$j('#Total').val(total);
		


		
		
	});

	
		
});

