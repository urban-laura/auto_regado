<?php

if (!isset($_POST['submitted']))
{
	$fuel = 'benzin';
}

else 
{
	$fuel = $_POST['fuel'];
}

$output = str_replace('###fuel###', $fuel, $output);

$options = array('benzin', 'dizel', 'hibrid', 'elektromos');

$output = str_replace('###visibility-'.$fuel.'-class###', 'visible', $output);

foreach($options as $option)
{
	if($fuel != $option)
	{
		$output = str_replace('###visibility-'.$option.'-class###', 'invisible', $output);
	}
}
