@extends('layouts.main')
@section('title', 'Line Detail')

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

        .bg-activated {
            background-color: #C1FF72;
        }

        .bg-cancelled {
            background-color: #B6B2B2;
        }
    </style>
    <!--begin::Body Main Page -->
    <div class="container-fluid mt-12">

        <!--begin::Header-->
        <div class="row">
            <div class="col">
                <label for="subscriber-type">Subscriber Type:</label>
                <input type="text" name="subscriber-type" class="form-control">

                <label for="company-name">Company Name:</label>
                <input type="text" name="company-name" class="form-control">

                <label for="customer-name">Customer Name:</label>
                <input type="text" name="customer-name" class="form-control">

                <label for="id-type">ID Type:</label>
                <input type="text" name="id-type" class="form-control">

                <label for="id-no">ID No:</label>
                <input type="text" name="id-no" class="form-control">

                <label for="email">Email:</label>
                <input type="text" name="email" class="form-control">

                <label for="bill-medium">Bill Medium:</label>
                <input type="text" name="bill-medium" class="form-control">

            </div>
            <div class="col">
                <label for="address-1">Address 1:</label>
                <textarea type="text" name="address-1" rows="2" class="form-control"></textarea>

                <label for="address-2">Address 2:</label>
                <textarea type="text" name="address-2" rows="2" class="form-control"></textarea>

                <label for="address-3">Address 3:</label>
                <textarea type="text" name="address-3" rows="2" class="form-control"></textarea>
            </div>
            <div class="col">
                <label for="payment-mode">Payment Mode:</label>
                <input type="text" name="payment-mode" class="form-control">

                <label for="card-type">Card Type:</label>
                <input type="text" name="card-type" class="form-control">

                <label for="owner-name">Owner Name:</label>
                <input type="text" name="owner-name" class="form-control">

                <label for="bank-issuer">Bank Issuer:</label>
                <input type="text" name="bank-issuer" class="form-control">

                <label for="card-expired-date">Card Expired Date:</label>
                <input type="date" name="card-expired-date" class="form-control">
            </div>
            <div class="col-2">
                <div class="d-flex justify-content-start align-items-center">
                    <div class="bg-white border border-3 border-dark col-6 me-5" style="height: 30px"></div>
                    <p class="my-2"><b>Not Activated</b></p>
                </div>
                <div class="d-flex justify-content-start align-items-center my-3">
                    <div class="bg-activated border border-3 border-dark col-6 me-5" style="height: 30px"></div>
                    <p class="my-2"><b>Activated</b></p>
                </div>
                <div class="d-flex justify-content-start align-items-center">
                    <div class="bg-cancelled border border-3 border-dark col-6 me-5" style="height: 30px"></div>
                    <p class="my-2"><b>Cancelled</b></p>
                </div>
                <br>
                <button class="btn btn-warning btn-sm text-dark rounded"><b>Check Duplication Submission</b></button>
            </div>
        </div>
        <!--end::Header-->
        <hr>

        <!--begin::Tables-->
        <div class="row ms-auto">
            <div class="col-2 text-center text-white rounded-pill" style="background-color: #004AAD;">
                <b>COP RENEWAL</b>
            </div>
        </div>
        <br>
        <div class="overflow-scroll">
            <table class="table table-responsive fs-9">
                <thead>
                    <tr>
                        <th colspan="9" class="bg-success border border-dark text-center"><b>MOB TEL DETAILS</b></th>
                        <th colspan="21" class="bg-success border border-dark text-center"><b>SUPPLEMENTARY OFFERING</b></th>
                        <th colspan="5" class="text-center border border-dark text-white" style="background-color: purple"><b>OWNERSHIP DETAILS</b></th>
                        <th colspan="2" class="bg-success border border-dark text-center"><b></b></th>
                    </tr>
                    <tr>
                        <th class="bg-warning text-center fw-bolder border border-dark">No</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Line ID</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Type</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Sim Card No</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">MSSIDN</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">AB</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">PRP / C</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Tenure</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Credit Limit</th>
    
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Primary Offering</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 1</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 2</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 3</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 4</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 5</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 6</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 7</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 8</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 9</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 10</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 11</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 12</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 13</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 14</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 15</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 16</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 17</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 18</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 19</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 20</th>
    
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO ID Type</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO ID No</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO Company Name</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO ACC No</th>
                        
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: rgb(75, 0, 128)">Act Status</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: rgb(75, 0, 128)">E</th>
    
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 1</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 2</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 3</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 4</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 5</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 6</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 7</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 8</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 9</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 10</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 11</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 12</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 13</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 14</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 15</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 16</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 17</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 18</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 19</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 20</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 21</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 22</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 23</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 24</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 25</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 26</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 27</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 28</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 29</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 30</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 31</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 32</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 33</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 34</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 35</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 36</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 37</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>
        <div class="row ms-auto">
            <div class="col-2 text-center text-white rounded-pill" style="background-color: #004AAD;">
                <b>A2B / P2P</b>
            </div>
        </div>
        <br>
        <div class="overflow-scroll">
            <table class="table table-responsive fs-9">
                <thead>
                    <tr>
                        <th colspan="9" class="bg-success border border-dark text-center"><b>MOB TEL DETAILS</b></th>
                        <th colspan="21" class="bg-success border border-dark text-center"><b>SUPPLEMENTARY OFFERING</b></th>
                        <th colspan="5" class="text-center border border-dark text-white" style="background-color: purple"><b>OWNERSHIP DETAILS</b></th>
                        <th colspan="2" class="bg-success border border-dark text-center"><b></b></th>
                    </tr>
                    <tr>
                        <th class="bg-warning text-center fw-bolder border border-dark">No</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Line ID</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Type</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Sim Card No</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">MSSIDN</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">AB</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">PRP / C</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Tenure</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Credit Limit</th>
    
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Primary Offering</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 1</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 2</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 3</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 4</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 5</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 6</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 7</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 8</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 9</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 10</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 11</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 12</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 13</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 14</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 15</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 16</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 17</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 18</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 19</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 20</th>
    
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO ID Type</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO ID No</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO Company Name</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO ACC No</th>
                        
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: rgb(75, 0, 128)">Act Status</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: rgb(75, 0, 128)">E</th>
    
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 1</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 2</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 3</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 4</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 5</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 6</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 7</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 8</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 9</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 10</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 11</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 12</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 13</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 14</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 15</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 16</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 17</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 18</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 19</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 20</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 21</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 22</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 23</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 24</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 25</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 26</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 27</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 28</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 29</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 30</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 31</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 32</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 33</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 34</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 35</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 36</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 37</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>
        <div class="row ms-auto">
            <div class="col-2 text-center text-white rounded-pill" style="background-color: #004AAD;">
                <b>New Line</b>
            </div>
        </div>
        <br>
        <div class="overflow-scroll">
            <table class="table table-responsive fs-9">
                <thead>
                    <tr>
                        <th colspan="9" class="bg-success border border-dark text-center"><b>MOB TEL DETAILS</b></th>
                        <th colspan="21" class="bg-success border border-dark text-center"><b>SUPPLEMENTARY OFFERING</b></th>
                        <th colspan="5" class="text-center border border-dark text-white" style="background-color: purple"><b>OWNERSHIP DETAILS</b></th>
                        <th colspan="2" class="bg-success border border-dark text-center"><b></b></th>
                    </tr>
                    <tr>
                        <th class="bg-warning text-center fw-bolder border border-dark">No</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Line ID</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Type</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Sim Card No</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">MSSIDN</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">AB</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">PRP / C</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Tenure</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Credit Limit</th>
    
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Primary Offering</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 1</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 2</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 3</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 4</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 5</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 6</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 7</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 8</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 9</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 10</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 11</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 12</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 13</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 14</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 15</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 16</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 17</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 18</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 19</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 20</th>
    
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO ID Type</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO ID No</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO Company Name</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO ACC No</th>
                        
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: rgb(75, 0, 128)">Act Status</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: rgb(75, 0, 128)">E</th>
    
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 1</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 2</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 3</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 4</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 5</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 6</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 7</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 8</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 9</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 10</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 11</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 12</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 13</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 14</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 15</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 16</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 17</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 18</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 19</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 20</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 21</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 22</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 23</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 24</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 25</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 26</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 27</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 28</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 29</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 30</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 31</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 32</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 33</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 34</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 35</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 36</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 37</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br>
        <div class="row ms-auto">
            <div class="col-2 text-center text-white rounded-pill" style="background-color: #004AAD;">
                <b>MNP</b>
            </div>
        </div>
        <br>
        <div class="overflow-scroll">
            <table class="table table-responsive fs-9">
                <thead>
                    <tr>
                        <th colspan="9" class="bg-success border border-dark text-center"><b>MOB TEL DETAILS</b></th>
                        <th colspan="21" class="bg-success border border-dark text-center"><b>SUPPLEMENTARY OFFERING</b></th>
                        <th colspan="5" class="text-center border border-dark text-white" style="background-color: purple"><b>OWNERSHIP DETAILS</b></th>
                        <th colspan="2" class="bg-success border border-dark text-center"><b></b></th>
                    </tr>
                    <tr>
                        <th class="bg-warning text-center fw-bolder border border-dark">No</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Line ID</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Type</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Sim Card No</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">MSSIDN</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">AB</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">PRP / C</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Tenure</th>
                        <th class="bg-warning text-center fw-bolder border border-dark">Credit Limit</th>
    
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Primary Offering</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 1</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 2</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 3</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 4</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 5</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 6</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 7</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 8</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 9</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 10</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 11</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 12</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 13</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 14</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 15</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 16</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 17</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 18</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 19</th>
                        <th class="text-center fw-bolder border border-dark" style="background-color: yellow">Supp Offer 20</th>
    
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO ID Type</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO ID No</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO Company Name</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: purple">DNO ACC No</th>
                        
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: rgb(75, 0, 128)">Act Status</th>
                        <th class="text-center text-white fw-bolder border border-dark" style="background-color: rgb(75, 0, 128)">E</th>
    
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 1</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 2</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 3</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 4</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 5</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 6</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 7</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 8</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 9</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 10</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 11</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 12</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 13</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 14</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 15</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 16</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 17</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 18</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 19</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 20</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 21</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 22</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 23</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 24</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 25</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 26</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 27</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 28</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 29</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 30</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 31</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 32</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 33</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 34</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 35</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 36</td>
                        <td class="border boder-dark" style="background-color: rgba(81, 177, 215, 0.556)">test 37</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--end::Tables-->
    </div>
    <!--end::Body Main Page-->

@endsection

{{--  --}}

@section('js-script')

@endsection

</body>
<!--end::Body-->

</html>
