@extends('layouts.main')

<!--begin::Header-->
@include('layouts.header')
<!--end::Header--> 

@section('title', 'Landing Page')
@section('container')


    <!--begin::Body Main Page -->
    <div class="container-fluid">
        <!--begin::Div Table-->
        <div class="overflow-scroll">
            <!--begin::Table-->
            <table id="lineDetails" class="table hover" style="width:100%; margin-top: 30px; border-collapse: 2px solid  #004aad">
                <thead>
                    <tr style="background-color: #0e4c92; color: white;text-align: center; border: 2px solid;">
                        <th class="text-center" colspan="16">SUBMISSION</th>
                        <th class="text-center" colspan="6">CREDIT RISK VERIFICATION</th>
                        <th class="text-center" colspan="5">ORDER PROCESSING</th>
                        <th class="text-center" colspan="4">ACTIVATION</th>
                        <th class="text-center" colspan="3">STATUS</th>
                    </tr>
                    <tr class="fw-bolder" style="color: #000000;text-align: center; font-size: 13px;border: 2px solid white; width: 60px; min-width: 60px; max-width: 60px;">
                        <th style="background-color: #F7BC00;" class="text-center align-middle">No</th>
                        <th style="background-color: #F7BC00; " class="text-center align-middle">Bot 1</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">FL</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">Assigned</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">Region</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">Serial Number</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">Sign Up</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">Resubmission</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">CRM Group's</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">Name</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">Line Details</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">Salesperson</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">Created By</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">Remark</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">CMS</th>
                        <th style="background-color: #F7BC00;" class="text-center align-middle">E</th>
                        <th style="background-color: #fdf767;" class="text-center align-middle">CR Personal</th>
                        <th style="background-color: #fdf767;" class="text-center align-middle">Exposure</th>
                        <th style="background-color: #fdf767;" class="text-center align-middle">Status</th>
                        <th style="background-color: #fdf767;" class="text-center align-middle">CR Remark</th>
                        <th style="background-color: #fdf767;" class="text-center align-middle">CR U</th>
                        <th style="background-color: #fdf767;" class="text-center align-middle">CR E</th>
                        <th style="background-color: #B9FF66;" class="text-center align-middle">Operation Personal</th>
                        <th style="background-color: #B9FF66;" class="text-center align-middle">Status</th>
                        <th style="background-color: #B9FF66;" class="text-center align-middle">OP Remarks</th>
                        <th style="background-color: #B9FF66;" class="text-center align-middle">Line</th>
                        <th style="background-color: #B9FF66;" class="text-center align-middle">OP E</th>
                        <th style="background-color: #b2b540;" class="text-center align-middle">Total Lines</th>
                        <th style="background-color: #b2b540;" class="text-center align-middle">Status</th>
                        <th style="background-color: #b2b540;" class="text-center align-middle">AU E</th>
                        <th style="background-color: #b2b540;" class="text-center align-middle">CC E</th>
                        <th style="background-color: #b2b540;" class="text-center align-middle">Status</th>
                        <th style="background-color: #b2b540;" class="text-center align-middle">Box ID</th>
                        <th style="background-color: #b2b540;" class="text-center align-middle">Del</th>
                    </tr>
                </thead>

                <tbody>
                    @for ($i=1;$i<4;$i++)
                    <tr style="border: 2px solid  white; background-color: #BDDEEC">
                        <td class="text-center">{{ $i }}</td>
                        <td style="text-align: center ; border: 2px solid  white"><img
                                src="https://media.giphy.com/avatars/HeyAutoHQ/DgfrJNR8oUyv.gif" height="100" width="100">
                        </td>
                        <td style="text-align: center  ; border: 2px solid  white">Y</td>
                        <td style="text-align: center; border: 2px solid  white"><a href="http://212.183.159.230/5MB.zip"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
                                    </path>
                                </svg></a></td>
                        <td style="text-align: center;border: 2px solid  white ">{{ Faker\Factory::create()->city() }}</td>
                        <td style="border: 2px solid  white"><a href="#" onclick="MyWindow=window.open('http://localhost:81/0/Nui/ViewModule.aspx#CardModuleV2/UsrHistoryLog11Page/edit/fa9faa16-402c-4d9a-ade8-45ccb41425d6','MyWindow','width=850,height=500'); return false;">CAM/23/J34930</a>
                        </td>
                        <td style="border: 2px solid  white">14-Mar-2023 11:01 AM</td>
                        <td style="border: 2px solid  white">14-Mar-2023 11:01 AM</td>
                        <td style="border: 2px solid  white">30001102256</td>
                        <td style="border: 2px solid  white">{{ Faker\Factory::create()->company() }}</td>
                        <td style="text-align: center; border: 2px solid  white"><a href="#"
                                onclick="MyWindow=window.open('http://127.0.0.1:8000/LineDetails','MyWindow','width=850,height=400'); return false;">
                                Show Line Details</a></td>
                        <td style="border: 2px solid  white">L &amp; D GENERAL SUPPLIERS &amp; SERVICES</td>
                        <td style="border: 2px solid  white"> SFA 14-Mar-2023 11:01 AM</td>
                        <td style="border: 2px solid  white"></td>
                        <td style="border: 2px solid  white"></td>
                        <td style="text-align: center; border: 2px solid  white"><a href="http://212.183.159.230/5MB.zip"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z">
                                    </path>
                                </svg></a></td>
                        <td style="border: 2px solid  white">Supervisor</td>
                        <td style="border: 2px solid  white">8000</td>
                        <td style="border: 2px solid  white">Re-Submitted #9 on 24-Mar-2023 11:01 AM</td>
                        <td style="border: 2px solid  white">Re-Submitted #9 on 24-Mar-2023 11:01 AM</td>
                        <td style="text-align: center; border: 2px solid  white"><a href="http://212.183.159.230/5MB.zip"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-cloud-upload" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z">
                                    </path>
                                </svg></a></td>
                        <td style="text-align: center; border: 2px solid  white"><a href="http://212.183.159.230/5MB.zip"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z">
                                    </path>
                                </svg></a></td>
                        <td style="border: 2px solid  white">Supervisor</td>
                        <td style="border: 2px solid  white">Re-Submitted #9 on 24-Mar-2023 11:01 AM</td>
                        <td style="border: 2px solid  white">Re-Submitted #9 on 24-Mar-2023 11:01 AM</td>
                        <td style="text-align: center; border: 2px solid  white"><a href="http://212.183.159.230/5MB.zip"
                                onclick="MyWindow=window.open('http://127.0.0.1:8000/LineDetails','MyWindow','width=950,height=850'); return false;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-phone" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z">
                                    </path>
                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                                </svg></a>12/12</td>
                        <td style="text-align: center; border: 2px solid  white"><a href="http://212.183.159.230/5MB.zip"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-cloud-upload" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z">
                                    </path>
                                    <path fill-rule="evenodd"
                                        d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z">
                                    </path>
                                </svg></a></td>
                        <td style="border: 2px solid  white">12/12</td>
                        <td style="border: 2px solid  white">Pending Activation</td>
                        <td style="text-align: center; border: 2px solid  white"><a href="http://212.183.159.230/5MB.zip"
                                onclick="MyWindow=window.open('http://127.0.0.1:8000/Activation','MyWindow','width=950,height=850'); return false;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z">
                                    </path>
                                </svg></a></td>
                        <td style="text-align: center; border: 2px solid  white"><a href="http://212.183.159.230/5MB.zip"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-credit-card-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z">
                                    </path>
                                </svg></a></td>
                        <td style="border: 2px solid  white">OPEN</td>
                        <td style="border: 2px solid  white"></td>
                        <td style="text-align: center; border: 2px solid  white"><a href="http://212.183.159.230/5MB.zip"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path
                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z">
                                </path>
                            </svg></a>
                        </td>
                    </tr>
                    @endfor  
                </tbody>

            </table>
            <!--end::Table-->
        </div>
        <!--end::Div Table-->
    </div>
    <!--end::Body Main Page-->

@endsection

{{--  --}}

@section('js-script')

@endsection

</body>
<!--end::Body-->

</html>
