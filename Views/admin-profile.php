<?php
    require_once('nav.php');
?>
<main class="py-5">
    <section id="listado" class="mb-5">
        <div class="container">
            <h2 class="mb-4">Welcome <?php echo $_SESSION['logged']->getFirstName() ?></h2>
            <table class="table">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Dni</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <th><?php echo $_SESSION['logged']->getFirstName() ?></th>
                        <td><?php echo $_SESSION['logged']->getLastName() ?></td>
                        <td><?php echo $_SESSION['logged']->getDni() ?></td>
                        <td><?php echo $_SESSION['logged']->getFileNumber() ?></td>
                    </tr>
                </tbody>
                <thead>
                    <tr class="table-primary">                       
                        <th scope="col">Gender</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <th><?php echo $_SESSION['loggedUser']->getGender() ?></th>
                        <td><?php echo $_SESSION['loggedUser']->getBirthDate() ?></td>
                        <td><?php echo $_SESSION['loggedUser']->getPhoneNumber() ?></td>
                        <td><?php echo $_SESSION['loggedUser']->getEmail() ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>