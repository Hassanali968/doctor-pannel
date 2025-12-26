<?php

include("connection.php");

if(isset($_POST ['submit'])){

$patient_name   =$_POST['patient_name'];
$father_name   =$_POST['father_name'];
$contact_number =$_POST['contact_number'];
$email          =$_POST['email'];
$date           =$_POST['date'];

$q="INSERT INTO `patient`(`Patient_Name`, `Father_Name`, `Contact_Number`, `Email`, `appointment_date`) VALUES ('$patient_name','$father_name','$contact_number','$email','$date')";

$result= mysqli_query($con,$q);

if($result){
    echo "<script>alert('Appointment Successfully')</script>";
   
}
else{
    echo "<script>alert('Appointment error')</script>";
}






}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: Arial;
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container{
            width: 420px;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        h2{
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group{
            margin-bottom: 15px;
        }

        label{
            font-weight: bold;
            margin-bottom: 6px;
            display: block;
        }

        input, select{
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        /* + Button Style */
        .add-btn{
            margin-top: 10px;
            background: #10b981;
            padding: 8px 12px;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        


        
    </style>

</head>
<body>


<form method="POST" >
    <div class="form-container">
        <h2>Appointments</h2>
        
            <div class="form-group">
                <label> Name</label>
                
                <input type="text" name="patient_name" placeholder="Patient Name">
            </div>

            
            <div class="form-group">
                <label>Father Name</label>
                <input type="text" name="father_name" placeholder="Father name">
            </div>

            <div class="form-group">
                <label> Number</label>
                <input type="text" name="contact_number" placeholder="Contact Number">
            </div>
 
            <div class="form-group">
                <label> Email</label>

                <input type="email" name="email" placeholder="Email">

            </div>
            


            <div class="form-group">
                <label>Date</label>
                <input type="date" name="date" placeholder="Date"  id="appointment_date">
            </div>

           
               <input type="submit" name="submit" value="Appointment done" class="add-btn">
           

        

    </div>
</form>


<script>
    let today = new Date();

    
    let minDate = today.toISOString().split("T")[0];


    let maxDate = new Date();
    maxDate.setMonth(maxDate.getMonth() + 1);
    maxDate = maxDate.toISOString().split("T")[0];

    let dateInput = document.getElementById("appointment_date");

    dateInput.setAttribute("min", minDate);
    dateInput.setAttribute("max", maxDate);

 
    dateInput.addEventListener("change", function () {
        if (this.value < minDate || this.value > maxDate) {
            alert("Please select date within 1 month only!");
            this.value = "";
        }
    });
</script>


   

</body>
</html>
