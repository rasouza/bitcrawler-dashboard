@extends('layouts.master')

@section('title', 'ORDER BOOK')
@section('subtitle', '')

@section('content')

    <div class="col-lg-6">
        <div class="block">
            <div class="block-header bg-gray-lighter">
                <h3 class="block-title">BIDS</h3>
            </div>
            <div class="block-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>PRICE</th>
                            <th>COUNT</th>
                            <th>AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>value</td>
                            <td>value</td>
                            <td>value</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="block">
            <div class="block-header bg-gray-lighter">
                <h3 class="block-title">ASKS</h3>
            </div>
            <div class="block-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th>PRICE</th>
                            <th>COUNT</th>
                            <th>AMOUNT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>value</td>
                            <td>value</td>
                            <td>value</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection