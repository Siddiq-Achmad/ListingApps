/*
Template Name: Velzon - Admin & Dashboard Template
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Profile-setting init js
*/

// Profile Foreground Img
if (document.querySelector("#profile-foreground-img-file-input")) {
    document.querySelector("#profile-foreground-img-file-input").addEventListener("change", function () {
        var preview = document.querySelector(".profile-wid-img");
        var file = document.querySelector(".profile-foreground-img-file-input")
            .files[0];
        var reader = new FileReader();
        reader.addEventListener(
            "load",
            function () {
                preview.src = reader.result;
            },
            false
        );
        if (file) {
            reader.readAsDataURL(file);
        }
    });
}

// Profile Foreground Img
if (document.querySelector("#profile-img-file-input")) {
    document.querySelector("#profile-img-file-input").addEventListener("change", function () {
        var preview = document.querySelector(".user-profile-image");
        var file = document.querySelector(".profile-img-file-input").files[0];
        var reader = new FileReader();
        reader.addEventListener(
            "load",
            function () {
                preview.src = reader.result;
            },
            false
        );
        if (file) {
            reader.readAsDataURL(file);
        }
    });
}


var count = 2;

// var genericExamples = document.querySelectorAll("[data-trigger]");
// for (i = 0; i < genericExamples.length; ++i) {
//     var element = genericExamples[i];
//     new Choices(element, {
//         placeholderValue: "This is a placeholder set in the config",
//         searchPlaceholderValue: "This is a search placeholder",
//         searchEnabled: false,
//     });
// }

function new_link() {
    count++;
    var div1 = document.createElement('div');
    div1.id = count;

    var delLink = '<div class="row"><div class="col-lg-12">' +
        '<div class="mb-3">' +
        '<label for="jobTitle1" class="form-label">Job Title</label>' +
        '<input type="text" class="form-control" id="jobTitle1" placeholder="Job title">' +
        '</div></div>' +
        '<div class="col-lg-6">' +
        '<div class="mb-3">' +
        '<label for="companyName" class="form-label">Company Name</label>' +
        '<input type="text" class="form-control" id="companyName" placeholder="Company name">' +
        '</div>' +
        '</div>' +
        '<div class="col-lg-6">' +
        '<div class="mb-3">' +
        '<label for="choices-single-default3" class="form-label">Experience Years</label>' +
        '<div class="row">' +
        '<div class="col-lg-5">' +
        '<select class="form-control" data-trigger name="choices-single-default3"> ' +
        '<option value="">Select years</option>' +
        '<option value="Choice 1">2001</option>' +
        '<option value="Choice 2">2002</option>' +
        '<option value="Choice 3">2003</option>' +
        '<option value="Choice 4">2004</option>' +
        '<option value="Choice 5">2005</option>' +
        '<option value="Choice 6">2006</option>' +
        '<option value="Choice 7">2007</option>' +
        '<option value="Choice 8">2008</option>' +
        '<option value="Choice 9">2009</option>' +
        '<option value="Choice 10">2010</option>' +
        '<option value="Choice 11">2011</option>' +
        '<option value="Choice 12">2012</option>' +
        '<option value="Choice 13">2013</option>' +
        '<option value="Choice 14">2014</option>' +
        '<option value="Choice 15">2015</option>' +
        '<option value="Choice 16">2016</option>' +
        '<option value="Choice 17">2017</option>' +
        '<option value="Choice 18">2018</option>' +
        '<option value="Choice 19">2019</option>' +
        '<option value="Choice 20">2020</option>' +
        '<option value="Choice 21">2021</option>' +
        '<option value="Choice 22">2022</option>' +
        '</select>' +
        '</div>' +
        '<div class="col-auto align-self-center">to</div>' +
        '<div class="col-lg-5">' +
        '<select class="form-control" data-trigger  name="choices-single-default2">' +
        '<option value="">Select years</option>' +
        '<option value="Choice 1">2001</option>' +
        '<option value="Choice 2">2002</option>' +
        '<option value="Choice 3">2003</option>' +
        '<option value="Choice 4">2004</option>' +
        '<option value="Choice 5">2005</option>' +
        '<option value="Choice 6">2006</option>' +
        '<option value="Choice 7">2007</option>' +
        '<option value="Choice 8">2008</option>' +
        '<option value="Choice 9">2009</option>' +
        '<option value="Choice 10">2010</option>' +
        '<option value="Choice 11">2011</option>' +
        '<option value="Choice 12">2012</option>' +
        '<option value="Choice 13">2013</option>' +
        '<option value="Choice 14">2014</option>' +
        '<option value="Choice 15">2015</option>' +
        '<option value="Choice 16">2016</option>' +
        '<option value="Choice 17">2017</option>' +
        '<option value="Choice 18">2018</option>' +
        '<option value="Choice 19">2019</option>' +
        '<option value="Choice 20">2020</option>' +
        '<option value="Choice 21">2021</option>' +
        '<option value="Choice 22">2022</option>' +
        '</select></div></div></div></div>' +
        '<div class="col-lg-12">' +
        '<div class="mb-3">' +
        '<label for="jobDescription" class="form-label">Job Description</label>' +
        '<textarea class="form-control" id="jobDescription" rows="3" placeholder="Enter description"></textarea>' +
        '</div></div><div class="hstack gap-2 justify-content-end"><a class="btn btn-success" href="javascript:deleteEl(' + count + ')">Delete</a></div></div>';

    div1.innerHTML = document.getElementById('newForm').innerHTML + delLink;

    document.getElementById('newlink').appendChild(div1);
    
    var genericExamples = document.querySelectorAll("[data-trigger]");
    Array.from(genericExamples).forEach(function (genericExamp) {
        var element = genericExamp;
        new Choices(element, {
            placeholderValue: "This is a placeholder set in the config",
            searchPlaceholderValue: "This is a search placeholder",
            searchEnabled: false,
        });
    });
}

function deleteEl(eleId) {
    d = document;
    var ele = d.getElementById(eleId);
    var parentEle = d.getElementById('newlink');
    parentEle.removeChild(ele);
}

function formatDate(date) {
    const d = new Date(date);
    let month = '' + (d.getMonth() + 1);
    let day = '' + d.getDate();
    const year = d.getFullYear();
    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;
    return [year, month, day].join('-');
}

var skillInputField = new Choices('#skillsInput', {
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

document.addEventListener('DOMContentLoaded', function() {
    const formProfile = document.getElementById('formProfile');
    
    formProfile.addEventListener('submit', function(e) {
        e.preventDefault();

        var joiningDateInput = document.getElementById('joiningdateInput');
        if (joiningDateInput) {
            flatpickr(joiningDateInput, {
                dateFormat: "d M, Y",
                defaultDate: joiningDateInput.getAttribute('data-default-date'),
            });
            var selectedDate = formatDate(joiningDateInput.value);   
        }
        
        
        var skillInputFieldValue = skillInputField.getValue(true);
        
        var skillData = '';
        Array.from(skillInputFieldValue).forEach((skill, index) => {
            skillData += skill + ',';
        })
        skillData = skillData.slice(0, -1); 

        const formData = {
            f_name: document.getElementById('firstnameInput').value,
            l_name: document.getElementById('lastnameInput').value,
            phone: document.getElementById('phonenumberInput').value,
            email: document.getElementById('emailInput').value,
            city: document.getElementById('cityInput').value,
            country: document.getElementById('countryInput').value,
            zip: document.getElementById('zipcodeInput').value,
            joining_date: selectedDate,
            skills: skillData,  
            designation: document.getElementById('designationInput').value,
            website: document.getElementById('websiteInput1').value,
            biography: document.getElementById('exampleFormControlTextarea').value,
            avatar: document.getElementById('profile-img-file-input').files[0],
        };  

        axios.put('/profile-settings', formData, {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        })
        .then(function (response) {
            console.log(response.data);
            Toastify({
                text: response.data.message,
                duration: 3000,
                close: true,
                gravity: "top", 
                position: "right", 
                stopOnFocus: true,
                className: "bg-success",
            }).showToast();
        })
        .catch(function (error) {
            console.error('Error:', error);
            Toastify({
                text: error.response.data.message || 'Something went wrong!',
                duration: 3000,
                close: true,
                gravity: "top", 
                position: "right", 
                stopOnFocus: true,
                className: "bg-danger",
            }).showToast();
        });
    });

    const changePasswordForm = document.getElementById('changePasswordForm');

    changePasswordForm.addEventListener('submit', function(e) {
        e.preventDefault();

        var currentPasswordInput = document.getElementById('oldpasswordInput');
        var newPasswordInput = document.getElementById('newpasswordInput');
        var confirmPasswordInput = document.getElementById('confirmpasswordInput');
        
        //Check password
        if (newPasswordInput.value != confirmPasswordInput.value) {
            Toastify({
                text: 'Password and confirm password does not match!',
                duration: 3000,
                close: true,
                gravity: "top", 
                position: "right", 
                stopOnFocus: true,
                className: "bg-danger",
            }).showToast();
            return false;
        }
        axios.put('/profile/change-password', {
            current_password: currentPasswordInput.value,
            password: newPasswordInput.value,
            password_confirmation: confirmPasswordInput.value,
        })
        .then(function (response) {
            console.log(response.data);
            if(response.data.success == true) {
            Toastify({
                text: response.data.message || 'Password changed successfully!',
                duration: 3000,
                close: true,
                gravity: "top", 
                position: "right", 
                stopOnFocus: true,
                className: "bg-success",
            }).showToast();
        } else {
            Toastify({
                text: response.data.message || 'Something went wrong!',
                duration: 3000,
                close: true,
                gravity: "top", 
                position: "right", 
                stopOnFocus: true,
                className: "bg-danger",
            }).showToast();
        }
        })
        .catch(function (error) {
            console.error('Error:', error);
            Toastify({
                text: error.response.data.message || 'Something went wrong!',
                duration: 3000,
                close: true,
                gravity: "top", 
                position: "right", 
                stopOnFocus: true,
                className: "bg-danger",
            }).showToast();
        });
    });
});
