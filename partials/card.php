<?php
$title = $args['title'];
$time='';
if (isset($args['time'])) {
  $time = $args['time'];
}
$description = $args['description'];
$more_link_text = 'Scopri di più';
if (isset($args['more_link_text'])) {
  $more_link_text = $args['more_link_text'];
}
$more_link_href = $args['more_link_href'];
$img_src = $args['img_src'];
$img_alt = $args['img_alt'];
?>
<div class="text-black g-4 flex flex-col ">
  <?php if (!empty($img_src) && !empty($img_alt)) { ?>
    <div class="h-[280px] overflow-hidden mb-4">
      <img class="" src="<?= $img_src ?>" alt="<?= $img_alt ?>">
    </div>
  <?php } ?>
  <?php if (!empty($time)) { ?>
    <time class=" text-base font-light mb-4"><?= $time ?></time>
  <?php } ?>
  <?php if (!empty($title)) { ?>
    <h4 class="text-[28.13px] font-normal mb-4"><?= $title ?></h4>
  <?php } ?>
  <?php if (!empty($description)) { ?>
    <p class="text-stone-950 text-xl font-light"><?= $description ?></p>
  <?php } ?>
  <?php if (!empty($more_link_href)) { ?>
    <a class="text-red-700 underline hover:no-underline" href="<?= $more_link_href ?>"> <?= $more_link_text ?> </a>
  <?php } ?>
</div>