<li class="nav-item @if($conName[1] == 'dashboard') active @endif">
    <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span>
    </a>
</li>
<!-- Slider Section -->
<li class="nav-item @if($conName[1] == 'slider') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSlider" aria-expanded="true" aria-controls="collapseSlider">
        <i class="fas fa-cubes"></i>
        <span>Slider</span>
    </a>
    <div id="collapseSlider" class="collapse @if($conName[1] == 'slider') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.slider.index') }}">Slider index</a>
            <a class="collapse-item" href="{{ route('admin.slider.create') }}">Slider create</a>
        </div>
    </div>
</li>
<!-- Notice Section -->
<li class="nav-item @if($conName[1] == 'notice') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNotice" aria-expanded="true" aria-controls="collapseNotice">
        <i class="fas fa-cubes"></i>
        <span>Notice</span>
    </a>
    <div id="collapseNotice" class="collapse @if($conName[1] == 'notice') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.notice.index') }}">Notice index</a>
            <a class="collapse-item" href="{{ route('admin.notice.create') }}">Notice create</a>
        </div>
    </div>
</li>
<!-- Foreign Student Section -->
<li class="nav-item @if($conName[1] == 'foreign-student') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForeignStudent" aria-expanded="true" aria-controls="collapseForeignStudent">
        <i class="fas fa-cubes"></i>
        <span>Foreign Student</span>
    </a>
    <div id="collapseForeignStudent" class="collapse @if($conName[1] == 'foreign-student') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.foreign_student.index') }}">Foreign student index</a>
            <a class="collapse-item" href="{{ route('admin.foreign_student.create') }}">Foreign student create</a>
        </div>
    </div>
</li>
<!-- Website Section -->
<li class="nav-item @if($conName[1] == 'faq' || $conName[1] == 'social-media') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseWebsite" aria-expanded="true" aria-controls="collapseWebsite">
        <i class="fas fa-globe-europe"></i>
        <span>Website Section</span>
    </a>
    <div id="collapseWebsite" class="collapse @if($conName[1] == 'faq' || $conName[1] == 'social-media' || $conName[1] == 'chairman') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.faq.index') }}">FAQ</a>
            <a class="collapse-item" href="{{ route('admin.social_media.index') }}">Social Media</a>
            <a class="collapse-item" href="{{ route('admin.chairman.index') }}">Chairman</a>
        </div>
    </div>
</li>

<!-- General Settings -->
<li class="nav-item @if($conName[1] == 'setting' && $conName[2] == 'general') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="true" aria-controls="collapseSetting">
        <i class="fas fa-cog"></i>
        <span>General Settings</span>
    </a>
    <div id="collapseSetting" class="collapse @if($conName[1] == 'setting' && $conName[2] == 'general') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item @if($conName[3] == 'logo') active @endif" href="{{ route('admin.general_setting.logo') }}">Logo</a>
            <a class="collapse-item @if($conName[3] == 'favicon') active @endif" href="{{ route('admin.general_setting.favicon') }}">Favicon</a>
            <a class="collapse-item @if($conName[3] == 'loginbg') active @endif" href="{{ route('admin.general_setting.loginbg') }}">Login Background</a>
            <a class="collapse-item @if($conName[3] == 'topbar') active @endif" href="{{ route('admin.general_setting.topbar') }}">Top Bar</a>
            <a class="collapse-item @if($conName[3] == 'banner') active @endif" href="{{ route('admin.general_setting.banner') }}">Banner</a>
            <a class="collapse-item @if($conName[3] == 'footer') active @endif" href="{{ route('admin.general_setting.footer') }}">Footer</a>
            <a class="collapse-item @if($conName[3] == 'sidebar') active @endif" href="{{ route('admin.general_setting.sidebar') }}">Sidebar</a>
            <a class="collapse-item @if($conName[3] == 'color') active @endif" href="{{ route('admin.general_setting.color') }}">Color</a>
            <a class="collapse-item @if($conName[3] == 'preloader') active @endif" href="{{ route('admin.general_setting.preloader') }}">Preloader</a>
            <a class="collapse-item @if($conName[3] == 'googleanalytic') active @endif" href="{{ route('admin.general_setting.googleanalytic') }}">Google Analytic</a>
            <a class="collapse-item @if($conName[3] == 'googlerecaptcha') active @endif" href="{{ route('admin.general_setting.googlerecaptcha') }}">Google Recaptcha</a>
            <a class="collapse-item @if($conName[3] == 'tawklivechat') active @endif" href="{{ route('admin.general_setting.tawklivechat') }}">Tawk Live Chat</a>
            <a class="collapse-item @if($conName[3] == 'cookieconsent') active @endif" href="{{ route('admin.general_setting.cookieconsent') }}">Cookie Consent</a>
            <a class="collapse-item @if($conName[3] == 'layout') active @endif" href="{{ route('admin.general_setting.layout') }}">Layout</a>
        </div>
    </div>
</li>

<!-- Payment Settings -->
<li class="nav-item @if($conName[1] == 'payment' || $conName[1] == 'currency') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePayment" aria-expanded="true" aria-controls="collapsePayment">
        <i class="fas fa-file-invoice-dollar"></i>
        <span>Payment Settings</span>
    </a>
    <div id="collapsePayment" class="collapse @if($conName[1] == 'payment' || $conName[1] == 'currency') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.payment') }}">Payment Information</a>
            <a class="collapse-item" href="{{ route('admin.currency') }}">Currency Setup</a>
        </div>
    </div>
</li>



<!-- Blog Section -->
<li class="nav-item @if($conName[1] == 'category' || $conName[1] == 'blog') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true" aria-controls="collapseBlog">
        <i class="fas fa-cubes"></i>
        <span>Blog Section</span>
    </a>
    <div id="collapseBlog" class="collapse @if($conName[1] == 'category' || $conName[1] == 'blog') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.category.index') }}">Categories</a>
            <a class="collapse-item" href="{{ route('admin.blog.index') }}">Blogs</a>
        </div>
    </div>
</li>


<!-- Dynamic Pages -->
<li class="nav-item @if($conName[1] == 'dynamic-page') active @endif">
    <a class="nav-link" href="{{ route('admin.dynamic_page.index') }}">
        <i class="fas fa-cube"></i>
        <span>Dynamic Pages</span>
    </a>
</li>


<!-- Language -->
<li class="nav-item @if($conName[1] == 'language') active @endif">
    <a class="nav-link" href="{{ route('admin.language.index') }}">
        <i class="fas fa-globe"></i>
        <span>Language</span>
    </a>
</li>


<!-- Email Template -->
<li class="nav-item @if($conName[1] == 'email-template') active @endif">
    <a class="nav-link" href="{{ route('admin.email_template.index') }}">
        <i class="fas fa-envelope"></i>
        <span>Email Template</span>
    </a>
</li>

<!-- Subscriber -->
<li class="nav-item @if($conName[1] == 'subscriber') active @endif">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubscriber" aria-expanded="true" aria-controls="collapseSubscriber">
        <i class="fas fa-share-alt-square"></i>
        <span>Subscriber</span>
    </a>
    <div id="collapseSubscriber" class="collapse @if($conName[1] == 'subscriber') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('admin.subscriber.index') }}">All Subscribers</a>
            <a class="collapse-item" href="{{ route('admin.subscriber.send_email') }}">Send Email to Subscribers</a>
        </div>
    </div>
</li>
