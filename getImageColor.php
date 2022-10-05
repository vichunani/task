<?php
//  Задание 2           Возьмите картинку https://alef.im/php-test-colors.jpg,
//без использования сторонних библиотек анализа изображений, найдите самый распространенный цвет на этом изображении. Выведите его в формате #FFFFFF   

	function getImageColor($imageFile_URL, $step = 5)
	{
   		$colors = [];
   		//find image size
   		$size = @getimagesize($imageFile_URL);
   		
   		// open image
   		$img = @imagecreatefromjpeg($imageFile_URL);
		   
		
   		
		   for($x = 0; $x < $size[0]; $x += $step) 
		   { 
			  for($y = 0; $y < $size[1]; $y += $step)
			  { 
         		$thisColor = imagecolorat($img, $x, $y);
				$rgb = imagecolorsforindex($img, $thisColor);
				 
				$red = $rgb['red'];
         		$green = $rgb['green'] ;
				$blue = $rgb['blue'];
				 
				$thisRGB = sprintf('%02X%02X%02X', $red, $green, $blue); 
			
			
				if(array_key_exists($thisRGB, $colors)){
							$colors[$thisRGB]++;
				}else{
							$colors[$thisRGB] = 1;
				}	
				}
			}
			
			arsort($colors); 
		   
		   $result = array_slice(array_keys($colors), 0, 1);   
   	 	return $result[0];
 	}
$color = getImageColor('https://alef.im/php-test-colors.jpg', 10);
echo ('#' .$color); // Выводит #A8D3FE
