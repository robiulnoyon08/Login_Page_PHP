<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>singup-page</title>
</head>
<body>
    <section id="Log in">
        <div class="min-h-screen flex items-center justify-center">
            <form class="bg-slate-500 p-20 rounded-xl" method="post" action="./Handelar.php">
                <div class=" flex items-center justify-between">
                    <h1 class="text-white text-xl font-bold">Log in</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fafafa" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg>
                </div>
                <button class="w-full flex items-center justify-center gap-2 my-2 text-white font-bold text-lg border-2 p-2">
                    <i class="fa-brands fa-google"></i>
                    Sing up with Google
                </button>
                <div>
                    <label class="text-white text-xl font-bold block">email</label>
                    <input class="bg-slate-500 w-full border-2 my-2 p-2" type="text" name="email" placeholder="Enter Your Email Address">
                </div>
                <div>
                    <label class="text-white text-xl font-bold block">password</label>
                    <input class="bg-slate-500 w-full border-2 my-2 p-2" type="password" name="password" placeholder="At least 8 characters">
                </div>
                <div class="flex gap-2 my-2">
                    <input type="checkbox" name="remember">
                    <h1 class="text-white text-xl font-bold">Remember Me</h1>
                </div>
                <button type="submit" name="login" class="bg-lime-500 w-full block text-white text-xl font-bold border py-2 px-20">Log in</button>
                <div class="border-2 my-4"></div>
                    <h1 class="text-white text-center mt-2">Don't have an account?</h1>
                    <h1 class="text-lime-300 text-center font-bold">Sing up</h1>
            </form>
        </div>
    </section>
</body>
</html>