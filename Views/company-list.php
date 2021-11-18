<?php
    require_once('nav.php');
?>
<main class="py-5">
    <section id="listado" class="mb-5">
        <div class="container">
              <h2 class="mb-4">Listado de empresas</h2>
              <table class="table bg-light-alpha">
                  <thead>
                    <tr>
                      <th>Social Reason</th>
                      <th>Cuit</th>
                      <th>Address</th>
                      <th>Founded</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      foreach($companyList as $value){                                
                    ?>
                    <tr>
                      <td><?php echo $value->getName() ?></td>
                      <td><?php echo $value->getCuit() ?></td>
                      <td><?php echo $value->getAdress() ?></td>
                      <td><?php echo $value->getFounded() ?></td>
                    </tr>
                    <?php                              
                      }
                    ?>
                </tbody>
              </table>
              <form action="<?php echo FRONT_ROOT ?>Company/Remove" method="post">
                <table style="max-width: 35%;" >
                  <thead>
                    <tr>
                      <th style="width: 100px;">Cuit</th>
                      <th style="width: 170px; text-align: center">  Action</th>
                    </tr>
                  </thead>
                  <tbody align=center>

                </table>
              <form>
        </div>

    </section>
</main>
<?php 
  include_once('footer.php');
?>