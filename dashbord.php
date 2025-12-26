<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor Panel</title>
    <style>
        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            background:#f4f6f9;
        }
        .sidebar{
            width:220px;
            height:100vh;
            background:#2c3e50;
            color:#fff;
            position:fixed;
        }
        .sidebar h2{
            text-align:center;
            padding:20px 0;
            margin:0;
            background:#1abc9c;
        }
        .sidebar ul{
            list-style:none;
            padding:0;
        }
        .sidebar ul li{
            padding:15px 20px;
            cursor:pointer;
        }
        .sidebar ul li:hover{
            background:#34495e;
        }
        .main{
            margin-left:220px;
            padding:20px;
        }
        .header{
            background:#fff;
            padding:15px;
            border-radius:5px;
            margin-bottom:20px;
        }
        .cards{
            display:grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap:20px;
        }
        .card{
            background:#fff;
            padding:20px;
            border-radius:8px;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
        }
        .card h3{
            margin:0 0 10px;
            color:#333;
        }
        table{
            width:100%;
            border-collapse:collapse;
            background:#fff;
            margin-top:20px;
            border-radius:8px;
            overflow:hidden;
        }
        table th, table td{
            padding:12px;
            border-bottom:1px solid #ddd;
            text-align:left;
        }
        table th{
            background:#1abc9c;
            color:#fff;
        }
        .btn{
            padding:6px 12px;
            border:none;
            border-radius:4px;
            cursor:pointer;
        }
        .btn-accept{background:#2ecc71;color:#fff;}
        .btn-reject{background:#e74c3c;color:#fff;}
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Doctor Panel</h2>
    <ul>
        <li>Dashboard</li>
        <li>My Profile</li>
        <li>Availability</li>
        <li>Appointments</li>
        <li>Logout</li>
    </ul>
</div>

<div class="main">
    <div class="header">
        <h2>Welcome Doctor</h2>
    </div>

    <div class="cards">
        <div class="card">
            <h3>Total Appointments</h3>
            <p>25</p>
        </div>
        <div class="card">
            <h3>Today's Appointments</h3>
            <p>5</p>
        </div>
        <div class="card">
            <h3>Upcoming</h3>
            <p>10</p>
        </div>
    </div>

    <table>
        <tr>
            <th>Patient Name</th>
            <th>Date</th>
            <th>Time</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <tr>
           
            <td>
                <button class="btn btn-accept">Accept</button>
                <button class="btn btn-reject">Reject</button>
            </td>
        </tr>
      
    </table>
</div>

</body>
</html>