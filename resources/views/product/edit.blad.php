<form action="{{ url('product/'.$product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $pokemon->name }}" required>
    <input type="text" name="price" placeholder="Price" value="{{ $pokemon->type }}" required>
    <input type="number" name="amount" placeholder="Amount" value="{{ $pokemon->strenght }}" required>
    <button type="submit">Update Product</button>
</form>
