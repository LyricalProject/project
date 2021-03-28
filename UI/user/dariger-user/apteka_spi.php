

<?php
session_start();

$conn = oci_connect('hr', 'hr','localhost/orcl','utf8');
if (!$conn) {
    $e = oci_error();
}

error_reporting(E_ERROR | E_PARSE);




$stid = oci_parse($conn, 'begin :cursor := F_Function_to_doctor(:p1); end;');
$p_cursor = oci_new_cursor($conn);

//Send parameters variable  value  lenght
oci_bind_by_name($stid, ':p1', $p1,70);
$p1=$_SESSION['row2']['EMAILL'];

//Bind Cursor     put -1
oci_bind_by_name($stid, ':cursor', $p_cursor, -1, OCI_B_CURSOR);

// Execute Statement
oci_execute($stid);
oci_execute($p_cursor, OCI_DEFAULT);

oci_fetch_all($p_cursor, $cursor, null, null, OCI_FETCHSTATEMENT_BY_ROW);


/*
for ($x = 0; $x <= 106; $x+=1) {
 print_r(($cursor[$x]['FIRST_NAME'])) ;
}

*/

    

  
?>




<?php
$p2=$_SESSION['row2']['EMAILL'];

if(isset($_POST['subToDel'])){
    $key=$_POST['keyToDel'];

    $sql2="SELECT * FROM ITEKA_DOCTORS_USER WHERE ID2 = '$key'";
    $stid3 = oci_parse($conn,$sql2);
    oci_execute($stid3);


    if(oci_num_rows($stid3)==0){
        $del = "begin del_doctor.oshiru99(:zbai1);
        end;";
        $stid2 = oci_parse($conn,$del);




        oci_bind_by_name($stid2, ':zbai1', $key,62);







        oci_execute($stid2);



    }


}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="main9.css">

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
        		<a class="lol" href="../hah.php">
        			<img class="qq" src="../../icon/ss3.svg">


        		</a>
        		<a class="lol" href="">
        			<img class="qq" src="../../icon/ss1.svg">


        		</a>
        		<a class="lol" href="../../kayrimdilik/apteka_spi.php">
        			<img   class="qq" src="../../icon/ss2.svg">


        		</a>
        		<a class="lol" href="../../apteka-user/apteka_spi.php">
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
					<a href="../analyze-user/apteka_spi.php"   style="text-decoration:none"     class="hah">Анализы</a>
					<a   style="color:black"    class="hah">Приемы у врачей</a>
				</div>
				</div>


                <div class="su">
                <div class="su2">
                    <div class="prol">
                        <div class="zz2">
                            <div class="mn">
                                
                            </div>
                        </div>
                        <div class="zz">
                            <input type="button"  onclick="location.href='apteka-dob.php'" value="добавить" class="qqs">
                        </div>
    
                    </div>
                   
                    

               
                    <div class="q3">
                        <table>
                            <tr>
                              <th>Имя доктора

</th>
                              <th>Дата приема	</th>
                              <th>Адрес</th>

                              <th>Время приема

</th>
<th>Тип

</th>
                              <th>---</th>
                              <th>удалить</th>


                            </tr>
                            <?php
                           
                for ($x = 0; $x <(count ($cursor)) ; $x+=1) {
                    
      ?>
                            <tr>
                                <td><?php  echo ( $cursor[$x]['NAME'] ) ?></td>
                              <td><?php  echo( $cursor[$x]['START_DATE'] ) ?></td>
                              <td><?php  echo ($cursor[$x]['ADRESS'] ) ?></td>
                              <td><?php  echo ($cursor[$x]['CLOCK1'] ) ?></td>
                              <td><?php  echo ($cursor[$x]['TYPE1'] ) ?></td>

                             <td> 
                             <input type="checkbox" name="keyToDel" value="<?php print_r($cursor[$x]['ID2']); ?>"  >
                            </td>
                             <td>   
                                <input type="submit" name="subToDel">
                            </td>

                            </tr>
                <?php }?>
                            
                          </table>
                    </div>
                         
                </div>

              

            </div>

           
       </div>
       <form>

        

    </div>
</body>
</html>