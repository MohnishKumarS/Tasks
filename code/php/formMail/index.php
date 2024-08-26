<?php  session_start();  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

  <div class="container">
    <div class="contact-form">
        

        <div class="form mt-5">
                <div class="row">
                    <div class="col-lg-7 m-auto ">
                        
                        <div class="shadow p-5 rounded">
                            <div>
                                <h1 class="title text-center text-primary">Contact us</h1>
                            </div>

                            <?php if(isset($_SESSION['status']))
                            { 
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> '.$_SESSION['status'].'
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>'; 

                              unset($_SESSION['status']);
                            }
                             ?>

                         <form action="mail.php" method="post">
                            <div class="mb-4">
                                <label for="" class="form-label">Username <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="username" placeholder="Enter your name here" onkeyup="this.value=this.value.replace(/[^a-z]/gi,'')" required>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" placeholder="abc@gmail.com" required>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Mobile <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile no" onkeyup="this.value=this.value.replace(/[^0-9]/gi,'')"
                                 pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit valid number" maxlength="10"  required>
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Service <span class="text-danger">*</span></label>
                                <select class="form-select " name="service" required>
                                    <option selected="">Select one</option>
                                    <option value="Abroad Placement">Abroad Placement</option>
                                    <option value="Abroad Course">Abroad Course</option>
                                </select>
                            </div>
                            <div class="mb-5">
                                <label for="" class="form-label">Special Note <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="message" name="message" required></textarea>
                            </div>

                            <div class="mb-3  text-center">
                                <button class="btn btn-outline-success w-50" type="submit" name="contact_submit">Submit</button>
                            </div>
                         </form>
                        
                        </div>
                    </div>
                </div>
        </div>
    </div>
  </div>
    




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>