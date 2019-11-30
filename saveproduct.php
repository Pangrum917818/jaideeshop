<?php
$allowedType=["jpg","png","gif","jpeg","tif","tiff"];
$fileType=explode("/",$_FILES["filepic"]["type"]);
//image/png filetype["image,"png"]
if(!in_array($fileType[1],$allowedType)){
   //เมื่ออัพโหลดไฟล์ที่ไม่ตรงกับ type ใน allowedType
   echo "Non-image file is not allowed";
}
echo "Type:" . $_FILES["filepic"]["type"] . "<br>";
echo "Name:" . $_FILES["filepic"]["name"] . "<br>";
echo "Size:" . $_FILES["filepic"]["size"] . "<br>";
echo "Temp name:" . $_FILES["filepic"]["type_name"] . "<br>";
echo "Error:" . $_FILES["filepic"]["error"] . "<br>";




?>