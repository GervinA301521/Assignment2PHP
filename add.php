<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
</head>
<body>
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
          <li class="nav-item"><a href="login.php" class="nav-link">Log In</a></li>
          <li class="nav-item"><a href="signup.html" class="nav-link">Sign Up</a></li>
          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>

        <style>

.signUpContainer{
    margin-left: 50px;
    margin-top: 30px;
} 
        </style>
      </header>
<div class="signUpContainer">
    <h1>Add User</h1>
<br><br>
    
    
    <form action="process-signup.php" method="post" id="signup" novalidate>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <br>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <br>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
        <br>
        <div>
            <label for="password_confirmation">Repeat password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        <br>
        <div>
            <label for="mobile">Mobile Number:</label>
            <input type="mobile" id="mobile" name="mobile">
        </div>
        <br>
        <div>
            <label for="gender">Gender:</label>
            <input type="gender" id="gender" name="gender">
        </div>

        <div class="upload-container">
        <h3>Upload Picture</h3>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="file" accept="image/*">
            <button type="submit" name="upload">Upload</button>
        </form>
        
    </div>
        <br>
        <button>Sign up</button>
    </form>

    </div>
<br><br><br><br><br><br><br><br><br><br>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>
    
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        </a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="signup.html" class="nav-link px-2 text-body-secondary">Sign Up</a></li>
          <li class="nav-item"><a href="login.php" class="nav-link px-2 text-body-secondary">Log in</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  

</body>
</html>
