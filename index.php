<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Leaflet</title>
    <link rel="stylesheet" href="./leaflet/leaflet.css">
    <script src="./leaflet/leaflet.js"></script>
    <style>
        #map{
          height: 700px;
          width: 700px;
          border: solid 1px black;
        }
    </style>
</head>
<body>
    <div id = "map">
        
    </div>

    <input type="button" onclick = "removeMap(basemap, googleStreets, googleTerrain)" value="Basemap">
   <input type="button" onclick = "removeMap(googleStreets, basemap, googleTerrain)" value="Google Streets">
    <input type="button" onclick = "removeMap(googleTerrain, basemap, googleStreets)" value="Google Terrain"> 




    <script>
        var basemap = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {});

        var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                maxZoom: 20,
                subdomains:['mt0','mt1','mt2','mt3']
        });

        let googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        });   

        var map = L.map(document.getElementById('map'), {
        center: [2.820723, -60.672418],
        zoom: 17,
        layers:[basemap]
        });

        //var basemap = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {});
            //map.addLayer(basemap); //Forma 2
        //Pegar e atribuir dentro do mapa
        //basemap addTo(map); Fortma 3
        
        //map.addLayer(googleStreets);
        
        function removeMap(mapa1, mapa2, mapa3) {
            console.log(mapa1);
            console.log(mapa2);
            console.log(mapa3);
            if(map.hasLayer(mapa1)){
                map.removeLayer(mapa1);
            }else{
                map.removeLayer(mapa2);
                map.removeLayer(mapa3);
                map.addLayer(mapa1);
            }
                
        }  
        </script>

        <script>
            /*function removeMap() {
                if(map.hasLayer(googlestreets)){
                    map.removeLayer(googlestreets);
                }
                
            }*/
        </script>
</body>
</html>