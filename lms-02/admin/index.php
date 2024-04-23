<?php include('layouts/header.php'); ?>
<div class="container">
    <div class="row">
        <h1 class="text-center mt-5 pt-5 mb-5">Admin Login</h1>
        <div class="col-md-4 mx-auto">
            <form action="" method="post" id="loginForm">
                <div class="form-group">
                    <label for="username">Username/Email</label>
                    <input type="text" class="form-control" required>
                </div>
                <div class="form-group mt-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" required>
                </div>
                <div class="form-group mt-4">
                    <input type="checkbox"> Remember Me
                </div>
               
                <input type="submit" class="btn btn-primary mt-4">

            </form>
        </div>
    </div>
</div>
<?php include('layouts/footer.php'); ?>
<script>
    $(document).ready(function() {
		// validate the comment form when it is submitted
		$("#loginForm").validate();
    });
</script>