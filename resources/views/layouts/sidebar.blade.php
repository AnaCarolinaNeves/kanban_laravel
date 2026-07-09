<nav class="sidebar bg-white border-end d-flex flex-column p-3">

    {{-- Logo --}}
    <div class="mb-5">
        <h4 class="fw-bold d-flex align-items-center gap-2 mb-0">
            <i class="bi bi-kanban"></i>
            <span>Kanban</span>
        </h4>
    </div>

    {{-- Menu --}}
    <div class="d-flex flex-column gap-1">

        <a href="{{ route('dashboard') }}"
           class="nav-link d-flex align-items-center gap-3 rounded px-3 py-2 active">
            <i class="bi bi-house"></i>
            <span>Dashboard</span>
        </a>

        <a href="#"
           class="nav-link d-flex align-items-center gap-3 rounded px-3 py-2 text-dark">
            <i class="bi bi-kanban"></i>
            <span>Meus Quadros</span>
        </a>

        <a href="#"
           class="nav-link d-flex align-items-center gap-3 rounded px-3 py-2 text-dark">
            <i class="bi bi-clock-history"></i>
            <span>Atividades</span>
        </a>

        <a href="#"
           class="nav-link d-flex align-items-center gap-3 rounded px-3 py-2 text-dark">
            <i class="bi bi-calendar3"></i>
            <span>Calendário</span>
        </a>

    </div>

    {{-- Workspaces --}}
    <div class="mt-5">

        <div class="d-flex justify-content-between align-items-center mb-2">

            <small class="text-uppercase text-secondary fw-semibold">
                Workspaces
            </small>

            <button class="btn btn-light btn-sm rounded">
                <i class="bi bi-plus"></i>
            </button>

        </div>

        <div class="d-flex flex-column gap-1">

            <a href="#"
               class="text-decoration-none text-dark rounded px-3 py-2 d-flex align-items-center gap-3">

                <i class="bi bi-building"></i>

                <span>Minha Empresa</span>

            </a>

            <a href="#"
               class="text-decoration-none text-dark rounded px-3 py-2 d-flex align-items-center gap-3">

                <i class="bi bi-person"></i>

                <span>Pessoal</span>

            </a>

        </div>

    </div>

    {{-- Projetos --}}
    <div class="mt-5">

        <div class="d-flex justify-content-between align-items-center mb-2">

            <small class="text-uppercase text-secondary fw-semibold">
                Projetos
            </small>

            <button class="btn btn-light btn-sm rounded">
                <i class="bi bi-plus"></i>
            </button>

        </div>

        <div class="d-flex flex-column gap-1">

            <a href="#"
               class="text-decoration-none text-dark rounded px-3 py-2 d-flex align-items-center gap-3">

                <i class="bi bi-globe"></i>

                <span>Website</span>

            </a>

            <a href="#"
               class="text-decoration-none text-dark rounded px-3 py-2 d-flex align-items-center gap-3">

                <i class="bi bi-phone"></i>

                <span>App Mobile</span>

            </a>

            <a href="#"
               class="text-decoration-none text-dark rounded px-3 py-2 d-flex align-items-center gap-3">

                <i class="bi bi-server"></i>

                <span>API Backend</span>

            </a>

        </div>

    </div>

</nav>