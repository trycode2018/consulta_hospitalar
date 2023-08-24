@extends('layouts.main')
@section('title') Inicial @endsection

@section('content')
	<!-- OVERVIEW -->
    <div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Levantamento semanal</h3>
							<p class="panel-subtitle"><?php echo date('Y-m-d H:i:s');?> </p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-users"></i></span>
										<p>
											<span class="number">{{$qtdPaciente}}</span>
											<span class="title">Pacientes cadastrados</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-user"></i></span>
										<p>
											<span class="number">{{$qtdMedico}}</span>
											<span class="title">Medicos</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">{{$qtdConsulta}}</span>
											<span class="title">Consultas marcadas</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number">{{$qtdAnalise}}</span>
											<span class="title">Analises feitas</span>
										</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<!-- END OVERVIEW -->

					<div class="row">
						<div class="col-md-6">
							<!-- Pacientes recentes -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Pacientes recentes</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Nº BI</th>
												<th>Nome</th>
												<th>Data Nascimento</th>
												<th>Sexo &amp;</th>
											</tr>
										</thead>
										<tbody>
											@foreach($pacientes as $paciente)
											
											<tr>
												<td><a href="#">{{$paciente->n_bi}}</a></td>
												<td>{{$paciente->nome_completo}}</td>
												<td>{{$paciente->data_nascimento}}</td>
												<td>{{$paciente->sexo}}</td>
											</tr>
											@endforeach
											
										</tbody>
									</table>
								</div>
								
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
						<div class="col-md-6">
							<!-- MULTI CHARTS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Consultas marcadas recentemente</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
								<table class="table table-striped">
										<thead>
											<tr>
												<th>Codigo</th>
												<th>Paciente</th>
												<th>Consulta de..</th>
												<th>Data</th>
												<th>Prox. Data</th>
											</tr>
										</thead>
										<tbody>
										@foreach($consultas as $consulta)
											
											<tr>
												<td><a href="#">{{$consulta->id}}</a></td>
												<td>{{$consulta->paciente->nome_completo}}</td>
												<td>{{$consulta->tipoConsulta->tipo}}</td>
												<td>{{$consulta->data_hora}}</td>
												<td>{{$consulta->prox_data}}</td>
											</tr>
											@endforeach
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				
@endsection