<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    require_once('../library/users.php');
    $users = new users();
    ?>
    <head>
        <meta charset="UTF-8">
        <title>Users View</title>
        <script src="jquery-2.1.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Dobber Fantasy</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="">Rankings</a></li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Teams<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">Action</a></li>
                                <li><a href="">Another action</a></li>
                                <li><a href="">Something else here</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="">Separated link</a></li>
                                <li><a href="">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
        <div class="container">
            <table class="table table-bordered">
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email Address</th>
                </tr>
                <?php
                $usersData = $users->getUsers();
                foreach ($usersData as $user) {
                    echo "<tr>"
                    . "<td>" . $user["username"] . "</td>"
                    . "<td>" . $user["password"] . "</td>"
                    . "<td>" . $user["email"] . "</td>"
                    . "</tr>";
                }
                ?>
            </table>
    </body>
</html>
