<tab>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CNPJ/CPF</th>
        <th>Data Nasc.</th>
        <th>E-mail</th>
        <th>Fone</th>
        <th>Sexo</th>
        <th>Ação</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
    <tr>
        <td>{{ $client->id }}</td>
        <td>{{ $client->nome }}</td>
        <td>{{ $client->documento }}</td>
        <td>{{ $client->data_nasc }}</td>
        <td>{{ $client->email }}</td>
        <td>{{ $client->telefone }}</td>
        <td>{{ $client->sexo }}</td>
        <td>Açoes</td>
    </tr>
    </tbody>
</tab>