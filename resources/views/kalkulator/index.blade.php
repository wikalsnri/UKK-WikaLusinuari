<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <style>
        /* Tambahkan gaya kustom di sini jika diperlukan */

        .container {
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h1 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn {
            width: 100px;
            margin: 0 5px;
            transition: transform 0.2s;
        }

        .btn:hover {
            transform: scale(1.1);
        }

        .result {
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        /* Efek shadow pada tombol */
        .btn-primary {
            box-shadow: 0 4px 6px rgba(0, 123, 255, 0.1);
        }

        .btn-secondary {
            box-shadow: 0 4px 6px rgba(108, 117, 125, 0.1);
        }

        .btn-success {
            box-shadow: 0 4px 6px rgba(40, 167, 69, 0.1);
        }

        .btn-warning {
            box-shadow: 0 4px 6px rgba(255, 193, 7, 0.1);
        }

        .btn-danger {
            box-shadow: 0 4px 6px rgba(220, 53, 69, 0.1);
        }
        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .calculator-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }

        body {
            background-color: #f8f9fa;
        }
        .calculator-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .calculator-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .calculator-buttons {
            text-align: center;
        }
        .calculator-buttons input {
            width: 50px;
            height: 50px;
            font-size: 20px;
            margin: 5px;
            box-shadow: 2px 2px 2px rgba(0,0,0,0.8);      
          }
    </style>
</head>
<body>
    <div class="container">
        <div class="calculator-container">
            <div class="calculator-header">
                <h1>KALKULATOR V1</h1>
            </div>

            <form action="{{ route('proses.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="a">Masukkan angka pertama : </label>
                    <input type="number" name="a" id="a" class="form-control">
                </div>

                <div class="form-group">
                    <label for="b">Masukkan angka kedua : </label>
                    <input type="number" name="b" id="b" class="form-control">
                </div>

                <div class="form-group text-center">
                    <input type="submit" value="Tambah" name="op" class="btn btn-primary">
                    <input type="submit" value="Kurang" name="op" class="btn btn-secondary">
                    <input type="submit" value="Kali" name="op" class="btn btn-success">
                    <input type="submit" value="Bagi" name="op" class="btn btn-warning">
                    <input type="submit" value="Reset" name="op" class="btn btn-danger">
                </div>
            </form>
        </div>

        <div class="calculator-container">
            <div class="calculator-header">
                <h1>KALKULATOR V2</h1>
            </div>

            <form action="" method="post" name="form1">
                <input type="text" name="txt" id="txt" class="form-control mb-3">
                <div class="calculator-buttons">
                    <input type="button" value="+" class="btn btn-primary" onClick="form1.txt.value+='+'">
                    <input type="button" value="-" class="btn btn-primary" onClick="form1.txt.value+='-'">
                    <input type="button" value="x" class="btn btn-primary" onClick="form1.txt.value+='*'">
                    <input type="button" value=":" class="btn btn-primary" onClick="form1.txt.value+='/'">
                    <br>
                    <input type="button" value="1" class="btn btn-secondary" onClick="form1.txt.value+='1'">
                    <input type="button" value="2" class="btn btn-secondary" onClick="form1.txt.value+='2'">
                    <input type="button" value="3" class="btn btn-secondary" onClick="form1.txt.value+='3'">
                    <input type="button" value="4" class="btn btn-secondary" onClick="form1.txt.value+='4'">
                    <br>
                    <input type="button" value="5" class="btn btn-secondary" onClick="form1.txt.value+='5'">
                    <input type="button" value="6" class="btn btn-secondary" onClick="form1.txt.value+='6'">
                    <input type="button" value="7" class="btn btn-secondary" onClick="form1.txt.value+='7'">
                    <input type="button" value="8" class="btn btn-secondary" onClick="form1.txt.value+='8'">
                    <br>
                    <input type="button" value="9" class="btn btn-secondary" onClick="form1.txt.value+='9'">
                    <input type="button" value="0" class="btn btn-secondary" onClick="form1.txt.value+='0'">
                    <input type="button" value="=" class="btn btn-success" onClick="form1.txt.value=eval(form1.txt.value)">
                    <input type="button" value="c" class="btn btn-danger" onClick="form1.txt.value=''">
                </div>
            </form>
        </div>
    </div>
</body>
</html>