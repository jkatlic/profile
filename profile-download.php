<?php
$file = "//www.jeremykatlic.com/dev/files/jeremy-katlics-resume.pdf";

if (file_exists($file)) {
    header('Content-Type: application/download');
    header('Content-Disposition: attachment;  filename="'.basename($file).'"');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}else{
    print("<h1>No file was found... $file</h1>");
}
?>