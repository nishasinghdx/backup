<?php
require_once(dirname(__FILE__) . '/../../config.php');
global $DB;
global $USER;
$Userid = $USER->id;
// This file is part of Moodle - http://moodle.org/
defined('MOODLE_INTERNAL') || die;

if (!defined('REPORT_LOG_MAX_DISPLAY')) {
    define('REPORT_LOG_MAX_DISPLAY', 150); // days
}

/* Get all courses with the userId*/

function getallCourses($userId){
	global $DB;
	$courses = enrol_get_users_courses($userId, true);
  return $courses;
}

/* Get all Quizs with the userId and courseId*/
function getQuizs($userId, $courseId){
  global $DB;

  $course_quizes=$DB->get_records_sql("SELECT q.id,q.name as quizname,q.grade as quizgrade , qa.sumgrades , qa.timestart , qa.timefinish
  FROM {quiz_attempts} qa
  JOIN {quiz} q ON q.id = qa.quiz
  JOIN {user} u ON u.id = qa.userid
  WHERE qa.userid=$userId AND q.course=$courseId");

  $data = array();
  $keys = array();
  foreach($course_quizes as $k=> $quizes){
    $keys[$k] = $k;
    $data[$k]['feedbacktext'] = getQuizGrade($k,$quizes->sumgrades);
    $data[$k]['id'] = $k;
    $data[$k]['quizname'] = $quizes->quizname;
    $data[$k]['quizgrade'] = $quizes->quizgrade;
    $data[$k]['sumgrades'] = $quizes->sumgrades;
    $data[$k]['timestart'] = $quizes->timestart;
    $data[$k]['timefinish'] = $quizes->timefinish;
  }

  die(json_encode($data));

}











/* Get Quizs detail with the quizId */
function getQuiz($userId,$quizId){
  global $DB;
  $single_quiz_report=$DB->get_record_sql("SELECT  q.id, qa.sumgrades as single_sumgrades,  q.name as single_quiz_name, q.grade as single_quiz_grades
  FROM {quiz_attempts} qa
  JOIN {quiz} q ON q.id = qa.quiz
  JOIN {quiz_grades} qg ON qg.quiz = q.id
  JOIN {user} u ON u.id = qa.userid
  WHERE (qa.userid=$userId) AND (q.id=$quizId)");
  return $single_quiz_report;

}

function getQuizAttempts($userId,$quizId){
  global $DB;
  $single_quiz_attempts=$DB->get_records_sql("SELECT qa.attempt, qa.sumgrades,q.grade , qa.sumgrades , qa.timestart , qa.timefinish
  FROM {quiz_attempts} qa
  JOIN {quiz} q ON q.id = qa.quiz
  WHERE (qa.userid=$userId) AND (qa.quiz=$quizId)
  ");

  $data = array();
  foreach($single_quiz_attempts as $k=> $quizes){
    $data[$k]['feedbacktext'] = getQuizGrade($quizId,$quizes->sumgrades);
    $data[$k]['id'] = $k;
    $data[$k]['attempt'] = $quizes->attempt;
    $data[$k]['sumgrades'] = $quizes->sumgrades;
    $data[$k]['grade'] = $quizes->grade;
    $data[$k]['timestart'] = $quizes->timestart;
    $data[$k]['timefinish'] = $quizes->timefinish;
  }

  die(json_encode($data));
}


function getQuizGrade($QuizId,$grade){
  global $DB;
  $quizGrade = $DB->get_records_sql("SELECT feedbacktext , mingrade , maxgrade
  FROM {quiz_feedback}
  WHERE (quizid = $QuizId)
  ");
  $feedback = "dfg";
  foreach($quizGrade as $result){
  if($result->mingrade <= $grade &&  $result->maxgrade >= $grade){
    return  $result->feedbacktext;

  }

}
}






function last_five_quiz($u){
	global $DB;
	$last_quizes=$DB->get_records_sql("SELECT qa.id, qa.quiz, qa.sumgrades, qa.attempt, q.name as quizname, q.grade, c.fullname as coursename
	FROM {quiz_attempts} qa
	JOIN {quiz} q ON qa.quiz = q.id
	JOIN {course} c ON q.course=c.id
	WHERE (userid=$u)
	ORDER BY id DESC LIMIT 5
	");
  return $last_quizes;
}
//last_five_quiz();








function getUniqueId($u, $quizId){

  global $DB;
  $uniqueid=$DB->get_records_sql("SELECT uniqueid  FROM {quiz_attempts} WHERE (userid=$u) AND (quiz=$quizId)  ");
    foreach($uniqueid as $key => $v){
        getCategoryQuestions($v->uniqueid);
        echo $v->uniqueid;
    }
  }






 function getQuestions($uniqueid){
   global $DB;
   $questions=$DB->get_records_sql("SELECT questionid   FROM {question_attempts} WHERE (questionusageid=$uniqueid) ");
     getCategories($id);
 }







 function getCategories($id){
   echo "...................................................................";
   echo "getCategories function called";
   global $DB;
   $categories=$DB->get_records_sql("SELECT DISTINCT q.category, qc.name
   FROM {question} q
   JOIN {question_attempts} qa ON q.id=qa.questionid
   JOIN {question_categories} qc ON q.category=qc.id
   WHERE (qa.questionusageid=566218)
   ");
   echo "<pre>";
   print_r($categories);
   echo "</pre>";
 }
/*
 $categoryquestions=$DB->get_records_sql("SELECT q.category ,   SUM(qas.fraction) as category_marks , count(qas.fraction) as category_total
     FROM {question} q  JOIN {question_attempts} qa
     ON q.id = qa.questionid  JOIN {question_attempt_steps} qas
     ON qas.questionattemptid=qa.id
     WHERE qa.questionusageid=566218 GROUP BY q.category  ");
*/




/* Get all Quizs with the userId and courseId*/
function getQuizsIds($userId, $courseId){
  global $DB;
  $course_quizes=$DB->get_records_sql("SELECT q.id,q.name as quizname,q.grade as quizgrade , qa.sumgrades , qa.timestart , qa.timefinish
  FROM {quiz_attempts} qa
  JOIN {quiz} q ON q.id = qa.quiz
  JOIN {user} u ON u.id = qa.userid
  WHERE qa.userid=$userId AND q.course=$courseId");

  $keys = array();
  foreach($course_quizes as $k=> $quizes){
    $keys[$k] = $k;

  }
  getUniqueIds($userId, $keys);


}

















function getUniqueIds($userId, $keys){
  global $DB;
  $ids = array();
    foreach($keys as $key){
    $uniqueid=$DB->get_records_sql("SELECT uniqueid  FROM {quiz_attempts} WHERE (userid=$userId) AND (quiz=$key)  ");
      foreach($uniqueid as $key => $v){
          $ids[] = $v->uniqueid;
      }
    }
    getCategoryMultipleQuestions($ids);
  }




function getCategoryMultipleQuestions($ids){


  global $DB;

  $maindata = array();
  foreach($ids as $id){

    $categoryquestions=$DB->get_records_sql("SELECT   q.name ,  count(qa.id) as total
    FROM {question} q
    left JOIN {question_attempts} qa ON qa.questionid = q.id
    WHERE questionusageid=$id GROUP BY q.category ");

    $categoryquestions2=$DB->get_records_sql("SELECT   q.name ,  SUM(qas.fraction) as category_marks
    FROM {question} q
    JOIN {question_attempts} qa  ON q.id = qa.questionid
    left JOIN {question_attempt_steps} qas  ON qas.questionattemptid=qa.id
    WHERE questionusageid=$id GROUP BY q.category ");
    $data = array_merge_recursive($categoryquestions,$categoryquestions2);
     $cats = array();
      foreach($data as $k=>$d){
        $cats[$k]['name'] = $k;
        $cats[$k]['total'] = $d['total'];
        $cats[$k]['category_marks'] = round($d['category_marks']);
      }
      $maindata = $maindata + $cats;
  }




	die(json_encode($maindata));

}



function getCategoryQuestions($id){


  global $DB;
  $categoryquestions=$DB->get_records_sql("SELECT   q.name ,  count(qa.id) as total
  FROM {question} q
  left JOIN {question_attempts} qa ON qa.questionid = q.id
  WHERE questionusageid=$id GROUP BY q.category ");


  $categoryquestions2=$DB->get_records_sql("SELECT   q.name ,  SUM(qas.fraction) as category_marks
  FROM {question} q
  JOIN {question_attempts} qa  ON q.id = qa.questionid
  left JOIN {question_attempt_steps} qas  ON qas.questionattemptid=qa.id
  WHERE questionusageid=$id GROUP BY q.category ");
  $data = array_merge_recursive($categoryquestions,$categoryquestions2);
 $cats = array();
  foreach($data as $k=>$d){
    $cats[$k]['name'] = $k;
    $cats[$k]['total'] = $d['total'];
    $cats[$k]['category_marks'] = round($d['category_marks']);
  }



	die(json_encode($cats));

}




function test($u, $quizId){
  global $DB;
  $pass_score=$DB->get_record_sql(" SELECT mingrade FROM mdl_quiz_feedback WHERE (quizid = $quizId)");
  $total_grades=$DB->get_record_sql(" SELECT grade FROM mdl_quiz WHERE (id = $quizId)");

  $ps=number_format($pass_score->mingrade);

    $tg=$total_grades->grade;
    $pass_per=($ps*100)/$tg;

    $uniqueid=$DB->get_record_sql("SELECT uniqueid  FROM {quiz_attempts} WHERE (userid=$u) AND (quiz=$quizId)  ");
    $ui=$uniqueid->uniqueid;
    $total_questions=$DB->get_record_sql(" SELECT count(questionid) as total_questions FROM mdl_question_attempts where (questionusageid=$ui)");
    //echo str_repeat('&nbsp;', 80);

    $total_time=$DB->get_record_sql("SELECT timelimit  FROM {quiz} WHERE (id=$quizId) ");
    $tt=$total_time->timelimit;
    $tt=($tt/60);

    echo "<table style='width: 100%; font-weight: bold;'>";
    echo "<tr>";echo "<td>"; echo "Passing score grade: "; echo $ps; echo "</td>";
    echo "<td>"; echo "Passing percentage: ";    echo $pass_per; echo "</td>";
    echo "<td>"; echo "Total Number of Questions: ";    $tq=$total_questions->total_questions;   echo $tq; echo "</td>";
    echo "<td>";    echo "Total Time: ";    echo $tt." Minutes"; echo "</td>";
    echo "</tr>";
    echo "</table>";
}




// getUniqueId();
// getQuestions();
// getCategories();
//getCategoryQuestions(566218);
?>
