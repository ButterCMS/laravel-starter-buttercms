<header class="header">
    <div class="navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="https://buttercms.com">
                            <img src="https://cdn.buttercms.com/PBral0NQGmmFzV0uG7Q6" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <div class="ms-auto">
                                @if (!isset($includeMenu) || $includeMenu === true)
                                    <x-menu />
                                @endif
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>