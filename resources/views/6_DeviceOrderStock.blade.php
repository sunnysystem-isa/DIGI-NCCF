@extends('layouts.main')
@section('title', "Device Order Stock")

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
    .header-table{
        background-color: #ffdb59;
        color: #000000;
        text-align: center;
        font-size: 13px;
        border: 3px solid #fdf767;
        width: 100px;
        min-width: 100px;
        max-width: 100px;
    }
    .header-table-purple{
        background-color: #cb6ce6; 
        color: #000000;
        text-align: center;
        font-size: 13px;
        border: 3px solid #fdf767; 
        width: 90px; 
        min-width: 90px; 
        max-width: 90px;"
    }
</style>
<!--begin::Header-->
@include('layouts.header_2')
<!--end::Header--> 


@section('container')

    <!--begin::Body Main Page -->
    <div class="container-fluid my-12">
        <!--begin::Table-->
        <section class="row">
            <section class="col-3">
                <div class="sub-1">
                    <p class="sub-title">Ship To Address</p>
                    <br>
                    <div class="content row">
                        <section class="col-6">
                            <p>Delivery Address</p>
                            <br>
                            <p>City</p>
                            <p>Postcode</p>
                            <p>State</p>
                            <p>Country</p>
                        </section>
                        <section class="col-6">
                            <textarea name="legal-address" id="legal-address" cols="23" rows="2"></textarea>
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                        </section>
                    </div>
                </div>
                <div class="sub-2">
                    <p class="sub-title">Bill To Address</p>
                    <br>
                    <div class="content row">
                        <section class="col-6">
                            <p>Billing Address</p>
                            <br>
                            <p>City</p>
                            <p>Postcode</p>
                            <p>State</p>
                            <p>Country</p>
                        </section>
                        <section class="col-6">
                            <textarea name="legal-address" id="legal-address" cols="23" rows="2"></textarea>
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                        </section>
                    </div>
                </div>
            </section>
            <section class="col-6">
                <p class="sub-title">Ship To Address</p>
                <br>
                <div class="row">
                    <section class="col-6">
                        <div class="row">
                            <p><b>Administrator 1</b></p>
                            <div class="col-7">
                                <p>Name</p>
                                <p>ID No (eg. 310101011001 for IC)</p>
                                <p>Mobile Phone (eg. 0162211800)</p>
                                <p>Office Tel No.</p>
                            </div>
                            <div class="col-5">
                                <input type="text">
                                <input type="text">
                                <input type="text">
                                <input type="text">
                            </div>
                        </div>
                    </section>
                    <section class="col-6">
                        <div class="row">
                            <p><b>Administrator 2</b></p>
                            <div class="col-7">
                                <p>Name</p>
                                <p>ID No (eg. 310101011001 for IC)</p>
                                <p>Mobile Phone (eg. 0162211800)</p>
                                <p>Office Tel No.</p>
                            </div>
                            <div class="col-5">
                                <input type="text">
                                <input type="text">
                                <input type="text">
                                <input type="text">
                            </div>
                        </div>
                    </section>
                </div>
                <br>
                <div class="row">
                    <section class="col-6">
                        <div class="row">
                            <p><b>Authorize Signatory 1</b></p>
                            <div class="col-7">
                                <p>Name</p>
                                <p>ID No (eg. 310101011001 for IC)</p>
                                <p>Mobile Phone (eg. 0162211800)</p>
                                <p>Office Tel No.</p>
                            </div>
                            <div class="col-5">
                                <input type="text">
                                <input type="text">
                                <input type="text">
                                <input type="text">
                            </div>
                        </div>
                    </section>
                    <section class="col-6">
                        <div class="row">
                            <p><b>Authorize Signatory 2</b></p>
                            <div class="col-7">
                                <p>Name</p>
                                <p>ID No (eg. 310101011001 for IC)</p>
                                <p>Mobile Phone (eg. 0162211800)</p>
                                <p>Office Tel No.</p>
                            </div>
                            <div class="col-5">
                                <input type="text">
                                <input type="text">
                                <input type="text">
                                <input type="text">
                            </div>
                        </div>
                    </section>
                    <div class="button mt-7 col-6 d-flex justify-content-between">
                        <button class="btn btn-sm px-4" style="background-color: #DBEAFF; border: 2px solid blue; border-radius: 20px;">Save In NCCF</button>
                        <button class="btn btn-sm px-4" style="background-color: #FDF767; border: 2px solid blue; border-radius: 20px;">Print Pre Invoice</button>
                    </div>
                </div>
            </section>
            <section class="col">
                <div class="">
                    <div class="sub-1">
                        <p class="sub-title">Stock To Request</p>
                        <br>
                        <div class="content">
                            @php
                                $data = [
                                    [
                                        "No" => 1,
                                        "Item Code" => "HST_200384435",
                                        "Device Name" => "SAMSUNG A32",
                                        "Amount" => 1,
                                    ],
                                    [
                                        "No" => 2,
                                        "Item Code" => "HST_200384430",
                                        "Device Name" => "HONOR X 9A",
                                        "Amount" => 1,
                                    ],
                                    [
                                        "No" => 3,
                                        "Item Code" => "HST_200384835",
                                        "Device Name" => "SAMSUNG A04",
                                        "Amount" => 1,
                                    ],
                                    [
                                        "No" => 4,
                                        "Item Code" => "HST_200384495",
                                        "Device Name" => "PLAN REBATE",
                                        "Amount" => 1,
                                    ],
                                ]
                            @endphp
                           <table class="fs-5 border m-0">
                            <thead>
                                <tr>
                                    <th class="text-center" style="background-color: #F7BC00; color: #000000;text-align: center; font-size: 12px;border: 3px solid #fdf767; ">No.</th>
                                    <th class="text-center" style="background-color: #F7BC00; color: #000000;text-align: center; font-size: 12px;border: 3px solid #fdf767; width: 100px !important">Item Code</th>
                                    <th class="text-center" style="background-color: #F7BC00; color: #000000;text-align: center; font-size: 12px;border: 3px solid #fdf767; width: 120px !important">Device Name</th>
                                    <th class="text-center" style="background-color: #F7BC00; color: #000000;text-align: center; font-size: 12px;border: 3px solid #fdf767; ">Amount</th>
                                    <th class="text-center" style="background-color: #F7BC00; color: #000000;text-align: center; font-size: 12px;border: 3px solid #fdf767; width: 100px !important"></th>
                                </tr>
                            </thead>
                            @foreach ($data as $item)
                                <tr class="fs-6">
                                    <td class="text-center" style="background-color: white; color: #000000;text-align: center; font-size: 9px;border: 3px solid #fdf767; width: 40px; min-width: 40px; max-width: 40px;">{{ $item["No"] }}</td>
                                    <td class="text-center" style="background-color: white; color: #000000;text-align: center; font-size: 9px;border: 3px solid #fdf767;">{{ $item["Item Code"] }}</td>
                                    <td class="text-center" style="background-color: white; color: #000000;text-align: center; font-size: 9px;border: 3px solid #fdf767; width: 80px !important; min-width: 80px; max-width: 80px;">{{ $item["Device Name"] }}</td>
                                    <td class="text-center" style="background-color: white; color: #000000;text-align: center; font-size: 9px;border: 3px solid #fdf767;">{{ $item["Amount"] }}</td>
                                    <td class="text-center d-flex justify-content-evenly" style="background-color: white; color: #000000;text-align: center; font-size: 9px;border: 3px solid #fdf767;">
                                        <a href="#" class="rounded-circle" style="border: 1px solid black">+</a>
                                        <a href="#" class="rounded-circle" style="border: 1px solid black">-</a>
                                    </td>
                                </tr>                            
                            @endforeach
                           </table>
                           <div class="w-50 mt-3">
                               <div class="d-flex flex-row gap-5 align-items-center">
                                   <div class="not-active" style="background-color: white; width: 50px !important; border: 1px solid black; height: 25px"></div>
                                   <span>Not Active</span>
                               </div>
                               <div class="d-flex flex-row gap-5 align-items-center my-4">
                                   <div class="active" style="background-color: rgb(95, 222, 107); width: 50px !important; border: 1px solid black; height: 25px"></div>
                                   <span>Active</span>
                               </div>
                               <div class="d-flex flex-row gap-5 align-items-center">
                                   <div class="cancelled" style="background-color: rgb(188, 188, 188); width: 50px !important; border: 1px solid black; height: 25px"></div>
                                   <span>Cancelled</span>
                               </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        
        <section style="overflow: auto">
            <div class="row">
                <!-- HEADER COP -->
                <div class="col-sm-2 pl-2 my-6 sub-title">
                    <h5 class="px-1 text-center m-0"  style="color: white; font-size: 1.3rem; padding-left: 3.5cm; font-weight: 600;">COP Renewal</h5>
                </div>
                <!-- TABEL COP -->
              
                <table id="lineDetails" class="hover" style="width:100%; margin-top: -10px; border-collapse: 2px solid  #004aad">
                    <thead>
                        <tr>
                            <th style="background-color: #4986df; color: white;text-align: center; border: 2px solid;" class="text-center" colspan="9"></th>
                            <th style="background-color: #4986df; color: white;text-align: center;border: 2px solid;" class="text-center" colspan="21"></th>
                            <th style="background-color: #cb6ce6; color: white;text-align: center;border: 2px solid;" class="text-center" colspan="15">Device Order</th>
                        </tr>
                        <tr>
                            <th class="header-table  text-center align-middle" >No</th>
                            <th class="header-table text-center align-middle">Line ID</th>
                            <th class="header-table text-center align-middle">Type</th>
                            <th class="header-table text-center align-middle">SIM Card No</th>
                            <th class="header-table text-center align-middle">MSISDN</th>
                            <th class="header-table text-center align-middle">AB</th>
                            <th class="header-table text-center align-middle">PRP/C</th>
                            <th class="header-table text-center align-middle">Tenure</th>
                            <th class="header-table text-center align-middle">Credit Limit</th>
                            <th class="header-table text-center align-middle">Primary Offering</th> 
                            <th class="header-table text-center align-middle">Supp Offer 1</th>
                            <th class="header-table text-center align-middle">Supp Offer 2</th>
                            <th class="header-table text-center align-middle">Supp Offer 3</th>
                            <th class="header-table text-center align-middle">Supp Offer 4</th>
                            <th class="header-table text-center align-middle">Supp Offer 5</th>
                            <th class="header-table text-center align-middle">Supp Offer 6</th>
                            <th class="header-table text-center align-middle">Supp Offer 7</th>
                            <th class="header-table text-center align-middle">Supp Offer 8</th>
                            <th class="header-table text-center align-middle">Supp Offer 9</th>
                            <th class="header-table text-center align-middle">Supp Offer 10</th>
                            <th class="header-table text-center align-middle">Supp Offer 11</th>
                            <th class="header-table text-center align-middle" style="width: 800px !important; min-width: 800px !important">Supp Offer 12</th>
                            <th class="header-table text-center align-middle">Supp Offer 13</th>
                            <th class="header-table text-center align-middle" style="width: 800px !important; min-width: 800px !important">Supp Offer 14</th>
                            <th class="header-table text-center align-middle">Supp Offer 15</th>
                            <th class="header-table text-center align-middle">Supp Offer 16</th>
                            <th class="header-table text-center align-middle">Supp Offer 17</th>
                            <th class="header-table text-center align-middle">Supp Offer 18</th>
                            <th class="header-table text-center align-middle">Supp Offer 19</th>
                            <th class="header-table text-center align-middle">Supp Offer 20</th>
                            <th class="header-table-purple text-center align-middle">ATV Status</th>
                            <th class="header-table-purple text-center align-middle" style="width: 100px !important; min-width: 100px !important">Order IMSI Type</th>
                            <th class="header-table-purple text-center align-middle">Final Price</th>
                            <th class="header-table-purple text-center align-middle">REMARK</th>
                            <th class="header-table-purple text-center align-middle">3PL Warehouse</th>
                            <th class="header-table-purple text-center align-middle">Released To UERP</th>
                            <th class="header-table-purple text-center align-middle">Released To 3PL</th>
                            <th class="header-table-purple text-center align-middle">Date/Time Released</th>
                            <th class="header-table-purple text-center align-middle">PreDelivery Date/Time</th>
                            <th class="header-table-purple text-center align-middle">PostDelivery Date/Time</th>
                            <th class="header-table-purple text-center align-middle">Delivery Status</th>
                            <th class="header-table-purple text-center align-middle">Delivery Attempt</th>
                            <th class="header-table-purple text-center align-middle">Device IMEI</th>
                            <th class="header-table-purple text-center align-middle">SO / MESAD DO ID</th>
                            <th class="header-table-purple text-center align-middle">OFS DO No</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        @for ($i = 1; $i < 6; $i++)
                        <tr style="border: 3px solid #fdf767; background-color: #c1ff72">
                            <td style="border: 3px solid #fdf767;text-align: center;">{{ $i }}</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">12345</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">COP</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">89600000000000</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">01012345678</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">N</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">C</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">24</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">100</td>
                            <td style = "text-align: center; border: 3px solid #fdf767;">Go Digi 168</td>
                            <td style = "text-align: center;border: 3px solid #fdf767;">4G Mobile Internet</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">IDD</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">SMS</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">International Roaming</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">Go Digi 168 Data Bundled</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">MI Go Digi Unlimited</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">Vo-LTE</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">Monthly-Unlimited Singapore-FREE</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">Go IDD168-Free Bundle</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">Monthly-GoIDDAsia300mins-FREE</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">Go Digi ADV Bundled</td>
                            <td style="border: 3px solid #fdf767;text-align: center; margin:0px">
                                <section>
                                    <p>RM150</p>
                                </section>
                                <section>
                                    <table class="w-100">
                                        <thead class="text-center" style="font-size: 10px">
                                            <tr>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">Linear ID</th>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">Fee Type</th>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">Fee Name</th>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">OFS Code</th>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">Gross Amt</th>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">Waive Amount</th>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">Net Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center; font-size: 10px">
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)">23401</td>
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)">OCC</td>
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)">Adv Pymt OCC</td>
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)">MIS_200016529</td>
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)">150</td>
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)"><input type="text"></td>
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)">150</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </section>
                            </td>
                            <td style="border: 3px solid #fdf767;text-align: center;">Go Roam168-Free Bundle</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">
                                <section>
                                    <p>EB-S-GD168-SAMSUNGA34-GRPHT-24M-APR23</p>
                                </section>
                                <section>
                                    <table class="w-100">
                                        <thead class="text-center" style="font-size: 10px">
                                            <tr>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">Linear ID</th>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">Fee Type</th>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">Fee Name</th>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">OFS Code</th>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">Gross Amt</th>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">Waive Amount</th>
                                                <th style="background-color: yellow; border: 3px solid rgb(27, 221, 27)">Net Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center; font-size: 10px">
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)">23401</td>
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)">SAL</td>
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)">Handset Fee Handset</td>
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)">HST_200384435</td>
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)">3999</td>
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)"><input type="text"></td>
                                                <td style="background-color: rgb(102, 223, 250); border: 3px solid rgb(27, 221, 27)">3999</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </section>
                            </td>
                            <td style="border: 3px solid #fdf767;text-align: center;"></td>
                            <td style="border: 3px solid #fdf767;text-align: center;"></td>
                            <td style="border: 3px solid #fdf767;text-align: center;"></td>
                            <td style="border: 3px solid #fdf767;text-align: center;"></td>
                            <td style="border: 3px solid #fdf767;text-align: center;"></td>
                            <td style="border: 3px solid #fdf767;text-align: center;"></td>
                            <td style="border: 3px solid #fdf767;text-align: center;">Activated</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">
                                <select name="option" id="option" style="width: 80px">
                                    <option value=""></option>
                                </select>
                            </td>
                            <td style="border: 3px solid #fdf767;text-align: center;">
                                <input type="text" value="4149" style="text-align: center">
                            </td>
                            <td style="border: 3px solid #fdf767;text-align: center;">
                                <input type="text">
                            </td>
                            <td style="border: 3px solid #fdf767;text-align: center;">
                                <select name="option" id="option" style="width: 80px">
                                    <option value="">EB BU</option>
                                </select>
                            </td>
                            <td style="border: 3px solid #fdf767;text-align: center;">
                                <input type="checkbox" name="" id="" style="scale: 2">
                            </td>
                            <td style="border: 3px solid #fdf767;text-align: center;">
                                <input type="checkbox" name="" id="" style="scale: 2">
                            </td>
                            <td style="border: 3px solid #fdf767;text-align: center;">{{ date('Y-F-d h:i:sa') }}</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">{{ date('Y-F-d h:i:sa') }}</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">{{ date('Y-F-d h:i:sa') }}</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">Success delivery</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">1</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">351587329336599</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">SO0000380944</td>
                            <td style="border: 3px solid #fdf767;text-align: center;">206478</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </section>
        
        <section class="row mt-5">
            <div class="d-flex flex-row justify-content-center align-items-center gap-7">
                <p class="text-danger">Total Price</p>
                <input type="text" name="" value="6637" id="" class="text-center" style="width: 80px; background-color:rgb(255, 170, 213); border: 2px solid black">
                <button style="border: 2px solid black; border-radius: 50px; width: 100px; background-color:#FDF767">SAVE</button>
                <button class="px-5" style="border: 2px solid black; border-radius: 50px; width: auto; background-color:#FDF767">Release To UERP</button>
                <button class="px-5" style="border: 2px solid black; border-radius: 50px; width: auto; background-color:#FDF767">Release To 3PL</button>
            </div>
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
