<!DOCTYPE html>
<html>
<head>
    <title>Výsledok</title>
</head>
<body>

<h1>Prvých 10 Fibonacci čísel od n = {{ $n }}</h1>

<ul>
    @foreach ($sequence as $number)
        <li>{{ $number }}</li>
    @endforeach
</ul>

<a href="/example/create">Späť</a>

</body>
</html>
