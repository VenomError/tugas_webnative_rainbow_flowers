<header class="ltn__header-area ltn__header-8 section-bg-6">

    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col logo-column">
                    <div class="site-logo">
                        <a href="/" style="color: #E55472;">Rainbow <b style="margin-left: 5px;"> Flowers</b></a>
                    </div>
                </div>
                <div class="col header-menu-column " style="margin-left: 30px;">
                    <div class="header-menu d-none d-xl-block">
                        <nav>
                            <div class="ltn__main-menu">
                                <ul>
                                    <li class="menu-icon"><a href="/">Home</a>

                                    </li>
                                    <li class="menu-icon"><a href="/product">Product</a>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col">
                    <div class="ltn__header-options">
                        <ul>

                            <li>
                                <div class="ltn__drop-menu user-menu">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icon-user"></i></a>
                                            <ul>
                                                <?php if (!isLogin()): ?>
                                                    <li><a href="/login">Login</a></li>
                                                    <li><a href="/register">Register</a></li>
                                                <?php else: ?>
                                                    <li><a href="/logout">Logout</a></li>

                                                <?php endif; ?>
                                            </ul>

                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->
</header>