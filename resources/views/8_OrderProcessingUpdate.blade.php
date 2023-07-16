@extends('layouts.main')
@section('title', "Order Processing Update")

<style>
    .sub-title{
        background-color: #4986df !important;
        width: 50%;
        padding: 2px;
        padding-left: 10px;
        border-radius: 50px;
        color: white
    }
    p{
        margin-bottom: 6px !important;
    }
    input{
        border: 1px solid blue;
        width: 100%;
        margin-bottom: 2px !important;
    }
    textarea{
        margin-bottom: 2px !important;
        border: 1px solid blue;

    }
    .td-table{
        border: 2px solid blue;   
        text-align: center; 
    }
</style>

<!--begin::Header-->
@include('layouts.header_2')
<!--end::Header--> 


@section('container')

    <!--begin::Body Main Page -->
    <div class="container-fluid mt-12">
        <!--begin::Table-->
        <section class="row w-75">
            <section class="col-6">
                <div class="sub-1">
                    <p class="sub-title">Order Process</p>
                    <br>
                    <div class="content row">
                        <section class="col-6">
                            <p>Payment Status :</p>
                            <p>Payment Amount :</p>
                            <p>Top Up Amount :</p>
                        </section>
                        <section class="col-6">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                        </section>
                    </div>
                </div>
            </section>
            <section class="col-6">
                <div class="row">
                    <div class="col-6">
                        <p>Status :</p>
                    </div>
                    <div class="col-6">
                        <input type="text">
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="col-10">
                        <textarea name="" id="" cols="60" rows="8" class="mt-5"></textarea>
                    </div>
                    <div class="col-2">
                        <button class="px-7 py-2" style="background-color: yellow; border: 2px solid blue; width:120px; border-radius: 100px;">SUBMIT</button>
                    </div>
                </div>
            </section>
        </section>
        <section class="my-7">
            <p class="sub-title">Reporting Code</p>
            <table style="border-spacing: 10px; border-collapse: separate; padding-left:0px">
                <thead style="font-size: 14px;" class="text-center">
                    <tr>
                        <th style="border: 2px solid blue;">CODE</th>
                        <th style="border: 2px solid blue;">REPORTING ISSUE</th>
                        <th style="border: 2px solid blue;">TICK</th>
                        <th style="border: 2px solid blue; width: 250px">REMARK</th>
                    </tr>
                </thead>
                <tbody style="font-size: 15px">
                    @foreach ($data as $key => $item)
                        <tr>
                            <td class="td-table">{{ $key }}</td>
                            <td class="td-table" style="text-align: start !important">{{ $item }}</td>
                            <td class="td-table"><input type="checkbox" name="" id="" style="scale: 1.5"></td>
                            <td class="td-table"><input type="text" name="" id=""></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        <!--end::Table-->
    </div>
    <!--end::Body Main Page-->

@endsection

{{--  --}}

@section('js-script')

@endsection

</body>
<!--end::Body-->

</html>
