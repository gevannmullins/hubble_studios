<?php

include_once "vendor/autoload.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Calculator App</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <form name="calculatorform" id="calculatorform">
                <div class="form-group">
                    <label for="string_calculate">Enter math problem:</label>
                    <input name="string_calculate" type="text" class="form-control" id="string_calculate">
                </div>
                <button type="submit" class="btn btn-default">Calculate</button>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label for="calculated_solution">Solution:</label>
            <div id="calculated_solution">
                ... Answer will display here
            </div>
        </div>
    </div>
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../assets/jquery/jquery-3.5.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){

        $("#calculatorform").submit(function(e){
            e.preventDefault();
            // $(this)
            let string_calculate = $("#string_calculate").val();

            $.ajax({
                type: "POST",
                url: "calculate.php",
                data: {"string_calculate": string_calculate},
                success: function(data){
                    $("#calculated_solution").html(data);
                }

            });

        });

    });
</script>

</body>
</html>