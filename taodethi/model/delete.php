<?php
include "../../ketnoicsdl/ketnoi.php";
if(isset($_POST["thamso"]["makhoa"])){
	$makhoa=$_POST["thamso"]["makhoa"];
	$sql="DELETE FROM `khoa` WHERE khoa.makhoa='$makhoa'";
	$thucthi=$conn->query($sql);
	if($thucthi){
			echo "Xóa thành công";
	}
	else{ echo "Có lỗi xảy ra vui lòng kiểm tra lại"; }
}
else{ echo " Xóa không thành công"; }

?> 