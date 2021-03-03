<?php

$dataArray = ["gtAkademik", "gtFinansi", "gtPerizinan", "eCampuz", "eOviz"];
$arrayLength = count($dataArray);
        
$i = 0;
while ($i <= $arrayLength)
{
    echo $dataArray[$i] ."<br />";
    $i++;
}

?>