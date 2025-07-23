<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f1f5f9;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            margin-top: 15px;
            display: block;
            font-weight: 500;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="password"],
        textarea,
        select {
            width: 100%;
            padding: 10px 12px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        textarea {
            resize: vertical;
        }

        .gender-option {
            display: inline-block;
            margin-right: 20px;
            margin-top: 8px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background: #2563eb;
            color: #fff;
            padding: 12px;
            border: none;
            width: 100%;
            border-radius: 6px;
            margin-top: 25px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s;
        }

        input[type="submit"]:hover {
            background: #1d4ed8;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>🧾 User Registration Form</h2>

    <form action="insert_user.php" method="POST">

        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Age:</label>
        <input type="number" name="age" min="1" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <label>Gender:</label>
        <div class="gender-option">
            <input type="radio" name="gender" value="Male" required> ♂️ Male
        </div>
        <div class="gender-option">
            <input type="radio" name="gender" value="Female"> ♀️ Female
        </div>
        <div class="gender-option">
            <input type="radio" name="gender" value="Other"> ⚧ Other
        </div>

        <label>Country:</label>
        <input type="text" name="country" required>

        <label>Registered Course:</label>
        <select name="registered_course" required>
            <option value="">Select a course</option>
            <option value="Web Development">Web Development</option>
            <option value="Data Science">Data Science</option>
            <option value="AI & ML">AI & ML</option>
            <option value="UI/UX Design">UI/UX Design</option>
            <option value="Cyber Security">Cyber Security</option>
        </select>

        <label>Bio:</label>
        <textarea name="bio" rows="3" placeholder="Write something about yourself..."></textarea>

        <input type="submit" value="Register">
    </form>
</div>

</body>
</html>
