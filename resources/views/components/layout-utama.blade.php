<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bowlé</title>
    <link rel="stylesheet" href="../../public/assets/style.css" />
</head>

<body>
    <header>
        <h2>Bowlé</h2>
        <x-navbar></x-navbar>
    </header>

    {{ $slot }}
    <x-footer></x-footer>
    <script src="../../public/assets/script.js"></script>
</body>

</html>
