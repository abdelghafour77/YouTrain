<?php
if (count($travels) == 0) {
  echo '<h1> NO DATA </h1>';
  die;
}
foreach ($travels as $travel) {

  $date = new DateTimeImmutable($travel['date_start']);
  $day = $date->format('d');
  $month = $date->format('M');
  $full_date = $date->format('l d M Y');
  $start_time = $date->format('h:i A');

?>
  <article class="card fl-left">
    <section class="date">
      <time datetime="23th feb"> <span><?= $day ?></span><span><?= $month ?></span> </time>
    </section>
    <section class="card-cont">
      <small><?= $travel['train'] ?></small>
      <h3><?= $travel['city_start'] . ' To ' . $travel['city_end'] ?></h3>
      <div class="even-date">
        <i class="fa fa-calendar"></i>
        <time>
          <span><?= $full_date ?></span>
          <span>Start time : <?= $start_time ?></span>
          <span>Time travel : <?= $travel['time'] ?> H</span>
        </time>
      </div>
      <div class="even-info">
        <i class="fa fa-map-marker"></i>
        <p><?= $travel['city_start'] . ' - ' . $travel['station_start'] . ' To ' . $travel['city_end'] . ' - ' . $travel['station_end'] ?></p>
      </div>
      <?php if ($travel['capacity'] > $travel['seat']) { ?>
        <a class="book" href="#">tickets</a>
      <?php } else { ?>
        <a class="disabled">Full Travel</a>
      <?php } ?>
    </section>
  </article>
<?php
}
?>