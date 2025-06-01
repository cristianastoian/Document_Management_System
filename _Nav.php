<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .navbar {
            margin-bottom: 20px;
        }
        .logo {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .logo:hover {
    color:rgb(243, 109, 158); 
}
        
        .nav-link {
    color: white !important; 
    transition: color 0.3s ease-in-out;
}

.nav-link:hover {
    color:rgb(243, 109, 158) !important; /
}


    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: grey;">

        <a class="navbar-brand logo" href="index.php">DOC MANAGEMENT <i class="fas fa-cloud-upload-alt"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="upload_form.php"><i class="fas fa-upload"></i> Upload File</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="view_files.php"><i class="fas fa-file-alt"></i> View Files</a>
                </li>
            </ul>
        </div>
    </nav>

   
</body>
</html>