<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Home Veges</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   
   <style type="text/css">
     .card{ width: 14rem; }

     @media screen and (max-width:576px){
      .card{ width: 20rem; }
     }
   </style>

</head>
<body>

<?php include 'header.php' ?>

  <div class="bg" id="page1">
    <div class="overlay">


        


         <div class="modal fade" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
            


              

              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>  
                <div class="container">
                  <h2>MyAccount</h2>
                  <br>
                  <!-- Nav tabs -->
                    <ul class="bg-dark nav nav-tabs pt-2 pl-3" role="tablist">
                      <li class="nav-item rounded text-dark">
                        <a class="nav-link active" data-toggle="tab" href="#login"> <b>LogIn</b> </a>
                      </li>
                      <li class="nav-item rounded text-dark">
                        <a class="nav-link" data-toggle="tab" href="#signup"> <b>Create Account</b> </a>
                      </li>
                    </ul>
          
                  <!-- Tab panes -->
                  
                  <div class="tab-content">
                    
                    <div id="login" class="container rounded tab-pane active active"><br>
                       <input type="text" placeholder="Enter your Number" class="ml-1 my-3 px-2 pr-5 py-2 rounded">
                       <button class="btn btn-dark text-light ac" id="account-click">OTP</button>
                       
                       <p class="text-center lead">or <b>login via</b></p>
                       <div class="d-flex flex-row justify-content-around pl-lg-5 pl-md-5 pl-4">
                        <div class="p-2 bd-highlight"><a href=""><img class="logo rounded ml-md-2 ml-lg-2" src="google logo.png" alt=""></a></div>
                        <div class="p-2 bd-highlight"><a href=""><img class="logo rounded ml-md-2 ml-lg-2" src="facbook logo.png" alt=""></a></div>
                        <div class="p-2 bd-highlight"><a href=""><img class="logo rounded ml-md-2 ml-lg-2" src="google logo.png" alt=""></a></div>
                      </div>
                    </div>

                    <div id="signup" class="container rounded tab-pane fade"><br>
                       <input type="text" placeholder="Enter your Number" class="ml-1 my-3 px-2 pr-5 py-2 rounded">
                       <button class="btn btn-dark text-light ac" id="account-click">Submit</button>
                    
                       <p class="text-center lead">or <b>register via</b></p>
                       <div class="d-flex flex-row justify-content-around pl-lg-5 pl-md-5 pl-4">
                        <div class="p-2 bd-highlight"><a href=""><img class="logo rounded ml-md-2 ml-lg-2" src="google logo.png" alt=""></a></div>
                        <div class="p-2 bd-highlight"><a href=""><img class="logo rounded ml-md-2 ml-lg-2" src="facbook logo.png" alt=""></a></div>
                        <div class="p-2 bd-highlight"><a href=""><img class="logo rounded ml-md-2 ml-lg-2" src="google logo.png" alt=""></a></div>
                      </div>
                    </div>
                    
                  </div>
                
                
                </div>
              </div>
              

              


              <!-- Modal footer -->
              <div class="modal-footer">
                <p class="pr-auto mr-5">Already Have an account . click to SignUp</p>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
        
            </div>
          </div>
         </div>





         <aside class="col-lg-12 col-12 pt-lg-5 pt-5 py-3">
            <p class="mt-lg-5 pt-lg-2 mt-5">Fresh <b><span class="w">vegetables</span> </b> at your Door Step</p>
         </aside>
         
         <div class="container row px-lg-auto mx-lg-auto my-lg-4 mb-3">

           <div class="col-lg-3 col-1"></div>

           <div class="col-lg-6 col-10 input-group input-group-lg mx-auto px-0 rounded" style="box-shadow:0.5px 0.5px 20px 1px black;">
             <input type="text" class="form-control px-lg-3" placeholder="Search your Product" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
             <div class="input-group-append">
                <span class="input-group-text px-lg-4 px-2 search-button" id="basic-addon2"><i class='fas fa-search' style="font-size:25px;"></i></span>
             </div>
           </div>

           <div class="col-lg-3 col-1"></div>

         </div>  

         

      <div class="container pt-5 d-lg-none d-block">
          <div id="myCarousel" class="row text-center text-white mt-lg-5 carousel slide" data-ride="carousel">
           
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>


           <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img2.jfif" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img2.jfif" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img4.jfif" class="d-block w-100" alt="...">
            </div>
           </div>


        </div>
      </div>     
      


           <div class="container pt-5 d-none d-lg-block">
            <div class="row text-center text-white mt-lg-5 carousel slide" data-ride="carousel">
             <div class="col-lg-4 col-12 my-lg-3 imgs"><img src="img9.jfif" style="box-shadow:1px 1px 5px 5px rgba(0,0,0,0.3)" class="rounded w-75" alt=""></div>
             <div class="col-lg-4 col-12 my-lg-3 imgs"><img src="img9.jfif" style="box-shadow:1px 1px 5px 5px rgba(0,0,0,0.3)" class="rounded w-75" alt=""></div>
             <div class="col-lg-4 col-12 my-lg-3 imgs"><img src="img9.jfif" style="box-shadow:1px 1px 5px 5px rgba(0,0,0,0.3)" class="rounded w-75" alt=""></div>
            </div>
           </div>

        </div>
      </div>
    </div>
    
     <div class="product-page"  id="page2">

       <div class="product_header lead text-center align-items-center">
         <p class="my-auto py-0 py-lg-2" style="font-size: 26px;">Today's Available Rate</p> 
       </div>

       <div class="container-fluid px-0">
        <div class="row row-cols-1 row-cols-lg-6 pt-2 mx-0">            
           

          <div class="col mb-2">
            <div class="card d-flex flex-row flex-lg-column" style="box-shadow:1px 1px 10px 0.5px gray;">
              <img src="img9.jfif" class="card-img d-none d-lg-block">
              <div class="d-lg-none d-block "><img src="img9.jfif" class="card-img mr-3" style="max-width:120px;" alt="Tomato"></div>
              <div class="mx-lg-3 my-lg-2">
                <h5 class="card-title my-2">Tomato</h5>
                <p class="card-text product-font my-2">Fresh high Quality Tomato </p>
                <button class="btn btn-success rounded-0 d-block d-lg-none">ADD</button> 
              </div> 
              <button class="btn btn-success d-none d-lg-block">ADD</button>
            </div>
          </div>

          <div class="col mb-2">
            <div class="card d-flex flex-row flex-lg-column" style="box-shadow:1px 1px 10px 0.5px gray;">
              <img src="img9.jfif" class="card-img d-none d-lg-block">
              <div class="d-lg-none d-block "><img src="img9.jfif" class="card-img mr-3" style="max-width:120px;" alt="Tomato"></div>
              <div class="mx-lg-3 my-lg-2">
                <h5 class="card-title my-2">Tomato</h5>
                <p class="card-text product-font my-2">Fresh high Quality Tomato </p>
                <button class="btn btn-success rounded-0 d-block d-lg-none">ADD</button> 
              </div> 
              <button class="btn btn-success d-none d-lg-block">ADD</button>
            </div>
          </div>

          <div class="col mb-2">
            <div class="card d-flex flex-row flex-lg-column" style="box-shadow:1px 1px 10px 0.5px gray;">
              <img src="img9.jfif" class="card-img d-none d-lg-block">
              <div class="d-lg-none d-block "><img src="img9.jfif" class="card-img mr-3" style="max-width:120px;" alt="Tomato"></div>
              <div class="mx-lg-3 my-lg-2">
                <h5 class="card-title my-2">Tomato</h5>
                <p class="card-text product-font my-2">Fresh high Quality Tomato </p>
                <button class="btn btn-success rounded-0 d-block d-lg-none">ADD</button> 
              </div> 
              <button class="btn btn-success d-none d-lg-block">ADD</button>
            </div>
          </div>

          <div class="col mb-2">
            <div class="card d-flex flex-row flex-lg-column" style="box-shadow:1px 1px 10px 0.5px gray;">
              <img src="img9.jfif" class="card-img d-none d-lg-block">
              <div class="d-lg-none d-block "><img src="img9.jfif" class="card-img mr-3" style="max-width:120px;" alt="Tomato"></div>
              <div class="mx-lg-3 my-lg-2">
                <h5 class="card-title my-2">Tomato</h5>
                <p class="card-text product-font my-2">Fresh high Quality Tomato </p>
                <button class="btn btn-success rounded-0 d-block d-lg-none">ADD</button> 
              </div> 
              <button class="btn btn-success d-none d-lg-block">ADD</button>
            </div>
          </div>

          <div class="col mb-2">
            <div class="card d-flex flex-row flex-lg-column" style="box-shadow:1px 1px 10px 0.5px gray;">
              <img src="img9.jfif" class="card-img d-none d-lg-block">
              <div class="d-lg-none d-block "><img src="img9.jfif" class="card-img mr-3" style="max-width:120px;" alt="Tomato"></div>
              <div class="mx-lg-3 my-lg-2">
                <h5 class="card-title my-2">Tomato</h5>
                <p class="card-text product-font my-2">Fresh high Quality Tomato </p>
                <button class="btn btn-success rounded-0 d-block d-lg-none">ADD</button> 
              </div> 
              <button class="btn btn-success d-none d-lg-block">ADD</button>
            </div>
          </div>

         <div class="col mb-2">
            <div class="card d-flex flex-row flex-lg-column" style="box-shadow:1px 1px 10px 0.5px gray;">
              <img src="img9.jfif" class="card-img d-none d-lg-block">
              <div class="d-lg-none d-block "><img src="img9.jfif" class="card-img mr-3" style="max-width:120px;" alt="Tomato"></div>
              <div class="mx-lg-3 my-lg-2">
                <h5 class="card-title my-2">Tomato</h5>
                <p class="card-text product-font my-2">Fresh high Quality Tomato </p>
                <button class="btn btn-success rounded-0 d-block d-lg-none">ADD</button> 
              </div> 
              <button class="btn btn-success d-none d-lg-block">ADD</button>
            </div>
          </div>

          <div class="col mb-2">
            <div class="card d-flex flex-row flex-lg-column" style="box-shadow:1px 1px 10px 0.5px gray;">
              <img src="img9.jfif" class="card-img d-none d-lg-block">
              <div class="d-lg-none d-block "><img src="img9.jfif" class="card-img mr-3" style="max-width:120px;" alt="Tomato"></div>
              <div class="mx-lg-3 my-lg-2">
                <h5 class="card-title my-2">Tomato</h5>
                <p class="card-text product-font my-2">Fresh high Quality Tomato </p>
                <button class="btn btn-success rounded-0 d-block d-lg-none">ADD</button> 
              </div> 
              <button class="btn btn-success d-none d-lg-block">ADD</button>
            </div>
          </div>

          <div class="col mb-2">
            <div class="card d-flex flex-row flex-lg-column" style="box-shadow:1px 1px 10px 0.5px gray;">
              <img src="img9.jfif" class="card-img d-none d-lg-block">
              <div class="d-lg-none d-block "><img src="img9.jfif" class="card-img mr-3" style="max-width:120px;" alt="Tomato"></div>
              <div class="mx-lg-3 my-lg-2">
                <h5 class="card-title my-2">Tomato</h5>
                <p class="card-text product-font my-2">Fresh high Quality Tomato </p>
                <button class="btn btn-success rounded-0 d-block d-lg-none">ADD</button> 
              </div> 
              <button class="btn btn-success d-none d-lg-block">ADD</button>
            </div>
          </div>
          
            
      
       </div>

     </div>


<?php include 'footer.php' ?>


    
  </div>


</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>