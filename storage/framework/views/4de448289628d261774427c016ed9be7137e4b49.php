    
    
    <nav class="navbar">
        <ul class="navbar-nav">

            <li class="nav-logo border">
                <a class="logo-link" href="">
                    <!-- <span class="logo">BONBON</span> -->
                    <img class="bonbon" src="img/a.png" alt="">
                    <span class="logo-tittle"><img class="bobon2" src="img/text.jpg" alt=""></span>
                    
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo e(($tittle === 'Dashboard') ? 'point' : ''); ?>" href="/dashboard">
                    <span class="nav-icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="nav-tittle">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo e(($tittle === 'Supplier') ? 'point' : ''); ?>" href="/supplier">
                    <span class="nav-icon"><ion-icon name="storefront-outline"></ion-icon></span>
                    <span class="nav-tittle">Supplier</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo e(($tittle === 'Karyawan') ? 'point' : ''); ?>" href="/karyawan">
                    <span class="nav-icon"><ion-icon name="man-outline"></ion-icon></span>
                    <span class="nav-tittle">Karyawan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo e(($tittle === 'Tanaman') ? 'point' : ''); ?>" href="/tanaman">
                    <span class="nav-icon"><ion-icon name="leaf-outline"></ion-icon></span>
                    <span class="nav-tittle">Tanaman</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <span class="nav-icon"><ion-icon name="cash-outline"></ion-icon></span>
                    <span class="nav-tittle">Transaksi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <span class="nav-icon"><ion-icon name="bag-check-outline"></ion-icon></span>
                    <span class="nav-tittle">Quality Check</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <span class="nav-icon"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span class="nav-tittle">Log Out</span>
                </a>
            </li>

        </ul>     
    </nav><?php /**PATH D:\apk\coba-app\resources\views/partial/navbar.blade.php ENDPATH**/ ?>