<?php
function welcome($fname, $lname)
{
    echo '<h1>Welcome ' . $fname . ' ' . $lname. '!</h1>';
}

Welcome($_POST['firstname'], $_POST['lastname'])
?>