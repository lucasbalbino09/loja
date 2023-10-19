<h1>Lista de todos os produtos</h1>
<h2>Aqui é a index de produto</h2>

@foreach ($products as $produto)
    <ul>
        <li>{{$produto -> nome}}</li>
    </ul>
@endforeach

<a href="{{route('products.edit', $produto->id)}}">
    <button>Voltar para o menu</button>
</button>
</a>
<a href="{{route('products.create')}}">Cadastrar novo produto</a>

