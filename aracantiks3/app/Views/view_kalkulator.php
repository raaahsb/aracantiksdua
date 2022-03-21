<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Kalkulator Sederhana</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <script src="https://kit.fontawesome.com/dc9e30b9fe.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg">
    <div class="container-fluid">
      <a class="navbar-brand nav-link none">Sahara Hasibuan <br> 20.01.013.067</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
  </nav>

  <div class="contaner-fluid banner">
    <div class="container text-center pt-5 pb-5">
      <h1>Kalkulator Sederhana</h1>
      <form method="post" action="/Kalkulator/hasil">
        <input name="number1" type="text" class="form-control" style="width: 150px; display: inline " />
        <select name="operation">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
        </select>
        <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
        <input name="submit" type="submit" value="Hasil" class="btn btn-primary" />
      </form>
    </div>
  </div>






</body>

</html>