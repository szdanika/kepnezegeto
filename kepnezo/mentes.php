<pre>
<?
print_r($_FILES);



?>
</pre>


<?
$fajl = $_FILES['fajl'];
if($fajl['type'] == "image/jpeg")
{
	$filename = $_FILES['fajl'];
	$idnev = $filename['tmp_name'];
	//$name = $filename + $idnev;
	$cel = './kepek/'. date('ymdhis_') . $filename['name'];
	move_uploaded_file($idnev, $cel);
	print"<script>parent.location.href=parent.location.href</script>";
}
else
{
	print"<script>alert('Hibás képformátum')</script>";
}
?>