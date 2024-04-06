<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1> Ajax using jquery </h1>
        <p>
            read data from file 
        </p>

        <button class="btn btn-primary" id="chng_btn"> Load data  </button>
        
        <div class="bg-light text-primary mt-2 border border-danger" 
        id="maincontent">

            
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="jquery-3.7.1.min.js"> </script>

    <script> 
        var mydiv = document.getElementById("maincontent")

        // var lastmodtime = 0;

        function longpolling(lastmodifiedtime){


            $.ajax({
                method: "post",
                url : "http://localhost/assuitdemo/filehandler/read_data.php",
                data : {
                    lastmod: lastmodifiedtime
                },
                success:function(res){
                    // console.log(res, typeof res)
                    console.log(JSON.parse(res));
                    received_data = JSON.parse(res);
                    lastmodtime = received_data['lastmod']
                    mydiv.innerHTML =received_data['data']

                    longpolling(lastmodtime)



                }

            })

        }

        longpolling(0)


    </script>
    
    
</body>

</html>


