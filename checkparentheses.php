<?php
    function validBraces($braces) {
        if ($braces === "") {
          var_dump(true);
        } elseif (!is_string($braces)) {
          throw new InvalidArgumentException("Not a string");
        }
    
        $balance = array();
    
        for ($i = 0; $i < strlen($braces); $i++) {
          //allowed chars  (){}[]
          if (!($braces[$i] === "(" || $braces[$i] === ")" 
               || $braces[$i] === "{" || $braces[$i] === "}" 
               || $braces[$i] === "[" || $braces[$i] === "]")) {
            throw new InvalidArgumentException("Invalid string");
          } elseif ($braces[$i] === "(" || $braces[$i] === "{" || $braces[$i] === "[") {
            array_push($balance, $braces[$i]);
          } elseif ($braces[$i] === ")") {
            if (array_pop($balance) !== "(") {
              var_dump(false);
            }
          } elseif ($braces[$i] === "}") {
            if (array_pop($balance) !== "{") {
              var_dump(false);
            }
          } elseif ($braces[$i] === "]") {
            if (array_pop($balance) !== "[") {
              var_dump(false);
            }
          }
        }
    
        if (count($balance) == 0) {
          var_dump(true);
        }
    
        var_dump(false);
  
       }
      validBraces("{}}");
// function braces($str)
// {   $str2 = str_split($str);
//     $brackects = [];
//     $openingBrackets = ['[', '{', '('];
//     $closingBrackets = [']', '}', ')'];
//     $matching;
//     $ch;

//     $string = implode(',', $closingBrackets);

//     for ($i = 0; $i < count($openingBrackets); $i++)
//     {
//         $ch = $str2[$i];
    
//         if (strpos($string, $ch) > -1)
//         {
//           $matching = $openingBrackets[strpos($string, $ch)];
//           if (count($brackects)== 0 || (array_pop($brackects) != $matching)) 
//           {
//             return false;
//           }
//         }
//         else 
//         {
//           array_push($brackects, $ch);
//         }
//     }
//     $result = (count($brackects) == 0);
//     var_dump($result);

// }
// braces("{}}");
 


?>