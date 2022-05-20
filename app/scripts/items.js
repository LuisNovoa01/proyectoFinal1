function update()
{
    $("#btnUpdateSubmit").on("click", function() {
        const $this = $(this); //submit button selector using ID
        const $caption = $this.html();// We store the html content of the submit button
        const form = "#editItemForm"; //defined the #form ID
        const formData = $(form).serializeArray(); //serialize the form into array
        const route = $(form).attr('action'); //get the route using attribute action
       // debugger

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

function filterByColumn()
{
    let filter = {date: null, depart: null }

    $("#inputDate").change(function () {
        const date = new Date($("#inputDate").val());
        filter.date = `${date.getFullYear()}-${date.getMonth() + 1}-${date.getDate() + 1}`
        handleFilter(filter)
    });

    $("#inputDepartment").change(function () {
        const depart = $("#inputDepartment").val();
        filter.depart = depart
        handleFilter(filter)
    });
}

function handleFilter(filter)
{
   $("#formFilter").submit();

}

$(document).ready(function() {
    update();
    filterByColumn();
});