<!DOCTYPE html>
<html lang="en">

<head>
    <title>Super Gestão - @yield('titulo')</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
</head>

<body>
    @include('site.layout._partials.topo'){{--cabeçalho--}}
    @yield('conteudo'){{--conteudo da página logo em seguida--}}
    {{--yield chama a section--}}
</body>

</html>