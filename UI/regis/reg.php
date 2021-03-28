<?php


$conn = oci_connect('hr', 'hr','localhost/orcl');

error_reporting(E_ERROR | E_PARSE);


$sql = "begin 
regis2(:zbai1 ,:zbai2,:zbai3,:zbai4,:zbai5,:zbai6);
end;";
$stmt_id = oci_parse($conn, $sql);



oci_bind_by_name($stmt_id, ':zbai1', $name,82);
oci_bind_by_name($stmt_id, ':zbai2', $surname,72);

oci_bind_by_name($stmt_id, ':zbai3', $city,82);

oci_bind_by_name($stmt_id, ':zbai4', $email,82);

oci_bind_by_name($stmt_id, ':zbai5', $mobile,82);

oci_bind_by_name($stmt_id, ':zbai6', $pass,82);



$name=$_POST['name'];
$surname=$_POST['surname'];
$city=$_POST['city'];
$email=$_POST['email'];

$mobile=$_POST['mobile'];
$pass=$_POST['pass'];

oci_execute($stmt_id);





?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="main2.css">
</head>
<body>
    <form  action=" " method="POST">
    <div class="all">
        <div class="suret">

        </div>

        <div class="rr">
            <div class="icon"><img alt=""></div>

            <div class="zareg" style="    font-family: 'Open Sans', sans-serif;">Зарегистрироваться</div>

            <div class="page">
                <div class="sur">Имя * </div>
                
                <div class="sur1"> 
                <input class="in"  type="text" name="name" id="" placeholder="Ирина">
                </div>


                <div class="sur2">Фамилия  </div>
                
                <div class="sur1"> 
                <input class="in"  type="text" name="surname" id="" placeholder="Рамазанова">
                </div>



                <div class="sur2">Ваш город * </div>
                
                <div class="sur1"> 
                <input class="in"  type="text" name="city" id="" placeholder="-----">
                </div>

                
                <div class="sur2">e-mail * </div>
                
                <div class="sur1"> 
                <input class="in"  type="text" name="email" id="" placeholder="irina@gmail.com">
                </div>



                <div class="sur2">Мобильный телефон  </div>
                
                <div class="sur1"> 
                <input class="in"  type="text" name="mobile" id="" placeholder="87471718555">
                </div>


                <div class="sur2">Пароль *  </div>
                
                <div class="sur1"> 
                <input class="in"  type="text" name="pass" id="" placeholder="****************">
                </div>
                

                
                <div class="hah"> <input value="Зарегистрироваться"  type="submit">   </div>

                <div class="sur5">У вас есть аккаунт? <a href="../login/logg.php" style="color:#DC133C"> Войдите</a>   </div>



            </div>
            <div class="nazaf"><a href="../test.php.html" class="qa"> Вернуться на главную</a>      </div>


        </div>
    </div>
</form>
</body>
</html>