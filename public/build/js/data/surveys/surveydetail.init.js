/*
Template Name: LUXIMA - Admin & Dashboard Template
Author: Luxima.id
Website: https://luxima.id/
Contact: admin@luxima.id
File: Question list init js
*/




var surveyId = document.getElementById('survey-title').getAttribute('data-survey-id');
var survey_id = parseInt(surveyId);

var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

localStorage.removeItem("question-list");
var str_dt = function formatDate(date) {
    var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    var d = new Date(date),
        month = '' + monthNames[(d.getMonth())],
        day = '' + d.getDate(),
        year = d.getFullYear();
        hour = d.getHours();
        minutes = d.getMinutes();
    if (month.length < 2)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;
    
    return [day + ' ' + month, year + ' ' + hour + ':' + minutes].join(', ');
};

function getTypes($type) {
    switch ($type) {
        case "0":
            return "Text";
            break;
        case "1":
            return "Select";
            break;
        case "2":
            return "Radio";
            break;
        case "3":
            return "Checkbox";
            break;
        case "4":
            return "Date";
            break;
        case "5":
            return "DateTime";
            break;
        case "6":
            return "Time";
            break;
        case "7":
            return "Unknown";
            break;
    }
}

function setType($type) {
    switch ($type) {
        case "text" || "Text":
            return "0";
            break;
        case "select" || "Select":
            return "1";
            break;
        case "radio" || "Radio":
            return "2";
            break;
        case "checkbox" || "Checkbox":
            return "3";
            break;
        case "date" || "Date":
            return "4";
            break;
        case "datetime" || "DateTime":
            return "5";
            break;
        case "time" || "Time":
            return "6";
            break;
        case "unknown":
            return "7";
            break;
    }
}


var checkAll = document.getElementById("checkAll");
if (checkAll) {
    checkAll.onclick = function () {
        var checkboxes = document.querySelectorAll('.form-check-all input[type="checkbox"]');
        var checkedCount = document.querySelectorAll('.form-check-all input[type="checkbox"]:checked').length;
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = this.checked;
            if (checkboxes[i].checked) {
                checkboxes[i].closest("tr").classList.add("table-active");
            } else {
                checkboxes[i].closest("tr").classList.remove("table-active");
            }
        }

        (checkedCount > 0) ? document.getElementById("remove-actions").style.display = 'none' : document.getElementById("remove-actions").style.display = 'block';
    };
}
var perPage = 8;
var editlist = false;

//Table
var options = {
    valueNames: [
        "id",
        "question_text",
        "question_type",
        "options",
        "create_at",

    ],
    page: perPage,
    pagination: true,
    plugins: [
        ListPagination({
            left: 2,
            right: 2
        })
    ]
};

// Init list
var questionsList = new List('questionsList', options).on("updated", function (list) {
    (list.matchingItems.length == 0) ? document.getElementsByClassName("noresult")[0].style.display = "block": document.getElementsByClassName("noresult")[0].style.display = "none";
    var isFirst = list.i == 1;
    var isLast = list.i > list.matchingItems.length - list.page;
    // make the Prev and Nex buttons disabled on first and last pages accordingly
    (document.querySelector(".pagination-prev.disabled")) ? document.querySelector(".pagination-prev.disabled").classList.remove("disabled"): '';
    (document.querySelector(".pagination-next.disabled")) ? document.querySelector(".pagination-next.disabled").classList.remove("disabled"): '';
    if (isFirst) {
        document.querySelector(".pagination-prev").classList.add("disabled");
    }
    if (isLast) {
        document.querySelector(".pagination-next").classList.add("disabled");
    }
    if (list.matchingItems.length <= perPage) {
        document.querySelector(".pagination-wrap").style.display = "none";
    } else {
        document.querySelector(".pagination-wrap").style.display = "flex";
    }

    if (list.matchingItems.length == perPage) {
        document.querySelector(".pagination.listjs-pagination").firstElementChild.children[0].click()
    }

    if (list.matchingItems.length > 0) {
        document.getElementsByClassName("noresult")[0].style.display = "none";
    } else {
        document.getElementsByClassName("noresult")[0].style.display = "block";
    }
});


    // URL API untuk fetch data
    const url = '/surveys/' + survey_id + '/edit';  // Ganti dengan URL endpoint Anda yang sesuai

    // Melakukan fetch data dari API
    fetch(url)
    .then(response => {
        if (!response.ok) {
        throw new Error('Network response was not ok ' + response.statusText);
        }
        return response.json();  // Parse JSON dari response
    })
    .then(data => {
        // Memeriksa apakah status success
        if (data.status === 'success') {
        // Mengambil data survey
        const surveyData = data.data;

        // Tampilkan data survey
        // console.log('Survey Title:', surveyData.title);
        // console.log('Survey Description:', surveyData.description);
        // console.log('Created At:', surveyData.created_at);

        // // Tampilkan data user
        // console.log('User Name:', surveyData.user.name);
        // console.log('User Email:', surveyData.user.email);

        // Tampilkan data pertanyaan
        surveyData.questions.forEach(question => {
            var type = question.question_type;
            
            //Membuat array options
            var optionArray = question.options ? question.options.split(',') : [];
            var optionHtml = '';
            optionArray.forEach((dataOptions, index) => {
                optionHtml += '<span class="badge bg-primary-subtle text-primary me-1">'+dataOptions+'</span>'
            });
            

            //Menambahkan ke dalam table
            questionsList.add({
                id: '<a href="javascript:void(0);" onclick="ViewQuestions(this)"  data-id="' + question.id + '" class="fw-medium link-primary question-id">#QUE' + question.id + "</a>",
                question_text: question.question_text,
                question_type: getTypes(type),
                options: optionHtml,
                create_at: str_dt(question.created_at),
            });
            questionsList.sort('id', { order: "desc" });
            refreshCallbacks();
        });
        questionsList.remove("id", `<a href="javascript:void(0);" onclick="ViewQuestions(this)" data-id="001" class="fw-medium link-primary">#LXM001</a>`);

        // Manipulasi DOM jika diperlukan
        document.getElementById("survey-title").innerText = surveyData.title;

        } else {
        console.error('Data status was not success');
        }
    })
    .catch(error => {
        console.error('Fetch error:', error);
    });

// const xhttp = new XMLHttpRequest();
// xhttp.onload = function () {
//     var json_records = JSON.parse(this.responseText);
//     console.log(json_records.data);
        
    
//     Array.from(json_records).forEach(function (data) {
//         var surveyTitle = data.title;
//         var surveyId = data.id;
//         document.getElementById("survey-title").innerHTML = surveyTitle;
//         alert(surveyId);
//         var questions = data.questions;
//         Array.from(questions).forEach(function (question) {
//             questionsList.add({
//                 id: '<a href="javascript:void(0);" onclick="ViewQuestions(this)" data-id="' + question.id + '" class="fw-medium link-primary question-id">#LXM' + question.id + "</a>",
//                 question_text: question.question_text,
//                 question_type: question.question_type,
//                 options: question.options,
//                 create_at: str_dt(question.created_at),
//             });
//             questionsList.sort('id', { order: "desc" });
//             refreshCallbacks();
//         });
        
//     });
//     questionsList.remove("id", `<a href="javascript:void(0);" onclick="ViewQuestions(this)" data-id="001" class="fw-medium link-primary">#LXM001</a>`);
// }
// xhttp.open("GET", "/surveys/" + surveyId + "/edit");
// xhttp.send();



isCount = new DOMParser().parseFromString(
    questionsList.items.slice(-1)[0]._values.id,
    "text/html"
);

var isValue = isCount.body.firstElementChild.innerHTML;

var idField = document.getElementById("questionId"),
    question_textField = document.getElementById("question-field"),
    typeField = document.getElementById("type-field"),
    optionsField = document.getElementById("options-field"),
    addBtn = document.getElementById("add-btn"),
    editBtn = document.getElementById("edit-btn"),
    removeBtns = document.getElementsByClassName("remove-item-btn"),
    editBtns = document.getElementsByClassName("edit-item-btn");
refreshCallbacks();
//filterOrder("All");

function filterOrder(isValue) {
    var values_status = isValue;
    questionsList.filter(function (data) {
        var statusFilter = false;
        matchData = new DOMParser().parseFromString(
            data.values().status,
            "text/html"
        );
        var status = matchData.body.firstElementChild.innerHTML;
        if (status == "All" || values_status == "All") {
            statusFilter = true;
        } else {
            statusFilter = status == values_status;
        }
        return statusFilter;
    });

    questionsList.update();
}

function updateList() {
    var values_status = document.querySelector(
        "input[name=status]:checked"
    ).value;

    data = userList.filter(function (item) {
        var statusFilter = false;

        if (values_status == "All") {
            statusFilter = true;
        } else {
            statusFilter = item.values().sts == values_status;

        }
        return statusFilter;
    });

    userList.update();
    //console.log('Filtered: ' + values_gender);
}

document.getElementById("showModal").addEventListener("show.bs.modal", function (e) {
    if (e.relatedTarget.classList.contains("edit-item-btn")) {
        document.getElementById("exampleModalLabel").innerHTML = "Edit Question";
        document.getElementById("showModal").querySelector(".modal-footer").style.display = "block";
        document.getElementById("add-btn").innerHTML = "Update";
    } else if (e.relatedTarget.classList.contains("add-btn")) {
        document.getElementById("modal-id").style.display = "none";
        document.getElementById("exampleModalLabel").innerHTML = "Add Question";
        document.getElementById("showModal").querySelector(".modal-footer").style.display = "block";
        document.getElementById("add-btn").innerHTML = "Add Question";
    } else {
        document.getElementById("exampleModalLabel").innerHTML = "View Question";
        document.getElementById("showModal").querySelector(".modal-footer").style.display = "none";
    }
});

ischeckboxcheck();

document.getElementById("showModal").addEventListener("hidden.bs.modal", function () {
    clearFields();
});

document.querySelector("#questionsList").addEventListener("click", function () {
    ischeckboxcheck();
});

var table = document.getElementById("questionTable");
// save all tr
var tr = table.getElementsByTagName("tr");
var trlist = table.querySelectorAll(".list tr");

function SearchData() {
    var isstatus = document.getElementById("idStatus").value;
    var pickerVal = document.getElementById("demo-datepicker").value;

    var date1 = pickerVal.split(" to ")[0];
    var date2 = pickerVal.split(" to ")[1];

    questionsList.filter(function (data) {
        matchData = new DOMParser().parseFromString(data.values().status, 'text/html');
        var status = matchData.body.firstElementChild.innerHTML;
        var statusFilter = false;
        var dateFilter = false;

        if (status == 'all' || isstatus == 'all') {
            statusFilter = true;
        } else {
            statusFilter = status == isstatus;
        }

        if (new Date(data.values().create_date.slice(0, 12)) >= new Date(date1) && new Date(data.values().create_date.slice(0, 12)) <= new Date(date2)) {
            dateFilter = true;
        } else {
            dateFilter = false;
        }

        if (statusFilter && dateFilter) {
            return statusFilter && dateFilter
        } else if (statusFilter && pickerVal == "") {
            return statusFilter
        } else if (dateFilter && pickerVal == "") {
            return dateFilter
        }
    });
    questionsList.update();
}

var count = 14;
var forms = document.querySelectorAll('.tablelist-form')
Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        } else {
            event.preventDefault();
            if (
                question_textField.value !== "" &&
                typeField.value !== "" &&
                !editlist
            ) {
                //Membuat array options
                var optionArray = optionsField.value.split(',');
                var optionHtml = '';
                optionArray.forEach((dataOptions, index) => {
                    optionHtml += '<span class="badge bg-primary-subtle text-primary me-1">'+dataOptions+'</span>'
                });

                var formData = new FormData();

                formData.append("survey_id", surveyId);
                formData.append("question_text", question_textField.value);
                formData.append("question_type", typeField.value);
                formData.append("options", optionsField.value);

                fetch(`/questions`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    // Menangani respon sukses
                    console.log('Success:', data);
                    Toastify({
                        text: data.message,
                        duration: 3000,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        className: "bg-success",
                    }).showToast();
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Contact inserted successfully!',
                        showConfirmButton: false,
                        timer: 2000,
                        showCloseButton: true
                    });
                })
                .catch(error => {
                    // Menangani respon error
                    console.error('Error:', error);
                    Toastify({
                        text: error.message,
                        duration: 3000,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        className: "bg-danger",
                    }).showToast();
                });


                questionsList.add({
                    id: '<a href="javascript:void(0);" onclick="ViewQuestions(this)" data-id="' + count + '" class="fw-medium link-primary question-id">#QUE' + count + "</a>",
                    question_text: question_textField.value,
                    question_type: getTypes(typeField.value),
                    options: optionHtml,
                });
                questionsList.sort('id', { order: "desc" });
                document.getElementById("close-modal").click();
                clearFields();
                refreshCallbacks();
                filterOrder("All");
                count++;
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Question inserted successfully!',
                    showConfirmButton: false,
                    timer: 2000,
                    showCloseButton: true
                });
            }else if (
                question_textField.value !== "" &&
                typeField.value !== "" &&
                editlist
            ) {
                var editValues = questionsList.get({
                    id: idField.value,
                });
                Array.from(editValues).forEach(function (x) {
                    isid = new DOMParser().parseFromString(x._values.id, "text/html");
                    var selectedid = isid.body.firstElementChild.innerHTML;
                    if (selectedid == itemId) {
                        x.values({
                            id: '<a href="javascript:void(0);" onclick="ViewQuestions(this)" data-id="' + idField.value + '" class="fw-medium link-primary">' +
                                idField.value +
                                "</a>",
                            question_text: question_textField.value,
                            question_type: typeField.value,
                            options: optionsField.value,
                        });
                    }
                });
                document.getElementById("close-modal").click();
                clearFields();
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Question updated Successfully!',
                    showConfirmButton: false,
                    timer: 2000,
                    showCloseButton: true
                });
            }
        }
    }, false)
})


// var example = new Choices(typeField, {
//     searchEnabled: false,
// });

// var statusVal = new Choices(statusField, {
//     searchEnabled: false,
// });

function isStatus(val) {
    switch (val) {
        case "Open":
            return ('<span class="badge bg-success-subtle text-success text-uppercase">' + val + "</span>");
        case "Inprogress":
            return ('<span class="badge bg-warning-subtle text-warning text-uppercase">' + val + "</span>");
        case "Closed":
            return ('<span class="badge bg-danger-subtle text-danger text-uppercase">' + val + "</span>");
        case "New":
            return ('<span class="badge bg-info-subtle text-info text-uppercase">' + val + "</span>");
    }
}

function isPriority(val) {
    switch (val) {
        case "High":
            return ('<span class="badge bg-danger text-uppercase">' + val + "</span>");
        case "Low":
            return ('<span class="badge bg-success text-uppercase">' + val + "</span>");
        case "Medium":
            return ('<span class="badge bg-warning text-uppercase">' + val + "</span>");
    }
}

function ischeckboxcheck() {
    Array.from(document.getElementsByName("checkAll")).forEach(function (x) {
        x.addEventListener("change", function (e) {
            if (x.checked == true) {
                e.target.closest("tr").classList.add("table-active");
            } else {
                e.target.closest("tr").classList.remove("table-active");
            }

            var checkedCount = document.querySelectorAll('[name="checkAll"]:checked').length;
            if (e.target.closest("tr").classList.contains("table-active")) {
                (checkedCount > 0) ? document.getElementById("remove-actions").style.display = 'block': document.getElementById("remove-actions").style.display = 'none';
            } else {
                (checkedCount > 0) ? document.getElementById("remove-actions").style.display = 'block': document.getElementById("remove-actions").style.display = 'none';
            }
        });
    });
}

function refreshCallbacks() {
    if(removeBtns){
        Array.from(removeBtns).forEach(function (btn) {
            btn.addEventListener("click", function (e) {
                e.target.closest("tr").children[1].innerText;
                itemId = e.target.closest("tr").children[1].innerText;
                var itemValues = questionsList.get({
                    id: itemId,
                });
    
                Array.from(itemValues).forEach(function (x) {
                    deleteid = new DOMParser().parseFromString(x._values.id, "text/html");
    
                    var isElem = deleteid.body.firstElementChild;
                    var isdeleteid = deleteid.body.firstElementChild.innerHTML;
    
                    if (isdeleteid == itemId) {
                        document.getElementById("delete-record").addEventListener("click", function () {
                            questionsList.remove("id", isElem.outerHTML);
                            document.getElementById("deleteRecord-close").click();
                        });
                    }
                });
            });
        });
    }

    if(editBtns){
        Array.from(editBtns).forEach(function (btn) {
            btn.addEventListener("click", function (e) {
                e.target.closest("tr").children[1].innerText;
                itemId = e.target.closest("tr").children[1].innerText;
                var itemValues = questionsList.get({
                    id: itemId,
                   
                });

                Array.from(itemValues).forEach(function (x) {
                    isid = new DOMParser().parseFromString(x._values.id, "text/html");
                    var selectedid = isid.body.firstElementChild.innerHTML;
                    var optionBadge = new DOMParser().parseFromString(x._values.options, "text/html").body.querySelectorAll(".badge.bg-primary-subtle.text-primary.me-1");   
                    if (selectedid == itemId) {
                        editlist = true;
                        idField.value = selectedid;
                        question_textField.value = x._values.question_text;
                       

                        console.log(x._values.question_type);

                        const allOptions = Array.from(optionBadge)
                            .map(span => span.textContent.trim())  // Mengambil teks dari setiap span
                            .join(',');  // Menggabungkan teks dengan koma

                        optionsField.value  = allOptions;
                        

                        
                       
    
                        
                        // val = new DOMParser().parseFromString(x._values.question_type, "text/html");
                        // var selected = val.body.firstElementChild.innerHTML;
                        // example.setChoiceByValue(selected);
    
                        // if (statusVal) statusVal.destroy();
                        // statusVal = new Choices(statusField, {
                        //     searchEnabled: false
                        // });
                        // val = new DOMParser().parseFromString(x._values.status, "text/html");
                        // var statusSelec = val.body.firstElementChild.innerHTML;
                        // statusVal.setChoiceByValue(statusSelec);
    
                        flatpickr("#date-field", {
                            dateFormat: "d M, Y",
                            defaultDate: x._values.create_date,
                        });
    
                        
                    }
                });
            });
        });
    }
}

function clearFields() {
    question_textField.value = "";
    typeField.value = "";
    optionsField.value = "";


    // if (example)
    //     example.destroy();
    // example = new Choices(typeField);

    // if (statusVal)
    //     statusVal.destroy();
    // statusVal = new Choices(statusField);
}

document.querySelector(".pagination-next").addEventListener("click", function () {
    (document.querySelector(".pagination.listjs-pagination")) ? (document.querySelector(".pagination.listjs-pagination").querySelector(".active")) ?
    document.querySelector(".pagination.listjs-pagination").querySelector(".active").nextElementSibling.children[0].click(): '': '';
});
document.querySelector(".pagination-prev").addEventListener("click", function () {
    (document.querySelector(".pagination.listjs-pagination")) ? (document.querySelector(".pagination.listjs-pagination").querySelector(".active")) ?
    document.querySelector(".pagination.listjs-pagination").querySelector(".active").previousSibling.children[0].click(): '': '';
});

// Delete Multiple Records
function deleteMultiple() {
    ids_array = [];
    var items = document.querySelectorAll('.form-check [value=option1]');
    for (i = 0; i < items.length; i++) {
        if (items[i].checked == true) {
            var trNode = items[i].parentNode.parentNode.parentNode;
            var tdDataId = trNode.querySelector("td [data-id]");
            var id = tdDataId.getAttribute("data-id");
            ids_array.push(id);
        }
    }
    if (typeof ids_array !== 'undefined' && ids_array.length > 0) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonClass: 'btn btn-primary w-xs me-2 mt-2',
            cancelButtonClass: 'btn btn-danger w-xs mt-2',
            confirmButtonText: "Yes, delete it!",
            buttonsStyling: false,
            showCloseButton: true
        }).then(function (result) {
            if (result.value) {
                for (i = 0; i < ids_array.length; i++) {
                    questionsList.remove("id", `<a href="javascript:void(0);" onclick="ViewQuestions(this)" data-id="${ids_array[i]}" class="fw-medium link-primary question-id">#LXM${ids_array[i]}</a>`);
                }
                document.getElementById("remove-actions").style.display = 'none';
                document.getElementById("checkAll").checked = false;
                Swal.fire({
                    title: 'Deleted!',
                    text: 'Your data has been deleted.',
                    icon: 'success',
                    confirmButtonClass: 'btn btn-info w-xs mt-2',
                    buttonsStyling: false
                });
            }
        });
    } else {
        Swal.fire({
            title: 'Please select at least one checkbox',
            confirmButtonClass: 'btn btn-info',
            buttonsStyling: false,
            showCloseButton: true
        });
    }
}

function ViewQuestions(data) {
    var d_id = data.getAttribute('data-id');
    var item = questionsList.get('id', '<a href="javascript:void(0);" onclick="ViewQuestions(this)" data-id="' + d_id + '" class="fw-medium link-primary question-id">#LXM' + d_id + '</a>');
    var t_id_html = item[0]._values.id;
    var div = document.createElement("div");
    div.innerHTML = t_id_html;
    var t_id = (div.innerText).slice(4);
    localStorage.setItem("question-list", JSON.stringify(item[0]._values));
    localStorage.setItem("option", "view-question");
    localStorage.setItem("question_no", t_id);
    window.location.assign("survey-details");
}