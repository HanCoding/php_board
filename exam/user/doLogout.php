<?php

session_start();

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}

session_destroy();

?>

<script>

    location.href="../article/list.php";
    alert("로그아웃되었습니다.");

</script>