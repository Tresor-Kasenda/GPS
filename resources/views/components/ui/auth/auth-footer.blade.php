<div {{ $attributes->class(['nk-footer nk-auth-footer-full']) }}>
    <div class="container wide-lg">
        <div class="row g-3">
            <div class="col-lg-6 order-lg-last">
                <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Terms & Condition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Help</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="nk-block-content text-center text-lg-start">
                    <p class="text-soft">&copy; {{ now()->format('Y') }} GRH Soft. by MylkoSOFT.</p>
                </div>
            </div>
        </div>
    </div>
</div>