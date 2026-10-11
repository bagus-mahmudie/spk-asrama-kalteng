

<!DOCTYPE html>
<html lang="en">
  <?php
require "layout/head.php";
require "include/conn.php";
require "W.php";
require "R.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-excel.xls"); 

?>


  <body>
  <table class="table table-striped mb-0">
                    <caption>
    Nilai Preferensi (P)
  </caption>
  <tr>
    <th>No</th>
    <th>Alternatif</th>
    <th>Hasil</th>
  </tr>
  <?php

$P = array();
$m = count($W);
$no = 0;
foreach ($R as $i => $r) {
    for ($j = 0; $j < $m; $j++) {
        $P[$i] = (isset($P[$i]) ? $P[$i] : 0) + $r[$j] * $W[$j];
    }
    echo "<tr class='center'>
            <td>" . (++$no) . "</td>
            <td>A{$i}</td>
            <td>{$P[$i]}</td>
          </tr>";
          
}
?>
                    </table>
  </body>
 
</html>
