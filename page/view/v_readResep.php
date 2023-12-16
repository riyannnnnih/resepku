<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Resep</title>
  <link rel="stylesheet" href="../../styles/resep-detail.css">
</head>

<body>
  <a id="back" href="/ProjectPaw/ProjectPAW_ResepKu/page/view/v_resepList.php">
    <img src="../../asset/arrow-back.svg">
  </a>
  <div class="resep-container">
    <?php if ($resep) : ?>
      <h1><?php echo $resep->Judul; ?></h1>
      <img src='../../images/<?php echo $resep->image; ?>' width='200'>
      <p>Oleh <?php echo $resep->Username ?></p>
      <p id="time"><?php echo $resep->Waktu_penulisan ?></p>
      <h3>Bahan:</h3>
      <p><?php echo $resep->Bahan; ?></p>
      <h3>Langkah:</h3>
      <div id="langkah">
        <p><?php echo nl2br($resep->Langkah); ?></p>
      </div>
    <?php else : ?>
      <p>Resep tidak ditemukan.</p>
    <?php endif; ?>
  </div>
</body>

</html>