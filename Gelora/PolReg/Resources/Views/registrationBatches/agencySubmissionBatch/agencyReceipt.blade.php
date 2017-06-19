<!DOCTYPE html>
<html>

<head>
    <title>Bukti Penyerahan Ke Biro Jasa</title>
    <link rel="stylesheet" type="text/css" href="/standard/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <style type="text/css">
    .table {
        border-style: none !important;
        border: 0 !important;
    }
    
    .layout-table > tbody > tr > td {
        border-top: 0px !important;
        vertical-align: top;
    }
    
    p {
        margin: 0;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table layout-table" style="width: 100%;margin-bottom: 5px;">
                    <tr>
                        <td style="width: 10%; padding-right: 10px;">
                            <img style="width: auto; max-height: 5em !important;" class="img-responsive" src="{{ $viewData['tenantInfo']->LOGO }}">
                        </td>
                        <td style="width: 50%;">
                            <p><strong>{{ $viewData['tenantInfo']->TENANT }}</strong></p>
                            <p>{{ $viewData['tenantInfo']->ADDRESS }}</p>
                            <p>{{ $viewData['tenantInfo']->PHONE_NUMBER }}</p>
                        </td>
                        <td style="width: 40%;">
                            <p style="float: right;padding-right: 55px;">No Batch : {{$viewData['registrationBatch']->id}}</p>
                            <img style="width: auto; max-height: 4em !important; float: right;" class="img-responsive" src="{{$viewData['registrationBatch']->retrieve()->barcode() }}">
                        </td>
                    </tr>
                </table>

                <p style="text-align: center;"><strong>Penyerahan Dokumen Ke Biro Jasa</strong></p>
                

                <table class="table" width="100%">
                    <tr>
                        <th>Nama Pemohon</th>
                        <th>Nama STNK</th>
                        <th>Tipe</th>
                        <th>Kode Tipe</th>
                        <th>Warna</th>
                        <th>Kode Warna</th>
                        <th>Nomor Rangka</th>
                        <th>Nomor Mesin</th>
                    </tr>
                    @foreach($viewData['registrationBatch']->registrations as $registration)
                    <tr>
                        <td>{{ $registration->salesOrder->customer['name'] }}</td>
                        <td>{{ $registration->salesOrder->registration['name'] }}</td>
                        <td>{{ $registration->salesOrder->delivery->unit->type_name }}</td>
                        <td>{{ $registration->salesOrder->delivery->unit->type_code }}</td>
                        <td>{{ $registration->salesOrder->delivery->unit->color_name }}</td>
                        <td>{{ $registration->salesOrder->delivery->unit->color_code }}</td>
                        <td>{{ $registration->salesOrder->delivery->unit->chasis_number }}</td>
                        <td>{{ $registration->salesOrder->delivery->unit->engine_number }}</td>
                    </tr>
                    @endforeach
                </table><br>

                <p>Saya yang bertanda tangan dibawah ini perwakilan dari biro jasa {{ $viewData['registrationBatch']['agent']['name'] }} menyatakan bahwa telah menerima lengkap seluruh dokumen untuk melakukan proses PolReg motor-motor diatas.</p><br>

                <table class="table layout-table">
                    <tr>
                        <td style="width: 50%;">
                            <p>Karyawan Dealer</p>
                            <p style="padding-top: 4em;">{{ \ParsedJwt::getByKey('name') }}</p>
                        </td>
                        <td style="width: 50%;">
                            <p>Perwakilan Biro Jasa</p>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
    <!-- <script type="text/javascript">
    window.print()
</script> -->
</body>

</html>