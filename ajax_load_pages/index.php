<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ajax page load</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
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

                </tbody>
            </table>
        </div>
        <input type="button" id="refresh-btn-jquery" value="Обновить jQuery">
        <input type="button" id="refresh-btn-native" value="Обновить native JS">

        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
        <script src="ajax.js"></script>
    </body>
</html>