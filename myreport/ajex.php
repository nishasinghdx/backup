<?php
//print_r($_POST);
require_once(dirname(__FILE__) . '/../../config.php');
require_once(__DIR__.'/locallib.php');
global $USER;
global $DB;
$Userid = $USER->id;
// This file is part of Moodle - http://moodle.org/
defined('MOODLE_INTERNAL') || die;

if (!defined('REPORT_LOG_MAX_DISPLAY')) {
    define('REPORT_LOG_MAX_DISPLAY', 150); // days
}



if(isset($_POST['mode']) && $_POST['mode'] == "test"){
    test($Userid , $_POST['quizId']);
}


if(isset($_POST['mode']) && $_POST['mode'] == "GetQuiz"){


	$course_quizes = getQuizs( $Userid , $_POST['courseId']);
	$temp = [];
	foreach($course_quizes as $k=>$v){

		$temp[$k] = ['id' => $v->id, 'quizname' => $v->quizname];
	}
	die(json_encode($temp));
}



if(isset($_POST['mode']) && $_POST['mode'] == "categoryreport"){

	$course_quizes = getQuizsIds( $Userid , $_POST['courseId']);
	$temp = [];
	foreach($course_quizes as $k=>$v){

		$temp[$k] = ['id' => $v->id, 'quizname' => $v->quizname];
	}
	die(json_encode($temp));
}






if(isset($_POST['mode']) && $_POST['mode'] == "GetQuizAttempt"){
	$course_quizes = getQuizAttempts( $Userid , $_POST['quizId']);
	/*$temp = [];
	foreach($course_quizes as $k=>$v){

		$temp[$k] = ['id' => $v->id, 'quizname' => $v->quizname];
	}	*/
	die(json_encode($course_quizes));
}



if(isset($_POST['mode']) && $_POST['mode'] == "questions"){
  //echo "ajax questions fnction called";
  //$categoryquestions=getCategoryQuestions();
   getUniqueId($Userid , $_POST['quizId']);
?>
<!-- <center>
<table border="2" align="center" cellspacing="0" aria-live="polite"
class="flexible reportloglive generaltable generalbox myreporttable" style="margin: 0px auto;">
<tr style="background-color: #7ec0ee">
<th>category</th>
<th>marks</th>
</tr>

  <?php //foreach (//$categoryquestions as $cq): ?>
  <tr>
  <td><?php //echo $cq->category; ?></td>
  <td><?php //echo number_format($cq->category_marks); ?></td>
  </tr>
  <?php //endforeach; ?>
  </table>
</center> -->
<?php
}
?>



<?php
if(isset($_POST['mode']) && $_POST['mode'] == "last_five_quiz"){
	$last_quizes = last_five_quiz($Userid);
?>
  <table border="2" align="center" cellspacing="0" aria-live="polite"
  class="flexible reportloglive generaltable generalbox myreporttable" style="margin: 0px auto;">
  <tr style="background-color: #7ec0ee">
  <th>quiz id</th>
  <th>quiz name</th>
  <th>attempt</th>
  <th>course name</th>
  <th>marks scored</th>
  <th>total grades</th>
  </tr>

    <?php foreach ($last_quizes as $lq): ?>
    <tr>
    <td><?php echo $lq->quiz; ?></td>
    <td><?php echo $lq->quizname; ?></td>
    <td><?php echo $lq->attempt; ?></td>
    <td><?php echo $lq->coursename; ?></td>
    <!-- <td><?php //echo $lq->sumgrades; ?></td> -->
     <td><?php echo number_format($lq->sumgrades); ?></td>
    <td><?php echo number_format($lq->grade); ?></td>
    </tr>
    <?php endforeach; ?>
    </table>
<?php
}
?>
