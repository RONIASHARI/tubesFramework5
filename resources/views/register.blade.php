<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: grey">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Register</h2>
                        <form id="registerForm">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div id="nameError" class="text-danger mt-1"></div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div id="emailError" class="text-danger mt-1"></div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <div id="passwordError" class="text-danger mt-1"></div>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password:</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                <div id="passwordConfirmationError" class="text-danger mt-1"></div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" style="background-color: black">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById("registerForm").addEventListener("submit", async function(event) {
            event.preventDefault(); // Prevent default form submission

            // Fetch form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const passwordConfirmation = document.getElementById('password_confirmation').value;

            // Validate form values
            if (!name || !email || !password || !passwordConfirmation) {
                alert("All fields are required");
                return;
            }

            if (password !== passwordConfirmation) {
                alert("Password and confirm password should match");
                return;
            }

            // Send POST request to API
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const response = await fetch("/api/register", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    name: name,
                    email: email,
                    password: password,
                    password_confirmation: passwordConfirmation
                })
            });

            const data = await response.json();
            if (response.ok) {
                alert('Registration successful! Your token: ' + data.access_token);
                window.location.href = '/'; // Redirect to home page
            } else {
                console.error('Error:', data);
                // Handle validation errors
                document.getElementById('nameError').innerText = '';
                document.getElementById('emailError').innerText = '';
                document.getElementById('passwordError').innerText = '';
                document.getElementById('passwordConfirmationError').innerText = '';

                // Display new errors
                if (response.status === 422) {
                    const errors = data.errors;
                    if (errors.name) {
                        document.getElementById('nameError').innerText = errors.name[0];
                    }
                    if (errors.email) {
                        document.getElementById('emailError').innerText = errors.email[0];
                    }
                    if (errors.password) {
                        document.getElementById('passwordError').innerText = errors.password[0];
                    }
                    if (errors.password_confirmation) {
                        document.getElementById('passwordConfirmationError').innerText = errors.password_confirmation[0];
                    }
                }
            }
        });
    </script>
</body>
</html>
