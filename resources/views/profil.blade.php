<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Profil</title>
        <style>
            table {
                border: 2px solid black;
                border-radius: 3px;
                padding: 5px;
                background-color: lightcyan;
                width: 100%;
            }
            p {
                background-color: lightcyan;
                padding: 10px;
                border: 2px solid black;
                border-radius: 3px;
            }
            main {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                border: 2px solid black;
                border-radius: 5px;
                padding: 10px;
                background-color: cyan;
                width: 35em;
            }
        </style>
    </head>
    <body>
        <main>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: {{$nama}}</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>: {{$kelas}}</td>
                </tr>
                <tr>
                    <td>Cita Cita</td>
                    <td>: {{$cita}}</td>
                </tr>
            </table>
            <p>Saya {{$nama}}, Kelas {{$kelas}} memiliki cita cita mebjadi {{$cita}}</p>
        </main>
    </body>
</html>
