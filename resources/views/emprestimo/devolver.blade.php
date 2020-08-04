@extends('layouts.app')

@section('content')
    @include('flash')
    <div class="container">
        <div class="row">

            <div class="col-sm">
                <div class="card">
                    <div class="card-header">Nova Solicitação de Devolução</div>
                    <div class="card-body">
                        <br />

                        <form method="POST" action="{{ url('devolver' . '/' . $emprestimo->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="data_devolvido" class="control-label"><b>Data que foi ou será devolvido o Equipamento (pode ser aproximada):</b></label>
                                <input autocomplete="off" class="form-control datepicker" name="data_devolvido" type="text" id="data_devolvido" value="{{ old('data_devolvido',$emprestimo->data_devolvido) }}" >
                            </div>

                            <b> Número(s) de patrimônio(s) do(s) equipamento(s) emprestado(s): </b>
                                {{$emprestimo->patrimonio}}

                                <br><br>

                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Enviar">
                            </div>
                           

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
