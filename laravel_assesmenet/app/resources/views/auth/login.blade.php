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
      <h1>Please Login</h1>
      <form method="POST">
        @csrf
        <div class="form-control">
          <input type="text" name="email" id="email" required>
          <label>Email</label>

        </div>

        <div class="form-control">
          <input type="password" name="password" id="password"  required>
          <label>Password</label>
        </div>

        <button class="btn">Login</button>

        <p class="text">Don't have an account? <a href="register">Register</a> </p>
      </form>
    </div>
    <script src="auth.js"></script>
  </body>
</html>
