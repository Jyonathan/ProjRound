<?php
include_once 'database.php'
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet', href='styles.css'>
<link rel='stylesheet', href='popups.css'>
</head>
<body>

<div class="sidenav">
  <a href ="#add" id="myShow" >Add Event</a>
  <a href ="#del" id="myShow2">Delete Event</a>
</div>

<div id="myPopup" class="popup">
        <form action="addEvent.php" method="GET" class="popup-content">
        <a href ="#" id="closePopup">
            X
        </a>
        <input type="text" placeholder="Enter Event Name" Name="eName"/><br>
        <br>
        <select Name="Day">
        <option name="Day">Select Event Day</option>
        <option name="Monday">Monday</option>
        <option name="Tuesday">Tuesday</option>
        <option name="Wednesday">Wednesday</option>
        <option name="Thursday">Thursday</option>
        <option name="Friday">Friday</option>
        <option name="Saturday">Saturday</option>
        <option name="Sunday">Sunday</option>
        </select><br>
        <br>
            <select Name="sTime">
        <option name="Time">Select Start Time</option>
        <option name="00:00">00:00</option>
        <option name="01:00">01:00</option>
        <option name="02:00">02:00</option>
        <option name="03:00">03:00</option>
        <option name="04:00">04:00</option>
        <option name="05:00">05:00</option>
        <option name="06:00">06:00</option>
        <option name="07:00">07:00</option>
        <option name="08:00">08:00</option>
        <option name="09:00">09:00</option>
        <option name="10:00">10:00</option>
        <option name="11:00">11:00</option>
        <option name="12:00">12:00</option>
        <option name="13:00">13:00</option>
        <option name="14:00">14:00</option>
        <option name="15:00">15:00</option>
        <option name="16:00">16:00</option>
        <option name="17:00">17:00</option>
        <option name="18:00">18:00</option>
        <option name="19:00">19:00</option>
        <option name="20:00">20:00</option>
        <option name="21:00">21:00</option>
        <option name="22:00">22:00</option>
        <option name="23:00">23:00</option>
      </select><br>
      <br>
      <select Name="eTime">
        <option name="Time">Select End Time</option>
        <option name="00:00">00:00</option>
        <option name="01:00">01:00</option>
        <option name="02:00">02:00</option>
        <option name="03:00">03:00</option>
        <option name="04:00">04:00</option>
        <option name="05:00">05:00</option>
        <option name="06:00">06:00</option>
        <option name="07:00">07:00</option>
        <option name="08:00">08:00</option>
        <option name="09:00">09:00</option>
        <option name="10:00">10:00</option>
        <option name="11:00">11:00</option>
        <option name="12:00">12:00</option>
        <option name="13:00">13:00</option>
        <option name="14:00">14:00</option>
        <option name="15:00">15:00</option>
        <option name="16:00">16:00</option>
        <option name="17:00">17:00</option>
        <option name="18:00">18:00</option>
        <option name="19:00">19:00</option>
        <option name="20:00">20:00</option>
        <option name="21:00">21:00</option>
        <option name="22:00">22:00</option>
        <option name="23:00">23:00</option>
        </select>
        <input type="submit" name='submit' id='submit'value='Add'/>
    </form>
</div>

<div id="myPopup2" class="popup">
    <form action="deleteEvent.php" method="GET" class="popup-content">
    <a href ="#" id="closePopup2">
        X
    </a>
    <br>
    <input type="text" placeholder="Enter Event Name" Name="eDelName"/>
    <br>
    <input type="submit" name='submit' id='submit2' value='Delete'/>
    </form>
</div>

<table class="main">
    <tr>
    <?php
    $sql="SELECT * from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME='TT';";
    $resultColumn= mysqli_query($conn, $sql);
    $resultCheck= mysqli_num_rows($resultColumn);

    if ($resultCheck>0){
        while ($col=mysqli_fetch_assoc($resultColumn)){
            echo '<th>',$col['COLUMN_NAME'],'</th>';
        }
    }
    ?>
    </tr>
    <tbody>
    <?php
    $sql="SELECT * FROM TT;";
    $result= mysqli_query($conn, $sql);
    $resultCheck= mysqli_num_rows($result);

    if ($resultCheck>0){
        while ($row=mysqli_fetch_assoc($result)){
            echo '<tr>';
            foreach ($row as $val){
                    echo '<td>',$val,'</td>';
            }
            echo'</tr>';
        }
    }
    ?>
    </tbody>
</table>
<script>
        myShow.addEventListener("click", function () {
            myPopup.classList.add("show");
        });
        closePopup.addEventListener("click", function () {
            myPopup.classList.remove("show");
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup) {
                myPopup.classList.remove("show");
            }
        });
        myShow2.addEventListener("click", function () {
            myPopup2.classList.add("show");
        });
        closePopup2.addEventListener("click", function () {
            myPopup2.classList.remove("show");
        });
        window.addEventListener("click", function (event) {
            if (event.target == myPopup2) {
                myPopup2.classList.remove("show");
            }
        });
    </script>
</body>
</html> 