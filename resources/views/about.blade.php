<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Haidarsite | About</title>

  @vite('resources/css/app.css')
</head>
<body>
  <h1>Halaman About</h1>

  <h3><?= $name; ?></h3>
  <h3><?= $email; ?></h3>
  <img src="<?= $img_uri; ?>" alt="<?= $name; ?>">

  {{-- javascript --}}
  @vite('resources/js/app.js')
</body>
</html>