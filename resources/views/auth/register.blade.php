<!-- resources/views/register.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container col-6">
    <h2 class="mt-5">Register as an Idea Creator</h2>
    <form action="{{ route('idea_creators.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="profile_pic">Profile Picture</label>
            <input type="file" class="form-control" name="profile_pic" required>
        </div>
        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" class="form-control" name="full_name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <label for="phone_number1">Phone Number 1</label>
            <input type="text" class="form-control" name="phone_number1" required>
        </div>
        <div class="form-group">
            <label for="phone_number2">Phone Number 2</label>
            <input type="text" class="form-control" name="phone_number2">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" required>
        </div>
        <div class="form-group">
            <label for="education_status">Education Status</label>
            <textarea class="form-control" name="education_status" required></textarea>
        </div>
        <div class="form-group">
            <label for="about_me">About Me</label>
            <textarea class="form-control" name="about_me" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
</body>
</html>