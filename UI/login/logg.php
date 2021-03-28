
<?php




/*
session_start();
$conn = oci_connect('hr', 'hr','localhost/orcl');



$sql = "begin 
sayHello2(:zbai1 ,:zbai2);
end;";

$stmt_id = oci_parse($conn, $sql);

oci_bind_by_name($stmt_id, ':zbai1', $name,32);
oci_bind_by_name($stmt_id, ':zbai2', $pass,32);



$name=$_POST['name'];

$pass=$_POST['pass'];

oci_execute($stmt_id,OCI_DEFAULT);







echo oci_num_rows($stmt_id);

$row=oci_fetch_assoc($stmt_id);
print_r($row);




*/

session_start();

error_reporting(E_ERROR | E_PARSE);

$conn = oci_connect('hr', 'hr','localhost/orcl');

$name1=$_POST['name'];


$pass1=$_POST['pass'];

$sql="SELECT * FROM ITEKA_SIGNUP where EMAILL =  '$name1'  and  PASSWORD1     = '$pass1'  ";


$stmt_id = oci_parse($conn, $sql);




oci_execute($stmt_id);



$row=oci_fetch_assoc($stmt_id);
print_r($row);
if(oci_num_rows($stmt_id)>0){
    echo "------------------------------------------------------";  
   $row2=oci_fetch_assoc($stmt_id);

    $_SESSION['row2']=[
        "NAME1"=>$row['NAME1'],
        "SURNAME"=>$row['SURNAME'],
        "CITY"=>$row['CITY'],

        "EMAILL"=>$row['EMAILL'],

        "MOBILE"=>$row['MOBILE'],
        "PASSWORD1"=>$row['PASSWORD1'],
        "STATUS"=>$row['STATUS']
    ];
    header('Location: ../user/hah.php');



}

if($_POST['name']=='Admin' && $_POST['pass']=='Admin'){
    header('Location: ../admin/admin/index.php');

}












?>


























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main22.css">
    <style>
        .in.pw {
    -webkit-text-security: disc;
}
        </style>
</head>

<body>   
    <form  action=" " method="POST" enctype="multipart/form-data">

    <div class="all">
        <div class="suret">

        </div>

        <div class="rr">
            <div class="icon"><img src="../icon/aaa.png" class="pap"  alt=""></div>

            <div class="zareg">Войти</div>

            <div class="page">
                <div class="sur">Авторизация * </div>
                
                <div class="sur1"> 
                <input class="in"  type="text" name="name"  placeholder="Ирина">
                </div>


            


                <div class="sur2">Пароль *  </div>
                
                <div class="sur1"> 
                <input class="in"  type="password" name="pass"     placeholder="************">
                </div>
                

                
                <div class="hah"> <input value="Войти"  type="submit">   </div>

                <div class="sur5">У вас нет аккаунта? <a href="../regis/reg.php" style="color:#DC143C">  Зарегистрируйтесь</a>   </div>



            </div>
            <div class="nazaf"><a href="../test.php.html" class="qa"> Вернуться на главную</a>      </div>


        </div>
    </div>
</form>
</body>
</html>