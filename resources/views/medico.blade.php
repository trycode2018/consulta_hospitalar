@extends('layouts.main')
@section('title') Inicial @endsection

@section('content')

<h3 class="page-title">EFECTUAR CADASTRO DE MEDICOS</h3>
					<div class="row">
						<div class="col-md-12">
							
							<!-- INSERIR DADOS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">INSERIR DADOS DO MEDICO</h3>
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
									<form action="/cadastrarMedico" method="post" >
                                    <!-- formato do blade que permite empacotar um formulario : @csrf -->
                                    @csrf
                                        <input type="text" name="bi" class="form-control" placeholder="Nº BILHETE DE IDENTIDADE">
                                        <br>
                                        <input type="text" name="nome" class="form-control" placeholder="NOME COMPLETO">
                                        <br>
                                        <input type="text" class="form-control" name="especialidade" placeholder="ESPECIALIDADE">
                                        <br>
                                        <div class="form-group">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary">CADASTRAR MEDICO</button>
                                            </span>
                                        </div>
                                    </form>


								</div>
							</div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">VISUALIZAR MEDICOS </h3>
                                </div>
                                <div class="panel-body">
                                <div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Nº BI</th>
												<th>Nome</th>
												<th>Especialidade</th>
												<th>Estado </th>
											</tr>
										</thead>
										<tbody>
											
											@foreach($medicos as $medico)
											<tr>
												<td><a href="#">{{$medico->n_bi}}</a></td>
												<td>{{$medico->nome_completo}}</td>
												<td>{{$medico->especialidade}}</td>
												<td>{{$medico->estado}}</td>
											</tr>
											@endforeach
											
										</tbody>
									</table>
								</div>
                                </div>
                            </div>
							<!-- END INSERIR -->
							
						</div>
					</div>
@endsection