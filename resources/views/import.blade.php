@extends('base')

@section('content')
    <div class="page-content">
        <div class="m-5 container-fluid text-center">
            <div class="col-sm-6 col-md-6">
                <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="csv_file">Sélectionnez le fichier CSV à
                            uploader dans la base de données :</label>
                        <input type="file" name="csv_file" id="csv_file" accept=".csv">
                    </div> <br>
                    <button type="submit" class="btn btn-primary" style="width: 50%">Importer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
