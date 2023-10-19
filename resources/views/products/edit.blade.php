<form action="{{route('products.update',$product->id)}}" method="POST">
    @method("PUT")
    @csrf
    <div>
        <label>Nome do produto:</label>
        <input type="text" name="nome" value="{{ $product->nome }}">
    </div>
    <div>
        <label>Descrição:</label>
        <input type="text" name="descriacao" value="{{ $product->descriacao }}">
    </div>
    <div>
        <label>Preço:</label>
        <input type="text" name="preco" value="{{ $product->preco }}">
    </div>    

    <div>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->nome}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Salvar</button>
</form>