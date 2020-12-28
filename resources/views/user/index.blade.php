@extends('layout_user')

@section('content')
    <div class="row">
                        <div class="col-xl-12 col-md-12 col-lg-12">
                            <div class=" overflow-hidden bg-transparent card-crypto-scroll shadow-none">
                                <div class="js-conveyor-example">
                                    <?php
                                    $prices = Auth::user()->prices();
                                    ?>
                                    <ul class="news-crypto">
                                        @foreach($prices as $price)
                                        <li>
                                            <div class="crypto-card">
                                                <div class="row">

                                                    <div class="d-flex">
                                                        <div class="my-auto">
                                                            <img src="{{ asset('/img/crypto-currencies/Tether.png') }}" class="w-6 h-6 mt-0" alt="">
                                                        </div>
                                                        <div class="ml-3">
                                                            <p class="mb-1 tx-13">{{$price['symbol']}}</p>
                                                            <div class="m-0 tx-13 text-warning">
                                                                $ {{$price['min']}}
                                                            </div>
                                                        </div>                                                       
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

				<div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-4">
                     <div class="card bg-primary">
                        <div class="card-body">
                           <div class="d-flex no-block align-items-center">
                              <div>
                                 <h6 class="text-white">Status do Robô</h6>
                                 <h2 class="text-white m-0 ">Ligado</h2>
                              </div>
                              <div class="ml-auto"> <span class="text-white display-6"><i class="fas fa-robot fa-2x"></i></span> </div>
                           </div>
                        </div>
                     </div>
                  </div>					
                  <div class="col-sm-12 col-md-6 col-lg-4">
                     <div class="card bg-primary">
                        <div class="card-body">
                           <div class="d-flex no-block align-items-center">
                              <div>
                                 <h6 class="text-white">Operações Hoje</h6>
                                 <h2 class="text-white m-0 ">11</h2>
                              </div>
                              <div class="ml-auto"> <span class="text-white display-6"><i class="fas fa-tasks fa-2x"></i></span> </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-4">
                     <div class="card bg-primary">
                        <div class="card-body">
                           <div class="d-flex no-block align-items-center">
                              <div>
                                 <h6 class="text-white">Rentabilidade do dia</h6>
                                 <h2 class="text-white m-0 ">3.4%</h2>
                              </div>
                              <div class="ml-auto"> <span class="text-white display-6"><i class="fas fa-chart-line fa-2x"></i></span> </div>
                           </div>
                        </div>
                     </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-12">
                              <!-- TradingView Widget BEGIN -->
                  <div class="tradingview-widget-container ht-500">
                    <div id="tradingview_8b475" class="ht-500"></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                    new TradingView.widget(
                    {
                    "autosize": true,
                    "symbol": "BINANCE:BTCUSDT",
                    "interval": "D",
                    "timezone": "America/Sao_Paulo",
                    "theme": "dark",
                    "style": "1",
                    "locale": "br",
                    "toolbar_bg": "#f1f3f6",
                    "enable_publishing": false,
                    "allow_symbol_change": true,
                    "container_id": "tradingview_8b475"
                  }
                    );
                    </script>
                  </div>
                  <!-- TradingView Widget END -->
                  </div>
                </div>

@endsection