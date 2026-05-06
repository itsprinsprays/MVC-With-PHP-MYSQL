<!DOCTYPE html>
<html>
<head>
    <title>Student App</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f0f8ff; /* light blue background */
        }
        table { 
            width: 100%; border-collapse: collapse; 
        }
        th { 
            background: #333; color: white; 
        }
        th, td {
             padding: 10px; text-align: center; 
        }
        h2 {
            font-size: 50px; 
            color: #333;
        }
        form {
            width: 300px;
            margin: 20px;
            padding: 15px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 20px;
            position: absolute;
             top: 450px;             
             left: 250px;
        }

        h2 {
            color: #3333cc;
        }

        input {
            width: 250px;
            padding: 5px;
            margin-bottom: 10px;
            border: 2px solid #999;
        }

        button {
            padding: 5px 10px;
            background-color: #4CAF50; /* green */
            color: white;
            border: none;
            margin-left: 50px;
            width: 150px;
        }

        div {
            position: absolute;
            top: -1px;
            right: 900px;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>

<h2>Student List</h2>

<br>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Course</th>
    <th>Year Level</th>
    <th colspan="2">Actions</th>
    
</tr>

<?php foreach ($students as $s): ?>
<tr>
    <td><?= $s['Id'] ?></td>
    <td><?= $s['name'] ?></td>
    <td><?= $s['course'] ?></td>
    <td><?= $s['year_level'] ?></td>
    <td>
        <a href="mvc_student.php?action=delete&id=<?= $s['Id'] ?>">Delete</a>
    </td>
</tr>
<?php endforeach; ?>

</table>

<!-- ADD FORM -->
<form method="POST" action="mvc_student.php?action=store">
    <fieldset>
        <legend>Register Student</legend>

        <input type="text" name="name" placeholder="Name" required><br><br>
        <input type="text" name="course" placeholder="Course" required><br><br>
        <input type="number" name="year_level" placeholder="Year Level" required><br><br>

        <button type="submit">Add</button>
    </fieldset>
</form>
<div>
<form method="POST" action="mvc_student.php?action=update">
    <fieldset>
        <legend>Update Student</legend>

        <input type="number" name="id" placeholder="Student ID" required><br><br>
        <input type="text" name="name" placeholder="New Name" required><br><br>
        <input type="text" name="course" placeholder="New Course" required><br><br>
        <input type="number" name="year_level" placeholder="New Year Level" required><br><br>

        <button type="submit">Update</button>
    </fieldset>
</form>
</div>
</body>
</html>