<!DOCTYPE html>
<html>
<head>
    <title>Student App</title>

    <style>
        body { font-family: Arial; margin: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th { background: #333; color: white; }
        th, td { padding: 10px; text-align: center; }
    </style>
</head>
<body>

<h2>Student List</h2>

<!-- ADD FORM -->
<form method="POST" action="index.php?action=store">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="course" placeholder="Course" required>
    <input type="number" name="year_level" placeholder="Year Level" required>
    <button type="submit">Add</button>
</form>

<br>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Course</th>
    <th>Year Level</th>
    <th>Actions</th>
</tr>

<?php foreach ($students as $s): ?>
<tr>
    <td><?= $s['id'] ?></td>
    <td><?= $s['name'] ?></td>
    <td><?= $s['course'] ?></td>
    <td><?= $s['year_level'] ?></td>
    <td>
        <a href="index.php?action=delete&id=<?= $s['id'] ?>">Delete</a>
    </td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>