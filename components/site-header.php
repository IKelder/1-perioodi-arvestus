<header id="site-header">
  <div class="site-title">
    <?php
    $site_title = "Arvestustöö";
    echo "<h1>" . $site_title . "</h1>" ?>
  </div>

<nav class="menu-main">
  <ul class="menu">
  <?php
  $menu_main = array("Avaleht", "Uudised", "Meeskond", "Harjutused", "Lisaulesanne");
  echo "<li><a href=index.php>" . $menu_main[0] . "</a></li>
  <li><a href=news.php>" . $menu_main[1] . "</a></li>
  <li><a href=team.php>" . $menu_main[2] . "</a></li>
  <li><a href=exercises.php>" . $menu_main[3] . "</a></li>
  <li><a href=lisaulesanne.php>" . $menu_main[4] . "</a></li>";
  ?>
  </ul>
</nav>


<!--  <nav class="menu-main">
    <ul class="menu">
      <li><a href="index.php">Avaleht</a></li>
      <li><a href="news.php">Uudised</a></li>
      <li><a href="team.php">Meeskond</a></li>
      <li><a href="exercises.php">Harjutused</a></li>
    </ul>
  </nav> -->
</header>
