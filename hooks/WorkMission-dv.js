$j(function(){


	$j('input').change(function(){
		
		var killo = parseFloat($j('#Killo').val()) || 0;
		var totalcar = parseFloat(killo * 0.4).toFixed(2);
		$j('#TotalCar').val(totalcar);
		
	    var notech = parseFloat($j('#NoTech').val()) || 0;
		var duration = parseFloat($j('#Duration').val()) || 0;
		var totaltech = parseFloat(duration * notech * 50).toFixed(2);
		$j('#TotalTech').val(totaltech);
		
		
		var totalcar = parseFloat($j('#TotalCar').val()) || 0;
		var totaltech = parseFloat($j('#TotalTech').val()) || 0;
	
		
		var total_fine = parseFloat(totalcar + totaltech).toFixed(2);
		$j('#Total_Fine').val(total_fine);
		
		
	});

	
		
});

