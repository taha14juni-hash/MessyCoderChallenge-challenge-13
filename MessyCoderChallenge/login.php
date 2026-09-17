<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simpele Inlogpagina</title>
  <style>
 
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f4f4f9;
    }


    .top-left-btn {
      position: absolute;
      top: 20px;
      left: 20px;
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
    }

    .top-left-btn:hover {
      background-color: #0056b3;
    }

  
    .container {
      max-width: 400px;
      margin: 80px auto 0 auto;
      background: white;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .hidden {
      display: none;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .submit-btn {
      width: 100%;
      padding: 10px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .submit-btn:hover {
      background-color: #218838;
    }

    .error-msg {
      color: red;
      margin-top: 10px;
      font-size: 14px;
    }
  </style>
</head>
<body>


  <button class="top-left-btn" onclick="toggleForm()">Inloggen</button>

  <div class="container">
 
    <div id="loginCard" class="hidden">
      <h2>Inloggen</h2>
      <form id="loginForm" onsubmit="handleLogin(event)">
        <div class="form-group">
          <label for="username">Naam:</label>
          <input type="text" id="username" required>
        </div>
        <div class="form-group">
          <label for="password">Wachtwoord:</label>
          <input type="password" id="password" required>
        </div>
        <button type="submit" class="submit-btn">Aanmelden</button>
      </form>
      <div id="errorMsg" class="error-msg hidden">Onjuiste naam of wachtwoord.</div>
    </div>

   
    <div id="welcomeCard">
      <h2>Welkom!</h2>
      <p id="statusText">Klik op de knop links bovenin om in te loggen.</p>
    </div>
  </div>

  <script>
    function toggleForm() {
      const loginCard = document.getElementById('loginCard');
      loginCard.classList.toggle('hidden');
    }

    function handleLogin(event) {
      event.preventDefault();

      const usernameInput = document.getElementById('username').value;
      const passwordInput = document.getElementById('password').value;
      const errorMsg = document.getElementById('errorMsg');
      const welcomeCard = document.getElementById('welcomeCard');
      const loginCard = document.getElementById('loginCard');

      
      if (usernameInput === 'Johnny' && passwordInput === '200800') {
        errorMsg.classList.add('hidden');
        loginCard.classList.add('hidden');
        welcomeCard.innerHTML = `
          <h2>Welkom terug, Johnny!</h2>
          <p>Je bent succesvol ingelogd.</p>
          <button class="submit-btn" onclick="location.reload()" style="background-color: #dc3545;">Uitloggen</button>
        `;
      } else {
        errorMsg.classList.remove('hidden');
      }
    }
  </script>

</body>
</html>