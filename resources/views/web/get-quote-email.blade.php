<!DOCTYPE html>
<html>

<head>
    <title>Move N Store</title>
</head>

<body>
    Dear MoveNStore,<br />

    <p>You have received Get a Quote via website contact form.</p>

    <p>First Name: {{ $data->firstname }}</p>
    <p>Last Name: {{ $data->lastname }}</p>
    <p>Email: {{ $data->email }}</p>
    <p>Contact Number: {{ $data->number }}</p>
    <p>Service: {{ $data->service }}</p>
    <p>Location: {{ $data->location }}</p>
    <p>Message: {{ $data->message }}</p>
    <p>Start Date: {{ $data->start_date ?? 'NA' }}</p>
    <p>Address: {{ $data->address ?? 'NA' }}</p>


    Best Regards,<br />
    Team MoveNStore.
</body>

</html>