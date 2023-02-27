<?php 
include_once '../php/validacion.php';
if(!empty($_GET['name'])){
    $name = $_GET['name'];
}else{
    header("location: ../index.php");
}
$val = new validacion();
$val->validacion($name);
include_once "../php/selectList.php";
$select = new selectList();
$hora = $select->obtenerHora($_GET['edicion']);
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/style.css">

        <link rel="icon"  href="img/icono boli ad.png">

        <title>Escaleta</title>
        <style>
            .my-custom-scrollbar {
                position: relative;
                height: 60%;
                overflow: auto;
            }
            .table-wrapper-scroll-y {
                display: block;
            }
  
        </style>

    </head>
    <body>  
        <!--menu-->
<?php 
include_once "menu.php";
include_once "opciones.php";
?>
<h3 style="text-align: center;">Escaleta</h3>
<section class="formulario">
	<?php 
		include_once "formularios.php";
	?>
</section>

<div class="table-responsive-sm">
  <table class="table table-sm" id="data_table">
    <thead class="table-dark">
    	<tr>
    		<th>id</th>
    		<th>#</th>
    		<th>Productor</th>
    		<th>Presentador</th>
    		<th>Emitido</th>
    		<th>Descripcion</th>
    		<th>Formato</th>
    		<th>Ciudad</th>
    		<th>Periodista</th>
    		<th>Editor</th>
    		<th>Contenido</th>
    		<th>Bloque</th>
    		<th>Duracion</th>
    		<th>Hora Prog</th>
    		<th>Acciones</th>
    	</tr>
    </thead>
    <tbody id="mostrar">
    	
    </tbody>
  </table>
</div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script src="../assets/jquery.tabledit.js"></script>
<script src="../assets/typeahead.js"></script>
<script type="text/javaScript">
    /****************Registrar***************** */
    $(document).on('click', '#registrar', function(){
        let descripcion = $("#descripcion").val();
        let edicion = '<?php echo $_GET['edicion']?>';
        let name = '<?php echo $_GET['name']?>';
        let fecha = '<?php echo $_GET['fecha']?>';
        let realizada_en = '<?php echo $_GET['realizada_en']?>';
        let nroFilas = $('#data_table tr').length;
        let hora_prog = '<?php echo $hora;?>';

        $.ajax({
            method :"POST",
            url: "../php/addTabla.php?sw=1",
            data:{
                'descripcion':descripcion,
                'edicion':edicion,
                'name':name,
                'fecha':fecha,
                'realizada_en':realizada_en,
                'nroFilas':nroFilas,
                'hora_prog':hora_prog
            },
            dataType:'HTML',
            success:function(response){
               // alert(response)
                $("#descripcion").val("");
                $("#mostrar").append(response);
                autollenado();
            }
        })
        return false;
    })
    /******************AUTOCOPLETADO***********************/

    var substringMatcher = function(strs) {
      return function findMatches(q, cb) {
        var matches, substringRegex;
        matches = [];
        substrRegex = new RegExp(q, 'i');
        $.each(strs, function(i, str) {
          if (substrRegex.test(str)) {
            matches.push(str);
          }
        });

        cb(matches);
      };
    };
  
    function obtenerdatos(sw,identificador){
            //periodistas
            $(identificador).typeahead('destroy');
        $.ajax({
            type:"POST",
            url:"../php/autocompletado.php",
            data:{
                'sw':sw
            },
            dataType: "html",
        success: function(datos){
            var states =datos.split(",");
            $(identificador).typeahead({
              hint: true,
              highlight: true,
              minLength: 1
            },
            {
              name: 'states',
              source: substringMatcher(states),

            });
            }
        });
    }

    function autollenado(){
        //alert("hola")
        obtenerdatos(1,".presentador");
        //obtenerdatos(2,".formato");
        //obtenerdatos(3,".ciudad");
        obtenerdatos(4,".periodista");
        obtenerdatos(5,".editor");
        //obtenerdatos(6,".contenido");
        //obtenerdatos(7,".bloque");
        //obtenerdatos(8,".emitido");
    } 
    table();
    mostrar();
    function renumerar(){
        let num = 1;
        $('#mostrar>tr').each(function() {
            let numero =  $(this).find('td:nth-child(2)').text(num);
            num++;
        });
    }
    function mostrar(){
        let edicion = '<?php echo $_GET['edicion']?>';
        let name = '<?php echo $_GET['name']?>';
        let fecha = '<?php echo $_GET['fecha']?>';
        let realizada_en = '<?php echo $_GET['realizada_en']?>';
        $.ajax({
            method :"POST",
            url: "../php/mostrar.php",
            data:{
                'edicion':edicion,
                'name':name,
                'fecha':fecha,
                'realizada_en':realizada_en,
            },
            dataType:'HTML',
            success:function(response){
                $("#mostrar").html(response);
                autollenado();
                $( "#mostrar" ).sortable({
                delay: 150,
                stop: function() {
                var selectedData = new Array();
                $('#mostrar>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });
                updateOrder(selectedData);
                }
            });
            }
        })
    }

    function updateOrder(data)//solicitud para ordenar una tabla  
   {
        $.ajax({
            url:"../php/ordenar.php",
            type:'post',
            data:{position:data},
            success:function(response){
                renumerar();
                ActualizarHoraJS()
                ActualizarHoraPHP();
                //Hora();
            }
        })
    }
   /********************Le da fomato a la hora*********************************/
    function convertir(horas,minutos,segundos){
        horas = parseFloat(horas);
        minutos = parseFloat(minutos);
        segundos = parseFloat(segundos);
        var horas_Segundos = horas * 3600;
        var minutos_Segundos = minutos * 60;
        var segundos = segundos + minutos_Segundos + horas_Segundos;
        var hours = Math.floor( segundos / 3600 );
        var minutes = Math.floor( (segundos % 3600) / 60 );
        var seconds = segundos % 60;
        //Anteponiendo un 0 a las Hora si son menos de 10
        hours = hours<10?'0'+hours:hours;
        //Anteponiendo un 0 a los minutos si son menos de 10 
        minutes = minutes < 10 ? '0' + minutes : minutes;
        //Anteponiendo un 0 a los segundos si son menos de 10 
        seconds = seconds < 10 ? '0' + seconds : seconds;
        var result = hours + ":" + minutes + ":" + seconds;  // 2:41:30
        return result;
    }
    function ActualizarHoraJS(){
        let num = 1;
        $('#mostrar>tr').each(function() {
            let obtHora =  $(this).find('td:nth-child(14)').text();
            if(num == 1){
                //let obtHora =  $(this).find('td:nth-child(14)').text();
                //let obtDuracion = $(this).find('td:nth-child(13)').text();
                let obtDuracion = $(this).find('td:nth-child(13)').text();
                let separarHora = obtHora.split(":");
                let separarDuracion = obtDuracion.split(":");
                let separarDuracion2 = ['00','00','00'];
                let obtenerDuracion2 = $(this).next().find('td:nth-child(13)').text();
                separarDuracion2 = obtenerDuracion2.split(":");
                console.log(separarHora[1]+"::"+separarDuracion[1]+"::"+separarDuracion2[1])
                sumaHora = parseInt(separarHora[0])+parseInt(separarDuracion[0])+parseInt(separarDuracion2[0]);
                sumaMinutos = parseInt(separarHora[1])+parseInt(separarDuracion[1])+parseInt(separarDuracion2[1]);
                sumaSegundos = parseInt(separarHora[2])+parseInt(separarDuracion[2])+parseInt(separarDuracion2[2]);
                HoraCalculada = sumaHora+':'+sumaMinutos+':'+sumaSegundos; 
                HoraCalculada =convertir(sumaHora,sumaMinutos,sumaSegundos);
            }else{
                //let obtHora =  $(this).find('td:nth-child(14)').text();
                let obtDuracion = $(this).next().find('td:nth-child(13)').text();
                let separarHora = obtHora.split(":");
                let separarDuracion = obtDuracion.split(":");
                //let sumaMinutos = parseInt(separarHora[1])+parseInt(separarDuracion[1]);
                sumaHora= parseInt(separarHora[0])+parseInt(separarDuracion[0]);
                sumaMinutos = parseInt(separarHora[1])+parseInt(separarDuracion[1]);
                sumaSegundos= parseInt(separarHora[2])+parseInt(separarDuracion[2]);
        
            //  HoraCalculada = sumaHora+':'+sumaMinutos+':'+sumaSegundos; 
                HoraCalculada =convertir(sumaHora,sumaMinutos,sumaSegundos);
                
            }
            $(this).next().find('td:nth-child(14)').text(HoraCalculada);
            num++;
        });
    }

    function ActualizarHoraPHP(){
    let Realizada_en = '<?php echo $_GET['realizada_en'];?>';
    let edicion = '<?php echo $_GET['edicion'];?>';
    let fecha = '<?php echo $_GET['fecha'];?>';
    $.ajax({
     type: 'POST',
     url: '../php/ActualizarHora.php',
     data: {
        'realizada_en':Realizada_en,
        'edicion':edicion,
        'sw' :1,
        'fecha':fecha
     },
      dataType: "html",
      success: function (response) {
      }
    });
    }
    function table(){
        $('#data_table').Tabledit({
            deleteButton: false,
            editButton: false,          
            columns: {
            identifier: [0, 'id'],    
            editable : [[4,'presentador'],[5,'emitido'],[6,'descripcion'],[7,'formato'],[8,'ciudad'],[9,'periodista'],[10,'editor'],[11,'contenido'],[12,'duracion'],[13,'bloque']],
            },
            hideIdentifier :true,
            url: '../php/editarCelda.php',

            onDraw: function() {
            console.log('onDraw()');
        },
        onSuccess: function(data, textStatus, jqXHR) {
            console.log('onSuccess(data, textStatus, jqXHR)');
            console.log(data);
            console.log(textStatus);
            console.log(jqXHR);    
            ActualizarHoraJS();     
            ActualizarHoraPHP();
        },
        onFail: function(jqXHR, textStatus, errorThrown) {
            console.log('onFail(jqXHR, textStatus, errorThrown)');
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        },
        onAlways: function() {
            console.log('onAlways()');
        },
        onAjax: function(action, serialize) {
            console.log('onAjax(action, serialize)');
            console.log(action);
            console.log(serialize);
        },
            hideIdentifier: true
            
        });
    }

</script>