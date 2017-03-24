<style>
    .tableS
    {
        border-collapse: collapse !important;
    }

    .headerS
    {
        padding-left: 5px;
        color:white;
        border-left: 1px solid #e3e3e3;
        border-bottom: 1px solid #e3e3e3;
        white-space: nowrap;
        overflow: hidden;
        font-size: 10pt;
    }
    .positionInfo
    {
        font-size: 10pt;
        /*font-weight: bold;*/
        padding-left: 5px !important;
        /*width: 200px !important;*/
        border-left: 1px solid #e3e3e3;
        border-bottom: 1px solid #e3e3e3;
        white-space: nowrap;
        overflow: hidden;
    }
    .last
    {
        border-right: 1px solid #e3e3e3;
    }
</style>

<!DOCTYPE html>
<html>
<body>
<p>Abbott(#1234) has total 1234 positions</p>
<table style='width:1000px; margin-top: 10px;' id='activeUsers' class="tableS">
    <tr style="background-color: #446184;" >
        <td class='headerS'>Position ID</td>
        <td class='headerS'>Position Name</td>
        <td class='headerS'>Last Status</td>
        <td class='headerS'>Created By</td>
        <td class='headerS'>Create Date</td>
    </tr>
    <?php foreach ($companyPositionList as $key => $position) {
        echo "<tr>";
            echo "<td class='positionInfo'>".$position['sl_positionpk']."</td>";
            echo "<td class='positionInfo'>".$position['title']."</td>";
            echo "<td class='positionInfo'>".$position['statusTitle']."</td>";
            echo "<td class='positionInfo'>".$position['firstname']." ".$position['lastname']."</td>";
            echo "<td class='positionInfo last'>".substr($position['date_created'],0,10)."</td>";
        echo "</tr>";
    } ?>
</table>
</body>
</html>
