<?php
// function arrAnn($arr){
//         $length = count($arr);
//     for ($x = 0; $x < $length; $x++) {
//         if (($arr[$x] == 'NORTH' && $arr[$x + 1] == 'SOUTH')||($arr[$x] == 'SOUTH' && $arr[$x + 1] == 'NORTH') ) {
//             unset($arr[$x]);
//             unset($arr[$x+1]);
//             // array_splice($arr, $x, 2);
//         }
//         if (($arr[$x] == 'EAST' && $arr[$x + 1] == 'WEST') || ($arr[$x] == 'WEST' && $arr[$x + 1] == 'EAST')) {
//             unset($arr[$x]);
//             unset($arr[$x+1]);
//             // array_splice($arr, $x, 2);
//         } 
//     }
//     var_dump ($arr);
// }

// arrAnn(['NORTH','SOUTH','SOUTH','EAST','WEST','WEST']);

function getDirection($arr)
{
$length = count($arr);
for($i = 0; $i < $length; $i++){
if(($arr[$i] == 'NORTH' && $arr[$i+1] == 'SOUTH') || ($arr[$i] == 'SOUTH' && $arr[$i+1] == 'NORTH')){
unset($arr[$i]);
unset($arr[$i+1]);
}
 
if(($arr[$i] == 'WEST' && $arr[$i+1] == 'EAST') || ($arr[$i] == 'EAST' && $arr[$i+1] == 'WEST')){
unset($arr[$i]);
unset($arr[$i+1]);
}
}
var_dump($arr);
}
getDirection(['NORTH', 'SOUTH', 'SOUTH', 'EAST', 'WEST', 'WEST']);
// getDirection(['SOUTH', 'NORTH', 'NORTH', 'NORTH', 'EAST', 'NORTH', 'WEST', 'SOUTH']);


?>