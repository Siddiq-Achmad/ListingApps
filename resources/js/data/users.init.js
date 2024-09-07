/*
Template Name: LUXIMA - Admin & Dashboard 
Author: LUXIMA
Website: https://luxima.id/
Contact: admin@luxima.id
File: Ticket list init js
*/



var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
var authId = document.getElementById('_auth_id') ? document.getElementById('_auth_id').value : 0;

function calculateAge(birthDate) {
    // Mengubah string tanggal lahir menjadi objek Date
    var birth = new Date(birthDate);

    // Mendapatkan tanggal saat ini
    var today = new Date();

    // Menghitung selisih tahun
    var age = today.getFullYear() - birth.getFullYear();

    // Memastikan jika bulan/tanggal belum lewat, umur dikurangi satu tahun
    var monthDifference = today.getMonth() - birth.getMonth();
    if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birth.getDate())) {
        age--;
    }

    return age;
}
//fuction disable password
function disablePass() {
    document.getElementById("password-field").disabled = true;
    document.getElementById("c_password-field").disabled = true;
    document.getElementById("password-field").value = "";
    document.getElementById("c_password-field").value = "";
    document.getElementById("email_id-field").disabled = true;
    //console.log("disable pass");
}
function enablePass() {
    document.getElementById("password-field").disabled = false;
    document.getElementById("c_password-field").disabled = false;
    document.getElementById("email_id-field").disabled = false;
    //console.log("enable pass");
}

// list js
function timeConvert(time) {
    var d = new Date(time);
    time_s = (d.getHours() + ':' + d.getMinutes());
    var t = time_s.split(":");
    var hours = t[0];
    var minutes = t[1];
    var newformat = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    return (hours + ':' + minutes + '' + newformat);
}

function formatDate(date) {
    var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    var d = new Date(date),
        month = '' + monthNames[(d.getMonth())],
        day = '' + d.getDate(),
        year = d.getFullYear();
    if (month.length < 2)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;
    return [day + " " + month, year].join(', ');
};

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

var perPage = 10;
var editlist = false;

//Table
var options = {
    valueNames: [
        "id",
        "name",
        "company_name",
        "email_id",
        "phone",
        "designation",
        "skills",
        "last_updated",
        "desc",
        "fullName",
        "dob",
        "age",
        "address",
        "city",
        "zip",
        "country",
        "website",
        "created_at",
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
var contactList = new List("contactList", options).on("updated", function (list) {
    list.matchingItems.length == 0 ?
        (document.getElementsByClassName("noresult")[0].style.display = "block") :
        (document.getElementsByClassName("noresult")[0].style.display = "none");
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
    if (list.matchingItems.length <= perPage && list.matchingItems.length <= 0) {
        document.querySelector(".pagination-wrap").style.display = "none";
    } else {
        document.querySelector(".pagination-wrap").style.display = "flex";
    }

    if (list.matchingItems.length > 0) {
        document.getElementsByClassName("noresult")[0].style.display = "none";
    } else {
        document.getElementsByClassName("noresult")[0].style.display = "block";
    }
});

const xhttp = new XMLHttpRequest();
xhttp.onload = function () {
    var json_records = JSON.parse(this.responseText);
    Array.from(json_records).forEach(function (raw){
        var skills = raw.detail ? raw.detail.skills : '';
        var skillArray = skills ? skills.split(',') : '';
        var skillHtml = '';
        //console.log(skillArray);
        Array.from(skillArray).forEach((skillArray, index) => {
             skillHtml += '<span class="badge bg-primary-subtle text-primary me-1">'+skillArray+'</span>'
         })
        

        var avatar = raw.avatar;
        var r = avatar ? '/images/users/'+avatar : '/images/users/user-dummy-img.jpg';

        
        contactList.add({
            id: `<a href="javascript:void(0);" class="fw-medium link-primary">${raw.id}</a>`,
            dataId: raw.id,
            name: '<div class="d-flex align-items-center">\
            <div class="flex-shrink-0"><img src="'+r+'" alt="" class="avatar-xs rounded-circle"></div>\
            <div class="flex-grow-1 ms-2 name">'+raw.name+'</div>\
            </div>',
            company_name: raw.detail ? raw.detail.company : '',
            email_id: raw.email,
            phone: raw.detail ? raw.detail.phone : '',
            designation: raw.detail ? raw.detail.designation : '',
            skills: skillHtml ,
            last_updated: formatDate(raw.updated_at) + ' <small class="text-muted">'+timeConvert(raw.updated_at)+'</small>',
            desc: raw.detail ? raw.detail.biography : '',
            fullName: raw.detail ? raw.detail.f_name + ' ' + raw.detail.l_name : raw.name,
            f_name: raw.detail ? raw.detail.f_name : '',
            l_name: raw.detail ? raw.detail.l_name : '',
            dob: raw.detail ? raw.detail.dob : '',
            age: raw.detail ? calculateAge(raw.detail.dob) : '-',
            address: raw.detail ? raw.detail.address : '',
            city: raw.detail ? raw.detail.city : '',
            country: raw.detail ? raw.detail.country : '',
            zip: raw.detail ? raw.detail.zip : '',
            website: raw.detail ? raw.detail.website : '',
            created_at: formatDate(raw.created_at) + ' <small class="text-muted">'+timeConvert(raw.created_at)+'</small>',
            avatar: raw.avatar
        });
        contactList.sort('id', { order: "asc" });
        refreshCallbacks();
    });
    contactList.remove('id', `<a href="javascript:void(0);" class="fw-medium link-primary">#USR001</a>`);
    //console.log('Auth Id:'+authId);
}
xhttp.open("GET", "/users-list", true);
xhttp.send();

isCount = new DOMParser().parseFromString(
    contactList.items.slice(-1)[0]._values.id,
    "text/html"
);


// user image
document.querySelector("#user-image-input").addEventListener("change", function () {
    var preview = document.querySelector("#user-img");
    var file = document.querySelector("#user-image-input").files[0];
    var reader = new FileReader();
    var maxSize = 2 * 1024 * 1024;
    reader.addEventListener("load",function () {
        preview.src = reader.result;
    },false);
    if (file) {
        if (file.size > maxSize) {
            alert("File size should not be more than 2 MB");
            return false;
        }
        reader.readAsDataURL(file);
       
    }
});


var idField = document.getElementById("id-field"),
    userImg = document.getElementById("user-img"),
    userNameField = document.getElementById("username-field"),
    f_nameField = document.getElementById("f_name-field"),
    l_nameField = document.getElementById("l_name-field"),
    passwordField = document.getElementById("password-field"),
    c_passwordField = document.getElementById("c_password-field"),
    dobField = document.getElementById("dob-field"),
    addressField = document.getElementById("address-field"),
    company_nameField = document.getElementById("company_name-field"),
    designationField = document.getElementById("designation-field"),
    email_idField = document.getElementById("email_id-field"),
    phoneField = document.getElementById("phone-field"),
    skillsField = document.getElementById("skillinput-choices"),
    avatarField = document.querySelector("#user-image-input");

    addBtn = document.getElementById("add-btn"),
    editBtn = document.getElementById("edit-btn"),
    removeBtns = document.getElementsByClassName("remove-item-btn"),
    editBtns = document.getElementsByClassName("edit-item-btn");
    viewBtns = document.getElementsByClassName("view-item-btn");
refreshCallbacks();

document.getElementById("showModal").addEventListener("show.bs.modal", function (e) {
    if (e.relatedTarget.classList.contains("edit-item-btn")) {
        
        document.getElementById("exampleModalLabel").innerHTML = "Edit User";
        document.getElementById("showModal").querySelector(".modal-footer").style.display = "block";
        document.getElementById("add-btn").innerHTML = "Update";
        disablePass();
        
    } else if (e.relatedTarget.classList.contains("add-btn")) {
        document.getElementById("exampleModalLabel").innerHTML = "Add User";
        document.getElementById("showModal").querySelector(".modal-footer").style.display = "block";
        document.getElementById("add-btn").innerHTML = "Add Contact";
        enablePass();
    } else {
        document.getElementById("exampleModalLabel").innerHTML = "List of Users";
        document.getElementById("showModal").querySelector(".modal-footer").style.display = "none";
        enablePass();
    }
});
ischeckboxcheck();

document.getElementById("showModal").addEventListener("hidden.bs.modal", function (e) {
    clearFields();
});

document.querySelector("#contactList").addEventListener("click", function () {
    ischeckboxcheck();
});

var table = document.getElementById("userTable");
// save all tr
var tr = table.getElementsByTagName("tr");
var trlist = table.querySelectorAll(".list tr");

// date & time

var dateValue = new Date().toUTCString().slice(5, 16);
function currentTime() {
    var ampm = new Date().getHours() >= 12 ? "PM" : "AM";
    var hour =
        new Date().getHours() > 12
            ? new Date().getHours() % 12
            : new Date().getHours();
    var minute =
        new Date().getMinutes() < 10
            ? "0" + new Date().getMinutes()
            : new Date().getMinutes();
    if (hour < 10) {
        return "0" + hour + ":" + minute + " " + ampm;
    } else {
        return hour + ":" + minute + " " + ampm;
    }
}
setInterval(currentTime, 1000);


var count = 11;
// multiple Remove CancelButton
var skillInputField = new Choices('#skillinput-choices', {
      removeItemButton: true,
    }
);

var skillInputFieldValue = skillInputField.getValue(true);
var skillHtmlValue = '';
var skillData = '';
Array.from(skillInputFieldValue).forEach((skill, index) => {
    skillHtmlValue += '<span class="badge bg-primary-subtle text-primary me-1">'+skill+'</span>'
    skillData += skill + ',';
})
var forms = document.querySelectorAll('.tablelist-form')
Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            
        } else {
            event.preventDefault();
            
            if (userNameField.value !== "" &&
                email_idField.value !== "" &&
                passwordField.value !== "" &&
                c_passwordField.value !== "" &&
                !editlist) {

                
                var skillInputFieldValue = skillInputField.getValue(true);
                var skillHtmlValue = '';
                var skillData = '';
                Array.from(skillInputFieldValue).forEach((skill, index) => {
                    skillHtmlValue += '<span class="badge bg-primary-subtle text-primary me-1">' + skill + '</span>'
                    skillData += skill + ',';
                })
                
                var formData = new FormData();

                formData.append('name', userNameField.value);
                formData.append('email', email_idField.value);
                formData.append('password', passwordField.value);
                formData.append('password_confirmation', c_passwordField.value);
                formData.append('company', company_nameField.value);
                formData.append('phone', phoneField.value);
                formData.append('f_name', f_nameField.value);
                formData.append('l_name', l_nameField.value);
                formData.append('designation', designationField.value);
                formData.append('dob', dobField.value);
                formData.append('address', addressField.value);
                formData.append('skills', skillData);
                
                var avatarFile = document.querySelector("#user-image-input").files[0];
                if (avatarFile) {
                    formData.append('avatar', avatarFile);
                }

                fetch(`/users`, {
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
                    
                contactList.add({
                    id: `<a href="javascript:void(0);" class="fw-medium link-primary">${count}</a>`,
                    // name: userNameField.value,
                    name: '<div class="d-flex align-items-center">\
                    <div class="flex-shrink-0"><img src="'+ userImg.src + '" alt="" class="avatar-xs rounded-circle object-fit-cover"></div>\
                    <div class="flex-grow-1 ms-2 name">'+ userNameField.value + '</div>\
                    </div>',
                    company_name: company_nameField.value,
                    designation: designationField.value,
                    email_id: email_idField.value,
                    phone: phoneField.value,
                    f_name: f_nameField.value,
                    l_name: l_nameField.value,
                    fullName: f_nameField.value + ' ' + l_nameField.value,
                    dob: dobField.value,
                    age: calculateAge(dobField.value),
                    address: addressField.value,
                    skills: skillHtmlValue,
                    date: dateValue + ' <small class="text-muted">' + currentTime() + '</small>'
                });

                contactList.sort('id', { order: "desc" });
                document.getElementById("close-modal").click();
                clearFields();
                refreshCallbacks();
                count++;
                
                
            }else if (userNameField.value !== "" &&
            email_idField.value !== "" &&
            editlist) {
                var editValues = contactList.get({
                    id: idField.value,
                });
                
                Array.from(editValues).forEach(function (x) {
                    isid = new DOMParser().parseFromString(x._values.id, "text/html");
                    var selectedid = isid.body.firstElementChild.innerHTML;
                    var skillInputFieldValue = skillInputField.getValue(true);
                    var skillHtmlValue = '';
                    var skillData = '';
                    Array.from(skillInputFieldValue).forEach((skill, index) => {
                        skillHtmlValue += '<span class="badge bg-primary-subtle text-primary me-1">' + skill + '</span>'
                        skillData += skill + ',';
                    })
                    if (selectedid == itemId) {

                        
                        var skillData = skillData.slice(0, -1);
                        var avatarFile = document.querySelector("#user-image-input").files[0];
                        // Update values
                        var formData = new FormData();

                        formData.append('name', userNameField.value);
                        formData.append('email', email_idField.value);
                        formData.append('company', company_nameField.value);
                        formData.append('phone', phoneField.value);
                        formData.append('f_name', f_nameField.value);
                        formData.append('l_name', l_nameField.value);
                        formData.append('designation', designationField.value);
                        formData.append('dob', dobField.value);
                        formData.append('address', addressField.value);
                        formData.append('skills', skillData);
                        
                        if (avatarFile) {
                            formData.append('avatar', avatarFile);
                        }
                        
                        formData.append('_method', 'PUT');

                        // Send PUT request

                        axios.post(`/users/${itemId}`,  formData, {
                            headers: {
                                'X-CSRF-TOKEN': csrfToken
                            }
                        })
                        .then(response => {
                            console.log('Data updated successfully:', response.data);
                            Toastify({
                                text: response.data.message,
                                duration: 3000,
                                close: true,
                                gravity: "top", // `top` or `bottom`
                                position: "right", // `left`, `center` or `right`
                                stopOnFocus: true, // Prevents dismissing of toast on hover
                                className: "bg-success",
                            }).showToast();
                        })
                        .catch(error => {
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
                        
                        x.values({
                            id: `<a href="javascript:void(0);" class="fw-medium link-primary">${idField.value}</a>`,
                            name: '<div class="d-flex align-items-center">\
                            <div class="flex-shrink-0"><img src="'+userImg.src+'" alt="" class="avatar-xs rounded-circle object-fit-cover"></div>\
                            <div class="flex-grow-1 ms-2 name">'+userNameField.value+'</div>\
                            </div>',
                            company_name: company_nameField.value,
                            designation: designationField.value,
                            email_id: email_idField.value,
                            phone: phoneField.value,
                            f_name: f_nameField.value,
                            l_name: l_nameField.value,
                            fullName: f_nameField.value + ' ' + l_nameField.value,
                            dob: dobField.value,
                            age: calculateAge(dobField.value),
                            address: addressField.value,
                            skills: skillHtmlValue,
                            date: dateValue + ' <small class="text-muted">'+currentTime()+'</small>'
                        });
                    }
                });
                document.getElementById("close-modal").click();
                clearFields();
                // Swal.fire({
                //     position: 'center',
                //     icon: 'success',
                //     title: 'User updated Successfully!',
                //     showConfirmButton: false,
                //     timer: 2000,
                //     showCloseButton: true
                // });
            }
        }
    }, false)
})


function ischeckboxcheck() {
    Array.from(document.getElementsByName("chk_child")).forEach(function (x) {
        x.addEventListener("change", function (e) {
            if (x.checked == true) {
                e.target.closest("tr").classList.add("table-active");
            } else {
                e.target.closest("tr").classList.remove("table-active");
            }
  
            var checkedCount = document.querySelectorAll('[name="chk_child"]:checked').length;
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
                var itemValues = contactList.get({
                    id: itemId,
                });
                
                Array.from(itemValues).forEach(function (x) {
                    deleteid = new DOMParser().parseFromString(x._values.id, "text/html");

                    var isElem = deleteid.body.firstElementChild;
                    var isdeleteid = deleteid.body.firstElementChild.innerHTML;

                    if (isdeleteid == itemId) {
                        document.getElementById("delete-record").addEventListener("click", function () {
                            
                            var deleteForm = document.getElementById("delete-record-form");
                           
                            fetch(`users/${itemId}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken 
                                },
                            }).then(response => response.json())
                            .then(data => {
                                Toastify({
                                    text:  data.message,
                                    duration: 3000,
                                    close: true,
                                    gravity: "top", // `top` or `bottom`
                                    position: "right", // `left`, `center` or `right`
                                    stopOnFocus: true, // Prevents dismissing of toast on hover
                                    className: "bg-danger",
                                }).showToast();                                    
                            })
                            contactList.remove("id", isElem.outerHTML);
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
                var itemValues = contactList.get({
                    id: itemId,
                });


                
                Array.from(itemValues).forEach(function (x) {
                    isid = new DOMParser().parseFromString(x._values.id, "text/html");
                    var selectedid = isid.body.firstElementChild.innerHTML;
                    var skillBadge = new DOMParser().parseFromString(x._values.skills, "text/html").body.querySelectorAll("span.badge");
                    
                   


                    if (selectedid == itemId) {
                        
                        
                        editlist = true;
                        idField.value = selectedid;
                        userImg.src = new DOMParser().parseFromString(x._values.name, "text/html").body.querySelector("img").src
                        userNameField.value = new DOMParser().parseFromString(x._values.name, "text/html").body.querySelector(".name").innerHTML;
                        company_nameField.value = x._values.company_name;
                        f_nameField.value = x._values.f_name;
                        l_nameField.value = x._values.l_name;
                        dobField.value = x._values.dob;
                        addressField.value = x._values.address;
                        designationField.value = x._values.designation;
                        email_idField.value = x._values.email_id;
                        phoneField.value = x._values.phone;   
                                             
                        if(skillBadge){
                            Array.from(skillBadge).forEach((item) => {
                                skillInputField.setChoiceByValue(item.innerHTML);
                                //console.log(item.innerHTML);
                            })
                        }
                        
                    }
                });
            });
        });
    }

    Array.from(viewBtns).forEach(function (btn) {
        btn.addEventListener("click", function (e) {
            e.target.closest("tr").children[1].innerText;
            itemId = e.target.closest("tr").children[1].innerText.trim();
            var itemValues = contactList.get({
                id: itemId,
            });
            
            //console.log(itemValues);    
            Array.from(itemValues).forEach(function (x) {
                isid = new DOMParser().parseFromString(x._values.id, "text/html");
                var selectedid = isid.body.firstElementChild.innerHTML;
                //console.log(x._values);
                if (selectedid == itemId) {
                    
                    var codeBlock = `
                    <div class="card-body text-center">
                        <div class="position-relative d-inline-block">
                            <img src="${new DOMParser().parseFromString(x._values.name, "text/html").body.querySelector("img").src}" alt=""
                                class="avatar-lg rounded-circle img-thumbnail object-fit-cover">
                            <span class="contact-active position-absolute rounded-circle bg-success"><span
                                    class="visually-hidden"></span>
                        </div>
                        <h5 class="mt-4 mb-1">${new DOMParser().parseFromString(x._values.name, "text/html").body.querySelector(".name").innerHTML}</h5>
                        <p class="text-muted">${x._values.email_id}</p>

                        <ul class="list-inline mb-0">
                            <li class="list-inline-item avatar-xs">
                                <a href="javascript:void(0);"
                                    class="avatar-title bg-success-subtle text-success fs-15 rounded">
                                    <i class="ri-phone-line"></i>
                                </a>
                            </li>
                            <li class="list-inline-item avatar-xs">
                                <a href="javascript:void(0);"
                                    class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                    <i class="ri-mail-line"></i>
                                </a>
                            </li>
                            <li class="list-inline-item avatar-xs">
                                <a href="javascript:void(0);"
                                    class="avatar-title bg-warning-subtle text-warning fs-15 rounded">
                                    <i class="ri-question-answer-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                    <h6 class="text-muted text-uppercase fw-semibold mb-3">Personal Information</h6>
                    <p class="text-muted mb-4">${x._values.desc}</p>
                    <div class="table-responsive table-card">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <td class="fw-medium" scope="row">Designation</td>
                                    <td>${x._values.designation}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Full Name</td>
                                    <td>${x._values.fullName}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Day of Birth</td>
                                    <td>${formatDate(x._values.dob)}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Age</td>
                                    <td>${x._values.age} Years</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Address</td>
                                    <td>${x._values.address}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium"></td>
                                    <td>${x._values.city}, ${x._values.country}. ${x._values.zip}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Email ID</td>
                                    <td>${x._values.email_id}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Phone No</td>
                                    <td>${x._values.phone}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Website</td>
                                    <td>${x._values.website}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Skills</td>
                                    <td>
                                        ${x._values.skills}
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Created At</td>
                                    <td>${x._values.created_at}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Last Updated</td>
                                    <td>${x._values.last_updated}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>`;
                    document.getElementById('contact-view-detail').innerHTML = codeBlock;
                }
            });
        });
    });
}

function clearFields() {
    userImg.src = "/images/users/user-dummy-img.jpg";
    userNameField.value = "";
    f_nameField.value = "";
    l_nameField.value = "";
    passwordField.value = "";
    c_passwordField.value = "";
    dobField.value = "";
    addressField.value = "";
    company_nameField.value = "";
    designationField.value = "";
    email_idField.value = "";
    phoneField.value = "";
    skillInputField.removeActiveItems();
    skillInputField.setChoiceByValue("0");
}

// Delete Single Record
function deleteItem(itemId) {
    var deleteForm = document.getElementById("delete-record-form");
    fetch(`/users/${itemId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': csrfToken 
        },
        body: deleteForm
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        Toastify({
            text: data.message,
            duration: 3000,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "right", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            className: "bg-success",
        }).showToast();

    })
    .catch(error => {
        console.error('Error:', error);
    });

}


// Delete All Records
function deleteMultiple(){
    ids_array = [];
    var items = document.getElementsByName('chk_child');
    for (i = 0; i < items.length; i++) {
        if (items[i].checked == true) {
            var trNode = items[i].parentNode.parentNode.parentNode;
            var id = trNode.querySelector("td a").innerHTML;
            ids_array.push(id);
        }
    }

    if(typeof ids_array !== 'undefined' && ids_array.length > 0){
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
                    contactList.remove("id", `<a href="javascript:void(0);" class="fw-medium link-primary">${ids_array[i]}</a>`);
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
    }else{
        Swal.fire({
            title: 'Please select at least one checkbox',
            confirmButtonClass: 'btn btn-info',
            buttonsStyling: false,
            showCloseButton: true
        });
    }
}

document.querySelector(".pagination-next").addEventListener("click", function () {
    (document.querySelector(".pagination.listjs-pagination")) ? (document.querySelector(".pagination.listjs-pagination").querySelector(".active")) ?
    document.querySelector(".pagination.listjs-pagination").querySelector(".active").nextElementSibling.children[0].click(): '': '';
});
document.querySelector(".pagination-prev").addEventListener("click", function () {
    (document.querySelector(".pagination.listjs-pagination")) ? (document.querySelector(".pagination.listjs-pagination").querySelector(".active")) ?
    document.querySelector(".pagination.listjs-pagination").querySelector(".active").previousSibling.children[0].click(): '': '';
});