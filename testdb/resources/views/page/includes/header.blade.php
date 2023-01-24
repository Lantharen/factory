

    <div class="container mb-5">

        <div class="row pt-xl-2 align-items-xl-center">

            <!-- Logo -->
            <div class="col-xl-auto">
                <a href="{{ route('products.index') }}">
                    <img src="{{ asset('images/logo2t.png') }}" alt="Logo">
                </a>
            </div>

            <!-- City Dropdown -->
            <div class="col-xl-auto">
                <div class="dropdown px-xl-3">
                    <button class="btn btn-sm btn-outline-primary bg-light text-dark fw-bold dropdown-toggle"
                        type="button"
                        id="cityDropdown"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Дніпро
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="cityDropdown">
                        <li><a class="dropdown-item fw-bold" href="#">Дніпро</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Київ</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Вінниця</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Запорожье</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Одеса</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Миколаїв</a></li>
                    </ul>
                </div>
            </div>

            <!-- Additional Menu -->
            <div class="col-xl">
                <ul class="list-inline mb-xl-0 text-center text-dark">
                    <li class="list-inline-item small">
                        <a href="#" class="btn btn-sm border-0">Магазини</a>
                    </li>
                    <li class="list-inline-item small">
                        <div class="dropdown">
                            <button class="btn btn-sm border-0 dropdown-toggle"
                                type="button"
                                id="loyaltyDropdown"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Програма лояльності
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="loyaltyDropdown">
                                <li><a class="dropdown-item" href="#">Про програму лояльності</a></li>
                                <li><a class="dropdown-item" href="#">Подарункові сертифікати</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-inline-item small">
                        <div class="dropdown">
                            <button class="btn btn-sm border-0 dropdown-toggle"
                                type="button"
                                id="clientDropdown"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Клієнтам
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="clientDropdown">
                                <li><a class="dropdown-item" href="#">Уціненні товари</a></li>
                                <li><a class="dropdown-item" href="#">Доставка та оплата</a></li>
                                <li><a class="dropdown-item" href="#">Brain Блог</a></li>
                                <li><a class="dropdown-item" href="#">Публічна омерта</a></li>
                                <li><a class="dropdown-item" href="#">Контакти</a></li>
                                <li><a class="dropdown-item" href="#">Всі бренди</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-inline-item small">
                        <div class="dropdown">
                            <button class="btn btn-sm border-0 dropdown-toggle"
                                type="button"
                                id="serviceDropdown"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Сервіс
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="serviceDropdown">
                                <li><a class="dropdown-item" href="#">Сервісні центри</a></li>
                                <li><a class="dropdown-item" href="#">Сервіс і гарантія</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-inline-item small">
                        <a href="#" class="btn btn-sm border-0 text-danger">Акції</a>
                    </li>
                </ul>
            </div>

            <!-- Auth Buttons -->
            <div class="col-xl-auto">
                <button class="btn btn-sm btn-light">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Увійти
                </button>
            </div>

        </div>

        <div class="row pt-xl-2 align-items-xl-center">

            <!-- Catalog Button-->
            <div class="col-xl-3">
                <button class="e--btn-catalog d-flex w-100 justify-content-center align-items-center btn btn-primary text-uppercase">
                    <i class="bi bi-list"></i>
                    Каталог товарів
                </button>
            </div>

            <!-- Search Form -->
            <div class="col-xl">
                <form action="/">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Знайти..."
                            aria-describedby="btn-search-addon">
                        <button class="btn btn-outline-secondary" type="button" id="btn-search-addon">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- User Buttons -->
            <div class="col-xl-auto">
                <button type="button" class="position-relative btn btn-outline-dark border-0">
                    <i class="bi bi-heart-fill"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                </button>
                <button type="button" class="position-relative mx-4 btn btn-outline-dark border-0">
                    <i class="bi bi-arrow-left-right"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                </button>
                <button type="button" class="position-relative btn btn-outline-dark border-0">
                    <i class="bi bi-cart-fill"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
                </button>
            </div>
        </div>
    </div>
