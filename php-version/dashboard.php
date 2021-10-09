<!DOCTYPE html>
<html>

<head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>Dashboard</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
            <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
            <!-- <link href='assets/css/boxicons.min.css' rel='stylesheet'> -->
            <link rel="stylesheet" href="assets/css/dashboard.css" />
</head>

<body id="body-pd" class="bg-light">
            <!-- Navbar -->
            <?php include("layouts/navbar.php"); ?>

            <!-- SIdebar -->
            <?php include("layouts/sidebar.php"); ?>
            <!--Container Main start-->
            <div class="p-2">
                        <main class="container-fluid">
                                    <!-- Konten Disini -->
                                    <?php include "layouts/content.php"; ?>
                        </main>
            </div>
            <?php include("layouts/footer.php"); ?>
            <!--Container Main end-->
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
            <!-- <script type='text/javascript' src='assets/js/bootstrap.bundle.min.js'></script> -->
            <script type="text/javascript" src="assets/js/dashboard.js"></script>
            <!-- Custom JavaScript -->
            <script src="assets/js/custom.js"></script>
</body>

</html>