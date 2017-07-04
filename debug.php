<?php

if(isset($_POST['submitted']) && ($c_year != $n_year || $c_month <= $n_month))
{
print"
<table id='sum'>	

<tr>
<td class='month'>Az első forgalomba helyezéstől</br>
eltelt hónapok száma: " . $debug['month'] . "</td>
</tr>

<tr>
<td>A regisztrációs adó: " . $debug['sum'] . " Ft </td>
</tr>
</table>
";
}	
	
print"	
<table class='zero'>
<tr>
<td></td>
</tr>
</table>
";