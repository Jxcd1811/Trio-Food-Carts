<?php
include "dbconfig.php";
    if (isset($_POST['update'])) {
        $rsrv_id = $_POST['rsrv_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $reservation_datetime = $_POST['reservation_datetime'];
        $party_size = $_POST['party_size'];
        $package_choice = $_POST['package_choice'];
        $sql = "UPDATE `reservations` SET `name`='$name', `email`='$email', `reservation_datetime`='$reservation_datetime', `party_size`='$party_size', `package_choice`='$package_choice' WHERE `id`='$rsrv_id'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            echo "Record updated successfully.";
            header('Location: index.php');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    }

if (isset($_GET['id'])) {
    $rsrv_id = $_GET['id'];
    $sql = "SELECT * FROM reservations WHERE id='$rsrv_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $reservation_datetime = $row['reservation_datetime'];
            $party_size = $row['party_size'];
            $package_choice = $row['package_choice'];
            }
    ?>

        <h2>Student details Update Form</h2>
        <form action="" method="post">
          <fieldset>
            <legend>Personal information:</legend>
            Name:<br>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="rsrv_id" value="<?php echo $id; ?>">
            <br>
            Email:<br>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <br>
            Reservation date and time:<br>
            <input type="text" name="reservation_datetime" value="<?php echo $reservation_datetime; ?>">
            <br><br>
            Party size:<br>
            <input type="text" name="party_size" value="<?php echo $party_size; ?>">
            <br><br>
            Package choice:<br>
            <input type="text" name="package_choice" value="<?php echo $package_choice; ?>">
            <br><br>
            <input type="submit" value="Update" name="update">
          </fieldset>
        </form>
        </body>
        </html>


    <?php
    } else{
        header('Location: index.php');
    }
}
?>