<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <form id="fm">  
        
        <select name="txtname" id="txt" class="select p-2 m-4" style="margin:21px;">
            <option class="p-1">Select</option>
            <?php
            include "../php/Codes.php";
            $co = new Codes();
            $co->fillCombo("SELECT id, name FROM people");
            ?>
        </select>
    
       <input type="submit" id="peop" class="btn btn-success text-white select p-2" value="Show Report">
      

    </form>
    <div id="peopl" class="mt-4"></div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $("#peop").click((event) => {
        event.preventDefault();
        let txtname = $("#txt option:selected").text();

        $.ajax({
            url: "../php/report.php",
            method: "POST",
            data: { name: txtname },
            success: (res) => {
                $("#peopl").html(res); // Display the table in the div
            },
            error: (xhr, status, error) => {
                console.error("Error:", error);
                $("#people").html("<p class='text-danger'>An error occurred while fetching the report.</p>");
            }
        });
    });
</script>
</html>
