<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Student Registration Portal</h1>

    <form action="submit.php" method="POST">

        <label>Student Name</label>
        <input type="text" name="name" required>

        <label>Email Address</label>
        <input type="email" name="email" required>

        <label>Contact Number</label>
        <input type="text" name="contact" required>

        <label>Course</label>
        <select name="course" required>
            <option value="">Select Course</option>
            <option>BCA</option>
            <option>BSc</option>
            <option>BCom</option>
            <option>BTech</option>
            <option>MCA</option>
        </select>

        <button type="submit">Register</button>

    </form>
</div>

</body>
</html>
