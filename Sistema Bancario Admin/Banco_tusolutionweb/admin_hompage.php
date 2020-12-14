<?php 
// Descargado de la pagina http://tusolutionweb.blogspot.pe/
//SIGUENOS
//Siguenos en twitter
//https://twitter.com/tusolutionweb
//Vista nuestra pagina web
//http://tusolutionweb.blogspot.com/
//Siguenos en facebook
//https://www.facebook.com/CodigofuenteGratis/

session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página de administración</title>
        
        <link rel="stylesheet" href="newcss.css">
    </head>
        <?php include 'header.php' ?>
        <div class='content'>
            
           <?php include 'admin_navbar.php'?>
            <div class='admin_staff'>
               
                <ul>
                    <li><b><u>personal</u></b></li>
       <li> <a href="addstaff.php">Añadir miembro del personal</a></li>
        <li><a href="display_staff.php">Editar miembro del personal</a></li>
        <li> <a href="delete_staff.php">Eliminar personal</a></li>
        </ul>
        </div>
            <div class='admin_customer'>
                <ul>
                   <li><b><u> Cliente</u></b></li>
        <li><a href="addcustomer.php">Agregar Cliente</a></li>
       <li> <a href="display_customer.php">Editar Cliente</a></li>
       <li> <a href="delete_customer.php">Eliminar Cliente</a></li>
        </div>
        </div>
        <?php include 'footer.php';?>
    </body>
</html>