<?php
require 'fungsi.php';

$nama_file= $_GET['file'];
$nama_file= str_replace('-_-', ' ', $nama_file).'.txt';
$posisi_file= "keyw/".$nama_file;


if(!file_exists($posisi_file)){
exit();
}

$array= array_filter(array_unique(explode("\n", file_get_contents($posisi_file))));
shuffle($array);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PDF Archive</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta name="NOINDEX,FOLLOW,NOARCHIVE,NOTRANSLATE">
</head>
<body>

<div class="container">
  <h2>PDF Archive</h2>
  <p>Preview PDF Archive</p>            
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>FileName</th>
	<th>Description</th>
        <th>Content-Type</th>
      </tr>
    </thead>
    <tbody>
<?php
$ii=1;
foreach($array as $item){
$title= trim($item);
$title= trim(preg_replace("![^a-z0-9]+!i", " ", $title));
$slug= trim(str_replace(' ', '-', $title),'-');
$pdfno= (($ii-1)*1)+1;


echo   '<tr>
        <td>'.$pdfno.'</td>
        <td><a href="/'.$slug.'.pdf" title="'.$title.'">'.$title.'</a></td>
	<td>no short description '.$title.' because this is pdf file</td>
        <td><b>* PDF *</b></td>
        </tr>

';
++$ii;
}
?>
    
</tbody>
  </table>
</div>
	<?php include('asite-pdf.php');?>

</body>
</html>
