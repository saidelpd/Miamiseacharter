@extends('layouts.admin')
@section('content')
    <!-- PRIMARY CONTENT HEADING class="primary-content-heading clearfix">-->
    <div class="primary-content-heading clearfix">
        <h2 class="dashboard-title">Reservations</h2>
        <ul class="breadcrumb pull-left">
            <li><i class="fa fa-dashboard"></i> <a href="{{URL::route('admin.dashboard')}}">Dashboard</a></li>
            <li><i class="fa fa-calendar"></i><a href="{{URL::route('appointments.index')}}"> Reservations</a></li>
            <li class="active"><i class="fa fa-eye"></i> View Reservations</li>
        </ul>
    </div>

    <!-- END PRIMARY CONTENT HEADING -->
    <div class="row padding_25">
        <div class="col-sm-5 ">
            <div class="widget">
                <div class="widget-header clearfix">
                    <h3>
                        <span>Viewing Reservation # {{$appointment->id}}</span>
                    </h3>
                </div>
                <div class="widget-content">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th>Boat:</th>
                            <td>@if(count($appointment->boat)) <span class="label label-default"
                                                                     style="background-color:{{$appointment->boat->color}}">{{$appointment->boat->name}}</span> @else
                                    Boat No Found!!. @endif</td>
                        </tr>
                        <tr>
                            <th>Begin</th>
                            <td>{{$appointment->start->format('l m/d/Y h:i:s A')}} - <span
                                        class="label label-primary">{{$appointment->start->diffForHumans()}} </span>
                            </td>
                        </tr>
                        <tr>
                            <th>End</th>
                            <td>{{$appointment->end->format('l m/d/Y h:i:s A')}}</td>
                        </tr>
                        <tr>
                            <th>Service Required</th>
                            <td>@if(count($appointment->service)) {{$appointment->service->name}} @else Service No
                                Found!! @endif</td>
                        </tr>

                        @if(count($appointment->user))
                            <tr>
                                <th>Create By</th>
                                <td>{{$appointment->user->getName()}} </td>
                            </tr>
                            <tr>
                                <th>{{$appointment->user->first}}'s Phone</th>
                                <td>{{$appointment->user->phone}} </td>
                            </tr>
                            <tr>
                                <th>{{$appointment->user->first}}'s Email</th>
                                <td>{{$appointment->user->email}}</td>
                            </tr>
                            <tr>
                                <th>Commission</th>
                                <td class="text-right">{{$helper->Currency($commission)}}</td>
                            </tr>
                        @else
                            <tr>
                                <th><span class="label label-danger">Error</span></th>
                                <td>User Not Found Please Contact Admin</td>
                            </tr>
                        @endif
                        <tr>
                            <th>Reservation Created</th>
                            <td>{{$appointment->created_at->format('l m/d/Y h:i:s A')}}- <span
                                        class="label label-primary">{{$appointment->created_at->diffForHumans()}} </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="widget">
                <div class="widget-header clearfix">
                    <h3>
                        <span>Payment</span>
                    </h3>
                </div>
                <div class="widget-content">
                    <table class="table table-striped">
                        <tbody>
                        @if(count($appointment->payment))
                            @if(count($appointment->payment->user))
                                <tr>
                                    <th>Contact Name</th>
                                    <td class="text-right">{{$appointment->payment->user->getName()}}</td>
                                </tr>
                                <tr>
                                    <th>Contact Email</th>
                                    <td class="text-right">{{$appointment->payment->user->email}}</td>
                                </tr>
                                <tr>
                                    <th>Contact Phone</th>
                                    <td class="text-right">{{$appointment->payment->user->phone}}</td>
                                </tr>
                            @endif
                            <tr>
                                <th>Payment Status</th>
                                <td class="text-right">@if($appointment->payment->processed)
                                        <span class="label label-success">Success</span> @else
                                        <span class="label label-danger">Canceled</span>
                                    @endif</td>
                            </tr>
                            <tr>
                                <th>Service Price</th>
                                <td class="text-right">{{$helper->Currency($appointment->payment->total)}}</td>
                            </tr>
                            <tr>
                                <th>Tax</th>
                                <td class="text-right">{{$helper->Currency($appointment->payment->taxes)}}</td>
                            </tr>
                            <tr>
                                <th>Total Price</th>
                                <td class="text-right">{{$helper->Currency($appointment->payment->getTotalTaxes())}}</td>
                            </tr>
                        @else
                            <tr>
                                <th><span class="label label-danger">Error</span></th>
                                <td>No Payment Information Found Please Contact Admin</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
