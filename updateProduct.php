<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Product | eShop</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />

</head>

<body>

    <div class="container-fluid">
        <div class="row gy-3">
            <?php include "header.php"; ?>

            <div class="col-12">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="h2 text-primary fw-bold">Update My Products</h2>
                    </div>

                    <div class="col-12">
                        <div class="row">

                            <div class="col-12 col-lg-4 border-end border-success">
                                <div class="row">

                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">Select Product Category</label>
                                    </div>

                                    <div class="col-12">
                                        <select class="form-select text-center" disabled>
                                            <option>Select Category</option>
                                            <option>Mobile Phones</option>
                                            <option>Laptops</option>
                                            <option>Camera</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-lg-4 border-end border-success">
                                <div class="row">

                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">Select Product Brand</label>
                                    </div>

                                    <div class="col-12">
                                        <select class="form-select text-center" disabled>
                                            <option>Select Brand</option>
                                            <option>Apple</option>
                                            <option>Samsung</option>
                                            <option>HTC</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-lg-4 border-end border-success" >
                                <div class="row">

                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">Select Product Model</label>
                                    </div>

                                    <div class="col-12">
                                        <select class="form-select text-center" disabled>
                                            <option>Select Model</option>
                                            <option>iPhone 12</option>
                                            <option>Note 20</option>
                                            <option>Galaxy J7</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="border-success" />
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">
                                            Add a Title to your Product
                                        </label>
                                    </div>
                                    <div class="offset-0 offset-lg-2 col-12 col-lg-8">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="border-success" />
                            </div>

                            <div class="col-12">
                                <div class="row">

                                    <div class="col-12 col-lg-4 border-end border-success">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 20px;">Select Product Condition</label>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-check-inline mx-5">
                                                    <input class="form-check-input" type="radio" id="b" name="c" checked disabled/>
                                                    <label class="form-check-label fw-bold" for="b">Brandnew</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="u" name="c" disabled/>
                                                    <label class="form-check-label fw-bold" for="u">Used</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4 border-end border-success">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 20px;">Select Product Colour</label>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="clr1" disabled/>
                                                    <label class="form-check-label" for="clr1">Gold</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="clr2" disabled/>
                                                    <label class="form-check-label" for="clr2">Silver</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="clr3" disabled/>
                                                    <label class="form-check-label" for="clr3">Graphite</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="clr4" disabled/>
                                                    <label class="form-check-label" for="clr4">Jet Black</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="clr5" disabled/>
                                                    <label class="form-check-label" for="clr5">Rose Gold</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="clr6" disabled/>
                                                    <label class="form-check-label" for="clr6">Pacific blue</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="input-group mt-2 mb-2">
                                                    <input type="text" class="form-control" placeholder="Add new Colour" disabled/>
                                                    <button class="btn btn-outline-primary" type="button" id="button-addon2">+ Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 20px;">Add Product Quantity</label>
                                            </div>
                                            <div class="col-12">
                                                <input type="number" class="form-control" value="0" min="0" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="border-success" />
                            </div>

                            <div class="col-12">
                                <div class="row">

                                    <div class="col-6 border-end border-success">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 20px;">Cost Per Item</label>
                                            </div>
                                            <div class="offset-0 offset-lg-2 col-12 col-lg-8">
                                                <div class="input-group mb-2 mt-2">
                                                    <span class="input-group-text">Rs.</span>
                                                    <input type="text" class="form-control" disabled/>
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-label fw-bold" style="font-size: 20px;">Approved Payment Methods</label>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="offset-0 offset-lg-2 col-2 pm pm1"></div>
                                                    <div class="col-2 pm pm2"></div>
                                                    <div class="col-2 pm pm3"></div>
                                                    <div class="col-2 pm pm4"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="border-success" />
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">Delivery Cost</label>
                                    </div>
                                    <div class="col-12 col-lg-6 border-end border-success">
                                        <div class="row">
                                            <div class="col-12 offset-lg-1 col-lg-3">
                                                <label class="form-label">Delivery cost Within Colombo</label>
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <div class="input-group mb-2 mt-2">
                                                    <span class="input-group-text">Rs.</span>
                                                    <input type="text" class="form-control" />
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-12 offset-lg-1 col-lg-3">
                                                <label class="form-label">Delivery cost out of Colombo</label>
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <div class="input-group mb-2 mt-2">
                                                    <span class="input-group-text">Rs.</span>
                                                    <input type="text" class="form-control" />
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="border-success" />
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">Product Description</label>
                                    </div>
                                    <div class="col-12">
                                        <textarea cols="30" rows="15" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="border-success" />
                            </div>

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="form-label fw-bold" style="font-size: 20px;">Add Product Images</label>
                                    </div>
                                    <div class="offset-lg-3 col-12 col-lg-6">
                                        <div class="row">
                                            <div class="col-4 border border-primary rounded">
                                                <img src="resource/addproductimg.svg" class="img-fluid" style="width: 250px;" />
                                            </div>
                                            <div class="col-4 border border-primary rounded">
                                                <img src="resource/addproductimg.svg" class="img-fluid" style="width: 250px;" />
                                            </div>
                                            <div class="col-4 border border-primary rounded">
                                                <img src="resource/addproductimg.svg" class="img-fluid" style="width: 250px;" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset-lg-3 col-12 col-lg-6 d-grid mt-3">
                                        <input type="file" class="d-none" id="imageuploader" multiple />
                                        <label for="imageuploader" class="col-12 btn btn-primary">Upload Images</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <hr class="border-success" />
                            </div>

                            <div class="offset-lg-4 col-12 col-lg-4 d-grid mt-3 mb-3">
                                <button class="btn btn-success">Update Product</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <?php include "footer.php"; ?>
        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>