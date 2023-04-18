<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="auth.css" />
    <title>Form Input Wave</title>
  </head>
  <body>
    <div class="container">
      <h1>Please Register </h1>
      <form method="post">
        @csrf
        <div class="form-control">
            <input type="text" name="name" id="name"  required>
            <label>Name</label>
          </div>
        <div class="form-control">
          <input type="text" name="email" id="email"  required>
          <label>Email</label>
        </div>

        <div class="form-control">
          <input type="password" name="password" id="password" required>
          <label>Password</label>
        </div>

        <button class="btn">Login</button>

        <p class="text">already have account? <a href="login">Login</a> </p>
      </form>
    </div>
    <script src="auth.js"></script>
  </body>
</html>
