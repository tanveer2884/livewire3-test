<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Laravel News Podcast Player</title>
        <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    </head>
    <body class="min-h-screen bg-gray-50 font-sans text-black antialiased">
        <div class="mx-auto max-w-3xl px-6 py-24">
           

            <div class="py-10">
                {{ $slot }}
            </div>
        </div>

       
    </body>
</html>
