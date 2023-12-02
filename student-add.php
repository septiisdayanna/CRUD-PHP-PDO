<?php 
    session_start(); 
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Insert data into database using PDO in PHP</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">

                <?php if(isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php 
                    unset($_SESSION['message']);
                    endif; 
                ?>

                <div class="card">
                    <div class="card-header">
                        <h3>Insert data 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Course</label>
                                <input type="text" name="course" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student_btn" class="btn btn-primary">Save Student</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>