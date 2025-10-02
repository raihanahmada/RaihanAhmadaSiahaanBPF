<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai Estetik</title>
    <style>
        /* Neumorphism Base Color */
        :root {
            --bg-color: #e0e5ec; /* Soft base background */
            --main-color: #34495e; /* Dark text for contrast */
            --accent-color: #2ecc71; /* A nice green for emphasis/success */
        }

        /* Global Styles for Neumorphism Effect */
        body {
            font-family: 'Poppins', sans-serif; /* Modern, clean font */
            margin: 0;
            padding: 50px;
            background-color: var(--bg-color);
            color: var(--main-color);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Heading Style */
        h2 {
            text-align: center;
            color: var(--main-color);
            margin-bottom: 40px;
            font-weight: 700;
            font-size: 2.5em;
            letter-spacing: 1px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); /* Subtle text shadow */
        }

        /* Table Container (The Neumorphic Card) */
        table {
            width: 100%;
            max-width: 650px;
            border-collapse: separate;
            border-spacing: 0;
            background: var(--bg-color);
            padding: 20px;
            border-radius: 25px; /* Deeply rounded corners */
            /* THE NEUMORPHISM MAGIC */
            box-shadow:
                8px 8px 16px #a3b1c6, /* Darker shadow for "depth" */
                -8px -8px 16px #ffffff; /* Lighter shadow for "highlight" */
            transition: all 0.4s ease;
        }

        /* Interactive Hover Effect */
        table:hover {
            box-shadow:
                10px 10px 20px #9da9be,
                -10px -10px 20px #ffffff;
        }

        /* Table Cells and Rows */
        tr {
            border-radius: 15px;
            overflow: hidden;
        }

        th, td {
            padding: 18px 25px;
            text-align: left;
            border: none;
            /* Subtle inner shadow for each row item - optional but adds detail */
        }

        /* Header Column (Label) */
        th {
            width: 35%;
            color: var(--main-color);
            font-weight: 500;
            border-right: 2px solid rgba(163, 177, 198, 0.3); /* Soft inner separator */
        }

        /* Data Column (Value) */
        td {
            color: #555;
            font-weight: 600;
        }

        /* Accent Styles */
        /* Accent for Salary - The "Pop" */
        tr:nth-child(7) td {
            font-weight: 700;
            color: var(--accent-color);
            font-size: 1.2em;
        }

        /* Accent for Status - A gentle highlight */
        tr:nth-child(8) td {
            color: #3498db; /* Blue accent */
        }

        /* Accent for Career Goal - Italic and distinct */
        tr:last-child td {
            font-style: italic;
            color: #e67e22; /* Orange/Copper accent */
        }

        /* Subtle "Pressed" effect for rows for interaction feel */
        tr:active {
            transform: scale(0.99);
        }

    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <h2>Data Pegawai</h2>

    <table>
        <tr>
            <th>Nama</th>
            <td>{{ $employee_name }}</td>
        </tr>
        <tr>
            <th>Usia</th>
            <td>{{ $age }} tahun</td>
        </tr>
        <tr>
            <th>Jabatan</th>
            <td>{{ $position }}</td>
        </tr>
        <tr>
            <th>Keahlian</th>
            <td>{{ implode(', ', $skills) }}</td>
        </tr>
        <tr>
            <th>Tanggal Masuk</th>
            <td>{{ $join_date }}</td>
        </tr>
        <tr>
            <th>Lama Bekerja</th>
            <td>{{ $working_duration }} hari</td>
        </tr>
        <tr>
            <th>Gaji</th>
            <td>Rp{{ number_format($salary, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $status_info }}</td>
        </tr>
        <tr>
            <th>Cita-cita Karir</th>
            <td>{{ $career_goal }}</td>
        </tr>
    </table>
</body>
</html>
