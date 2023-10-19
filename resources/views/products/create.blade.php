<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div>
        <label>Nome do produto:</label>
        <input type="text" name="nome">
    </div>
    <div>
        <label>Descrição:</label>
        <input type="text" name="descriacao">
    </div>
    <div>
        <label>Preço:</label>
        <input type="text" name="preco">
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