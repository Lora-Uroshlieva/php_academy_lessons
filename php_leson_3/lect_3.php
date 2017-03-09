<?php

//$array = array(1, 2, 3);
//
//$arr = [1, 3.5, null, false, new \DateTime('now')];
//
//var_dump($arr);
//exit();
//
//
//$ar = [11, 23, 3, 4, 25];
//$first = $ar[0];
//$ar[] = 66;
////
////array_push($ar, '77');
////var_dump($ar);
////
////array_search(77, $ar);
////
//
//$ar2 = ['one' => 1, 'two' => null];
//
//$exists = empty($ar2['four']);
//$exists2 = empty($ar2['two']);
//
////$exists3 = isset($ar2['one']);
////$exists = array_key_exists('one', $ar2);
//
//$siteMenu = [
//    'Home page' => '/',
//    'Catalog' => [
//        'Men' => '/men.html',
//        'Woman' => '/women.html'
//    ],
//];

// functions for work with arrays

//$array1 = [1, 13 => 2, 'one' => 3];
//$array2 = [4, 5, 6, 1];
//
//$difference = array_diff($array1, $array2);
//$intersect = array_intersect($array1, $array2);
//$merge = array_merge($array1, $array2);
//$add = $array1 + $array2;
//$intersectKey = array_intersect_key();
//
//var_dump($difference);
//var_dump($intersect);
//var_dump($merge);
//var_dump($add);
//
//$result = [];
//foreach ($array1 as $key => &$item) {
////    $array1[$key]++;
//    $result[] = $item++;
//}
//
//function processItem($item) {
//    return ++$item;
//}
//
//
//$res = array_map('processItem', $array1);

$array4 = [2, 15, 4, 9, 0, 2, 1];
//
//sort($array4);
//
//$serialised = serialize($array4);
//echo $serialised;
//$arrayAgain = unserialize($serialised);
//echo $arrayAgain;
//
//$date1 = new \DateTime('2017-03-04');
//$date2  = new \DateTime('2017-03-04');
//
//if ($date1 == $date2) {};
//if ($date1 === $date2) {};
//
//$el = array_shift($array4);
//
//in_array();
//array_unique();
//
//var_dump($_SERVER);
//


$array5 = [1, 3, 5, 2, 5];
for ($i = 0, $i < count($array5), $i += 2) {
    $array5[i]++;
    echo $i, PHP_EOL;
}

$array6 = [];
foreach ($array5 as $key => $item) {
    $array5[$key]++;

}

while ($item = array_shift($array5)) {
    $item++;
}


//https://ru.wikipedia.org/wiki/%D0%92%D1%8B%D1%87%D0%B8%D1%81%D0%BB%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F_%D1%81%D0%BB%D0%BE%D0%B6%D0%BD%D0%BE%D1%81%D1%82%D1%8C

