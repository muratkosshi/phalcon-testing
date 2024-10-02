<h1>Add New Product</h1>

<form method="post" action="/products/create">
    <label for="name">Product Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="price">Product Price:</label>
    <input type="number" step="0.01" name="price" id="price" required>

    <button type="submit">Add Product</button>
</form>
