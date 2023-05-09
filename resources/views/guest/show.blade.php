@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="title">
                        {{ __('Create New User') }}
                    </div>
                </div>
                <div class="card-body fw-bold">
                    <div class="name">
                        Nama : {{ $data->name }}
                    </div>
                    <div class="Email">
                        Email : {{ $data->email }}
                    </div>
                    <div class="Reports">
                        <div class="title fw-bold">
                            Reports
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Aspek</th>
                                <th scope="col">1</th>
                                <th scope="col">2</th>
                                <th scope="col">3</th>
                                <th scope="col">4</th>
                                <th scope="col">5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Aspek Intelegensi</td>
                                    <td>
                                        @if ($data->intelligentAspectScore <= 1)
                                            v
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->intelligentAspectScore > 1 && $data->intelligentAspectScore <= 2)
                                            v
                                        @else
                                            -
                                        @endif
                                    </td> 
                                    <td>
                                        @if ($data->intelligentAspectScore > 2 && $data->intelligentAspectScore <= 3)
                                            v
                                        @else
                                            -
                                        @endif
                                    </td>  
                                    <td>
                                        @if ($data->intelligentAspectScore > 3 && $data->intelligentAspectScore <= 4)
                                            v
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->intelligentAspectScore >= 5)
                                            v
                                        @else
                                            -
                                        @endif
                                    </td>    
                                </tr>
                                <tr>
                                    <td>Aspek Numerical abillity</td>
                                    <td>
                                        @if ($data->numericalAbilityAspectScore <= 1)
                                            v
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->numericalAbilityAspectScore > 1 && $data->numericalAbilityAspectScore <= 2)
                                            v
                                        @else
                                            -
                                        @endif
                                    </td> 
                                    <td>
                                        @if ($data->numericalAbilityAspectScore > 2 && $data->numericalAbilityAspectScore <= 3)
                                            v
                                        @else
                                            -
                                        @endif
                                    </td>  
                                    <td>
                                        @if ($data->numericalAbilityAspectScore > 3 && $data->numericalAbilityAspectScore <= 4)
                                            v
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if ($data->numericalAbilityAspectScore >= 5)
                                            v
                                        @else
                                            -
                                        @endif
                                    </td>    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
