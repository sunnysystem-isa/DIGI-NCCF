<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('1_MainPage');
});

Route::get('/landing-page', function () {
    return view('2_LandingPage');
});

Route::get('/crm-goup', function () {
    return view('3_CrmGroup');
});

Route::get('/line-details', function () {
    return view('4_LineDetails');
});

Route::get('/activation', function () {
    return view('5_Activation');
});

Route::get('/device-order-stock', function () {
    return view('6_DeviceOrderStock');
});

Route::get('/credit-risk-assesment', function () {
    $data = [
        "CMS ERROR-Attachment Can Not be Open",
        "CRA/IRA Customer information Unreadable / Incorrect",
        "Accuracy-CRA/IRA info not match in NCCF against CMS",
        "CMS ERROR-Attachment Can Not be Open",
        "CTOS TELCO-Blacklisted",
        "Line status not active in DIGI System (COP / TOO)",
        "Outstanding Bills (OD/OST)",
        "Contract issue (Renewal / P2P / A to B)",
        "Change of Address differ from SSM (NEW)",
        "Change of Delivery Address (CODA) (Existing)",
        "Top Up / Advance Payment not received",
        "Missing / Incomplete Offerings in NCCF",
        "Non comply offerings without MU/Approval",
        "Non Director / Unauthorised Signatory",
        "Authorised Signature Different / No record",
        "Advance Payment waiver (Approval)",
        "CRISS Failed Assessment (Acceptable with 1 + 1 Advance Payment and HOD Approval)",
        "CRISS Failed Assessment - High Risk and NOT Recommended",
        "Exceeded Matrix Exposure (within 6 months)",
        "Exceptional Documentation Required Follow ups (Internal Remark)",
        "OM Manual processing RPA Bots delayed (Internal Remark)",
        "Beyond SOPP / Special Project-SOPP OV Approval",
        "Other clarification required",
    ];
    return view('7_CreditRiskAssesment', ["data" => $data]);
});

Route::get('/order-processing-update', function () {
    $data = [
        "MNP01"=>"No stock",
        "MNP02"=>"Pending Payment",
        "MNP03"=>"Credit Card unable to transact",
        "OP02"=>"Existing Line issue: status barred / suspended / closed",
        "OP03"=>"Simcard cannot be used / invalid / wrongly written",
        "OP04"=>"No stock",
        "OP05"=>"Pending Payment",
        "OP06"=>"Credit Card unable to transact",
        "OP07"=>"Waiver/Discounting issue",
        "OP08"=>"Pre to Post issue: R1 status @ insufficient credit",
        "OP09"=>"Post to Post issue: active supp line",
        "SP10"=>"New NRIC is incorrect",
        "SP11"=>"Old NRIC is incorrect",
        "SP12"=>"Police/Army ID is incorrect",
        "SP13"=>"Passport Number is incorrect",
        "SP30"=>"DNO Company Registration is incorrect",
        "SP31"=>"DNO Non fulfillment of contract obligation",
        "SP51"=>"DNO Account Overdue",
        "SP52"=>"Some or all lines numbers do not belong to the Donor",
        "SP54"=>"Principal line has supplementary line(s) that should be ported",
        "SP55"=>"Supplementary line has principal line that should be ported",
        "SP56"=>"Some or all numbers do not belong to principle subscriber or company",
        "SP57"=>"Credit limit exceeded",
        "SP58"=>"Customer numbers are temporarily disconnected - involuntarily",
        "SP59"=>"New MSISDN not found / invalid telecom type / wrongly written",
        "SP61"=>"Customer numbers are temporarily disconnected - involuntarily",
    ];
    return view('8_OrderProcessingUpdate', ['data' => $data]);
});
