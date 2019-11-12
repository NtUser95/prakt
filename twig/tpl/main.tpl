{% extends "layout.tpl" %}

{% block body %}
    <div>
        <table class="supertable">
            <thead>
            <tr>
                <th>Имя</th>
                <th>Город</th>
                <th>Возраст</th>
            </tr>
            </thead>
            <tbody id="super-table-body">
                {% for user in data_users %}
                    <tr>
                        <td>
                            {{ user.name }}
                        </td>
                        <td>
                            {{ user.city }}
                        </td>
                        <td>
                            {{ user.age }}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    <button onclick="location.reload()">Обновить</button>
{% endblock %}

{% block scripts %}
    <script>
        const pageJsonData = JSON.parse('{{ data_users_json|raw }}');
    </script>
{% endblock %}