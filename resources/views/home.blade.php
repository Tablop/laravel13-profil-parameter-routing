<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
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
            <h2>Pembuat</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>: Muhammad Krisnanta Alfahri</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>: XI RPL 1</td>
                </tr>
                <tr>
                    <td>Sekolah</td>
                    <td>: SMKN 1 Dlanggu</td>
                </tr>
            </table>

            <p>
                Gunakan route /profil/{nama}/{kelas}/{cita cita} contoh <a href="/profil/Muhammad Krisnanta Alfahri/XI RPL 1/Fullstack web developer">/profil/Muhammad Krisnanta Alfahri/XI RPL 1/Fullstack web developer</aa>
            </p>
        </main>
    </body>
</html>
