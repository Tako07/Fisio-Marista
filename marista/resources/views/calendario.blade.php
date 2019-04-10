@extends('layouts.navBar')
@section('more_style')
<link rel="stylesheet" href={{{asset('css\fullcalendar.min.css')}}}>
@endsection
@section('title,Calendario')
@section('principal')

   
    <script src="js\jquery.min.js"></script>
    <script src="/js/moment.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/es.js"></script>



    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col_7">
                <div id="CalendarioWeb"></div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@section('more_script')
<script>
        $(document).ready(function () {
            $('#CalendarioWeb').fullCalendar({
                header: {
                    left: 'today,prev,next',
                    center: 'title',
                    right: 'month,agendaDay'
                },

            });
        });
    </script>
<script src="js\jquery.min.js"></script>
<script src="/js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/es.js"></script>
@endsection
@endsection

