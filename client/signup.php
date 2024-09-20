<div class="container">
<h1 class="heading">Sign up</h1>


<form method="post" action="./server/requests.php">
  <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
    <label for="username">User Name</label>
    <input type="text" name="username" class="form-control" id="username"  placeholder="Enter user name">
  </div>

  <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
    <label for="email">User email</label>
    <input type="email" name="email" class="form-control" id="email"  placeholder="Enter user password">
  </div>

  <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
    <label for="password">User Password</label>
    <input type="password" name="password" class="form-control" id="password"  placeholder="Enter user password">
  </div>

  <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
    <label for="address">User address</label>
    <input type="address" name="address" class="form-control" id="address"  placeholder="Enter user address">
  </div>

    <div class="sm-3 col-6 offset-sm-3 mt-2 margin-bottom-15">
    <button type="submit" name="signup" class="btn btn-primary">sign up</button>
    </div>
  
</form>

</div>