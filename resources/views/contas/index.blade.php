<div>
    <h1>Contas</h1>
    <a href="{{ route(name: 'contas.index') }}">LISTAS</a><br>
    <a href="{{ route('contas.create') }}">NOVO</a><br>

    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif
    <table>
        <thead>
            <th>Nome</th>
            <th>Valor</th>
            <th>Vencimento</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($contas as $conta)
                <td>{{ $conta->nome }}</td>
                <td>{{ number_format($conta->valor, 2,',', '.') }}</td>
                <td>{{ \Carbon\Carbon::parse($conta->vencimento)->tz('America/Sao_Paulo')->format('d/m/Y') }}</td>
                <td><a href="{{ $conta->id }}">Visualizar</a></td>
            @endforeach
        </tbody>
    </table>
</div>
