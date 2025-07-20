<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $this->renderSection('title') ?: 'Portfolio' ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    /* Custom styles untuk memperkuat estetika Material Design 3 */
    body {
      font-family: 'Inter', sans-serif;
      /* Menggunakan warna Background dari palet M3 */
      background-color: #FFFBFE; /* M3: Background */
      color: #1C1B1F; /* M3: On Background */
    }

    /* Gaya untuk elemen interaktif menyerupai efek ripple atau state M3 */
    .md3-link:hover {
      /* Menggunakan Primary dengan opacity untuk efek hover M3 */
      background-color: rgba(103, 80, 164, 0.1); /* M3: Primary dengan 10% opacity */
      border-radius: 9999px; /* Sangat melengkung untuk efek pil pada hover */
      padding: 0.25rem 0.75rem; /* px-3 py-1 */
      margin: -0.25rem -0.75rem; /* Offset untuk padding */
      transition: background-color 0.2s ease-in-out, padding 0.2s ease-in-out, margin 0.2s ease-in-out, border-radius 0.2s ease-in-out;
    }

    .md3-link {
        /* Memastikan dasar untuk transisi jika tidak di-hover */
        padding: 0;
        margin: 0;
        transition: background-color 0.2s ease-in-out, padding 0.2s ease-in-out, margin 0.2s ease-in-out, border-radius 0.2s ease-in-out;
    }

    /* Bayangan kustom untuk header untuk memberikan kesan mengangkat yang halus */
    .md3-header-shadow {
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05), 0 1px 2px rgba(0, 0, 0, 0.03); /* Bayangan yang lebih ringan */
    }

    /* Gaya bilah progres kustom untuk keterampilan */
    .skill-progress-bar-bg {
        background-color: #E8DEF8; /* M3: Secondary Container */
    }
    .skill-progress-bar-fill {
        background-color: #6750A4; /* M3: Primary */
    }

    /* Gaya bilah progres melingkar kustom untuk bahasa */
    .language-circle-bg {
        stroke: #E8DEF8; /* M3: Secondary Container */
    }
    .language-circle-fill {
        stroke: #6750A4; /* M3: Primary */
    }

  </style>
  <?= $this->renderSection('head') ?>
</head>
<body class="text-[#1C1B1F]">

  <!-- Header -->
  <!-- Menerapkan bayangan halus dan sudut membulat untuk nuansa Material Design 3 -->
  <header class="sticky top-0 z-50 bg-[#FFFBFE] md3-header-shadow px-6 py-4 rounded-b-xl">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold text-[#6750A4]">
        Portfolio <span class="text-[#1C1B1F]">Saya 🙆‍♂️</span>
      </h1>
      <nav class="space-x-2 text-base">
        <!-- Menyesuaikan tautan untuk nuansa tombol Material Design yang halus saat di-hover -->
        <a href="<?= base_url('profile') ?>" class="text-[#1C1B1F] hover:text-[#6750A4] font-medium md3-link">About</a>
        <a href="<?= base_url('experience') ?>" class="text-[#1C1B1F] hover:text-[#6750A4] font-medium md3-link">Experience</a>
        <a href="<?= base_url('contact') ?>" class="text-[#1C1B1F] hover:text-[#6750A4] font-medium md3-link">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Konten Utama -->
  <!-- Menambahkan padding vertikal lebih untuk tata letak keseluruhan -->
  <div class="container mx-auto px-4 py-12 grid md:grid-cols-4 gap-8">
    
    <!-- Area Konten -->
    <main class="md:col-span-3 space-y-8">
      <?= $this->renderSection('content') ?>
    </main>

    <!-- Sidebar -->
    <!-- Menerapkan latar belakang yang lebih terang dan harmonis serta bayangan/sudut membulat yang ditingkatkan -->
    <aside class="bg-[#EADDFF] p-6 rounded-2xl shadow-lg space-y-8">

      <!-- Keterampilan -->
      <h2 class="text-xl font-semibold text-[#21005D] mb-4">Skills</h2>
      <div class="space-y-4 mb-8">
        <?php
          $skills = [
            ['label' => 'HTML/CSS/JS', 'level' => 90],
            ['label' => 'React.js', 'level' => 75],
            ['label' => 'PHP (CodeIgniter)', 'level' => 80],
            ['label' => 'SQL', 'level' => 85],
            ['label' => 'UI/UX Design', 'level' => 70],
            ['label' => 'Video & Audio Editing', 'level' => 60],
            ['label' => '3D Animation Basics', 'level' => 40],
          ];
          foreach ($skills as $skill):
        ?>
          <div>
            <p class="text-sm text-[#21005D] mb-1"><?= $skill['label'] ?></p>
            <!-- Warna bilah progres yang diperbarui untuk estetika M3 -->
            <div class="w-full skill-progress-bar-bg h-3 rounded-full">
              <div class="skill-progress-bar-fill h-3 rounded-full" style="width: <?= $skill['level'] ?>%"></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Bahasa -->
      <h2 class="text-xl font-semibold text-[#21005D] mb-4">Languages</h2>
      <div class="flex flex-wrap gap-6 justify-center">
        <?php
          $languages = [
            ['label' => 'Indonesian', 'percent' => 90],
            ['label' => 'English', 'percent' => 79],
            ['label' => 'Arabic', 'percent' => 80],
          ];
          foreach ($languages as $lang):
        ?>
          <div class="flex flex-col items-center w-20">
            <div class="relative w-16 h-16 mb-2">
              <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                <!-- Warna bilah progres melingkar yang diperbarui untuk estetika M3 -->
                <path class="language-circle-bg" stroke="currentColor" stroke-width="4" fill="none"
                      d="M18 2.0845
                          a 15.9155 15.9155 0 0 1 0 31.831
                          a 15.9155 15.9155 0 0 1 0 -31.831" />
                <path class="language-circle-fill" stroke="currentColor" stroke-width="4" fill="none"
                      stroke-dasharray="<?= $lang['percent'] ?>, 100"
                      d="M18 2.0845
                          a 15.9155 15.9155 0 0 1 0 31.831
                          a 15.9155 15.9155 0 0 1 0 -31.831" />
              </svg>
              <div class="absolute inset-0 flex items-center justify-center text-sm font-semibold text-[#21005D]">
                <?= $lang['percent'] ?>%
              </div>
            </div>
            <span class="text-xs text-center text-[#21005D]"><?= $lang['label'] ?></span>
          </div>
        <?php endforeach; ?>
      </div>

    </aside>
  </div>

  <!-- Footer -->
  <!-- Menggunakan warna yang lebih gelap untuk footer untuk memberikan kontras yang baik -->
  <footer class="bg-[#21005D] text-[#FFFFFF] text-center py-5">
    &copy; <?= date('Y') ?> Alif Naufal Adani. All rights reserved.
  </footer>

</body>
</html>
