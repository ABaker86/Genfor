<div id="wrapper" style="height:100%; width: 100%">
<div id="bg" align="center" style=" text-align:center; height: 250; width: 150; background-color: tan">
<form method="post">
<input type="hidden" name="genmane">
<input type="submit" value="Generate">
</form>

<?php  
$x = $_POST['genmane'];
//explodes the lines of text into an array based on a comma separation  
$firstName = explode(",", file_get_contents('FirstName.txt'));
$lastName = explode("\n", file_get_contents('LastName.txt'));
//the array indexes of the names are then randomly shuffled based on the number of array indexes. 
echo $firstName[rand(0,count($firstName)-1)]." ".$lastName[rand(0,count($lastName)-1)]."<br>";
 $img = "<img src = \"resources\p".rand(1,4).".png\">";
echo $img  
?>
</div> </div>