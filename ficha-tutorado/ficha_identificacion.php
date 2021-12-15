<!DOCTYPE html>
<html>

<head>
  <title>Formularioprueba</title>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="estilos_fit.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="estilos_fit.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>

<body>




  <nav class="navbar">
    <ul class="navbar-nav">
      <li class="logo">
        <a href="#" class="nav-link">
          <span class="link-text logo-text">Anexo 6</span>
          <svg aria-hidden="true" focusable="false" data-prefix="fad" data-icon="angle-double-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-angle-double-right fa-w-14 fa-5x">
            <g class="fa-group">
              <path fill="currentColor" d="M224 273L88.37 409a23.78 23.78 0 0 1-33.8 0L32 386.36a23.94 23.94 0 0 1 0-33.89l96.13-96.37L32 159.73a23.94 23.94 0 0 1 0-33.89l22.44-22.79a23.78 23.78 0 0 1 33.8 0L223.88 239a23.94 23.94 0 0 1 .1 34z" class="fa-secondary"></path>
              <path fill="currentColor" d="M415.89 273L280.34 409a23.77 23.77 0 0 1-33.79 0L224 386.26a23.94 23.94 0 0 1 0-33.89L320.11 256l-96-96.47a23.94 23.94 0 0 1 0-33.89l22.52-22.59a23.77 23.77 0 0 1 33.79 0L416 239a24 24 0 0 1-.11 34z" class="fa-primary"></path>
            </g>
          </svg>
        </a>
      </li>
      

      <li class="nav-item">
        <a href="#ficha_iden" class="nav-link">Ficha de identificación</A>
        <path fill="currentColor" class="fa-secondary"></path>
        <path fill="currentColor" class="fa-primary"></path>



      </li>

      <li class="nav-item">
        <a href="#datos_generales" class="nav-link">Datos Generales</A>
      </li>

      <li class="nav-item">
        <a href="#info_padres" class="nav-link">Información de los Padres</A>
      </li>

      <li class="nav-item">
        <a href="#contacto_emer" class="nav-link">Contacto de Emergencia</A>
      </li>

      <li class="nav-item">
        <a href="#areas_integracion" class="nav-link"></A>
      </li>

    </ul>
  </nav>



  <main>
    
    <a name="ficha_iden">
      <H1>Ficha de identificación del tutorado</H1>
    </A>
    <form action="" class="formulario">

      <!--grupo carrera-->
      <div class="formulario__group">
        <label for="nombre" class="formulario__label">Carrera</label>
        <input type="text" class="formulario__input" id="Carrera" placeholder="Carrera">
      </div>

      <!--grupo No.Control-->
      <div class="formulario__group">
        <label for="estatura" class="formulario__label">No.Control</label>
        <input type="text" class="formulario__input" id="no_control" placeholder="Numero de Control">
      </div>

      <!--grupo semestre-->
      <div class="formulario__group">
        <label for="sexo" class="formulario__label">Semestre</label>
        <input type="text" class="formulario__input" id="semestre" placeholder="Semestre">
      </div>

      <!--grupo fecha_registro-->
      <div class="formulario__group">
        <label for="fecha_nacimiento" class="formulario__label">Fecha de registro</label>
        <input type="date" class="formulario__input" name="">
      </div>

      

      <!--secciones  de pagina-->
    </form>
    <a name="datos_generales">
      <H1>Datos Generales</H1>
    </A>
    <form action="" class="formulario">
      <!--Apellido paterno-->
      <div class="formulario__group">
        <label for="nombre_padre" class="formulario__label">Apellido paterno</label>
        <input type="text" class="formulario__input" id="apellido_paterno" placeholder="Apellido paterno">
      </div>

      <!--Apellido materno-->
      <div class="formulario__group">
        <label for="nombre_padre" class="formulario__label">Apellido materno</label>
        <input type="text" class="formulario__input" id="apellido_materno" placeholder="Apellido materno">
      </div>

      <!--Nombre(s)-->
      <div class="formulario__group">
        <label for="nombre_s" class="formulario__label">Nombre (s)</label>
        <input type="text" class="formulario__input" id="nombre_s" placeholder="Nombre (s)">
      </div>


      <!--Sexo del tutorado-->
      <div class="formulario__group">
        <label for="trabaja_padre" class="formulario__label">Sexo:</label>
        <input type="radio" name="mm" class="formulario__radio">Masculino
        <input type="radio" name="mm" class="formulario__radio">Femenino
      </div>

      <!--correo electronico-->
      <div class="formulario__group">
        <label for="profesion_padre" class="formulario__label"> Correo electronico</label>
        <input type="text" class="formulario__input" id="correo_e" placeholder="Correo electronico">
      </div>

      <!--grupo telefono de contacto-->
      <div class="formulario__group">
        <label for="tipo_trabajo_padre" class="formulario__label">Numero de telefono</label>
        <input type="text" class="formulario__input" id="telefono_contacto" placeholder="Telefono de contacto">
      </div>

      <!--Fecha de nacimiento-->
      <div class="formulario__group">
        <label for="domicilio_padre" class="formulario__label">Fecha de nacimiento</label>
        <input type="date" class="formulario__input" id="fecha_nacimiento" placeholder="Fecha de nacimiento">
      </div>

      <!--Lugar de nacimiento-->
      <div class="formulario__group">
        <label for="telefono_padre" class="formulario__label">Lugar de nacimiento</label>
        <input type="text" class="formulario__input" id="lugar_nacimiento" placeholder="Lugar de nacimiento">
      </div>

      <!--Estado civil-->
      <div class="formulario__group">
        <label for="telefono_padre" class="formulario__label">estado civil </label>
        
        <input type="radio" id="" value="soltero" name="estado-civil" class="formulario__radio"/>Soltero
      <input type="radio" id="" value="casado" name="estado-civil" class="formulario__radio"/>Casado
      <input type="radio" id="" value="otros" name="estado-civil" class="formulario__radio"/>Otros
      </div>

      <!--Hijos-->
      <div class="formulario__group">
        <label for="telefono_padre" class="formulario__label">Numero de hijos</label>
        <input type="text" class="formulario__input" id="lugar_nacimiento" placeholder="Numero de hijos">
      </div>

      <!--Domicilio actual-->
      <div class="formulario__group">
        <label for="telefono_padre" class="formulario__label">Domicilio actual</label>
        <input type="text" class="formulario__input" id="lugar_nacimiento" placeholder="Domicilio actual">
      </div>

      <!--Escolaridad-->
      <div class="formulario__group">
        <label for="telefono_padre" class="formulario__label">Escolaridad:</label>
        
      <input type="radio" id="" value="preparatoria" name="escolaridad"/>Preparatoria
        <input type="radio" id="" value="bachillerato-tecnico" name="escolaridad"/>Bachillerato tecnico
      </div>

      <!--Nombre de la institucion-->
      <div class="formulario__group">
        <label for="telefono_padre" class="formulario__label">Nombre de la institución</label>
        <input type="text" class="formulario__input" id="lugar_nacimiento" placeholder="Nombre de la institución">
      </div>

      <!--Becas anteriores-->
      <div class="formulario__group">
        <label for="telefono_padre" class="formulario__label">Haz estado becado:</label>
        
      <input type="radio" id="" value="menos18" name="becas_anteriores" class="formulario__radio"/>Si
      <input type="radio" id="" value="18a30" name="becas_anteriores" class="formulario__radio"/>No
      </div>

      <!--Becas-->
      <div class="formulario__group">
        <label for="telefono_padre" class="formulario__label">Becas:</label>

        <input type="radio" id="" value="gf" name="opciones_becas" class="formulario__radio"/>Gobierno federal 
        <input type="radio" id="" value="ge" name="opciones_becas" class="formulario__radio"/>Gobierno estatal
        <input type="radio" id="" value="eb" name="opciones_becas" class="formulario__radio"/>Esfuerzos de bachillerato 
      
      </div>

      <!--Transcurso de los estudios-->
      <div class="formulario__group">
        <label for="telefono_padre" class="formulario__label">En el transcurso de tus estudios viviras con:</label>

        <input type="radio" id="" value="familia" name="trans_estudios" class="formulario__radio"/>Con mi familia
      <input type="radio" id="" value="familia cercana" name="trans_estudios" class="formulario__radio"/>Con familiares cercanos
      <input type="radio" id="" value="estudiantes" name="trans_estudios" class="formulario__radio"/>Con otros estudiantes
      <input type="radio" id="" value="solo" name="trans_estudios" class="formulario__radio"/>Solo
      
      </div>

       <!--Trabajas-->
      <div class="formulario__group">
        <label for="telefono_padre" class="formulario__label">Trabajas:</label>

      <input type="radio" id="" value="si" name="trabajo" class="formulario__radio"/>Si
      <input type="radio" id="" value="no" name="trabajo" class="formulario__radio"/>No
      
      </div>

      <!--Nombre de la empresa-->
      <div class="formulario__group">
        <label for="telefono_padre" class="formulario__label">Nombre de la empresa</label>
        <input type="text" class="formulario__input" id="lugar_nacimiento" placeholder="Nombre de la empresa">
      </div>

      <!--Horario-->
      <div class="formulario__group">
        <label for="telefono_padre" class="formulario__label">Horario:</label>
        <input type="text" class="formulario__input" id="lugar_nacimiento" placeholder="Horario">
      </div>

    </form>

    <a name="info_padres">
      <H1>Información de los padres</H1>
    </A><br>
    <form action="" class="formulario">

      <!--escolaridad padre-->
      <div class="formulario__group">
        <label class="formulario__label">Maximo grado de estudios de:</label>
        <label for="planes_inmediatos" class="formulario__label">Padre</label>
        
        <input type="radio" id="" value="primaria" name="escolaridad_padre" class="formulario__radio" />Primaria
      <input type="radio" id="" value="secundaria" name="escolaridad_padre" class="formulario__radio"/>Secundaria
      <input type="radio" id="" value="preparatori<a" name="escolaridad_padre" class="formulario__radio"/>Preparatoria
      <input type="radio" id="" value="bachillerato tecnico" name="escolaridad_padre" class="formulario__radio"/>Bachillerato Tec
      <input type="radio" id="" value="licenciatura" name="escolaridad_padre" class="formulario__radio"/>Licenciatura
      <input type="radio" id="" value="posgrado" name="escolaridad_padre" class="formulario__radio"/>Posgrado
      <input type="radio" id="" value="sin estudios" name="escolaridad_padre" class="formulario__radio"/>Sin estudios
      </div>

      <!--escolaridad madre-->
      <div class="formulario__group">
        <label for="metas_vida" class="formulario__label">Madre</label>
        
        <input type="radio" id="" value="primaria" name="escolaridad_madre" class="formulario__radio"/>Primaria
      <input type="radio" id="" value="secundaria" name="escolaridad_madre" class="formulario__radio"/>Secundaria
      <input type="radio" id="" value="preparatoria" name="escolaridad_madre" class="formulario__radio"/>Preparatoria
      <input type="radio" id="" value="bachillerato tecnico" name="escolaridad_madre" class="formulario__radio"/>Bachillerato Tec
      <input type="radio" id="" value="licenciatura" name="escolaridad_madre" class="formulario__radio"/>Licenciatura
      <input type="radio" id="" value="posgrado" name="escolaridad_madre" class="formulario__radio"/>Posgrado
      <input type="radio" id="" value="sin estudios" name="escolaridad_madre" class="formulario__radio"/>Sin estudios
      </div>

      <!--Padres vivos o fallecidos-->
      <div class="formulario__group">
        <label for="nombre_entrevistador" class="formulario__label">Padre</label>
        
        <input type="radio" id="" value="vivo" name="estado_padre" class="formulario__radio"/>Vive
      <input type="radio" id="" value="finado" name="estado_padre" class="formulario__radio"/>Finado
      </div>

      <div class="formulario__group">
        <label for="nombre_entrevistador" class="formulario__label">Madre</label>
        
        <input type="radio" id="" value="viva" name="estado_madre" class="formulario__radio"/>Vive
      <input type="radio" id="" value="finada" name="estado_madre" class="formulario__radio"/>Finada
      </div>

    </form>
    <a name="contacto_emer">
      <H1>Contacto de emergencia</H1>
    </A><br>

    <form action="" class="formulario">

      <!--Lugar de trabajo del tutor-->
      <div class="formulario__group">
        <label for="yo_soy" class="formulario__label">Nombre del lugar de trabajo del tutor</label>
        <input type="text" class="formulario__input" id="lugar_trabajo_tutor" placeholder="Lugar de trabajo del tutor">
      </div>

      <!--Contacto-->
      <div class="formulario__group">
        <label for="caracter" class="formulario__label">En caso de accidente avisar a: </label>
        <input type="text" class="formulario__input" id="nombre_contacto" placeholder="Nombre del contacto">
      </div>

      <!--telefono contacto-->
      <div class="formulario__group">
        <label for="me_gusta_que" class="formulario__label">Telefono de contacto</label>
        <input type="text" class="formulario__input" id="telefono_contacto" placeholder="Telefono de contacto">
      </div>

    </form>


  </main>

</body>