<?php
// Example 1

// function Exampleone($array, $target){


//     for($i = 0; $i < count($array) - 1 ; $i++){

//         //    echo $array[$i] + $array[$i +1] . '</br>';
           
//             if($array[$i] + $array[$i + 1] == $target){
//                     echo $i . ' , ' . ($i + 1) . '</be>';
//                     echo $array[$i] . ' , ' . $array[$i + 1] . '</br>';
//             }
            
//     }
// }
// $sum = [ 11,15,2, 7];
// echo Exampleone($sum,9);




// function Exampleone($array, $target){


//     for($i = 0; $i < count($array) ; $i++){

//             for($j = 0 ; $j < count($array) ; $j++){
//             $result = $array[$i] + $array[$j];
//             if ($result == $target){
                
//                     echo $i . ' , ' . $j . '</be>';
                    
//                     echo $array[$i] . ' , ' . $array[$j] . '</br>';
//                 }
//             }
            
            
//     }
// }
// $sum = [15, 11 , 2,7 ,1 ,8];
// echo Exampleone($sum,9);


// Example 2

// function Exampletwo($array , $num){

     
//     for($i = 0 ; $i < count($array) ; $i++){
//         for($j = 0 ; $j < count($array) ; $j++){
//             $result = $array[$i] + $array[$j];
//             if($array[$i] !== $array[$j]){

//                 if($result == $num){
//                     echo $i . ' , ' . $j . '</be>';   
    
//                     echo $array[$i] . ' , ' . $array[$j] . '</br>';
    
                
//                 }

//             }
            
//         }
//     }

// }
// $nums = [3,2,4];
// echo Exampletwo($nums ,6);

   

    
    // Example 3

    //     function remove_char(){
    //         $s = "abcabcbb";
    //         $charsplit = str_split($s);
    //         $newword = [ ];
    //             for($i = 0 ; $i < count($charsplit) ; $i++){
    //                 echo $charsplit[$i];
    //                 $newword = $charsplit[$i] + $charsplit ;
    //         }
    //         return $newword ;
    //     }

    // print_r (remove_char());