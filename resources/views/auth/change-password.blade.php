<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        width: 400px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    .form-group label {
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div class="card">
        <h4 class="text-center">Changes Password</h4>

        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif


        <form method="POST" action="{{ route('change.password') }}">
            @csrf
            <div class="form-group">
                <label for="old_password">Old Password:</label>
                <input type="password" id="old_password" name="old_password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="new_password_confirmation" class="form-control"
                    required>
            </div>
            <button type="submit" class="btn text-white" style="background-color: #294165;">Change Password</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    function checkPasswordMatch() {
        var newPassword = document.getElementById("new_password").value;
        var confirmPassword = document.getElementById("confirm_password").value;

        if (newPassword !== confirmPassword) {
            document.getElementById("password_match_message").innerHTML = "Passwords do not match";
        } else {
            document.getElementById("password_match_message").innerHTML = "";
        }
    }
    </script>
</body>

</html>