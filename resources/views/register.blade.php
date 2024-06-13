<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>Register</h1>
    <form id="registerForm">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <div id="nameError" style="color: red"></div>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <div id="emailError" style="color: red"></div>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <div id="passwordError" style="color: red"></div>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
            <div id="passwordConfirmationError" style="color: red"></div>
        </div>
        <button type="submit" id="registerButton">Register</button>
    </form>

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
