<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 m-auto mt-5 bg-white shadow font-monospace border border-info">
                <p class= "text-warning fs-3 fw-bold  text-center my-3">User Register</p>
                <form action="inserts.php" class="" method="POST">
                    <div class="mb-3">
                        <label for="" class="">UserName</label>
                        <input type="text" name="name" placeholder="Enter user name" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label for="" class="">UserEmail</label>
                        <input type="email" name="email" placeholder="Enter user email" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label for="" class="">UserNumber</label>
                        <input type="number" name="number" placeholder="Enter user number" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label for="" class="">UserPassword</label>
                        <input type="password" name="password" placeholder="*************************" class="form-control">

                    </div>
                    <div class="mb-3">
                    <button class="w-100 bg-danger fs-4 text-white" name="submit">REGISTER</button>

                </div>
                
                    <div class="mb-3">
                    <button class="w-100 bg-warning fs-4 text-white"><a href="user-login.php" class="text-decoration-none text-white">ALREADY ACCOUNT</a></button>
                    
                </div>
                </form>
            </div>
        </div>
    </div>

    
    
</body>
</html>