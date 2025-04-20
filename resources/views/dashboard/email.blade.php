<!DOCTYPE html>
<html>

<head>
    <title>Voting Report</title>
</head>

<body>
    <h1>Voting Report</h1>
    <p>Hello,</p>

    <p>Please find attached the latest voting report.</p>

    <p>Summary:</p>
    <ul>
        <li>Total Voters: {{ $totalVoters }}</li>
        <li>Voters Who Voted: {{ $votersWhoVoted }}</li>
        <li>Voting Percentage: {{ round(($votersWhoVoted / $totalVoters) * 100, 2) }}%</li>
    </ul>

    <p>Thank you,<br>
        {{ config('app.name') }}</p>
</body>

</html>
