@extends('master1')
@section('content1')
    <div class="card text-light border-0">
        <div class="overlay"></div>
        <img src="https://tmna.aemassets.toyota.com/is/image/toyota/toyota/seo-category/mobile/familysuvminivanssummary3mobile.png?fmt=jpeg&fit=constrain&qlt=90&wid=700" class="card-img-fluid" height="270px" alt="...">
        <div class="card-img-overlay">
          <div class="container">


            <div class="row  justify-content-center mt-md-5">
              <div class="col-md-6 text-center">
                <h1 class="card-title fw-bold">Product Listing</h1>
                <h6 class="card-text">Home <i class="fas fa-chevron-right fa-2xs"></i>Car Listing
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">
  <div class=" mt-5">
    <div class="find justify-content-center">
        <h4 class="fw-bold mb-4" style="margin: 15px;"><i class="fa-solid fa-filter fa-sm" style="color: #ff4850;"></i> Find Product</h4>
        <div class="input-group mb-3">
          <select class="form-select" id="inputGroupSelect01">
            <option selected>Select Brand</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <select class="form-select" id="inputGroupSelect01">
            <option selected>Select Fuel Type</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
       <button type="button" id="bt"class="btn btn-danger fw-bold"><i class="fa-solid fa-magnifying-glass fa-lg fa-beat"></i>Search Car</button>
        </div>
        <br>
        <br>

        <div class=" find1 ">
          <div class="smallcard">
          <h5 class="fw-bold mb-4" style="margin: 10px;"><i class="fa-solid fa-car fa-lg" style="color: #ff4850;"></i> Recently Listed Product</h5>

          <div class="col-sm-11 ms-2 mb-3">
              <div class="row ">
                  <div class="col-6 ">
                      <img class="img-fluid rounded" src="" alt="Product Image">
                  </div>
                  <div class="col-6">
                      <div class="d-flex flex-column justify-content-between">
                          <div>
                              <h5>Nissan GT</h5>
                              <p class="text-justify para mb-0">₹873 Per Day</p>
                          </div>
                          <div></div> <!-- This empty div helps to push content to the bottom -->
                      </div>
                  </div>
              </div>

        </div>
          <div class="col-sm-11 ms-2  mb-3">
              <div class="row ">
                  <div class="col-6 ">
                      <img class="img-fluid rounded" src="https://static0.topspeedimages.com/wordpress/wp-content/uploads/2023/06/bmw-m8_competition_gran_coupe-2023-1280-04.jpg" alt="Product Image">
                  </div>
                  <div class="col-6">
                      <div class="d-flex flex-column justify-content-between">
                          <div>
                              <h5>BMW x5</h5>
                              <p class="text-justify para mb-0">₹878 Per Day</p>
                          </div>
                          <div></div> <!-- This empty div helps to push content to the bottom -->
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-11 ms-2 mb-3">
              <div class="row ">
                  <div class="col-6 ">
                      <img class="img-fluid rounded" src="https://www.carscoops.com/wp-content/uploads/2023/05/ABT-Audi-RS6-LE-main.jpg" alt="Product Image">
                  </div>
                  <div class="col-6">
                      <div class="d-flex flex-column justify-content-between">
                          <div>
                              <h5>Audi Q3</h5>
                              <p class="text-justify para mb-0">₹878 Per Day</p>
                          </div>
                          <div></div> <!-- This empty div helps to push content to the bottom -->
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-11 ms-2">
              <div class="row ">
                  <div class="col-6 ">
                      <img class="img-fluid rounded" src="https://cdn-fastly.autoguide.com/media/2023/06/09/12776629/how-to-win-the-807-horsepower-challenger-hellcat-of-your-dreams-with-dream-giveaway.jpg?size=720x845&nocrop=1" alt="Product Image">
                  </div>
                  <div class="col-6">
                      <div class="d-flex flex-column justify-content-between ">
                          <div>
                              <h5>Dodge challenger</h5>
                              <p class="text-justify para mb-0">₹873 Per Day</p>
                          </div>
                          <div></div> <!-- This empty div helps to push content to the bottom -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
        </div>
      </div>
        </div>
    </div>


    <div class="col-md-9 mt-5">
        <div class="card card-custom">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="card-img-container">
                        <img src="https://www.carscoops.com/wp-content/uploads/2023/05/ABT-Audi-RS6-LE-main.jpg" class="img-fluid card-img" alt="...">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-2">Audi Q3</h5>
                        <p class="card-text fs-5"><small class="text-body-secondary">₹12426 per day</small></p>
                        <div class="row">
                            <div class="col-4">
                                <p> <i class="fa-solid fa-user"></i> 5 Seats</p>
                            </div>
                            <div class="col-4">
                                <p> <i class="fa-brands fa-slack fa-lg"></i> 3568 Models</p>
                            </div>
                            <div class="col-4">
                                <p><i class="fa-solid fa-car"></i> Diesel</p>
                            </div>
                        </div>
                        <button type="button" id="butt" class="btn btn-danger">View Details <i class="fa-solid fa-circle-chevron-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="card card-custom mt-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="card-img-container">
                            <img src="https://cdn-fastly.autoguide.com/media/2023/06/09/12776629/how-to-win-the-807-horsepower-challenger-hellcat-of-your-dreams-with-dream-giveaway.jpg?size=720x845&nocrop=1" class="img-fluid card-img" alt="...">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-2">Dodge Challenger</h5>
                            <p class="card-text fs-5"><small class="text-body-secondary">₹25426 per day</small></p>
                            <div class="row">
                                <div class="col-4">
                                    <p> <i class="fa-solid fa-user"></i> 2 Seats</p>
                                </div>
                                <div class="col-4">
                                    <p> <i class="fa-brands fa-slack fa-lg"></i> 1568 Models</p>
                                </div>
                                <div class="col-4">
                                    <p><i class="fa-solid fa-car"></i> Petrol</p>
                                </div>
                            </div>
                            <button type="button" id="butt" class="btn btn-danger">View Details <i class="fa-solid fa-circle-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-custom mt-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="card-img-container">
                            <img src="https://static0.topspeedimages.com/wordpress/wp-content/uploads/2023/06/bmw-m8_competition_gran_coupe-2023-1280-04.jpg" class="img-fluid card-img" alt="...">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-2">BMW x5</h5>
                            <p class="card-text fs-5"><small class="text-body-secondary">₹15426 per day</small></p>
                            <div class="row">
                                <div class="col-4">
                                    <p> <i class="fa-solid fa-user"></i> 4 Seats</p>
                                </div>
                                <div class="col-4">
                                    <p> <i class="fa-brands fa-slack fa-lg"></i> 2568 Models</p>
                                </div>
                                <div class="col-4">
                                    <p><i class="fa-solid fa-car"></i> CNG</p>
                                </div>
                            </div>
                            <button type="button" id="butt" class="btn btn-danger">View Details <i class="fa-solid fa-circle-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-custom mt-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="card-img-container">
                            <img src="https://static0.topspeedimages.com/wordpress/wp-content/uploads/2023/06/bmw-m8_competition_gran_coupe-2023-1280-04.jpg" class="img-fluid card-img" alt="...">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-2">BMW x5</h5>
                            <p class="card-text fs-5"><small class="text-body-secondary">₹15426 per day</small></p>
                            <div class="row">
                                <div class="col-4">
                                    <p> <i class="fa-solid fa-user"></i> 4 Seats</p>
                                </div>
                                <div class="col-4">
                                    <p> <i class="fa-brands fa-slack fa-lg"></i> 2568 Models</p>
                                </div>
                                <div class="col-4">
                                    <p><i class="fa-solid fa-car"></i> CNG</p>
                                </div>
                            </div>
                            <button type="button" id="butt" class="btn btn-danger">View Details <i class="fa-solid fa-circle-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-custom mt-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="card-img-container">
                            <img src="https://static0.topspeedimages.com/wordpress/wp-content/uploads/2023/06/bmw-m8_competition_gran_coupe-2023-1280-04.jpg" class="img-fluid card-img" alt="...">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-2">BMW x5</h5>
                            <p class="card-text fs-5"><small class="text-body-secondary">₹15426 per day</small></p>
                            <div class="row">
                                <div class="col-4">
                                    <p> <i class="fa-solid fa-user"></i> 4 Seats</p>
                                </div>
                                <div class="col-4">
                                    <p> <i class="fa-brands fa-slack fa-lg"></i> 2568 Models</p>
                                </div>
                                <div class="col-4">
                                    <p><i class="fa-solid fa-car"></i> CNG</p>
                                </div>
                            </div>
                            <button type="button" id="butt" class="btn btn-danger">View Details <i class="fa-solid fa-circle-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
<br>

@endsection
