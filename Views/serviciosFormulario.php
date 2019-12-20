<?php $msg = '';
echo ($msg) ? '<div class="alert alert-danger" role="alert">' . $msg . '</div>' : '';?>
<form method="POST">

    <div class="py-2" id="fullbody">
        <div class="container">
            <div class="py-5 my-3 bg-white">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-9">

                            <div class="form-group">
                                <label for="nombre">Nombre del servicio:</label>
                                <input class="form-control" type="text" name="nombre"
                                    <?php echo (isset($element)) ? 'value="' . $element->get_element('nombre') . '"' : '' ?>>
                            </div>

                            <div class="form-group">
                                <label for="detalle">Detalle:</label>
                                <textarea class="form-control"
                                    name="detalle"><?php echo (isset($element)) ? $element->get_element('detalle') : '' ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="precio">Precio por Hora:</label>
                                <input class="form-control" type="text" name="precio"
                                    <?php echo (isset($element)) ? 'value="' . $element->get_element('precioPorHora') . '"' : '' ?>>
                            </div>

                            <input type="hidden" name="id"
                                <?php echo (isset($element)) ? 'value="' . $element->get_element('id') . '"' : '' ?>>

                            <input class="btn btn-primary" type="submit" value="Enviar">
                            <a href="panelServicios.php" class="btn btn-primary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>