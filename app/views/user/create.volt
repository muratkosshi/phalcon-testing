<h1>Create a New User</h1>

{% if errors is defined %}
    <ul>
    {% for error in errors %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}

<form method="post" action="/user/create">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Create User</button>
</form>
