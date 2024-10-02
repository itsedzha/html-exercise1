<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/kTc6cC8yZfXcm9M+ZT1dzp9vsMnxkCX+Qv5zLzX5L5vo9Tf/bbywr1lfqilNle/Xv7i5g1eyRa9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 text-gray-900">

    <nav class="bg-blue-600 p-4 text-white flex justify-center space-x-8">
        <a href="index.php" class="hover:underline flex items-center">
            <i class="fas fa-home mr-2"></i> Home
        </a>
        <a href="blog.php" class="hover:underline flex items-center">
            <i class="fas fa-blog mr-2"></i> Blog
        </a>
    </nav>

    <div class="max-w-lg mx-auto mt-20 p-6 bg-white shadow-lg rounded-lg text-center">
        <h1 class="text-2xl font-bold text-green-500 mb-6">Paldies par reģistrāciju!</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            echo "<p class='text-lg text-gray-700'>{$name}, Jūs esat veiksmīgi reģistrējušies webināram ar e-pastu <span class='font-semibold'>{$email}</span>.</p>";
        }
        ?>
    </div>
</body>
</html>
