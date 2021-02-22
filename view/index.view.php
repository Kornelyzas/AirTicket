
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AirTicket</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<?php

$name = $_POST["name"];
$lastname = $_POST["lastName"];
$idnumb = $_POST["inputID"];
$fromm_country = $_POST["from"];
$too_country = $_POST["to"];
$flightnum = $_POST["flightNum"];
$lug = $_POST["luggage"];
$price = 280;
$both = $price + 30;

if (isset($_POST['submit'])):?>
<div class="container display w-50 p-3 mt-5 d-flex align-items-center"
 style="background-color: #1d5aea;
 height: 300px; text-align: center; border-radius: 2mm"
>
    <h2><?php echo "Flight Ticket"?></h2>
    <div class="main-part d-flex .flex-column" style="height: 70%;
    width: 100%; background: #eee; border-radius: 2mm">
        <div class="lpart pt-5" style="height: 100%;
        width: 50%; text-align: center">
            <h5><?php echo "First Name: ". $name?></h5>
            <h5><?php echo "Last Name: ". $lastname?></h5>
            <h5><?php echo "ID: ". $idnumb?></h5>
        </div>
        <div class="rpart pt-5" style="height: 100%;
        width: 50%; text-align: center">
            <h5><?php echo "From: ". $fromm_country?></h5>
            <h5><?php echo "To: ". $too_country?></h5>
            <h5><?php echo "Flight: ". $flightnum?></h5>
            <h5><?php if ($lug > 20)
                {
                    echo "Price: " . $both . "$ (30$ luggage tax)";
                }
                else
                {
                    echo "Price: " . $price . "$";
                }
                ?></h5>
        </div>
    </div>
</div>
<?php endif;?>

    <div class="container w-75 p-3 mt-5" style="background-color: #eee;">
        <form class="row g-3" method="post">
            <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" name="name">
            </div>
            <div class="col-md-6">
                <label for="inputLastName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="inputLastName" name="lastName">
            </div>
            <div class="col-12">
                <label for="inputFrom" class="form-label">From</label>
                <select id="inputFrom" class="form-select" name="from">
                    <option selected>Choose...</option>
                    <?php foreach ($from_countries as $from_country):?>
                    <option value="<?=$from_country;?>"><?=$from_country;?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="col-12">
                <label for="inputTo" class="form-label">To</label>
                <select id="inputTo" class="form-select" name="to">
                    <option selected>Choose...</option>
                    <?php foreach ($to_countries as $to_country):?>
                        <option value="<?=$to_country;?>"><?=$to_country;?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputID" class="form-label">Personal ID Number</label>
                <input type="text" class="form-control" id="inputID" name="inputID">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Luggage</label>
                <select id="inputState" class="form-select" name="luggage">
                    <option selected>Choose...</option>
                    <?php foreach ($luggages as $luggage):?>
                        <option value="<?=$luggage;?>"><?=$luggage;?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputFlightNum" class="form-label">Flight Number</label>
                <select id="inputFlightNum" class="form-select" name="flightNum">
                    <option selected>Choose...</option>
                    <?php foreach ($flights as $flight):?>
                        <option value="<?=$flight;?>"><?=$flight;?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Remark</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="remark"></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="submit">Print Ticket</button>
            </div>
        </form>
    </div>
</body>
</html>
