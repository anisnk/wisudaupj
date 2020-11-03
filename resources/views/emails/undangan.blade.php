<!DOCTYPE html>
<html>
<head>
    <title>Undangan</title>
</head>
<body>
    <h1>Undangan</h1>
    <p>{!! QrCode::size(100)->generate(route('tamuUndangan.edit', $tamuUndangan->id)); !!}</p>

    <p>Thank you</p>
</body>
</html>
