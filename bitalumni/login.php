<?php
//--login.php
if($username="admin"){
	echo "ยินดีต้อนรับคุณ" .$_POST['username'] ."คุณคือผู้ดูแลระบบ";
	echo "<br> <a href='admin/index.php'> ลิงคืไปหน้า Backend </a>";
}
elseif($username="Thanyakon"){
	echo "ยินดีต้อนรับคุณ" .$_POST['username'] ."คุณคือสมาชิกชมรม </a>";
	echo "<br> <a href='Home/index.php'> ลิงค์ไปหน้า Frontend </a>";
}
else {
	echo "ยินดีต้อนรับคุณ" .$_POST['username'] ."คุณคือผู้ใช้งานทั่วไป ";
	echo "<br> <a href='../'> ลิงคืไปหน้า User (myproject)  </a>";
}

?>