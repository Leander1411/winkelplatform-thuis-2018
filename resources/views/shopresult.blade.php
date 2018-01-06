<div class="shopresult_container">
    <div class="shopresult_image">
        {{ HTML::image('images/template_image_folder_shopresults/shopresult_image1.png') }}
    </div>
    <div class="shopresult_shopname">
        <h3>winkelnaam</h3>
    </div>
    <div class="shopresult_description">
        <!-- <h1>winkelnaam</h1> -->
        <span>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, enim est ex animi quaerat quae reprehenderit, officia consequuntur voluptate cum, libero molestiae error perspiciatis a esse veritatis? Atque, harum. Ipsum!
        </span>
    </div>

    <div class="shopresult_contactInfo">
        <div class="shopresult_contactInfo_address">
            <span>
                winkelstraat 1<br>
                9999 XX Helmond
            </span>
        </div>
        <div class="shopresult_contactInfo_phoneMail">
            <span>
                telefoon: +31 40 1234567<br>
                e-mail: info@winkelnaam.nl
            </span>
        </div>
        
    </div>

    <div class="shopresult_map">
        {{ HTML::image('images/template_image_folder_shopresults/shopresult_map1.png') }}
    </div>
    <div class="shopresult_products">
        <div class="shopresult_products_item">
            {{ HTML::image('images/template_image_folder_shopresults/products/ebay.png') }}
        </div>
        <div class="shopresult_products_item">
            {{ HTML::image('images/template_image_folder_shopresults/products/fanta.png') }}
        </div>
        <div class="shopresult_products_item">
            {{ HTML::image('images/template_image_folder_shopresults/products/jeans_example.png') }}
        </div>
        <div class="shopresult_products_item">
            {{ HTML::image('images/template_image_folder_shopresults/products/php.png') }}
        </div>
        <div class="shopresult_products_item">
            {{ HTML::image('images/template_image_folder_shopresults/products/samsung.png') }}
        </div>
        <div class="shopresult_products_item">
            {{ HTML::image('images/template_image_folder_shopresults/products/suzuki.png') }}
        </div>
    </div>
    <div class="shopresult_buttons">
        <div>
            <button value="Meer info"></button>
        </div>
        <div>
            <button value="Contact"></button>
        </div>
    </div>
</div>

<!-- image | description | google_maps | products | knoppen "contact" + "meer info" -->