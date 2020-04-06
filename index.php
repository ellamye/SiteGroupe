<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>SiteGroupe</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
            <a class="navbar-brand" href="#">SiteGroupe</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">A propos</a>
                </li>
                
                </ul>
            </div>
        </nav>

        <section style="min-height: 90vh;">

        <h1 class="col-md-8 mx-auto display-4 text-center text-info mt-3">J'ai pas d'inspi</h1>

        <form method="post" class="col-md-6 mx-auto mt-4">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <legend class="col-form-label">Ce temps est-il déprimant?</legend>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Oui</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Oui</label>
                </div>
            </div>
            <div class="form-group">
                <label for="message">Ajouter un message</label>
                <textarea class="form-control" name="message" id="message" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Envoyer</button>
        </form>


        </section>

        <footer class="bg-warning text-center p-3 text-white">
            &copy 2020 - SiteGroupe
        </footer>
    </div>
</body>
</html>