<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Annonceo</title>
</head>
<body>
    <!--header-->
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#index.php">Annonceo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Présentation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Contact</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="Recherche" placeholder="Recherche" aria-label="Recherche">
              <button class="btn btn-outline-success" type="submit">Recherche</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!--main-->
    <main class="container">
    <div class="btn-group-sm">
      <h1>GESTION DES CATEGORIES</h1>
                    <a href="#read_categorie.php" class="btn btn-primary" role="button">Read categorie</a>
                    <a class="btn btn-success" href="insert_categorie.php">Create categorie</a>
                    <a href="update_categorie.php?id=<?=$value['id_categorie']?>" class="btn btn-warning"
                        role="button">Update categorie</a>
                    <a href="delete_categorie.php?id=<?=$value['id_categorie']?>" class="btn btn-danger"
                        role="button">Delete categorie</a>
                </div>
    </main>
    <!--footer-->
    <footer>

    </footer>
</body>
</html>