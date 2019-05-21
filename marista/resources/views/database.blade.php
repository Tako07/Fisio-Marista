<table>
    <thead>
    <tr>
        <th>Nombres</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <th>Edad</th>
        <th>CURP</th>
        <th>Sexo</th>
        <th>Nacionalidad</th>
        <th>Estado civil</th>
        <th>Ocupación</th>
        <th>Estado</th>
        <th>Ciudad</th>
        <th>Calle</th>
        <th>Colonia</th>
        <th>Código Postal</th>
        <th>Fecha de creación de paciente</th>
        <th>Fecha de actualización de paciente</th>
        <th>¿Enfermedades reumatológicas?</th>
        <th>Familiar Enfermedad reumatológica</th>
        <th>¿Cuál enfermedad reumatológica?</th>

        <th>¿Enfermedades del sistema nervioso?</th>
        <th>Familiar Enfermedad del sistema nervioso</th>
        <th>¿Cuál enfermedad del sistema nervioso?</th>

        <th>¿Síndromes?</th>
        <th>Familiar sindrome</th>
        <th>¿Cuál síndrome?</th>

        <th>¿Malformaciones?</th>
        <th>Familiar con malformaciones</th>
        <th>¿Cuál malformación?</th>

        <th>¿Malformaciones?</th>
        <th>Familiar con malformaciones</th>
        <th>¿Cuál malformación?</th>

        <th>¿Diabetes?</th>
        <th>Familiar con diabetes</th>
        <th>¿Tipo de diabetes?</th>

        <th>¿Hipertensión arterial sistemática (has)?</th>
        <th>Familiar con has</th>
        <th>¿Tipo de has?</th>

        <th>¿Cáncer?</th>
        <th>Familiar con cancer</th>
        <th>¿Tipo de cáncer?</th>

        <th>¿Cardiopatías?</th>
        <th>Familiar con cardiopatías</th>
        <th>¿Tipo de cardiopatías?</th>

        <th>¿Vasculares?</th>
        <th>Familiar con problemas vasculares</th>
        <th>¿Tipo de problemas vasculares?</th>

        <th>¿Probblesmas pulmonares?</th>
        <th>Familiar con problemmas pulmonares</th>
        <th>¿Tipo de problemas pulmonares?</th>

        <th>¿Heptopatías?</th>
        <th>Familiar con heptopatias</th>
        <th>¿Tipo de heptopatías?</th>

        <th>¿Nefropatías?</th>
        <th>Familiar con nefropatías</th>
        <th>¿Tipo de nefropatía?</th>

        <th>¿Problemas digestivos?</th>
        <th>Familiar con problesmas digestivos</th>
        <th>¿Tipo de problesmas digestivos?</th>

        <th>¿Endocrinopatías?</th>
        <th>Familiar con endocrinopatías</th>
        <th>¿Tipo de endocrinopatías?</th>

        <th>¿Transtornos hematologico?</th>
        <th>Familiar con cancer</th>
        <th>¿Tipo de cáncer?</th>

        <th>¿Displidemias?</th>
        <th>Familiar con displidemias</th>
        <th>¿Tipo de displidemia?</th>

        <th></th>

        <th>¿Tipo de construcción no favorable?</th>
        <th>Cual</th>

        <th>¿Suelo no regular?</th>
        <th>Cual</th>

        <th>¿Escaleras que dificulten avd?</th>
        <th>Cual</th>

        <th>¿Ventilación inadecuada?</th>
        <th>Cual</th>

        <th>¿Tipo de construcción no favorable?</th>
        <th>Cual</th>

        <th>¿Hacinamiento?</th>
        <th>Cual</th>

        <th>¿Adaptaciones para sus avd?</th>
        <th>Cual</th>

        <th>¿Servicio de agua?</th>
        <th>Cual</th>

        <th>¿Servicio de luz?</th>
        <th>Cual</th>

        <th>¿Servicio de drenaje inadecuado?</th>
        <th>Cual</th>

        <th>¿Hábitos personales de baño?</th>
        <th>Cual</th>

        <th>¿Higiene bucal?</th>
        <th>Cual</th>

        <th>¿Defecación?</th>
        <th>Cual</th>

        <th>¿Tabaquismo?</th>
        <th>Cual</th>

        <th>¿Alcoholismo?</th>
        <th>Cual</th>

        <th>¿Toxicomanías?</th>
        <th>Cual</th>

        <th>¿Alimentación?</th>
        <th>Cual</th>

        <th>¿Trabajo-Descanso?</th>
        <th>Cual</th>

        <th>¿Pasatiempo?</th>
        <th>Cual</th>

        <th></th>

        <th>¿Enfermedades de la infancia?</th>
        <th>Cual</th>

        <th>¿Quirurgicas?</th>
        <th>Cual</th>

        <th>¿Traumatismos?</th>
        <th>Cual</th>

        <th>¿Infiltraciones?</th>
        <th>Cual</th>

        <th>¿Hospitalizaciones?</th>
        <th>Cual</th>

        <th>¿Perdida del conocimiento?</th>
        <th>Cual</th>

        <th>¿Intolerancia a medicamentos?</th>
        <th>Cual</th>

        <th>¿Transfuciones?</th>
        <th>Cual</th>

        <th>¿Medicamentos?</th>
        <th>Cual</th>

        <th>¿ETS?</th>
        <th>Cual</th>

        <th>Creación del historial</th>
        <th>Modificación del historial</th>






    </tr>
    </thead>
    <tbody>
    @foreach($pacientes as $paciente)
        <tr>
            <td>{{ $paciente->nombres }}</td>
            <td>{{ $paciente->apaterno }}</td>
            <td>{{ $paciente->amaterno }}</td>
            <td>{{$paciente->edad}}</td>
            <td>{{$paciente->curp}}</td>
            <td>{{$paciente->sexo}}</td>
            <td>{{$paciente->nacionalidad}}</td>
            <td>{{$paciente->edo_civil}}</td>
            <td>{{$paciente->ocupacion}}</td>
            <td>{{$paciente->estado}}</td>
            <td>{{$paciente->ciudad}}</td>
            <td>{{$paciente->calle}}</td>
            <td>{{$paciente->colonia}}</td>
            <td>{{$paciente->codigo_postal}}</td>
            <td>{{$paciente->pcreado}}</td>
            <td>{{$paciente->pupdate}}</td>
            @php
            $aux=json_decode($paciente->ant_fam);
            @endphp
            @foreach ($aux as $key => $value)
              @foreach ($value as $k => $v)
                <td>{{$v}}</td>
              @endforeach
            @endforeach
            <td></td>
            @php
            $aux=json_decode($paciente->ant_pers_no);
            @endphp
            @foreach ($aux as $key => $value)
              @foreach ($value as $k => $v)
                <td>{{$v}}</td>
              @endforeach
            @endforeach
            <td></td>
            @php
            $aux=json_decode($paciente->ant_pers_pat);
            @endphp
            @foreach ($aux as $key => $value)
              @foreach ($value as $k => $v)
                <td>{{$v}}</td>
              @endforeach
            @endforeach
            <td>{{$paciente->hcreado}}</td>
            <td>{{$paciente->hupdate}}</td>


        </tr>
    @endforeach
    </tbody>
</table>
