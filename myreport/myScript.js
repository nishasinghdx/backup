alert("hello world");

var Table = document.getElementById("myChart");
       Table.innerHTML = "";
var ctx = document.getElementById('myChart').getContext('2d');
function quiz_marks_report(){
  alert("graph called");
 var report = new Chart(ctx, {
     type: 'bar',
     data: {
         labels: [<?php echo '"'.implode('","', $quiz_name).'"' ?>],
         datasets: [{
             label: 'grades',

             data:[<?php echo '"'.implode('","', $sumgrades).'"' ?>],

             backgroundColor: [
                 'rgba(255, 99, 132, 0.2)',
                 'rgba(54, 162, 235, 0.2)',
                 'rgba(255, 206, 86, 0.2)',
                 'rgba(75, 192, 192, 0.2)',
                 'rgba(153, 102, 255, 0.2)',
                 'rgba(255, 159, 64, 0.2)'
             ],
             borderColor: [
                 'rgba(255,99,132,1)',
                 'rgba(54, 162, 235, 1)',
                 'rgba(255, 206, 86, 1)',
                 'rgba(75, 192, 192, 1)',
                 'rgba(153, 102, 255, 1)',
                 'rgba(255, 159, 64, 1)'
             ],
             borderWidth: 1,

         }]
     },
     options: {
         scales: {
             yAxes: [{
                 ticks: {
                     beginAtZero:true
                 }
                 }]
                 }
     }
 });
}

}
function myFunction(value){
 if(value=="qmr"){
   alert("quiz marks report");
   quiz_marks_report();
 }

//
