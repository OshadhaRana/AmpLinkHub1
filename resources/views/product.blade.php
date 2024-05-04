@extends('productlayout')
@section('title', 'Product')
@section('content')

    <header>
        <a href="#" class="logo"><img src="Images/amplinkhub-favicon-color.png" alt="logo" > AmpLinkHub</a>

        <ul class="navlist">
            <li><a href="/Home">Home</a></li>
            <li><a href="Products">About</a></li>
            <li><a href='/Services'>Products</a></li>
            <li><a href="Life">Batt & Tire Lifespan Tracker</a></li>

        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <div class = "wrapper">
        <div class = "category-filter">
            <div class = "container">
                <div class = "title">
                    <h1>Featured Products</h1>
                </div>

                <div class = "filter-btns">
                    <button type = "button" class = "filter-btn" id = "all">all</button>
                    <button type = "button" class = "filter-btn" id = "best-sellers">best seller</button>
                    <button type = "button" class = "filter-btn" id = "batteries">batteries</button>
                    <button type = "button" class = "filter-btn" id = "tires">tires</button>
                </div>

                <div class = "filter-items">
                    <div class = "filter-item all batteries best-sellers">
                        <div class = "item-img">
                            <img src = "Images/AAM-GO-00038B20R-Copy-ezgif.com-webp-to-png-converter-removebg-preview.png" alt = "Item image">

                        </div>
                        <div class = "item-info">
                            <p>AMARON Battery 12V 35Ah GO 38B20R</p>
                            <div>
                                <span class = "new-price">$16.70</span>
                            </div>
                            <a href = "#" class ="add-btn">View</a>
                        </div>
                    </div>

                    <div class = "filter-item all batteries best-sellers">
                        <div class = "item-img">
                            <img src = "Images/AAM-FL-00042B20R-Copy-1-ezgif.com-webp-to-png-converter-removebg-preview.png" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>AMARON Battery 12V 38Ah FLO 42B20R</p>
                            <div>
                                <span class = "old-price">$20.50</span>
                                <span class = "new-price">$16.70</span>
                            </div>
                            <a href = "#" class ="add-btn">View</a>
                        </div>
                    </div>

                    <div class = "filter-item all batteries">
                        <div class = "item-img">
                            <img src = "Images/autopartsstore.lk-ULTRA-MF-55B24-ezgif.com-webp-to-png-converter-removebg-preview.png" alt = "Item image">
                        </div>
                        <div class = "item-info">
                            <p>EXIDE BATTERY 12V 35Ah MF 38B20L</p>
                            <div>
                                <span class = "new-price">$16.70</span>
                            </div>
                            <a href = "#" class ="add-btn">View</a>
                        </div>
                    </div>

                    <div class = "filter-item all batteries">
                        <div class = "item-img">
                            <img src = "Images/POWER-MF-95D31-2-768x768-1-removebg-preview.png" alt = "Item image">
                        </div>
                        <div class = "item-info">
                            <p>EXIDE BATTERY 12V 35Ah POWER MF 38B20L</p>
                            <div>
                                <span class = "new-price">$16.70</span>
                            </div>
                            <a href = "#" class ="add-btn">View</a>
                        </div>
                    </div>



                    <div class = "filter-item all ">
                        <div class = "item-img">
                            <img src = "Images/POWER-MF-MFS65-1-768x768-1-removebg-preview.png" alt = "Item image">
                        </div>
                        <div class = "item-info">
                            <p>EXIDE BATTERY 12V 65Ah POWER MFS65R</p>
                            <div>
                                <span class = "new-price">$16.70</span>
                            </div>
                            <a href = "#" class ="add-btn">View</a>
                        </div>
                    </div>

                    <div class = "filter-item all tires best-sellers">
                        <div class = "item-img">
                            <img src = "Images/2798f713721ea10f42b998c39060be60246cefdb-removebg-preview.png" alt = "Item image">
                        </div>
                        <div class = "item-info">
                            <p>185/65R15 SP TOURING 1 DUNLOP(JAPAN)</p>
                            <div>
                                <span class = "new-price">$16.70</span>
                            </div>
                            <a href = "#" class ="add-btn">View</a>
                        </div>
                    </div>

                    <div class = "filter-item all tires">
                        <div class = "item-img">
                            <img src = "Images/DUN15565R14EC203JAPAN--1--1592464364-removebg-preview.png" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>155/65R14 EC203 DUNLOP(JAPAN)</p>
                            <div>
                                <span class = "old-price">$20.50</span>
                                <span class = "new-price">$16.70</span>
                            </div>
                            <a href = "#" class ="add-btn">View</a>
                        </div>
                    </div>

                    <div class = "filter-item all tires">
                        <div class = "item-img">
                            <img src = "Images/DUN17570R14SPT1INDO--1--1580371745-removebg-preview.png" alt = "Item image">
                        </div>
                        <div class = "item-info">
                            <p>175/70R14 SP TOURING R1 DUNLOP(JAPAN)</p>
                            <div>
                                <span class = "new-price">$16.70</span>
                            </div>
                            <a href = "#" class ="add-btn">View</a>
                        </div>
                    </div>

                    <div class = "filter-item all tires best-sellers">
                        <div class = "item-img">
                            <img src = "Images/d4b73a74b1ac5e60858a62b236d69822870cc18a-removebg-preview.png" alt = "Item image">
                        </div>
                        <div class = "item-info">
                            <p>195/60R16SPLM705 DUNLOP(JAPAN)</p>
                            <div>
                                <span class = "new-price">$16.70</span>
                            </div>
                            <a href = "#" class ="add-btn">View</a>
                        </div>
                    </div>

                    <div class = "filter-item all tires">
                        <div class = "item-img">
                            <img src = "Images/MX17570R14MAP3TH--1--1580380139-removebg-preview.png" alt = "Item image">
                        </div>
                        <div class = "item-info">
                            <p>185/70R13 MAP3 (TAIWAN)</p>
                            <div>
                                <span class = "new-price">$16.70</span>
                            </div>
                            <a href = "#" class ="add-btn">View</a>
                        </div>
                    </div>

                    <div class = "filter-item all tires ">
                        <div class = "item-img">
                            <img src = "Images/4071eeec91896ea064c2298d7f32e865934adc18-removebg-preview.png" alt = "Item image">
                        </div>
                        <div class = "item-info">
                            <p>225/55R16 HP5 (TAIWAN)</p>
                            <div>
                                <span class = "new-price">$16.70</span>
                            </div>
                            <a href = "#" class ="add-btn">View</a>
                        </div>
                    </div>

                    <div class = "filter-item all tires">
                        <div class = "item-img">
                            <img src = "Images/MX22550ZR18HP-M3--1--1538471972-removebg-preview.png" alt = "Item image">
                            <span class = "discount">20%</span>
                        </div>
                        <div class = "item-info">
                            <p>225/50R18 HPM3 (TAIWAN)</p>
                            <div>
                                <span class = "old-price">$20.50</span>
                                <span class = "new-price">$16.70</span>
                            </div>
                            <a href = "#" class ="add-btn">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-down">
        <a href="#"><i class="ri-arrow-down-s-fill"></i></a>
    </div>
    <script src="js/prodscript.js"></script>
