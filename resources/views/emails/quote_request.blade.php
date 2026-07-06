<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>New Quote Request</h2>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Requirement:</strong></p>
<p>{{ $data['requirement'] }}</p>


 <h3>Source Page:</h3>
    <p>{{ $data['source_page'] ?? 'Not provided' }}</p>
    
</body>
</html>