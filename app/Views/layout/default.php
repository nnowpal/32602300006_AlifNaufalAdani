<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->renderSection('title') ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>

  <div class="navbar">
    <div class="navbar-page">
      <ul>
        <li><a href="<?= base_url('/') ?>">Home</a></li>
        <li><a href="<?= base_url('/profil') ?>">About</a></li>
        <li><a href="<?= base_url('/pengalaman') ?>">Experience</a></li>
        <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
      </ul>
    </div>
    <div class="navbar-sosmed">
      <ul>
        <li>LinkedIn</li>
        <li>GitHub</li>
        <li>Instagram</li>
        <li>WhatsApp</li>
      </ul>
    </div>
  </div>

  <div class="banner">
    <span class="name">ALIF NAUFAL ADANI</span><br>
    <span class="description">Student of the Faculty of Industrial Technology, Informatics Engineering Major</span>
  </div>

  <?= $this->renderSection('content') ?>

</body>
</html>