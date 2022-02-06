@extends('layout.base')
@section('title' , 'Contacts')
@section('content')
<form method="GET" action="{{ url('/') }}">
    <div class="row mx-auto">

        <div class="col-md-6">
            <div class="iq-card">
                <div class="iq-card-body">
                    <div class="text-center">
                        <span class="btn btn-outline-primary ">Select Country</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mx-auto">
                        <div class="iq-iconbox iq-bg-primary mx-auto">
                            <i class="las la-globe-americas"></i>
                        </div>
                        <div class="value-box col-md-8 mx-auto">
                            <select class="form-control" name="country_id" id="country_id">
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                <option value="{{ $country['id'] }}" {{  request('country_id')==$country['id'] ? "selected" : ""}}>
                                    {{ $country['name'] }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="iq-progress-bar mt-5">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-lg-2">
            <div class="iq-card">
                <div class="iq-card-body">

                    <div class="text-center">
                        <label class="btn btn-outline-warning" for="all-outlined"><span>All Numbers</span></label>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">

                        <div class="iq-iconbox iq-bg-warning  mx-auto">
                            <i class="las la-universal-access"></i>
                            <input type="radio" class="btn-check" id="all-outlined" autocomplete="off" name="state" value='' {{ !request('state')  ? "checked" : ""}}>
                        </div>
                    </div>
                    <div class="iq-progress-bar mt-5">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-lg-2">
            <div class="iq-card">
                <div class="iq-card-body">
                    <div class="text-center">
                        <label class="btn btn-outline-success" for="success-outlined"><span>Valid Numbers</span></label>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="iq-iconbox iq-bg-success  mx-auto">
                            <i class="las la-check-double"></i>
                            <input type="radio" class="btn-check" name="state" id="success-outlined" autocomplete="off" value="valid" {{  request('state')== 'valid' ? "checked" : ""}}>
                        </div>
                    </div>
                    <div class="iq-progress-bar mt-5">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-lg-2">
            <div class="iq-card mx-auto">
                <div class="iq-card-body">
                    <div class="text-center">
                        <label class="btn btn-outline-danger" for="danger-outlined"><span>Not Valid Numbers</span></label>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="iq-iconbox iq-bg-danger mx-auto">
                            <i class="las la-not-equal"></i>
                            <input type="radio" class="btn-check" name="state" id="danger-outlined" autocomplete="off" value="not_valid" {{ request('state')  ==  'not_valid' ? "checked" : ""}}>
                        </div>
                    </div>
                    <div class="iq-progress-bar mt-5">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row col-md-6 d-flex justify-content-between align-items-center mx-auto">
        <button type="submit" class="btn btn-primary btn-lg btn-block ">Filter Customers</button>
    </div>

</form>

<div class=" row mx-auto" style="margin: 50px;">
    <div class="col-lg-12">
        <div class="iq-card wow fadeInUp overflow-hidden" data-wow-delay="0.6s">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Customers List</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <div class="table-responsive">
                    <table id="customers" class="table  mx-auto mb-0 table-borderless datatable-example">
                        <thead>
                            <tr>
                                <th scope="col">Country</th>
                                <th scope="col">State</th>
                                <th scope="col">Country Code</th>
                                <th scope="col">Phone Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer['country'] }}</td>
                                <td>
                                    @if($customer['is_valid'])
                                    <div class="badge badge-pill badge-success">
                                        OK
                                    </div>
                                    @else
                                    <div class="badge badge-pill badge-danger">
                                        NOK
                                    </div>
                                    @endif
                                </td>
                                <td>{{ $customer['code'] }}</td>
                                <td>{{ $customer['phone'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection