@extends('layouts.main')
@section('title', "Crm Group's")

<!--begin::Header-->
@include('layouts.header_2')
<!--end::Header--> 


@section('container')
    <style>
        .form-control:not(textarea) {
            height: 20px !important;
            font-size: 10px;
            margin-bottom: 1rem;
        }
    </style>
    <!--begin::Body Main Page -->
    <div class="container-fluid mt-12">
        <!--start::Corporate Information-->
        <div class="row">
            <div class="col-3 bg-success rounded-pill">
                <p><b>A. Corporate Information</b></p>
            </div>
            <div class="col-3"></div>
            <div class="col-3 bg-success rounded-pill">
                <p><b>Account Info</b></p>
            </div>
            <div class="col-3 bg-success rounded-pill">
                <p><b>Group Offering</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 my-3">
                <div class="row">
                    <div class="col-6">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="date-incorporation">Date of Incorporation:</label>
                        <input type="date" name="date-incorporation" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="brn">BRN:</label>
                        <input type="text" name="brn" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="paid-up-capital">Paid Up Capital:</label>
                        <input type="text" name="paid-up-capital" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="brn-exp-date">BRN Exp Date:</label>
                        <input type="date" name="brn-exp-date" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="sales-turnover">Sales Turnover:</label>
                        <input type="text" name="sales-turnover" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="legal-address">Legal Address:</label>
                        <textarea type="text" name="legal-address" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="col-6">
                        <label for="no-of-employees">No. of Employees:</label>
                        <input type="text" name="no-of-employees" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="city">City:</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="industrial-segment">Industrial Segment:</label>
                        <input type="text" name="industrial-segment" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="postcode">Postcode:</label>
                        <input type="text" name="postcode" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="nature-of-business">Nature of Business:</label>
                        <input type="text" name="nature-of-business" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="state">State:</label>
                        <input type="text" name="state" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="hierarchy">Hierarchy:</label>
                        <input type="text" name="hierarchy" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="country">Country:</label>
                        <input type="text" name="country" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="telco-providers">Telco Providers:</label>
                        <input type="text" name="telco-providers" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="tel-no">Tel No:</label>
                        <input type="text" name="tel-no" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="sow">SOW:</label>
                        <input type="text" name="sow" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="fax-no">Fax No:</label>
                        <input type="text" name="fax-no" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="enterprise-customer-type">Enterprise Customer Type:</label>
                        <input type="text" name="enterprise-customer-type" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="billing-email-address">Billing Email Address:</label>
                        <input type="text" name="billing-email-address" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="geographical-spread">Geographical Spread:</label>
                        <input type="text" name="geographical-spread" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="company-email">Company Email:</label>
                        <input type="text" name="company-email" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="language">Language:</label>
                        <input type="text" name="language" class="form-control">
                    </div>
                </div>
            </div>
            
            <!--start::Account Info dan Group Offering-->
            <div class="col-6 my-3">
                <div class="row">
                    <div class="col-6">
                        <label for="salesperson-id">Salesperson ID:</label>
                        <input type="text" name="salesperson-id" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="primary-offer">Primary Offer:</label>
                        <input type="text" name="primary-offer" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="enterprise-group-type">Enterprise Group Type:</label>
                        <input type="text" name="enterprise-group-type" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="supp-offer-1">Supp Offer 1:</label>
                        <input type="text" name="supp-offer-1" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="ac-payment-responsible">A\C for Payment Responsible:</label>
                        <input type="text" name="ac-payment-responsible" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="supp-offer-2">Supp Offer 2:</label>
                        <input type="text" name="supp-offer-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="group-level">Group Level:</label>
                        <input type="text" name="group-level" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="supp-offer-3">Supp Offer 3:</label>
                        <input type="text" name="supp-offer-3" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="group-tariff">Group Tariff:</label>
                        <input type="text" name="group-tariff" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="supp-offer-4">Supp Offer 4:</label>
                        <input type="text" name="supp-offer-4" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="billing-cycle">Billing Cycle:</label>
                        <input type="text" name="billing-cycle" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="supp-offer-5">Supp Offer 5:</label>
                        <input type="text" name="supp-offer-5" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                    </div>
                    <div class="col-6">
                        <label for="supp-offer-6">Supp Offer 6:</label>
                        <input type="text" name="supp-offer-6" class="form-control">
                    </div>
                </div>
                <br>
                <!--start::Bill Medium dan Payment Responsible-->
                <div class="row">
                    <div class="col-6 bg-success rounded-pill">
                        <p><b>Bill Medium</b></p>
                    </div>
                    <div class="col-6 bg-success rounded-pill">
                        <p><b>Payment Responsible</b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="name-sms">Name: (fixed as SMS)</label>
                        <input type="text" name="name-sms" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="payment-mode">Payment Mode:</label>
                        <input type="text" name="payment-mode" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="bill-type">Bill Type:</label>
                        <input type="text" name="bill-type" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="payment-method">Payment Method:</label>
                        <input type="text" name="payment-method" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="bill-carrier">Bill Carrier:</label>
                        <input type="text" name="bill-carrier" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="bill-detail">Bill Detail:</label>
                        <input type="text" name="bill-detail" class="form-control">
                    </div>
                </div>
                <br><br><br><br>
                <!--start::CRM Group Parent Level-->
                <div class="row position-absolute mx-8">
                    <div class="col-2"></div>
                    <div class="col bg-warning rounded">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="col-4 fs-2 ms-5">
                                <b>CRM Group Parent Level</b>
                            </div>
                            <div class="col bg-success m-3 p-3 rounded">
                                <div class="row">
                                    <div class="col">
                                        <label for="parent-group-name">Group Name:</label>
                                        <input type="text" name="parent-group-name" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="parent-group-no">Group No:</label>
                                        <input type="text" name="parent-group-no" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-sm btn-outline-secondary">Save In NCCF</button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-sm btn-warning text-dark">Create In CRM</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::CRM Group Parent Level-->

                <!--start::CRM Group Sub Parent Level-->
                <div class="row position-absolute mx-8" style="top: 1350px">
                    <div class="col-2"></div>
                    <div class="col bg-warning rounded">
                        <div class="d-flex justify-content-start align-items-center">
                            <div class="col-4 fs-2 ms-5">
                                <b>CRM Group Sub Parent Level</b>
                            </div>
                            <div class="col bg-success m-3 p-3 rounded">
                                <div class="row">
                                    <div class="col">
                                        <label for="parent-group-name">Group Name:</label>
                                        <input type="text" name="parent-group-name" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="parent-group-no">Group No:</label>
                                        <input type="text" name="parent-group-no" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-sm btn-outline-secondary">Save In NCCF</button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-sm btn-warning text-dark">Create In CRM</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::CRM Group Sub Parent Level-->

                <!--end::Bill Medium dan Payment Responsible-->
            </div>
            <!--end::Account Info dan Group Offering-->
            

        </div>
        <!--end::Corporate Information-->
        <div class="row">
            <div class="col-6">
                <hr>
            </div>
        </div>
        <!--start::Administration Information-->
        <div class="row">
            <div class="col-3 bg-success rounded-pill">
                <p><b>B. Administration Information</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 my-3">
                <div class="row">
                    <div class="col-6">
                        <label for="billing-address">Billing Address:</label>
                        <input type="text" name="billing-address" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="delivery-address">Delivery Address:</label>
                        <input type="text" name="delivery-address" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="billing-city">City:</label>
                        <input type="text" name="billing-city" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="delivery-city">City:</label>
                        <input type="text" name="delivery-city" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="billing-postcode">Postcode:</label>
                        <input type="text" name="billing-postcode" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="delivery-postcode">Postcode:</label>
                        <input type="text" name="delivery-postcode" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="billing-state">State:</label>
                        <textarea type="text" name="billing-state" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="col-6">
                        <label for="delivery-state">State:</label>
                        <textarea type="text" name="delivery-state" rows="4" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="billing-country">Country:</label>
                        <input type="text" name="billing-country" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="delivery-country">Country:</label>
                        <input type="text" name="delivery-country" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <!--end::Administration Information-->
        <div class="row">
            <div class="col-6">
                <hr>
            </div>
        </div>
        <!--start::Corporate Incharged-->
        <div class="row">
            <div class="col-3 bg-success rounded-pill">
                <p><b>C. Corporate Incharged</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-6 my-3">
                <div class="row">
                    <div class="col-6">
                        <p><b>Administration 1</b></p>
                        <label for="admin-name-1">Name:</label>
                        <input type="text" name="admin-name-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <p><b>Administration 2</b></p>
                        <label for="admin-name-2">Name:</label>
                        <input type="text" name="admin-name-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="admin-id-type-1">ID Type:</label>
                        <input type="text" name="admin-id-type-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="admin-id-type-2">ID Type:</label>
                        <input type="text" name="admin-id-type-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="admin-id-no-1">ID No (eg. 310101011001 for IC):</label>
                        <input type="text" name="admin-id-no-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="admin-id-no-2">ID No (eg. 310101011001 for IC):</label>
                        <input type="text" name="admin-id-no-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="admin-mobile-phone-1">Mobile Phone (eg. 0162211800):</label>
                        <input type="text" name="admin-mobile-phone-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="admin-mobile-phone-2">Mobile Phone (eg. 0162211800):</label>
                        <input type="text" name="admin-mobile-phone-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="admin-designation-1">Designation:</label>
                        <input type="text" name="admin-designation-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="admin-designation-2">Designation:</label>
                        <input type="text" name="admin-designation-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="admin-tel-no-1">Tel No:</label>
                        <input type="text" name="admin-tel-no-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="admin-tel-no-2">Tel No:</label>
                        <input type="text" name="admin-tel-no-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="admin-email-address-1">Email Address:</label>
                        <input type="text" name="admin-email-address-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="admin-email-address-2">Email Address:</label>
                        <input type="text" name="admin-email-address-2" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6">
                        <p><b>Authorized Signatory 1</b></p>
                        <label for="authorized-name-1">Name:</label>
                        <input type="text" name="authorized-name-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <p><b>Authorized Signatory 2</b></p>
                        <label for="authorized-name-2">Name:</label>
                        <input type="text" name="authorized-name-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="authorized-id-type-1">ID Type:</label>
                        <input type="text" name="authorized-id-type-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="authorized-id-type-2">ID Type:</label>
                        <input type="text" name="authorized-id-type-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="authorized-id-no-1">ID No (eg. 310101011001 for IC):</label>
                        <input type="text" name="authorized-id-no-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="authorized-id-no-2">ID No (eg. 310101011001 for IC):</label>
                        <input type="text" name="authorized-id-no-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="authorized-mobile-phone-1">Mobile Phone (eg. 0162211800):</label>
                        <input type="text" name="authorized-mobile-phone-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="authorized-mobile-phone-2">Mobile Phone (eg. 0162211800):</label>
                        <input type="text" name="authorized-mobile-phone-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="authorized-designation-1">Designation:</label>
                        <input type="text" name="authorized-designation-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="authorized-designation-2">Designation:</label>
                        <input type="text" name="authorized-designation-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="authorized-tel-no-1">Tel No:</label>
                        <input type="text" name="authorized-tel-no-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="authorized-tel-no-2">Tel No:</label>
                        <input type="text" name="authorized-tel-no-2" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="authorized-email-address-1">Email Address:</label>
                        <input type="text" name="authorized-email-address-1" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="authorized-email-address-2">Email Address:</label>
                        <input type="text" name="authorized-email-address-2" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <!--end::Corporate Incharged-->

    </div>
    <!--end::Body Main Page-->

@endsection

{{--  --}}

@section('js-script')

@endsection

</body>
<!--end::Body-->

</html>
