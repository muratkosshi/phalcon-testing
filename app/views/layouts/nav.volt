<nav>
    <ul>
        <li><a href="/user/index">Users</a></li>
        {% if user is defined %}
            <li><a href="/task/index/{{ user.id }}">Tasks</a></li>
            <li><a href="/task/create/{{ user.id }}">Create Task</a></li>
        {% endif %}
        <li><a href="/user/create">Create User</a></li>
        <li><a href="/products/index">Product List</a></li>
        <li><a href="/products/create">Create Product</a></li>
    </ul>
</nav>
