<?php
$con=mysqli_connect('pollelection.db.11766414.hostedresource.com', 'pollelection', 'Qawsed1!','pollelection');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$term = trim(strip_tags($_GET['term']));//retrieve the search term that autocomplete sends



$result = mysqli_query($con,"SELECT CONSTITUENCY as value,id FROM constituency WHERE CONSTITUENCY LIKE '%".$term."%' LIMIT 10");





while ($row =  mysqli_fetch_array($result))//loop through the retrieved values
{
		$row['value']=htmlentities(stripslashes($row['value']));
		$row['id']=(int)$row['id'];
		$row_set[] = $row;//build an array
		
}
echo json_encode($row_set);//format the array into json data

?>