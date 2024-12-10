<div class="container-form">
  <form action="index.php" method="get">
    <div class="bacteria">
      <img src="/images/red.png" alt="RED">
      <?php
        echo "<h2>" . $output_red . " - <span class='red'>КРАСНЫХ</span> бактерий </h2>";
      ?>
    </div>
    <div class="bacteria">
      <img src="/images/green.png" alt="green">
      <?php
        echo "<h2>" . $output_green. " - <span class='green'>ЗЕЛЕНЫХ</span> бактерий </h2>";
      ?>
    </div>
    <br>
    <input type="submit" value="Новые данные">
  </form>
</div>
