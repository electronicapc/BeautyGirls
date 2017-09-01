 @includeIf('layouts.header') 
 
 @if (session('status'))
<div class="alert alert-success">
  <strong>Exito!</strong> {{ session('status') }}
</div>
@endif
<!-- Content -->
<section>
    <div class="container">
        <div class="container">
            <h4>Beauty Lies</h4>
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d7889.40621095499!2d-70.23299216136742!3d8.624475075086659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d8.626995899999999!2d-70.2301559!5e0!3m2!1ses-419!2sve!4v1456756695234" style="border:0" allowfullscreen="" frameborder="0" height="250" width="100%"></iframe>
            </div>
            <strong>Contactenos</strong><br><a href="tel:+573005672190"><img src="images/wp.png" alt="WhatsApp" height="42" width="42"></a> 
            <a href="https://api.whatsapp.com/send?phone=+05730005672195">Env&iacute;anos un mensaje de WhatsApp</a>
            <hr>
        </div>
        <div class="container">
            <form role="form" id="Formulario" action="contacto" method="POST">
           		<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="form-group">
                    <label class="control-label" for="Nombre">Nombres</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Introduzca su nombre" required autofocus />
                </div>            
                <div class="form-group">
                    <label class="control-label" for="Motivo">Motivo de Contacto</label>
                    <select name="Motivo" class="form-control">
                        <option value="Consulta General">Consulta General</option>
                        <option value="Realizar Pedido">Solicitar Acompa&ntilde;ante</option>
                        <option value="Informe un problema">Reportar un inconveniente</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="Empresa">Tel&eacute;fono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Introduzca el tel&eacute;fono de contacto" required />
                </div>
                <div class="form-group">
                    <label class="control-label" for="Correo">Direccin de Correo Electr&oacute;nico</label>
                    <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Introduzca su correo electr&oacute;nico" required />
                </div>
                <div class="form-group">
                    <label class="control-label" for="Mensaje">Mensaje</label>
                    <textarea rows="5" cols="30" class="form-control" id="Mensaje" name="Mensaje" placeholder="Introduzca su mensaje" required ></textarea>
                </div>
                <div class="form-group">                
                    <input type="submit" class="btn btn-primary" value="Enviar">
                    <input type="reset" class="btn btn-default" value="Limpiar">                
                </div>
                <div id="respuesta" style="display: none;"></div>
            </form>
        </div>       
    </div>
</section>
 @includeIf('layouts.footer')