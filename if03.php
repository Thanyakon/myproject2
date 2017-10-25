<?php
//--if03.php
$name = "admin";

if ($name=="manager")
	{
		echo "ยินดีต้อนรับ <font color='VioletRed'> $name </font> คุณคือผู้จัดการ <br>";
		echo "<a href = 'http://www.Thanyakon.com'> ไปเว็บ Thanyakon.com </a>";
		
	
	}elseif ($name=="admin")
	{
		echo "ยินดีต้อนรับ <font color='DeepSkyBlue'> $name </font>  คุณคือผู้ดูแลระบบ";	
		echo "<a href = 'http://www.rmutsb.ac.th'> ไปเว็บ rmutsb.ac.th </a>";
		
		
		
	}elseif ($name=="webmaster")
	{
		echo "ยินดีต้อนรับ <font color='LawnGreen'> $name </font>  คุณคือผู้ดูแลเว็บไซต์";
	}else
	{
		echo "ยินดีต้อนรับ <font color='MediumSlateBlue'> $name </font>  คุณคือผู้ใช้งาน";	
	}
	
?>