<?php include 'inc/header.php';?>
<script type="text/javascript" src="./inc/ajaxcall.js"></script>
<div class="container">
    <div class="row ">
        <div style="margin: 0 auto">
        <table class="table table-bordered table-dark">
            <thead>
                <th class="text-center bg-danger" colspan="2">PERSONAL DETAILS</th>
            </thead>
            <tbody>
                <tr>
                <th class="bg-primary" scope="row">FIRST NAME </th>
                <td id="firstname"></td>
                </tr>
                <tr>
                <th class="bg-primary" scope="row">LAST NAME </th>
                <td id="lastname"></td>
                </tr>
                <tr>
                <th class="bg-primary" scope="row">EMAIL ID </th>
                <td id="email"></td>
                </tr>
                <tr>
                <th class="bg-primary" scope="row">COMPANY NAME </th>
                <td id="companyname"></td>
                </tr>
                <tr>
                <th class="bg-primary" scope="row">DESIGNATION</th>
                <td id="designation"></td>
                </tr>
                <tr>
                <th class="bg-primary" scope="row">SALARY</th>
                <td id="salary"></td>
                </tr>
                <tr>
                <th class="bg-primary" scope="row">PHONE NUMBER</th>
                <td id="phno"></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>