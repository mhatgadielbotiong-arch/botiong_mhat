<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&display=swap" rel="stylesheet">

  <style>
    /*
     * Black: #000000 (true black)
     * Dark Blue (Background/Base): #0a192f (a deep, dark navy/almost black)
     * White/Light (Text/Foreground): #ffffff (true white)
     * Accent Blue: #007bff (a standard, vibrant blue) or #1e90ff (Dodger Blue)
     * Darker Accent Blue (Hover): #0056b3
     */
    body {
      font-family: 'Rajdhani', sans-serif;
      /* Dark blue/almost black background */
      background: #0a192f;
      /* White text */
      color: #ffffff;
    }
    .valorant-btn {
      /* Vibrant blue background */
      background: #007bff;
      /* White text */
      color: #ffffff;
      padding: 10px 20px;
      border-radius: 0.5rem;
      font-weight: bold;
      letter-spacing: 1px;
      transition: all 0.3s;
    }
    .valorant-btn:hover {
      /* Darker blue for hover */
      background: #0056b3;
      /* Blue glow on hover */
      box-shadow: 0 0 10px #007bff;
      transform: scale(1.05);
    }
    table {
      width: 100%;
      border-collapse: collapse;
      overflow: hidden;
      border-radius: 0.5rem;
    }
    th {
      /* Accent blue for table headers */
      background: #007bff;
      /* White text for headers */
      color: #ffffff;
      text-transform: uppercase;
      font-weight: bold;
      padding: 12px;
    }
    td {
      padding: 12px;
      /* Very dark gray/off-black for table cells, contrasts with body background */
      background: #1c2533;
      /* Lighter blue border for separation */
      border-bottom: 1px solid #334466;
    }
    tr:hover td {
      /* Slightly lighter shade of dark blue/gray on row hover */
      background: #25334a;
      transition: 0.3s;
    }
  </style>
</head>
<body class="p-6">

  <!-- User Info -->
  <div class="mb-6 text-center">
    <h1 class="text-5xl font-bold tracking-widest text-[#ff4655]">
      STUDENTS DASHBOARD
    </h1>
    <p class="mt-2 text-lg">Welcome, <span class="font-bold"><?= $this->call->library('session');
('username') ?></span></p>
    <p class="text-gray-400">Role: <?= $this->call->library('session');
('role') ?></p>
  </div>

  <!-- Search Bar -->
  <form method="get" action="<?=site_url('/students')?>" class="mb-6 flex justify-center">
    <input 
      type="text" 
      name="q" 
      value="<?=html_escape($_GET['q'] ?? '')?>" 
      placeholder="Search student..." 
      class="px-4 py-2 w-64 rounded-l-md focus:outline-none bg-[#1c252f] border border-gray-700 text-white placeholder-gray-400">
    <button type="submit" class="valorant-btn rounded-r-md">🔍</button>
  </form>

  <!-- Container -->
  <div class="max-w-5xl mx-auto bg-[#131a22] p-6 rounded-xl shadow-lg">
    <table>
      <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
      <?php foreach(html_escape($students) as $student): ?>
      <tr>
        <td><?= $student['id']; ?></td>
        <td><?= $student['first_name']; ?></td>
        <td><?= $student['last_name']; ?></td>
        <td><?= $student['email']; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>

    <!-- Pagination + Logout -->
    <div class="mt-6 flex justify-between items-center">
      <div class="pagination flex space-x-2 text-[#ff4655] font-bold">
        <?=$page ?? ''?>
      </div>
      <a class="valorant-btn" href="<?=site_url('auth/logout');?>">Logout</a>
    </div>
  </div>

</body>
</html>