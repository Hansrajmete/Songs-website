              <?php
include('config.php');

if(isset($_GET['s']) && $_GET['s'] != ''){
	$s = $_GET['s'];
	$count=0;
	$sql = "SELECT * FROM `movie_names` WHERE Name LIKE '$s%'";
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>1){
echo"<li>$s</li>";}
	while($row = mysqli_fetch_array($result)){
		
		$url = $row['Id'];
		$title = $row['Name'];
		echo "<li style='list-style-type: none;
list-style-position: none;float: none; '><a href='http://go.ad2up.com/afu.php?id=872616'  onclick=window.open('movie_song_list.php?id=".$url."','_blank');window.open(this.href,'_self');>".$title."</a></li>";
if ($count==10) {
	break;
	# code...
}

$count++;
	}
}
if(isset($_GET['song']) && $_GET['song'] != ''){
	$s = $_GET['song'];
	$count=0;
	$sql = "SELECT * FROM `movie_details` WHERE Song_Name LIKE '%$s%'";
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>1){
echo"<li>$s</li>";}
	while($row = mysqli_fetch_array($result)){
		
		$url = $row['Id'];
		$title = $row['Song_Name'];
		echo "<li style='list-style-type: none;
list-style-position: none;float: none; '><a href='http://go.ad2up.com/afu.php?id=872616'  onclick=window.open('movie_song_list.php?id=".$url."','_blank');window.open(this.href,'_self');>".$title."</a></li>";
if ($count==10) {
	break;
	# code...
}

$count++;
	}
}
?>