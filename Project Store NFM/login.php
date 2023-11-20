<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
  crossorigin="anonymous"
  />
<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="styletest.css" />
  </head>
  <body>
    <section>
      <div class="wrap">
        <form action="login_proses.php" method="post">
          <ul class="login-section">
            <li class="item-section aside">
              <img
                src="https://i.pinimg.com/originals/43/83/e6/4383e6d479717ff2347d5d0986fef11b.jpg"
                alt=""
                width="100%"
                height="100%"
                style="object-fit: cover"
              />
            </li>
            <li class="item-section main">
              <ul class="login-section flex-column">
                <li class="flex-column img-login">
                  <img src="Assets/login-logo.svg" alt="" width="85px" />
                  <label for="img-login">Game Center NFM Admin</label>
                  <input
                    type="file"
                    name=""
                    id="img-login"
                    class="inp-field inp-img"
                  />
                </li>
                <li>
                  <input
                    type="text"
                    name="username"
                    id="username"
                    class="inp-field"
                    placeholder="Username"
                  />
                </li>
                <li>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    class="inp-field"
                    placeholder="Password"
                  />
                </li>
                <ul class="login-section text-end">
                  <li>
                    <a href="index.php">Just Want To Buy A Game ?</a>
                  </li>
                </ul>
                <ul class="login-section text-end" style="margin-left: 249px">
                  <li>
                    <button type="submit" name="submit" style="padding: 0px 10px 0px 10px" class="btn-submit">Submit</button>
                  </li>
                </ul>
              </ul>
            </li>
          </ul>
        </form>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
