<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name=$_POST["name"];
    $email=$_POST["email"];
    $user=$_POST["user"];
    $pass=password_hash ($_POST["pass"],PASSWORD_BCRYPT);

    $sql =$conn->prepare("insert into manager values(?,?,?,?)");
    $sql->bind_param("ssss",$name,$email,$user,$pass);

    if ($sql->execute()) {
        header("Location:project_login.php");
    }
}



?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
        
        </header>
        <main>
            <h1 class="text-center my-4">Register</h1>
            <div
                class="container col-5 shadow bordered rounded p-4"
            >
            <form action="" method="post">
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Full Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="email"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="user"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                        type="password"
                        class="form-control"
                        name="pass"
                        id="formId1"
                        placeholder=""
                    />
                    <label for="formId1">Password</label>
                </div>
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Register
                </button>
                
                
                
                
                

            </form>
                
            </div>
            


        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
