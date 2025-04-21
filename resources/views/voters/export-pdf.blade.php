<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Voters List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
        }

        .date {
            text-align: right;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #7f8c8d;
        }
    </style>
</head>

<body>
    <h1>E-Voting - Voters List</h1>
    <div class="date">Generated on: {{ $date }}</div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Voting Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($voters as $voter)
                <tr>
                    <td>{{ $voter->number }}</td>
                    <td>{{ $voter->name }}</td>
                    <td>{{ $voter->email }}</td>
                    <td>{{ $voter->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        &copy; {{ date('Y') }} E-Voting. All rights reserved.
    </div>
</body>

</html>
