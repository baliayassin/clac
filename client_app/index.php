


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
   
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <title>CALCULATOR</title>

</head>

<body>
    <div class="container">
        <div class="decorative-title">
            <div class="decorative-bar left vertical thick"></div>
            <div class="decorative-bar left horizontal thick"></div>
            <div class="decorative-bar left horizontal thin"></div>

            <span> Calculator</span>

            <div class="decorative-bar right vertical thick"></div>
            <div class="decorative-bar right horizontal thick"></div>
            <div class="decorative-bar right horizontal thin"></div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-4" id="GET">
                <h3> GET </h3>
                NUM1
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" id="NUM1" value="50"
                    > NUM2
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" id="NUM2" value="50"
                    > NUM3
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" id="NUM3" value="50"
                    >
                <br>
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button" id="SUM">SUM</button>
                    <button class="btn btn-outline-secondary" type="button" id="AVG">AVG</button>
                    <button class="btn btn-outline-secondary" type="button" id="MULTIPLY">MULT</button>
                </div>
            </div>
            <div class="col col-lg-4" id="POST">
                <h3> POST </h3>
                NUM1
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" id="NUM1" value="50"
                    > NUM2
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" id="NUM2" value="50"
                    > NUM3
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" id="NUM3" value="50"
                    >
                <br>
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button" id="SUM">SUM</button>
                    <button class="btn btn-outline-secondary" type="button" id="AVG">AVG</button>
                    <button class="btn btn-outline-secondary" type="button" id="MULTIPLY">MULT</button>
                </div>
            </div>
            <div class="col col-lg-4" id="PUT">
                <h3> PUT </h3>
                NUM1
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" id="NUM1" value="50"
                   > NUM2
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" id="NUM2" value="50"
                   > NUM3
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1" id="NUM3" value="50"
                    >
                <br>
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button" id="SUM">SUM</button>
                    <button class="btn btn-outline-secondary" type="button" id="AVG">AVG</button>
                    <button class="btn btn-outline-secondary" type="button" id="MULTIPLY">MULT</button>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="decorative-title">
                <div class="decorative-bar left vertical thick"></div>
                <div class="decorative-bar left horizontal thick"></div>
                <div class="decorative-bar left horizontal thin"></div>
                <h1 class="result"> Result: </h1>
                <div class="decorative-bar right vertical thick"></div>
                <div class="decorative-bar right horizontal thick"></div>
                <div class="decorative-bar right horizontal thin"></div>
            </div>
        </div>
        <script src="includes/main.js"></script>
</body>

</html>