<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Pendaftaran</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .box {
            border: 3px solid;
            background-color:pink;
            width: 500px;
            height: 450px;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            color: #333;
        }

        .login-form {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        body{
    background-color: aqua;
}
    </style>

</head>
<body>
   
    <div class="login-container">
    <div class = "box">
    <h2>PENDAFTARAN</h2>
    <div class="Pendaftaran"></div>
    <form class="login-form">
        <div class="form-group">
            <label for="username">NAMA:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">EMAIL:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">KATA LALUAN:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <center> <button type="submit" onclick="location.href='index.html'">Login</button> </center>
        </div>
      
        <label for="weight">Berat (kg):</label>
        <input type="number" id="weight" name="weight" required>
<br>
        <label for="height">Tinggi (cm):</label>
        <input type="number" id="height" name="height" required>
    <center>
       <br> <button type="button" onclick="calculateBMI()">Kira BMI</button>
    </center>
    </form> 
    </div>
</div>
        <p id="result"></p>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Menghentikan penghantaran borang

            // Dapatkan nilai daripada borang
            var nama = document.getElementById('nama').value;
            var email = document.getElementById('email').value;
            var kataLaluan = document.getElementById('kata_laluan').value;

            // Lakukan sesuatu dengan data yang diterima, contohnya hantar ke pelayan atau proses lain

            // Untuk contoh, kita akan tampilkan data yang diterima dalam konsol
            console.log('Nama:', nama);
            console.log('E-mel:', email);
            console.log('Kata Laluan:', kataLaluan);
        });

        function calculateBMI() {
            // Dapatkan nilai berat dan tinggi dari borang
            var weight = parseFloat(document.getElementById('weight').value);
            var height = parseFloat(document.getElementById('height').value);

            // Lakukan pengiraan BMI
            var bmi = weight / Math.pow((height / 100), 2);

            // Tampilkan hasil
            var resultElement = document.getElementById('result');
            resultElement.innerHTML = 'BMI anda ialah: ' + bmi.toFixed(2);

            // Tentukan kategori BMI
            if (bmi < 18.5) {
                resultElement.innerHTML += '<br>Kurang berat badan';
            } else if (bmi >= 18.5 && bmi < 24.9) {
                resultElement.innerHTML += '<br>Berat badan normal';
            } else if (bmi >= 25 && bmi < 29.9) {
                resultElement.innerHTML += '<br>Lebih berat badan';
            } else {
                resultElement.innerHTML += '<br>Gemuk';
            }
        }

    </script>

</body>
</html>
