// var data = fetch('/users-list')
//         .then(res => res.json())
//         .then(data => {
//             console.log(data);
//         })
    

//     //buttons examples
//     let buttonsDataTables = new DataTable('#surveyTable', {
//         dom: 'Bfrtip',
//         data: data,
//         buttons: [
//             'copy', 'csv', 'excel', 'print', 'pdf'
//         ]
//     });

function formatTanggal(tgl) {
    const date = new Date(tgl);
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    const hours = String(date.getHours()).padStart(2, '0');
    const minutes = String(date.getMinutes()).padStart(2, '0');
    return `${day}-${month}-${year} ${hours}:${minutes}`;
}


document.addEventListener("DOMContentLoaded", function () {
    fetch('/answers-list')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                const tableBody = document.querySelector("#answers-table tbody");
                tableBody.innerHTML = '';

                data.data.forEach(answer => {
                    let row = `
                        <tr>
                            <td>${answer.question.survey.title}</td>
                            <td>${answer.response.name}</td>
                            <td>${answer.question.question_text}</td>
                            <td>${answer.answer}</td>
                            <td>${formatTanggal(answer.created_at)}</td>
                        </tr>
                    `;
                    tableBody.insertAdjacentHTML('beforeend', row);
                });

                // Initialize DataTables if needed
                $('#answers-table').DataTable({
                    dom: 'Bfrtip',
                    responsive: true,
                    buttons: [
                        'copy', 'csv', 'excel', 'print', 'pdf'
                    ],
                });
            }
            else{
                console.error('Failed to fetch data.');
            }
        })
        .catch(error => console.error('Error fetching data:', error));
});

 