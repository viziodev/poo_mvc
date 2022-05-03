<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=WEB_URL?>css/style.css">
   
    <title>Layout</title>
</head>
<body>
       <div class="wrapper ">
       
            <div class="sidebar-left  bg-dark  "  >
                 <div class="sidebar-top   ">
                    <img  src="https://dummyimage.com/100x100/dee2e6/6c757d.jpg" alt="" srcset="">
                    <p><small class="fst-italic text-white"> Nom et Prenom</small></p>
  
                 </div>
                 <div class="sidebar-center">
                 
                
                   
                   <div id="list-example" class="list-group ">
                   
                    <a class="list-group-item  list-group-item-action position shadow-lg p-2 bg-secondary rounded text-white " href="#list-item-1">Cours</a>
                    <a class="list-group-item list-group-item-action position bg-secondary p-2  rounded text-white" href="#list-item-2">Inscription</a>
                    <a class="list-group-item list-group-item-action position bg-secondary p-2  rounded text-white" href="#list-item-3">Professeur</a>
                    <a class="list-group-item list-group-item-action position bg-secondary p-2 rounded text-white " href="#list-item-4">Module</a>
                    <a class="list-group-item list-group-item-action position bg-secondary p-2 rounded text-white " href="#list-item-4">Module</a>
                  </div>
                 </div>
            </div>
            <div class="content">
                <div class="content-top shadow-md  bg-white ">
                  <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Gestion Scolaire</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link actived text-secondary" aria-current="page" href="#">Cours</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Inscription</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Professeurs</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Classes</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Modules</a>
                        </li>
                        
                        
                      </ul>
                       <p class="w-25 fw-bolder fs-4"><small class="fst-italic "> Profil :RP</small></p>
                      
                    </div>
                  </div>
                     </nav>
                </div>
                <div class="content-center ">
                  <div class="card  my-5 position">
                    <div class="card-header">
                      Liste des Cours
                    </div>
                    <div class="card-body">
                     
                          <?php echo $content_for_views; ?>
                    </div>
                   </div>
                  
                </div>
               
            </div>
       </div>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
      
