<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto </title>
         
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0"-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> 
</head>
<body>
      <div class="container">
           <br>
        <div class="row">     
             <nav class="navbar fixed-top navbar-light justify-content-lg-around" style="background-color: rgba(50, 220, 200, 1);">
                <h4><a class=" nav-item nav-link" href="index.php">Inicio</a></h4>

                <h4><a class="nav-item nav-link" href="acerca-de.php" >Acerca de</a></h4>
                   
                <h4><a class="nav-item nav-link" href="servicios.php" >Servicios</a></h4>
                   
                <h4><a class="nav-item nav-link" href="galeria.php"   >Galería</a></h4>
                    
                <h4><a class="nav-link" href="contacto.php"  >Contacto</a></h4>
            </nav>
        </div>
                <br>
                <br>
                <br>
          
        <div class="row">
           <div class="col-lg-2">
                <img class="" src="Imagenes/Logo_webDC.png" alt="logo de base de datos">
            </div>
            <div class="col-lg-2">
            </div>
        
            <div class="col-lg-8">
                <div class="" > 
                    <br>
                    <br>
                    <h1 class="">Datos & Conecciones</h1>
                    <h2 class="">Bases de datos y Redes Cableadas</h2>  
                </div>       
            </div>
        </div>
                <br> 
                <br>
            <div class="row">
                <h3>Ingresa tus datos para tener el gusto de atenderte</h3>
            </div>
                
                
                <br>
                <br>
      
     <form action="registro.php" method="post">
         <div class="row">
            <div class="col-lg-4 mb-3">
              <label for="validationDefault01">Nombres</label>
              <input type="text" class="form-control" name="nombres" placeholder="ej: Juan Jose" required>
            </div>
            <div class="col-lg-4 mb-3">
              <label for="validationDefault02">Apellidos</label>
              <input type="text" class="form-control" name="apellidos" placeholder="ej: Martinez Castro" required>
            </div>
            <div class="col-lg-4 mb-3"> 
                <label for="formgenero">Genero</label>
                <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" value="masculino" checked> 
                    <label class="form-check-label" for="radiom">
                        Masculino
                    </label>   
                </div>
                         
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" value="femenino">  
                    <label class="form-check-label" for="radiof">
                        Femenino
                    </label>        
                </div>
                </div>
             </div>
        </div> 
         
        <div class="row">
            <div class="col-lg-4 mb-3">
              <label for="">Email</label>
              <input type="text" class="form-control" name="email" placeholder="ej: juanmart@gmail.com" required>
            </div>
              
            <div class="col-lg-4 mb-3">
              <label for="">Telefono</label>
              <input type="text" class="form-control" name="telefono" placeholder="telefono" required>
            </div>
           
        </div>
         
        <div class="row">
            <div class="col-lg-4 mb-3">
                <label for="formpais">Pais</label>
                <select class="form-control" name="pais">
                      <option value="Argentina">Argentina</option>
                      <option value="Brasil">Brasil</option>
                      <option value="Bolivia">Bolivia</option>
                      <option value="Chile">Chile</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Ecuador">Ecuador</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Panama">Panama</option>
                      <option value="paraguay">Paraguay</option>
                      <option value="uruguay">Uruguay</option>
                      <option value="Venezuela">Venezuela</option>
                </select>        
            </div>
            <div class="col-lg-4 mb-3">
              <label for="validationDefault03">Ciudad</label>
              <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" required>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                  <label for="">Dirección de residencia</label>
                  <input type="text" class="form-control" name="direccion"  placeholder="Dirección" required>
                </div>
                <div class="col-lg-4 mb-3">
                  <label for="">Asunto de su interes</label>
                  <input type="text" class="form-control" name="asunto" placeholder="Asunto" required>
                </div>
            </div>
            <div>
            <div class="row form-group mb-3">
                <label for="">Describa su necesidad</label>
                <textarea class="" max-leng="255" name="mensaje">
                </textarea>
            </div>   
            </div>                  
            <!--  <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="condicion" required>
                  <label class="form-check-label" >
                    Aceptar todos los terminos y condiciones
                  </label>
                </div>
              </div>-->
            <button class="btn btn-primary"  type="submit" name="enviar" value="enviar">Enviar</button>
    </form>           
        
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>     
            <footer >
            <div class="row">
                <div class="col-lg-4 text-center">
                         
                    
                    <h4 >Telefonos:</h4>
                    <h4 >(57) 324 239 9367</h4>
                    <h4 >Watsapp: </h4> 
                     <h4>(57) 301 596 1478</h4>
                    <h4 >Email :</h4>     
                    <h4 >jose-fragozo@hotmail.com</h4>

                    <br>
               
                </div>
                <div class="col-lg-4 text-center">   
                    
                    <h4 >Ubicación :</h4> 
                    <h4 >Carrera 13 N° 118 / 27</h4>            
                    <h4 >Barranquilla-colombia</h4>
                    <br>
                   
                    
               
                </div>
                
                 <div class="col-lg-4 text-center ">

                    <h4 ><a class="nav-link" href="https://www.facebook.com/Datos010conecciones"  >facebook</a></h4>  
                    <h4 ><a class="nav-link" href="contacto.php"  >Contacto</a></h4>
                    <h4><a class="nav-link" href="https://www.google.com/maps/@10.963268,-74.8413088,18z/data=!5m1!1e1?hl=es " >Como llegar ? </a></h4>
                    <br>
                    <br>

                </div>
            </div>
            <div class="row text-center">
                <h5 ><a class="nav-link" href="">Pagina diseñada por: Datos & Conecciones</a></h5>
            
            </div>
        </footer>
        
              
    </div>  
</body>
</html>