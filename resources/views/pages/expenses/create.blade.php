@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('index') }}">{{__('messages.dashboard')}}</a>
            </li>
            <li class="breadcrumb-item active">
                <a href="{{ route('expense.index') }}">{{__('messages.income.index')}}</a>
            </li>
            <li class="breadcrumb-item active">{{__('messages.insert')}}</li>
        </ol>
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show rounded" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
        @endif
        <div class="row">
            <div class="col-xl-8 offset-2">
                <div class="card mx-auto mt-5">
                    <div class="card-header">{{__('messages.expense.add')}}</div>
                    <div class="card-body">
                        <form action="{{ route('expense.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="text" id="expense_title" class="form-control" placeholder="Expense Description" required="required" autofocus="autofocus" name="expense_title">
                                    <label for="expense_title">{{__('messages.expense.description')}}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="number" step="any" id="expense_amount" min="0.01"  class="form-control" placeholder="Expense Amount" required="required" name="expense_amount">
                                    <label for="expense_amount">{{__('messages.expense.amount')}}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <select id="expense_type_id" class="form-control" name="expense_type_id">
                                        <option value=""  selected>{{__('messages.expense.select_type')}}</option>
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="date" id="expense_amount" class="form-control" placeholder="Expense Date" required="required" name="expense_date" value="{{ date('Y-m-d') }}">
                                    <label for="expense_amount">{{__('messages.expense.date')}}</label>
                                </div>
                            </div>
                            <div class="float-right">
                                <a href="{{ route('expense.index') }}" class="btn btn-success">{{__('messages.back')}}</a>
                                <button type="submit" class="btn btn-primary">{{__('messages.save')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
