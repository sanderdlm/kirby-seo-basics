<?php snippet('header') ?>

<main class="main" role="main">

  <h2 class="error-title"><?= $page->title()->html() ?></h2>
  <div class="text">
    <?= $page->text()->kirbytext() ?>
  </div>

</main>