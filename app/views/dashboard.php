<?php
    session_start();
    if (!isset($_SESSION['UserID'])) {
        echo "<script>alert('You don\'t have the permission to access this page!');</script>";
        echo "<script>location.href = 'http://localhost/Travigo2/home/index';</script>";
    }else {
    $getData = new toursController();
    $Tours = $getData->getTours();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/b44b654493.js" crossorigin="anonymous"></script>
    <style>
        body {
            color: #404E67;
            background: #F5F7FA;
            font-family: 'Open Sans', sans-serif;
        }
        .table-wrapper {
            width: 100%;
            background: #fff;
            padding: 20px;	
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
        }
        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
        }
        .table-title h2 {
            margin: 6px 0 0;
            font-size: 22px;
        }
        .table-title .add-new {
            float: right;
            height: 30px;
            font-weight: bold;
            font-size: 12px;
            text-shadow: none;
            min-width: 100px;
            border-radius: 50px;
            line-height: 13px;
        }
        .table-title .add-new i {
            margin-right: 4px;
        }
        table.table {
            table-layout: fixed;
        }
        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
        }
        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }
        table.table th:last-child {
            width: 100px;
        }
        table.table td a {
            cursor: pointer;
            display: inline-block;
            margin: 0 4px;
            min-width: 24px;
        }
        table.table td a.edit {
            color: #0080ff;
        }
        table.table td a.delete {
            color: #E34724;
        }
        table.table td i {
            font-size: 19px;
        }
        table.table td a.add i {
            font-size: 24px;
            margin-right: -1px;
            position: relative;
            top: 3px;
        }    
        table.table .form-control {
            height: 32px;
            line-height: 32px;
            box-shadow: none;
            border-radius: 2px;
        }
        table.table .form-control.error {
            border-color: #f50000;
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 10;
        }
        .con-nav, .nuvnuv, .nuvnuv .con-nav {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .navnav {
            height: 100vh;
            width: 200px;
            border-right: 1px solid rgb(180, 180, 180);
        }
        .nuvnuv {
            justify-content: flex-start;
        }
        .logodark {
            width: 100%;
        }
        .nuvnuv .con-nav li {
            width: 100px;
            margin-top: 10px;
            border: 1px solid rgb(180, 180, 180);
            border-radius: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid con-nav navnav">
            <a class="navbar-brand" href="index">
                <img src="../public/img/Travigo_logo_black.png" alt="Travigo Logo" id="logodark" class="logodark">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nuvnuv" id="navbarNav">
                <ul class="navbar-nav con-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Tours">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-xl"></div>
            <div class="col-10 col-xl-12">
                <div class="container-lg">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2>Travigo's Dashboard</h2>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="add" type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i>Add New</a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Destination</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($Tours as $tour) {
                                    ?>
                                    <tr>
                                        <td><?= $tour['Destination'];?></td>
                                        <td><?= $tour['Description'];?></td>
                                        <td><?= $tour['Price'];?></td>
                                        <td><?= $tour['Image'];?></td>
                                        <td>
                                            <a href="http://localhost/Travigo2/tours/update/<?= $tour['TourID']?>" class="edit" title="Edit" data-toggle="tooltip"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="http://localhost/Travigo2/tours/delete/<?= $tour['TourID']?>" class="delete" title="Delete" data-toggle="tooltip"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php }