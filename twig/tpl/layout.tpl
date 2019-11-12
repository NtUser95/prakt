<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ajax page load</title>
        <link href="./../ajax_load_pages/style.css" rel="stylesheet" media="all">
		{% block styles %}{% endblock %}
    </head>

    <body>
        {% block body %}{% endblock %}

        <script
                src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous">
        </script>
		{% block scripts %}{% endblock %}
    </body>
</html>