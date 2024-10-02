<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piesakies webināram!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <script src="app.js"></script>
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

    <div class="max-w-lg mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Piesakies webināram!</h1>
        <form action="confirmation.php" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block font-medium">Vārds:</label>
                <input type="text" id="name" name="name" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>
            
            <div>
                <label for="email" class="block font-medium">E-pasts:</label>
                <input type="email" id="email" name="email" required class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            </div>
            
            <div>
                <label for="level" class="block font-medium">Kursa līmenis:</label>
                <select id="level" name="level" class="mt-1 p-2 border border-gray-300 rounded-md w-full">
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                </select>
            </div>

            <div>
                <p class="font-medium">Vai vēlies saņemt info par citiem pasākumiem?</p>
                <div class="flex items-center space-x-4">
                    <div>
                        <input type="radio" id="yes" name="info" value="Yes" required class="mr-1">
                        <label for="yes">Yes</label>
                    </div>
                    <div>
                        <input type="radio" id="no" name="info" value="No" class="mr-1">
                        <label for="no">No</label>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">Pieteikties</button>
            </div>
        </form>

        <h2 class="text-xl font-semibold mt-8">Jau reģistrējušies:</h2>
        <ul class="mt-4 space-y-2">
            <?php
            $users = [
                ["name" => "Jānis Bērziņš", "email" => "janis@berzins.com", "level" => "Intermediate"],
                ["name" => "Marta Liepa", "email" => "marta@liepa.com", "level" => "Advanced"],
                ["name" => "Gatis Ozols", "email" => "gatis@ozols.com", "level" => "Beginner"]
            ];

            foreach ($users as $user) {
                echo "<li class='border-b border-gray-300 py-2'>Vārds: {$user['name']}, E-pasts: {$user['email']}, Līmenis: {$user['level']}</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
