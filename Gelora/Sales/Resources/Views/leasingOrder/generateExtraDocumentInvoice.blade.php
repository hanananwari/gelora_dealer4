@extends('layout.printing')

@section('title', 'Extra Dokumen Penagihan Leasing')

@section('content')

<style type="text/css">

	.container {
		font-size: 10px !important;
	}
	
</style>

@component('gelora.sales::leasingOrder.partials.generateInvoiceJoinPromo' ,  ['viewData' => $viewData])
@endcomponent
<hr><br>
@component('gelora.sales::leasingOrder.partials.generateInvoiceDp' ,  ['viewData' => $viewData])
@endcomponent
<hr><br>
@component('gelora.sales::leasingOrder.partials.generateAgreementBpkb' ,  ['viewData' => $viewData])
@endcomponent

@endsection