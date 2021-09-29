<div class="action-profile">
    <div class="profile" onclick="menuToggle();">
        <img src="<?php echo e($profile); ?>" alt="">
    </div>
    <div class="menu-profile">
        <div class="identity">
            <img class="img-profile" src="<?php echo e($profile); ?>" alt="">
            <h1><?php echo e($nama); ?></h1>
            <h2><?php echo e($email); ?></h2>
        </div>
        <ul class="main-profile">
            <li>
                <span class="icon-profile"><ion-icon name="call-outline"></ion-icon></ion-icon></span>
                <span class="tittle-profile"><?php echo e($telepon); ?></span>
            </li>
            <li>
                <span class="icon-profile"><ion-icon name="book-outline"></ion-icon></ion-icon></span>
                <span class="tittle-profile"><?php echo e($job); ?></span>
            </li>
        </ul>
    </div>
</div>
<script>
    function menuToggle(){
        const toggleMenu = document.querySelector('.menu-profile');
        toggleMenu.classList.toggle('active')
    }
</script><?php /**PATH D:\apk\coba-app\resources\views/partial/profile.blade.php ENDPATH**/ ?>