[].forEach.call(document.querySelectorAll('#refresh-btn-native'),  function (el) {
    el.addEventListener('click', onClickListener, false);
});

function updateTable() {
    const tableBody = document.querySelector('#super-table-body');
    tableBody.innerHTML = '';
    for (const value of pageJsonData) {
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
}