$(document).ready(function(){
	
	
	$('#button_benzin').click(function(){
		$('#dizel').hide();	
		$('#hibrid').hide();
		$('#elektromos').hide();
		$('#sum').hide();
		$('#benzin').show();
		$('#submit').show();
		$('#button_benzin').addClass('active');
		$('#button_dizel').removeClass('active');
		$('#button_hibrid').removeClass('active');
		$('#button_elektromos').removeClass('active');

		$('#fuel').val('benzin');
	})
	
	$('#button_dizel').click(function(){
		$('#benzin').hide();	
		$('#hibrid').hide();
		$('#elektromos').hide();
		$('#sum').hide();
		$('#dizel').show();	
		$('#submit').show();
		$('#button_dizel').addClass('active');
		$('#button_benzin').removeClass('active');
		$('#button_hibrid').removeClass('active');
		$('#button_elektromos').removeClass('active');

		$('#fuel').val('dizel');
	})
	
	$('#button_hibrid').click(function(){	
		$('#benzin').hide();
		$('#dizel').hide();	
		$('#elektromos').hide();
		$('#sum').hide();
		$('#hibrid').show();
		$('#submit').show();
		$('#button_hibrid').addClass('active');
		$('#button_benzin').removeClass('active');
		$('#button_dizel').removeClass('active');
		$('#button_elektromos').removeClass('active');

		$('#fuel').val('hibrid');
	})

	$('#button_elektromos').click(function(){	
		$('#benzin').hide();	
		$('#dizel').hide();
		$('#hibrid').hide();	
		$('#submit').hide();
		$('#sum').hide();
		$('#elektromos').show();
		$('#button_elektromos').addClass('active');
		$('#button_benzin').removeClass('active');
		$('#button_hibrid').removeClass('active');
		$('#button_dizel').removeClass('active');

		$('#fuel').val('elektromos');
	})

	
	
		if($('#fuel').val() == 'benzin')
		{
			$('#dizel').hide();	
			$('#hibrid').hide();
			$('#elektromos').hide();
			$('#benzin').show();
			$('#submit').show();
			$('#button_benzin').addClass('active');
			$('#button_dizel').removeClass('active');
			$('#button_hibrid').removeClass('active');
			$('#button_elektromos').removeClass('active');
		}
		
		if($('#fuel').val() == 'dizel')
		{
			$('#benzin').hide();	
			$('#hibrid').hide();
			$('#elektromos').hide();
			$('#dizel').show();	
			$('#submit').show();
			$('#button_dizel').addClass('active');
			$('#button_benzin').removeClass('active');
			$('#button_hibrid').removeClass('active');
			$('#button_elektromos').removeClass('active');
		}
		
		if($('#fuel').val() == 'hibrid')
		{
			$('#benzin').hide();
			$('#dizel').hide();	
			$('#elektromos').hide();
			$('#hibrid').show();
			$('#submit').show();
			$('#button_hibrid').addClass('active');
			$('#button_benzin').removeClass('active');
			$('#button_dizel').removeClass('active');
			$('#button_elektromos').removeClass('active');
		}
		
	
	
})//ready
