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
        var expenseName = $("#expense-name").val().trim();
        var expenseAmount = $("#expense-amount").val().trim();
        var expenseType = $("#expense-type").val();
        
        if (expenseName === "") {
            displayError("expense-name", "Expense name cannot be empty");
            isValid = false;
        } else if (!isNaN(expenseName)) {
            displayError("expense-name", "Expense name cannot be a number");
            isValid = false;
        } else {
            removeError("expense-name");
        }
        // Validate expense amount

        if (isNaN(expenseAmount) || expenseAmount === "") {
            displayError("expense-amount", "Expense amount must be a number and cannot be empty");
            isValid = false;
        } else {
            removeError("expense-amount");
        }

        // Validate expense type

        if (expenseType === "") {
            displayError("expense-type", "Please select a expense type");
            isValid = false;
        } else {
            removeError("expense-type");
        }

        return isValid; // Form is valid
    }



    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Ajax for showing expence data
    function showExpenseData() {

        output = " ";
        $.ajax({
            url: "../controllers/personaluser_expensedatahistory.php",
            method: "GET",
            dataType: "json",   //convert json string to js object
            success: function (data) {
                //console.log(data);
                for (i = 0; i < data.length; i++) {         //convert data in rows
                    //console.log(data[i]);
                    output += "<body><div class='history-card-div'> <h5 class='history-title'><i class='history-icon fa-solid fa-coins'></i>" + data[i].ex_name
                        + "</h5> <p class='time'>" + data[i].ex_date
                        + "</p> <p class='history-money'>$" + data[i].ex_amount
                        + "</p><a href=' ' class='history-delete expense-delete' data-eid=" + data[i].ex_id + "><i class=' history-icon fa-solid fa-trash'></i> Delete </a> <a href = ' ' class='history-edit expense-edit' data-eid=" + data[i].ex_id + "><i class=' history-icon fa-solid fa-pen'></i> Edit </button> </div></body>";
                    //data-(anyname) to store the data into this           
                }
                $("#expensehistory").html(output);
            },
        });
    }
    showExpenseData();


    //Ajax for inserting data
    $("#addexpense").click(function (e) {
        if (!validateForm()) {
            e.preventDefault(); // Prevent form submission if validation fails
            return;
        }
        e.preventDefault();
        // console.log("button clicked");
        let pe_id = $("#expense_id").val();
        let pe_name = $("#expense-name").val();
        let pe_amount = $("#expense-amount").val();
        let pe_type = $("#expense-type").val();
        mydata = { id: pe_id, name: pe_name, amount: pe_amount, type: pe_type };
        //console.log(mydata);
        $.ajax({
            url: "../controllers/Personaluser_insertexpencedata.php",
            method: "POST",
            data: JSON.stringify(mydata), // convert mydata obj to string and send to server
            success: function (data) {
                //console.log(data);
                $("#expences")[0].reset(); // reset
                showExpenseData();
            },
        });
    });



    //Ajax for deleteing data
    $(expensehistory).on("click", ".history-delete", function (e) {
        removeError("expense-name");
        removeError("expense-amount");
        removeError("expense-type");
        e.preventDefault();
        console.log("delete clicked");
        let id = $(this).attr("data-eid");
        console.log("the id is:" + id);
        mydata = { ex_id: id };
        $.ajax({
            url: "../controllers/personaluser_deleteexpensedata.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {     //this data will come form the server
                //console.log(data);
                showExpenseData(); // will exicute the full showSavingsData function
            },
        });
    });


    //Ajax for editing data
    $(expensehistory).on("click", ".history-edit", function (e) {
        removeError("expense-name");
        removeError("expense-amount");
        removeError("expense-type");
        e.preventDefault();
        //console.log("edit clicked");
        let id = $(this).attr("data-eid");
        console.log("the id is:" + id);
        mydata = { ex_id: id };
        $.ajax({
            url: "../controllers/personaluser_editexpensedata.php",
            method: "POST",
            dataType: "json",       //return string but need obj so we used datatype
            data: JSON.stringify(mydata),
            success: function (data) {     //this data or  reponse will come form the server
                //console.log(data);
                $("#expense_id").val(data.ex_id);
                $("#expense-name").val(data.ex_name);
                $("#expense-amount").val(data.ex_amount);
                $("#expense-type").val(data.ex_type);
            },
        });

    });

});