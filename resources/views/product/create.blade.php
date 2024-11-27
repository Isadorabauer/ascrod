<form action="{{ url('product') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="price" placeholder="Price" required>
    <input type="number" name="amount" placeholder="Amount" required>
    <button type="submit">Create Product</button>
</form>