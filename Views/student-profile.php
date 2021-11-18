<?php
    require_once('student-nav.php');
?>
<main class="py-5">
    <section id="listado" class="mb-5">
        <div class="container">
             <h2 class="mb-4">Welcome<?php echo $_SESSION['logged']->getFirstName() ?></h2>
            <table class="table">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">Career</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Dni</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <th><?php echo $career->getDescription() ?></th>
                        <td><?php echo $_SESSION['logged']->getFirstName() ?></td>
                        <td><?php echo $_SESSION['logged']->getLastName() ?></td>
                        <td><?php echo $_SESSION['logged']->getDni() ?></td>
                    </tr>
                </tbody>
                <thead>
                    <tr class="table-primary">
                        <th scope="col">Phone</th>
                        <th scope="col">Gen</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col">Mobile</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <th><?php echo $_SESSION['logged']->getFileNumber() ?></th>
                        <td><?php echo $_SESSION['logged']->getGender() ?></td>
                        <td><?php echo $_SESSION['logged']->getBirthDate() ?></td>
                        <td><?php echo $_SESSION['logged']->getPhoneNumber() ?></td>
                    </tr>
                </tbody>
                <thead>
                    <tr class="table-primary">
                        <th colspan="4" style="text-align:center;">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <td colspan="4" style="text-align:center;"><?php echo $_SESSION['logged']->getEmail() ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main> 