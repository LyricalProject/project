<?php
session_start();

$conn = oci_connect('hr', 'hr','localhost/orcl','utf8');
error_reporting(E_ERROR | E_PARSE);
$sql = "begin 
dob_user.salu_user(:zbai1 ,:zbai2,:zbai3,:zbai4,:zbai5,:zbai6,:zbai7,:zbai8);
end;";
$stmt_id = oci_parse($conn, $sql);



oci_bind_by_name($stmt_id, ':zbai1', $user,32);
oci_bind_by_name($stmt_id, ':zbai2', $email,32);

oci_bind_by_name($stmt_id, ':zbai3', $pass,32);

oci_bind_by_name($stmt_id, ':zbai4', $date,32);

oci_bind_by_name($stmt_id, ':zbai5', $pol,32);
oci_bind_by_name($stmt_id, ':zbai6', $height,32);

oci_bind_by_name($stmt_id, ':zbai7', $weight,32);

oci_bind_by_name($stmt_id, ':zbai8', $city,32);



$date=$_POST['date'];
$pol=$_POST['pol'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$city=$_POST['city'];


$user=$_SESSION['row2']['NAME1'];
$email=$_SESSION['row2']['EMAILL'];

$pass=$_SESSION['row2']['PASSWORD1'];



oci_execute($stmt_id);







?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
		<link rel="stylesheet" href="main77.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="all">
        <div class="uni" >
        	<div class="lines">
        		<a class="lol" href="">
        			<img src="../icon/sss.svg">

        		</a>
        		
        	</div>



        	<div class="lines2">
			<a  href="hah.php" class="lol">
        			<img class="qq" src="../icon/ss3.svg">


        		</a>
        		<a class="lol" href="">
        			<img class="qq" src="../icon/ss1.svg">


        		</a>
        		<a class="lol" href="../kayrimdilik/apteka_spi.php">
        			<img   class="qq" src="../icon/ss2.svg">


        		</a>
        		<a class="lol" href="../apteka-user/apteka_spi.php">
        			<img class="qq" src="../icon/ss4.svg" style="
        			">
        			        			


        		</a>
        	</div>
        </div>



<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <div class="uni2" >

        	<div class="head" style="position:fixed">
        		<a class="logoo" style="height:100%" href="../test.php.html">
					<img src="../icon/aaa.png"style="height:170%" alt="">
</a>

        		<div class="logoo2">
        			<b>Главная</b>
        		</div>


        		<a   href="../test.php.html"  class="user1">
        			<img  class="q2"src="../icon/user.svg">
</a>

        	</div>
        	<hr class="jjj">

		<div class="z" style="height: 100%;width: 100%;">
		<form  action=" " method="POST" enctype="multipart/form-data">


			<div class="all2" style="width:100%;height:100vh">
				<div class="prof">
					<div class="data">
						<div class="suret">
							<div class="logo1">
								<img  class="logo" src="../icon/user.svg">
							</div>
							
							<span class="butt">
								  </span> 
						</div>

						<div class="dann">
							<p class="perv">
							<?PHP  echo $_SESSION['row2']['NAME1']; ?>
							</p>
							<p class="vtor">
							<?PHP echo $_SESSION['row2']['EMAILL']; ?>
							</p>


						</div>




						
					</div>

					
				</div>


				<div class="types">
					<a href="" class="hah" style="color:black">Основные параметры</a>
					<a href="diagnoz-user/apteka_spi.php" class="hah">Мои диагнозы</a>
					<a href="analyze-user/apteka_spi.php" class="hah">Анализы</a>
					<a href="dariger-user/apteka_spi.php" class="hah">Приемы у врачей</a>
				</div>




				<div class="osn">
					<div class="osn2">
						<div class="fir">
							<div class="ggg"> 
							<div class="dd2">
								<p>
								Дата рождения  
								</p>
							</div>  

							<div class="call3">
								<input type="text" name="date" class="q2z">

							</div>                      
							</div>
							<div class="ggg"> 
							<div class="dd2">
								<p>
								Пол


								</p>
							</div>  

							<div class="call3">
									<input type="text" name="pol" class="q2z">
									
							</div>                      
							</div>

							<div class="ggg"> 
							<div class="dd2">
								<p>
								Рост (см)

								</p>
							</div>  

							<div class="call3">
									<input type="text" name="height" class="q2z">
									
							</div>                      
							</div>
						

						</div>

						<div class="seccond">
							

							<div class="ggg"> 
							<div class="dd2">
								<p>
								Вес (кг)
								</p>
							</div>  

							<div class="call4">
									<input type="text" name="weight" class="q2z">
									
							</div>                      
							</div>
						<div class="ggg"> 
							<div class="dd2">
								<p>
								Город проживания
  
								</p>
							</div>  

							<div class="call4">
									<input type="text" name="city" class="q2z">
									
							</div>                      
						</div>
						<div class="ggg11"> 

						</div>
							
							
						</div>
						
					</div>

					
				</div>



				<div class="son">
					<input class="button" type="submit" value="Добавить">
					</input>
					
				</div>
			</div> 

			</form>

		</div>
            <!--
        	<div class="b1">
        		<div class="c1">
        			<p class="c11">
        				<b>Моя семья
        				</b>
        			</p>
        			

        		</div>
        		
        		<div class="c2">
        			<input type="button" name=""class="c12" placeholder="добавить" value="добавить">
        			
        		</div>
        	</div>

        	<div class="b2">
        		<div class="lol">
        			<p class="z">
        				<b>Домашняя аптечка</b>
        			</p>
        			
        		</div>

        		<div class="apt">
					<div class="cz"><p>L-Тироксин таблетки 50 мкг  --  № 50</p></div>

					<div class="cz"><p>L-Тироксин таблетки 50 мкг  --  № 50</p></div>  

        			
        		</div>
        			
				<div class="butt">
        			<input type="button" name=""class="nnn" placeholder="добавить" value="Посмотреть все">
        			
        		</div>


        	</div>

        	
        </div>
    -->
        </div>

        

    </div>
</body>
</html>