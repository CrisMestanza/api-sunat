<!DOCTYPE html>
<html>
<head>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        .datos_titulo1 {
            font-size: 5px;
        }
        .tabla_cabecera {
            font-size: 5px;
        }
        .tabla_datos {
            font-size: 4px;
            text-align: right;
        }
        .datos_totales {
            font-size: 6px;
            font-weight: bold;
        }
        .derecha_text {
            text-align: right;
        }
        .centro_text {
            text-align: center;
        }
    </style>
</head>
<body>

<img src=".../logo.PNG" height="80" width="100%" style="text-align:center;" border="0">

<span id="height-container">
    <p align="center" class="datos_titulo1">
        Nombre de la Empresa S.A.<br><br>
        RUC: 12345678901<br><br>
        Dirección de la Empresa<br>
        -------------------------------------------------------<br><br>
        FACTURA DE VENTA ELECTRÓNICA<br>&nbsp;&nbsp;F001-00000001<br>
        Fecha/hora emisión: 2024-07-14 10:00:00<br>
        -------------------------------------------------------<br><br>
        Cliente: Juan Perez<br>
        DNI: 12345678<br>
        DIRECCIÓN: Av. Siempre Viva 123<br>
        -------------------------------------------------------<br>
    </p>
</span>

<table width="100%">
    <thead>
        <tr>
            <th width="8" align="center" class="tabla_cabecera">Cant.</th>
            <th class="tabla_cabecera">Producto</th>
            <th width="13" align="center" class="tabla_cabecera">Precio</th>
            <th width="13" align="center" class="tabla_cabecera">Importe</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="tabla_cabecera">1</td>
            <td class="tabla_cabecera">Producto A</td>
            <td class="tabla_cabecera derecha_text">100.00</td>
            <td class="tabla_cabecera derecha_text">100.00</td>
        </tr>
        <tr>
            <td class="tabla_cabecera">2</td>
            <td class="tabla_cabecera">Producto B</td>
            <td class="tabla_cabecera derecha_text">50.00</td>
            <td class="tabla_cabecera derecha_text">100.00</td>
        </tr>
    </tbody>
</table>

<table class="totales" style="width: 100%">
    <tr>
        <td class="datos_totales">Gravada</td>
        <td class="datos_totales">S/.</td>
        <td class="datos_totales derecha_text">200.00</td>
    </tr>
    <tr>
        <td class="datos_totales">IGV 18%</td>
        <td class="datos_totales">S/.</td>
        <td class="datos_totales derecha_text">36.00</td>
    </tr>
    <tr>
        <td class="datos_totales">Total a pagar</td>
        <td class="datos_totales">S/.</td>
        <td class="datos_totales derecha_text">236.00</td>
    </tr>
</table>

<p align="center"><img width="40" height="40" src="../logo.jpg"></p>
<p align="center" class="datos_titulo1">Firma de SUNAT</p>

</body>
</html>
