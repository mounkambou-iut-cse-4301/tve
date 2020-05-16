<?php
use App\course;
if(!function_exists('getGrade')){
	function getGrade($sum,$grade){
		if($grade==4){
			if(320<=$sum){
				return 'A+';
			}
			elseif(300<=$sum && $sum<320){
				return 'A';
			}
			elseif(280<=$sum && $sum<300){
				return 'A-';
			}
			elseif(260<=$sum && $sum<280){
				return 'B+';
			}
			elseif(240<=$sum && $sum<260){
				return 'B';
			}
			elseif(220<=$sum && $sum<240){
				return 'B-';
			}
			elseif(200<=$sum && $sum<220){
				return 'C+';
			}
			elseif(180<=$sum && $sum<200){
				return 'C';
			}
			elseif(160<=$sum && $sum<180){
				return 'D';
			}
			elseif($sum<160){
				return 'F';
			}
		}
		elseif($grade==3){
			if(240<=$sum){
				return 'A+';
			}
			elseif(225<=$sum && $sum<240){
				return 'A';
			}
			elseif(210<=$sum && $sum<225){
				return 'A-';
			}
			elseif(195<=$sum && $sum<210){
				return 'B+';
			}
			elseif(180<=$sum && $sum<155){
				return 'B';
			}
			elseif(165<=$sum && $sum<180){
				return 'B-';
			}
			elseif(150<=$sum && $sum<165){
				return 'C+';
			}
			elseif(135<=$sum && $sum<150){
				return 'C';
			}
			elseif(120<=$sum && $sum<135){
				return 'D';
			}
			elseif($sum<120){
				return 'F';
			}
			
		}
		elseif($grade==2){
			if(160<=$sum){
				return 'A+';
			}
			elseif(150<=$sum && $sum<160){
				return 'A';
			}
			elseif(140<=$sum && $sum<150){
				return 'A-';
			}
			elseif(130<=$sum && $sum<140){
				return 'B+';
			}
			elseif(120<=$sum && $sum<130){
				return 'B';
			}
			elseif(110<=$sum && $sum<120){
				return 'B-';
			}
			elseif(100<=$sum && $sum<110){
				return 'C+';
			}
			elseif(90<=$sum && $sum<100){
				return 'C';
			}
			elseif(80<=$sum && $sum<90){
				return 'D';
			}
			elseif($sum<80){
				return 'F';
			}
			
		}
		elseif($grade==1.5){
			if(120<=$sum){
				return 'A+';
			}
			elseif(112.5<=$sum && $sum<120){
				return 'A';
			}
			elseif(105<=$sum && $sum<112.5){
				return 'A-';
			}
			elseif(97.5<=$sum && $sum<105){
				return 'B+';
			}
			elseif(90<=$sum && $sum<97.5){
				return 'B';
			}
			elseif(82.5<=$sum && $sum<90){
				return 'B-';
			}
			elseif(75<=$sum && $sum<82.5){
				return 'C+';
			}
			elseif(67.5<=$sum && $sum<75){
				return 'C';
			}
			elseif(60<=$sum && $sum<67.5){
				return 'D';
			}
			elseif($sum<60){
				return 'F';
			}
			
		}
		elseif($grade==1){
			if(80<=$sum){
				return 'A+';
			}
			elseif(75<=$sum && $sum<80){
				return 'A';
			}
			elseif(70<=$sum && $sum<75){
				return 'A-';
			}
			elseif(65<=$sum && $sum<70){
				return 'B+';
			}
			elseif(60<=$sum && $sum<65){
				return 'B';
			}
			elseif(55<=$sum && $sum<60){
				return 'B-';
			}
			elseif(50<=$sum && $sum<55){
				return 'C+';
			}
			elseif(45<=$sum && $sum<50){
				return 'C';
			}
			elseif(40<=$sum && $sum<45){
				return 'D';
			}
			elseif($sum<40){
				return 'F';
			}
			
		}
		elseif($grade==0.75){
			if(60<=$sum){
				return 'A+';
			}
			elseif(56.25<=$sum && $sum<60){
				return 'A';
			}
			elseif(52.5<=$sum && $sum<56.25){
				return 'A-';
			}
			elseif(48.75<=$sum && $sum<52.5){
				return 'B+';
			}
			elseif(45<=$sum && $sum<48.75){
				return 'B';
			}
			elseif(41.25<=$sum && $sum<45){
				return 'B-';
			}
			elseif(37.5<=$sum && $sum<41.25){
				return 'C+';
			}
			elseif(33.75<=$sum && $sum<37.5){
				return 'C';
			}
			elseif(30<=$sum && $sum<33.75){
				return 'D';
			}
			elseif($sum<30){
				return 'F';
			}
			
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