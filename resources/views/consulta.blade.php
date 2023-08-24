@extends('layouts.main')
@section('title') Inicial @endsection

@section('content')

<h3 class="page-title">EFECTUAR CONSULTA</h3>
					<div class="row">
						<div class="col-md-12">
							
							<!-- INSERIR DADOS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">INSERIR DADOS DA CONSULTA</h3>
								</div>
								<div class="panel-body">
                                    @if(isset($error))
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12" align="center">
                                                    <h5 style="color: red;">{{$error}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    
                                    @if(isset($success))
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12" align="center">
                                                    <h5 style="color: green;">{{$success}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
									<form action="/inserirConsulta" method="post" >
                                    <!-- formato do blade que permite empacotar um formulario : @csrf -->
                                    @csrf
                                        <label for="tipoConsulta"> Tipo de Consulta</label>
                                    <select name="tipo_consulta" class="form-control" id="tipoConsulta">
                                        @foreach ($tipoConsultas as $tipoConsulta)
                                            <option value="{{$tipoConsulta->id}}">{{$tipoConsulta->tipo}}</option>
                                        @endforeach
                                    </select>
                                        <br>
                                        <label for="paciente"> Paciente</label>
                                    <select name="paciente" class="form-control" id="paciente">
                                        @foreach ($pacientes as $paciente)
                                            <option value="{{$paciente->id}}">{{$paciente->nome_completo}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                        <label for="">Data prox. consulta</label>
                                        <input type="date" class="form-control" name="prox_data">
                                        <br>
                                        <div class="form-group">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary">CADASTRAR PACIENTE</button>
                                            </span>
                                        </div>
                                    </form>
								</div>
							</div>
							<!-- END INSERIR -->
							
						</div>
					</div>
@endsection