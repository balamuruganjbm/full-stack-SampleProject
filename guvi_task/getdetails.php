<?php include 'inc/header.php';require 'inc/sessionhand.php';?>
<div class="container">
    <div class="row ">
        <div style="margin: 0 auto">
            <div class="jumbotron"><h1 class="display-4 text-danger" id="regHead">Personal Details</h1></div>
            <form action="inc/PDOdetails.php" method="post">
            <div class="form-group">
                <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" required>
                </div>
                <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
                <div class="form-group">
                <label for="mail">Email</label>
                <input type="text" class="form-control" id="checkmail" name="email" required>
                </div>
                <div class="form-group">
                <label for="cname">COMPANY NAME</label>
                <input type="text" class="form-control" id="cname" name="cname" required>
                </div>
                <div class="form-group">
                <label for="des">DESIGNATION</label>
                <input type="text" class="form-control" id="des" name="designation" required>
                </div>
                <div class="form-group">
                <label for="pay">SALARY</label>
                <input type="text" class="form-control" id="pay" name="salary" required>
                </div>
                <div class="form-group">
                <label for="ph">PHONE NUMBER</label>
                <input type="text" class="form-control" id="ph" name="phno" required>
                </div>
                <button name="details" class="btn btn-lg btn-block btn-danger">ADD DETAILS</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>