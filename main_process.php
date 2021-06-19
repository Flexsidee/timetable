<?php
include'process_timetable_p.php';
$tt=new timetable("where venue_id is not null order by combined_population desc");
$tt->assign_period();
?>