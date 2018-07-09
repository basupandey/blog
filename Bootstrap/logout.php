<?php
include('inc_session.php');
//killing all session
session_destroy();

//redirect after killing the session
header('Location: index.php');
?>