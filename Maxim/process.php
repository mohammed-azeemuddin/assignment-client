<?php

  include "config.php";

  if(isset($_POST['sub'])){

    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $encrypted_pass = sha1($password);

    $sql = "select * from member where phone_number='$phone' and password= '$encrypted_pass' ";
    $result = mysqli_query($con_abdullah,$sql);

    $sql2 = "select award_id,description,date from award inner join member on award.member_id = member.member_id where phone_number='$phone' and password= '$encrypted_pass' ";
    $new_result = mysqli_query($con_abdullah,$sql2);

    if (mysqli_num_rows($new_result) > 0) {
      // output data of each row
      echo '<table>';
        echo '<thead>';
          echo '<tr>';
            echo '<th>Award ID</th>';
            echo '<th>Description</th>';
            echo '<th>Date</th>';
          echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
          while($row = mysqli_fetch_assoc($new_result)) {
              echo '<tr>';
                echo '<td>' . $row["award_id"] . '</td>';
                echo '<td>' . $row["description"] . '</td>';
                echo '<td>' . $row["date"] . '</td>';
              echo '</tr>';
          }
        echo '</tbody>';
      echo '</table>';

    } else {
      echo "0 results";
    }

    mysqli_close($con_abdullah);
  }

?>
