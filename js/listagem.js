$(document).ready(function () {


    $(".selectIlha").change(function () {

        let ilha = $(this).find(":selected").val();

        console.log(ilha);

        $.ajax({

            type: 'post', // the method (could be GET btw)
            url: 'index.php', // The file where my php code is
            data: {
                'ilha':ilha// all variables i want to pass. In this case, only one.
            },
            success: function (data) { // in case of success get the output, i named data
               alert(data); // do something with the output, like an alert
            }
        });

    });

    $(".selectConcelho").change(function () {

        let concelho = $(this).find(":selected").val();

        console.log(concelho);

        $.ajax({

            type: 'post', // the method (could be GET btw)
            url: 'index.php', // The file where my php code is
            data: {
                'concelho': concelho // all variables i want to pass. In this case, only one.
            },
            success: function (data) { // in case of success get the output, i named data
                alert(data); // do something with the output, like an alert
            }
        });

    });


});