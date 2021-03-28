<?php


$conn = oci_connect('hr', 'hr','localhost/orcl','utf8');

error_reporting(E_ERROR | E_PARSE);


$sql = "begin 
regis222(:zbai1 ,:zbai2,:zbai3,:zbai4);
end;";
$stmt_id = oci_parse($conn, $sql);



oci_bind_by_name($stmt_id, ':zbai1', $name,250);
oci_bind_by_name($stmt_id, ':zbai2', $surname,252);

oci_bind_by_name($stmt_id, ':zbai3', $city,252);

oci_bind_by_name($stmt_id, ':zbai4', $email,252);




$name=$_POST['name'];
$surname=$_POST['surname'];
$city=$_POST['mobile'];
$email=$_POST['pass'];


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
    <link rel="stylesheet" href="main23.css">
</head>
<body>
    <form  action=" " method="POST">
    <div class="all">
        <div class="suret">

        </div>

        <div class="rr">
            <div class="icon"><img alt=""></div>

            <div class="zareg" style="    font-family: 'Open Sans', sans-serif;">Зарегистрируйте вашу аптеку</div>

            <div class="page">
                <div class="sur">Названия  </div>
                
                <div class="sur1"> 
                <input class="in"  type="text" name="name" id="" placeholder="Europharma">
                </div>


                <div class="sur2">Адрес  </div>
                
                <div class="sur1"> 
                <input class="in"  type="text" name="surname" id="" placeholder="ул. Шагабутдинова, д. 124">
                </div>



                

               



                <div class="sur2">Мобильный телефон  </div>
                
                <div class="sur1"> 
                <input class="in"  type="text" name="mobile" id="" placeholder="87471718555">
                </div>


                <div class="sur2">Рабочий телефон  </div>
                
                <div class="sur1"> 
                <input class="in"  type="text" name="pass" id="" placeholder="3030">
                </div>
                

                
                <div class="hah"> <input value="Отправить"     type="submit">   </div>




            </div>
            <div class="nazaf"><a href="../test.php.html" class="qa"> Вернуться на главную</a>      </div>


        </div>
    </div>
</form>
</body>
</html>