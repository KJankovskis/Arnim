<?php include('header.php');?>

    <?php
        include('login.php');
        $username = $_SESSION['login_user']; 
        //echo "$username";
        $mysqli = NEW MySQLi('localhost', 'root','', 'mcvs_db');
        $resultSet  =$mysqli->query("SELECT * FROM persona WHERE lietotajvards='$username' ");
        if($resultSet->num_rows !=0){
            while($rows = $resultSet->fetch_assoc()){
                $name = $rows['vards'];
                $surname = $rows['uzvards'];
                $mail = $rows['epasts'];
                $phone = $rows['talrunis'];
                $adress = $rows['adrese'];
                $city = $rows['pilseta']; 
                $workplace = $rows['darbaVieta'];
                $role = $rows['lietotajaLoma'];
            }
        }

    ?>
    <div class="name-surname">
        <p ><?php echo "$name $surname"; ?> </p>
    </div>
    <div class="person">
        <div class="profilePicture"></div>
        <p><?php echo "<b>e-pasts</b> :  $mail" ?></p>
        <p><?php echo "<b>tālrunis</b> : $phone" ?></p>
        <p><?php echo "<b>dzīvesvietas adrese</b> : $adress , $city" ?></p>
        <p><?php echo "<b>darbavieta</b> : $workplace" ?></p>
        <p><?php
            if($role == 0){             //lietotajs
                echo "<b>apgūtie kursi</b> : <br>";
                echo "<b>iegūtie diplomi</b> : <br>";
                echo "<b>iegūtie sertifikāti</b> : <br>";
            }
            else if($role == 1){        //pasniedzejs
                echo "<b>pasniedzamie kursi</b> :";
            }
        ?></p>      
    </div>
    
    <div class="about">
        <p>Noslogojums</p>

    </div>
   
<?php include('footer.php'); ?>