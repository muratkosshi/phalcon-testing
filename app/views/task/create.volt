<h1>Create a New Task</h1>

{% if errors is defined %}
    <ul>
    {% for error in errors %}
        <li>{{ error }}</li>
    {% endfor %}
    </ul>
{% endif %}

<form method="post" action="/task/create/{{ userId }}">
    <label for="title">Task Title:</label>
    <input type="text" name="title" id="title" required>

    <label for="description">Task Description:</label>
    <textarea name="description" id="description"></textarea>

    <button type="submit">Create Task</button>
</form>
