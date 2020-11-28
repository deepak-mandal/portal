<?php
include "../user/connection1.php";
$id=$_GET["id"];
mysqli_query($link, "delete from user_registration1 where id=$id");

?>
<script type="text/javascript">
    window.location="add_new_speakers.php";
</script>
