<?php
include("connection.php");


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $q = "SELECT * FROM patient WHERE id='$id'";
    $result = mysqli_query($con,$q);
    $data = mysqli_fetch_assoc($result);
}

if(isset($_POST['submit'])){
    
    $id          =$_POST['id'];
$patient_name   =$_POST['patient_name'];
$father_name   =$_POST['father_name'];
$contact_number =$_POST['contact_number'];
$email          =$_POST['email'];
$date       =$_POST['date'];


    $q = "UPDATE patient SET `patient_name`='$patient_name', `father_name`='$father_name', `contact_number`='$contact_number' , `email`='$email' , `appointment_date`='$date' WHERE id='$id'";
    $result = mysqli_query($con,$q);

    if($result){
        header("location:show.php");
        exit();
    } else {
        echo "Error updating record!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

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

                 <input type="hidden" name="id" value="<?php echo $data['id']; ?>">


                <label> Name</label>
                
                <input type="text" name="patient_name" value="<?php echo $data['Patient_Name']; ?>" placeholder="Patient Name" >
            </div>

            
            <div class="form-group">
                <label>Father Name</label>
                <input type="text" name="father_name" value="<?php echo $data['Father_Name']; ?>" placeholder="Father name" >
            </div>

            <div class="form-group">
                <label> Number</label>
                <input type="text" name="contact_number" value="<?php echo $data['Contact_Number']; ?>" placeholder="Contact Number" >
            </div>
 
            <div class="form-group">
                <label> Email</label>

                <input type="email" name="email" value="<?php echo $data['Email']; ?>" placeholder="Email" >

    </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" name="date" value="<?php echo $data['appointment_date']; ?>" placeholder="Date" >
            </div>

        
               <input type="submit" name="submit" value="Update" class="add-btn">

        

    </div>
</form>
   

</body>
</html>
