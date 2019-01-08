<html>
<head></head>
<body>
<h1>Criar novo cliente</h1>
<form method="POST" action="{{ route('clients.store') }}">
    {!! csrf_field() !!}
    <label for="name">Nome</label>
    <input type="text" name="name" id="name"/>
    <label for="age">Age</label>
    <input type="text" name="age" id="age"/>
    {{--  <label for="description">Descrição</label>
    <input type="text" name="description" id="description"/>  --}}
    <button type="submit">Enviar</button>
</form>
</body>
</html>