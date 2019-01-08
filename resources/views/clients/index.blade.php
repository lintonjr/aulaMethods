<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula</title>
</head>
<body>
    <h1>Listar dados</h1>
    <a href="{{ route('clients.create') }}">Novo cliente</a>
    <table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Descriçãp</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->age }}</td>
                <td>{{ $client->description }}</td>
                <td>
                    <a href="{{ route('clients.edit', $client->id) }}">Editar</a> |
                    <a href="">Excluir</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>