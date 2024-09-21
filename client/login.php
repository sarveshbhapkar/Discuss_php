<div class="container">
<h1 class="heading">Login</h1>


<form action="./server/requests.php" method="post">
  

  <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
    <label for="email">User email</label>
    <input type="email" name="email" class="form-control" id="email"  placeholder="Enter user email">
  </div>

  <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
    <label for="password">User Password</label>
    <input type="password" name="password" class="form-control" id="password"  placeholder="Enter user password">
  </div>


    <div class="sm-3 col-6 offset-sm-3 mt-2 margin-bottom-15">
    <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>
  
</form>

</div>