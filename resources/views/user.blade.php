<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User page</title>
  <style>
    .max-width {
      max-width: 1024px;
      margin: 0 auto;
      height: 100vh;
      display: flex;
      justify-content: center; 
      align-items: center;     
    }
    .div-1 {
      
      border-radius: 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: orange; 
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      padding: 30px 50px;
      min-width: 300px;
      text-align: center;
      color:white :
      
    }
  </style>
</head>
<body class="max-width">
  <div class="div-1">
    <h1>User Data</h1>
    <h3>User ID: {{ $id }}</h3>

    @if ($name == null)
      <h2>No username found !</h2>
    @else 
      <h3>User Name: {{ $name }}</h3>  
    @endif
  </div>
</body>
</html>
