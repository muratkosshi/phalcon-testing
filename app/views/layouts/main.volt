<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ title|default('My Phalcon App') }}</title>
</head>
<body>
    <header>
        {{ partial('layouts/nav') }} <!-- Шапка для навигации -->
    </header>

    <main>
        {{ content() }} <!-- Контент страниц -->
    </main>

    <footer>
        <p>&copy; <?= date("Y") ?> My Phalcon App</p>
    </footer>
</body>
</html>
