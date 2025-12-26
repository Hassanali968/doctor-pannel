<?php

include("connection.php");

$q="SELECT * FROM `patient`";
$countQuery = "SELECT COUNT(*) AS total FROM patient";
$countResult = mysqli_query($con, $countQuery);
$countRow = mysqli_fetch_assoc($countResult);
$totalAppointments = $countRow['total'];
$result= mysqli_query($con,$q);






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Admin Panel</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial;
        }

        body{
            display: flex;
            background: #f3f4f6;
        }

        /* Sidebar */
        .sidebar{
            width: 230px;
            height: 100vh;
            background: #1f2937;
            color: white;
            padding: 20px 10px;
            position: fixed;
        }
        .sidebar h2{
            text-align: center;
            margin-bottom: 30px;
            font-size: 22px;
        }
        .sidebar a{
            display: block;
            padding: 12px 15px;
            margin: 8px 0;
            background: transparent;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: 0.3s;
        }
        .sidebar a:hover{
            background: #374151;
        }

        /* Main content */
        .main{
            margin-left: 240px;
            padding: 20px;
            width: 100%;
        }

        .topbar{
            background: white;
            padding: 15px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }

        /* Cards */
        .cards{
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .card{
            width: 200px;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        .card h3{
            font-size: 18px;
            margin-bottom: 10px;
        }
        .card p{
            font-size: 22px;
            font-weight: bold;
            color: #111827;
        }

        /* Table */
        table{
            width: 100%;
            background: white;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        table th{
            padding: 12px;
            background: #1f2937;
            color: white;
            text-align: left;
        }
        table td{
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

    .edit-btn{
    background: #38bdf8;
    padding: 6px 14px;
    color: white;
    border-radius: 8px;
    text-decoration: none;
    margin-right: 10px;
   }

.delete-btn{
    background: #ef4444;
    padding: 6px 14px;
    color: white;
    border-radius: 8px;
    text-decoration: none;
}

.back-btn{
    margin-top: 20px;
    display: inline-block;
    padding: 10px 20px;
    background: #8b5cf6;
    color: white;
    text-decoration: none;
    border-radius: 10px;
    
}
        
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Doctor Panel</h2>

        <a href="show.php">Show data</a>
        <a href="add.php">Form</a>
        <a href="#">Logout</a>
    </div>

    <!-- Main -->
    <div class="main">

        <div class="topbar">Dashboard</div>

        <!-- Cards -->
        <div class="cards">
           
            <div class="card">
                <h3>Total Appointments</h3>
                <p><p><?php echo $totalAppointments; ?></p></p>
            </div>
        </div>


        <h2>Appointments List</h2>
        <br>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Father Name</th>
                    <th>Contact Number</th>
                    <th> Email</th>
                    <th>appointment date</th> 
                    <th>Actions</th>
                </tr>
            </thead>
             
            <?php

       while($data= mysqli_fetch_assoc($result)){ ?>

            <tbody>
                <tr>
                    <td><?php echo $data['id']?></td>
                    <td><?php echo $data['Patient_Name']?></td>
                    <td><?php echo $data['Father_Name']?></td>
                    <td><?php echo $data['Contact_Number']?></td>
                    <td><?php echo $data['Email']?></td>
                    <td><?php echo $data['appointment_date']?></td>
                     
                    

                  

                    <td>

             
    <a class='edit-btn' href="edit.php?id=<?php echo $data['id']; ?>"> Accept </a>                
    <a class='delete-btn' href="delete.php?id=<?php echo $data['id']; ?>" class="delete"> Reject </a>
 
                    
                    </td>

                </tr>
 <?php } ?>
          

            </tbody>
        </table>

    </div>

</body>
</html>

