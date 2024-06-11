@extends('master')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/jewelery.css">
</head>

<body>
    <div class="main">
        <div class="title-wraper">
            <h1>JEWELERY</h1>
        </div>
        <div class="container1">
            <ul class="items">
                <li class="item home">
                    <a href="/" title="Go to Home Page">Home</a>
                </li>
                <li class="item category149">
                    <a href="{{ url('alljewellery') }}"><strong>Jewellery</strong></a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    <div class="container-menu">
        <div class="filter-sort">
            <button class="filter-btn">
                <img src="{{url('/images/filter.svg')}}" alt="Filter" class="filter-image" onclick="toggleFilterMenu()">
            </button>
            <div id="filterMenu" class="filter-menu">
                <div class="filter-header">
                    <span>FILTER</span>
                    <button class="close-button" onclick="toggleFilterMenu()">X</button>
                </div>
                <div class="filter-content">
                    <h3>FILTER BY CATEGORY</h3>
                    <ul>
                        <li>RINGS (200)</li>
                        <li>EARRINGS (3330)</li>
                        <li>NECKPIECES (503)</li>
                        <li>BRACELETS (146)</li>
                        <li>HAIR ACCESSORIES (39)</li>
                        <li>ANKLETS (13)</li>
                        <li>STATEMENT JEWELLERY (1899)</li>
                        <li>NEW JEWELLERY (250)</li>
                        <li>UNDER 99 (767)</li>
                        <li>THE PARTY-NIGHT COLLECTION (1110)</li>
                        <li>THE DESI GIRL COLLECTION (1152)</li>
                        <li>THE CASUAL 9-TO-6 COLLECTION (2028)</li>
                        <li>THE EMBELLISHED OXIDISED (905)</li>
                        <li>EARRINGS (3330)</li>
                        <li>NECKPIECES (503)</li>
                        <li>BRACELETS (146)</li>
                        <li>HAIR ACCESSORIES (39)</li>
                        <li>ANKLETS (13)</li>
                        <li>STATEMENT JEWELLERY (1899)</li>
                        <li>NEW JEWELLERY (250)</li>
                        <li>UNDER 99 (767)</li>
                        <li>THE PARTY-NIGHT COLLECTION (1110)</li>
                        <li>THE DESI GIRL COLLECTION (1152)</li>
                        <li>THE CASUAL 9-TO-6 COLLECTION (2028)</li>
                        <li>THE EMBELLISHED OXIDISED (905)</li>
                    </ul>
                    <h3>FILTER BY CATEGORY</h3>
                    <ul>
                        <li>BRACELETS (146)</li>
                        <li>HAIR ACCESSORIES (39)</li>
                        <li>ANKLETS (13)</li>
                        <li>STATEMENT JEWELLERY (1899)</li>
                        <li>NEW JEWELLERY (250)</li>
                        <li>UNDER 99 (767)</li>
                        <li>THE PARTY-NIGHT COLLECTION (1110)</li>
                        <li>THE DESI GIRL COLLECTION (1152)</li>
                        <li>THE CASUAL 9-TO-6 COLLECTION (2028)</li>
                        <li>THE EMBELLISHED OXIDISED (905)</li>
                    </ul>
                </div>
            </div>
            <div class="sort-options">
                <div class="dropdown1">
                    <select id="filter" class="filter-dropdown">
                        <option value="position">Sort by Position</option></a>
                        <a href="#">
                            <option value="name">Sort by Name</option>
                        </a>
                        <a href="#">
                            <option value="price">Sort by Price</option>
                        </a>
                        <a href="#">
                            <option value="newest">Sort by Newest To Oldest</option>
                        </a>
                        <a href="#">
                            <option value="newest">Sort by Color</option>
                        </a>
                    </select>
                </div>
                <button class="dropdown-btn2">
                    <img src="{{url('/images/arrow.svg')}}" alt="Dropdown1">
                </button>
            </div>
        </div>
    </div>
    </div>

    <div class="product-container">
        <div class="row">
            @foreach($products as $item)
            <div class="col-md-3 mb-4">
                <div class="card product-card">
                    <form action="/add_to_cart" method="POST">
                        <span class="badge badge-danger"><button>Add to Cart</button></span></form>
                    <div class="wishlist-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <img src="{{$item['gallery']}}" alt="" class="card-img-top product-image">
                    <div class="card-body">
                        <h5 class="card-title product-name">{{$item['Description']}}</h5>
                        <p class="card-text product-price">
                            <span class="original-price">₹799.00</span>
                            <span class="discount-price">₹{{$item['price']}}</span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script>
        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        function toggleFilterMenu() {
            const filterMenu = document.getElementById('filterMenu');
            filterMenu.classList.toggle('show');
        }
    </script>
</body>

</html>
@endsection