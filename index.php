<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş-Kayıt-Çıkış Sistemi</title>

    <style>
        body{
            font-family: 'Arial';
            font-size: 14px;
            background-color: whitesmoke;
        }
        input{
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            width: 250px;
            font-size: 14px;
        }
        input[type="checkbox"]{
            width: auto;
        }
        button{
            border: 0px solid;
            border-radius: 10px;
            padding: 15px;
            background-color: darkcyan;
            color: lightcyan;
            width: 150px;
            font-size: 14px;
            transition: 300ms;
        }
        button:hover{
            opacity: 0.8;
        }
        .bg-gold{
            color: lightgoldenrodyellow;
            background-color: goldenrod;
        }
        .bg-red{
            background-color: red;
            color: white;
        }
        .bg-green{
            background-color: green;
            color: lightgreen;
        }
        td{
            padding: 5px;
            border-radius: 10px;
        }
    </style>

</head>
<body>

<?php

function uyariBas($tip, $hata){
    $tipRenk = ($tip == "success") ? "green" : "red";
    return "<tr class='uyari'><td colspan='2' align='center' class='bg-".$tipRenk."'>".$hata."<td></tr>";
}

session_start();

$mysqli = mysqli_connect("localhost", "enesbabekoglu_lab", "_M15vx7e3", "enesbabekoglu_lab");

if (!$mysqli) {
    die("Veritabanı bağlantı hatası: " . mysqli_connect_error());
}

?>

<?php if (isset($_SESSION['user_id'])) {  // Üye girişi yapılmışsa 
    
    $userID = $_SESSION['user_id'];
    $query = mysqli_query($mysqli, "SELECT * FROM USERS WHERE User_ID='$userID'");
    $user = mysqli_fetch_assoc($query);
    
?> 

<?php if($_GET['page'] == ""){?>

    <table>
        <tr>
            <td colspan="2" align="center">
                <h2>Hesabınız (ID: <?php echo $user['User_ID'];?>)</h2>
            </td>
        </tr>
        <tr>
            <td><b>Kullanıcı Adı:</b></td>
            <td><?php echo $user['User_Name'];?></td>
        </tr>
        <tr>
            <td><b>E-Posta Adresi:</b></td>
            <td><?php echo $user['E_Mail'];?></td>
        </tr>
        <tr>
            <td><b>Ad Soyad:</b></td>
            <td><?php echo $user['First_Name']." ".$user['Last_Name'];?></td>
        </tr>
        <tr>
            <td><b>Cep Telefonu:</b></td>
            <td><?php echo "+90 ".$user['GSM_No'];?></td>
        </tr>
        <tr>
            <td><b>Doğum Tarihi:</b></td>
            <td><?php echo $user['Birth_Date'];?></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><a href="?page=logout"><button>Çıkış Yap</button></a></td>
        </tr>
    </table>

    <?php }else if($_GET['page'] == "logout"){
        
        session_destroy();
        header("refresh:2; url=index.php");

    ?>

    <table><?php echo uyariBas("success", "Çıkış başarılı girişe yönlendiriliyorsunuz...");?></table>

    <?php }else{?>
        <h2>GEÇERSİZ SAYFA</h2>
    <?php }?>

<?php }else{ // Üye girişi yapılmamışsa ?>

    <?php if($_GET['page'] == ""){?>

    <h2>Giriş-Kayıt-Çıkış Sistemi</h2>
    <a href="?page=login"><button class="bg-gold">Giriş Yap</button></a>
    <a href="?page=register"><button>Hesap Oluştur</button></a>

    <?php }else if($_GET['page'] == "login"){?>

        <table>
            <tr>
                <td colspan="2" align="center">
                    <h2>Üye Girişi</h2>
                </td>
            </tr>
            <?php 
            
            if(isset($_POST['login'])){

                $username = htmlspecialchars($_POST['username']);
                $password = $_POST['password'];

                if(!empty($username) && !empty($password)){
                
                    $result = mysqli_query($mysqli, "SELECT User_ID, First_Name, Last_Name, Password FROM USERS WHERE User_Name='$username'");
                    
                    if(mysqli_num_rows($result) == 1) {
            
                        $row = mysqli_fetch_assoc($result);
            
                        if(password_verify($password, $row['Password'])) {
            
                            $message = "Hoşgeldiniz ".$row['First_Name']." ".$row['Last_Name']. ", yönlendiriliyorsunuz...";
                            echo uyariBas("success", $message);

                            header("refresh:2; url=index.php");

                            $_SESSION['user_id'] = $row['User_ID'];
            
                        } else {
            
                            echo uyariBas("error", "Şifrenizi yanlış girdiniz lütfen tekrar deneyiniz.");

                        }
            
                    } else {
            
                        echo uyariBas("error", "ÜYE BULUNAMADI");
            
                    }

                }else{

                    echo uyariBas("error", "Hiçbir alanı boş bırakmayınız!");

                }
        
            }

            ?>
            <form action="" method="POST">
            <input type="hidden" name="login">
            <tr>
                <td><label for="username">Kullanıcı Adı</label></td>
                <td><input type="text" id="username" name="username" placeholder="Kullanıcı Adı"></td>
            </tr>
            <tr>
                <td><label for="password">Şifre</label></td>
                <td><input type="password" id="password" name="password" placeholder="Şifre"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><button class="bg-gold" type="submit">Giriş Yap</button></td>
            </tr>
            </form>
            <tr>
                <td colspan="2" align="right"><p>Hesabınız yok mu? Bir hesap oluşturun</p><a href="?page=register"><button>Hesap Oluştur</button></a></td>
            </tr>
        </table>

    <?php }else if($_GET['page'] == "register"){?>

        <table>
            <tr>
                <td colspan="2" align="center">
                    <h2>Üye Kayıt</h2>
                </td>
            </tr>
            <?php 
            
            if(isset($_POST['register'])){

                $name = htmlspecialchars($_POST['name']);
                $surname = htmlspecialchars($_POST['surname']);
                $email = htmlspecialchars($_POST['email']);
                $username = htmlspecialchars($_POST['username']);
                $gsm = htmlspecialchars($_POST['gsm']);
                $birthdate = $_POST['birthdate'];
                $password = $_POST['password'];

                if(!empty($name) && !empty($surname) && !empty($email) && !empty($username) && !empty($gsm) && !empty($birthdate) && !empty($password)){
                
                    $result = mysqli_query($mysqli, "SELECT COUNT(*) as say FROM USERS WHERE E_Mail='$email' OR User_Name='$username' OR GSM_No='$gsm'");
                    $row = mysqli_fetch_assoc($result);

                    if($row['say'] == 0) {
                    
                        $hashPass = password_hash($password, PASSWORD_BCRYPT);

                        $query = "INSERT INTO USERS (User_Name, E_Mail, First_Name, Last_Name, GSM_No, Birth_Date, Password) VALUES ('$username', '$email', '$name', '$surname', '$gsm', '$birthdate', '$hashPass')";
                        
                        if(mysqli_query($mysqli, $query)){
                            echo uyariBas("success", "Kayıt işlemi başarılı oldu.");
                        }else{
                            echo uyariBas("error", "Hesap oluşturulurken bir hata oluştu.");
                        }
                                
                    } else {
            
                        echo uyariBas("error", "Girdiğiniz kullanıcı adı, e-posta yada telefon numarası farklı bir hesapta kullanılıyor.");
            
                    }

                }else{

                    echo uyariBas("error", "Hiçbir alanı boş bırakmayınız!");

                }
        
            }

            ?>
            <form action="" method="POST">
            <input type="hidden" name="register">
            <tr>
                <td><label for="username">Kullanıcı Adı</label></td>
                <td><input type="text" id="username" name="username" placeholder="Kullanıcı Adı"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" id="email" name="email" placeholder="Email"></td>
            </tr>
            <tr>
                <td><label for="name">Ad</label></td>
                <td><input type="text" id="name" name="name" placeholder="Ad"></td>
            </tr>
            <tr>
                <td><label for="surname">Soyad</label></td>
                <td><input type="text" id="surname" name="surname" placeholder="Soyad"></td>
            </tr>
            <tr>
                <td><label for="gsm">Cep Tel (başına 0 yazmayınız)</label></td>
                <td><input type="number" min="5000000000" max="9999999999" id="gsm" name="gsm" placeholder="5XXXXXXXXX"></td>
            </tr>
            <tr>
                <td><label for="birthdate">Doğum Tarihi</label></td>
                <td><input type="date" id="birthdate" name="birthdate"></td>
            </tr>
            <tr>
                <td><label for="password">Şifre</label></td>
                <td><input type="password" id="password" name="password" placeholder="Şifre"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><input type="checkbox" id="sozlesme" name="sozlesme"> <label for="sozlesme">Kayıt <a href="sozlesme.html" target="_blank">sözleşmesini</a> kabul ediyorum</label></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><button type="submit">Hesabı Oluştur</button></td>
            </tr>
            </form>
            <tr>
                <td colspan="2" align="right"><p>Zaten bir hesabınız var mı?</p><a href="?page=login"><button class="bg-gold">Giriş Yap</button></a></td>
            </tr>
        </table>
        
    <?php }else{?>
    <h2>GEÇERSİZ SAYFA</h2>
    <?php }?>

<?php }?>

</body>
</html>

<?php mysqli_close($mysqli);?>