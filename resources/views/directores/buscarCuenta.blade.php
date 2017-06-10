@extends('app')

@section('content')

@include('menu')


<div id="pagina"></div>

			<!-- 
				MIDDLE 
			-->
			<section id="middle">


				<!-- page title -->
				<header id="page-header">
					<h1>Buscar Persona iLernus</h1>
					<ol class="breadcrumb">
					 <li><a href="{{ route('home')}}">Dashboard</a></li>
					  <li class="active">Buscar Persona iLernus</li>
					</ol>


					
				</header>
				<!-- /page title -->


				<div id="content" class="padding-20">


					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>LISTADO DE GERENTES Y DIRECTORES DE ILERNUS</strong> <!-- panel title -->
							</span>

							<!-- right options -->
							<ul class="options pull-right list-inline">
								<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Minimizar" data-placement="bottom"></a></li>
								<li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Pantalla Completa" data-placement="bottom"><i class="fa fa-expand"></i></a></li>

							</ul>
							<!-- /right options -->

						</div>

						<!-- panel content -->
						<div class="panel-body">

							<table class="table table-striped table-bordered table-hover" id="datatable_sample">
								<thead>
									<tr>
										<th>Ver</th>
										<th>Imágen</th>
										<th>Nombre</th>
										<th>Género</th>
										<th>Cargo</th>
										<th>Tipo</th>
										<th>Orden</th>
										<th>Nombre de la Imágen</th>
										<th>Usuario</th>
									</tr>
								</thead>

								<tbody>

									@foreach ($directores as $director)

										<tr class="odd gradeX">

												<td>

													<a href="{{ route('cuentaPi',[$director->id]) }}" type="button" class="btn btn-warning">
														
														<i class="fa fa-search" aria-hidden="true"></i>

													</a>

												</td>

												<td>
													
						                            @if ($director->blb_img != "")
						                            	<img src="data:image/jpeg;base64,{{ $director->blb_img }}" alt="{!! $director->str_nombre !!}" title="{!! $director->str_nombre !!}" height="34">
													@else

													  @if ($director->str_sexo == 'Masculino')
													  	<img src="{{ asset('smarty/assets/images/user_masculino.png') }}" alt="" height="34">						  	
													  @elseif ($director->str_sexo == 'Femenino')
													  	<img src="{{ asset('smarty/assets/images/user_femenino.png') }}" alt="" height="34">
													  @endif

													@endif

												</td>

												<td>
													 	{{ ucfirst($director->str_nombre) }} 
												</td>
												<td>

														{{ $director->str_sexo }}

												</td>
												<td>
													 	{{ $director->str_cargo }}
												</td>
												<td>
													 	{{ ucfirst($director->str_tipo) }}
												</td>												
												<td>
													 	{{ $director->str_orden }}
												</td>

												<td>
													 	{{ $director->str_imagen }}
												</td>

												<td>
													 	{{ $director->usuario }}
												</td>

										</tr>

									@endforeach

								</tbody>
							</table>

						</div>
						<!-- /panel content -->

					</div>
					<!-- /PANEL -->

				</div>
			</section>
			<!-- /MIDDLE -->

@endsection