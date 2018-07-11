<?php
require_once(dirname(__FILE__) . '/../../config.php');
global $DB;
//global $USER;
//$Userid = $USER->id;
// This file is part of Moodle - http://moodle.org/
defined('MOODLE_INTERNAL') || die;


echo "library page";
function last_five_quiz(){
	echo "function called";
global $DB;
	 $course_quizes=$DB->get_records_sql("SELECT q.id,q.name as quizname,q.grade as quizgrade , qa.sumgrades , qa.timestart , qa.timefinish
  FROM {quiz_attempts} qa
  JOIN {quiz} q ON q.id = qa.quiz
  JOIN {user} u ON u.id = qa.userid
  WHERE qa.userid=341268");

}

last_five_quiz();


function test(){

	echo "...test function called";
	global $DB;
	$pass_score=$DB->get_record_sql(" SELECT mingrade FROM mdl_quiz_feedback WHERE (quizid = 13603)");
	echo "<pre>";
	print_r($pass_score);
	echo "</pre>";
	$total_grades=$DB->get_record_sql(" SELECT grade FROM mdl_quiz WHERE (id = 13603)");
	echo "<pre>";
	print_r($total_grades);
	echo "</pre>";
	$ps=$pass_score->mingrade;
	$tg=$total_grades->grade;
	$pass_per=($ps*100)/$tg;
	echo $pass_per;
  
    $total_questions=$DB->get_records_sql(" SELECT count(questionid) FROM mdl_question_attempts where (questionusageid = 566242)");
    echo "<pre>";
    print_r($total_questions);
    echo "</pre>";
}

test();


 ?>
