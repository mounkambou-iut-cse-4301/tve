<?php

if(!function_exists('highest')){
	function highest($st_mark){
		
		if($st_mark->quiz1<=$st_mark->quiz2 && $st_mark->quiz1<=$st_mark->quiz3 && $st_mark->quiz1<=$st_mark->quiz4){
			    return $st_mark->quiz2+$st_mark->quiz3+$st_mark->quiz4;
		}
		elseif($st_mark->quiz2<=$st_mark->quiz1 && $st_mark->quiz2<=$st_mark->quiz3 && $st_mark->quiz2<=$st_mark->quiz4){
			    return $st_mark->quiz1+$st_mark->quiz3+$st_mark->quiz4;
		}
		elseif($st_mark->quiz3<=$st_mark->quiz1 && $st_mark->quiz3<=$st_mark->quiz2 && $st_mark->quiz3<=$st_mark->quiz4){
			    return $st_mark->quiz1+$st_mark->quiz2+$st_mark->quiz4;
		}
		elseif($st_mark->quiz4<=$st_mark->quiz1 && $st_mark->quiz4<=$st_mark->quiz2 && $st_mark->quiz4<=$st_mark->quiz3){
			    return $st_mark->quiz1+$st_mark->quiz2+$st_mark->quiz3;
		}
	}
}





?>