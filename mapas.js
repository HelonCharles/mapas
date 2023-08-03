let basemap = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {});

        let googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                maxZoom: 20,
                subdomains:['mt0','mt1','mt2','mt3']
        });

        let googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        });   

        let map = L.map(document.getElementById('map'), {
        center: [2.820723, -60.672418],
        zoom: 9,
        layers:[basemap]
        });