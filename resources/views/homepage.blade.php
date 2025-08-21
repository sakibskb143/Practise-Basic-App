<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome Page</title>
    <style>
        body {
            background-color: #f0f8ff; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        h1 {
            color: #2c3e50; 
            font-size: 3rem;
            text-align: center;
            margin: 0.5rem 0;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        h2 {
            color: #34495e; 
            font-size: 1.8rem;
            text-align: center;
            margin: 0;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <h1>Welcome to Our Awesome Site</h1>
    <h2>Delivered to you with Laravel Controller</h2>
    <a href="{{route('gt')}}">greeting</a>
</body>
</html>
