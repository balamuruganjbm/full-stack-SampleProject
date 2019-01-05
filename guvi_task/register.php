<?php include 'inc/header.php';?>
<div class="container">
    <div class="row ">
        <div style="margin: 0 auto">
        <h1 class="display-4 text-info" id="regHead">REGISTER</h1>
            <form action="inc/PDOregister.php" method="post">
            <div class="form-group">
                <div class="form-group">
                <label for="name">USER NAME</label><br>
                <input type="text" class="form-control" id="name" name="username" placeholder="Enter new username" required>
                </div>
                <div class="form-group">
                <label for="name">EMAIl ID</label><br>
                <input type="email" class="form-control" id="mail" name="email" placeholder="Enter your email id" required>
                </div>
                <div class="form-group">
                <label for="pass">PASSWORD</label><br>
                <input type="password" class="form-control" id="pass" name="password" placeholder="Enter new password" required>
                </div>
                <button name="register" class="btn btn-lg btn-block btn-outline-info">REGISTER</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>