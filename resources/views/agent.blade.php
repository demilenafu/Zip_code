<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

        <title>Full-Stack Developer Test</title>

        <style type="text/css">
            body {
                background-color: #f6f6f6;
            }
            .noSpinners{
                -webkit-appearance: none;
                -moz-appearance: textfield;
                margin: 0;
            }
            a.noLine:hover{
                text-decoration: none;
            }
            a.noLine:visited{
                text-decoration: none;  
            }
            a.noLine:link{
                text-decoration: none;  
            }
            a.noLine:active{
                text-decoration: none;  
            }
        </style>
        <script src="{{asset('assets/js/jquery-2.2.1.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        
        

    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/styles.css')}}">

        <style type="text/css">
            body,td,th {
                font-family: cal-r;
                background-color:#f6f6f6;
            }
        </style>

                <div class="col-xs-12 col-sm-12 col-form-info col-cell">
                    <div class="row row-head-forms">
                        <div class="col-xs-12 col-sm-12">
                            <h1>Full-Stack Developer Test </h1>
                            <h2>AGENTS</h2>
                        </div>
                    </div>
                    <div class="row row-file">
                        <div class="col-xs-12">
                            <div class="row">
                                <form action="cargarCatastro" method="post" enctype="multipart/form-data" id="catastro">
                                    <div class="col-xs-12 col-sm-6">
                                        <div id="files" class="files">
                                            <div>
                                                <p>
                                                    <span id="fileName">File chooser</span>
                                                    <button type="button" class="btn btn-blue btn-upload-server-catastro" value="CARGAR">CARGAR</button>
                                                </p>
                                            </div>
                                        </div>
                                     </div>
                                     <div class="col-xs-12 col-sm-3">
                                        <div class="btn btn-blue btn-block fileinput-button btn-load-file">
                                            <span class="btn-icon3"></span>
                                            SELECCIONAR
                                            <input id="file" type="file" name="fileToUpload">
                                        </div>
                                     </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <div id="form-zipcode" class="grl-form clearfix form-zipcode" data-id="55" id="areapres1">
                    <div class="panel-content-3" style>   
                        <form id="form-zipcode" class="grl-form clearfix form-zipcode">
                            <div class="panel-body">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="row row-percents">
                                        <div class="col-xs-12 col-sm-12">
                                            <h3> Agent 1</h3>
                                            <fielset class="con-field field-type1">
                                                <label style="text-align: center;">Zip Code</label>
                                                <input class="input es1" id="sol1" name="sol1" type="number" step="any" lang="en" style="width:50%;" />
                                            </fielset>
                                        </div>  
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12">
                                    <div class="row row-percents">
                                        <div class="col-xs-12 col-sm-12">
                                        <h3> Agent 2</h3>
                                            <fielset class="con-field field-type1">
                                                <label style="text-align: center;">Zip Code</label>
                                                <input class="input es4" id="sol4" name="sol4" type="number" step="any" lang="en" style="width:50%;"/>
                                            </fielset>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div align="center">
                                    <button class="btn btn-blue btn-big" type="submit" id="generarBtn" name="generarBtn" value="Generar">
                                    MATCH
                                    </button>                                    
                                </div>
                            </div>
                        </form>
                        <div id="mensaje"></div>
                                                   
                    </div>
                    <script src="{{asset('assets/js/zipcode.js')}}"></script>
                </div>
            </div>

        
    </body>
</html>