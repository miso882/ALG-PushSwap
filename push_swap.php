<?php
function sort_array($la){
    $n = count($la);
    for ($i=1; $i < $n; $i++) { 
       $x = $la[$i];
       $j = $i;
       while ($j>0 && $la[$j-1]>$x) {
            $la[$j] = $la[$j-1];
            $j = $j-1;
        }
        $la[$j] = $x;
    }
    return $la;
}
function check_sort($la){
    $t = sort_array($la);
    if ($t == $la) {
        $sorted = true;
    }else {
        $sorted = false;
    }
    return $sorted;
}
function pb(&$la, &$lb){
    $a = array_shift($la);
    array_unshift($lb, $a);
    $GLOBALS['s'] .= 'pb ';
    return;
}
function rrb(&$lb){
    $a = array_pop($lb);
    array_unshift($lb, $a);
    $GLOBALS['s'] .= 'rrb ';
    return;
}
function pa(&$la, &$lb){
   $a = array_shift($lb);
   array_unshift($la, $a);
   $GLOBALS['s'] .= 'pa ';
   return;
}
function ra(&$la){
    $a = array_shift($la);
    array_push($la, $a);
    $GLOBALS['s'] .= 'ra ';
    return;
}
function rra(&$la){
    $a = array_pop($la);
    array_unshift($la, $a);
    $GLOBALS['s'] .= 'rra ';
    return;
}
function push_swap($la, $lb = []){
    if (count($la) == null || count($la) ==0 || count($la) == 1) {
        $GLOBALS['s'] = "";
        echo $GLOBALS['s'] . "\n";
    }elseif (count($la) == 2) {
        $x = $la[0];
        $la[0] = $la[1];
        $la[1] = $x;
        $GLOBALS['s'] = "sa";
        echo $GLOBALS['s'] . "\n";
    }else {
        if (check_sort($la) == true) {
            $GLOBALS['s'] = "";
            echo $GLOBALS['s'] . "\n";
        }else {
            $lc = sort_array($la);
            $n = count($lc);
            $i = 0;
            while ($i<$n && count($la)!= null) {
                foreach ($la as $value) {
                    if ($value == $lc[$i]) {
                        pb($la, $lb);
                        break;
                    }else {
                        ra($la);
                    }
                }
                $i = $i+1;
            }
            while (count($lb) != null) {
                pa($la, $lb);
            }
            echo  rtrim($GLOBALS['s'], " ") . "\n";

        }
    }
       
}
$s = "";
array_shift($argv);
push_swap($argv);
// $t = [0];
// push_swap($t);
?>