<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Restorani.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Pocetna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Restorani</a>
            </li>


          </ul>

          <ul class="navbar-nav pull-right">
            <li class="nav-item">
              <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sign Up</a>
            </li>


          </ul>

        </div>
      </div>


    </nav>


    <div class="container">
      <h1>Pretrazi restorane!</h1>
      <form class="" action="" method="get">
        <div class="form-group row">
          <input type="text" name="pretraga" value="" class="form-control col-md-11">
          <button type="button" name="button" class="btn btn-primary col-md-1">Pretraga</button>
        </div>

        <div class="form-group row">
          <select class="form-control filter-combo col-md-3" name="filter-rating">
            <option value="1">Opcija</option>
          </select>
          <select class="form-control filter-combo col-md-3" name="filter-cena">
            <option value="1">Opcija</option>
          </select>
          <select class="form-control filter-combo col-md-3" name="filter-opstina">
            <option value="1">Opcija</option>
          </select>
          <select class="form-control filter-combo col-md-3" name="filter-kategorija">
            <option value="1">Opcija</option>
          </select>
        </div>

      </form>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  </body>
</html>
