<?php
use App\course;
use App\student;
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

if(!function_exists('calgpa')){
	function calgpa($grade,$credit){
		if($grade=='A+'){
			return 4.00*$credit;
		}
		elseif($grade=='A'){
			return 3.75*$credit;
		}
		elseif($grade=='A-'){
			return 3.50*$credit;
		}
		elseif($grade=='B+'){
			return 3.25*$credit;
		}
		elseif($grade=='B'){
			return 3.00*$credit;
		}
		elseif($grade=='B-'){
			return 2.75*$credit;
		}
		elseif($grade=='C+'){
			return 2.50*$credit;
		}
		elseif($grade=='C'){
			return 2.25*$credit;
		}
		elseif($grade=='D'){
			return 2.00*$credit;
		}
	}
}


if(!function_exists('getName')){
	function getName($name){

         $student=student::where('student_id',$name)->first();
         return $student->student_name;
	}
 }



 
?>