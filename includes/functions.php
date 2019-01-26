<?php
	function redirect_to($url){
		header("Location: ".$url);
	}
	
	function getTypeOfPaper($type){
		if($type == 1){
			$type = 'Essay (any type)';
		}
		
		elseif($type == 1.5){
			$type = 'Outline';
		}
		
		elseif($type == 1.8){
			$type = 'Literature Review';
		}
		
		elseif($type == 1.5){
			$type = 'Dissertation Proposal';
		}
		
		elseif($type == 1.5){
			$type = 'Dissertation';
		}
		
		elseif($type == 1.9){
			$type = 'Coursework';
		}
		
		elseif($type == 0.9){
			$type = 'Assignment';
		}
		
		elseif($type == 0.6){
			$type = 'Editing';
		}
		
		elseif($type == 0.6){
			$type = 'Proofreading';
		}
		
		elseif($type == 0.7){
			$type = 'Paraphrasing';
		}
		
		elseif($type == 1.8){
			$type = 'Non-Word Assignment';
		}
		
		elseif($type == 0.8){
			$type = 'PowerPoint Presentation';
		}
		
		elseif($type == 1.1){
			$type = 'Admission/Application Essay';
		}
		
		elseif($type == 1.1){
			$type = 'Annotated Bibliography';
		}
		
		elseif($type == 1.2){
			$type = 'Article';
		}
		
		elseif($type == 2.1){
			$type = 'Case study';
		}
		
		elseif($type == 0.7){
			$type = 'Formatting';
		}
		
		elseif($type == 2.3){
			$type = 'Lab Report';
		}
		
		elseif($type == 2.4){
			$type = 'Math Problem';
		}
		
		elseif($type == 1.8){
			$type = 'Movie Review';
		}
		
		elseif($type == 1.1){
			$type = 'Personal Statement';
		}
		
		elseif($type == 1.3){
			$type = 'Research Paper';
		}
		
		elseif($type == 1.8){
			$type = 'Research Proposal';
		}
		
		elseif($type == 1.2){
			$type = 'Scholarship Essay';
		}
		
		elseif($type == 1.1){
			$type = 'Speech';
		}
		
		elseif($type == 2){
			$type = 'Statistics Project';
		}
		
		elseif($type == 1.7){
			$type = 'Term Paper';
		}
		
		else{
			$type = 'Invalid type of Paper';
		}
		
		return $type;
	}
	
	function getDeadlineOfPaper($deadline){
		if($deadline == 5){
			$deadline = '3hrs';
		}
		
		elseif($deadline == 4.5){
			$deadline = '12 hrs';
		}
		
		elseif($deadline == 4){
			$deadline = '24 hrs';
		}
		
		elseif($deadline == 3.5){
			$deadline = '2 Days';
		}
		
		elseif($deadline == 3){
			$deadline = '3 Days';
		}
		
		elseif($deadline == 2.5){
			$deadline = '4 Days';
		}
		
		elseif($deadline == 2){
			$deadline = '5 Days';
		}
		
		elseif($deadline == 1.5){
			$deadline = '10 Days';
		}
		
		elseif($deadline == 1){
			$deadline = '15 Days';
		}
		
		elseif($deadline == 1){
			$deadline = '15-30 Days';
		}
		
		elseif($deadline == 1){
			$deadline = 'Over-30 Days';
		}
		
		else{
			$deadline = 'Invalid Deadline';
		}
		
		return $deadline;
	}
	
	function getTimeZone($time_zone){
		if($time_zone == (-12)){
			$time_zone = 'GMT -12 Hours';
		}
		
		elseif($time_zone == (-11)){
			$time_zone = 'GMT -11 Hours';
		}
		
		elseif($time_zone == (-10)){
			$time_zone = 'GMT -10 Hours';
		}
		
		elseif($time_zone == (-9)){
			$time_zone = 'GMT -9 Hours';
		}
		
		elseif($time_zone == (-8)){
			$time_zone = 'GMT -8 Hours';
		}
		
		elseif($time_zone == (-7)){
			$time_zone = 'GMT -7 Hours';
		}
		
		elseif($time_zone == (-6)){
			$time_zone = 'GMT -6 Hours';
		}
		
		elseif($time_zone == (-5)){
			$time_zone = 'GMT -5 Hours';
		}
		
		elseif($time_zone == (-4)){
			$time_zone = 'GMT -4 Hours';
		}
		
		elseif($time_zone == (-3)){
			$time_zone = 'GMT -3 Hours';
		}
		
		elseif($time_zone == (-2)){
			$time_zone = 'GMT -2 Hours';
		}
		
		elseif($time_zone == (-1)){
			$time_zone = 'GMT -1 Hours';
		}
		
		elseif($time_zone == (0)){
			$time_zone = 'GMT';
		}
		
		elseif($time_zone == (+1)){
			$time_zone = 'GMT +1 Hours';
		}
			
		elseif($time_zone == (+2)){
			$time_zone = 'GMT +2 Hours';
		}
		
		elseif($time_zone == (+3)){
			$time_zone = 'GMT +3 Hours';
		}
		
		elseif($time_zone == (+4)){
			$time_zone = 'GMT +4 Hours';
		}
		
		elseif($time_zone == (+5)){
			$time_zone = 'GMT +5 Hours';
		}
		
		elseif($time_zone == (+6)){
			$time_zone = 'GMT +6 Hours';
		}
		
		elseif($time_zone == (+7)){
			$time_zone = 'GMT +7 Hours';
		}
		
		elseif($time_zone == (+8)){
			$time_zone = 'GMT +8 Hours';
		}
		
		elseif($time_zone == (+9)){
			$time_zone = 'GMT +9 Hours';
		}
		
		elseif($time_zone == (+10)){
			$time_zone = 'GMT +10 Hours';
		}
		
		elseif($time_zone == (+11)){
			$time_zone = 'GMT +11 Hours';
		}
		
		elseif($time_zone == (+12)){
			$time_zone = 'GMT +12 Hours';
		}
		
		else{
			$time_zone = 'Invalid TimeZone';
		}
		
		return $time_zone;
	}
	
	function getAcademicLevel($academic_level){
		if($academic_level == 1.0){
			$academic_level = 'GCSE, GNVQ, A-level, A2';
		}
		
		elseif($academic_level == 1.5){
			$academic_level = 'Degree';
		}
		
		elseif($academic_level == 2.0){
			$academic_level = 'Masters';
		}
		
		else{
			$academic_level = 'Invalid Level';
		}
		
		return $academic_level;
	}
	
	
?>