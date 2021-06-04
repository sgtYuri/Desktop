<div style="height:88vh;" class="bg-primary d-flex flex-column flex-shrink-0 p-3 bg-dark">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <svg class="bi me-2" width="40" height="40"><use xlink:href="#bootstrap"></use></svg>
    <span class="fs-4 text-white">ECOM</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
     
    <li>
        <a href="/product" class=" text-white nav-link  @if($active=='product') active @endif">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
        <i class="fa fa-flag"></i>
        Product
        </a>
    </li>
    <li>
        <a href="categories" class=" text-white nav-link  @if($active=='categories') active @endif">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
        <i class="fa fa-list"></i>
        Categories
        </a>
    </li>
    <li>
        
        <a href="/orders" class=" text-white nav-link  @if($active=='orders') active @endif">
        <svg class="c-sidebar__link" width="16" height="16"><use xlink:href="#table"></use></svg>
        <i class="fa fa-chain-broken u-mr-xsmall"></i>
        Orders
        </a>
        </a>
    </li>
    <li>
        <a href="/customers" class=" text-white nav-link  @if($active=='customers') active @endif">
        <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
        <i class="fa fa-male"></i>
        Customers
        </a>
    </li>
    <li>
    </ul>
    <hr>
    <div class="product">
    <a href="/product" class=" text-white d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
    </ul>
    </div>
</div>
