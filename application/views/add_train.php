<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Train</title>
    <link rel = "stylesheet" type = "text/css" 
        href = "<?php echo base_url(); ?>css/signup.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
          
</head>
<body>
<div class="container">
<form action="../Welcome/add_datatrain" method="POST">
    <h1> สถานีรถไฟ </h1>
    <div class="form-train">
        <label> ขบวน </label>
        <input type="text" name="train_box">
    </div>
<br>
    <div class="tontang">
        <div class="form-tontang">
            <label> ต้นทาง </label>
            <input type="text" name="ton_id">
            <label> สถานี </label>
            <input type="text" name="ton_station">
            <label> เวลาออก </label>
            <input type="text" name="ton_timeout">
        </div>
    </div>
<br>
    <div class="huayrach">
        <div class="form-huayrach">
            <label> ห้วยราช </label>
            <input type="text" name="huay_id">
            <label> ถึง</label>
            <input type="text" name="huay_to">
            <label> ออก </label>
            <input type="text" name="huay_timeout">
        </div>
    </div>
<br>
    <div class="ptang">
        <div class="form-ptang">
            <label> ปลายทาง </label>
            <input type="text" name="p_id">
            <label> สถานี </label>
            <input type="text" name="p_station">
            <label> ถึงเวลา </label>
            <input type="text" name="p_time">
        </div>
    </div>
<br>
    <select name="status">
        <option value="รถธรรมดา"> รถธรรมดา </option>
        <option value="รถดีเซลราง"> รถดีเซลราง</option>
        <option value="รถด่วนดีเซลราง"> รถด่วนดีเซลราง </option>
    </select>
<br><br>

    <input type="submit" class="go">
        
</form>
<br>
</div>
</body>
</html>