<!DOCTYPE html>
    <html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Aulab Post</title>
        @vite(['resources/css/app.css'])
    </head>
    <body>
        <header>
            <x-navbar />
        </header>
        {{ $slot }}
    </body>
</html>
