@extends('app.base')
@section('title', 'Select')

@section('content')

<form action="{{ url('select')}}" method="post">
    
    @method('put')
    @csrf
    
    <label for="cities" >Select a Spain city</label>
    
    <select id="cities" name="cities" class="form-select" aria-label="Default select example">
        <option value="default" hidden>Cities</option>
    </select>

    <br>
    
    <label for="countries" >Select a countrie</label>
    
    <select id="countries" name="countries" class="form-select" aria-label="Default select example">
        <option value="default" hidden>Countries</option>
    </select>
    
    <br>
    
    <button type="submit" class="btn btn-primary">Save Setting</button>
    
    <script>
        //CITIES
    
        var selectCities = document.getElementById("cities");

        // Simulación de datos JSON con ciudades
        var citiesJSON = [
                "Almería", "Cádiz", "Córdoba", "Granada", "Huelva", "Jaén", "Málaga",
                "Sevilla", "Huesca", "Teruel", "Zaragoza", "Oviedo", "Santander", "A Coruña",
                "Santiago", "Lugo", "Ourense", "Pontevedra", "Palma de Mallorca", "Las Palmas De Gran Canaria",
                "Sta. Cruz Tenerife", "Ceuta", "Melilla", "Albacete", "Ciudad Real", "Cuenca",
                "Guadalajara", "Toledo", "Badajoz", "Mérida", "Cáceres", "Ávila", "Burgos",
                "León", "Palencia", "Salamanca", "Segovia", "Soria", "Valladolid", "Zamora",
                "Barcelona", "Girona", "Lleida", "Tarragona", "Logroño", "Pamplona", "Bilbao",
                "San Sebastián", "Vitoria", "Madrid", "Murcia", "Alicante", "Castellón de la Plana", "Valencia"
        ];

        // Llena el select con las ciudades desde el JSON
        citiesJSON.forEach(function(city) {
            var option = document.createElement("option");
            option.value = city;
            option.text = city;
            selectCities.appendChild(option);
        });
        let selectedCity = "<?php echo session('cities') ?>";
        
        if(undefined != citiesJSON.find((element) => element == selectedCity)){
            selectCities.value = selectedCity;
        }else{
            selectCities.value = 'default';
        }
    
        //COUNTRIES
    
        var selectCountries = document.getElementById("countries");

        // Simulación de datos JSON con ciudades
        var countriesJSON = [
                "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina",
                "Armenia", "Australia", "Austria", "Azerbaijan", "The Bahamas", "Bahrain", "Bangladesh",
                "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina",
                "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia",
                "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros",
                "Congo, Democratic Republic of the", "Congo, Republic of the", "Costa Rica", "Côte d’Ivoire",
                "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica",
                "Dominican Republic", "East Timor (Timor-Leste)", "Ecuador", "Egypt", "El Salvador",
                "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland", "France",
                "Gabon", "The Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea",
                "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran",
                "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya",
                "Kiribati", "Korea, North", "Korea, South", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia",
                "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar",
                "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius",
                "Mexico", "Micronesia, Federated States of", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco",
                "Mozambique", "Myanmar (Burma)", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand",
                "Nicaragua", "Niger", "Nigeria", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Panama",
                "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania",
                "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa",
                "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone",
                "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka",
                "Sudan", "Sudan, South", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania",
                "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda",
                "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu",
                "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
        ];

        // Llena el select con las ciudades desde el JSON
        countriesJSON.forEach(function(country) {
            var option = document.createElement("option");
            option.value = country;
            option.text = country;
            //option.se
            selectCountries.appendChild(option);
        });
        let selectedCountry = "<?php echo session('countries') ?>";
        
        if(undefined != countriesJSON.find((element) => element == selectedCountry)){
            selectCountries.value = selectedCountry;
        }else{
            selectCountries.value = 'default';
        }
        
    </script>
    
</form>

@endsection
