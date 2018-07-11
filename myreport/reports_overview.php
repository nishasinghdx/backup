
<?php
require_once(__DIR__.'/locallib.php');
echo $OUTPUT->header();
//$last_quizes=last_five_quiz();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="jquery-1.3.2.js"> </script>

 <script type="text/javascript">

 $(document).ready(function() {

    $("#display").click(function() {

      $.ajax({    //create an ajax request to load_page.php
        type: "POST",
        url: "ajex.php",
        data: {
					mode: 'last_five_quiz',
				},
        success: function(response){
            $("#responsecontainer").html(response);
          //  alert(response);
        }

    });
});
});

</script>
  </head>
  <body>

    <table border="1" align="center">
       <tr>
           <td> <input type="button" id="display" value="reports overview" /> </td>
       </tr>
    </table>
    <div id="responsecontainer" align="center">


  <!-- <center>  <h2>Last Five Attempts of User</h2>  </center>
    <table border="2" align="center" cellspacing="0" style="margin: 0px auto;">

  <tr>
    <th>quiz id</th>
    <th>quiz name</th>
    <th>attempt</th>
    <th>course name</th>
    <th>marks scored</th>
    <th>total grades</th>
  </tr>


  <?php //foreach ($last_quizes as $lq): ?>
    <tr>
<td><?php //echo $lq->quiz; ?></td>
<td><?php //echo $lq->quizname; ?></td>
<td><?php //echo $lq->attempt; ?></td>
<td><?php //echo $lq->coursename; ?></td>
<td><?php //echo $lq->sumgrades; ?></td>
<td><?php //echo $lq->grade; ?></td>
    </tr>
  <?php //endforeach; ?>
</table> -->
  </body>
</html>
<?php echo $OUTPUT->footer(); ?>
