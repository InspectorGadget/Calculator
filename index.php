<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Test Site </title>
    </head>
    
    <style>
        
        body {
            background-color: white;
            max-width: 700px;
            padding: 40px;
            margin: 30px auto;
            box-shadow: 0 0 45px black;
            text-align: center;
        }
        
        body input[type=text] {
            text-align: center;
            cursor: pointer;
            background-color: whitesmoke;
            max-height: 200px;
            max-width: 100px;
            color: black;
        }
        
        body input[type=submit] {
            cursor: pointer;
        }
        
        body input option {
            cursor: pointer;
        }
        
        
    </style>
    
    <body>
        
        <h1> RTGNetwork | Calculator </h1>
        <br>
        
        <form action="/includes/calculate.php" method="POST">
            
            <input type="text" placeholder="First number" name="fnum">
            <input type="text" placeholder="Last number" name="snum">
            <select name="cal">
                
                <option value="Add"> Add </option>
                <option value="Sub"> Subtract </option>
                
            </select>
            
            <input type="submit" value="Submit">
            
        </form>
        
    </body>
</html>
