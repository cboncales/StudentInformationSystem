<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
       body {
            background-color: #f0f0f0;
            background-image: linear-gradient(to right, #ff5e00 0%, #ffae52 100%);
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #ffffff;
        }

        table {
            border-collapse: collapse;
            width: 75%;
            margin: 20px auto; /* Centering the table */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #007bff;
            border: 2px solid transparent;
            padding: 6px 12px;
            background-origin: border-box;
            background-clip: content-box, border-box;
            transition: all 0.3s ease;
        }

        a:hover {
            border-color: black;
            background-image: none;
        }

    </style>
</head>
<body>
    <h1>Student Information</h1>
    <table>
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Contact Number</th>
            <th>Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->student_id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->contact_number }}</td>
            <td><a href="/view-courses/{{$student->student_id}}">View Courses</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
