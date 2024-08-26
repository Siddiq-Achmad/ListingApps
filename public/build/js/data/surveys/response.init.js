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
    fetch('/responses-list')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.status === 'success') {
                const tableBody = document.querySelector("#respondents-table tbody");
                tableBody.innerHTML = '';

                data.data.forEach(respondent => {
                    let row = `
                        <tr>
                            <td>${respondent.id}</td>
                            <td><a href="/respondents/${respondent.survey_id}">${respondent.name}</a></td>
                            <td>${respondent.email}</td>
                            <td>${respondent.phone}</td>
                            <td>${respondent.age}</td>
                            <td>${respondent.gender}</td>
                            <td>${respondent.city}</td>
                            <td>${respondent.education_level}</td>
                            
                        </tr>
                    `;
                    tableBody.insertAdjacentHTML('beforeend', row);
                });

                // Initialize DataTables if needed
                $('#respondents-table').DataTable({
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