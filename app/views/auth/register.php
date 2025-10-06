<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root {
        /* --- BLACK, BLUE, and WHITE COLOR PALETTE --- */
        /* Dark Blue/Black gradient for a deep background */
        --bg: linear-gradient(135deg, #0a192f 0%, #173356 50%, #29508d 100%);
        /* Semi-transparent black/dark blue for card background */
        --card-bg: rgba(0, 0, 0, 0.3);
        /* Vibrant Blue for primary accent color */
        --primary: #007bff; /* Standard Blue */
        /* Darker Blue for hover states */
        --primary-hover: #0056b3;
        /* Semi-transparent light blue for border/shadow */
        --border: rgba(0, 123, 255, 0.4);
        /* Pure White for primary text */
        --text: #ffffff;
        /* Lighter/Muted Blue for secondary text/hints */
        --muted: #a6c5f7;
        --radius: 10px;
        /* Semi-transparent black for input background */
        --input-bg: rgba(0, 0, 0, 0.2);
        /* Slightly lighter input background on focus */
        --input-focus: rgba(0, 0, 0, 0.4);
        /* Blue glow for shadows */
        --shadow: 0 3px 24px 0 rgba(0, 123, 255, 0.2);
        --shadow-lg: 0 6px 28px 0 rgba(0, 123, 255, 0.4);
        font-family: 'Inter', 'Segoe UI', system-ui, sans-serif;
        }

        body {
        margin: 0;
        background: var(--bg);
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        color: var(--text);
        }

        .container {
        width: 100%;
        max-width: 420px;
        padding: 16px;
        }

        .card {
        background: var(--card-bg);
        border: 1.5px solid var(--border);
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        padding: 32px 24px;
        backdrop-filter: blur(10px);
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 100%;
        max-width: 400px;
        }

        form {
        display: flex;
        flex-direction: column;
        gap: 16px;
        width: 100%;
        }

        .input-icon {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        }

        .input-icon i {
        position: absolute;
        left: 12px;
        font-size: 1em;
        color: var(--primary);
        }

        input {
        width: 100%;
        padding: 12px 16px 12px 40px; /* padding for icon */
        border-radius: var(--radius);
        border: 1.5px solid var(--border);
        background: var(--input-bg);
        color: var(--text);
        font-size: 0.95rem;
        box-sizing: border-box;
        }

        input:focus {
        outline: none;
        border-color: var(--primary);
        background: var(--input-focus);
        box-shadow: var(--shadow-lg);
        }

        /* Dropdown styling with custom arrow */
        .role-select {
        width: 100%;
        padding: 12px 40px 12px 16px; /* space for arrow on right */
        border-radius: var(--radius);
        border: 1.5px solid var(--border);
        background-color: var(--input-bg);
        color: var(--text);
        font-size: 0.95rem;
        text-align: left; /* text on left */
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        cursor: pointer;
        position: relative;
        }

        .role-select:focus {
        outline: none;
        border-color: var(--primary);
        background: var(--input-focus);
        box-shadow: var(--shadow-lg);
        }

        /* Custom arrow only for dropdown */
        .role-select-wrapper {
        position: relative;
        }

        .role-select-wrapper::after {
        content: '\f078'; /* FontAwesome chevron-down */
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: none;
        color: var(--primary);
        }

        .role-select option {
        /* Dark background for dropdown options for contrast */
        background-color: #173356;
        color: var(--text);
        }

        .show-btn {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        color: var(--primary);
        font-weight: 600;
        cursor: pointer;
        font-size: 0.9rem;
        }

        button.submit {
        /* Blue gradient for the submit button */
        background: linear-gradient(90deg, #0056b3, #007bff, #3399ff);
        color: #fff;
        padding: 12px 18px;
        border: none;
        border-radius: var(--radius);
        font-size: 0.95rem;
        font-weight: 700;
        cursor: pointer;
        box-shadow: var(--shadow);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        position: relative;
        }

        button.submit:hover {
        transform: translateY(-2px);
        background: var(--primary-hover);
        box-shadow: var(--shadow-lg);
        }

        p.hint {
        color: var(--muted);
        text-align: center;
        margin-top: 0.9rem;
        font-size: 0.9rem;
        }

        p.hint a {
        color: var(--primary);
        font-weight: 600;
        text-decoration: none;
        }

        p.hint a:hover {
        color: var(--primary-hover);
        text-decoration: underline;
        }

        h1 {
        text-align: center;
        margin-bottom: 20px;
        }
    </style>
    </head>
    <body>
    <div class="container">
        <div class="card" role="region" aria-label="Register form">
        <h1>CREATE ACCOUNT</h1>
        <form method="post">
            <!-- Username -->
            <div class="input-icon">
            <i class="fa fa-user"></i>
            <input type="text" name="username" placeholder="Username" required>
            </div>

            <!-- Password -->
            <div class="input-icon relative">
            <i class="fa fa-lock"></i>
            <input type="password" id="register-password" name="password" placeholder="Password" required>
            <button type="button" onclick="togglePassword('register-password', this)" class="show-btn">Show</button>
            </div>

            <!-- Role -->
            <div class="input-icon role-select-wrapper">
            <select name="role" required class="role-select">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            </div>

            <!-- Register button -->
            <button type="submit" class="submit">REGISTER</button>
        </form>

        <p class="hint">
            Already have an account? 
            <a href="<?= site_url('auth/login') ?>">Login</a>
        </p>
        </div>
    </div>

    <script>
        function togglePassword(id, btn) {
        const input = document.getElementById(id);
        if (!input) return;
        if (input.type === 'password') {
            input.type = 'text';
            btn.textContent = 'Hide';
        } else {
            input.type = 'password';
            btn.textContent = 'Show';
        }
        }
    </script>
</body>
</html>
