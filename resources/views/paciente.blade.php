@extends('layouts.main')
@section('title') Inicial @endsection

@section('content')

<h3 class="page-title">EFECTUAR CADASTRO DE PACIENTE</h3>
					<div class="row">
						<div class="col-md-12">
							
							<!-- INSERIR DADOS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">INSERIR DADOS DO PACIENTE</h3>
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
									<form action="/inserirPaciente" method="post" >
                                    <!-- formato do blade que permite empacotar um formulario : @csrf -->
                                    @csrf
                                        <input type="text" name="bi" class="form-control" placeholder="Nº BILHETE DE IDENTIDADE">
                                        <br>
                                        <input type="text" name="nome" class="form-control" placeholder="NOME COMPLETO">
                                        <br>
                                        <textarea class="form-control" name="endereco" placeholder="PROVINCIA, MUNICIPIO E BAIRRO ONDE MORA" rows="4"></textarea>
                                        <br>
                                        <input type="date" class="form-control" name="data_nascimento">
                                        <br>
                                        <label class="fancy-radio">
                                            <input name="sexo" value="masculino" type="radio">
                                            <span><i></i>Masculino</span>
                                        </label>
                                        <label class="fancy-radio">
                                            <input name="sexo" value="femenino" type="radio">
                                            <span><i></i>Femenino</span>
                                        </label>
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