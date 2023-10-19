<ul>
    <li><h1> {{ $product->nome }}</h1></li>
    <li>Descricao: {{ $product->descriacao }}</li>
    <li>Preço: R$ {{ $product->preco }}</li>
    <li>Categoria: {{ $product->Category->nome }}</li>
</ul>
<Form action="{{route('products.destroy',$product->id)}}" method="POST">
@method('delete')
@csrf
<button type="submit">Excluir Produto</button>
</Form>

<a href="{{route('products.index')}}">
<button>Voltar para o menu</button>
</button>
</a>
