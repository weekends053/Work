<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Work</title>

	
</head>
<body>
<center><h1>ข้อมูลการทำงาน</h1></center>
<center><form method="post" action="../Work/create">
    <table width="50%" border="0">
    <tr>
    <td>ชื่อบริษัท</td>
    <td><input name="Company_Name" type="text" maxlength="50"/></td>
  </tr>
  <tr>
    <td>ที่อยู่บริษัท</td>
    <td><label for=""></label><label for="textarea2"></label><textarea name="Company_Address"  cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>อาชีพ</td>
    <td><input name="Profession" type="text" maxlength="50"/></td>
  </tr>
  <tr>
    <td>ตำแหน่ง</td>
    <td><input name="Rank" type="text" maxlength="50"/></td>
  </tr>
  <tr>
    <td>เบอร์โทรศัพท์บริษัท</td>
    <td><label for="Company_Tel"></label>
    <input name="Company_Tel" type="text" maxlength="10" /></td>
  </tr>
    </table>
    <br>
    <center><input name="submit" type="submit" value="บันทึก" /></center>
    </form></center>
</body>
</html>