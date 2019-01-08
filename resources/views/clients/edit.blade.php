<html>
<head></head>
<body>
<h1>Editar cliente</h1>
<form method="post" action="{{ route('clients.update', $client->id) }}">
    {{ method_field('put') }}
    {!! csrf_field() !!}
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{$client->name}}"/>
    <label for="age">Idade</label>
    <input type="text" name="age" id="age" value="{{$client->age}}"/>
    <label for="description">Descrição</label>
    <input type="text" name="description" id="description" value="{{$client->description}}"/>
    <button type="submit">Enviar</button>
</form>
</body>
</html>