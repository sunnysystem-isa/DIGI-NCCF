@extends('layouts.main')
@section('title', "Crm Group's")

<!--begin::Header-->
{{-- @include('layouts.header_2') --}}
<!--end::Header--> 
<style>
    .line-yellow{
        background-color: yellow;
        height: 15px;
    }
    .background-title{
        background-color: yellow;
        padding-top: 11px;
        padding-buttom: 15px;
        padding-left: 25px;
        padding-right: 25px;
        border: 5px solid blue;
        border-radius: 25px 0px 0px 25px
    }
    .sub-title{
        background-color: blue;
        width: 50%;
        padding: 2px;
        padding-left: 10px;
        border-radius: 10px;
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
</style>
<nav>
    <div class="line-yellow w-full"></div>
</nav>


@section('container')

    <!--begin::Body Main Page -->
    <div class="container-fluid mt-12">
        <!--begin::Table-->
        <section class="main row">
            <section class="col-6">
                <p class="sub-title">A. Corporate Information</p>
                <div class="content row">
                    <div class="col-3">
                        <p>Name</p>
                        <p>BRN</p>
                        <p>BRN Expired Date</p>
                        <p>Legal Address</p>
                        <br>
                        <p>City</p>
                        <p>Postcode</p>
                        <p>State</p>
                        <p>Country</p>
                        <p>Tel. No</p>
                        <p>Fax. No</p>
                        <p>Billing Email Address</p>
                        <p>Company Email</p>

                    </div>
                    <div class="col-3">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <textarea name="legal-address" id="legal-address" cols="23" rows="2"></textarea>
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                    </div>
                    <div class="col-3">
                        <p>Date of Incorporation:</p>
                        <p>Paid Up Capital:</p>
                        <p>Sales Turnover:</p>
                        <p>No. of Employees:</p>
                        <p>Industrial Segment:</p>
                        <p>Nature of Business:</p>
                        <p>Hierarchy:</p>
                        <p>Telco Providers:</p>
                        <p>SOW:</p>
                        <p>Enterprise Customer Type:</p>
                        <p>Geographical Spread:</p>
                        <p>Language:</p>
                    </div>
                    <div class="col-3">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                    </div>
                </div>
            </section>
            <section class="col-6">
                <div class="background-title">
                    <h1>CRM GROUP'S</h1>
                </div>
            </section>
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
