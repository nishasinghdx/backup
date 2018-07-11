<?php
require_once(dirname(__FILE__) . '/../../config.php');
require_once(__DIR__.'/locallib.php');
echo $OUTPUT->header();
global $USER;
global $DB;
$current_userid = $USER->id;
$user_courses = getallCourses($current_userid);
$stmt="this course do not have quizzes";
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="resourses/Chart.bundle.js"></script>
	<script src="resourses/utils.js"></script>
	<script>
		function secondsTimeSpanToHMS(s) {
			var h = Math.floor(s / 3600); //Get whole hours
			s -= h * 3600;
			var m = Math.floor(s / 60); //Get remaining minutes
			s -= m * 60;
			return h + ":" + (m < 10 ? '0' + m : m) + ":" + (s < 10 ? '0' + s : s); //zero padding on minutes and seconds
		}

		secondsTimeSpanToHMS(125);


		function GetQuiz(Id) {
			$('#quizattemptsreport').hide();
      $('#showheadattept').hide();
      $('#courseReport2').hide();
      $('#message').hide();
			$('#quizcatCategoryreportrows').html("");
			$('#quizcatCategoryreport').hide();
			$('#quizcatCategoryreportheading').hide();
			$("#testdetail").html('');


			var Coursename = $("#Courseslist option[value=" + Id + "]").text();
			if (Id == null || Id == "") {
				alert("Please selelect any course");
				return false;
			}
			$.ajax({
				type: "POST",
				url: "/report/myreport/ajex.php",
				data: {
					mode: 'GetQuiz',
					courseId: Id
				},

				success: function(quizs) {
					//console.log(quizs);
					var q_obj = JSON.parse(quizs);
          if ( q_obj.length !== 0 ) {


					var qnames = "";
					var ids = new Array();
					var names = new Array();
					var colors = new Array();
					$.each(q_obj, function(n, elem) {
            if(elem.quizgrade > 0){
						var frommarks = elem.quizgrade;
						var getmarks = elem.sumgrades;
						var percentage = getmarks * 100 / frommarks;
						if (percentage > 100) {
							percentage = 100;
						}
						names.push(elem.quizname);
						ids.push(Math.round(percentage));
						if (elem.feedbacktext === null) {
							elem.feedbacktext = "<p style='color:red'>FAIL</p>";
							colors.push('red');
						} else {
							if (elem.feedbacktext.indexOf("FAIL") >= 0) {
								colors.push('red');
							} else {
								colors.push('green');
							}
						}
          }
					});

					var options = "";
					$('#Quizselectbox').hide();
					$('#coursecategorylist').html("");
					$('#courseReportrows').html("");
          $('#courseReportrows2').html("");
					$('#coursecategorylist').append($('<option>', {
						value: "",
						text: "Select Quiz"
					}));


					$.each(q_obj, function(n, elem) {
						$('#Quizselectbox').show();
						var startdate = new Date(elem.timestart * 1000);
						var finishdate = new Date(elem.timefinish * 1000);
						var seconds = (finishdate - startdate) / 1000;



            if( startdate !=       'Invalid Date'){
              $('#coursecategorylist').append($('<option>', {
                value: Math.round(elem.id),
                text: elem.quizname
              }));

						var assignColor = elem.feedbacktext;
						if (assignColor.indexOf("FAIL") !=-1) {
						    assignColor = '<p style="color:red">FAIL</p>';
						}else{
							assignColor = '<p style="color:green">PASS</p>';

						}
						 startdate = startdate.toString();
						var result = startdate.split(' ');
						startdate = result[0]+" "+result[1]+" "+result[2]+", "+result[3]+" ("+result[4]+")";

              $('#courseReport').show();
  						$('#courseReportrows').append('<tr class="" id="report_loglive_r0"><td class="cell c0" id="report_loglive_r0_c0" style="height: 30px!important;">' + Coursename +
  							'</td><td class="cell c1" id="report_loglive_r0_c1" style="height: 30px!important;"> ' + elem.quizname + '</td><td class="cell c2" id="report_loglive_r0_c2" style="height: 30px!important;">' + Math.round(elem.sumgrades) +
  							'</td><td class="cell c3" id="report_loglive_r0_c3" style="height: 30px!important;">' + Math.round(elem.quizgrade) + '</td><td class="cell c4" id="report_loglive_r0_c4" style="height: 30px!important;">' + assignColor +
  							'</td><td class="cell c4" id="report_loglive_r0_c4" style="height: 30px!important;">' + secondsTimeSpanToHMS(seconds) + '</td><td class="cell c4" id="report_loglive_r0_c4" style="height: 30px!important;">' + startdate + '</td></tr>  ');
              }else{

                $('#courseReport2').show();
                $('#showheadattept').show();
    						$('#courseReportrows2').append('<tr class="" id="report_loglive_r0"><td class="cell c0" id="report_loglive_r0_c0" style="height: 30px!important;">' + Coursename +
    							'</td><td class="cell c1" id="report_loglive_r0_c1" style="height: 30px!important;"> ' + elem.quizname + '</td><td class="cell c4" id="report_loglive_r0_c4" style="height: 30px!important;">Not attempted</td><td class="cell c4" id="report_loglive_r0_c4" style="height: 30px!important;"><a href="/mod/quiz/view.php?q='+elem.id+'" target="_blank">Click to Attept</a></td></tr>  ');


              }


					});


					var color = Chart.helpers.color;
					var barChartData = {
						labels: names,
						datasets: [{
							label: 'Passing Score in Percentage',
							backgroundColor: colors,
							borderColor: window.chartColors.red,
							data: ids,

						}]
					};





					$('#canvas').remove(); // this is my <canvas> element
					$('#container').append('<canvas id="canvas"><canvas>');

					var ctx = document.getElementById("canvas").getContext("2d");


					window.myBar = new Chart(ctx, {
						type: 'bar',
						data: barChartData,
						options: {
							responsive: true,
							legend: {
								position: 'top',
								labels: {
									boxWidth: 80,
									fontColor: 'black'
								},
							},
							title: {
								display: true,
								text: Coursename,
							},
							scales: {
								yAxes: [{
									ticks: {
										max: 100,
										min: 0,
									},
									gridLines: {
										//drawBorder: false,
										drawOnChartArea: false,
										display: false,
									}

								}],
							} //end of scale
						} //end of options
					}); //end of window.myBar
        }else{
          $("#message").show();
          $("#message").html('<h2 style="text-align:center;"> No attempted quiz Avaialble! </h2>');
          $('#canvas').remove(); // this is my <canvas> element
					$('#container').append('<canvas id="canvas"><canvas>');

        }


					categoryreport(Id);


				},



				error: function(e) {
					console.log("error"+e);

				}

			}); //end of window.mybar

		}

		function GetQuizAttempt(Id) {
			var Quizname = $("#coursecategorylist option[value=" + Id + "]").text();
			$('#courseReport').hide();
      $('#courseReport2').hide();
			$('#quizcatCategoryreport').hide();
			$('#quizcatCategoryreportheading').hide();
			$("#testdetail").html('');
			$.ajax({
				type: "POST",
				url: "/report/myreport/ajex.php",
				data: {
					mode: 'GetQuizAttempt',
					quizId: Id
				},
				success: function(quizattempts) {
					var q_obj = JSON.parse(quizattempts);
					var attempt = new Array();
					var getmarks = new Array();
					var colors = new Array();
					$('#quizattemptsreportrows').html("");
					$.each(q_obj, function(n, elem) {
						var frommarks = elem.grade;
						var comemarks = elem.sumgrades;
						if (elem.feedbacktext === null) {
							elem.feedbacktext = "<p>FAIL</p>";
							colors.push('red');
						} else {
							if (elem.feedbacktext.indexOf("FAIL") >= 0) {
								colors.push('red');
							} else {
								colors.push('green');
							}
						}
						var percentage = comemarks * 100 / frommarks;



						var startdate = new Date(elem.timestart * 1000);
						var finishdate = new Date(elem.timefinish * 1000);
						var seconds = (finishdate - startdate) / 1000;
						var assignColor = elem.feedbacktext;
						if (assignColor.indexOf("FAIL") !=-1) {
						    assignColor = '<p style="color:red">FAIL</p>';
						}else{
							assignColor = '<p style="color:green">PASS</p>';

						}

						startdate = startdate.toString();
					 var result = startdate.split(' ');
					 startdate = result[0]+" "+result[1]+" "+result[2]+", "+result[3]+" ("+result[4]+")";
						$('#quizattemptsreport').show();
						$('#quizattemptsreportrows').append('<tr class="" id="report_loglive_r0"><td class="cell c0" id="report_loglive_r0_c0" style="height: 30px!important;">' + Quizname +
							'</td><td class="cell c1" id="report_loglive_r0_c1" style="height: 30px!important;"> ' + Math.round(elem.attempt) + '</td><td class="cell c2" id="report_loglive_r0_c2" style="height: 30px!important;">' + Math.round(elem.sumgrades) +
							'</td><td class="cell c3" id="report_loglive_r0_c3" style="height: 30px!important;">' + Math.round(elem.grade) + '</td><td class="cell c4" id="report_loglive_r0_c4" style="height: 30px!important;">' + assignColor +
							'</td><td class="cell c4" id="report_loglive_r0_c4" style="height: 30px!important;">' + secondsTimeSpanToHMS(seconds) + '</td><td class="cell c4" id="report_loglive_r0_c4" style="height: 30px!important;">' + startdate + '</td></tr>');



						if (percentage > 100) {
							percentage = 100;
						}
						attempt.push("Attempt - " + elem.attempt);
						getmarks.push(percentage);
					});

					var color = Chart.helpers.color;
					var barData = {
						labels: attempt,
						datasets: [{
							label: 'Passing Score in Percentage',
							backgroundColor: colors,
							data: getmarks,

						}]
					};

					$('#canvas').remove(); // this is my <canvas> element
					$('#container').append('<canvas id="canvas"><canvas>');

					var qtx = document.getElementById("canvas").getContext("2d");
					window.myBar = new Chart(qtx, {
						type: 'bar',
						data: barData,
						options: {
							responsive: true,
							legend: {
								position: 'top'

							},
							title: {
								display: true,
								text: Quizname,
							},
							scales: {
								yAxes: [{
									ticks: {
										max: 100,
										min: 0,
									}
								}]
							}
						}
					});

				},
				error: function(e) {
					alert("Error While Fetching Quiz = " + e);
				}

			});
		}
		function questions(Id){
			$('#quizcatCategoryreportrows').html("");
				$.ajax({ //create an ajax request to load_page.php
                type: "POST",
                url: "ajex.php",
                data: {
                  mode: 'questions',
									quizId: Id
                },
                success: function(response) {


								var q_obj = JSON.parse(response);

									if ( q_obj.length !== 0 ) {
									$.each(q_obj, function(n, elem) {
										$('#quizcatCategoryreport').show();
										$('#quizcatCategoryreportheading').show();
										var name = elem.name;
										var total = elem.total;
										var category_marks = elem.category_marks;
										var percentage = Math.round(elem.category_marks * 100 / elem.total);
										var perfomce = "";
										if(percentage < 50){
											perfomce = '<p style="color:red">WEEK</p>';
										}else if (percentage > 50 && percentage < 80) {
											perfomce = '<p style="color:yellow">AVERAGE</p>';
										}else if (percentage >= 80) {
											perfomce = '<p style="color:Green">STRONG</p>';
										}



										$('#quizcatCategoryreportrows').append('<tr class="" id="report_loglive_r0"><td class="cell c0" id="report_loglive_r0_c0" style="height: 30px!important;">' +name+'</td><td class="cell c1" id="report_loglive_r0_c1" style="height: 30px!important;">' +total+' </td><td class="cell c2" id="report_loglive_r0_c2" style="height: 30px!important;">' +category_marks +'</td><td class="cell c3" id="report_loglive_r0_c3" style="height: 30px!important;">'+perfomce+'</td></tr>');
									});
								}


                    console.log(response);
                }

              });
		}




        function test(Id){
					$("#testdetail").html('');
				$.ajax({ //create an ajax request to load_page.php
                type: "POST",
                url: "ajex.php",
                data: {
                  mode: 'test',
									quizId: Id
                },
                success: function(response) {

                                //alert('successfull');
                                 $("#testdetail").html(response);

								}

              });
		}





		function categoryreport(Id){

			$.ajax({
				type: "POST",
				url: "/report/myreport/ajex.php",
				data: {
					mode: 'categoryreport',
					courseId: Id
				},

			success: function(quizs) {
				console.log(quizs);

				var q_obj = JSON.parse(quizs);

					if ( q_obj.length !== 0 ) {
					$.each(q_obj, function(n, elem) {
						$('#quizcatCategoryreport').show();
						$('#quizcatCategoryreportheading').show();
						var name = elem.name;
						var total = elem.total;
						var category_marks = elem.category_marks;
						var percentage = Math.round(elem.category_marks * 100 / elem.total);
						var perfomce = "";
						if(percentage < 50){
							perfomce = '<p style="color:red">WEEK</p>';
						}else if (percentage > 50 && percentage < 80) {
							perfomce = '<p style="color:yellow">AVERAGE</p>';
						}else if (percentage >= 80) {
							perfomce = '<p style="color:Green">STRONG</p>';
						}
						$('#quizcatCategoryreportrows').append('<tr class="" id="report_loglive_r0"><td class="cell c0" id="report_loglive_r0_c0" style="height: 30px!important;">' +name+'</td><td class="cell c1" id="report_loglive_r0_c1" style="height: 30px!important;">' +total+' </td><td class="cell c2" id="report_loglive_r0_c2" style="height: 30px!important;">' + category_marks+'</td><td class="cell c3" id="report_loglive_r0_c3" style="height: 30px!important;">'+perfomce+'</td></tr>');
					});
				}


						console.log(response);







			},
			error: function(e) {
				alert("Error While Fetching Quiz = " + e);
			}
			});
		}













	</script>

	<div class="row">
		<div class="card card-shadow" style="clear: both;width:100%;">
			<div class="card-header card-header-transparent pt-20 pb-0">
				<label id="stats_name" class="font-weight-400 blue-grey-600 nav-link float-left" style="font-size: 24px; text-align: center; width: 100%;">My Reports</label>
			</div>
			<div class="widget-content tab-content bg-white px-20 pt-0 pb-20" data-plugin="tabs">
				<div class="tab-content">
					<div class="tab-pane active" id="statsOne">
						<div id="enrolled_users_stats">
							<div class="card card-shadow m-0">
								<div class="widget-content tab-content bg-white p-20">

									<div class="row">
										<div class="col-md-6">
											<label class="font-weight-400 blue-grey-600 font-size-14">Select Courses :</label>
											<select id="Courseslist" class="coursecategorylist form-control mb-10" onchange="GetQuiz(this.value);">
						<option  value="">Select Course</option>
					<?php foreach($user_courses as $courses){ ?>
						<option value="<?php echo $courses->id; ?>"><?php print_r($courses->fullname); ?></option>
					<?php } ?>
					</select>

										</div>


										<div class="col-md-6">
											<div id="Quizselectbox" style="display:none;">
												<label class="font-weight-400 blue-grey-600 font-size-14">Select Quiz:</label>
												<select id="coursecategorylist" class="coursecategorylist form-control mb-10" onchange="GetQuizAttempt(this.value); questions(this.value); test(this.value);">
            </select>
											</div>
										</div>
									</div>









									<!-- start of table code  -->

									<div class="row">
										<div class="col-md-12">
											<div class="no-overflow">
												<table cellspacing="0" class="flexible reportloglive generaltable generalbox myreporttable" aria-live="polite" style="font-size:12px;display:none;" id="courseReport">
													<thead>
														<tr>
															<th class="header c0" style="height: 30px!important;" scope="col">Course Name</th>
															<th class="header c1" style="height: 30px!important;" scope="col">Test Name #</th>
															<th class="header c4" style="height: 30px!important;" scope="col">Your Marks</th>
															<th class="header c2" style="height: 30px!important;" scope="col">Grade</th>
															<th class="header c2" style="height: 30px!important;" scope="col">Result</th>
															<th class="header c3" style="height: 30px!important;" scope="col">Time Taken</th>
															<th class="header c3" style="height: 30px!important;" scope="col">Start Date</th>

														</tr>
													</thead>
													<tbody id="courseReportrows"></tbody>
												</table>


                        <table cellspacing="0" class="flexible reportloglive generaltable generalbox myreporttable" aria-live="polite" style="font-size:12px;display:none;" id="courseReport2">
													<thead>
                            <br/><h3 style="text-align:center;display:none;" id="showheadattept">Not Attempted Courses</h3><br/>
														<tr>
															<th class="header c0" style="height: 30px!important;" scope="col">Course Name</th>
															<th class="header c1" style="height: 30px!important;" scope="col">Test Name #</th>
															<th class="header c4" style="height: 30px!important;" scope="col">Description</th>
															<th class="header c2" style="height: 30px!important;" scope="col">Action</th>

														</tr>
													</thead>
													<tbody id="courseReportrows2"></tbody>
												</table>



													<div id="testdetail" style="color:black"></div>


												<!--  Single Quiz attept table Result -->
												<table cellspacing="0" class="flexible reportloglive generaltable generalbox myreporttable" aria-live="polite" style="font-size:12px;display:none;" id="quizattemptsreport">
													<thead>
														<tr>
															<th class="header c1" style="height: 30px!important;" scope="col">Test Name #</th>
															<th class="header c0" style="height: 30px!important;" scope="col">Attempt #</th>
															<th class="header c4" style="height: 30px!important;" scope="col">Your Marks</th>
															<th class="header c2" style="height: 30px!important;" scope="col">Grade</th>
															<th class="header c2" style="height: 30px!important;" scope="col">Result</th>
															<th class="header c3" style="height: 30px!important;" scope="col">Time Taken</th>
															<th class="header c3" style="height: 30px!important;" scope="col">Start Date</th>
														</tr>
													</thead>
													<tbody id="quizattemptsreportrows"></tbody>
												</table>


</br>


												<!--  Single Quiz attept table Result -->




<h5 id="quizcatCategoryreportheading" style="display:none;">This report shows the percentage of items in each section you answered correctly for the  Tests.The following information is provided to give you feedback on your relative strengths on a per section basis.</h5>




												<table cellspacing="0" class="flexible reportloglive generaltable generalbox myreporttable" aria-live="polite" style="font-size:12px;display:none;" id="quizcatCategoryreport">
													<thead>
														<tr>
															<th class="header c1" style="height: 30px!important;" scope="col">Section Analysis #</th>
															<th class="header c4" style="height: 30px!important;" scope="col">Total Questions</th>
															<th class="header c2" style="height: 30px!important;" scope="col">Correct Answers</th>
															<th class="header c2" style="height: 30px!important;" scope="col">Performance</th>
														</tr>
													</thead>
													<tbody id="quizcatCategoryreportrows"></tbody>
												</table>







											</div>

											<ul class="chart-legend list-group list-group-full clearfix" id="markslist">

											</ul>
										</div>
									</div>

									<!-- end of table code -->

									<!-- start of graph display -->
									<div class="row">
										<div class="col-md-12" id="graphresult">
											<div id="container" style="width: 95%;">
                        <div id="message" style="display:none"></div>
                        <canvas id="canvas"></canvas>
											</div>
										</div>
									</div>
									<!-- end of graph display -->





									<div class="enroll-stats-error alert alert-danger" style="display:none">
										Sorry, Some problem occured while loading data.
									</div>
									<div class="enroll-stats-nouserserror alert alert-info" style="display:none">
										No enrolled users found in this Course Category.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="statsTwo">

						<div id="quiz_stats">
							<div class="card card-shadow m-0">
								<div class="widget-content tab-content bg-white p-20">
									<select id="quiz-course-list" class="form-control mb-30">
					<option data-id="5">OCPJBCD 5 Practice Tests</option>
				</select>
									<div id="quiz-chart-area">
										<div class="chart"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
											<canvas id="barChart" height="0" width="0" style="display: block; width: 0px; height: 0px;"></canvas>
										</div>
									</div>
									<div class="quiz-stats-error alert alert-danger" style="display:none">
										Sorry, Some problem occured while loading data.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>




<div id="CategoryQuestionsResponse">

</div>



		</body>

		</html>
		<?php echo $OUTPUT->footer(); ?>
