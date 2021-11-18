  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <span class="navbar-text">
          <strong>UTN</strong>
     <span class="nav-item">
          <strong><a class="nav-link" data-bs-toggle="" href="<?php echo FRONT_ROOT ?>User/ShowAdminProfileView" role="button" aria-expanded="false" style="color: rgba(255,255,255,.5);">Profile</a></strong>
     </span>

     <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Company</a>
               <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo FRONT_ROOT ?>Company/ShowAddView">Add</a></li>
                    <li><a class="dropdown-item" href="<?php echo FRONT_ROOT ?>Company/ShowListView">To List</a></li>
                    <li><a class="dropdown-item" href="<?php echo FRONT_ROOT ?>Company/ShowModifyView">Modify</a></li>
               </ul>
          </li>     
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Job offer</a>
               <ul class="dropdown-menu">
                    li><a class="dropdown-item" href="<?php echo FRONT_ROOT ?>JobOffer/ShowAddView">Add</a></li>
               </ul>
          </li> 
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">Student</a>
               <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">To List</a></li>
               </ul>
          </li>    
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" role="button" aria-expanded="false">User</a>
               <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo FRONT_ROOT ?>User/ShowAddView">Add</a></li>
               </ul>
          </li> 
          <li class="nav-item">
               <a class="nav-link" data-bs-toggle="" href="<?php echo FRONT_ROOT ?>User/Logout" role="button" aria-expanded="false">Logout</a>
          </li> 
     </ul>
</nav>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
