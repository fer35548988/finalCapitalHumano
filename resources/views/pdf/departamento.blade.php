<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>

        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #01579B;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #01579B;
            color: white;
            text-align: center;
            line-height: 35px;
        }






        /* _tables.scss:26 */
        .table {
            width: 100%;
            caption-side:bottom;
            border-collapse: collapse;
        }

        table th {
            background-color: #212529;
            color: white;
            text-align: center;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 17px;
        }

        table tr {
            text-align: center;
            font-size: 17px;
        }

        table tr:nth-child(odd) {background-color: #ECECEC;}

        table tr:nth-child(even) {background-color: #FFFFFF;}

        .titulo{
            font-size: 3rem;
            font-weight: bold;
            color: #343A40;
            text-align: center;
        }

        .subTitulo{
            font-size: 1rem;
            color: #343A40;
            text-align: left;
            margin: 10px;
        }

        .margin-arriba{
            margin-top: 4rem;
        }

        .margin-abajo{
            margin-bottom: 4rem;
        }
    </style>
</head>
<body>

    <header>
        <h1 class="">Final de Gestión de Capital Humano</h1>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo">Organización: {{$departamento->organizacion->nombre}}</h1>
            </div>
        </div>
        <div class="row">
            <h3 class="subTitulo">Departamento: {{$departamento->nombre}}</h3>
            <h3 class="subTitulo">Nivel del Departamento: {{$departamento->nivelDepartamento->nombre}}</h3>
        </div>
        <div class="margin-abajo ">
            <div class="">

                <table class="table">
                    <thead class="thead-dark text-uppercase">
                    <tr>
                        <th>N°</th>
                        <th>Nivel</th>
                        <th>Puesto de Trabajo</th>
                        <th>Persona Asignada</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($departamento->puestos as $puesto)
                        @foreach ($puesto->personas as $persona)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$puesto->nivelPuesto->nombre}}</td>
                            <td>{{$puesto->nombre}}</td>
                            <td>{{$persona->apellido . ', ' . $persona->nombre}}</td>
                        </tr>

                        @php
                            $i++;
                        @endphp

                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
