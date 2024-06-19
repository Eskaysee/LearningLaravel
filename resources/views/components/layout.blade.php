<!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1.0">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>firstLarProj</title>
    </head>
    <body>
    <nav>
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/contact">Contact</x-nav-link>
        <x-nav-link href="/about">About</x-nav-link>
    </nav>
    <?php echo $slot ?>
    </body>
</html>
