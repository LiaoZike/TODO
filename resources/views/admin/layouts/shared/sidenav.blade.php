<div id="layoutSidenav_nav" >
    <nav class="sb-sidenav accordion sb-sidenav" id="sidenavAccordion" style="background-color: #111;">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link nav-hover-white" href="{{ route('admin.home.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    首頁
                </a>
                <a class="nav-link nav-hover-white" href="{{ route('admin.tasks.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fa-regular fa-file"></i>
                    </div>
                    工作紀錄管理
                </a>
                <a class="nav-link nav-hover-white" href="{{ route('admin.tasks.search.index') }}">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    工作紀錄查詢(後端)
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
