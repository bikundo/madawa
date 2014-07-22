@extends('frontend.layouts.default')
@section('content')

<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3" id="printableArea">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>Elf Cafe</strong>
                        <br>
                        2135 Sunset Blvd
                        <br>
                        Los Angeles, CA 90026
                        <br>
                        <abbr title="Phone">P:</abbr> (213) 484-6829
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                    <?php date_default_timezone_set('Africa/Nairobi');
                    $date = date('Y/m/d H:i:s');
                     ?>
                        <em>{{$date}}</em>
                    </p>
                    <p>
                        <em>Receipt #: KP-LTD-{{$prescription->id}}</em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center ">
                    <h1>DRUG PRESCRIPTION</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Drug</th>
                            <th>Dose</th>
                            <th class="text-center">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prescription->drugs as $drug)
                        <tr>
                            <td class="col-md-3"><em>{{$drug->name}}</em></h4></td>
                            <td class="col-md-4" style="text-align: center">{{$drug->dosage}}</td>
                            <td class="col-md-5 text-center">{{$drug->description}}</td>
                        </tr>
                        @endforeach
                        <tr>
                        <hr><h4 class="sub-header">Instructions:</h4>
                           {{$prescription->instructions}}
                         <hr>  
                        </tr>
                    </tbody>
                </table>
                <button type="button" onclick="printDiv('printableArea');" class="btn btn-primary btn-lg btn-block hidden-print">
                    PRINT PRESCRIPTION
                </button></td>
            </div>
        </div>
    </div>

@stop
