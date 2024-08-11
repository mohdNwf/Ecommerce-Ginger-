<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Product Cards</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        #boxcd {
            box-shadow: 0 4px 8px 0 rgba(41, 41, 41, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.15);
            padding: 5px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 26rem;
            width: 17rem;
            border-radius: 4px;
            position: relative;
        }

        #imgpc {
            height: 250px;
            margin-bottom: 10px;
            border-radius: 4px;
            width: 100%;
        }

        .card-badge {
            position: absolute;
            left: 12px;
            top: 15px;
            background: #bd1313;
            border-radius: 5px;
            text-align: center;
            color: #fff;
            font-size: 9px;
            font-weight: bolder;
            padding: 4px 6px;
        }

        .test, .test1, .test2, .test3 {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: flex;
            position: absolute;
            border: white 2px solid;
        }

        .test {
            background-color: rgb(255, 72, 0);
            bottom: 158px;
            right: 49px;
        }

        .test1 {
            background-color: rgb(106, 255, 0);
            bottom: 158px;
            right: 65px;
        }

        .test2 {
            background-color: rgb(255, 255, 255);
            bottom: 154px;
            right: 83px;
        }

        .test3 {
            background-color: rgb(0, 123, 255);
            bottom: 154px;
            right: 65px;
        }

        @media (max-width: 767px) {
            #boxcd {
                height: 22rem;
                width: 100vw;
            }

            .test, .test1, .test2, .test3 {
                bottom: 155px;
                right: 20px;
            }

            .test1, .test3 {
                right: 40px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        @php
            $products = [
                [
                    'name' => 'Product 1',
                    'description' => 'Description for product 1',
                    'price' => 100,
                    'original_price' => 150,
                    'discount' => 33,
                    'image' => 'product1.jpg'
                ],
                [
                    'name' => 'Product 2',
                    'description' => 'Description for product 2',
                    'price' => 200,
                    'original_price' => 250,
                    'discount' => 20,
                    'image' => 'product2.jpg'
                ],
                [
                    'name' => 'Product 3',
                    'description' => 'Description for product 3',
                    'price' => 300,
                    'original_price' => 350,
                    'discount' => 14,
                    'image' => 'product3.jpg'
                ],
                [
                    'name' => 'Product 4',
                    'description' => 'Description for product 4',
                    'price' => 400,
                    'original_price' => 450,
                    'discount' => 11,
                    'image' => 'product4.jpg'
                ]
            ];

            $totalProducts = $products ? count($products) : 0;
            if ($totalProducts > 0) {
                $indexes = collect(range(0, $totalProducts - 1))->shuffle();
                $uniqueIndexes = $indexes->slice(0, min(4, $totalProducts))->values();
            }
        @endphp

        @if ($totalProducts > 0)
            @foreach($products as $index => $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 product-card">
                    <div class="card mt-5">
                        <div class="custom-card-body" id="boxcd">
                            <img id="imgpc" src="{{ asset('storage/images/' . $product['image']) }}" alt="{{ $product['name'] }}">
                            <p class="card-title fw-bold" style="font-size: 13px;">{{ $product['name'] }}</p>
                            <p class="card-text mt-1" style="font-size: 10px;">{{ $product['description'] }}</p>
                            <div class="row">
                                <div class="col-4">
                                    <p class="text-nowrap fw-bold me-2" style="font-size: 14px;">{{ number_format($product['price'], 2) }} QAR</p>
                                </div>
                                <div class="col-4">
                                    <p class="text-nowrap fw-semibold text-decoration-line-through mt-1 ms-2 text-muted" style="font-size: 11px;">{{ number_format($product['original_price'], 2) }} QAR</p>
                                </div>
                                <div class="col-4">
                                    <p class="card-notify-badge fw-semibold">{{ $product['discount'] }}% OFF</p>
                                </div>
                            </div>
                            <a href="#" id="mmm" class="btn btn-primary"><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</a>
                            <p class="card-badge fw-semibold">LIMITED COLLECTIONS</p>
                            @if (isset($uniqueIndexes))
                                @if ($index == $uniqueIndexes[0])
                                    <div class="test rounded-circle text-center"></div>
                                    <div class="test1 rounded-circle text-center"></div>
                                @elseif ($index == $uniqueIndexes[1])
                                    <div class="test2 rounded-circle text-center"></div>
                                    <div class="test3 rounded-circle text-center"></div>
                                @elseif ($index == $uniqueIndexes[2])
                                    <div class="test rounded-circle text-center"></div>
                                    <div class="test3 rounded-circle text-center"></div>
                                @elseif ($index == $uniqueIndexes[3])
                                    <div class="test2 rounded-circle text-center"></div>
                                    <div class="test3 rounded-circle text-center"></div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>

</body>
</html>
