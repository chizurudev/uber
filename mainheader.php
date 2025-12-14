 <!-- Navigation Bar -->
 <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
   <div class="container-fluid">
     <!-- Brand -->
     <a class="navbar-brand" href="#">Uber</a>

     <!-- Mobile Toggle Button -->
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
       <span class="navbar-toggler-icon"></span>
     </button>

     <!-- Navigation Content -->
     <div class="collapse navbar-collapse" id="navbarContent">
       <!-- Left Side: 3 Links + 1 Dropdown -->
       <ul class="navbar-nav me-auto">
         <li class="nav-item">
           <a class="nav-link active" href="#">Ride</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Drive</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Uber Eat</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
             About
           </a>
           <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="#">Product 1</a></li>
             <li><a class="dropdown-item" href="#">Product 2</a></li>
             <li><a class="dropdown-item" href="#">Product 3</a></li>
             <li>
               <hr class="dropdown-divider">
             </li>
             <li><a class="dropdown-item" href="#">All Products</a></li>
           </ul>
         </li>
       </ul>

       <!-- Right Side: 2 Links + Sign Up Button -->
       <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link" href="#">Contact</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="login.php">Login</a>
         </li>
         <li class="nav-item">
           <a class="btn btn-signup ms-2" href="signup.php">Sign Up</a>
         </li>
       </ul>
     </div>
   </div>
 </nav>