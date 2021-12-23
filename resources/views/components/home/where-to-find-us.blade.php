<div class="bg-dark my-2">
    <div class="py-7 container">
        <div class="card_bard-body shadow-sm">
            <div class="text-center text-white">
                <h2 class="h1">Où nous trouver&nbsp?</h2>
                <div id="map" class="rounded mt-4" style="height: 500px"></div>


            </div>
        </div>
    </div>
</div>
@push("scripts")
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoid2hlcmVpc2x1Y2FzIiwiYSI6ImNreGlvOGNiejJsODAycXBneXZ3eHg2MmUifQ.yJZotSAzwfWPchDyUeKWVw ';
        const map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v11', // style URL
            center: [5.5, 50], // starting position [lng, lat]
            zoom: 9 // starting zoom
        });
    </script>
@endpush
