
$("#btnUpdateSubmit").click(function(){

     Swal.fire({
            title: 'Atención',
            text: '¿Deseas editar el Departamento?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'No'
        }).then((result)=>{
            //console.log(result);
            if (result.value) {
                 let url_post = $("#url").val();
                 let id = $("#id").val();
                 let inputName = $("#inputName").val();
                 let inputDescription = $("#inputDescription").val();
                 let inputPhone = $("#inputPhone").val();
                 let inputEmail = $("#inputEmail").val();
                 let inputIcon = $("#inputIcon").val();
                 let disableDepartment = $("#disableDepartment").val();

                const datos = {
                    id,
                    inputName,
                    inputDescription,
                    inputPhone,
                    inputEmail,
                    inputIcon,
                    disableDepartment
                }
                $.ajax({
                    type:'POST',
                    data:datos,
                    url:url_post,
                    success:function(response){
                        console.log(response);
                        if (response == 'true'){
                            Swal.fire({
                                position:'center',
                                icon:'success',
                                title:'El departamento ha sido actualizado',
                                showConfirmButton: false,
                                timer:1000
                            });
                        }
                    }
                  });
         
            }else{
                
            }

        })

});

function getDepartment()
{
    $(document).delegate("[data-bs-target='#editDepartmentModal']", "click", function() {
        const department_id = $(this).attr('data-id');
        //console.log(department_id);
        // Ajax config
        $.ajax({
            type: "POST", //we are using GET method to get data from server side
            url: 'http://localhost/proyectoFinal/detail_department', // get the route value
            data: {department_id}, //set data
            beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
            },
            success: function (response) {
                const department = JSON.parse(response)
                $("#edit-form [name=\"id\"]").val(department.idDepartment);
                $("#edit-form [name=\"name\"]").val(department.name);
                $("#edit-form [name=\"description\"]").val(department.description);
                $("#edit-form [name=\"phone\"]").val(department.phone);
                $("#edit-form [name=\"emailDepartment\"]").val(department.emailDepartment);
                $("#edit-form [name=\"iconDepartment\"]").val(department.iconDepartment);
                $("#edit-form [name=\"disable\"]").val(department.disable);
            }
        });
    });
}


function deleteDepartment(id)
{
        $.ajax({
            type: "POST", //we are using POST method to submit the data to the server side
            url: "http://localhost/proyectoFinal/delete_department", // get the route value
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



