?php
if (!isset($_SESSION)) {
        session_start();
}
// anti flood protection
if($_SESSION['last_session_request'] > time() - 2){
        // users will be redirected to this page if it makes requests faster than 2 seconds
        header("location: http://www.example.com/403.html");
        exit;
}
$_SESSION['last_session_request'] = time();
?>