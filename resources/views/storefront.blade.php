<!-- landingspagina winkel -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>landingspagina winkel (template)</title>
    {{ HTML::style('css/storefront.css') }}
</head>
<body>
<?php //var_dump($products);  ?>
{{--  {{ print_r($shop) }}  --}}
<br>
<br>
<br>
<br>
{{--  {{ print_r($products) }}  --}}
<!--
winkel:
v   winkelnaam
v   adres    
v   stad     
v   e-mail    
v   telefoonnummer      
v   winkellogo (optioneel)   
v   winkelafbeelding / foto  
v   omschrijving winkel 
aanbieding / reclame winkel (optioneel) 
kaartje google maps

social media:
shop_website
facebook
twitter
linkedin
andere links voor social media (meerdere links mogelijk)

producten:
productnaam
productomschrijving
merk
producteigenschappen / kenmerken
productafbeelding
product categorie (optioneel, max 3 lagen):
    - categorie 1
        - categorie 2
            - categorie 3
-->

<div class="shopname">
    <h1>winkelnaam: {{ $shop->name }}</h1>
    + evt logo 
</div>
<div class="shopinfo">
    <div class="shopimage">
        {{--  winkelafbeelding / foto    --}}
        {{ HTML::image($shop->image) }}
    </div>
    <div class="shopdescription">
        {{--  omschrijving winkel  --}}
        {{ $shop->description }}
    </div>
</div>
<div class="shoplocation">
    <div class="shopcontact">
        adres: {{ $shop->address }}</br>    
        stad: {{ $shop->city }} </br>    
        e-mail: {{ $shop->email }} </br>   
        telefoonnummer: {{ $shop->phone }}
    </div>
    <div class="shop_google_maps">
        {{--  kaartje google maps [nog aanpassen voor google maps api en location parameter voorwaarden etc.]  --}}
        {{ HTML::image($shop->google_maps) }}
    </div>
</div>
<div class="shopproducts">
    <span>wij verkopen:</span><br>
    <div class="shopproduct">
        product 1:</br>
        <p>product id = {{ $products->name }}</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus inventore eos adipisci sint aliquid nihil repellendus, veniam itaque tenetur voluptatum recusandae fugiat? Impedit inventore magnam a sit incidunt totam aut?Ea excepturi alias delectus libero quasi nisi corporis aut vitae corrupti animi reiciendis quo fugiat vel, reprehenderit explicabo. Inventore ullam cum molestias natus tenetur cumque laboriosam veritatis ipsam. Nostrum, ab?</p>
    </div>
    <div class="shopcategories">
        <div class="shopcategory1">productcategorie 1</div>
        <div class="shopcategory2">productcategorie 2</div>
        <div class="shopcategory3">productcategorie 3</div>
    </div>
    <div class="shopproduct">
        product 2:</br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus inventore eos adipisci sint aliquid nihil repellendus, veniam itaque tenetur voluptatum recusandae fugiat? Impedit inventore magnam a sit incidunt totam aut?Ea excepturi alias delectus libero quasi nisi corporis aut vitae corrupti animi reiciendis quo fugiat vel, reprehenderit explicabo. Inventore ullam cum molestias natus tenetur cumque laboriosam veritatis ipsam. Nostrum, ab?</p>
    </div>
    <div class="shopcategories">
        <div class="shopcategory1">productcategorie 4</div>
        <div class="shopcategory2">productcategorie 5</div>
        <div class="shopcategory3">productcategorie 6</div>
    </div>


    <!-- test "mirror" -->
    <div class="shopcategories">
        <div class="shopcategory1">productcategorie 7</div>
        <div class="shopcategory2">productcategorie 8</div>
        <div class="shopcategory3">productcategorie 9</div>
    </div>
    <div class="shopproduct">
        product 2:</br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus inventore eos adipisci sint aliquid nihil repellendus, veniam itaque tenetur voluptatum recusandae fugiat? Impedit inventore magnam a sit incidunt totam aut?Ea excepturi alias delectus libero quasi nisi corporis aut vitae corrupti animi reiciendis quo fugiat vel, reprehenderit explicabo. Inventore ullam cum molestias natus tenetur cumque laboriosam veritatis ipsam. Nostrum, ab?</p>
    </div>
</div>
<div class="socialmedia"><!-- if statement maken zodat er geen foutmelding komt bij null waardes etc.  -->
    {{--  <div class="social_website">website url: {{ HTML::link('http://test.com', 'testing')}}</div>  --}}
    <div class="social_website">website url: {{ HTML::link($socialmedia->shop_website, "banana website") }}</div>
    <div class="social_facebook">facebook: {{ HTML::link($socialmedia->facebook) }}</div>
    <div class="social_twitter">twitter: {{ HTML::link($socialmedia->twitter) }}</div>
    <div class="social_linkedin">linkedin: {{ HTML::link($socialmedia->linkedin) }}</div>
    <div class="social_other">andere social media: {{ HTML::link($socialmedia->other_socialmedia) }}</div>

</div>
</body>
</html>
