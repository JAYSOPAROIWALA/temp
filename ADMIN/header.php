<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
         .navbar {
             background: #000000
            }

            .nav-item::after {
                content: '';
                display: block;
                width: 0px;
                height: 2px;
                background: #ffffff;
                transition: 0.4s
            }

            .nav-item:hover::after {
                width: 100%
            }

            .navbar-dark .navbar-nav .active>.nav-link,
            .navbar-dark .navbar-nav .nav-link.active,
            .navbar-dark .navbar-nav .nav-link.show,
            .navbar-dark .navbar-nav .show>.nav-link,
            .navbar-dark .navbar-nav .nav-link:focus,
            .navbar-dark .navbar-nav .nav-link:hover {
                color: #ffffff
            }

            .nav-link {
                padding: 25px 5px;
                transition: 0.2s
            }
            
            body{
                background-color:grey;
            }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark"> <button class="navbar-toggler" type="button" data-target="#navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active"> <a href="home.php" class="nav-link"> Home </a> </li>
                <li class="nav-item"> <a href="add_event.php" class="nav-link">Add Event </a> </li>
                <li class="nav-item"> <a href="man_event.php" class="nav-link"> Manage Event </a> </li>
                <li class="nav-item"> <a href="logout.php" class="nav-link"> Logout </a> </li>
            </ul>
        </div>
    </nav>
</body>
</html>