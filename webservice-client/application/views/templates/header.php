<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

  <title><?php echo $judul; ?>
  </title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a style="font-size: 30px;" class="navbar-brand" href="#"><strong>SevenSky</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div style="background-color: #DDDDDD; border-radius: 12px;" class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?= base_url(); ?>"><strong>Home</strong>
            <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa"><strong>Mahasiswa</strong></a>
          <a class="nav-item nav-link" href="<?= base_url(); ?>about"><strong>About</strong></a>
        </div>
      </div>
    </div>
  </nav>