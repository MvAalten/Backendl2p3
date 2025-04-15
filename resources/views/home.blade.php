<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Website</title>
</head>
<body>
    <div class="border-[3px] border-black">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" placeholder="name">
            <input type="text" placeholder="email">
            <input type="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>
</body>
</html>
