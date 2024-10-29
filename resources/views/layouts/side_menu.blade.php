<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo" style="display: block;text-align: center;height: 100px">

        <a href="index.html" class="app-brand-link" style="margin-bottom: 10px">
        <span class="app-brand-logo demo" style="margin: auto">
          {{-- <img src="{{asset('assets/img/')}}" width="100%" height="100%"> --}}
        </span>
        </a>
        <p class="app-brand-text demo menu-text fw-bold">Rmoz</p>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>

    </div>


    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class=" menu-item {{ url()->current() == url("/") ? "active" : "" }} ">
            <a href="{{route('home') }}" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div >لوحة التحكم</div>
                {{-- <div class="badge bg-primary rounded-pill ms-auto">3</div> --}}
            </a>

            <!-- Layouts -->
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                <div data-i18n="Layouts">Layouts</div>
            </a>
        </li>
        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Apps &amp; Pages</span>
        </li>
        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="article">Articles</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-chat.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div data-i18n="Chat">Chat</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-calendar.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div data-i18n="Calendar">Calendar</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="app-kanban.html" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                <div data-i18n="Kanban">Kanban</div>
            </a>
        </li>
        <!-- e-commerce-app menu start -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-building-factory-2"></i>
                <div data-i18n="eCommerce">eCommerce</div>
            </a>
        </li> --}}
        <!-- e-commerce-app menu end -->
        <!-- Academy menu start -->

        <!-- Academy menu end -->

        {{-- <li class=" menu-item {{ url()->current() == url("/admins") ? "active" : "" }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div >المستخدمين</div>
            </a>
            <ul class="menu-sub">
            </ul>
        </li> --}}
                <li class="{{ url()->current() == url("/admins") ? "active" : "" }} menu-item">
                    <a href="{{ url('/admins') }}" class="menu-link">
                        <i class="menu-icon tf-icons ti ti-users"></i>
                        <div >قائمة المديرين</div>
                    </a>
                </li>



        <li class="{{ url()->current() == url("/abouts") ? "active" : "" }} menu-item">
            <a href="/abouts" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div >من نحن</div>
            </a>
        </li>
        <li class="{{ url()->current() == url("/phones") ? "active" : "" }} menu-item">
            <a href="/phones" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-phone"></i>
                <div >الاحصائيات</div>
            </a>
        </li>
        <li class="{{ url()->current() == url("/tels") ? "active" : "" }} menu-item">
            <a href="/tels" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-phone"></i>
                <div >ارقام التواصل</div>
            </a>
        </li>
        <li class="{{ url()->current() == url("/socials") ? "active" : "" }} menu-item">
            <a href="/socials" class=" menu-link ">
                <i class="menu-icon tf-icons ti  ti-hierarchy"></i>
                <div >السوشيال ميديا</div>
            </a>
        </li>
        <li class="{{ url()->current() == url("/services") ? "active" : "" }} menu-item">
            <a href="/services" class="menu-link ">
                <i class="menu-icon tf-icons ti  ti-building-factory-2"></i>
                <div >الخدمات</div>
            </a>
        </li>
        <li class=" {{ url()->current() == url("/projects") ? "active" : "" }} menu-item">
            <a href="/projects" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div >الاعمال</div>
            </a>
        </li>
        <li class="{{ url()->current() == url("/offers") ? "active" : "" }} menu-item">
            <a href="/offers" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-container-off"></i>
                <div >العروض</div>
            </a>
        </li>
        <li class="{{ url()->current() == url("/contacts") ? "active" : "" }} menu-item">
            <a href="/contacts" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-messages"></i>
                <div >تواصل معنا</div>
            </a>
        </li>
        <li class="{{ url()->current() == url("/ratings") ? "active" : "" }} menu-item">
            <a href="/ratings" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-star"></i>
                <div >التقيمات</div>
            </a>
        </li>
        <li class="{{ url()->current() == url("/emails") ? "active" : "" }} menu-item">
            <a href="/emails" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-users-group"></i>
                <div >العملاء</div>
            </a>
        </li>
        <li class="{{ url()->current() == url("/partenrs") ? "active" : "" }} menu-item">
            <a href="/partenrs" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-trophy"></i>
                <div >شركاء النجاح</div>
            </a>
        </li>
        <li class="{{ url()->current() == url("/goals") ? "active" : "" }}  menu-item">
            <a href="/goals" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-shield"></i>
                <div >الاهداف</div>
            </a>
        </li>
        <li class="{{ url()->current() == url("/privacys") ? "active" : "" }}  menu-item">
            <a href="/privacys" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-shield"></i>
                <div >سياسة الخصوصية</div>
            </a>
        </li>
        <li class="{{ url()->current() == url("/conditions") ? "active" : "" }} menu-item">
            <a href="/conditions" class="menu-link ">
                <i class="menu-icon tf-icons ti ti-container-off"></i>
                <div >الشروط والاحكام</div>
            </a>
        </li>
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-layout-grid"></i>
                <div data-i18n="Datatables">Datatables</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="tables-datatables-basic.html" class="menu-link">
                        <div data-i18n="Basic">Basic</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="tables-datatables-advanced.html" class="menu-link">
                        <div data-i18n="Advanced">Advanced</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="tables-datatables-extensions.html" class="menu-link">
                        <div data-i18n="Extensions">Extensions</div>
                    </a>
                </li>
            </ul>
        </li> --}}

    </ul>
</aside>
