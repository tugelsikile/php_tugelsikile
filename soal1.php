<?php

$jml = $_GET['jml'];
echo "<table border=1>\n";
$span = $jml;
for ($a = $jml; $a > 0; $a--)
{
    echo "<tr>\n";
    echo "<td colspan='".$span."'>TOTAL : ".total($a)."</td>\n";
    echo "</tr>\n";
    echo "<tr>\n";
    for ($b = $a; $b > 0; $b--)
    {
        echo "<td>$b</td>";
    }
    echo "</tr>\n";
}
echo "</table>";
function total($jml) {
    $re = 0;
    for ($i = $jml; $i > 0; $i--) {
        $re = $re + $i;
    }
    return $re;
}
?>