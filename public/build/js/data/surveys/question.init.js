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
    fetch('/questions-list')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                const tableBody = document.querySelector("#questions-table tbody");
                tableBody.innerHTML = '';

                if(data.data.length === 0) {
                    let row = `
                        <tr>
                            <td colspan="5">No Data Available</td>
                        </tr>
                    `;
                    
                }
                else {
                    data.data.forEach(question => {
                        let row = `
                            <tr>
                                <td><a href="/surveys/${question.survey.id}">#${question.survey.id} - ${question.survey.title}</a></td>
                                <td>${question.question_text}</td>
                                <td>${question.question_type}</td>
                                <td>${question.options}</td>
                                <td>${formatTanggal(question.created_at)}</td>
                            </tr>
                        `;
                        tableBody.insertAdjacentHTML('beforeend', row);
                    });
                    // Initialize DataTables if needed
                    $('#questions-table').DataTable({
                        dom: 'Bfrtip',
                        responsive: true,
                        buttons: [
                            'copy', 'csv', 'excel', 'print', 'pdf'
                        ],
                    });
                }
                

            }
            else{
                console.error('Failed to fetch data.');
            }
        })
        .catch(error => console.error('Error fetching data:', error));
});