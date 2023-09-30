<!doctype html>
<html lang="en">
  <head>
    <script src="https://kit.fontawesome.com/48764efa36.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Laravel CRM Saas</title>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




  </head>
  <body style="width: 100%;padding: 0%;">
 
    <nav class="transparent-navbar">
        <div class="logo">
            <img src="{{ asset('crm.png') }}" alt="Logo">
        </div>
        <ul id="navItems">
            
            <li><a href="#"> {{$menus['home']}}</a></li>
            <li><a href="#">{{$menus['about']}}</a></li>
            <li><a href="#">{{$menus['services']}}</a></li>
            <li><a href="#">{{$menus['contact']}}</a></li>
        </ul>
    </nav>
    
               
        <div id="banner" style="background-image: url('{{ $pageHero['backgroundimage'] }}');  background-repeat: no-repeat; background-size: cover;background-position: center;">
                    
            <div id="heroText">
                <h1 id="heroHeadline">{{ $pageHero['headline'] }}</h1>
        
            </div>

            <p id="heroSubheadline">{{ $pageHero['sub_headline'] }}</p>

            <div id="heroFeatures">
            @foreach ($pageHero['featurereference'] as $heroFeatures)
                <div id="heroFeaturesInner">
                    <img src="{{$heroFeatures['icon']}}" alt="Component Icon" id="heroIcons">
                    {{$heroFeatures['description']}}
                </div>
            @endforeach
            </div>
               
                    
        </div>
        
        <div id="featuresSection">
                
            <div id="features_list">
            @foreach ($pageFeatures['feature_list'] as $featureList)
                <div id="features_heading">
                {{$featureList['heading']}}
                </div>
                <div id="features_description">
                {{ $featureList['description'] }}
                </div>
            @endforeach
            </div>
               
            <div id="features_demo">
                {!!$pageFeatures['feature_demo']!!}
            </div>
        </div>

        <div id="clientsSection">
            <div id="quote_heading">
               {{$clientsHeader}}
            </div>
            <div id="client_logos">
                @foreach ($pageClients as $clientlogo)
                    
                    <img src="{{$clientlogo['icon']}}" alt="Component Icon" class="clientIcons">
                
                @endforeach
            </div>
        </div>
       
        <div id="quoteSection">
            <div id="quote_heading">
            {{$quotesHeader}}
            </div>
            <div id="card_container">
            @foreach ($pageTestimonials as $quote)
                <div id="card">
                   
                    <div id="quote">
                        <div>
                        <b>"</b>{{$quote['quote']}}<b>"</b>
                        </div>
                        <div>
                        <p style="font-size: 10px;margin: 5px;"><b>~</b> {{$quote['full_name']}} </p>
                        </div>
                    </div>
                    <div id="quote_img">
                        <img src="{{$quote['image']}}" alt="Component Icon" id="quoteIcons">
                    </div>
                   
                </div>
                @endforeach
            </div>
        </div>
       
    <!-- Optional JavaScript; choose one of the two! -->
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   


   
  </body>
</html>
