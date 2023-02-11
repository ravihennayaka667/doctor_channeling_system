 <!-- link navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark " style=" background-color: rgba(31, 97, 141 )">
     <div class="container-fluid">
         <a class="navbar-brand" href="#">DCPMS</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="Admin.php">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#" id="doc">Add New Doctors</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a onclick="window.location.href='permisson.php';" class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Manage Access
                     </a>
                     
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" id="NewUser">Add New User</a>
                 </li>
             </ul>
             <form  method="post"  class="d-flex">
                 <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-dark" type="submit">Search</button>
             </form>

 <form action="../../../logout.php">
         <button class="btn btn-warning" type="submit">Logout</button>
      </form>

         </div>
     </div>

 </nav>
