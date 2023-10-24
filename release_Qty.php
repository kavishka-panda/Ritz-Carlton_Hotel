<?php

require "connection.php";

    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date=$d->format("Y-m-d H:i:s");

echo($date);

?>