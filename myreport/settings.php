<?php

$ADMIN->add('reports', new admin_externalpage('myreport', get_string('myreport', 'report_myreport'), "$CFG->wwwroot/report/myreport/index.php"));
$settings = null;
?>
