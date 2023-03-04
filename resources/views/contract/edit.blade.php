<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta name="author" content="smart target">

    <title>Smart Target - Contracts</title>

    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/vendors/css/vendors.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/vendors/css/forms/select/select2.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css/bootstrap.min.css')}}" >

    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css/bootstrap-extended.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css/colors.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css/components.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css/themes/bordered-layout.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css/pages/app-invoice.min.css')}}">

</head>
<style>
    table tr, table tr td:nth-last-child(1) {
    display: block !important;
    clear: both;
}
table tr, table tr td {
    clear: both;
}
    </style>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="">


!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand"  href="{{route('contract.index')}}"><span class="brand-logo">
                <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                  <defs>
                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                      <stop stop-color="#000000" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </lineargradient>
                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                      <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </lineargradient>
                  </defs>
                  <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                      <g id="Group" transform="translate(400.000000, 178.000000)">
                        <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                        <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                        <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                        <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                      </g>
                    </g>
                  </g>
                </svg></span>
                <h2 class="brand-text">Smart Target</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center"  href="{{route('contract.index')}}"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Contracts</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center"  href="{{route('contract.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                    </li>
                    <li class="active"><a class="d-flex align-items-center" href="{{route('contract.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div style="font-weight: bold !important;" class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">

        <div class="content-body">
            <section class="invoice-add-wrapper">

            <div class="row invoice-add">

                <form method="POST" action="{{ route('contract.update',$contract->id) }}">
                    @csrf
                    @method('PUT')
                   {{-- @method('PUT')  --}}
                   <input type="hidden" name="_method" value="PUT">          
                    <!-- Invoice Add Left starts -->
                    <div class="col-xl-12 col-md-8 col-12">
                        {{-- <input type="hidden" name="id" value="{{ $contract->workdomain_fees->id}}"/> --}}
                        <div class="card invoice-preview-card">
                            <div class="card-body invoice-padding pb-0">
                                <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                    <div class="invoice-number-date mt-md-0 mt-2">
                                        <div class="d-flex align-items-center justify-content-md-end mb-1">
                                            <h4 class="invoice-title">Contract name</h4>
                                            <div class="input-group input-group-merge invoice-edit-input-group">
                                                <input type="text" class="form-control invoice-edit-input" placeholder="contract name" name="contract_name" value="{{ $contract->contract_name}}" required/>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-1">
                                            <span class="title">Contract Status:</span>
                                            <select class="form-select" name="contrcat_status">
                                                <option value="draft">Draft</option>
                                                <option value="real">Real</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="invoice-spacing" />
                            <!-- Header starts -->
                            <div class="card-body invoice-padding pb-0">
                                <div class="d-flex justify-content-end flex-md-row flex-column invoice-spacing mt-0">
                                    <div class="invoice-number-date mt-md-0 mt-2">
                                        <div class="d-flex align-items-center justify-content-md-end mb-1">
                                            <h4 class="invoice-title">Ref:PRO-2022- </h4>
                                            <div class="input-group input-group-merge invoice-edit-input-group">
                                                <div class="input-group-text">
                                                    <i data-feather="hash"></i>
                                                </div>
                                                <input type="text" class="form-control invoice-edit-input" placeholder="53634" name="contract_reft_number" value="{{ $contract->contract_reft_number}}" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center flex-md-row flex-column invoice-spacing mt-10">
                                    <div class="invoice-number-date mt-md-0 mt-2">
                                        <div class="d-flex align-items-center flex-column justify-content-md-end mb-1">
                                            <h4 class="invoice-title">عقـد خدمات</h4>
                                            <h4 class="invoice-title">“عقد “</h4>
                                            <div class="input-group input-group-merge invoice-edit-input-group">
                                                <select style="width: 100%" class="form-select" name="contract_type">
                                                    <option value="social media">اداره حساب سوشيال ميديا</option>
                                                    <option value="web development">تصميم موقع ويب</option>
                                                </select>
                                            </div>
                                            <h4 class="invoice-title">مقدم الي</h4>
                                            <div class="input-group input-group-merge invoice-edit-input-group">
                                                <div class="input-group-text">
                                                    <i data-feather="hash"></i>
                                                </div>
                                                <input type="text" class="form-control" placeholder="arabic name" name="client_name_ar" value="{{ $contract->client_name_ar}}" required />
                                            </div>
                                            <div class="input-group input-group-merge invoice-edit-input-group mt-2">
                                                <div class="input-group-text">
                                                    <i data-feather="hash"></i>
                                                </div>
                                                <input type="text" class="form-control" placeholder="English name"  name="contract_client_name" value="{{ $contract->contract_client_name}}"  required />
                                            </div>
                                            <h4 class="invoice-title d-flex">دولة </h4>
                                            <div class="input-group input-group-merge invoice-edit-input-group mt-2">
                                                <div class="input-group-text">
                                                    <i data-feather="hash"></i>
                                                </div>
                                                <input type="text" class="form-control" placeholder="country name"  name="client_country" value="{{ $contract->client_country}}" required  />
                                            </div>
                                            <h4 class="invoice-title">مقدمة من</h4>
                                            <h4 class="invoice-title"><b>شركه سمارت تارجت للأستشارات الأداريه</b></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Header ends -->

                            <hr class="invoice-spacing" />

                            <!-- Address and Contact starts -->
                            <div class="card-body invoice-padding pt-0">
                                <div class="row row-bill-to invoice-spacing">
                                    <div class="col-xl-6 mb-lg-1 col-bill-to ps-0">
                                        <div>
                                            <h6 class="invoice-to-title"><u>1- Introduction:</u></h6>
                                            <p>
                                                This agreement (''agreement'') is entered this
                                            <div class="input-group input-group-merge invoice-edit-input-group ">
                                                <div class="input-group-text">
                                                    <i data-feather="hash"></i>
                                                </div>
                                                <input type="date" class="form-control" placeholder="date" name="agreement_date_en" value="{{ $contract->agreement_date_en}}"  required />
                                            </div>
                                            2022, (the ''Signing Date'') by and among:
                                            <ul>
                                                <li>Smart Target for Management & Marketing
                                                    Consultancies, (Hereinafter referred to as "1st Party'').
                                                    Sharq- Awadi Towers- Building#2, Floor #6, Office #3
                                                    And</li>
                                                <li>
                                                    <div class="input-group input-group-merge invoice-edit-input-group mt-2">
                                                        <div class="input-group-text">
                                                            <i data-feather="hash"></i>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="client name" name="introduced_to_en"  value="{{ $contract->introduced_to_en}}" required />
                                                    </div>, (Hereinafter referred to as "2nd Party'').
                                                    <div class="input-group input-group-merge invoice-edit-input-group mt-2" value="{{ $contract->client_name_ar}}" >
                                                        <div class="input-group-text">
                                                            <i data-feather="hash"></i>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="address" name="client_address_en"  value="{{ $contract->client_address_en}}" required />
                                                    </div>
                                                    <br><br>

                                                    The 2nd Party accepts to assign the 1st Party's services
                                                    according to the scope of work enclosed in terms of
                                                    this agreement.
                                                </li>
                                            </ul>

                                            </p>
                                        </div>
                                        <div class="card-body invoice-padding invoice-product-details">
                                            <h6 class="invoice-to-title"><u>2- Professional Fees:</u></h6>
                                            <div class="card">
                                                <div class="card-header">
                                                Services
                                                </div>
                                        
                                                <div class="card-body">
                                                    <table class="table" id="service_english_table">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th></th> <th></th> <th></th> <th></th>
                                                                <th>Cost</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach (old('service_name_en', $contract->workdomain_fees->count() ? $contract->workdomain_fees : ['']) as $contract_workdomain_fees)
                                                            <tr id="serviceen{{ $loop->index }}">
                                                           
                                                                <input class="tt"  type="hidden" name="id[]" value="{{ $contract_workdomain_fees->id}}"/>


                                                            <td class="ptr">{{ $contract_workdomain_fees->id}}
                                                              <input type="text" name="service_name_en[]" class="form-control"  value="{{  $contract_workdomain_fees->service_name_en }}"    required />
                                                            </td>
    
                                                            <td>                                                                 
                                                            <input type="number" class="form-control" placeholder="24" name="service_cost_en[]"  value="{{ $contract_workdomain_fees->service_cost_en  }}"   required  />
                                                            </td>
    
                                                            <td>
                                                            <textarea type="text" class="form-control mt-2" rows="4" name="service_desc_en[]"   placeholder="text"  value="{{ $contract_workdomain_fees->service_desc_en }}"  required >{{ $contract_workdomain_fees->service_desc_en }}</textarea>
                                                               </td>
                                                               {{-- <td>
                                                                 <button id="sid{{ $contract_workdomain_fees->id }}" onclick ="deleteservice({{ $contract_workdomain_fees->id }})" class=" btn btn-danger">- Delete service</button></td>
                                                             --}}
                                                             {{-- <a style="color:black" href="{{ route('workdomain_fees.delete', ['id' => $contract_workdomain_fees->id]) }}">
                                                                delete
                                                            </a> --}}

                                                            <td>

                                                                <form action="{{  route('workdomain_fees.destroy',$contract_workdomain_fees->id)}}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit">Delete</button>
                                                                  </form>
                                                            </td>
                                                            </tr>
                                                            @endforeach
                                                            <tr id="serviceen{{ count(old('service_name_en', $contract->workdomain_fees->count() ? $contract->workdomain_fees :  [''])) }}"> <input class="tt"  type="hidden" name="id[]" value=""/></tr>











                                                        </tbody>
                                                    </table>
                                        
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button id="add_row_en" class="btn btn-default pull-left">+ Add Row</button>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>
                                                    Monthly payment paid within 5 days of submitting the
                                                    invoices in Advance for social media
                                                </li>
                                                <li>
                                                    Two weeks of 1st month will be offline for creative &
                                                    plan preparation for social media
                                                </li>
                                                <li>
                                                    Sponsored ads are not included
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h6 class="invoice-to-title"><u>3- Payment Mode:</u></h6>
                                            <p>
                                                Our professional fees described in point (2) above will be
                                                payable In Advance, by cheque or wired transfer.<br>

                                                SMART TARGET FOR MANAGEMENT CONSULTANCIES CO
                                                IBAN: KW31NBOK0000000000002019232310
                                                Account Number: 2019232310
                                                Bank name: NBK
                                            </p>
                                        </div>


                                        <div>
                                            <h6 class="invoice-to-title"><u>4- Liabilities:</u></h6>
                                            <p>
                                                Smart Target responsibility is promoting the product as per
                                                scope of work, any materials; legal issues related to the
                                                product is under second party liabilities.
                                            </p>
                                        </div>

                                        <div>
                                            <h6 class="invoice-to-title"><u>5- Termination / Renewing:</u></h6>
                                            <p>
                                            <div class="input-group input-group-merge invoice-edit-input-group mt-2">
                                                <div class="input-group-text">
                                                    <i data-feather="hash"></i>
                                                </div>
                                                <input type="text" class="form-control" placeholder="duration" name="duration"  value="{{ $contract->duration }}"  required />
                                            </div>, starts from the
                                            signing date, and it expires at the end of its duration and
                                            is not renewed except with the agreement of the two
                                            parties in writing according to what the two parties
                                            deem appropriate for them, and either party has the right
                                            to terminate before the end of the term, provided
                                            that notification is given in writing or an official email
                                            30 working days before the end of the term. The desire
                                            of either party to cancel the contract. The amounts received
                                            for the completed works are non- refundable.
                                            </p>
                                        </div>
                                        <div>
                                            <h6 class="invoice-to-title"><u>6- Agreement to the Terms:</u></h6>
                                            <p>
                                                The second party hereby confirms that the first party is
                                                authorized to carry out this engagement in accordance with
                                                the terms set out above.
                                            </p>
                                        </div>
                                    </div>
                                    <div style="direction: rtl" class="col-xl-6 mb-lg-1 col-bill-to ps-0">
                                        <div>
                                            <h6 class="invoice-to-title"><u>1- مقدمة:</u></h6>
                                            <p>
                                                أبرمت هذه الاتفاقية ويرمز لها ('' الاتفاق'') في يوم
                                            <div class="input-group input-group-merge invoice-edit-input-group ">

                                                <input type="date" class="form-control" placeholder="date" name="agreement_date_ar" value="{{ $contract->agreement_date_ar}}"  required  />
                                            </div>
                                            2022, بين:
                                            <ul>
                                                <li>
                                                    شركة سمارت تارجت للاستشارات الإدارية،(ويشار إليه فيما بعد ب
                                                    "الطرف الاول)، شرق، شارع احمد الجابر، ابراج عبدالله العوضي،
                                                    مبنى رقم2، الدور6.مكتب 3#
                                                </li>
                                                <li>
                                                    <div class="input-group input-group-merge invoice-edit-input-group mt-2">

                                                        <input type="text" class="form-control" placeholder="client name" name="introduced_to_ar" value="{{ $contract->introduced_to_ar}}"  required />

                                                    </div>(المشار إليه فيما بعدب'' الطرف الثاني/العميل)،
                                                    <div class="input-group input-group-merge invoice-edit-input-group mt-2">

                                                        <input type="text" class="form-control" placeholder="address" name="client_address_ar" value="{{ $contract->client_address_ar}}"  required />
                                                    </div>
                                                    <br><br>

                                                    الطرف الثاني يرغب بالاستعانة بالطرف الأول لأداء مجموعة خدمات
                                                    بحيث يخضع لنطاق العمل المغلقة ضمن بنود هذا الاتفاق
                                                </li>
                                            </ul>

                                            </p>
                                        </div>
                                        <div class="card-body invoice-padding invoice-product-details">
                                            <h6 class="invoice-to-title"><u>2- نطاق العمل:</u></h6>
                                            <div class="card">
                                                <div class="card-header">
                                                    الخدمات
                                                </div>
                                        
                                                <div class="card-body">
                                                    <table class="table" id="service_arabic_table">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th></th> <th></th> <th></th> <th></th>
                                                                <th>Cost</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @foreach (old('service_name_ar', $contract->workdomain_fees->count() ? $contract->workdomain_fees : ['']) as $contract_workdomain_fees)
                                                            <tr id="servicear{{ $loop->index }}">
    
                                                            <td>
                                                              <input type="text" name="service_name_ar[]" class="form-control"  value="{{ $contract_workdomain_fees->service_name_ar }}"    required />
                                                            </td>
    
                                                            <td>                                                                 
                                                            <input type="number" class="form-control" placeholder="24" name="service_cost_ar[]"  value="{{ $contract_workdomain_fees->service_cost_ar}}"    required  />
                                                            </td>
    
                                                            <td>
                                                            <textarea class="form-control mt-2" rows="4" name="service_desc_ar[]" value="{{ $contract_workdomain_fees->service_desc_ar}}"  required >{{ $contract_workdomain_fees->service_desc_ar}}</textarea>
                                                               </td>
                                                            </tr>
                                                            @endforeach
                                                            <tr id="servicear{{ count(old('service_name_ar', $contract->workdomain_fees->count() ? $contract->workdomain_fees :  [''])) }}"></tr>







                                                        </tbody>
                                                    </table>
                                        
                                                    {{-- <div class="row">
                                                        <div class="col-md-12">
                                                            <button id="add_row_ar" class="btn btn-default pull-left">+ Add Row</button>
                                                            <button id='delete_row_ar' class="pull-right btn btn-danger">- Delete Row</button>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>

                                            <ul>
                                                <li>
                                                    الدفعاتالشهريةمستحقة خلال5ايام من تاريخ استلام الفواتيرمقدم
                                                </li>
                                                <li>
                                                    يتم احتساب اول اسبوعين من الشهر الاول تحضير واعداد التصاميم
                                                    والخطةالخاصة بالسوشل ميديالبدء العمل
                                                </li>
                                                <li>
                                                    السعر أعلاه لا يتضمن حملاتالإعلانات المدفوعة "سبونسر أد".
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h6 class="invoice-to-title"><u>3- طريقة الدفع:</u></h6>
                                            <p>
                                                الأتعاب المهنيةالتي تموصفها في البند أعلاه، تكون مستحقة الدفع مقدما عن
                                                طريق شيك او تحويل بنكي<br>

                                                SMART TARGET FOR MANAGEMENT CONSULTANCIES CO
                                                IBAN: KW31NBOK0000000000002019232310
                                                Account Number: 2019232310
                                                Bank name: NBK
                                            </p>
                                        </div>


                                        <div>
                                            <h6 class="invoice-to-title"><u>4- نطاق المسؤولية:</u></h6>
                                            <p>
                                                يقر الطرف الثاني بالمسؤولية التامة عن المنتج او الخدمة التي مراد تسويقها
                                                والطرف الأول غير مسؤولا بأي حال من الاحوال عن الموافقات او
                                                التراخيص الخاصة بالمنتج او الخدمة.
                                            </p>
                                        </div>

                                        <div>
                                            <h6 class="invoice-to-title"><u>5- مدة العقد:</u></h6>
                                            <p>
                                            <div class="input-group input-group-merge invoice-edit-input-group mt-2">

                                                <input type="text" class="form-control" placeholder="duration" name="duration_ar"  value="{{ $contract->duration_ar}}"   />
                                            </div>, وينتهي بانتهاء مدته ولا يجدد
                                            إلا باتفاق الطرفين كتابة بذلك وفق مايراه الطرفان مناسبا ً لهما ويحق لاى من
                                            الطرفين الانهاء قبل نهاية المدة شريطة الاخطار بكتاب خطى او ايميل رسمى
                                            قبل 30 يوم عمل من نهاية المدة.وفي حال الرغبة اي من الطرفينفي الغاء
                                            العقد المبالغ التي تم استلامهاعن الاعمال المنجزة تكون غير مرتجعة
                                            </p>
                                        </div>
                                        <div>
                                            <h6 class="invoice-to-title"><u>6- الاتفاق على الشروط:</u></h6>
                                            <p>
                                                الطرف الثاني بموجب هذا يؤكد أن الأول المخول للقيام بهذه المشاركة كما
                                                يؤكد الطرف الأول القيام بهذه المشاركة وفقا للشروط المبينة أعلاه.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="invoice-spacing mt-0" />

                            <div class="card-body invoice-padding py-0">
                                <!-- Invoice Note starts -->
                                <div class="row">
                                    <div style="direction: rtl" class="col-6">
                                        <div class="mb-2">
                                            <h2 class="fw-bold d-flex">الطرف الثاني : &nbsp;<input style="width: 65%" type="text" class="form-control" placeholder="data" name="sign_second_party"  value="{{ $contract->sign_second_party}}" required /></h2>
                                            <h2 class="fw-bold">التوقيع : ........................................................</h2>
                                            <h2 class="fw-bold d-flex">السيد : &nbsp;<input style="width: 65%" type="text" class="form-control" placeholder="data"  name="sign_second_party_mister" value="{{ $contract->sign_second_party_mister}}"  required /></h2>
                                            <h2 class="fw-bold">الصفة : ........................................................</h2>
                                            <h2 class="fw-bold d-flex">التاريخ: &nbsp;<input style="width: 65%" type="date" class="form-control" placeholder="data" name="contract_date_ar" value="{{ $contract->contract_date_ar}}"   required /></h2>
                                        </div>
                                    </div>
                                    <div style="direction: rtl" class="col-6">
                                        <div class="mb-2">
                                            <h2 class="fw-bold d-flex">الطرف الأول : شركة سمارت تارجت</h2>
                                            <h2 class="fw-bold">التوقيع والختم : ........................................................</h2>
                                            <h2 class="fw-bold d-flex">السيد : وضاح سلامه</h2>
                                            <h2 class="fw-bold">الصفة :المدير العام</h2>
                                            <h2 class="fw-bold d-flex">التاريخ: &nbsp;<input style="width: 65%" type="date" class="form-control" placeholder="data" name="contract_date_en"  value="{{ $contract->contract_date_en}}" required /></h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- Invoice Note ends -->
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Add Left ends -->

                    <!-- Invoice Add Right starts -->
                    <div class="col-xl-12 col-md-4 col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="contract-preview.html" class="btn btn-outline-primary w-100 mb-75">Preview</a>
                                <button type="submit" class="btn btn-outline-primary w-100">Save</button>
                            </div>
                        </div>
                    </div>
                    <!-- Invoice Add Right ends -->
                </form>
            </div>

        </section>

        </div>
    </div>
</div>
<!-- END: Content-->
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2022<a class="ms-25" href="#" target="_blank">Smart target</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{ asset ('app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset ('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
<script src="{{ asset ('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{ asset ('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset ('app-assets/js/core/app-menu.min.js')}}"></script>
<script src="{{ asset ('app-assets/js/core/app.min.js')}}"></script>
<script src="{{ asset ('app-assets/js/scripts/customizer.min.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset ('app-assets/js/scripts/pages/app-invoice.min.js')}}"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load',  function(){
        if (feather) {
            feather.replace({ width: 14, height: 14 });
        }
    })
</script>
</body>
<!-- END: Body-->


    <script>
      $(document).ready(function(){
        let row_number = {{  count(old('service_name_en', $contract->workdomain_fees->count() ? $contract->workdomain_fees : [''])) }};
        $("#add_row_en").click(function(e){
          e.preventDefault();
          let new_row_number = row_number - 1;
          let added_row=row_number+1;
          console.log(row_number)
        //   $('#hiddenid'+(row_number)).val('');
          $('#serviceen' + row_number).html($('#serviceen' + new_row_number).html()).find('td:first-child');
          $('#service_english_table').append('<tr id="serviceen' + (row_number + 1) + '"></tr>');
        //   $('#service_english_table').append('<input type="hidden" value='' name="id[]"   />');
          $("#serviceen"+row_number+" " +"input[type=hidden]").remove();

          $('<input  type="hidden"  value=""  name="id[]"   />').insertAfter('#serviceen' + added_row);
          $('#servicear' + row_number).html($('#servicear' + new_row_number).html()).find('td:first-child');
          $('#service_arabic_table').append('<tr id="servicear' + (row_number + 1) + '"></tr>');          
          row_number++;
 
        });
        $("#delete_row_en").click(function(e){
          e.preventDefault();
          if(row_number > 1){
            $("#serviceen" + (row_number - 1)).html('');
            row_number--;
          }
        });
      });
    </script>


{{-- 
    <script>
      $(document).ready(function(){
        let row_number = {{ count(old('service_name_ar', $contract->workdomain_fees->count() ? $contract->workdomain_fees : [''])) }};
        $("#add_row_ar").click(function(e){
          e.preventDefault();
          let new_row_number = row_number - 1;
          $('#servicear' + row_number).html($('#servicear' + new_row_number).html()).find('td:first-child');
          $('#service_arabic_table').append('<tr id="servicear' + (row_number + 1) + '"></tr>');
          row_number++;
        });
        $("#delete_row_ar").click(function(e){
          e.preventDefault();
          if(row_number > 1){
            $("#servicear" + (row_number - 1)).html('');
            row_number--;
          }

        });

        deleteservice
      });
    </script> --}}








<script>


    function deleteservice(id){

        
        $ajax({
               url:'/service/'+id,
               type:'DELETE',
               data:{
                   _token:$("input[name=token]").val
               },
               success:function(response){
                  $("#sid"+id).remove();
               }



        });
    }
</script>























        <script type='text/javascript'>
var itemsHoeveel = $('input').filter("[placeholder='Hoeveel']");
var itemsWat = $('input').filter("[placeholder='Van wat']");
itemsWat.each(function () {
    $('#result').append($(this).attr('name') + '<br>');
});
  $('#result').append('<hr>');
itemsHoeveel.each(function () {
    $('#result').append($(this).attr('name') + '<br>');
});
  </script>
   
</html>