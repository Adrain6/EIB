
<html>
    <head>
        <title><?php
            if (isset($this->titulo)) {
                echo $this->titulo;
            }
            ?></title>
        <meta http-equiv="Content-Type" content="text/html" charset="utf8">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap-theme.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>jquery-ui.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>jquery-ui.structure.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $_layoutParams['ruta_css']; ?>jquery-ui.theme.min.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="">Framework B&aacute;sico MVC</a>
                    </div>
                    <div>
                        <ul class="nav navbar-nav">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li> 
                            <li><a href="#">Page 3</a></li> 
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="ui-pnotify " id="divAlertExito" style="width: 300px; right: 25px; top: 25px; opacity: 1; display: none; cursor: auto;">
            <div class="alert ui-pnotify-container alert-success ui-pnotify-shadow" style="min-height: 16px;">
                <h4 class="ui-pnotify-title">Terminado</h4>
                
                <div class="ui-pnotify-text" id="mensajeOk"><span id="msjOk"></span></div>
            </div>
        </div>

        <div class="ui-pnotify " id="divAlertWar" style="width: 300px; right: 25px; top: 25px; opacity: 1; display: none; cursor: auto;">
            <div class="alert ui-pnotify-container alert-danger ui-pnotify-shadow" style="min-height: 16px;">
                <h4 class="ui-pnotify-title">&iexcl;Atenci&oacute;n!</h4>
                <div class="ui-pnotify-text" id="mensajeWar"><span id="msjWar"></span></div>
            </div><!--<img src="<?php echo $_layoutParams['ruta_img']; ?>st_rojo.png" width="16" border="0"  />-->
        </div>
        <div class="ui-pnotify " id="divAlertInfo" style="width: 300px; right: 25px; top: 25px; opacity: 1; display: none; cursor: auto;">
            <div class="alert ui-pnotify-container alert-info ui-pnotify-shadow" style="min-height: 16px;">
                <h4 class="ui-pnotify-title">Cargando</h4>
                <div class="ui-pnotify-text" id="mensajeWar"><span id="msjInfo"></span></div>
            </div><img src="<?php echo $_layoutParams['ruta_img']; ?>loading.gif" width="16" border="0"  />
        </div>
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body&hellip;</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="container">