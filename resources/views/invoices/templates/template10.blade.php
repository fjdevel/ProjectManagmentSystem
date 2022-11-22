<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{(\App\Models\Utility::getValByName('enable_rtl') == 'on') ? 'dir="rtl"' : ''}}>
<head>
    @if(\App\Models\Utility::getValByName('enable_rtl') == 'on')
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-rtl.css') }}">
    @endif
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <style type="text/css">.resize-observer[data-v-b329ee4c] {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            border: none;
            background-color: transparent;
            pointer-events: none;
            display: block;
            overflow: hidden;
            opacity: 0
        }

        .resize-observer[data-v-b329ee4c] object {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
            pointer-events: none;
            z-index: -1
        }</style>
    <style type="text/css">p[data-v-f2a183a6] {
            line-height: 1.2em;
            margin: 0 0 2px 0;
        }

        pre[data-v-f2a183a6] {
            margin: 0;
        }

        .d-table[data-v-f2a183a6] {
            margin-top: 20px;
        }

        .d-table-footer[data-v-f2a183a6] {
            display: -webkit-box;
            display: flex;
        }

        .d-table-controls[data-v-f2a183a6] {
            -webkit-box-flex: 2;
            flex: 2;
        }

        .d-table-summary[data-v-f2a183a6] {
            -webkit-box-flex: 1;
            flex: 1;
        }

        .d-table-summary-item[data-v-f2a183a6] {
            width: 100%;
            display: -webkit-box;
            display: flex;
        }

        .d-table-label[data-v-f2a183a6] {
            -webkit-box-flex: 1;
            flex: 1;
            display: -webkit-box;
            display: flex;
            -webkit-box-pack: end;
            justify-content: flex-end;
            padding-top: 9px;
            padding-bottom: 9px;
        }

        .d-table-label .form-input[data-v-f2a183a6] {
            margin-left: 10px;
            width: 80px;
            height: 24px;
        }

        .d-table-label .form-input-mask-text[data-v-f2a183a6] {
            top: 3px;
        }

        .d-table-value[data-v-f2a183a6] {
            -webkit-box-flex: 1;
            flex: 1;
            text-align: right;
            padding-top: 9px;
            padding-bottom: 9px;
            padding-right: 10px;
        }

        .d-table-spacer[data-v-f2a183a6] {
            margin-top: 5px;
        }

        .d-table-tr[data-v-f2a183a6] {
            display: -webkit-box;
            display: flex;
            flex-wrap: wrap;
        }

        .d-table-td[data-v-f2a183a6] {
            padding: 10px 10px 10px 10px;
        }

        .d-table-th[data-v-f2a183a6] {
            padding: 10px 10px 10px 10px;
            font-weight: bold;
        }

        .d-body[data-v-f2a183a6] {
            padding: 50px;
        }

        .d[data-v-f2a183a6] {
            font-size: 0.9em !important;
            color: black;
            background: white;
            min-height: 1000px;
        }

        .d-right[data-v-f2a183a6] {
            text-align: right;
        }

        .d-title[data-v-f2a183a6] {
            font-size: 50px;
            line-height: 50px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .d-header-50[data-v-f2a183a6] {
            -webkit-box-flex: 1;
            flex: 1;
        }

        .d-header-inner[data-v-f2a183a6] {
            display: -webkit-box;
            display: flex;
            padding: 50px;
        }

        .d-header-brand[data-v-f2a183a6] {
            width: 200px;
        }

        .d-logo[data-v-f2a183a6] {
            max-width: 100%;
        }</style>
    <style type="text/css">p[data-v-37eeda86] {
            line-height: 1.2em;
            margin: 0 0 2px 0;
        }

        pre[data-v-37eeda86] {
            margin: 0;
        }

        img[data-v-37eeda86] {
            max-width: 100%;
        }

        .d-table-value[data-v-37eeda86] {
            padding-right: 0;
        }

        .d-table-controls[data-v-37eeda86] {
            -webkit-box-flex: 5;
            flex: 5;
        }

        .d-table-summary[data-v-37eeda86] {
            -webkit-box-flex: 4;
            flex: 4;
        }</style>
    <style type="text/css">p[data-v-e95a8a8c] {
            line-height: 1.2em;
            margin: 0 0 2px 0;
        }

        pre[data-v-e95a8a8c] {
            margin: 0;
        }

        img[data-v-e95a8a8c] {
            max-width: 100%;
        }

        .d[data-v-e95a8a8c] {
            font-family: monospace;
        }

        .fancy-title[data-v-e95a8a8c] {
            margin-top: 0;
            padding-top: 0;
        }

        .d-table-value[data-v-e95a8a8c] {
            padding-right: 0;
        }

        .d-table-controls[data-v-e95a8a8c] {
            -webkit-box-flex: 5;
            flex: 5;
        }

        .d-table-summary[data-v-e95a8a8c] {
            -webkit-box-flex: 4;
            flex: 4;
        }</style>
    <style type="text/css">p[data-v-363339a0] {
            line-height: 1.2em;
            margin: 0 0 2px 0;
        }

        pre[data-v-363339a0] {
            margin: 0;
        }

        img[data-v-363339a0] {
            max-width: 100%;
        }

        .fancy-title[data-v-363339a0] {
            margin-top: 0;
            font-size: 30px;
            line-height: 1.2em;
            padding-top: 0;
        }

        .f-b[data-v-363339a0] {
            font-size: 17px;
            line-height: 1.2em;
        }

        .thank[data-v-363339a0] {
            font-size: 45px;
            line-height: 1.2em;
            text-align: right;
            font-style: italic;
            padding-right: 25px;
        }

        .f-remarks[data-v-363339a0] {
            padding-left: 25px;
        }

        .d-table-value[data-v-363339a0] {
            padding-right: 0;
        }

        .d-table-controls[data-v-363339a0] {
            -webkit-box-flex: 5;
            flex: 5;
        }

        .d-table-summary[data-v-363339a0] {
            -webkit-box-flex: 4;
            flex: 4;
        }</style>
    <style type="text/css">p[data-v-e23d9750] {
            line-height: 1.2em;
            margin: 0 0 2px 0;
        }

        pre[data-v-e23d9750] {
            margin: 0;
        }

        img[data-v-e23d9750] {
            max-width: 100%;
        }

        .fancy-title[data-v-e23d9750] {
            margin-top: 0;
            font-size: 40px;
            line-height: 1.2em;
            font-weight: bold;
            padding: 25px;
            margin-right: 25px;
        }

        .f-b[data-v-e23d9750] {
            font-size: 17px;
            line-height: 1.2em;
        }

        .thank[data-v-e23d9750] {
            font-size: 45px;
            line-height: 1.2em;
            text-align: right;
            font-style: italic;
            padding-right: 25px;
        }

        .f-remarks[data-v-e23d9750] {
            padding: 25px;
        }

        .d-table-value[data-v-e23d9750] {
            padding-right: 0;
        }

        .d-table-controls[data-v-e23d9750] {
            -webkit-box-flex: 5;
            flex: 5;
        }

        .d-table-summary[data-v-e23d9750] {
            -webkit-box-flex: 4;
            flex: 4;
        }</style>
    <style type="text/css">p[data-v-4b3dcb8a] {
            line-height: 1.2em;
            margin: 0 0 2px 0;
        }

        pre[data-v-4b3dcb8a] {
            margin: 0;
        }

        img[data-v-4b3dcb8a] {
            max-width: 100%;
        }

        .fancy-title[data-v-4b3dcb8a] {
            margin-top: 0;
            padding-top: 0;
        }

        .sub-title[data-v-4b3dcb8a] {
            margin: 5px 0 3px 0;
            display: block;
        }

        .d-table-value[data-v-4b3dcb8a] {
            padding-right: 0;
        }

        .d-table-controls[data-v-4b3dcb8a] {
            -webkit-box-flex: 5;
            flex: 5;
        }

        .d-table-summary[data-v-4b3dcb8a] {
            -webkit-box-flex: 4;
            flex: 4;
        }</style>
    <style type="text/css">p[data-v-1ad6e3b9] {
            line-height: 1.2em;
            margin: 0 0 2px 0;
        }

        pre[data-v-1ad6e3b9] {
            margin: 0;
        }

        img[data-v-1ad6e3b9] {
            max-width: 100%;
        }

        .fancy-title[data-v-1ad6e3b9] {
            margin-top: 0;
            padding-top: 0;
        }

        .sub-title[data-v-1ad6e3b9] {
            margin: 5px 0 3px 0;
            display: block;
        }

        .d-no-pad[data-v-1ad6e3b9] {
            padding: 0px;
        }

        .grey-box[data-v-1ad6e3b9] {
            padding: 50px;
            background: #f8f8f8;
        }

        .d-inner-2[data-v-1ad6e3b9] {
            padding: 50px;
        }</style>
    <style type="text/css">p[data-v-136bf9b5] {
            line-height: 1.2em;
            margin: 0 0 2px 0;
        }

        pre[data-v-136bf9b5] {
            margin: 0;
        }

        img[data-v-136bf9b5] {
            max-width: 100%;
        }

        .fancy-title[data-v-136bf9b5] {
            margin-top: 0;
            padding-top: 0;
        }

        .d-table-value[data-v-136bf9b5] {
            padding-right: 0px;
        }</style>
    <style type="text/css">p[data-v-7d9d14b5] {
            line-height: 1.2em;
            margin: 0 0 2px 0;
        }

        pre[data-v-7d9d14b5] {
            margin: 0;
        }

        img[data-v-7d9d14b5] {
            max-width: 100%;
        }

        .fancy-title[data-v-7d9d14b5] {
            margin-top: 0;
            padding-top: 0;
        }

        .sub-title[data-v-7d9d14b5] {
            margin: 0 0 5px 0;
        }

        .padd[data-v-7d9d14b5] {
            margin-left: 5px;
            padding-left: 5px;
            border-left: 1px solid #f8f8f8;
            margin-right: 5px;
            padding-right: 5px;
            border-right: 1px solid #f8f8f8;
        }

        .d-inner[data-v-7d9d14b5] {
            padding-right: 0px;
        }

        .d-table-value[data-v-7d9d14b5] {
            padding-right: 5px;
        }

        .d-table-controls[data-v-7d9d14b5] {
            -webkit-box-flex: 5;
            flex: 5;
        }

        .d-table-summary[data-v-7d9d14b5] {
            -webkit-box-flex: 4;
            flex: 4;
        }</style>
    <style type="text/css">p[data-v-b8f60a0c] {
            line-height: 1.2em;
            margin: 0 0 2px 0;
        }

        pre[data-v-b8f60a0c] {
            margin: 0;
        }

        img[data-v-b8f60a0c] {
            max-width: 100%;
        }

        .fancy-title[data-v-b8f60a0c] {
            margin-top: 0;
            padding-top: 10px;
        }

        .d-table-value[data-v-b8f60a0c] {
            padding-right: 0;
        }

        .d-table-controls[data-v-b8f60a0c] {
            -webkit-box-flex: 5;
            flex: 5;
        }

        .d-table-summary[data-v-b8f60a0c] {
            -webkit-box-flex: 4;
            flex: 4;
        }

        .overflow-x-hidden {
            /*overflow-x: hidden !important;*/
            zoom: 90%;
        }</style>
</head>
<body class="overflow-x-hidden">
<div class="container">
    <div id="app">
        <div class="editor">
            <div class="invoice-preview-inner">
                <div class="editor-content">
                    <div class="preview-main client-preview">
                        <div data-v-b8f60a0c="" class="d" style="width:800px;margin-left: auto;margin-right: auto;" id="boxes">
                            <div data-v-b8f60a0c="" class="d-inner">
                                <div data-v-b8f60a0c="" class="row">
                                    <div data-v-b8f60a0c="" class="col-33"><h1 data-v-b8f60a0c="" class="fancy-title tu mb5" style="color: {{($color == '#ffffff') ? 'black': $color}}; border-top: 15px solid {{$color}};">{{__('INVOICE')}}</h1></div>
                                    <div data-v-b8f60a0c="" class="col-33"></div>
                                    <div data-v-b8f60a0c="" class="col-33"><img data-v-b8f60a0c="" style="max-width: 200px;" class="d-logo" src="{{$img}}"></div>
                                </div>
                                <div data-v-b8f60a0c="" class="break-50"></div>
                                <div data-v-b8f60a0c="" class="row">
                                    <div data-v-b8f60a0c="" class="col-66"><strong data-v-b8f60a0c="" class="tu mb5" style="color: {{($color == '#ffffff') ? 'black': $color}};">{{__('From')}}:</strong>
                                        <p data-v-b8f60a0c="">@if($invoice_usr->name){{$invoice_usr->name}}@endif</p>
                                        <pre data-v-b8f60a0c="">@if($left_address['address']){{$left_address['address']}}@endif</pre>
                                        <p data-v-b8f60a0c="">@if($left_address['city']) {{$left_address['city']}}, @endif @if($left_address['state']){{$left_address['state']}}@endif @if($left_address['zipcode']) - {{$left_address['zipcode']}}@endif</p>
                                        <p data-v-b8f60a0c="">@if($left_address['country']) {{$left_address['country']}}@endif</p>
                                    </div>
                                    <div data-v-b8f60a0c="" class="col-33">
                                        <table data-v-b8f60a0c="" class="summary-table">
                                            <tbody data-v-b8f60a0c="" style="position: relative">
                                            <tr data-v-b8f60a0c="">
                                                <td data-v-b8f60a0c="" class="tu fwb" style="color: {{($color == '#ffffff') ? 'black': $color}};">{{__('Number')}}:</td>
                                                <td data-v-b8f60a0c="" class="text-right">{{\App\Models\Utility::invoiceNumberFormat($invoice->invoice_id)}}</td>
                                            </tr>
                                            <tr data-v-b8f60a0c="">
                                                <td data-v-b8f60a0c="" class="tu fwb" style="color: {{($color == '#ffffff') ? 'black': $color}};">{{__('Project')}}:</td>
                                                <td data-v-b8f60a0c="" class="text-right">{{$invoice->project->name}}</td>
                                            </tr>
                                            <tr data-v-b8f60a0c="">
                                                <td data-v-b8f60a0c="" class="tu fwb" style="color: {{($color == '#ffffff') ? 'black': $color}};">{{__('Due Date')}}:</td>
                                                <td data-v-b8f60a0c="" class="text-right">{{\Utility::getDateFormated($invoice->due_date)}}</td>
                                            </tr>
                                            <tr class="col-lg-6 col-md-6 text-align-right ml-8" style="left: -356px; padding-top: 10px;">
                                                <td class="">
                                                    <p>
                                                        {!! DNS2D::getBarcodeHTML(route('pay.invoice',\Illuminate\Support\Facades\Crypt::encrypt($invoice->id)), "QRCODE",2,2) !!}
                                                    </p>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div data-v-b8f60a0c="" class="break-25"></div>
                                <div data-v-b8f60a0c="" class="row">
                                    <div data-v-b8f60a0c="" class="col-2">
                                        <div data-v-b8f60a0c="" class="col-66"><strong data-v-b8f60a0c="" class="tu mb5" style="color: {{($color == '#ffffff') ? 'black': $color}};">{{__('To')}}:</strong>
                                            <p data-v-b8f60a0c="">@if($invoice->client_id == $invoice_usr->id)
                                                    {{ $invoice->user->name }}
                                                @else
                                                    {{ $invoice->client->name }}
                                                @endif</p>
                                            <pre data-v-b8f60a0c="">@if($right_address['address']){{$right_address['address']}}@endif</pre>
                                            <p data-v-b8f60a0c="">@if($right_address['city']) {{$right_address['city']}}, @endif @if($right_address['state']){{$right_address['state']}}@endif @if($right_address['zipcode']) - {{$right_address['zipcode']}}@endif</p>
                                            <p data-v-b8f60a0c="">@if($right_address['country']) {{$right_address['country']}}@endif</p>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-b8f60a0c="" class="break-25"></div>
                                <div data-v-b8f60a0c="" class="d-table">
                                    <div data-v-b8f60a0c="" class="d-table">
                                        <div data-v-b8f60a0c="" class="tu d-table-tr" style="color: {{($color == '#ffffff') ? 'black': $color}}; border-bottom: 1px solid {{$color}}; border-top: 1px solid {{$color}};">
                                            <div data-v-b8f60a0c="" class="d-table-th w-2">{{__('#')}}</div>
                                            <div data-v-b8f60a0c="" class="d-table-th w-13">{{__('Item description')}}</div>
                                            <div data-v-b8f60a0c="" class="d-table-th w-5">{{__('Price')}}</div>
                                            <div data-v-b8f60a0c="" class="d-table-th w-3 text-right">{{__('Tax')}}</div>
                                        </div>
                                        <div data-v-b8f60a0c="" class="d-table-body">
                                            @if(isset($invoice->items) && count($invoice->items) > 0)
                                                @foreach($invoice->items as $key => $item)
                                                    <div data-v-b8f60a0c="" class="d-table-tr" style="border-bottom: 1px solid {{$color}};">
                                                        <div data-v-b8f60a0c="" class="d-table-td w-2"><span data-v-b8f60a0c="">{{$key+1}}</span></div>
                                                        <div data-v-b8f60a0c="" class="d-table-td w-13">
                                                            <pre data-v-b8f60a0c="">{{$item->item}}<br data-v-b8f60a0c=""></pre>
                                                        </div>
                                                        <div data-v-b8f60a0c="" class="d-table-td w-5"><span data-v-b8f60a0c="">{{ \App\Models\Utility::projectCurrencyFormat($invoice->project_id,$item->price,true) }}</span></div>
                                                        <div data-v-b8f60a0c="" class="d-table-td w-3 text-right"><span data-v-b8f60a0c="">{{ \App\Models\Utility::projectCurrencyFormat($invoice->project_id,$item->tax(),true) }}</span></div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div data-v-b8f60a0c="" class="d-table-tr" style="border-bottom: 1px solid {{$color}};">
                                                    <div data-v-b8f60a0c="" class="d-table-td w-2"><span data-v-b8f60a0c="">-</span></div>
                                                    <div data-v-b8f60a0c="" class="d-table-td w-13">
                                                        <pre data-v-b8f60a0c="">-<br data-v-b8f60a0c=""></pre>
                                                    </div>
                                                    <div data-v-b8f60a0c="" class="d-table-td w-5"><span data-v-b8f60a0c="">-</span></div>
                                                    <div data-v-b8f60a0c="" class="d-table-td w-3 text-right"><span data-v-b8f60a0c="">-</span></div>
                                                </div>
                                            @endif
                                        </div>
                                        <div data-v-b8f60a0c="" class="d-table-footer">
                                            <div data-v-b8f60a0c="" class="d-table-controls"></div>
                                            <div data-v-b8f60a0c="" class="d-table-summary">
                                                <div data-v-b8f60a0c="" class="d-table-summary-item">
                                                    <div data-v-b8f60a0c="" class="tu d-table-label">{{__('Sub Total')}}:</div>
                                                    <div data-v-b8f60a0c="" class="d-table-value">{{\App\Models\Utility::projectCurrencyFormat($invoice->project_id,$invoice->getSubTotal(),true)}}</div>
                                                </div>
                                                @if($invoice->getTax())
                                                    <div data-v-b8f60a0c="" class="d-table-summary-item">
                                                        <div data-v-b8f60a0c="" class="tu d-table-label">{{$invoice->tax->name}} ({{$invoice->tax->rate}}%):</div>
                                                        <div data-v-b8f60a0c="" class="d-table-value">{{\App\Models\Utility::projectCurrencyFormat($invoice->project_id,$invoice->getTax(),true)}}</div>
                                                    </div>
                                                @endif
                                                <div data-v-b8f60a0c="" class="d-table-summary-item" style="color: {{$font_color}}; background: {{$color}};">
                                                    <div data-v-b8f60a0c="" class="tu d-table-label">{{__('Total')}}:</div>
                                                    <div data-v-b8f60a0c="" class="d-table-value">{{\App\Models\Utility::projectCurrencyFormat($invoice->project_id,($invoice->getSubTotal()+$invoice->getTax()),true)}}</div>
                                                </div>
                                                <div data-v-b8f60a0c="" class="d-table-summary-item">
                                                    <div data-v-b8f60a0c="" class="tu d-table-label">{{__('Due Amount')}}:</div>
                                                    <div data-v-b8f60a0c="" class="d-table-value">{{\App\Models\Utility::projectCurrencyFormat($invoice->project_id,$invoice->getDue(),true)}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-b8f60a0c="" class="break-25"></div>
                                <div>
                                    <b>{{$footer['invoice_footer_title']}}</b>
                                    <p>{{$footer['invoice_footer_note']}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(!isset($preview))
    @include('invoices.script');
@endif
</body>
</html>
