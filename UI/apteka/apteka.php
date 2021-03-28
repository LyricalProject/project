
<?php
/*
$conn = oci_connect('hr', 'hr','localhost/orcl');

$curs = oci_new_cursor($conn);
$stmt_id = oci_parse($conn, $sql);
$sql = "begin cross;end;";
oci_bind_by_name($stid,  -1, OCI_B_CURSOR);
oci_execute($stmt_id);





$row = oci_fetch_assoc($stmt_id);
print_r($row);




*/
?>


<?php

error_reporting(E_ERROR | E_PARSE);

$conn = oci_connect('hr', 'hr','localhost/orcl','utf8');
if (!$conn) {
    $e = oci_error();
}


    if($_POST['name']!=""){

    //You must asign before.
        $p1 =$_POST['name'];

        
        $stid = oci_parse($conn, "SELECT * FROM APTEKI2 WHERE lower(APTEKI) like  lower('%$p1%' )");

        //Send parameters variable  value  lenght

        //Bind Cursor     put -1

        // Execute Statement
        oci_execute($stid);

        ;
         
          $n=0;

          $bes= oci_num_rows($stid);
        
          while ($row = oci_fetch_array ($stid, OCI_BOTH)) {
        }

        


     

          $xx= oci_num_rows($stid);


    }

    else{
        $p1 =$_POST['name'];


        //You must asign before.
            $p1 =$_POST['name'];
    
            
        $stid = oci_parse($conn, "SELECT * FROM APTEKI2 ");
        //Send parameters variable  value  lenght
   

        // Execute Statement
        oci_execute($stid);
      
        $z;

        $n=0;

        $bes= oci_num_rows($stid);
      
        while ($row = oci_fetch_array ($stid, OCI_BOTH)) {
      }

      


   

        $xx= oci_num_rows($stid);
    }
/*
    for ($x = 0; $x <= 106; $x+=1) {
         print_r(($cursor[$x]['FIRST_NAME'])) ;
      }
      
*/
    
            
  
          
?>

    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="path_to/simplePagination.css"/>

    <link rel="stylesheet" href="main9.css">

    <script type="text/javascript" src="a.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style>
/* Popup container - can be anything you want */

  </style>
  
<body>
    <form  action=" " method="POST">
    <div class="all" id="app">

    
        <div class="header1" >
        <a class="name_he" href="../test.php.html">
               
               <img src="../icon/aaa.png"     style="width:70%"  class=""  alt="">
                
                
    </a>    
            <div class="name_he_title">
                
    
                
                <a class="nht" style="text-decoration: none; color:white ;background-color: #DC143C;; "> 
                     Аптеки
                </a>
                <a  href="lekarstva.php" style="color:black;color:black;color:black; text-decoration:none ">
                   Лекарства
                </a>
                <a>
                     Мед. центры
                    
                </a>
                <a href="darr.php" style="color:black;color:black;color:black; text-decoration:none ">
                Лекарства Даром
                        
                        
                </a>
                <a>
                  covid-19                 
                </a>
                
                
            </div>
    
            
    
            <div class="he_log">
              <a href="../login/logg.php" class="paap">
              <img src="../icon/user.svg">
              </a>
              

               
            </div>
    
        </div>
        <div class="ass">
            <div class="z2">
                <div class="soz">
                    <h3 class="cv">
                        Аптеки 
                    </h3>
                </div>
                <div class="kek">
                    <div class="ha2">
                        <input type="text" name="name" class="zaa"> 
                        <div class="ha3">
                            <input type="submit"  class= "vb"   value="">
                           
                            


                        </div>
                    </div>
                    

                </div>

                <div class="nay">
         
      
                    <p class="bb">
                        Найдено  
                        <?php
        echo $xx;
?>        

аптек



                    </p>
                    
                </div>

            <!-- </?php
                $d=print_r (count($cursor));
                for ($x = 0; $x <(count ($cursor)) ; $x+=1) {
                    
      ?>-->
                <div class="lam"  v-for="p in displayedPosts">
                    <div class="so"   >
                  
                        <div class="k1">
                        
                            <a class="qqqq" href="">
                                {{p.first}}
                               <!-- </?php print_r ($cursor[$x]['EMPLOYEE_ID']) ?>-->
                            </a>

                        
                       </div>
                       
                        <div class="k2">
                            <p class="l">

                                {{p.last}}
                        <!-- </?php print_r ($cursor[$x]['FIRST_NAME'])  ?>
                         </?php print_r (count($cursor))  ?>-->
                            </p>
                        </div>
                        <div class="k3">
                            <p class="l2"> 
                           <!-- </?php print_r ($cursor[$x]['LAST_NAME']) ?>-->
                            </p>
                        </div>
                        <div class="k4">
                            <div class="u1">

                                <input type="button"  class="z1">



                                
                            </div>
                             <div class="u2">

                                   <p class="m1"> {{p.suffix}}</p>




                            </div>

                    </div> 
                               <!-- </?php }?> -->
 
                              
                </div>
                
                
      
                </div>
  
                

<nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <button type="button" class="page-link" v-if="page != 1" @click="page--"> Назад </button>
        </li>
        <li class="page-item">
          <button type="button" class="page-link" v-for="pageNumber in pages.slice(page-1, page+5)" @click="page = pageNumber"> {{pageNumber}} </button>
        </li>
        <li class="page-item">
          <button type="button" @click="page++" v-if="page < pages.length" class="page-link"> Вперед </button>
        </li>
      </ul>
    </nav>  



          </div>
          

            
            </div>
            
           

</div>




</form>






<script>
// When the user clicks on div, open the popup
$(document).ready(function(){
  $(".z1").click(function(){
    $("div.lollll").hide();
  });
  $(".m1").click(function(){
    $("div.lollll").show();
  });
});
</script>





<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js"></script>
    <script  >
   new Vue({
  el: "#app",
  data () {
    return {
      posts : [],
      page: 1,
      perPage: 6,
      pages: [],    
    }
  },
  methods:{
    getPosts () { 
      let data = [];
     
     
        <?php   
          if($_POST['name']!=""){


              $stid = oci_parse($conn, "SELECT * FROM APTEKI2 WHERE lower(APTEKI) like  lower('%$p1%' )");

              //Send parameters variable  value  lenght
      
              //Bind Cursor     put -1
      
              // Execute Statement
              oci_execute($stid);








          }
          else{
            $p1 =$_POST['name'];
    
    
            $stid = oci_parse($conn, "SELECT * FROM APTEKI2 ");
    
            //Send parameters variable  value  lenght
    
            //Bind Cursor     put -1
    
            // Execute Statement
            oci_execute($stid);
  
            ;
            $z;
    
        }

            ?>
            
            
            
            
            
            <?php

              
              for ($t=0;$t<$xx;$t++){ 

                $rowz= oci_fetch_array($stid,OCI_BOTH);
                ?>




              this.posts.push({first: '<?php   print_r( $rowz['APTEKI'])  ?>',
                    last:'<?php    print_r( $rowz['APTEKA_ADDRESS']); ?>', 
                suffix:'<?php    echo "позвонить" ?>' });

        <?php
     } 
     ?>
     
          
    },  
    setPages () {
      let numberOfPages = Math.ceil(this.posts.length / this.perPage);
      for (let index = 1; index <= numberOfPages; index++) {
        this.pages.push(index);
      }
    },
    paginate (posts) {
      let page = this.page;
      let perPage = this.perPage;
      let from = (page * perPage) - perPage;
      let to = (page * perPage);
      return  posts.slice(from, to);
    }
  },
  computed: {
    displayedPosts () {
      return this.paginate(this.posts);
    }
  },
  watch: {
    posts () {
      this.setPages();
    }
  },
  created(){
    this.getPosts();
  },
  filters: {
    trimWords(value){
      return value.split(" ").splice(0,20).join(" ") + '...';
    }
  }
})
    </script>

                

</body>
</head>


