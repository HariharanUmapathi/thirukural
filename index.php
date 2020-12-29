<head><meta charset='UTF-8'></head>
<?PHP
//header("content-type:text/html,charset:utf-8");
$file=fopen("thirukural.json","r");
$thirukural=fread($file,filesize("thirukural.json"));
$thir=json_decode($thirukural);
$thirukural_array=($thir->kural);
echo json_encode($thirukural_array[rand(1,1330)]);
echo "<script>
document.body.innerText=JSON.stringify(JSON.parse(document.body.innerText))
</script>";
?>