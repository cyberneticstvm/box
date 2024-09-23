<!DOCTYPE html>
<html>

<head>
    <title>Move N Store</title>
</head>

<body>
    Dear MoveNStore,<br />

    <p>You have received new message via website contact form.</p>

    <p>Name: {{ $data->name }}</p>
    <p>Contact number: {{ $data->number }}</p>
    <p>Service: {{ $data->service }}</p>
    <p>Message: {{ $data->message }}</p>


    Best Regards,<br />
    Team MoveNStore.
</body>

</html>