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

	    var qty_7 = parseFloat($j('#Qty_7').val()) || 0;
		var Value_7 = parseFloat($j('#Value_7').val()) || 0;
		var Total_7 = parseFloat(qty_7 * Value_7).toFixed(2);
		$j('#Total_7').val(Total_7);

	    var qty_8 = parseFloat($j('#Qty_8').val()) || 0;
		var Value_8 = parseFloat($j('#Value_8').val()) || 0;
		var Total_8 = parseFloat(qty_8 * Value_8).toFixed(2);
		$j('#Total_8').val(Total_8);

	    var qty_9 = parseFloat($j('#Qty_9').val()) || 0;
		var Value_9 = parseFloat($j('#Value_9').val()) || 0;
		var Total_9 = parseFloat(qty_9 * Value_9).toFixed(2);
		$j('#Total_9').val(Total_9);

	    var qty_10 = parseFloat($j('#Qty_10').val()) || 0;
		var Value_10 = parseFloat($j('#Value_10').val()) || 0;
		var Total_10 = parseFloat(qty_10 * Value_10).toFixed(2);
		$j('#Total_10').val(Total_10);

	    var qty_11 = parseFloat($j('#Qty_11').val()) || 0;
		var Value_11 = parseFloat($j('#Value_11').val()) || 0;
		var Total_11 = parseFloat(qty_11 * Value_11).toFixed(2);
		$j('#Total_11').val(Total_11);

	    var qty_12 = parseFloat($j('#Qty_12').val()) || 0;
		var Value_12 = parseFloat($j('#Value_12').val()) || 0;
		var Total_12 = parseFloat(qty_12 * Value_12).toFixed(2);
		$j('#Total_12').val(Total_12);
		
	    var qty_13 = parseFloat($j('#Qty_13').val()) || 0;
		var Value_13 = parseFloat($j('#Value_13').val()) || 0;
		var Total_13 = parseFloat(qty_13 * Value_13).toFixed(2);
		$j('#Total_13').val(Total_13);
		
	    var qty_14 = parseFloat($j('#Qty_14').val()) || 0;
		var Value_14 = parseFloat($j('#Value_14').val()) || 0;
		var Total_14 = parseFloat(qty_14 * Value_14).toFixed(2);
		$j('#Total_14').val(Total_14);

		
	   			
		
		var total_1 = parseFloat($j('#Total_1').val()) || 0;
		var total_2 = parseFloat($j('#Total_2').val()) || 0;
		var total_3 = parseFloat($j('#Total_3').val()) || 0;
		var total_4 = parseFloat($j('#Total_4').val()) || 0;
		var total_5 = parseFloat($j('#Total_5').val()) || 0;
		var total_6 = parseFloat($j('#Total_6').val()) || 0;
		var total_7 = parseFloat($j('#Total_7').val()) || 0;
		var total_8 = parseFloat($j('#Total_8').val()) || 0;
		var total_9 = parseFloat($j('#Total_9').val()) || 0;
		var total_10 = parseFloat($j('#Total_10').val()) || 0;
		var total_11 = parseFloat($j('#Total_11').val()) || 0;
		var total_12 = parseFloat($j('#Total_12').val()) || 0;
		var total_13 = parseFloat($j('#Total_13').val()) || 0;
		var total_14 = parseFloat($j('#Total_14').val()) || 0;
	
		
		var total = parseFloat(total_1 + total_2 + total_3 + total_4 + total_5 + total_6 + total_7 + total_8 + total_9 + total_10 + total_11 + total_12 + total_13 + total_14 ).toFixed(2);
		$j('#Total').val(total);
				
		
	});

	
		
});

