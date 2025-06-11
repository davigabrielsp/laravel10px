<div>
    <h1>Criar</h1>
        <a href="{{ route(name: 'contas.index') }}">VOLTAR</a><br>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <span style="color: crimson">{{ $error }}</span><br>
            @endforeach
        @endif

        <form action="{{ route('contas.store') }}" method="post">
            @csrf
            <input type="text" name="nome" id="" placeholder="nome" value="{{ old('nome') }}"><br>
            <input type="text" name="valor" id="" placeholder="valor" value="{{ old('valor') }}"><br>
            <input type="text" name="vencimento" id="" placeholder="vencimento" value="{{ old('vencimento') }}">
            <input type="submit" value="SALVAR">
        </form>

</div>
