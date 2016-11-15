<?php

    require_once('component/jobboard/jobboard.class.php5');
    require_once('component/taaggregator/resources/lib/encoding_converter.class.php5');

    define('DB_NAME_SLISTEM','slistem');
    define('DB_SERVER_SLISTEM', '127.0.0.1');
    define('DB_USER_SLISTEM', 'pma_admin');
    define('DB_PASSWORD_SLISTEM', 'KVW4PVVAWHASuRDz');

    echo "TEST";

    mysql_connect( DB_SERVER_SLISTEM, DB_USER_SLISTEM, DB_PASSWORD_SLISTEM) or die(mysql_error());
    mysql_select_db(DB_NAME_SLISTEM) or die(mysql_error());

    $slistemQuery = " SELECT * FROM login ";
    $slistemQuery = mysql_query($slistemQuery);

    while($meetingData = mysql_fetch_assoc($slistemQuery))
    {
        echo "firstname: ".$meetingData['firstname']."<br>";
    }