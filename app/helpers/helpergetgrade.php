<?php
use App\course;
if(!function_exists('getGrade')){
	function getGrade($sum,$grade){
		$cal=$sum/$grade;
		
			if(80<=$cal){
				return 'A+';
			}
			elseif(75<=$cal && $cal<80){
				return 'A';
			}
			elseif(70<=$cal && $cal<75){
				return 'A-';
			}
			elseif(65<=$cal && $cal<70){
				return 'B+';
			}
			elseif(60<=$cal && $cal<65){
				return 'B';
			}
			elseif(55<=$cal && $cal<60){
				return 'B-';
			}
			elseif(50<=$cal && $cal<55){
				return 'C+';
			}
			elseif(45<=$cal && $cal<50){
				return 'C';
			}
			elseif(40<=$cal && $cal<45){
				return 'D';
			}
			elseif($cal<40){
				return 'F';
			}
		
		
	}
}
if(!function_exists('courseName')){
	function courseName($key){
		
		$course = course::where('course_id',$key)->first();
		return $course->course_name;
	}
}
if(!function_exists('coursecredit')){
	function coursecredit($key){
		
		$cours = course::where('course_id',$key)->first();
		return $cours->course_credit;
	}
}


?>