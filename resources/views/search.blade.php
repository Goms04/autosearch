@extends('base')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ajouter un nom de domaine</h4>
                            <p class="card-title-desc">clients & noms de domaine</p>
                        </div>
                        <!-- end card header -->

                        <div class="card-body">
                            <div>
                                <h5 class="card-title mb-4">Enregistrer le client</h5>
                                <form id="pristine-valid-example" action="{{ route('domaine.create') }}" novalidate
                                    method="post">
                                    @csrf
                                    <input type="hidden" />
                                    <div class="row">
                                        <div class="col-xl-4 col-md-12">
                                            <div class="form-group mb-3">
                                                <label>Nom & prénoms</label>
                                                <input type="text" name="nom" required
                                                    data-pristine-required-message="Entrez le nom s'il vous plait"
                                                    class="form-control" />
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-md-12">
                                            <div class="form-group mb-3">
                                                <label>Téléphone</label>
                                                <input type="number" name="telephone" required
                                                    data-pristine-required-message="Entrez le telephone s'il vous plait"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-12">
                                            <div class="form-group mb-3">
                                                <label>Email</label>
                                                <input type="text" name="email" required
                                                    data-pristine-required-message="Entrez l'email' s'il vous plait"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <hr>
                                        <h3>Enregistrement du domaine</h3>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group mb-3">
                                                <label>Nom du domaine</label>
                                                <input type="text" name="nom_domaine" required
                                                    data-pristine-required-message="Entrez le nom de domaine s'il vous plait"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group mb-3">
                                                <label>Date de création</label>
                                                <input type="date" name="date_creation"
                                                    data-pristine-required-message="Entrez la date s'il vous plait"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="form-group mb-3">
                                                <label>Date d'expiration</label>
                                                <input type="date" name="date_expiration" required
                                                    data-pristine-required-message="Entrez la date s'il vous plait"
                                                    class="form-control" />
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                <button type="submit" name="enregistrer"
                                                    class="btn btn-primary w-md">Enregistrer</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <hr class="my-5">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">LISTE DES DOMAINES ENREGISTRES</h4>
                                            <p class="card-title-desc">Ici consulter toutes les noms de domaines et clients
                                            </p>
                                        </div>

                                        <div class="card-body">

                                            <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                <form action="{{ route('result') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6">
                                                            <div id="datatable_filter" class="dataTables_filter">

                                                                <label>Chercher les dates d'expiration proches :
                                                                    <input type="date"
                                                                        class="form-control form-control-sm" name="ladate"
                                                                        placeholder="" aria-controls="datatable">
                                                                </label>

                                                                &nbsp;&nbsp;
                                                                <button type="submit" style="width: 18%"
                                                                    class="btn btn-info waves-effect waves-light">
                                                                    <i
                                                                        class="mdi mdi-magnify d-block font-size-16">Search</i>
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                                <br><br><br>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="datatable"
                                                            class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
                                                            role="grid" aria-describedby="datatable_info"
                                                            style="width: 1189px;">
                                                            <thead>
                                                                <tr>
                                                                    <th class="sorting sorting_asc" tabindex="0"
                                                                        aria-controls="datatable" rowspan="1"
                                                                        colspan="1" style="width: 190.2px;"
                                                                        aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        Nom & prénoms</th>
                                                                    <th class="sorting sorting_asc" tabindex="0"
                                                                        aria-controls="datatable" rowspan="1"
                                                                        colspan="1" style="width: 190.2px;"
                                                                        aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        Téléphone</th>
                                                                    <th class="sorting sorting_asc" tabindex="0"
                                                                        aria-controls="datatable" rowspan="1"
                                                                        colspan="1" style="width: 190.2px;"
                                                                        aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        nom de domaine</th>
                                                                    <th class="sorting sorting_asc" tabindex="0"
                                                                        aria-controls="datatable" rowspan="1"
                                                                        colspan="1" style="width: 190.2px;"
                                                                        aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        date de création</th>
                                                                    <th class="sorting sorting_asc" tabindex="0"
                                                                        aria-controls="datatable" rowspan="1"
                                                                        colspan="1" style="width: 190.2px;"
                                                                        aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        Date d'expiration</th>
                                                                    <th class="sorting sorting_asc" tabindex="0"
                                                                        aria-controls="datatable" rowspan="1"
                                                                        colspan="1" style="width: 190.2px;"
                                                                        aria-sort="ascending"
                                                                        aria-label="Name: activate to sort column descending">
                                                                        Actions </th>
                                                                </tr>
                                                            </thead>


                                                            <tbody>


                                                                @foreach ($search as $se)
                                                                    <tr class="odd">
                                                                        <td class="dtr-control sorting_1" tabindex="0">
                                                                            {{ $se->client->nom }}</td>
                                                                        <td>{{ $se->client->telephone }}</td>
                                                                        <td>{{ $se->nom_domaine }}</td>
                                                                        <td>{{ $se->date_creation }}</td>
                                                                        <td>{{ $se->date_expiration }}</td>


                                                                        <td class="text-center">
                                                                            <button type="button"
                                                                                class="btn btn-success waves-effect waves-light"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#Modal{{ $se->id }}">
                                                                                <i
                                                                                    class="mdi mdi-pencil d-block font-size-16">Modifier</i>
                                                                            </button>

                                                                            <button type="button"
                                                                                class="btn btn-soft-dark waves-effect waves-light"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#monModal{{ $se->id }}"><i
                                                                                    class=" bx bxs-info-circle font-size-16 align-middle"></i></button>

                                                                            <button type="button"
                                                                                class="btn btn-danger waves-effect waves-light"data-bs-toggle="modal"
                                                                                data-bs-target="#myModal{{ $se->id }}">
                                                                                <i
                                                                                    class="mdi mdi-trash-can d-block font-size-16">Supprimer</i>
                                                                            </button>


                                                                            {{-- modal detail --}}
                                                                            <div id="monModal{{ $se->id }}"
                                                                                class="modal fade" tabindex="-1"
                                                                                aria-labelledby="myModalLabel"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title"
                                                                                                id="ModalLabel">
                                                                                                DETAILS</h5>
                                                                                            <button type="button"
                                                                                                class="btn-close"
                                                                                                data-bs-dismiss="modal"
                                                                                                aria-label="Close"></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <h4>Nom & prénoms :
                                                                                                {{ $se->client->nom }}</h4>
                                                                                            <br>
                                                                                            <h4>Téléphone :
                                                                                                {{ $se->client->telephone }}
                                                                                            </h4><br>
                                                                                            <h4>Email :
                                                                                                {{ $se->client->email }}
                                                                                            </h4><br>
                                                                                            <h4>Nom du domaine :
                                                                                                {{ $se->nom_domaine }}</h4>
                                                                                            <br>
                                                                                            <h4>Date de création :
                                                                                                {{ $se->date_creation }}
                                                                                            </h4><br>
                                                                                            <h4>Date d'expiration :
                                                                                                {{ $se->date_expiration }}
                                                                                            </h4><br>
                                                                                        </div>

                                                                                        
                                                                                    </div><!-- /.modal-content -->
                                                                                </div><!-- /.modal-dialog -->
                                                                            </div>


                                                                            <!-- modal de suppression -->
                                                                            <div id="myModal{{ $se->id }}"
                                                                                class="modal fade" tabindex="-1"
                                                                                aria-labelledby="myModalLabel"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title"
                                                                                                id="ModalLabel">
                                                                                                Suppression d'une
                                                                                                voiture</h5>
                                                                                            <button type="button"
                                                                                                class="btn-close"
                                                                                                data-bs-dismiss="modal"
                                                                                                aria-label="Close"></button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form
                                                                                                action="{{ route('domaine.delete', $se->id) }}"
                                                                                                method="post">
                                                                                                @csrf
                                                                                                <h2>Voulez-vous vraiment
                                                                                                    supprimer
                                                                                                    ??</h2>
                                                                                                <div class="modal-footer">
                                                                                                    <button type="button"
                                                                                                        class="btn btn-secondary waves-effect"
                                                                                                        data-bs-dismiss="modal">Fermer</button>
                                                                                                    <button type="submit"
                                                                                                        class="btn btn-danger waves-effect waves-light">Supprimer</button>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div><!-- /.modal-content -->
                                                                                </div><!-- /.modal-dialog -->
                                                                            </div>

                                                                            <!--modal de modification-->
                                                                            <div id="Modal{{ $se->id }}"
                                                                                class="modal fade" tabindex="-1"
                                                                                aria-labelledby="myModalLabel"
                                                                                aria-hidden="true">

                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title"
                                                                                                id="myModalLabel">
                                                                                                Modification de
                                                                                                voiture</h5>
                                                                                            <button type="button"
                                                                                                class="btn-close"
                                                                                                data-bs-dismiss="modal"
                                                                                                aria-label="Close"></button>
                                                                                        </div>
                                                                                        <div class="modal-body">

                                                                                            <form
                                                                                                id="pristine-valid-example"
                                                                                                action="{{ route('domaine.update', $se->id) }}"
                                                                                                novalidate method="post">
                                                                                                @csrf
                                                                                                <input type="hidden" />
                                                                                                <div class="row">
                                                                                                    <div
                                                                                                        class="col-xl-6 col-md-12">
                                                                                                        <div
                                                                                                            class="form-group mb-3">
                                                                                                            <label>Nom &
                                                                                                                prénoms</label>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                value="{{ $se->client->nom }}"
                                                                                                                name="nom"
                                                                                                                required
                                                                                                                data-pristine-required-message="Entrez le nom s'il vous plait"
                                                                                                                class="form-control" />
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-xl-6 col-md-12">
                                                                                                        <div
                                                                                                            class="form-group mb-3">
                                                                                                            <label>Téléphone</label>
                                                                                                            <input
                                                                                                                type="number"
                                                                                                                value="{{ $se->client->telephone }}"
                                                                                                                name="telephone"
                                                                                                                required
                                                                                                                data-pristine-required-message="Entrez le telephone s'il vous plait"
                                                                                                                class="form-control" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-xl-6 col-md-12">
                                                                                                        <div
                                                                                                            class="form-group mb-3">
                                                                                                            <label>Email</label>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                value="{{ $se->client->email }}"
                                                                                                                name="email"
                                                                                                                required
                                                                                                                data-pristine-required-message="Entrez l'email' s'il vous plait"
                                                                                                                class="form-control" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <hr>
                                                                                                    <h3>Enregistrement du
                                                                                                        domaine</h3>
                                                                                                    <div
                                                                                                        class="col-xl-4 col-md-6">
                                                                                                        <div
                                                                                                            class="form-group mb-3">
                                                                                                            <label>Nom du
                                                                                                                domaine</label>
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                value="{{ $se->nom_domaine }}"
                                                                                                                name="nom_domaine"
                                                                                                                required
                                                                                                                data-pristine-required-message="Entrez le nom de domaine s'il vous plait"
                                                                                                                class="form-control" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-xl-4 col-md-6">
                                                                                                        <div
                                                                                                            class="form-group mb-3">
                                                                                                            <label>Date de
                                                                                                                création</label>
                                                                                                            <input
                                                                                                                type="date"
                                                                                                                value="{{ $se->date_creation }}"
                                                                                                                name="date_creation"
                                                                                                                data-pristine-required-message="Entrez la date s'il vous plait"
                                                                                                                class="form-control" />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-xl-4 col-md-6">
                                                                                                        <div
                                                                                                            class="form-group mb-3">
                                                                                                            <label>Date
                                                                                                                d'expiration</label>
                                                                                                            <input
                                                                                                                type="date"
                                                                                                                value="{{ $se->date_expiration }}"
                                                                                                                name="date_expiration"
                                                                                                                required
                                                                                                                data-pristine-required-message="Entrez la date s'il vous plait"
                                                                                                                class="form-control" />
                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                                <!-- end row -->
                                                                                                <div class="row">
                                                                                                    <div class="col-md-12">
                                                                                                        <div
                                                                                                            class="text-center">
                                                                                                            <button
                                                                                                                type="submit"
                                                                                                                name="enregistrer"
                                                                                                                class="btn btn-primary w-md">Enregistrer</button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>

                                                                                        </div>
                                                                                    </div><!-- /.modal-content -->
                                                                                </div><!-- /.modal-dialog -->
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <!-- end cardaa -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
    </div>
@endsection
