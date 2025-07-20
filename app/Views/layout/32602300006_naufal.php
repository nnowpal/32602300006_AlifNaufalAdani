<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ? $this->renderSection('title') : 'Alif Naufal Adani - Portfolio' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
            color: #1f1f1f;
        }
        .banner {
            background: linear-gradient(135deg, #6750A4, #4A4458);
            color: #E8DEF8;
            padding: 8rem 2rem;
            text-align: center;
            border-radius: 0 0 24px 24px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }
        .banner .name {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -0.02em;
        }
        .banner .description {
            font-size: clamp(1rem, 2vw, 1.25rem);
            font-weight: 300;
            margin-top: 0.5rem;
            opacity: 0.8;
        }
        .container-layout {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        .card {
            background-color: #FFFFFF;
            border-radius: 16px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08), 0 4px 12px rgba(0, 0, 0, 0.06);
            padding: 2.5rem;
            margin-bottom: 2rem;
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12), 0 8px 24px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2.25rem;
            font-weight: 600;
            color: #1f1f1f;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #49454F;
            text-align: center;
        }
        .experience table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-top: 2rem;
            font-size: 0.95rem;
        }
        .experience th, .experience td {
            padding: 1rem 1.25rem;
            text-align: left;
            border-bottom: 1px solid #E0E0E0;
        }
        .experience tr:last-child td {
            border-bottom: none;
        }
        .experience tr:nth-child(even) {
            background-color: #F8F8F8;
        }
        .experience td:first-child, .experience th:first-child {
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
        }
        .experience td:last-child, .experience th:last-child {
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
        }
        .experience table tr:hover {
            background-color: #E8E8E8;
            transition: background-color 0.2s ease-in-out;
        }
        .experience table td:nth-child(odd):not(:last-child) {
            font-weight: 600;
            color: #6750A4;
        }
        .experience table td:nth-child(even):not(:last-child) {
            font-weight: 500;
            color: #1f1f1f;
        }
        .experience table td:nth-child(odd):last-child {
            color: #49454F;
            font-size: 0.9rem;
        }
        .experience table td[colspan="2"] {
            font-size: 0.85rem;
            color: #79747E;
            padding-top: 0.5rem;
        }
        .header-layout {
            background-color: #F7F2FA;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
            padding: 1rem 1.5rem;
            border-radius: 0 0 16px 16px;
            margin-bottom: 1.5rem;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .main-layout {
            display: flex;
            gap: 2rem;
        }
        .content-area {
            flex: 3;
        }
        .sidebar-area {
            flex: 1;
            background-color: #E8DEF8;
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
        }
        .footer-layout {
            background-color: #4A4458;
            color: #E8DEF8;
            padding: 1.5rem;
            text-align: center;
            border-radius: 16px 16px 0 0;
            margin-top: 2rem;
            font-size: 0.9rem;
        }
        @media (max-width: 768px) {
            .main-layout {
                flex-direction: column;
            }
            .sidebar-area {
                margin-top: 2rem;
            }
            .banner {
                padding: 6rem 1rem;
            }
            .banner .name {
                font-size: 2.5rem;
            }
            .banner .description {
                font-size: 1.2rem;
            }
            .card {
                padding: 1.5rem;
            }
            h1 {
                font-size: 1.75rem;
            }
            p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header class="header-layout">
        <nav class="flex justify-between items-center container-layout">
            <div class="text-xl font-semibold text-6750A4">Portfolio</div>
            <ul class="flex space-x-6 text-79747E">
                <li><a href="#" class="hover:text-6750A4 transition-colors duration-200">Home</a></li>
                <li><a href="#" class="hover:text-6750A4 transition-colors duration-200">About</a></li>
                <li><a href="#" class="hover:text-6750A4 transition-colors duration-200">Experience</a></li>
                <li><a href="#" class="hover:text-6750A4 transition-colors duration-200">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container-layout main-layout">
        <main class="content-area">
            <?= $this->renderSection('content') ?>
        </main>
        <aside class="sidebar-area">
            <h2 class="text-xl font-semibold text-4A4458 mb-4">Informasi Kontak</h2>
            <p class="text-79747E text-sm leading-relaxed text-left">
                Email : adaniedumail@gmail.com<br>
                Phone : +62 87788986810<br>
                Alamat: Semarang, Indonesia<br>
                Linkedin : Alif Naufal Adani
            </p>
            <h2 class="text-xl font-semibold text-4A4458 mt-8 mb-4">Skills</h2>
            <ul class="list-disc list-inside text-79747E text-sm">
                <li>Web Development (HTML, CSS, JS)</li>
                <li>React.js</li>
                <li>PHP (CodeIgniter)</li>
                <li>Database Management (SQL)</li>
                <li>Design Principles</li>
                <li>Video & Audio Editing</li>
                <li>Linux CLI Basic</li>
            </ul>
        </aside>
    </div>
    <footer class="footer-layout">
        &copy; <?= date('Y') ?> Alif Naufal Adani. All rights reserved.
    </footer>
</body>
</html>