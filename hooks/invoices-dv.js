$j(function(){


	$j('input').change(function(){
		
		var qty_1 = parseFloat($j('#Qty_1').val()) || 0;
		var value_1 = parseFloat($j('#Value_1').val()) || 0;
		var total_1 = parseFloat(qty_1 * value_1).toFixed(2);
		$j('#Total_1').val(total_1);
		
	    var qty_2 = parseFloat($j('#Qty_2').val()) || 0;
		var Value_2 = parseFloat($j('#Value_2').val()) || 0;
		var Total_2 = parseFloat(qty_2 * Value_2).toFixed(2);
		$j('#Total_2').val(Total_2);
		
		var qty_3 = parseFloat($j('#Qty_3').val()) || 0;
		var Value_3 = parseFloat($j('#Value_3').val()) || 0;
		var Total_3 = parseFloat(qty_3 * Value_3).toFixed(2);
		$j('#Total_3').val(Total_3);
		
	    var qty_4 = parseFloat($j('#Qty_4').val()) || 0;
		var Value_4 = parseFloat($j('#Value_4').val()) || 0;
		var Total_4 = parseFloat(qty_4 * Value_4).toFixed(2);
		$j('#Total_4').val(Total_4);
		
	    var qty_5 = parseFloat($j('#Qty_5').val()) || 0;
		var Value_5 = parseFloat($j('#Value_5').val()) || 0;
		var Total_5 = parseFloat(qty_5 * Value_5).toFixed(2);
		$j('#Total_5').val(Total_5);
		
	    var qty_6 = parseFloat($j('#Qty_6').val()) || 0;
		var Value_6 = parseFloat($j('#Value_6').val()) || 0;
		var Total_6 = parseFloat(qty_6 * Value_6).toFixed(2);
		$j('#Total_6').val(Total_6);
		
	   			
		
		var total_1 = parseFloat($j('#Total_1').val()) || 0;
		var total_2 = parseFloat($j('#Total_2').val()) || 0;
		var total_3 = parseFloat($j('#Total_3').val()) || 0;
		var total_4 = parseFloat($j('#Total_4').val()) || 0;
		var total_5 = parseFloat($j('#Total_5').val()) || 0;
		var total_6 = parseFloat($j('#Total_6').val()) || 0;
		var byvat = parseFloat($j('#vat').val()) || 0;
		var totalbyvat = parseFloat($j('#total_all').val()) || 0;
	
		
		var total = parseFloat(total_1 + total_2 + total_3 + total_4 + total_5 + total_6 ).toFixed(2);
		$j('#sum').val(total);
		
		var byvat = parseFloat(total * 0.15 ).toFixed(2);
		$j('#vat').val(byvat);
		
		var totalbyvat = parseFloat(total * 1.15 ).toFixed(2);
		$j('#total_all').val(totalbyvat);
		
		
	});

	
		
});

