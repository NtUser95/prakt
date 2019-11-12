// jQuery
$('#refresh-btn-jquery').on('click', () => {
    $.getJSON('ajax.php', (data) => {
        const $tableBody = $('#super-table-body');
        $tableBody.html('');
        for (const value of data) {
            $tableBody.append(`
                <tr>
                    <td>${ value.name }</td> 
                    <td>${ value.city }</td> 
                    <td>${ value.age }</td>                
                </tr>
            `);
        }
    });
});

// Native JS
function onClickListener() {
    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'ajax.php');
    xhr.onreadystatechange = function (event) {
        if (!event.currentTarget.responseText) {
            return;
        }

        const data = JSON.parse(event.currentTarget.responseText);
        const tableBody = document.querySelector('#super-table-body');
        tableBody.innerHTML = '';
        for (const value of data) {
            const tr = document.createElement('tr');

            for (const key in value) {
                if (!value.hasOwnProperty(key)) {
                    continue;
                }

                const td = document.createElement('td');
                td.appendChild(document.createTextNode(value[key]));
                tr.appendChild(td);
            }

            tableBody.append(tr);
        }
    };

    xhr.send();
}

[].forEach.call(document.querySelectorAll('#refresh-btn-native'),  function (el) {
    el.addEventListener('click', onClickListener, false);
});
