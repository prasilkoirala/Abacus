<?php
$itemname=$_GET['itemname'];
$category=$_GET['category'];
$itemdesc=$_GET['itemdesc'];
$price=$_GET['price'];
?>
<html>
<head>
<title>Abacus&#8482 Sell</title>
<link rel="stylesheet" type="text/css" href="abacus_style.css">
</head>

<body>
<?php include("top.php"); ?>
<div id="boxer"> 
<div id="omnibar">
<a href="index.php" id="omnilink">Abacus Homepage</a> &gt; Sell your item  </div>

<h2>Sell via Abacus</h2>
<form action="sell_process.php" method="POST" enctype="multipart/formdata">
<table>
<tr>
<td>What do you want to sell? </td><td><input id="registerinput" name="itemname" autocomplete="off" value="<?php echo $itemname; ?>" > (maximum 30 characters)</td>
</tr>
<tr>
<td>Category</td><td><select name="category" class="optionsinp" id="registerinput" value="<?php echo $category; ?>"  >
<option>Misc</option>
<option>Book/Note</option>
<option>Cell Phone</option>
<option>Computer</option>
<option>Accessory</option>
</select></td>

<tr>
<td>Describe your item </td><td><textarea name="itemdesc" id="otherinfo"><?php echo $itemdesc; ?></textarea> </td>
</tr>
<tr>
<td>Price (Rs) </td><td><input id="registerinput" name="price" autocomplete="off" value="<?php echo $price; ?>"> </td>
</tr>
</table><br>
<hr>
<h3>Login </h3><br>
<table>
<tr><td>USN</td><td><input name="usn" autocomplete="off" id="registerinput" 
<?php
if (isset($usn)) {
	echo "value='".$usn."' >";
} else {
	echo ">";
} ?>
</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password</td><td><input type="password" name="password" id="registerinput" 
<?php
if (isset($password)) {
	echo "value='".$password."' >";
} else {
	echo ">";
} ?>
</td>
</table><br><br>
<input type="submit" value="Post to Abacus" id="menuitem"> <input type="reset" value="Start over" id="menuitem"> </form>
<br>
<div id="desczone"><center>
Abacus alpha v2.3, 2014 <br>
Prasil Koirala </center></div>
<br><br>