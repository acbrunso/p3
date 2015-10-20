<!doctype html>
<html>
<head>
  <title>Developer's Best Friend</title>
  <meta charset='utf-8'>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body style="background-color:#E0F0FF">
  <div id="header">
    <h1>Developer's Best Friend</h1>
  </div>
  <div id="nav" class="top">
    <ul>
      <li><a href="home">Home</a></li>
      <li><a href="user-generator">User Generator</a></li>
      <li><a href="lorem-ipsum">Lorem Ipsum Generator</a></li>
      <li><a href="password-generator">Password Generator</a></li>
    </ul>
  </div>
  <div id="main">
    <div id="section">
      @yield('content')
    </div>
  </div>
</body>
</html>
