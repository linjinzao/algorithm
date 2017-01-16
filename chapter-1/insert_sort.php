<?php
	function insert_sort($array = array(),$q,$p,$r){
		$n1 = $p - $q +1;
		$n2 = $r - $p;
		$L1 = array();
		$L2 = array();
		for( $i = 1;$i<=$n1;$i++){
			$L1[$i] = $array[$p + $i -1];
		}
		for($i = 1;$i<=$n2;$i++){
			$L2[$i] = $array[$p+$i];
		}
		$L1[$n1+1] =INF;
		$L2[$n2+1] = INF;
		$a = 1;
		$b = 1;
		$A = array();
		for($i = $q;$i<=$r;$i++){
			if($L1[$a]<=$L2[$b]){
				$A[$i] = $L1[$a];
				$a++; 
			}elseif($A[$i] == $L2[$b]){
				$b++;	
			}
		}
		return $A;
	}

	$array = array(1,2,5,345,123,5,536,475,34,5123,434,64365,437,5,67,431,5132,412,34,46,4365,47,4,7,3452,35,234,6465,1,234,23,5342,65,4365,5,7,5,34);
	print_r($array);
    print_r(insert_sort($array,2,10,30))


?>