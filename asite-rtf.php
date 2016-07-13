<?php
$all= glob("keyw/*.txt");
shuffle($all);

echo '<div style="display:yes">';

foreach($all as $file){
$file= str_replace(array('keyw/', '.txt'), '', $file);
$file= str_replace(' ', '-_-', $file);
 echo '<a href="/rtf/'.$file.'" title="file '.$file.'">'.$file.'</a> | ';
}

echo '</div>';
?>