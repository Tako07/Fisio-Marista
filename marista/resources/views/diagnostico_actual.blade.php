@extends('layouts.navBar')
@section('more_style')
<link href="{{{ asset('css/style_historia.css') }}}" rel="stylesheet">
<script type="text/javascript" src="{{{asset('js/map-resizer/imageMapResizer.min.js')}}}"></script>
<script type="text/javascript" src="{{{asset('js/maphilight-master/jquery.maphilight.js')}}}"></script>
<script type="text/javascript" src="{{{asset('js/maphilight-master/jquery.maphilight.min.js')}}}"></script>
<script type="text/javascript">
imageMapResize();
$(function() {
    $('.map').maphilight({
        fillColor: 'FF0000'
      });
        @foreach( $arreglo_musculos as $musculo)
        var data = $('#{{$musculo}}').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#{{$musculo}}').data('maphilight', data).trigger('alwaysOn.maphilight');
        @endforeach
    });
</script>
@endsection
@section('title','Diagnóstico actual')
@section('principal')
<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Diagnostico actual de paciente
    </div>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Mapa del dolor
    </div>
  </div>
</div>
<div class="row justify-content-center">
  <img src="{{{asset('img/unknown.png')}}}" usemap="#image-map" class="map responsive-img">

  <map name="image-map">
      <area id="musculo2" class="musculo"  coords="344,146,341,163,324,186,304,207,280,220,277,191,280,174,298,151" shape="poly">
      <area id="musculo3" class="musculo"  coords="308,209,285,220,268,237,265,256,265,274,267,297,285,292,304,284,312,253,319,229" shape="poly">
      <area id="musculo4" class="musculo"  coords="293,295,296,314,288,330,269,349,245,371,227,394,206,385,222,338,229,316,242,300,258,284,266,302" shape="poly">
      <area id="musculo5" class="musculo"  coords="204,388,222,403,205,455,182,474,172,459,183,434,163,432" shape="poly">
      <area id="musculo6" class="musculo"  coords="350,144,372,110,389,154" shape="poly">
      <area id="musculo7" class="musculo"  coords="350,154,330,183,313,210,329,223,357,232,393,222,394,190,383,165" shape="poly">
      <area id="musculo8" class="musculo"  coords="404,218,407,175,442,153,465,169,481,191,485,214,444,230" shape="poly">
      <area id="musculo9" class="musculo"  coords="451,152,473,171,491,200,525,220,523,165,485,144" shape="poly">
      <area id="musculo10" class="musculo"  coords="485,211,488,257,505,287,535,295,538,254,527,226,500,209" shape="poly">
      <area id="musculo11" class="musculo"  coords="505,293,514,323,540,347,577,390,599,382,576,330,547,280,535,302" shape="poly">
      <area id="musculo12" class="musculo"  coords="577,395,598,388,613,407,641,424,626,429,639,456,617,468,601,451,594,459" shape="poly">
      <area id="musculo13" class="musculo"  coords="323,224,320,243,328,267,327,363,372,402,353,320,352,237" shape="poly">
      <area id="musculo14" class="musculo"  coords="357,236,396,229,396,268,357,272" shape="poly">
      <area id="musculo15" class="musculo"  coords="403,229,439,232,440,268,401,271" shape="poly">
      <area id="musculo16" class="musculo"  coords="357,276,398,274,397,306,357,307" shape="poly">
      <area id="musculo17" class="musculo"  coords="404,275,439,275,443,307,401,306" shape="poly">
      <area id="musculo18" class="musculo"  coords="358,311,397,310,396,341,359,337" shape="poly">
      <area id="musculo19" class="musculo"  coords="403,311,440,309,439,337,405,341" shape="poly">
      <area id="musculo20" class="musculo"  coords="360,341,396,348,397,426,381,422" shape="poly">
      <area id="musculo21" class="musculo"  coords="436,341,420,423,404,429,403,347" shape="poly">
      <area id="musculo22" class="musculo"  coords="482,221,462,226,445,236,443,320,428,415,476,361,470,285" shape="poly">
      <area id="musculo23" class="musculo"  coords="326,369,339,380,336,411,323,434,306,445" shape="poly">
      <area id="musculo24" class="musculo"  coords="341,378,370,408,393,444,391,483,388,531,375,554,339,415" shape="poly">
      <area id="musculo25" class="musculo"  coords="337,417,316,453,321,490,331,529,351,562,361,505" shape="poly">
      <area id="musculo26" class="musculo"  coords="306,452,303,510,319,541,334,564,336,552,316,498,314,455" shape="poly">
      <area id="musculo27" class="musculo"  coords="362,514,354,560,360,579,374,559" shape="poly">
      <area id="musculo28" class="musculo"  coords="339,559,330,570,330,585,361,582" shape="poly">
      <area id="musculo29" class="musculo"  coords="316,562,313,602,324,596,323,574" shape="poly">
      <area id="musculo30" class="musculo"  coords="330,595,352,586,372,587,367,615,351,621,336,610" shape="poly">
      <area id="musculo31" class="musculo"  coords="313,614,327,600,341,616,361,624,345,649,334,687,332,722,331,737,321,729,313,687" shape="poly">
      <area id="musculo32" class="musculo"  coords="322,736,312,682,308,638,299,688,304,738" shape="poly">
      <area id="musculo33" class="musculo"  coords="462,378,465,410,446,472,436,523,432,569,417,505,412,439" shape="poly">
      <area id="musculo34" class="musculo"  coords="478,365,466,379,469,408,481,430,498,439" shape="poly">
      <area id="musculo35"  coords="396,180,401,208,409,176,444,149,408,159,423,108,375,109,392,156,358,149" shape="poly">
      <area id="musculo36"  coords="428,114,413,149,450,145" shape="poly">
      <area id="musculo37"  coords="467,414,444,498,456,559,468,554,488,488,485,441" shape="poly">
      <area id="musculo38"  coords="443,514,438,556,434,579,455,568" shape="poly">
      <area id="musculo39"  coords="489,440,501,453,504,499,494,541,486,561,477,565,471,553,486,500" shape="poly">
      <area id="musculo40"  coords="478,565,477,593,493,605,492,560" shape="poly">
      <area id="musculo41"  coords="432,584,466,561,476,569,477,598,458,614,445,617" shape="poly">
      <area id="musculo42"  coords="447,621,462,618,477,601,497,615,497,648,490,734,479,733,471,677" shape="poly">
      <area id="musculo43"  coords="500,657,509,679,504,733,492,733" shape="poly">
      <area id="musculo44"  coords="444,631,446,675,471,739,475,699,462,661" shape="poly">
      <area id="musculo45"  coords="360,636,343,671,335,718,338,738,354,695" shape="poly">
      <area id="musculo46"  coords="927,1,919,37,925,64,941,76,958,83,974,77,988,56,991,32,987,6,978,1" shape="poly">
      <area id="musculo47"  coords="953,85,955,106,906,120,932,88,942,85" shape="poly">
      <area id="musculo48"  coords="957,85,976,82,993,115,958,105" shape="poly">
      <area id="musculo49"  coords="899,123,897,136,880,151,864,162,864,178,827,191,825,175,835,141,864,125" shape="poly">
      <area id="musculo50"  coords="900,126,916,149,919,194,953,257,964,251,988,201,1003,139,1010,126,958,108" shape="poly">
      <area id="musculo51"  coords="1012,126,1017,141,1043,159,1053,177,1086,192,1084,157,1059,128" shape="poly">
      <area id="musculo52"  coords="915,160,915,194,892,208,871,207,866,171,880,147,903,137" shape="poly">
      <area id="musculo53"  coords="1008,137,997,164,994,194,1019,203,1041,201,1049,178,1039,160" shape="poly">
      <area id="musculo54"  coords="825,195,802,260,813,278,825,243,834,247,826,275,839,283,857,260,868,233,870,210,860,185" shape="poly">
      <area id="musculo55"  coords="826,246,816,279,802,278,763,356,750,400,778,408,813,348,834,313,838,294,822,282,829,252" shape="poly">
      <area id="musculo56"  coords="752,402,776,410,785,454,772,439,750,469,724,461,737,430,715,433" shape="poly">
      <area id="musculo57"  coords="1051,183,1086,197,1108,263,1096,275,1092,240,1075,239,1084,276,1071,278,1043,224" shape="poly">
      <area id="musculo58"  coords="1108,274,1140,329,1163,392,1138,402,1109,360,1074,294,1084,264,1080,245,1087,248,1096,276" shape="poly">
      <area id="musculo59"  coords="1166,398,1133,407,1127,447,1144,432,1159,465,1172,454,1186,448,1191,426" shape="poly">
      <area id="musculo60"  coords="918,200,891,214,873,211,876,275,895,297,909,334,919,322,926,280,950,257" shape="poly">
      <area id="musculo61"  coords="996,202,963,254,981,278,993,324,1002,334,1005,313,1026,288,1039,252,1040,215" shape="poly">
      <area id="musculo62"  coords="958,260,931,278,923,317,918,340,953,363,957,372,980,345,1001,341,976,276" shape="poly">
      <area id="musculo63"  coords="887,295,902,315,906,337,894,341,884,340" shape="poly">
      <area id="musculo64"  coords="1025,297,1011,317,1008,337,1030,346" shape="poly">
      <area id="musculo65"  coords="884,351,906,348,888,369,871,410,873,390,877,375" shape="poly">
      <area id="musculo66"  coords="1005,347,1026,378,1046,408,1031,349" shape="poly">
      <area id="musculo67"  coords="918,348,946,364,957,393,953,430,946,457,916,461,889,454,872,425,883,399,892,370" shape="poly">
      <area id="musculo68"  coords="961,376,979,357,996,346,1015,368,1028,390,1040,412,1035,448,1011,461,980,461,963,449,958,416" shape="poly">
      <area id="musculo69"  coords="870,422,862,460,861,530,860,591,883,578,893,530,906,482,906,467,880,451" shape="poly">
      <area id="musculo70"  coords="1046,422,1051,434,1056,457,1053,513,1054,563,1056,582,1040,580,1030,561,1020,516,1007,467,1041,449,1028,461" shape="poly">
      <area id="musculo71"  coords="968,464,1002,464,988,540,970,499" shape="poly">
      <area id="musculo72"  coords="917,468,949,465,942,522,928,542" shape="poly">
      <area id="musculo73"  coords="908,482,914,486,917,505,928,553,918,595,904,626,887,606,885,585" shape="poly">
      <area id="musculo74"  coords="1004,482,1012,505,1026,559,1033,586,1018,624,1002,599,992,544" shape="poly">
      <area id="musculo75"  coords="1035,599,1039,584,1054,592,1062,611,1074,657,1080,706,1058,694" shape="poly">
      <area id="musculo76"  coords="1056,696,1080,710,1084,736,1043,738,1034,718" shape="poly">
      <area id="musculo77"  coords="1032,609,1054,690,1036,715,1023,693,1018,634" shape="poly">
      <area id="musculo78"  coords="858,596,870,591,876,608,868,656,858,690,835,709" shape="poly">
      <area id="musculo79"  coords="884,613,864,679,871,703,878,709,891,714,897,690,900,638,894,621" shape="poly">
      <area id="musculo80"  coords="835,714,858,695,881,722,875,737,835,736" shape="poly">
      <area id="musculo81"  coords="368,6,361,41,363,72,374,90,382,107,406,109,421,100,432,82,436,53,436,26,420,8,399,0" shape="poly">
  </map>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Padecimiento actual
    </div>
  </div>

</div>

<div class="row justify-content-sm-center">
  <table id="table" class="table responsive-table">
    <thead>
      <tr class="yellowMarista">
        <th>Tiempo</th>
        <th>EVA</th>
      </tr>
    </thead>
    <tbody>
      @foreach($padecimiento_actual as $padecimiento => $eva)
      <tr class="grayMarista">
        <td>{{$padecimiento}}</td>
        <td><input type="text" name="" value="{{$eva}}"></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Síntomas generales
    </div>
  </div>
</div>

<div class="row justify-content-sm-center">
<table id="table" class="table responsive-table">
  <thead>
    <tr class="yellowMarista">
      <th>Síntoma</th>
      <th>Sí/No</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sintomas as $sintoma => $respuesta)
    <tr class="grayMarista">
      <td>{{$sintoma}}</td>
      <td><input type="text" name="" value="{{$respuesta}}"></td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Aparatos y Sistemas
    </div>
  </div>
</div>

<div class="row justify-content-sm-center">
<table id="table" class="table responsive-table">
  <thead>
    <tr class="yellowMarista">
      <th>Aparato</th>
      <th>Sí/No</th>
      <th>Cuál</th>
    </tr>
  </thead>
  <tbody>
    @foreach($aparatos as $aparato => $respuesta)
    <tr class="grayMarista">
      <td>{{$aparato}}</td>
      @foreach($respuesta as $dato)
      <td><input type="text" name="" value="">{{$dato}}</td>
      @endforeach
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Diagnósticos anteriores
    </div>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-6">
    @if($diagnosticoActual->diagnosticos_ant==null)
    <p class="text-justify grayMarista">Sin diagnosticos anteriores</p>
    @else
    <p class="text-justify grayMarista">{{$diagnosticoActual->diagnosticos_ant}}</p>
    @endif
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Estudios de gabinete/Estudios de laboratorio
    </div>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-6">
    @if($diagnosticoActual->estudios==null)
    <p class="text-justify grayMarista">Sin estudios médicos anteriores</p>
    @else
    <p class="text-justify grayMarista">{{$diagnosticoActual->estudios}}</p>
    @endif
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Tratamientos anteriores
    </div>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-6">
    @if($diagnosticoActual->tratamentos_ant==null)
    <p class="text-justify grayMarista">Sin tratamientos médicos anteriores</p>
    @else
    <p class="text-justify grayMarista">{{$diagnosticoActual->tratamentos_ant}}</p>
    @endif
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Inquietud subyacente
    </div>
  </div>
</div>
<div class="row justify-content-md-center">
  <div class="col-6">
    @if($diagnosticoActual->inquietudes==null)
    <p class="text-justify grayMarista">Sin tratamientos médicos anteriores</p>
    @else
    <p class="text-justify grayMarista">{{$diagnosticoActual->inquietudes}}</p>
    @endif
  </div>
</div>


@foreach($exploracion as $exploracion => $respuesta)
<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      {{$exploracion}}
    </div>
  </div>
</div>

<div class="row justify-content-sm-center">
<table id="table" class="table responsive-table">
  <thead>
    <tr class="yellowMarista">
      <th>Variable</th>
      <th>Dato del pacietne</th>
    </tr>
  </thead>
  <tbody>
    @foreach($respuesta as $dato => $respuesta)
    <tr class="grayMarista">
      <td>{{$dato}}</td>
      <td>{{$respuesta}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endforeach

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Sistemas musculoesquelético por regiones
    </div>
  </div>
</div>
@if($esqueletico!=null)
@foreach($esqueletico as $esqueletico => $respuesta)
<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      {{$esqueletico}}
    </div>
  </div>
</div>

<div class="row justify-content-sm-center">
  <table id="table" class="table responsive-table">
    <thead>
      <tr class="yellowMarista">
        <th>Región</th>
        <th>Dato del pacietne</th>
      </tr>
    </thead>
    <tbody>
      @foreach($respuesta as $dato => $respuesta)
      <tr class="grayMarista">
        <td>{{$dato}}</td>
        <td>{{$respuesta}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endforeach
@endif

<div class="row justify-content-md-center">
  <div class="col-6">
    <div class="yellowMarista encabezado">
      Postura
    </div>
  </div>
</div>

<div class="row justify-content-sm-center">
  <table id="table" class="table responsive-table">
    <thead>
      <tr class="yellowMarista">
        <th>Posicion</th>
        <th>Dato</th>
      </tr>
    </thead>
    <tbody>
      @if($postura!=null)
      @foreach($postura as $postura => $dato)
      <tr class="grayMarista">
        <td>{{$postura}}</td>
        <td>{{$dato}}</td>
      </tr>
      @endforeach
      @endif
    </tbody>
  </table>
</div>

<!-- Modal Trigger -->
 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

 <!-- Modal Structure -->
 <div id="modal1" class="modal">
   <div class="modal-content">
     <h4>Dar de alta</h4>
    @if(session('rol')==1)
     <p>No puedes dar de alta al paciente</p>
    @elseif(session('rol')==2)
      @if($alta->medico==null)
      <a href="{{route('altaPaciente',['paciente'=>$paciente,'diagnostico'=>$diagnostico])}}" class="modal-close waves-effect waves-green btn-flat">Dar de alta al paciente</a>
      @else
      <p>Un medico ya dio de alta al pacientes</p>
      @endif
    @elseif(session('rol')==3)
      @if($alta->fisioterapeuta==null)
      <a href="{{route('altaPaciente',['paciente'=>$paciente,'diagnostico'=>$diagnostico])}}" class="modal-close waves-effect waves-green btn-flat">Dar de alta al paciente</a>
      @else
      <p>Un fisioterapeuta ya dio de alta al pacientes</p>
      @endif
    @elseif(session('rol')==4)
      @if($alta->pasante==null)
      <a href="{{route('altaPaciente',['paciente'=>$paciente,'diagnostico'=>$diagnostico])}}" class="modal-close waves-effect waves-green btn-flat">Dar de alta al paciente</a>
      @else
      <p>Un pasante ya dio de alta al pacientes</p>
      @endif
    @endif
   </div>

 </div>


@endsection
