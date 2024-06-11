<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<section class="vh-100 bg-dark" style="">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Register</h3>

                        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

                        <?php echo form_open('register/process_registration'); ?>

                            
                        <div class="mb-3">
                                
                                <input type="text" name="nama" value="<?php echo set_value('nama'); ?>" placeholder="Nama" class="form-control form-control-lg" required>
                            </div>

                            <div class="mb-3">
                              
                                <input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" class="form-control form-control-lg" required>
                            </div>

                            <div class="mb-3">
                                
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
                            </div>

                            <div class="mb-3">
                                
                                <select name="role" class="form-select form-control-lg" required>
                                    <option value="user">User</option>
                                </select>
                            </div>


                            <button class="btn bg-success text-light btn-lg btn-block" type="submit">Register</button>
                        <?php echo form_close(); ?>

                        <p class="mt-3">Sudah punya akun? <a href="<?= base_url('login/index'); ?>" class="text-success">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
