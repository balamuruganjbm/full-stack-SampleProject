<?php include 'inc/header.php';?>
<div class="container">
    <div class="row ">
        <div style="margin: 0 auto">
        <h1 class="display-4 text-success" id="regHead">LOG IN</h1>
            <form action="inc/PDOlogin.php" method="post">
            <div class="form-group">
                <div class="form-group">
                    <label for="name">EMAIL ID</label>
                    <input type="text" class="form-control" id="name" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pass">PASSWORD</label>
                    <input type="password" class="form-control" id="pass" name="password" required>
                </div>
                    <button name="login" class="btn btn-lg btn-block btn-outline-success">LOGIN</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>