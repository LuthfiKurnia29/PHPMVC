<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TES PT ESBI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/style.css">
</head>
<body>
<!-- <form action="/createUser" method="POST">
    <input type="text" name="name" placeholder="Nama">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Simpan</button>
</form> -->
<form action="/createUser" method="post" >
<div class="card mt-8">
  <div class="row g-0 p-4">
    <div class="col-md-4 text-center">
      <img src="https://images.unsplash.com/photo-1651965955880-3c3555fa1e23?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fHw%3D" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title text-center" style="font-size:xx-large; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Sign Up</h5>
        <div class="">
        <input type="text" name="name" class="form-control mb-3 mt-3" id="exampleFormControlInput1" placeholder="Name">
        <input type="email" name="email" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Email Address">
        <input type="password" name="password" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Password">
        <div class="text-center mt-3">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
        <label class="form-check-label" for="flexCheckChecked">
            I agree all statement in <a href="" style="text-decoration: none;">Terms & Conditions</a>
        </label>
        </div>
        <div class="row mt-4">
            <div class="col-6 d-grid">
                <button button type="submit" class="btn btn-primary mx-auto px-5">Sign Up</button>
            </div>
            <div class="col-6 d-flex gap-2 text-center align-items-center">
                <h6>Already have account?</h6><a href="" style="text-decoration: none;"><h6>Login</h6></a>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>