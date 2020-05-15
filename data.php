<?php

function get_price($name)
{
	$products = [
		"mask"=>100,
		"gloves"=>200,
		"hydroxiqloroquine"=>300		
	];
	
	foreach($products as $product=>$price)
	{
		if($product==$name)
		{
			return $price;
			break;
		}
	}
}

?>