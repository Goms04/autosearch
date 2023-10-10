@extends('base')
@section('content')
    <br><br><br><br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
                    role="grid" aria-describedby="datatable_info" style="width: 1189px;">

                    <thead>
                        <tr>
                            <th>Nom & prénoms</th>
                            <th>Téléphone</th>
                            <th>Email </th>
                            <th>nom de domaine</th>
                            <th>date de création</th>
                            <th>Date d'expiration</th>
                        </tr>
                    </thead>


                    <tbody>


                        @if (count($results) > 0)
                            @foreach ($results as $result)
                                <tr>
                                    <td>{{ $result->nom }}</td>
                                    <td>{{ $result->telephone }}</td>
                                    <td>{{ $result->email }}</td>
                                    <td>{{ $result->nom_domaine }}</td>
                                    <td>{{ $result->date_creation }}</td>
                                    <td>{{ $result->date_expiration }}</td>
                                </tr>
                            @endforeach
                        @else
                            <p>Aucun résultat trouvé.</p>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
