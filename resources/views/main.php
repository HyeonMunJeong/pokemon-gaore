<?php
    require_once (__DIR__.$_ENV['ASSET_HEADER']);
?>
<section class="hero-section">
    <div class="card-grid">
      <a class="card" href="#">
        <div class="card__background" style="background-image: url('<?= $_ENV['ASSET_IMG'] ?>/battle_icon.png')"></div>
        <div class="card__content">
          <p class="card__category">match Start</p>
          <h3 class="card__heading">배틀 시작</h3>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url('<?= $_ENV['ASSET_IMG'] ?>/disk_information.png')"></div>
        <div class="card__content">
          <p class="card__category">disk information competition</p>
          <h3 class="card__heading">디스크 정보 입력</h3>
        </div>
      </a>
      <a class="card" href="#">
        <div class="card__background" style="background-image: url('<?= $_ENV['ASSET_IMG'] ?>/battle_write.png')"></div>
        <div class="card__content">
          <p class="card__category">match tournament competition</p>
          <h3 class="card__heading">경기 조건 입력</h3>
        </div>
      </a>
    <div>
</section>
</body>
</html>