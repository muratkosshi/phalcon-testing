<h1>Tasks for User {{ user.name }}</h1>

{% if tasks is defined and tasks|length > 0 %}
    <ul>
    {% for task in tasks %}
        <li>
            <strong>{{ task.title }}</strong><br>
            {{ task.description }}<br>
            <em>Created at: {{ task.created_at }}</em>
        </li>
    {% endfor %}
    </ul>
{% else %}
    <p>No tasks available for this user.</p>
{% endif %}

<a href="/task/create/{{ user.id }}">Create New Task</a>
