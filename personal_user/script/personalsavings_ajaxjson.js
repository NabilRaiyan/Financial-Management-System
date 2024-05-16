$(document).ready(function () {


    // Function to create and display error message
    function displayError(inputId, message) {
        var errorDiv = $("<div>").addClass("error-message").text(message);
        $("#" + inputId).after(errorDiv);
    }

    // Function to remove error message
    function removeError(inputId) {
        $("#" + inputId).next(".error-message").remove();
    }

    // Function to validate the form inputs
    function validateForm() {
        $(".error-message").remove();
        var isValid = true;

        // Validate savings name
        var savingsName = $("#savings-name").val().trim();
        var savingsAmount = $("#savings-amount").val().trim();
        var savingsType = $("#savings-type").val();

        if (savingsName === "") {
            displayError("savings-name", "Savings name cannot be empty");
            isValid = false;
        } else if (!isNaN(savingsName)) {
            displayError("savings-name", "Savings name cannot be a number");
            isValid = false;
        } else {
            removeError("savings-name");
        }
        // Validate savings amount

        if (isNaN(savingsAmount) || savingsAmount === "") {
            displayError("savings-amount", "Savings amount must be a number and cannot be empty");
            isValid = false;
        } else {
            removeError("savings-amount");
        }

        // Validate savings type

        if (savingsType === "") {
            displayError("savings-type", "Please select a savings type");
            isValid = false;
        } else {
            removeError("savings-type");
        }

        return isValid; // Form is valid
    }



    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Ajax to search history
    $("#search").keyup(function (e) {
        var input = $(this).val(); // Get the value of the input field
        console.log("Search input:", input); // Log the input value for debugging
    
        // Perform AJAX call for searching
        $.ajax({
            url: "../controllers/personaluser_searchSavings.php",
            method: "POST",
            data: { search: input },
            dataType: "json",
            success: function (data) {
                console.log("Search response:", data); // Log the response for debugging
                var output = ""; // Initialize output variable
                // Loop through the data and construct HTML
                for (var i = 0; i < data.length; i++) {
                    output += "<div class='history-card-div'> <h5 class='history-title'><i class='history-icon fa-solid fa-coins'></i>" + data[i].s_name
                        + "</h5> <p class='time'>" + data[i].s_date
                        + "</p> <p class='history-money'>$" + data[i].s_amount
                        + "</p><a href=' ' class='history-delete savings-delete' data-sid=" + data[i].s_id + "><i class=' history-icon fa-solid fa-trash'></i> Delete </a> <a href = ' ' class='history-edit savings-edit' data-sid=" + data[i].s_id + "><i class=' history-icon fa-solid fa-pen'></i> Edit </button> </div>";
                }
                // Update the HTML content
                $("#savingshistory").html(output);
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", status, error); // Log any error that occurs
            }
        });
    });
    
    //Ajax show history
    function showSavingsData() {
        output = " ";
        $.ajax({
            url: "../controllers/personaluser_sdatahistory.php",
            method: "GET",
            dataType: "json",   //convert json string to js object
            success: function (data) {

                //console.log(data);
                for (i = 0; i < data.length; i++) {         //convert data in rows
                    //console.log(data[i]);  
                    output += "<body><div class='history-card-div'> <h5 class='history-title'><i class='history-icon fa-solid fa-coins'></i>" + data[i].s_name
                        + "</h5> <p class='time'>" + data[i].s_date
                        + "</p> <p class='history-money'>$" + data[i].s_amount
                        + "</p><a href=' ' class='history-delete savings-delete' data-sid=" + data[i].s_id + "><i class=' history-icon fa-solid fa-trash'></i> Delete </a> <a href = ' ' class='history-edit savings-edit' data-sid=" + data[i].s_id + "><i class=' history-icon fa-solid fa-pen'></i> Edit </button> </div></body>";
                    //data-(anyname) to store the data into this           
                }

                $("#savingshistory").html(output);


            },
        });

    }
    showSavingsData();



    //Ajax for inserting data

    $("#addsavings").click(function (e) {
        if (!validateForm()) {
            e.preventDefault(); // Prevent form submission if validation fails
            return;
        }
        e.preventDefault();     //to prevent default behavior(refresh) used e object or event object
        let ps_id = $("#savings_id").val();
        let ps_name = $("#savings-name").val();
        let ps_amout = $("#savings-amount").val();
        let ps_type = $("#savings-type").val();

        //jsobject
        mydata = { id: ps_id, name: ps_name, amount: ps_amout, type: ps_type };
        console.log(mydata);

        $.ajax({
            url: "../controllers/personaluser_savingdata.php",
            method: "POST",
            data: JSON.stringify(mydata), //convert mydata obj to string and send to server
            success: function (data) {
                //console.log(data);
                // msg="<div>"+ data + "</div>";   //sending message via html
                //  $("#msg").html(msg);           //add css for this message
                $("#savings")[0].reset();
                showSavingsData();
            },
        });

    });





    //Ajax for editing data
    $(savingshistory).on("click", ".history-edit", function (e) {
        removeError("savings-name");
        removeError("savings-amount");
        removeError("savings-type");
        e.preventDefault();
        //console.log("edit clicked");
        let id = $(this).attr("data-sid");
        console.log("the id is:" + id);
        mydata = { s_id: id };
        $.ajax({
            url: "../controllers/personaluser_editsavingdata.php",
            method: "POST",
            dataType: "json",       //return string but need obj so we used datatype
            data: JSON.stringify(mydata),
            success: function (data) {     //this data or  reponse will come form the server
                //console.log(data);
                $("#savings_id").val(data.s_id);
                $("#savings-name").val(data.s_name);
                $("#savings-amount").val(data.s_amount);
                $("#savings-type").val(data.s_type);
            },
        });

    });




    //Ajax for deleteing data
    $(savingshistory).on("click", ".history-delete", function (e) {
        removeError("savings-name");
        removeError("savings-amount");
        removeError("savings-type");
        e.preventDefault();
        //console.log("delete clicked");
        let id = $(this).attr("data-sid");
        console.log("the id is:" + id);
        mydata = { s_id: id };
        $.ajax({
            url: "../controllers/personaluser_deletesavingdata.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {     //this data will come form the server
                console.log(data);
                showSavingsData();  // will exicute the full showSavingsData function
            },
        });
    });



});