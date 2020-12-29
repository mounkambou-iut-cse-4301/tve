<?php
use App\course;
use App\student;
use App\teacher;
use App\attendance;
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
if(!function_exists('teacherName')){
	function teacherName($id){

         $teacher=teacher::where('teacher_id',$id)->first();
         return $teacher->teacher_name;
	}
 }

 if(!function_exists('Percentage')){
	function Percentage($course, $student){


    	   $att_count=attendance::where('course_fk_att',$course)
    		                       ->where('student_fk_att',$student)->get();

    		$att_pre=attendance::where('course_fk_att',$course)
    		                     ->where('student_fk_att',$student)
								 ->where('att_presence',1)->get();
								 
	    
            $att_coun=count($att_count);
			$att_pr=count($att_pre);
			if($att_coun==0){
				$percentage=0.00;
			}else{
              
            $percentage=($att_pr*100)/$att_coun;
            
            $percentage=number_format($percentage,2);
			}

		return $percentage;
     
	}
}

 
?>