<!DOCTYPE html>
<!--
Copyright (C) 2017 RTG
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title> Calculator </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>

        input {
            text-align: center;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-default">

    <div class="container-fluid">

        <div class="navbar-header">

            <a class="navbar-brand" href="#"> Calculator </a>

        </div>

        <ul class="nav navbar-nav navbar-left">

            <li class="active"> <a href="index.php"> Home </a> </li>

        </ul>

    </div>

</nav>

<center>

    <br><br>

    <form method="POST" action="redirect_script.php">

        <input type="text" name="value1" placeholder="Enter your first Digit"><br><br>
        <input type="text" name="value2" placeholder="Enter your second Digit"><br><br>
        <select name="selector">
            <option value=""> Select here </option>
            <option value="addition"> Add </option>
            <option value="Subtract"> Subtract </option>
        </select>
        <button type="submit"> Calculate </button>

    </form>

</center>

</body>
