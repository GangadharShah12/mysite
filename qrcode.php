<?php
if(isset($_POST["submit"])){
    $first_name=$_POST["first-name"];
    $last_name=$_POST["last-name"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $website=$_POST["website"];
    $url ="https://chart.googleapis.com/chart?cht=qr&,chs=&chl={$data}";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qrcode</title>
<style>

</style>
</head>
<body>
    <div class="container py-3">
        <div class="row">
            <div class="clo-md-12">
                <div class="row">
                    <div class="clo-md-6">
                        <!--form user detail-->
                        <div class="card card-outlne-secondary">
                            <div class="card-header">
                                <h3 class="mo-0">User Information</h3>
                            </div>
                            <?php
$first_name ="Gangadhar";
$last_name ="Sah";
$email="gangadhar12@gmail.com";
$address="Kahthiriya";
$website="https://www.itsolution.com";
if(isset($_POST["btnsubmit"])){
    $first_name=$_POST["first-name"];
    $last_name=$_POST["last-name"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $website=$_POST["website"];

    echo "<per>";
    var_dump($_POST);
    echo "</per>";
}
   ?>
                            <div class="card-body">
                                <form autocomplete="off" class="form" rele="form" action="qrcode.php" method="post">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-lebel form-control-label"> First name</label>
                                        <div class="col-lg-9">
                                            <input clss="form-control" type="text" value="<?php echo $first_name;?>" name="first_name">
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-lg-3 col-form-lebel form-control-label"> Last name</label>
                                        <div class="col-lg-9">
                                            <input clss="form-control" type="text" value="<?php echo $last_name;?>" name="last_name">
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-lg-3 col-form-lebel form-control-label"> Email</label>
                                        <div class="col-lg-9">
                                            <input clss="form-control" type="mail" value="<?php echo $email;?>" name="email">
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-lg-3 col-form-lebel form-control-label"> Address</label>
                                        <div class="col-lg-9">
                                            <input clss="form-control" type="text" value="<?php echo $address;?>" name="address">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-lebel form-control-label"> website</label>
                                        <div class="col-lg-9">
                                            <input clss="form-control" type="text" value="<?php echo $website;?>" name="website">
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-lg-3 col-form-lebel form-control-label"> </label>
                                        <div class="col-lg-9">
                                            <input clss="btn btn-primary" type="submit" value="Generate QR code">
                                        </div>

                                    </div>

                                    </div>

                                    </div>

                                    </div>

                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>