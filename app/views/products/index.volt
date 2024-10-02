<h1>Product List</h1>

{% if products is defined and products|length > 0 %}
    <ul>
    {% for product in products %}
        <li>
            <strong>{{ product['name'] }}</strong> - ${{ product['price'] }}
        </li>
    {% endfor %}
    </ul>
{% else %}
    <p>No products found.</p>
{% endif %}

<a href="/products/create">Add New Product</a>
