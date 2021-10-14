<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="{{route('homepage')}}" class="simple-text logo-normal">
        Fashion
    </a></div>
    <div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item active  ">
            <a class="nav-link" href="{{route('homepage')}}">
                <i class="material-icons">dashboard</i>
                <p>Home</p>
            </a>
        </li>

        <li class="nav-item ">
            <a class="nav-link" href="{{route('profile.index')}}">
                <i class="material-icons">person</i>
                <p>User Profile</p>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" href="{{route('product.index')}}">
                <i class=" material-icons fas fa-shopping-cart fa-2x mr-4 mt-1" style="color:#A9AFBB;font-size:20px;"></i>
                <p>Product</p>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link d-flex" href="{{route('category.index')}}">
                <i class=" material-icons fa fa-list-alt fa-2x mr-4 mt-1" style="color:#A9AFBB;font-size:20px;"></i>
                <p>Catagory</p>
            </a>
        </li>

        <li class="nav-item ">
            <a class="nav-link" href="{{route('role.index')}}">
            <i class="material-icons">person</i>
            <p>Role</p>
            </a>
        </li>
    </ul>
    </div>
</div>
