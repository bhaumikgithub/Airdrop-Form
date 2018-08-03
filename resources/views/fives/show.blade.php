@extends('layouts.app2')


@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Selfi Varification</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>
                                        Info Selfie
                                    </h2>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="{{ url('/fives/' . $five->id . '/edit') }}" title="Edit Zero">
                                        <button class="btn btn-primary btn-sm">
                                            <i class="material-icons">border_color</i> Edit
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            
                            @if(Session::has('flash_message'))
                                <div class="alert alert-success">
                                    <strong>Success!</strong> {{ Session::get('flash_message') }}
                                </div>
                            @endif

                            @if(Session::has('error'))
                            <div class="alert alert-danger">
                                <strong>Error!</strong> {{ Session::get('error') }}
                            </div>
                            @endif   

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif


                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr><th> Email Address </th><td> {{ $five->email_address }} </td></tr><tr><th> Name </th><td> {{ $five->name }} </td></tr>

                                        <tr>
                                            <th> Video </th>
                                            <td> 
                                                @if($five->video !="")
                                                <a href="{{ url('/selfie/'.$five->video) }}" download="download">Download</a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Referral emails</th><td>{{ $five->referral_emails }}</td>
                                        </tr>
                                        <tr>
                                            <th>Ethereum address</th><td>{{ $five->ethereum_address }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>
@endsection