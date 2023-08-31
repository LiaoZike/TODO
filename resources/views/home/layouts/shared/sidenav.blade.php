<div id="layoutSidenav_nav" >
    <nav class="sb-sidenav accordion sb-sidenav" id="sidenavAccordion" style="background-color: #111;">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link nav-hover-white" href="{{ route('home.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    首頁
                </a>
                <a class="nav-link nav-hover-white" href="{{ route('admin.login') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    [管理人員介面]
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer" style="background-color: #333;color:#FFF">
            <div class="small">登入人員：</div>
            ...你好
        </div>
    </nav>
    <style>
        .nav-hover-white{
            color: white;
        }
        .nav-hover-white:hover{
            background-color: white !important;
            color:black;
            border-right:2px greenyellow solid;
        }
    </style>
</div>
