<?php

$dbConn = mysqli_connect("127.0.0.1:3306",
"suhan", "201610", "sbs") or die("MariaDB 연동 실패");

$id = $_POST['id'];
$title = $_POST['title'];
$name = $_POST['name'];
$content = $_POST['content'];

$sql = "update article set title = '$title', name = '$name', content = '$content', updateDate = now() where id = $id";

$rs = mysqli_query($dbConn, $sql);

?>

<script>
    <?php if ($rs != null) {?>
        alert("수정이 완료되었습니다.");
        location.href="list.php";
    <?php }else { ?>
        alert("수정이 실패하였습니다. 관리자에게 문의해 주세요.");
        location.href="list.php";
    <?php } ?>

</script>