<h1>Users</h1>
<ul>
    {% for user in users %}
    <li>{{ user.name }} ({{ user.email }})</li>
    {% endfor %}
</ul>
