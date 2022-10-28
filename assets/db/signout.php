<?php
if (isset($_POST['cancel'])) {
    session_start();
    session_unset();
    session_destroy();

    header("location: ../../");
}
?>