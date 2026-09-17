<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lorenzo van Matterhorn - Portofolio</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Arial, sans-serif;
      background-color: #FEFCE8;
      color: #1F2937;
      display: flex;
      flex-direction: column;
      min-height: 945px;
      transition: background-color 0.5s, color 0.5s;
    }

    body.dark-mode {
      background-color: #0F172A;
      color: #F8FAFC;
    }

    header {
      position: relative;
      background: linear-gradient(to top, #FFB347, #FF7E5F);
      color: white;
      padding: 90px 15px 150px 15px;
      text-align: center;
      overflow: hidden;
      transition: background-color 0.5s;
    }

    body.dark-mode header {
      background: linear-gradient(to top, #1E3A8A, #0F172A);
    }

    .mountains {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 1920px;
      height: 150px;
      background: linear-gradient(to top, #1E3A8A 0%, transparent 100%);
      clip-path: polygon(
        0% 100%, 10% 60%, 20% 85%, 30% 50%, 40% 80%,
        50% 40%, 60% 75%, 70% 45%, 80% 70%, 90% 50%, 100% 100%
      );
    }

     .dark-mode .mountains {
      background: linear-gradient(to top, #1E0A4A 0%, transparent 100%);
    }

    header h1,
    header p,
    header nav {
      position: relative;
      z-index: 1;
    }

    header h1 a {
      color: white;
      text-decoration: none;
    }

    header h1 a:hover {
        text-decoration: underline;
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      padding: 0;
      margin-top: 10px;
    }

    nav li {
      margin: 0 15px;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: 500;
    }

    nav a:hover {
      text-decoration: underline;
    }

    .dark-toggle {
      position: fixed;
      top: 15px;
      right: 15px;
      color: #1E3A8A;
      border: none;
      cursor: pointer;
      z-index: 999;
      background: transparent;
      font-size: 30px;
    }

    .dark-toggle::before {
        content: "🌕";
    }

    .dark-mode .dark-toggle {
      color: #fff;
    }
    
    .dark-mode .dark-toggle::before {
        content: "🌑";
    }

    main {
      flex: 1;
      max-width: 960px;
      margin: 30px auto;
      padding: 23px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
      width: 1000px;
      transition: background-color 0.5s;
    }

    body.dark-mode main {
      background-color: #1E293B;
    }

    footer {
      background-color: #1E3A8A;
      color: white;
      text-align: center;
      padding: 15px;
    }
  </style>
  <script>
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
    }
  </script>
</head>
<body>
  <button class="dark-toggle" onclick="toggleDarkMode()"></button>
  <header>
    <h1>Lorenzo van Matterhorn</h1>
    <p>Student Software Developer op het Vista College</p>
    <nav>
      <ul>
  <?php require_once("mainmenu.php"); ?>
      </ul>
    </nav>
    <div class="mountains"></div>
  </header>

  <main>
    <h1>Projecten</h1>
  <p>Hieronder vindt u een overzicht van mijn projecten. Klik op de projectnaam voor meer details.</p>
  
    <ul>
      <li><a href="project1.php">Project 1: Portfolio Website</a></li>
      <li><a href="project2.php">Project 2: mees kantine</a></li>
      <li><a href="project3.php">Project 3: pokedex</a></li>
      <li><a href="project4.php">Project 4: logistiek opdracht</a></li>
    </ul>
  <h2>Project 3: pokedex</h2>
<p>Voor deze opdracht moesten we werken met de database van Pokemon. Hier heb ik er een spel mee gemaakt.</p>
<p>In mijn vrije tijd werk ik aan persoonlijke projecten, zodat ik kan verbeteren en ook een beetje met andere computertalen kan spelen.</p>
<image src="Schermopname_17-9-2026_125437_outlook.office.com.jpeg" alt="Pokedex" style="width:100%;max-width:600px;">
<img src="Schermafbeelding 2026-09-17 125454.png" alt="Pokedex" style="width:100%;max-width:600px;">
</image>

</main>  

<footer>
    © <?php echo date("Y"); ?> Swarley & CO
  </footer>

</body>
</html>