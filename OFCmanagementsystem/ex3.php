<?php
include 'DBController.php';
$db_handle = new DBController();
$productResult = $db_handle->runQuery("select * from loss");

if (isset($_POST["export"])) {
    $filename = "Export_total_cable_loss.xls";
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
                <th>bsid</th>
                <th>cid</th>
                <th>fnum</th>
                <th>length</th>
                <th>loss</th>
                <th>util</th>
                <!-- <th width="20%">Average Rating</th> -->
            </tr>
        </thead>
        <tbody>
 
            <?php
            $query = $db_handle->runQuery("select * from loss");
            if (! empty($productResult)) {
                foreach ($productResult as $key => $value) {
                    ?>
                 
                     <tr>
                <td><?php echo $productResult[$key]["bsid"]; ?></td>
                <td><?php echo $productResult[$key]["cid"]; ?></td>
                <td><?php echo $productResult[$key]["fnum"]; ?></td>
                <td><?php echo $productResult[$key]["length"]; ?></td>
                <td><?php echo $productResult[$key]["loss"]; ?></td>
                <td><?php echo $productResult[$key]["util"]; ?></td>
               
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

<a class="btn" href="aloginwel.php"> Back To Main Menu </a>

</html>