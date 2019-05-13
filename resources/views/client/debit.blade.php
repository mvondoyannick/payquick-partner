@extends('app')

    @section('content')

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@dashboard - Débiter un compte</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Signaler un problème</a>
        </div>

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Débiter un compte</h1>
                            </div>
                            <form class="user">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control form-control-user" id="exampleInputEmail" placeholder="Numéro de téléphone du compte à activer">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control form-control-user" id="exampleInputEmail" placeholder="Confirmer numéro de téléphone à activer">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="exampleInputEmail" placeholder="Montant à transferer">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{url("/httpd")}}" class="btn btn-danger btn-user btn-block">
                                            Annuler
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            Valider
                                        </a>
                                    </div>
                                </div>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
