<div ng-show="collapsed&&!loading " class="row mt" >
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>CREAR NUEVA EMPRESA</h4>

            <form class="form-horizontal style-form" method="get">


                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">RUT</label>

                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">RAZÓN SOCIAL</label>

                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">NOMBRE DE FANTASÍA</label>

                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control">
                        <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">DIRECCIÓN</label>

                    <div class="col-sm-10 col-lg-6">
                        <input type="text" ng-model="asyncSelected" placeholder="Comience a escribir..."
                               typeahead="address for address in getLocation($viewValue)"
                               typeahead-loading="loadingLocations" class="form-control">
                        <i ng-show="loadingLocations" class="glyphicon glyphicon-refresh"></i>
                        <span class="help-block">Dirección con número: Ej. "Libertador Bernardo O´Higgins 8878"</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">TELÉFONO</label>

                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control">
                        <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                </div>




            </form>
        </div>
    </div>
    <!-- col-lg-12-->
</div>