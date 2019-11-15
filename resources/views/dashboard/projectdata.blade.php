<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>الخدمات الإلكترونية - هيئة تشجيع الإستثمار الفلسطينية</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="{{asset('dashboard')}}/main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                          </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="{{asset('dashboard')}}/assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">الملف الشخصي</button>
                                            <a href="{{ url('/logout') }}"> <button type="button" tabindex="0" class="dropdown-item">تسجيل الخروج</button></a>

                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        اسم المستخدم
                                    </div>
                                    <div class="widget-subheading">
                                        بيانات الملف الشخصي
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div> 
                <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">IPA</li>
                                <li>
                                    <a href="/" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        الصفحة الرئيسية
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">البيانات المطلوبة</li>
                                <li
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                >
                                    <a href="/person/create">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        البيانات الشخصية
                                        <i class="metismenu-state-icon  caret-left"></i>
                                    </a>
                               
                                    
                                    
                                </li>
                                <li
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                >
                                    <a href="/qualy/create">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        المؤهلات والخبرات
                                        <i class="metismenu-state-icon  caret-left"></i>
                                    </a>
                                    
                                    
                                    
                                    
                                </li>
                                
                                
                                <li class="app-sidebar__heading">بيانات المشروع</li>
                                <li>
                                    <a href="/project/create">
                                        <i class="metismenu-icon pe-7s-mouse">
                                        </i>بيانات المشروع
                                    </a>
                                </li>
                                <li>
                                    <a href="/study/create">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>دراسة الجدوى
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>      <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div>بيانات المشروع 
                                        <div class="page-title-subheading">المعلومات الأساسية عن المشروع
                                        </div>
                                    </div>
                                </div>
                                 </div>
                        </div>            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                    <span>بيانات المشروع</span>
                                </a>
                            </li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">البيانات المطلوبة</h5>
                                         @include('includes.message')
                                        <form method="post" action="{{route('project.store')}}" class="">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="اسم المشروع" class="">اسم المشروع</label><input name="projectName" id="" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="مجال المشروع" class="">مجال العمل</label><input name="projectField" id="" type="text"  class="form-control"></div>                                                                                                     
                                                </div>
                                                      <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="نوع المشروع" class="">نوع المشروع</label><input name="projectType" id="" type="text" class="form-control"></div>                                                                                                     
                                                </div>
                                            </div>
                                            
                                            <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="عنوان المشروع" class="">عنوان المشروع</label><input name="projectTitle" id="" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="فكرة عامة عن المشروع" class="">فكرة عامة عن المشروع</label><input name="projectDetails" id="" type="text" class="form-control"></div>
                                                </div>
                                                       <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="مهارات خاصة في المشروع" class="">مهارات خاصة في المشروع</label><input name="projectNeeds" id="" type="text" class="form-control"></div>
                                                </div>
                                            </div>
                                                     <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="سبب اختيار المشروع" class="">سبب اختيار المشروع</label><input name="projectReason" id="" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="حالة المشروع" class="">حالة المشروع</label><input name="projetStatus" id="" type="text" class="form-control"></div>
                                                </div>
                                                       <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="عدد المعالين" class="">عدد المعالين</label><input name="projectNoPerson" id="" type="number" class="form-control"></div>
                                                </div>
                                            </div>
                                                     <div class="form-row">
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="تاريخ بدء العمل" class="">تاريخ بدء العمل</label><input name="projectStartDate" id="" type="date" class="form-control"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="رأسمال المشروع" class="">رأسمال المشروع</label><input name="projectCost" id="" type="number" class="form-control"></div>
                                                </div>
                                                       <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="قيمة الموجودات" class="">قيمة الموجودات</label><input name="projectThingsCost" id="" type="number" class="form-control"></div>
                                                </div>
                                            </div>
                                            <button type="submit" class="mt-2 btn btn-primary" >حفظ</button>
                                        </form>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                

                            </div>
                            </div>
                        </div>
                            
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">

                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                              
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>   </div>
        </div>
    </div>
<script type="text/javascript" src="{{asset('dashboard')}}/assets/scripts/main.js"></script></body>
</html>
