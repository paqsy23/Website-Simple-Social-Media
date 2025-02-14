@extends('developer.layout')

@section('header')
    <title>Game List</title>
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>REPORT</h1>
            <form action="{{url('developer/report')}}" method="POST">
                @csrf
                <div>Filter: </div>
                Month:
                <select name="bulan" class="form-select" aria-label="Default select example" style="margin-bottom: 10px">
                    @if ($bulan == 1)
                        <option value="1" selected>1</option>
                    @else
                        <option value="1">1</option>
                    @endif
                    @if ($bulan == 2)
                        <option value="2" selected>2</option>
                    @else
                        <option value="2">2</option>
                    @endif
                    @if ($bulan == 3)
                        <option value="3" selected>3</option>
                    @else
                        <option value="3">3</option>
                    @endif
                    @if ($bulan == 4)
                        <option value="4" selected>4</option>
                    @else
                        <option value="4">4</option>
                    @endif
                    @if ($bulan == 5)
                        <option value="5" selected>5</option>
                    @else
                        <option value="5">5</option>
                    @endif
                    @if ($bulan == 6)
                        <option value="6" selected>6</option>
                    @else
                        <option value="6">6</option>
                    @endif
                    @if ($bulan == 7)
                        <option value="7" selected>7</option>
                    @else
                        <option value="7">7</option>
                    @endif
                    @if ($bulan == 8)
                        <option value="8" selected>8</option>
                    @else
                        <option value="8">8</option>
                    @endif
                    @if ($bulan == 9)
                        <option value="9" selected>9</option>
                    @else
                        <option value="9">9</option>
                    @endif
                    @if ($bulan == 10)
                        <option value="10" selected>10</option>
                    @else
                        <option value="10">10</option>
                    @endif
                    @if ($bulan == 11)
                        <option value="11" selected>11</option>
                    @else
                        <option value="11">11</option>
                    @endif
                    @if ($bulan == 12)
                        <option value="12" selected>12</option>
                    @else
                        <option value="12">12</option>
                    @endif
                </select>
                Year:
                <select name="tahun" class="form-select" aria-label="Default select example" style="margin-bottom: 10px">
                    <option value="2019">2019</option>
                    <option value="2020" selected>2020</option>
                    <option value="2021">2021</option>
                </select>
                <button type="submit" class="btn btn-success btn-sm" style="margin-top:-5px">Filter</button>
            </form>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('developer/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Report</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->


    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Game Selling</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Transaction Date</th>
                      <th>Game Price</th>
                      <th>Game Name</th>
                      <th>User</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($trans as $trs)
                            <tr>
                                <td>{{$trs->tanggal_trans}}</td>
                                <td>{{$trs->game_price}}</td>
                                <td>{{$trs->games->name}}</td>
                                <td>{{$trs->users->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            <!-- /.card-body -->
          </div>
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Top Sale</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>

            <div class="card-body">
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Top Sale</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>

            <div class="card-body">
                <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
            </div>
            <!-- /.card-body -->
          </div>
        <!-- /.row -->
    </div>
      <!-- /.container-fluid -->
    {{-- Modal --}}
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content" style="height:800px;">
            <div class="modal-header">
                <h4 class="modal-title">Extra Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="height:100%">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        </div>
        {{-- End Modal --}}
    </section>

@endsection

@section('script')
<script src="{{asset('js/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendor/datatables-plugins/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendor/datatables-plugins/responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
{{-- <script src="{{asset('vendor/js/adminlte.min.js')}}"></script> --}}
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example2").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });
    $('#modal-xl').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var link = button.data('url')
        var title =button.data('title');
        var modal = $(this)
        modal.find('.modal-title').text(title)
        $(".modal-body").html('<iframe width="100%" height="100%" frameborder="0" scrolling="yes" allowtransparency="true" src="'+link+'"></iframe>');
        // modal.find('.modal-body input').val(recipient)
    })
  </script>
@endsection

<?php
    $dataPoints = [];
    foreach ($game as $value) {
        $i = 0;
        foreach ($topgames as $trs) {
            if($trs->game_id == $value->id){
                $i = $trs->counts;
            }
        }
        if($i > 0){
            array_push($dataPoints,array("label"=> $value->name, "y"=> $i));
        }
    }
    $dataPoints2 = [];
    foreach ($user as $value) {
        $i = 0;
        foreach ($topuser as $trs) {
            if($trs->user_id == $value->id){
                $i = $trs->counts;
            }
        }
        if($i > 0){
            array_push($dataPoints2,array("label"=> $value->name, "y"=> $i));
        }
    }
?>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            title:{
                text: "Game Sell"
            },
            subtitles: [{
                text: ""
            }],
            data: [{
                type: "pie",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - #percent%",
                yValueFormatString: "฿#,##0",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

        var chart2 = new CanvasJS.Chart("chartContainer2", {
            animationEnabled: true,
            exportEnabled: true,
            title:{
                text: "Top Buyer"
            },
            subtitles: [{
                text: ""
            }],
            data: [{
                type: "pie",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - #percent%",
                yValueFormatString: "฿#,##0",
                dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart2.render();
    }
</script>
