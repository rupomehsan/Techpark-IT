<template>
    <!-- header start -->
    <header class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <!-- Brand/Logo -->
            <a class="navbar-brand fw-bold text-primary d-flex align-items-center" href="/">
                <img src="/logo.png" alt="Dictionary Logo" class="logo-img me-2">
                <span class="brand-text">E ⇄ B Dictionary</span>
            </a>

            <!-- Mobile menu button -->
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav"
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/vocabulary">Vocabulary</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/vocabulary-test">Vocabulary Test</Link>
                    </li>
                   <li class="nav-item">
                       <Link class="nav-link" href="/login">Login</Link>
                   </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- header end -->
</template>

<script>

export default {
    data: () => ({
        is_home: true,
        search: "",
    }),

};
</script>

<style scoped>
.navbar-brand {
    font-size: 1.5rem;
}

.logo-img {
    height: 40px;
    width: auto;
}

.brand-text {
    white-space: nowrap;
}

@media (max-width: 768px) {
    .navbar-brand {
        font-size: 1.2rem;
    }
    
    .logo-img {
        height: 32px;
    }
    
    .brand-text {
        font-size: 1rem;
    }
}

@media (max-width: 576px) {
    .brand-text {
        display: none;
    }
    
    .logo-img {
        height: 36px;
    }
}

.nav-link {
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: var(--bs-primary) !important;
}
</style>
