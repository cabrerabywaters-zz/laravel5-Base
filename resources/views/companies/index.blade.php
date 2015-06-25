@extends('../layouts.app')


@section('content')


    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="/js/controllers/companyCtrl.js"></script> <!-- load our controller -->
    <script src="/js/services/companyService.js"></script> <!-- load our service -->
    <script src="/js/controllers/countryCtrl.js"></script> <!-- load our controller -->
    <script src="/js/services/countryService.js"></script> <!-- load our service -->
    <script src="/js/api/companies.js"></script> <!-- load our application -->


    <section id="main-content">
        <section class="wrapper site-min-height">

    <div class="row mt">
        <div class="col-lg-12" ng-controller="companyController">
            <div class="container-fluid">
                <button type="button" ng-model="collapsed" ng-click="collapsed=!collapsed"
                        class="btn btn-theme03 pull-right" style="margin-top: 5px">Agregar Empresa</button>
            </div>

            <!-- LOADING ICON =============================================== -->
            <!-- show loading icon if the loading variable is set to true -->
            <p class="text-center" ng-show="loading"><span class="fa fa-spinner fa-spin fa-5x fa-fw
            margin-bottom"></span></p>
            @include('companies/create')

            <div class="content-panel" ng-hide="loading">

                <table class="table table-striped table-advance table-hover">
                    <h4><i class="fa fa-angle-right"></i> Buscar Empresa</h4>
                    <div class="container-fluid">

                        <div class="col-sm-12 col-lg-12">
                            <input class="form-control" type="text" id="filter" placeholder="Comience a escribir..."
                                   ng-model="search">

                        </div>


                    </div>



                    <hr>
                    <thead>
                    <tr>
                        <th><i class="fa fa-bullhorn"></i> RUT</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nombre</th>
                        <th><i class="fa fa-bookmark"></i> Razón Social</th>
                        <th><i class=" fa fa-edit"></i> Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr  ng-repeat="company in companies| filter:search | orderBy:'fancy_name'|
                    limitTo:20">
                        <td><a href="basic_table.html#">@{{ company.rut }}</a></td>
                        <td class="hidden-phone">   @{{ company.fancy_name }}</td>
                        <td> @{{ company.description }} </td>
                        <td><span class="label label-info label-mini">Due</span></td>
                        <td>
                            
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>


        </div>
    </div>
</section>
    </section>



@stop