<div ng-show="collapsed" class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>CREAR NUEVA EMPRESA</h4>

            <form class="form-horizontal style-form" method="get">

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">RUT</label>

                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control">
                        <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">RAZÓN SOCIAL</label>

                    <div class="col-sm-10 col-lg-6">
                        <input type="text" class="form-control">
                        <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
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
                    <label class="col-sm-2 col-sm-2 control-label">PAIS</label>

                    <div class="col-sm-10 col-lg-6">
                        <select class="form-control" ng-model="selectedCountry" ng-options="country.name for country
                        in countries track by  country.id">
                        </select>
                        <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                    </div>
                </div>




            </form>
        </div>
    </div>
    <!-- col-lg-12-->
</div>