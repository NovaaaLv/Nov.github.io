<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="style_Biodata_Nav.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Alata&family=Lilita+One&display=swap");
      * {
      margin: 0 padding 0;
      box-sizing: border-box;
      font-family: "Alata";
      }
      body {
      height: 100vh;
      background-color: #eef0f0;
      background-size: cover;
      }
      li {
      list-style: none;
      }
      a {
      text-decoration: none;
      color: black;
      font-size: 1rem;
      }
      a:hover {
      color: #1f8c2d;
      }
      /*Header*/
      header {
      position: relative;
      padding: 0 2rem;
      }
      .navbar {
      width: 100%;
      height: 60px;
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      }
      .navbar .logo a {
      font-size: 1.5rem;
      font-weight: bold;
      }
      .navbar .links {
      display: flex;
      gap: 2rem;
      }
      section {
      color: black;
      }
      .nova {
      text-align: center;
      }
      .img {
      margin-top: 30px;
      margin-left: 50px;
      }
      .img-text {
      display: flex;
      }
      .text {
      margin-top: 30px;
      margin-left: 60px;
      }
      .text h3 {
      font-size: 1.5rem;
      }
      .media {
      margin-left: 50px;
      margin-top: -20px;
      }
      .icon p,
      .icon ul {
      display: inline;
      margin: 0;
      padding: 0;
      }
      .icon ul {
      list-style: none;
      }
      .icon li {
      display: inline-block;
      margin-left: 10px;
      }
      .icon p {
      font-size: 20px;
      }
      .media {
      margin-top: 2px;
      display: flex;
      }
      .media .name {
      font-size: 35px;
      font-weight: bold;
      }
      .media .icon img {
      width: 20px;
      }
      td {
      padding-right: 10px;
      }
      table {
      margin-top: 5px;
      margin-left: 45px;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="navbar">
        <div class="logo"><a href="#">Spyware</a></div>
        <ul class="links">
          <li><a href="Profile">Profile</a></li>
          <li><a href="Organization">Organization</a></li>
          <li><a href="School">School</a></li>
          <li><a href="Game">Game</a></li>
        </ul>
      </div>
    </header>
    <section>
      <h2 class="nova">Nova Profile</h2>
      <div class="img-text">
        <div class="img">
          <img src="Assets/Profile.jpeg" alt="Novaw" width="300px" height="300px" />
        </div>
        <div class="text">
          <h3>Profile</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus
            consectetur quas doloremque.
          </p>
          <h3>Organization</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
            neque, id minus fugiat repellendus ipsam a fuga rem quas natus quo
            expedita alias animi sit?
          </p>
          <p>
          <h3>Skils : </h3>
          HTML
          <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-info" style="width: 65%">65%</div>
          </div>
          CSS
          <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-success text-dark" style="width: 70%">70%</div>
          </div>
          JAVASCRIPT
          <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-warning text-dark" style="width: 40%">40%</div>
          </div>
          PHP
          <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar bg-danger" style="width: 35%">35%</div>
          </div>
          </p>
        </div>
      </div>
    </section>
    <section>
      <div class="media">
        <div class="icon">
          <p class="name">Ade Nova</p>
          <br />
          <p>Follow me on :</p>
          <ul>
            <li>
              <a href="https://www.instagram.com/onlyone_novv/"
                ><img src="Assets/instagram.png" alt="IG"
                /></a>
            </li>
            <li>
              <a href="https://www.facebook.com/profile.php?id=100031997303722"
                ><img src="Assets/facebook.png" alt="FB"
                /></a>
            </li>
            <li>
              <a href="https://youtube.com/@novaxy.995"
                ><img src="Assets/youtube.png" alt="YT"
                /></a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section>
      <table>
        <tr>
          <td>Profesion</td>
          <td>:</td>
          <td>Student in SMKN 1 Ciamis</td>
        </tr>
        <tr>
          <td>Experience</td>
          <td>:</td>
          <td>16 Years</td>
        </tr>
        <tr>
          <td>Phone</td>
          <td>:</td>
          <td>+6285861498751</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td>@nvaa</td>
        </tr>
      </table>
    </section>
    <br /><br /><br /><br /><br />
  </body>
</html>