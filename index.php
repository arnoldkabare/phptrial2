<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Contact Form with php mailer</h2>
		<form method="post" action="email.php">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="email">Enter your email</label>
    <input type="email"  name="email"class="form-control" id="email" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="message">Write something</label>
    <textarea id="message" name="message" class="form-control"></textarea>
  </div>
 
  <button type="submit"  name="submit" class="btn btn-primary">Send Email</button>
</form>
	</div>
</body>
</html>