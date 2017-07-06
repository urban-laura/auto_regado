<head>
<link rel='stylesheet' type='text/css' href='css/regado.css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="js/regado.js"></script>
</head>

<body>
<table class='title'>
<tr>
<td>Személyautó regisztrációs adó</td>
</tr>
</table>

<div class='buttons-wrapper'>
	<div class='button-wrapper'><input type='button' id='button_benzin' class='button ###button-benzin-active-class###' value='Benzin'></div>
	<div class='button-wrapper'><input type='button' id='button_dizel' class='button ###button-dizel-active-class###' value='Dízel'></div>
	<div class='button-wrapper'><input type='button' id='button_hibrid' class='button ###button-hibrid-active-class###' value='Hibrid'></div>
	<div class='button-wrapper'><input type='button' id='button_elektromos' class='button ###button-elektromos-active-class###' value='Elektromos'></div>
</div>

<form name='calculator' method='post' class='calc-form'>

<input type='hidden' name='fuel' id='fuel' value='###fuel###'>

<!-- Benzin -->
<table class='center ###visibility-benzin-class###' id='benzin'>
<tr>
<td colspan='2' class='fuel'>Benzin</td>
<tr>

<tr>
<td colspan='2' class='text'>Az első forgalomba helyezés dátuma: </td>
<tr>

<tr>
<td>Év: 
<select name='c_year_b' class='date'>
	###year-b-options###
</select>
</td>

<td>Hónap:
<select name='c_month_b' class='date'>
	###month-b-options###
</select>
</td>
</tr>

<tr id='error'>
<td colspan='2'>###error###</td>
</tr>

<tr class='text'>
<td colspan='2' class='padding-top'>Hengerűrtartalom </td>
</tr>
<tr>
<td colspan='2'>
<select name='barrel_b' class='stb'>
	###barrel-b-options###
</select>
</td>
</tr>

<tr class='text'>
<td colspan='2' class='padding-top'>Környezetvédelmi osztály:</td>
</tr>
<tr>
<td colspan='2'>
<select name='env_b' class='stb'>
	###env-b-options###
</select>
</td>
</tr>
</table>

<!-- Dízel -->
<table class='center ###visibility-dizel-class###' id='dizel'>
<tr>
<td colspan='2' class='fuel'>Dízel</td>
<tr>

<tr>
<td colspan='2' class='text'>Az első forgalomba helyezés dátuma: </td>
<tr>

<tr>
<td>Év: 
<select name='c_year_d' class='date'>
	###year-d-options###
</select>
</td>

<td>Hónap:
<select name='c_month_d' class='date'>
	###month-d-options###
</select>
</td>
</tr>

<tr class='text'>
<td colspan='2' class='padding-top'>Hengerűrtartalom </td>
</tr>
<tr>
<td colspan='2'>
<select name='barrel_d' class='stb'>
	###barrel-d-options###
</select>
</td>
</tr>

<tr class='text'>
<td colspan='2' class='padding-top'>Környezetvédelmi osztály:</td>
</tr>
<tr>
<td colspan='2'>
<select name='env_d' class='stb'>
	###env-d-options###
</select>
</td>
</tr>
</table>


<!-- Hibrid -->
<table class='center ###visibility-hibrid-class###' id='hibrid'>
<tr>
<td colspan='2' class='fuel'>Hibrid</td>
<tr>

<tr>
<td colspan='2' class='text'>Az első forgalomba helyezés dátuma: </td>
<tr>

<tr>
<td>Év: 
<select name='c_year_h' class='date'>
	###year-h-options###
</select>
</td>

<td>Hónap:
<select name='c_month_h' class='date'>
	###month-h-options###
</select>
</td>
</tr>
</table>


<!-- Elektromos --> 
<table class='center ###visibility-elektromos-class###' id='elektromos'>
<tr>
<td colspan='2' class='fuel'>Elektromos</td>
<tr>

<tr>
<td class='el'>A regisztrációs adó: 0 Ft</td>
</tr>

<tr>
<td class='el'>A környezetkímélő járművek után nem kell regisztrációs adót fizetni.</td>
</tr>

<table class='submit'>
<input type='hidden' value='submitted' name='submitted'>
<tr>
<td><input type='submit' id='submit' value='Számol' class='form-submit'></td>
</tr>
</table>

</form>

<table id='sum' class='###sum-visibility###'>	
<tr>
<td class='month'>###month-message###</td>
</tr>

<tr>
<td>###sum-message###</td>
</tr>
</table>

<table class='zero'>
<tr>
<td></td>
</tr>
</table>


</body>
