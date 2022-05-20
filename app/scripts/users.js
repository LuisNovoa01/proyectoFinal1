function get()
{
    $(document).delegate("[data-bs-target='#editUserModal']", "click", function() {
        const employee_id = $(this).attr('data-id');
        // Ajax config
        $.ajax({
            type: "POST", //we are using GET method to get data from server side
            url: 'http://localhost/proyectoFinal/detail_user', // get the route value
            data: {employee_id}, //set data
            beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
            },
            success: function (response) {
                const user = JSON.parse(response)
                $("#edit-form [name=\"id\"]").val(user.id);
                $("#edit-form [name=\"nombre\"]").val(user.nombre);
                $("#edit-form [name=\"apellidos\"]").val(user.surname);
                $("#edit-form [name=\"dni\"]").val(user.dni);
                $("#edit-form [name=\"gender\"]").val(user.gender);
                $("#edit-form [name=\"birth_date\"]").val(user.birth_date);
                $("#edit-form [name=\"email\"]").val(user.email);
                $("#edit-form [name=\"phone\"]").val(user.phone);
                $("#edit-form [name=\"postalCode\"]").val(user.postalCode);
                $("#edit-form [name=\"address\"]").val(user.address);
                $("#edit-form [name=\"rol\"]").val(user.rol);
                $("#edit-form [name=\"department\"]").val(user.department);
                $("#edit-form [name=\"restart_password\"]").val(user.restart_password);
                $("#edit-form [name=\"restar_code\"]").val(user.restart_code);
            }
        });
    });
}

function update()
{
    $("#btnUpdateSubmit").on("click", function() {
        const $this = $(this); //submit button selector using ID
        const $caption = $this.html();// We store the html content of the submit button
        const form = "#edit-form"; //defined the #form ID
        const formData = $(form).serializeArray(); //serialize the form into array
        const route = $(form).attr('action'); //get the route using attribute action

        // Ajax config
        $.ajax({
            type: "POST", //we are using POST method to submit the data to the server side
            url: route, // get the route value
            data: formData, // our serialized array data for server side
            beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
            },
            success: function (response) {//once the request successfully process to the server side it will return result here
                window.location.reload();
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                // You can put something here if there is an error from submitted request
            }
        });
    });
}

function deleteUser(id)
{
        $.ajax({
            type: "POST", //we are using POST method to submit the data to the server side
            url: "http://localhost/proyectoFinal/delete_user", // get the route value
            data: {id}, // our serialized array data for server side
            beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
            },
            success: function (response) {//once the request successfully process to the server side it will return result here
                window.location.reload();
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                // You can put something here if there is an error from submitted request
            }
        });
}

$(document).ready(function() {
    get();
    update();
});