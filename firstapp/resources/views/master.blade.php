<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Everstylish</title>
</head>
<body>
    {{View::make('header')}}
    
    @yield('content')

    {{View::make('footer')}}
</body>
<style>
    /* General styles for the container */
.categories-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 20px 0;
    background-color: #fff;
}

.category-item {
    text-align: center;
    margin: 0 10px;
}

.category-item img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.category-item:hover{
    cursor: pointer;
}
.category-item p {
    margin-top: 10px;
    font-size: 16px;
    font-weight: bold;
    color: #000;
}

/* Responsive styles */
@media (max-width: 768px) {
    .categories-container {
        flex-direction: column;
    }

    .category-item {
        margin: 20px 0;
    }
}

/* General container styles */
.main {
    width: 1300px;
    margin:auto;
    display: flex;
    flex-direction: column;
    gap: 1px;
}

/* Style for the first row with two images */
.row1 {
    display: flex;
    gap: 1px;
}

.row1 img {
    width: calc(100% - 5px); /* Adjust for the gap */
}

/* Style for the second row with a nested structure */
.row2 {
    display: flex;
    gap: 1px;
}

.row2-col1 {
    display: flex;
    flex-direction: column;
    gap: 1px;
    flex: 1;
}

.row2-col1 img {
    width: 100%;
}

.row2-col2 {
    flex: 1;
}

.row2-col2 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Style for the third row with one image */
.row3 {
    margin-top: 1px;
}

.row3 img {
    width: 100%;
}

/* Style for the fourth row with two columns */
.row4 {
    display: flex;
    gap: 1px;
    margin-top: 1px;
}

.row4-col1,
.row4-col2 {
    flex: 1;
}

.row4 img {
    width: 100%;
}

/* Responsive styles */
@media (max-width: 768px) {
    .row1, .row2, .row4 {
        flex-direction: column;
    }

    .row1 img, .row2 img, .row4 img {
        width: 100%;
    }
}

/* login css */
</html>