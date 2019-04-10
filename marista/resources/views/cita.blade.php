@extends('layouts.navBar')
@section('title,Calendario')
@section('principal')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Curp</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Agendado Por</th>
                <th scope="col">hora cita</th>
                <th scope="col">Estatus</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td></td>
                <td>Otto</td>
                <td>Ramirez</td>
                <td>Patricio</td>
                <td>17:00</td>
                <td>En terepia</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>

    @endsection