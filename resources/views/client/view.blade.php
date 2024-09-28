<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses Enrolled</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            background-image: linear-gradient(to right, #ff5e00 0%, #ffae52 100%);
        }
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 800px;
            margin: auto;
            height: 50vh;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 5px solid #000000; /* Border color */
        }
        

        h1 {
            color: #333;
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 50px 0px 0px 50px;
        }
        li {
            margin-bottom: 10px;
            font-size: 30px;
        }
        .back-button {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff5e00;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            width: 200px;
            text-align: center;
            background-image: linear-gradient(to right, #ff5e00 0%, #ffae52 100%);
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Courses Enrolled by <br> {{ $student->name }}</h1>
        <ul>
            @foreach($courses as $course)
                <li>{{ $course->course_title }} - {{ $course->course_description }}</li>
            @endforeach
        </ul>
        <a href="/students" class="back-button">Back</a>
    </div>
</body>
</html>
