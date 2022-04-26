<style>    
    
    #summary ::-webkit-input-placeholder {
        text-align: left;
    }

    #summary fieldset .form-card {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        padding: 20px 40px 30px 40px;
        box-sizing: border-box;
        width: 94%;
        margin: 0 3% 20px 3%;
        position: relative
    }
    
    #summary fieldset {
        background: white;
        border: 0 none;
        border-radius: 0;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }
    
    #summary fieldset:not(:first-of-type) {
        display: none
    }
    
    #summary fieldset .form-card {
        text-align: left;
        color: #9E9E9E
    }
    
    #summary .input {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px
    }
    
    #summary input:focus,
     textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: none;
        font-weight: bold;
        border-bottom: 2px solid #CDB4B4;
        outline-width: 0
    }
    
    #summary select.list-dt {
        border: none;
        outline: 0;
        border-bottom: 1px solid #ccc;
        padding: 2px 5px 3px 5px;
        margin: 2px
    }
    
    #summary select.list-dt:focus {
        border-bottom: 2px solid #CDB4B4
    }
    
    #summary .card {
        z-index: 0;
        border: none;
        border-radius: 0;
        position: relative
    }
    
    #summary .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left
    }
    
    #summary #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
        padding: 0;
    }
    
    #summary #progressbar .active {
        color: #000000
    }
    
    #summary #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 25%;
        float: left;
        position: relative
    }
    
    #summary #progressbar #personal_detail:before {
        font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;
        content: "1"
    }
    
    #summary #progressbar #shipping_detail:before {
        font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;
        content: "2"
    }
    
    #summary #progressbar #code_discount:before {
        font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;
        content: "3"
    }

    #summary #progressbar #delivery_method:before {
        font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;
        content: "4"
    }
      
    #summary #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }
    
    #summary #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }
    
    #summary #progressbar li.active:before,
    #summary #progressbar li.active:after {
        background: #CDB4B4
    }
    
    #summary .fit-image {
        width: 100%;
        object-fit: cover
    }
    
    #summary #promo .card{
      border-radius: 0;
    }
    
    #summary [contenteditable]:focus {
        outline: 0px solid transparent;
      }

    #summary .styled-select{
        background-color: transparent;
    }  

</style>
<section class="container-fluid" style="padding:0">
    <div class="d-flex flex-nowrap">
        <div class="col-md-7">
            <h3 class="pb-5 pt-5" style="font-family: 'Silk Serif', sans-serif;">Summary order</h3>
            <form id="msform">
                <ul id="progressbar">
                    <div class="d-flex flex-nowrap">
                        <li class="active" id="personal_detail" style="flex-grow: 1;"><strong style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Personal detail</strong></li>
                        <li id="shipping_detail" style="flex-grow: 1;"><strong style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Shipping detail</strong></li>
                        <li id="code_discount" style="flex-grow: 1;"><strong style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Code discoount</strong></li>
                        <li id="delivery_method" style="flex-grow: 1;"><strong style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Delivery method</strong></li>
                    </div>
                    <fieldset class="pb-0">
                        <div class="d-flex flex-wrap">
                            <div class="col-md-6 pl-0" style="margin: 10% 0 10% 0;">
                                <input class="m-0 input" placeholder="First name*" style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid #dbd3d3;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                            </div>
                            <div class="col-md-6 pr-0" style="margin: 10% 0 10% 0;">
                                <input class="m-0 input" placeholder="Last name*" style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid #dbd3d3;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                            </div>
                            <div class="col-md-12 p-0" style="margin: 0 0 10% 0;">
                                <input class="m-0 input" placeholder="Email*" style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid #dbd3d3;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                            </div>
                        </div>
                        <div class="d-flex flex-nowrap">
                            <button type="button" name="next" class="next action-button btn btn-primary text-left w-100" value="Next Step">
                                <div class="d-flex flex-nowrap">
                                    <p class="flex-grow-1 m-0">SHIPPING DETAIL</p>
                                    <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                                </div>
                            </button>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="d-flex flex-wrap">
                            <div class="col-md-6 pl-0" style="margin: 10% 0 10% 0;">
                                <input class="m-0 input" placeholder="Country*" style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid #dbd3d3;;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                            </div>
                            <div class="col-md-6 pr-0" style="margin: 10% 0 10% 0;">
                                <input class="m-0 input" placeholder="Region*" style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid #dbd3d3;;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                            </div>
                            <div class="col-md-6 pl-0" style="margin: 0 0 10% 0;">
                                <input class="m-0 input" placeholder="City*" style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid #dbd3d3;;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                            </div>
                            <div class="col-md-6 pr-0" style="margin: 0 0 10% 0;">
                                <input class="m-0 input" placeholder="Address*" style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid #dbd3d3;;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                            </div>
                            <div class="col-md-6 pl-0" style="margin: 0 0 10% 0;">
                                <input class="m-0 input" placeholder="Zip code*" style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid #dbd3d3;;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                            </div>
                            <div class="col-md-6 pr-0" style="margin: 0 0 10% 0;">
                                <input class="m-0 input" placeholder="Phone*" style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid #dbd3d3;;font-family: 'Futura PT', sans-serif;font-size: 15px!important;">
                            </div>
                        </div>
                        <div class="d-flex flex-nowrap">
                            <button type="button" name="previous" class="previous action-button-previous btn btn-primary text-left w-100 mr-3" value="Previous Step">
                                <div class="d-flex flex-nowrap">
                                    <p class="flex-grow-1 m-0">PERSONAL DETAIL</p>
                                    <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                                </div>
                            </button>
                            <button type="button" name="next" class="next action-button btn btn-primary text-left w-100" value="Next Step" style="background-color: #CDB4B4!important;">
                                <div class="d-flex flex-nowrap">
                                    <p class="flex-grow-1 m-0">CODE DISCOUNT</p>
                                    <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                                </div>
                            </button>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="d-flex flex-wrap">
                            <div class="col-md-12 p-5" style="margin: 10% 0 10% 0;border: 1px solid #CDB4B4;height: 150px;">
                                <input class="m-0 input" placeholder="Discount Code" style="height:60px;background: transparent; border-radius: 0; border-bottom: 1px solid #dbd3d3;;font-family: 'Futura PT', sans-serif;font-size: 15px!important;" id="discount_code" value="happymay30">
                            </div>
                        </div>
                        <div class="d-flex flex-nowrap">
                            <button type="button" name="previous" class="previous action-button-previous btn btn-primary text-left w-100 mr-3" value="Previous Step">
                                <div class="d-flex flex-nowrap">
                                    <p class="flex-grow-1 m-0">SHIPPING DETAIL</p>
                                    <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                                </div>
                            </button>
                            <button type="button" name="next" class="next action-button btn btn-primary text-left w-100" value="Next Step" style="background-color: #CDB4B4!important;" onclick="apply_discount_code()">
                                <div class="d-flex flex-nowrap">
                                    <p class="flex-grow-1 m-0">DELIVERY METHOD</p>
                                    <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                                </div>
                            </button>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="d-flex flex-wrap">
                            <div class="col-md-12 p-5 radioSection" style="margin: 10% 0 0 0;border: 1px solid #CDB4B4;height: 150px;">
                                <div class="d-flex flex-nowrap">
                                    <p class="flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;color: #000000;">
                                        <input name="gruppo1" class="radio" type="radio" style="margin-right: 15px;" value="6.99" checked>DHL SPEDIZIONI ITALIA</p>
                                    <p style="color:#000000;">€ 6,99</p>
                                </div>
                                <p style="padding-left: 28px;font-family: 'Futura PT', sans-serif;font-size: 15px!important;color: #CDB4B4;">Spedizione in Italia prevista entro 3 - 6 giorni</p>
                            </div>
                            <div class="col-md-12 p-5 radioSection" style="margin: 10% 0 10% 0;border: 1px solid #CDB4B4;height: 150px;">
                                <div class="d-flex flex-nowrap">
                                    <p class="flex-grow-1" style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;color: #000000;">
                                        <input name="gruppo1" class="radio" type="radio" style="margin-right: 15px;" value="18.99">DHL SPEDIZIONI EUROPA</p>
                                    <p style="color:#000000;">€ 18,99</p>
                                </div>
                                <p style="padding-left: 28px;font-family: 'Futura PT', sans-serif;font-size: 15px!important;color: #CDB4B4;">Spedizione in Europa prevista entro 12 - 16 giorni</p>
                            </div>
                        </div>
                        <div class="d-flex flex-nowrap">
                            <button type="button" name="previous" class="previous action-button-previous btn btn-primary text-left w-100 mr-3" value="Previous Step">
                                <div class="d-flex flex-nowrap">
                                    <p class="flex-grow-1 m-0">CODE DISCOUNT</p>
                                    <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                                </div>
                            </button>
                            <button type="button" name="next" class="next action-button btn btn-primary text-left w-100" value="Next Step" style="background-color: #CDB4B4!important;">
                                <div class="d-flex flex-nowrap">
                                    <p class="flex-grow-1 m-0">MAKE PAYMENT</p>
                                    <p class="m-0"><i class="bx bx-shopping-bag"></i></p>
                                </div>
                            </button>
                        </div>
                    </fieldset>
                </ul>
            </form>
        </div>
        <div class="col-md-5" style="background-color: #dbd3d3;">
            <div class="d-flex">
                <div class="d-flex" style="width:20%">
                </div>
                <div class="ml-3 d-flex flex-nowrap w-100 mt-5">
                    <div class="flex-grow-1 m-auto" style="width:20%">
                        <h5 style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Size</h5>
                    </div>
                    <div class="flex-grow-1 m-auto" style="width:20%">
                        <h5 style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Quantity</h5>
                    </div>
                    <div class="flex-grow-1 m-auto" style="width:20%">
                    </div>
                    <div class="flex-grow-2 m-auto" >
                        <h5 style="font-family: 'Futura PT', sans-serif;font-size: 15px!important;white-space: nowrap;">Price</h5>
                    </div>
                </div>
            </div>
            <div class="mt-5 append_cart append_cart_summary">
            </div>
            <div class="d-flex flex-nowrap">
                <div class="col-md-6 p-0"></div>
                <div class="col-md-6 p-0">
                    <div class="d-flex flex-nowrap">
                        <p class="flex-grow-1">Total</p>
                        <p class="total_cart"></p>
                    </div>
                    <div class="d-flex flex-nowrap">
                        <p class="flex-grow-1">Total discount</p>
                        <p class="total_discount">€ 0.00</p>
                    </div>
                    <div class="d-flex flex-nowrap">
                        <p class="flex-grow-1">Delivery</p>
                        <p class="total_delivery">€ 6.99</p>
                    </div>
                    <div class="d-flex flex-nowrap">
                        <p class="flex-grow-1">New Total</p>
                        <p class="total_definitive"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

    function start_function_summary(){

        get_cart("summary");
        
    }
    
    $(document).ready(function(){
        
        var current_fs, next_fs, previous_fs;
        var opacity;
        
        $(".next").click(function(){
            
            current_fs = $(this).parent().parent();
            next_fs = $(this).parent().parent().next();
            
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            
            next_fs.show();
            
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                    
                    opacity = 1 - now;
                    
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({'opacity': opacity});
                },
                duration: 600
            });
        });
        
        $(".previous").click(function(){
            
            current_fs = $(this).parent().parent();
            previous_fs = $(this).parent().parent().prev();
            
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            
            previous_fs.show();
            
            current_fs.animate({opacity: 0}, {
                step: function(now) {
                    
                    opacity = 1 - now;
                    
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({'opacity': opacity});
                },
                duration: 600
            });
        });
        
    });

    function apply_discount_code(){

        var name_discount=$("#discount_code").val();
        var total_discount=0;

        $.get("apply_discount_ileniadesign",{name_discount:name_discount},
        function(data){
            total_discount=parseFloat($(".total_cart").text().split("€ ")[1])/100*data;
            $(".total_discount").text("- € "+total_discount.toFixed(2));
            total_definitive_cart();
        });

    }

    $(".radioSection").click(function () {
        $(this).find('input[type=radio]').prop('checked', true);
        $('.radioSection').removeClass('selected');
        $(this).addClass('selected');
        $(".total_delivery").text('€ '+$(this).find('input[type=radio]').val());
        total_definitive_cart();
    });

    function total_definitive_cart(){

        var total_cart=0;
        var total_discount=0;
        var total_delivery=0;
        var total_definitive=0;
        
        total_cart=parseFloat($(".total_cart").text().split("€ ")[1]);
        total_discount=parseFloat($(".total_discount").text().split("€ ")[1]);
        total_delivery=parseFloat($(".total_delivery").text().split("€ ")[1]);
        total_definitive=total_cart-total_discount+total_delivery;

        $(".total_definitive").text("€ "+total_definitive.toFixed(2));

    }


</script>