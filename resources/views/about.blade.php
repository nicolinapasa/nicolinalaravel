<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>About Nicolina</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
                <h5><a class="nav-link active" href="#">About</a></h5>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contacts">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
          </ul>
        </div>
      </nav>
      <h1>Bun brat, hai davai</h1>
      <img width="600px" height="500px" src="https://www.sauto.md/media/images/upload/car/5531/6512/10031/med/5ade93fd72.webp" alt="">
      <section class="container-fluid p-5">
        <ul class="list-group list-group-horizontal">
            @foreach($groups as $group)
                <li>{{$group}}</li>
            @endforeach
        </ul>
        </section>
</body>
</html>
