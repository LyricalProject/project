

<?php
session_start();
error_reporting(E_ERROR | E_PARSE);



$conn = oci_connect('hr', 'hr','localhost/orcl','UTF8');




$sql = "begin 
dob_user_analyses.salu_user_diagnos(:zbai1 ,:zbai2,:zbai3,:zbai4,:zbai5);
end;";
$stmt_id = oci_parse($conn, $sql);





oci_bind_by_name($stmt_id, ':zbai1', $email,64);

oci_bind_by_name($stmt_id, ':zbai2', $pass,32);

oci_bind_by_name($stmt_id, ':zbai3', $name_an,64);

oci_bind_by_name($stmt_id, ':zbai4', $start,32);
oci_bind_by_name($stmt_id, ':zbai5', $end,32);




$email=$_SESSION['row2']['EMAILL'];

$pass=$_SESSION['row2']['PASSWORD1'];





$name_an=$_POST['name_an'];
$start=$_POST['start'];
$end=$_POST['end'];






oci_execute($stmt_id);

if(oci_num_rows($stmt_id)>0){
     header('Location: apteka_spi.php');       

}



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
        			<img src="../../icon/sss.svg">

        		</a>
        		
        	</div>



        	<div class="lines2">
        		<a class="lol">
        			<img class="qq" src="../../icon/ss3.svg">


        		</a>
        		<a class="lol" href="">
        			<img class="qq" src="../../icon/ss1.svg">


        		</a>
        		<a class="lol" href="">
        			<img   class="qq" src="../../icon/ss2.svg">


        		</a>
        		<a class="lol" href="">
        			<img class="qq" src="../../icon/ss4.svg" style="
        			">
        			        			


        		</a>
        		
        	</div>
        </div>



<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        <div class="uni2" >

        	<div class="head" style="position:fixed">
        	<a class="logoo" style="height:100%" href="../../test.php.html">
					<img src="../../icon/aaa.png"style="height:150%" alt="">
</a>


        		<div class="logoo2">
        			<b>Главная</b>
        		</div>


        		<div class="user1">
        			<img  class="q2"src="../../icon/user.svg">
        		</div>

        	</div>
        	<hr class="jjj">

		<div class="z" style="height: 100%;width: 100%;">
		<form  action=" " method="POST" enctype="multipart/form-data">


			<div class="all2" style="width:100%;height:100vh">
				<div class="prof">
					<div class="data">
						<div class="suret">
							<div class="logo1">
								<img  class="logo" src="../../icon/user.svg">
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
                <div class="types">
					<a href="../hah.php" class="hah" >Основные параметры</a>
					<a href="../diagnoz-user/apteka_spi.php"  class="hah" >Мои диагнозы</a>
					<a  style="color:black"  class="hah">Анализы</a>
					<a href="../dariger-user/apteka_spi.php" class="hah">Приемы у врачей</a>
				</div>
				</div>



                <div class="osn">
            <div class="osn2">
                <div class="fir">
                <div class="ggg"> 
                       <div class="dd2">
                           <p>
                           Название *
  
                           </p>
                       </div>  

                       <div class="call3">
                        <input type="text" name="name_an" class="q2z">

                       </div>                      
                    </div>
                    <div class="ggg"> 
                       <div class="dd2">
                           <p>
                           Дата сдачи  
                           </p>
                       </div>  

                       <div class="call3">
                        <input type="text" name="start" class="q2z">

                       </div>                      
                    </div>
                    
                    <div class="ggg"> 
                       <div class="dd2">
                           <p>
                           Дата результата

                           </p>
                       </div>  

                       <div class="call3">
                            <input type="text" name="end" class="q2z">
                               
                       </div>                      
                    </div>
                   

                </div>
<!--
                <div class="seccond">
                     

                    <div class="ggg"> 
                       <div class="dd2">
                           <p>
                           Принимаемые лекарства

                           </p>
                       </div>  

                       <div class="call4">
                            <input type="text" name="name_dary" class="q2z">
                               
                       </div>                      
                    </div>
                    <div class="ggg"> 
                       <div class="dd2">
                           <p>
                           Диеты
                           </p>
                       </div>  

                       <div class="call4">
                            <input type="text" name="diets" class="q2z">
                               
                       </div>                      
                    </div>
                    <div class="ggg"> 
                       <div class="dd2">
                           <p>
                             Режим лечения
                           </p>
                       </div>  

                       <div class="call4">
                            <input type="text" name="rejim" class="q2z">
                               
                       </div>                      
                    </div>
                   <div class="ggg"> 
                       <div class="dd2">
                           <p>
                               Рекомендации врача   
                           </p>
                       </div>  

                      <div class="call4">
                            <input type="text" name="notes" class="q2z">
                               
                       </div>                      
                    </div>
                  
                    
                    
                </div>
-->
            </div>

            
        </div>

        <div class="son">
            <input class="button" type="submit" value="добавить">
              </input>
        </div>
    </div>
        </form>
	</div></div></div>
           


				
        			
				
        
</body>
</html>