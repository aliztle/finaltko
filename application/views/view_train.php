<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Table Train</title>
</head>
<body>

<table  border="1"> 
<table  border="1"> 
	<table align="center" border="1">
  <tr>
    <td rowspan="2">ขบวน</td>
   <td colspan="2"><center> ต้นทาง</center></td>
   <td colspan="2"><center> ห้วยราช</center></td>
   <td colspan="2"><center> ปลายทาง</center></td>
   <td rowspan="2">หมายเหตุ</td>
  </tr> 
  <tr>
    <td>สถานี</td>
	<td>เวลาออก</td>
    <td>ถึง</td>
    <td>ออก</td>
    <td>สถานี</td>
    <td>ถึงเวลา</td>
  <?php
    foreach($AT as $row){
  ?>
    <tr>
        <td><?=$row->t_id;?></td>
        <td>
            <?=$row->ton_station;?>
            <td>
            <?=$row->time_out;?>
        </td>
        <td>
            <?=$row->rach_to;?>
            </td>
            <td>
            <?=$row->rach_out;?>
        </td>
        <td>
            <?=$row->out_station;?>
            </td>
            <td>
            <?=$row->time_to;?>
        </td>
        <td><?=$row->status;?></td>
    </tr>
  <?php 
    }
  ?>
</table>
<a href="../Welcome/index">ไปหน้าเพิ่มเมนู</a>

</body>
</html>