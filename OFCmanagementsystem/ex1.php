<?php


include 'DBController.php';
$db_handle = new DBController();
$productResult = $db_handle->runQuery("select * from stations");

if (isset($_POST["export"])) {
    $filename = "Export_block_section_details.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();
}
?>

<div id="table-container">
    <table id="tab">
        <thead>
            <tr>
                <th>block section ID</th>
                <th>station_from</th>
                <th>station_to</th>
                <th>distance</th>
                <!-- <th width="20%">Average Rating</th> -->
            </tr>
        </thead>
        <tbody>
 
            <?php
            $query = $db_handle->runQuery("select * from stations");
            if (! empty($productResult)) {
                foreach ($productResult as $key => $value) {
                    ?>
                 
                     <tr>
                <td><?php echo $productResult[$key]["bsid"]; ?></td>
                <td><?php echo $productResult[$key]["sfrom"]; ?></td>
                <td><?php echo $productResult[$key]["sto"]; ?></td>
                <td><?php echo $productResult[$key]["distance"]; ?></td>
               
            </tr>
             <?php
                }
            }
            ?>
      </tbody>
    </table>

    <div class="btn">
        <form action="" method="post">
          <button type="submit" id="btnExport" name='export'
                value="Export to Excel" class="btn btn-info">Export to
                excel</button>
        </form>
    </div>
</div>

<html>
<body>
<a class="btn" href="aloginwel.php"> Back To Main Menu </a>
</body>
</html>