<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
        <!--  Sisesta siia kood -->
         <?php 
            $random_number = rand(100, 200);
            if ($random_number > 150) {
              echo "Juhuslik number ".$random_number." on suurem kui 150.<br>";}
            elseif ($random_number < 150) {
              echo "Juhuslik number ".$random_number." on vaiksem kui 150.<br>";}
            else
              echo "Juhuslik number ".$random_number." on 150.";
          ?>

        <h2>Juhuslik pilt</h2>
        <?php
       echo '<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/'.rand(1, 12).'.jpg">';
        ?>
        <h2>Kõikide piltide väljastamine</h2>
       
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
