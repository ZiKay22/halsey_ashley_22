<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halsey</title>
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="favicon-32x32.png">
  </head>
  <body class="bg-dark">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand active"  href="index.php"><img src="logo.png" style="width: 150px;">  </a> 
   
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Songs
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                          <li><a class="dropdown-item  text-primary" href="s_d.php">Songs Dowload</a></li>
                          <li><a class="dropdown-item  text-primary" href="s_txt.php">Songs Text</a></li>
                          <li><a class="dropdown-item  text-primary" href="s_txt_tr.php">Songs Translate</a></li>
                          <li><a class="dropdown-item" href="albums.php">Albums</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  text-primary" href="chat.php">Chat</a>
                      </li>
      
                      <li class="nav-item">
                        <a class="nav-link  text-primary" href="sm.php">Social Media/Fan Pages</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  text-primary" href="https://halseymusicstore.eu/" target="_blank">Halsey's Official Site</a>
                      </li>
                                     
                    </ul>
                
                
                    <form class="d-flex" role="search">
                    <a class=" text-primary fs-4" aria-current="page" href="search.php"><i class="bi bi-search"></i></a>
                      
                    </form>
                    

                    
                    
                  </div>
                  
                  
                </div>
                
                
                
              </nav>
              
              
              
              

        </div>
</div>
        
        <div class="container-fluid">
		<div class="row ">
<form method="post">
<div class="input-group mb-3">
  <input  type="text" name="search" class="form-control btn btn-outline-light" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
  <input class="btn btn-outline-primary mx-1" type="submit" name="submit" id="button-addon2">
</div>

<!-- <div class="d-grid gap-3 my-3">
<input placeholder="Search" class=" btn btn-outline-light" >
</div> -->



<!-- <div class="d-grid gap-2 my-3">
  <button  class="  btn btn-outline-light" >Search</button>
  </div> -->
<!-- </div>
</div> -->


	
</form>
<?php 
if (!isset($_POST["submit"])){

	echo "<div id='carouselExampleControls' class='carousel slide' data-bs-ride='carousel'>
  <div class='carousel-inner'>
    <div class='carousel-item active'>
      <img src='back1.jpg' class='d-block w-100 ' >
    </div>
    <div class='carousel-item'>
      <img src='5573309.jpg' class='d-block w-100' >
    </div>
    <div class='carousel-item'>
      <img src='bacl - Copy.jpg' class='d-block w-100' >
    </div>
  </div>
  <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='prev'>
    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Previous</span>
  </button>
  <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleControls' data-bs-slide='next'>
    <span class='carousel-control-next-icon' aria-hidden='true'></span>
    <span class='visually-hidden'>Next</span>
  </button>
</div>";
}?>
<!-- </div> -->





</div>
<?php

$con = new PDO("mysql:host=localhost;dbname=halsey",'root','root');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search` WHERE name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
     <div class="row text-center text-light ">
 <div class="col-12 col-md-6"> 
   <h3 class=""><?php echo $row->name;?></h3>
    	<p class="fs-5"><?php echo $row->description;?></p>
      <h4><a href="<?php echo $row->link;?>">Learn More</a></h4>
  </div>


 <div class="col-12 col-md-6">
  
 <img src="<?php echo $row->image_url;?>" class="img-fluid">

</div>
      
       
		
			
				
       
        
	

	
        </div>

        
<?php 


	}
		
		
		else{
    
			echo "<h1 class='text-light text-center'>Name Does not exist </h1> ";
		}


}

?>


  
<!-- <div class="card bg-dark row  my-5">
<div class="card-body col-12 ">
<hr class="text-primary border-3 opacity-75  ">      

        <div class="row">
          <div class=" col-4">
            <button class="btn btn-outline-primary " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">About This Site</button>

            <div class="offcanvas offcanvas-start bg-dark text-light" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">About This Site</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <p>This page was made from <a href="https://www.instagram.com/zi_kay_22/" > Zi Kay </a> This is the only one and complete page dedicated to Halsey which included everything about Halsey the copyright owner is Halsey</p>
              </div>
            </div>
          </div>
          <div class=" col-8  text-end">
        <a href="https://www.instagram.com/iamhalsey/" class="text-decoration-none">  <i class="bi bi-instagram text-primary mx-2"></i></a>
        <a href="https://twitter.com/halsey?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="text-decoration-none"><i class="bi bi-twitter text-primary mx-2"></i></a>
        <a href="https://www.facebook.com/halsey/"class="text-decoration-none">  <i class="bi bi-facebook text-primary mx-2"></i></a> 
          
          <h5 class="text-primary mt-2">Copyright by Halsey</h5>
     
</div>
</div>
</div>
</div>


   
        </div>
        


 -->



















    </div>






































































    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>