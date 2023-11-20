<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create-admin</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.1/examples/album/"
    />
  </head>
  <style>
    .rawr {
      display: flex;
      justify-content: center;
      list-style-type: none;
      gap: 2rem;
    }
    .wrap-li {
      border: 1px solid black;
      padding: 20px;
      border-radius: 10px;
    }
  </style>
  <body>
    <h2 class="text-center" style="margin: 20px 0px 30px 0px">
      Input The New Game
    </h2>
    <div class="container">
      <form method="post" action="upload.php" enctype="multipart/form-data">
        <ul class="rawr">
          <li class="wrap-li">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Nama Game"
                name="namaGame"
              />
            </div>
            <div class="mb-3">
              <label for="tGame"> Thumbnail Game </label>
              <input
                type="file"
                class="form-control"
                id="tGame"
                placeholder="Thumbnail Game"
                name="thGame"
              />
            </div>
            <div class="mb-3">
              <textarea name="deskGame" id="" cols="30" rows="5" class="form-control">Deskripsi Game</textarea>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Harga" name="harga"/>
            </div>
            <footer class="text-center" style="font-size: 14px">
              <p>Copyright By @Nvaaa</p>
            </footer>
            <div class="text-end">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </li>
        </ul>
      </form>
    </div>
  </body>
</html>
