<?php
    require_once('student-nav.php');
?>
<main class="py-5">
    <section id="listado" class="mb-5">
        <div class="container">
            <h2 class="mb-4">Student information</h2>
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
                        <th><?php echo $_SESSION['loggedUser']->getCareerId() ?></th>
                        <td><?php echo $_SESSION['loggedUser']->getFirstName() ?></td>
                        <td><?php echo $_SESSION['loggedUser']->getLastName() ?></td>
                        <td><?php echo $_SESSION['loggedUser']->getDni() ?></td>
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
                        <th><?php echo $_SESSION['loggedUser']->getFileNumber() ?></th>
                        <td><?php echo $_SESSION['loggedUser']->getGender() ?></td>
                        <td><?php echo $_SESSION['loggedUser']->getBirthDate() ?></td>
                        <td><?php echo $_SESSION['loggedUser']->getPhoneNumber() ?></td>
                    </tr>
                </tbody>
                <thead>
                    <tr class="table-primary">
                        <th colspan="4" style="text-align:center;">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                        <td colspan="4" style="text-align:center;"><?php echo $_SESSION['loggedUser']->getEmail() ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main> 