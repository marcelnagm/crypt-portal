<?php 
use App\Models\Pair;
?>
@extends('layouts.app')


@section('content')
				<!-- row -->
				<div class="row">
        @include('admin.sidebar')
				<div class="col-sm-12 col-lg-6 col-xl-4">
					 <div class="card">
							<div class="card-body">
								 <div class="clearfix">
										<div class="float-right"> <i class="mdi mdi-poll-box text-success icon-size"></i> </div>
										<div class="float-left">
											 <p class="mb-0 text-left">Acertos</p>
											 <div class="">
													<h3 class="font-weight-semibold text-left mb-0">{{$data['count_all_target_sucess']  }}%</h3>
											 </div>
										</div>
								 </div>
								 <p class="text-muted mb-0"> <i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i> Assertividade Geral </p>
							</div>
					 </div>
				</div>
				<div class="col-sm-12 col-lg-6 col-xl-4">
					 <div class="card">
							<div class="card-body">
								 <div class="clearfix">
										<div class="float-right"> <i class="mdi mdi-poll-box text-success icon-size"></i> </div>
										<div class="float-left">
											 <p class="mb-0 text-left">Alvo 1</p>
											 <div class="">
													<h3 class="font-weight-semibold text-left mb-0">{{  $data['count_all_target_1']}}%</h3>
											 </div>
										</div>
								 </div>
								 <p class="text-muted mb-0"> <i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i> Sinais em Alvo 1 </p>
							</div>
					 </div>
				</div>
				<div class="col-sm-12 col-lg-6 col-xl-4">
					 <div class="card">
							<div class="card-body">
								 <div class="clearfix">
										<div class="float-right"> <i class="mdi mdi-poll-box text-success icon-size"></i> </div>
										<div class="float-left">
											 <p class="mb-0 text-left">Alvo 2</p>
											 <div class="">
													<h3 class="font-weight-semibold text-left mb-0">{{ $data['count_all_target_2']}}%</h3>
											 </div>
										</div>
								 </div>
								 <p class="text-muted mb-0"> <i class="mdi mdi-arrow-up-drop-circle mr-1 text-info" aria-hidden="true"></i> Sinais em Alvo 2 </p>
							</div>
					 </div>
				</div>
				<div class="col-sm-12 col-lg-6 col-xl-4">
					 <div class="card">
							<div class="card-body">
								 <div class="clearfix">
										<div class="float-right"> <i class="mdi mdi-poll-box text-success icon-size"></i> </div>
										<div class="float-left">
											 <p class="mb-0 text-left">Alvo 3</p>
											 <div class="">
													<h3 class="font-weight-semibold text-left mb-0">{{$data['count_all_target_3']}}%</h3>
											 </div>
										</div>
								 </div>
								 <p class="text-muted mb-0"> <i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i> Sinais em Alvo 3 </p>
							</div>
					 </div>
				</div>
				<div class="col-sm-12 col-lg-6 col-xl-4">
					 <div class="card">
							<div class="card-body">
								 <div class="clearfix">
										<div class="float-right"> <i class="mdi mdi-poll-box text-success icon-size"></i> </div>
										<div class="float-left">
											 <p class="mb-0 text-left">Rentabilidade</p>
											 <div class="">
													<h3 class="font-weight-semibold text-left mb-0">{{$data['profitability_all'] }}%</h3>
											 </div>
										</div>
								 </div>
								 <p class="text-muted mb-0"> <i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i> Geral </p>
							</div>
					 </div>
				</div>
				<div class="col-sm-12 col-lg-6 col-xl-4">
					 <div class="card">
							<div class="card-body">
								 <div class="clearfix">
										<div class="float-right"> <i class="mdi mdi-poll-box text-success icon-size"></i> </div>
										<div class="float-left">
											 <p class="mb-0 text-left">Rentabilidade</p>
											 <div class="">
													<h3 class="font-weight-semibold text-left mb-0">{{$data['profitability_month'] }}%</h3>
											 </div>
										</div>
								 </div>
								 <p class="text-muted mb-0"> <i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i> Mensal </p>
							</div>
					 </div>
				</div>
				<div class="col-sm-12 col-lg-6 col-xl-4">
					 <div class="card">
							<div class="card-body">
								 <div class="clearfix">
										<div class="float-right"> <i class="mdi mdi-poll-box text-success icon-size"></i> </div>
										<div class="float-left">
											 <p class="mb-0 text-left">Rentabilidade</p>
											 <div class="">
													<h3 class="font-weight-semibold text-left mb-0">{{$data['profitability_week'] }}%</h3>
											 </div>
										</div>
								 </div>
								 <p class="text-muted mb-0"> <i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i> Semanal </p>
							</div>
					 </div>
				</div>
                                <?php if($data['pair_data'] != null){ ?>
                                @foreach( $data['pair_data'] as $row)
				<div class="col-sm-12 col-lg-6 col-xl-4">
					 <div class="card">
							<div class="card-body">
								 <div class="clearfix">
										<div class="float-right"> <i class="mdi mdi-poll-box text-success icon-size"></i> </div>
										<div class="float-left">
											 <p class="mb-0 text-left">{{Pair::find($row['id'])}}</p>
											 <div class="">
													<h3 class="font-weight-semibold text-left mb-0">
                                                                                                            <?php 
                                                                                                            if($row['liquid'] != null){
                                                                                                            $row['liquid'] = $row['liquid']>= 1 ? ($row['liquid'] - 1) * 100 : ($row['liquid']-1)* 100;
                                                                                                            $row['liquid']= number_format(($row['liquid']), 2);
                                                                                                            echo $row['liquid'].'%';
                                                                                                            }else{
                                                                                                                echo 'Vazio';
                                                                                                            }
                                                                                                            ?></h3>
											 </div>
										</div>
								 </div>
								 <p class="text-muted mb-0"> <i class="mdi mdi-arrow-up-drop-circle mr-1 text-success" aria-hidden="true"></i> Par mais assertivo </p>
							</div>
					 </div>
				</div>
                                @endforeach
                                <?php } ?>
				<!-- /row -->
			</div>
@endsection