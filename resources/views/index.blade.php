<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Ice Cream</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <form action="/icecream" method="post">
                @csrf
                <div class="col-12 text-center mt-4">
                    <h1>Ice Cream</h1>
                </div>
                <div class="col-12">

                    <div class="row d-flex justify-content-center">
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12"> <img src="#" alt=""> </div>
                                <div class="col-12 text-center">
                                    <p>Vanila</p>
                                </div>
                            </div>
                            <div class="form-check d-flex justify-content-center">
                                <input class="form-check-input" type="radio" name="icecream" value="Vanila"
                                    id="icecream1">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12"> <img src="#" alt=""> </div>
                                <div class="col-12 text-center">
                                    <p>Chocolate</p>
                                </div>
                            </div>
                            <div class="form-check d-flex justify-content-center">
                                <input class="form-check-input" type="radio" name="icecream" value="Chocolate"
                                    id="icecream2">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <div class="col-12"> <img src="#" alt=""> </div>
                                <div class="col-12 text-center">
                                    <p>Matcha</p>
                                </div>
                            </div>
                            <div class="form-check d-flex justify-content-center">
                                <input class="form-check-input" type="radio" name="icecream" value="Matcha"
                                    id="icecream3">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-4">
                            <h2>Cup Size</h2>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-3">
                            <div class="form-check d-flex justify-content-center">
                                <input class="form-check-input" type="radio" name="size"
                                    onchange="changeCup(this.value)" value="S" id="size1" checked>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p>S</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check d-flex justify-content-center">
                                <input class="form-check-input" type="radio" name="size"
                                    onchange="changeCup(this.value)" value="M" id="size2">
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p>M</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check d-flex justify-content-center">
                                <input class="form-check-input" type="radio" name="size"
                                    onchange="changeCup(this.value)" value="XL" id="size3">
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p>XL</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-4">
                            <h3>Topping</h3>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Sprinkles" name="toppings[]"
                                    onchange="changeTopping(this)" id="topping1">
                                <label class="form-check-label" for="topping1">
                                    Sprinkles
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Caramel" name="toppings[]"
                                    onchange="changeTopping(this)" id="topping2">
                                <label class="form-check-label" for="topping2">
                                    Caramel
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Oreos" name="toppings[]"
                                    onchange="changeTopping(this)" id="topping3">
                                <label class="form-check-label" for="topping3">
                                    Oreos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Hot Fudge" name="toppings[]"
                                    onchange="changeTopping(this)" id="topping4">
                                <label class="form-check-label" for="topping4">
                                    Hot Fudge
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Marshmallow" name="toppings[]"
                                    onchange="changeTopping(this)" id="topping5">
                                <label class="form-check-label" for="topping5">
                                    Marshmallow
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Cookie Dough" name="toppings[]"
                                    onchange="changeTopping(this)" id="topping6">
                                <label class="form-check-label" for="topping6">
                                    Cookie Doug
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Whipped Cream" name="toppings[]"
                                    onchange="changeTopping(this)" id="topping7">
                                <label class="form-check-label" for="topping7">
                                    Whipped Cream
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Chocolate Coating"
                                    name="toppings[]" onchange="changeTopping(this)" id="topping8">
                                <label class="form-check-label" for="topping8">
                                    Chocolate Coating
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Cereals" name="toppings[]"
                                    onchange="changeTopping(this)" id="topping9">
                                <label class="form-check-label" for="topping9">
                                    Cereals
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Strawberry" name="toppings[]"
                                    onchange="changeTopping(this)" id="topping10">
                                <label class="form-check-label" for="topping10">
                                    Strawberry
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Blueberry" name="toppings[]"
                                    onchange="changeTopping(this)" id="topping11">
                                <label class="form-check-label" for="topping11">
                                    Blueberry
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Peanut Butter" name="toppings[]"
                                    onchange="changeTopping(this)" id="topping12">
                                <label class="form-check-label" for="topping12">
                                    Peanut Butter
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 text-center text-danger">
                    <p class="fs-1">RP. <span class="fs-1" id="total">40000</span></p>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script>
        var cup_size = 'S'
        var cup_price = 40000
        var total_price = 40000


        function changeCup(val){
            console.log(val)
            
            if (val=='S') {
                console.log(val)
                changeTotal(40000 - cup_price)
                cup_price = 40000
            }
            if (val=='M') {
                console.log(val)
                changeTotal(50000 - cup_price)
                cup_price = 50000
            }
            if (val=='XL') {
                console.log(val)
                changeTotal(60000 - cup_price)
                cup_price = 60000
            }
        }

        function changeTopping(cb){
            console.log(cb.checked)
            if (cb.checked) {
                changeTotal(5000)
            }else{
                changeTotal(-5000)
            }
        }
        
        function changeTotal(price){
            total_price = total_price + price;
            const spanTotal = document.getElementById("total");
            console.log(spanTotal.innerHTML)
            spanTotal.innerHTML = total_price
        }
        
    </script>
</body>

</html>