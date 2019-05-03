imageMapResize();
var datos=[];
$(function() {
    $('.map').maphilight({
        fillColor: 'FF0000'
    });
    $('#musculo1').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo1')){
          datos.push('musculo1');
        }else{
          var index=datos.indexOf('musculo1');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo1').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo1').data('maphilight', data).trigger('alwaysOn.maphilight');

    })
    $('#musculo2').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo2')){
          datos.push('musculo2');
        }else{
          var index=datos.indexOf('musculo2');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo2').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo2').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo3').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo3')){
          datos.push('musculo3');
        }else{
          var index=datos.indexOf('musculo3');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo3').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo3').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo4').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo4')){
          datos.push('musculo4');
        }else{
          var index=datos.indexOf('musculo4');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo4').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo4').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo5').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo5')){
          datos.push('musculo5');
        }else{
          var index=datos.indexOf('musculo5');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo5').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo5').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo6').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo6')){
          datos.push('musculo6');
        }else{
          var index=datos.indexOf('musculo6');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo6').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo6').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo7').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo7')){
          datos.push('musculo7');
        }else{
          var index=datos.indexOf('musculo7');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo7').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo7').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo8').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo8')){
          datos.push('musculo8');
        }else{
          var index=datos.indexOf('musculo8');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo8').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo8').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo9').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo9')){
          datos.push('musculo9');
        }else{
          var index=datos.indexOf('musculo9');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo9').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo9').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo10').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo10')){
          datos.push('musculo10');
        }else{
          var index=datos.indexOf('musculo10');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo10').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo10').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo11').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo11')){
          datos.push('musculo11');
        }else{
          var index=datos.indexOf('musculo11');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo11').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo11').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo12').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo12')){
          datos.push('musculo12');
        }else{
          var index=datos.indexOf('musculo12');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo12').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo12').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo13').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo13')){
          datos.push('musculo13');
        }else{
          var index=datos.indexOf('musculo13');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo13').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo13').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo14').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo14')){
          datos.push('musculo14');
        }else{
          var index=datos.indexOf('musculo14');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo14').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo14').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo15').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo15')){
          datos.push('musculo15');
        }else{
          var index=datos.indexOf('musculo15');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo15').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo15').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo16').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo16')){
          datos.push('musculo16');
        }else{
          var index=datos.indexOf('musculo16');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo16').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo16').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo17').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo17')){
          datos.push('musculo17');
        }else{
          var index=datos.indexOf('musculo17');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo17').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo17').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo18').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo18')){
          datos.push('musculo18');
        }else{
          var index=datos.indexOf('musculo18');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo18').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo18').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo19').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo19')){
          datos.push('musculo19');
        }else{
          var index=datos.indexOf('musculo19');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo19').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo19').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo20').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo20')){
          datos.push('musculo20');
        }else{
          var index=datos.indexOf('musculo20');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo20').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo20').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo21').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo21')){
          datos.push('musculo21');
        }else{
          var index=datos.indexOf('musculo21');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo21').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo21').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo22').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo22')){
          datos.push('musculo22');
        }else{
          var index=datos.indexOf('musculo22');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo22').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo22').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo23').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo23')){
          datos.push('musculo23');
        }else{
          var index=datos.indexOf('musculo23');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo23').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo23').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo24').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo24')){
          datos.push('musculo24');
        }else{
          var index=datos.indexOf('musculo24');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo24').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo24').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo25').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo25')){
          datos.push('musculo25');
        }else{
          var index=datos.indexOf('musculo25');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo25').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo25').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo26').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo26')){
          datos.push('musculo26');
        }else{
          var index=datos.indexOf('musculo26');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo26').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo26').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo27').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo27')){
          datos.push('musculo27');
        }else{
          var index=datos.indexOf('musculo27');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo27').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo27').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo28').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo28')){
          datos.push('musculo28');
        }else{
          var index=datos.indexOf('musculo28');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo28').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo28').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo29').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo29')){
          datos.push('musculo29');
        }else{
          var index=datos.indexOf('musculo29');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo29').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo29').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo30').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo30')){
          datos.push('musculo30');
        }else{
          var index=datos.indexOf('musculo30');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo30').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo30').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo31').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo31')){
          datos.push('musculo31');
        }else{
          var index=datos.indexOf('musculo31');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo31').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo31').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo32').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo32')){
          datos.push('musculo32');
        }else{
          var index=datos.indexOf('musculo32');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo32').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo32').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo33').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo33')){
          datos.push('musculo33');
        }else{
          var index=datos.indexOf('musculo33');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo33').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo33').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo34').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo34')){
          datos.push('musculo34');
        }else{
          var index=datos.indexOf('musculo34');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo34').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo34').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo35').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo35')){
          datos.push('musculo35');
        }else{
          var index=datos.indexOf('musculo35');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo35').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo35').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo36').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo36')){
          datos.push('musculo36');
        }else{
          var index=datos.indexOf('musculo36');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo36').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo36').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo37').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo37')){
          datos.push('musculo37');
        }else{
          var index=datos.indexOf('musculo37');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo37').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo37').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo38').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo38')){
          datos.push('musculo38');
        }else{
          var index=datos.indexOf('musculo38');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo38').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo38').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo39').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo39')){
          datos.push('musculo39');
        }else{
          var index=datos.indexOf('musculo39');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo39').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo39').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo40').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo40')){
          datos.push('musculo40');
        }else{
          var index=datos.indexOf('musculo40');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo40').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo40').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo41').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo41')){
          datos.push('musculo41');
        }else{
          var index=datos.indexOf('musculo41');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo41').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo41').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo42').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo42')){
          datos.push('musculo42');
        }else{
          var index=datos.indexOf('musculo42');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo42').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo42').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo43').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo43')){
          datos.push('musculo43');
        }else{
          var index=datos.indexOf('musculo43');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo43').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo43').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo44').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo44')){
          datos.push('musculo44');
        }else{
          var index=datos.indexOf('musculo44');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo44').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo44').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo45').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo45')){
          datos.push('musculo45');
        }else{
          var index=datos.indexOf('musculo45');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo45').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo45').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo46').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo46')){
          datos.push('musculo46');
        }else{
          var index=datos.indexOf('musculo46');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo46').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo46').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo47').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo47')){
          datos.push('musculo47');
        }else{
          var index=datos.indexOf('musculo47');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo47').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo47').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo48').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo48')){
          datos.push('musculo48');
        }else{
          var index=datos.indexOf('musculo48');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo48').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo48').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo49').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo49')){
          datos.push('musculo49');
        }else{
          var index=datos.indexOf('musculo49');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo49').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo49').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo50').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo50')){
          datos.push('musculo50');
        }else{
          var index=datos.indexOf('musculo50');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo50').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo50').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo51').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo51')){
          datos.push('musculo51');
        }else{
          var index=datos.indexOf('musculo51');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo51').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo51').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo52').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo52')){
          datos.push('musculo52');
        }else{
          var index=datos.indexOf('musculo52');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo52').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo52').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo53').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo53')){
          datos.push('musculo53');
        }else{
          var index=datos.indexOf('musculo53');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo53').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo53').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo54').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo54')){
          datos.push('musculo54');
        }else{
          var index=datos.indexOf('musculo54');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo54').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo54').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo55').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo55')){
          datos.push('musculo55');
        }else{
          var index=datos.indexOf('musculo55');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo55').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo55').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo56').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo56')){
          datos.push('musculo56');
        }else{
          var index=datos.indexOf('musculo56');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo56').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo56').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo57').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo57')){
          datos.push('musculo57');
        }else{
          var index=datos.indexOf('musculo57');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo57').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo57').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo58').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo58')){
          datos.push('musculo58');
        }else{
          var index=datos.indexOf('musculo58');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo58').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo58').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo59').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo59')){
          datos.push('musculo59');
        }else{
          var index=datos.indexOf('musculo59');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo59').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo59').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo60').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo60')){
          datos.push('musculo60');
        }else{
          var index=datos.indexOf('musculo60');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo60').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo60').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo61').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo61')){
          datos.push('musculo61');
        }else{
          var index=datos.indexOf('musculo61');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo61').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo61').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo62').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo62')){
          datos.push('musculo62');
        }else{
          var index=datos.indexOf('musculo62');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo62').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo62').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo63').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo63')){
          datos.push('musculo63');
        }else{
          var index=datos.indexOf('musculo63');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo63').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo63').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo64').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo64')){
          datos.push('musculo64');
        }else{
          var index=datos.indexOf('musculo64');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo64').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo64').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo65').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo65')){
          datos.push('musculo65');
        }else{
          var index=datos.indexOf('musculo65');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo65').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo65').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo66').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo66')){
          datos.push('musculo66');
        }else{
          var index=datos.indexOf('musculo66');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo66').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo66').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo67').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo67')){
          datos.push('musculo67');
        }else{
          var index=datos.indexOf('musculo67');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo67').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo67').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo68').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo68')){
          datos.push('musculo68');
        }else{
          var index=datos.indexOf('musculo68');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo68').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo68').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo69').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo69')){
          datos.push('musculo69');
        }else{
          var index=datos.indexOf('musculo69');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo69').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo69').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo70').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo70')){
          datos.push('musculo70');
        }else{
          var index=datos.indexOf('musculo70');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo70').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo70').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo71').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo71')){
          datos.push('musculo71');
        }else{
          var index=datos.indexOf('musculo71');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo71').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo71').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo72').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo72')){
          datos.push('musculo72');
        }else{
          var index=datos.indexOf('musculo72');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo72').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo72').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo73').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo73')){
          datos.push('musculo73');
        }else{
          var index=datos.indexOf('musculo73');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo73').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo73').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo74').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo74')){
          datos.push('musculo74');
        }else{
          var index=datos.indexOf('musculo74');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo74').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo74').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo75').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo75')){
          datos.push('musculo75');
        }else{
          var index=datos.indexOf('musculo75');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo75').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo75').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo76').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo76')){
          datos.push('musculo76');
        }else{
          var index=datos.indexOf('musculo76');
          datos.splice(index, 1);
        }document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo76').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo76').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo77').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo77')){
          datos.push('musculo77');
        }else{
          var index=datos.indexOf('musculo77');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo77').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo77').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo78').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo78')){
          datos.push('musculo78');
        }else{
          var index=datos.indexOf('musculo78');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo78').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo78').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo79').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo79')){
          datos.push('musculo79');
        }else{
          var index=datos.indexOf('musculo79');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo79').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo79').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo80').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo80')){
          datos.push('musculo80');
        }else{
          var index=datos.indexOf('musculo80');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo80').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo80').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    $('#musculo81').click(function(e) {
        e.preventDefault();
        if(!datos.includes('musculo81')){
          datos.push('musculo81');
        }else{
          var index=datos.indexOf('musculo81');
          datos.splice(index, 1);
        }
        document.getElementById("datos").value = JSON.stringify(datos);
        var data = $('#musculo81').mouseout().data('maphilight') || {};
        data.alwaysOn = !data.alwaysOn;
        $('#musculo81').data('maphilight', data).trigger('alwaysOn.maphilight');
    });
    /*$('#ver').click(function(e){
      e.preventDefault();
      $.ajaxSetup({
            headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
        });
      $.ajax({
        type:"POST",
        url:"/guarda/mapa",
        async:"false",
        data:{'datos':JSON.stringify(datos),'_token':$('#token').attr('value')},
        success:alert('envio')
      });
    });*/


});
