<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css?v={{ time() }}">
</head>

<body>
    <header>Full Stack Developer - PT Informatika Media Pratama - Ilham Rahmat Akbar</header>
    @if (Session::has('success'))
        <script>
            alert('task success')
        </script>
    @endif
    <main>
        @yield('container')
    </main>
    <footer></footer>
</body>

</html>
