$j(function(){


	$j('input').change(function(){
	
		
		var allvalue = parseFloat($j('#allvalue').val()) || 0;
		var vat_percentage = parseFloat($j('#vat_percentage').val()) || 0;
		var isvat = ($j('#isvat').val()) || 0;;
		var yes = "yes" ;
		 
		 
		if ( isvat == yes )
		{
			var vat = parseFloat( allvalue - allvalue / ( 1 + vat_percentage ) ).toFixed(2) ;
			$j('#vat').val(vat) ;
		} else {
			$j('#vat').val(0) ;
				}
		
		

		var allvalue = parseFloat($j('#allvalue').val()) || 0;
		var vat = parseFloat($j('#vat').val()) || 0;

		
		var value = parseFloat(allvalue - vat ).toFixed(2);
		$j('#value').val(value);
		
		
	});


	
});

