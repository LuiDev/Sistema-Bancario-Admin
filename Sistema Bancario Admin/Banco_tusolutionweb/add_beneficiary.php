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
        
if(!isset($_SESSION['customer_login'])) 
    header('location:index.php');   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Beneficiary</title>
        
        <link rel="stylesheet" href="newcss.css">
        <style>
            .content_customer table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}
.content_customer td{
    
    
}

        </style>
    </head>
        <?php include 'header.php' ?>
<div class='content_customer'>
            
           <?php include 'customer_navbar.php'?>
    <div class="customer_top_nav">
             <div class="text">Welcome <?php echo $_SESSION['name']?></div>
            </div>
    <br><br>
    <form action='add_beneficiary_process.php' method='post'   cuenta<br><br>
        <h3 style="text-align:center;color:#2E4372;"><u>Agregar beneficiario</u></h3>
        <table align="center">
            
            <tr><td><span class="heading">Nombre del beneficiario: </span></td><td><input type='text' name='name' required></td></tr>
            <tr><td><span class="heading">No cuenta: </span></td><td><input type='text' name='account_no' required></td></tr>
            <tr><td><span class="heading">Seleccionar rama: </span></td><td><select name='branch_select' required>
                        
                        <option value='KOLKATA'>Calcuta</option>
                        <option value='DELHI'>Delhi</option>
                        <option value='BANGALORE'>Bangalore</option>
                        </select></td></tr>
            <tr><td><span class="heading">Código Ifsc: </span></td><td><input type='text' name='ifsc_code' required></td></tr> </table>
           <table align="center"> <tr><td><input type='submit' name='submitBtn' value='Add Beneficiary' class="addstaff_button">
        </table>
        
        </form>
    
    <?php include 'footer.php'?>
           