@php
    $seo = get_seo(6);
@endphp

<x-layout :title="$seo['title']" :description="$seo['description']">
    <div class="container">
        <div class="page">
            <div class="page__title">
                <h1>{{ __('Menu: Contacts') }}</h1>
            </div>

            <h2 class="hidden">{{ __('Connect') }}</h2>

            <div class="contacs__connect-list">
                <div class="contacs__dir">
                    <div class="contacs__dir-title">{{ __('Phone') }}</div>
                    <div class="contacs__dir-content">
                        <ul class="contacs__list contacs__list--tel">
                            <li>{{ __('Phone') }}: <a
                                    href="tel:+{{ preg_replace('![^0-9]+!', '', $mdsettings['phone1']) }}"
                                    class="contacts__tel">{{ $mdsettings['phone1'] }}</a> </li>
                            <li>{{ __('Phone') }}: <a
                                    href="tel:+{{ preg_replace('![^0-9]+!', '', $mdsettings['phone2']) }}"
                                    class="contacts__tel">{{ $mdsettings['phone2'] }}</a> </li>
                            <li>{{ __('Fax') }}: <a
                                    href="tel:+{{ preg_replace('![^0-9]+!', '', $mdsettings['fax']) }}"
                                    class="contacts__tel">{{ $mdsettings['fax'] }}</a> </li>
                        </ul>
                    </div>
                </div>

                <div class="contacs__dir">
                    <div class="contacs__dir-title">{{ __('Email') }}</div>
                    <div class="contacs__dir-content">
                        <ul class="contacs__list contacs__list--email">
                            <li><a href="mailto:{{ $mdsettings['email1'] }}"
                                    class="contacts__email">{{ $mdsettings['email1'] }}</a></li>
                            <li><a href="mailto:{{ $mdsettings['email1'] }}"
                                    class="contacts__email">{{ $mdsettings['email2'] }}</a></li>
                        </ul>
                    </div>
                </div>

                <div class="contacs__dir">
                    <div class="contacs__dir-title">{{ __('Social') }}</div>
                    <div class="contacs__dir-content">
                        <ul class="contacs__list contacs__list--social">
                            <li>Linkedin: <a href="{{ $mdsettings['linkedin1'] }}" class="contacts__email"
                                    target="_blank">Orga Ki̇mya Mühendi̇sli̇k</a></li>
                            <li>Linkedin: <a href="{{ $mdsettings['linkedin2'] }}" class="contacts__email"
                                    target="_blank">Kadir Kutay Çalış</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="page">
            <div class="contacs__address">
                <div class="contacs__address-row">
                    <div class="contacs__address-col contacs__address-col--text">
                        <div class="contacs__dir">
                            <h2 class="contacs__address-header">{{ __('Address') }}</h2>
                            <div class="contacs__dir-title"></div>
                            <address class="contacs__dir-content">
                                <p class="contacs__address-city">{{ $mdsettings['city'] }},
                                    {{ $mdsettings['district'] }}</p>
                                <div class="contacs__address-list">
                                    <div class="contacs__address-item">
                                        <div class="contacs__address-title">DAP Royal Center</div>
                                        <div class="contacs__address-text">{{ $mdsettings['address2'] }}</div>
                                        <div class="contacs__address-text">{{ $mdsettings['address1'] }}</div>
                                        <div class="contacs__address-text"><a href="{{ $mdsettings['gmaplink1'] }}"
                                                target="_blank">{{ __('View on google map') }}</a></div>
                                    </div>
                                </div>
                            </address>
                        </div>
                    </div>
                    <div class="contacs__address-col contacs__address-col--map">
                        <div id="map" class="contacs__map"></div>
                    </div>
                </div>
            </div>
            <div class="page__bottom"></div>
        </div>
    </div>


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script>
        let coordArr1 = [{{ $mdsettings['coord1'] }}];
        let centerArr = coordArr1;

        var map = L.map('map').setView(centerArr, 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        let myIcon = L.icon({
            iconUrl: '/storage/images/design/svg/marker.svg',
            iconSize: [80, 80],
            iconAnchor: [40, 76],
            popupAnchor: [-3, -76],
            shadowUrl: '',
            shadowSize: [68, 95],
            shadowAnchor: [22, 94]
        });

        let markerOptions = {
            icon: myIcon
        }

        var marker1 = L.marker(coordArr1, markerOptions).addTo(map);
    </script>
</x-layout>
