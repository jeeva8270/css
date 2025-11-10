<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Details</title>
<style>
body{
    font-family: Arial, sans-serif;
    background-color: lightgray;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
table{
    border-collapse: collapse;
    width: 55%;
    background-color: white;
    box-shadow: 0 0 10px gray;
}
th,td{
    border:1px solid #ddd;
    padding:10px;
    text-align:left;
}
th{
    background-color: royalblue;
    color:white;
}
h2{
    text-align:center;
    color:darkblue;
}
</style>
</head>
<body>
<?php 
class Student{
    public $student_Name="jeeva";
    public $student_age="22";
    public $student_Degree="M.Sc";
    public $student_Department="Physics";
    public $student_Email="njeeva854@gmail.com";
    public $student_City="Theni";
    public $student_Phone=8270807049;

}
$student_details=new Student();
?>
<div>
<h2>Student Details</h2>
<center>
<table>
<tr>
<th>Field</th><th>Information</th>
</tr>
<tr><td>Name</td><td><?php echo $student_details->student_Name; ?></td></tr>
<tr><td>Age</td><td><?php echo $student_details->student_age; ?></td></tr>
<tr><td>Degree</td><td><?php echo $student_details->student_Degree; ?></td></tr>
<tr><td>Department</td><td><?php echo $student_details->student_Department; ?></td></tr>
<tr><td>Email</td><td><?php echo $student_details->student_Email; ?></td></tr>
<tr><td>City</td><td><?php echo $student_details->student_City; ?></td></tr>
<tr><td>Phone</td><td><?php echo $student_details->student_Phone; ?></td></tr>

</table></center>
</div>
</body>
</html>