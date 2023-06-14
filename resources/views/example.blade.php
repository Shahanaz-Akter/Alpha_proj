<!DOCTYPE html>
<html>

<head>
    <title>Product Form</title>

    <!-- bootstrap update version link -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- fontawewsome update version link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <!-- start product-details -->

    <div class="container  p-5 ">
        <div class="mt-3 row ">

            <form action="{{url('/post_products')}}" method="POST" enctype="multipart/form-data">
                @csrf



                <div class="d-flex gap-5">

                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                        <label class="mb-2" for="product_name">Product Name: </label>
                        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name: " required>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                        <label class="mb-2" for="ratings">Product Ratings:</label>
                        <input type="text" class="form-control" id="ratings" name="ratings" placeholder="Enter Ratings: ">
                    </div>

                </div>
                <div class="d-flex gap-5">
                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                        <label class="mb-2" for="product_description">Description </label>
                        <textarea class="form-control" id="product_description" name="product_description" rows="4" placeholder="Enter Product product Description: " required></textarea>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                        <label class="mb-2" for="additional_information">Additional Information </label>
                        <textarea class="form-control" id="additional_information" name="additional_information" rows="4" placeholder="Enter Product Additional Information: " required></textarea>
                    </div>
                </div>

                <div class="d-flex gap-5">
                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                        <label class="mb-2" for="price">Product Price: </label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter Product Price: " required>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                        <label class="mb-2" for="brand">Product Brand:</label>
                        <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter Product Brand: " required>
                    </div>
                </div>


                <div class="d-flex gap-5">
                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase enter_color_div_parent mb-3">
                        <input type="checkbox" class="" id="color" name="color" required>
                        <label class="mb-2 me-4 color_text" for="color">Product Color </label><i class="btn btn-success fa-solid fa-plus color_plus_btn" style="font-size: 12px;"></i>
                        <br>
                        <div class="d-none enter_color_div">
                            <input type="text" class="form-control  mb-2" id="col1" name="col1">
                        </div>

                        <div class="enter_color_div_input">
                            <!-- <input type="text" class="form-control w-50 mb-2" id="color" name="color"> -->
                        </div>

                    </div>

                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                        <input type="checkbox" class="" id="size" name="size" required>
                        <label class="mb-2 me-4 size_text" for="size">Product Size </label><i class="btn btn-success fa-solid fa-plus size_plus_btn" style="font-size: 12px;"></i>
                        <br>
                        <div class="d-none enter_size_div">
                            <input type="text" class="form-control  mb-2" id="size1" name="size1">
                        </div>

                        <div class="enter_size_div_input">
                            <!-- <input type="text" class="form-control w-50 mb-2" id="color" name="color"> -->
                        </div>
                    </div>

                </div>


                <div class="d-flex gap-5">
                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                        <label class="mb-2" for="cost">Cost:</label>
                        <input type="text" class="form-control" id="cost" name="cost" placeholder="Enter Cost: ">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                        <label class="mb-2" for="unicode">Product Unicode:</label>
                        <input type="text" class="form-control" id="unicode" name="unicode" placeholder="Enter Product Unicode: " required>
                    </div>
                </div>

                <div class="d-flex gap-5">
                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                        <label class="mb-2" for="unicode">Discount Rate:</label>
                        <input type="text" class="form-control" id="discount_rate" name="discount_rate" placeholder="Enter Product Rate: ">
                    </div>

                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                        <label class="mb-2" for="discount_expiry">Discount Expiry:</label>
                        <input type="text" class="form-control" id="discount_expiry" name="discount_expiry" placeholder="Enter Product discount Expiry: ">
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                    <label class="mb-2" for="product_details">Product Details: </label>
                    <textarea class="form-control" id="product_details" name="product_details" rows="4" placeholder="Enter Product product Details: " required></textarea>
                </div>
                <!-- <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                <label class="form-label">Select Product Status</label>
                <select name='product_status' class="form-select">
                    <option value="design">Design</option>
                    <option value="ready">Ready</option>
                </select>
            </div> -->
                <div class="d-flex gap-5">
                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase mb-3">
                        <label class="mb-2 me-2" for="image">Upload Image:</label>
                        <input type="file" class="form-control-file" id="image" name="image" placeholder="Select Product Image: " required>
                    </div>


                </div>


                <section class="add_new">

                </section>


                <div class="d-flex gap-5">
                    <div class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase plus_btn btn btn-success mb-3">Add Multi Image <i class="fa-solid fa-plus" style="font-size: 17px;"></i></div>
                    <button class="col-12 col-md-6 col-lg-6  col-xl-6  text-uppercase plus_btn btn btn-success btn btn-success mb-3" type="submit">Submit</button>
                </div>
            </form>

        </div>

    </div>

    <!-- end each product-details Modal -->


    <!-- Link of JS files -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="{{asset('/assets_topmost/js/custom.js')}}"></script>
    <script src="{{asset('/assets_topmost/js/custom1.js')}}"></script> -->



    <script>
        // custom1.jquery file from Topmost project

        // $(document).ready(function () {
        //     var container = $('.container');
        //     var parent = $('.secondary_images_parent');
        //     var plus = $('.plus_btn');

        //     plus.on('click', function (event) {
        //         var div = $('<div>').addClass('col-12 col-md-8 col-ld-8 col-xl-8  text-uppercase mb-3');

        //         var label = $('<label>').attr({
        //             'for': 'secondary_image',
        //             'class': 'mb-2'
        //         }).text('Secondary Product Image');

        //         var input = $('<input>').attr({
        //             'type': 'file',
        //             'class': 'form-control-file',
        //             'id': 'secondary_image',
        //             'name': 'secondary_image',
        //             'placeholder': 'Enter Secondary Product Image',
        //             'required': ''
        //         });

        //         div.append(label);
        //         div.append(input);

        //         parent.append(div);
        //         console.log(parent);
        //     });
        // });


        // custom1.Js file from Topmost project
        // let container = document.querySelector('.container');

        let parent = document.querySelector('.add_new');
        let plus = document.querySelector('.plus_btn');
        plus.addEventListener('click', function(event) {
            // console.log(event.target);
            let div = document.createElement('div');
            div.setAttribute("class", "col-12 col-md-6 col-ld-6 col-xl-6  text-uppercase mb-3");

            let label = document.createElement('label');

            label.setAttribute("class", "mb-2");
            label.setAttribute("class", "me-2");
            label.setAttribute("for", "image");
            label.textContent = "Add Image:    ";


            let input = document.createElement('input');
            input.setAttribute("type", "file");
            input.setAttribute("class", "form-control-file");
            input.setAttribute("id", "image");
            input.setAttribute("name", "image[]");
            input.setAttribute("placeholder", "Add New: ");
            input.setAttribute("required", "");

            div.append(label);
            div.append(input);

            parent.append(div);
            console.log(parent);
        });
    </script>

    <script>
        // color customize input tag
        let color_text = document.querySelector('.color_text');
        let color_plus_btn = document.querySelector('.color_plus_btn');
        let enter_color_div = document.querySelector('.enter_color_div');
        let enter_color_div_input1 = document.querySelector('.enter_color_div_input');


        color_text.addEventListener('click', function() {
            let yes_contain = enter_color_div.classList.contains('d-none');

            if (yes_contain) {
                enter_color_div.classList.remove('d-none');
                enter_color_div_input1.classList.remove('d-none');
            } else {
                enter_color_div.classList.add('d-none');
                enter_color_div_input1.classList.add('d-none');
            }
        });



        // <div class="enter_color_div_input">
        //<input type="text" class="form-control w-50 mb-2" id="col1" name="col1">
        //</div>


        let enter_color_div_input = document.querySelector('.enter_color_div_input');

        let color_btn = document.querySelector('.color_btn');
        console.log(color_btn);




        color_plus_btn.addEventListener('click', function() {

            let input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.classList.add('form-control');
            input.classList.add('mb-2');
            input.setAttribute('id', 'color');
            input.classList.add('me-2');
            input.setAttribute('name', 'color[]');

            enter_color_div_input.append(input);

        });

        // size customize input tag

        let size_text = document.querySelector('.size_text');
        let size_plus_btn = document.querySelector('.size_plus_btn');
        let enter_size_div = document.querySelector('.enter_size_div');
        let enter_size_div_input1 = document.querySelector('.enter_size_div_input');

        size_text.addEventListener('click', function() {
            let yes1_contain = enter_size_div.classList.contains('d-none');
            let enter_size_div_input2 = document.querySelector('.enter_color_div_input');

            if (yes1_contain) {
                enter_size_div.classList.remove('d-none');
                enter_size_div_input1.classList.remove('d-none');
            } else {
                enter_size_div.classList.add('d-none');
                enter_size_div_input1.classList.add('d-none');
            }
        });



        // <div class="enter_color_div_input">
        //<input type="text" class="form-control w-50 mb-2" id="col1" name="col1">
        //</div>
        // <input type="text" class="form-control w-50 mb-2" id="col1" name="col1">

        let enter_size_div_input = document.querySelector('.enter_size_div_input');

        let size_btn = document.querySelector('.size_btn');
        console.log(size_btn);

        size_plus_btn.addEventListener('click', function() {

            let input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.classList.add('form-control');
            input.classList.add('mb-2');
            input.setAttribute('id', 'size');
            input.classList.add('me-2');
            input.setAttribute('name', 'size[]');

            enter_size_div_input.append(input);

        });
    </script>


</body>

</html>