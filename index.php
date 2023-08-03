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
    <script src = "./camadasGeoJson/biodivers_veg_sistemas_lacustres.geojson"></script>
    <script src = "./camadasGeoJson/rodovias.geojson"></script>
    <script src = "./camadasGeoJson/sedesMunicipais.geojson"></script>
    
</head>
<body>
    
    <div id = "map"></div>
    
    <input type="button" onclick = "removeMap(basemap, googleStreets, googleTerrain)" value="Basemap">
    <input type="button" onclick = "removeMap(googleStreets, basemap, googleTerrain)" value="Google Streets">
    <input type="button" onclick = "removeMap(googleTerrain, googleStreets, basemap)" value="Google Terrain">

    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker1, earthquakeMarker2, earthquakeMarker3, earthquakeMarker4, earthquakeMarker5)" value="Marco Central de Boa Vista">
    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker2, earthquakeMarker3, earthquakeMarker4, earthquakeMarker5, earthquakeMarker1)" value="Palácio do Governo">
    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker3, earthquakeMarker4, earthquakeMarker5, earthquakeMarker1, earthquakeMarker2)" value="Assembléia Legislativa de Roraima">
    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker4, earthquakeMarker5, earthquakeMarker1, earthquakeMarker2, earthquakeMarker3)" value="Tribunal de Justiça">
    <input type="button" onclick = "removeEarthquakeMarker(earthquakeMarker5, earthquakeMarker1, earthquakeMarker2, earthquakeMarker3, earthquakeMarker4)" value="Catedral">
    
    
    <script src="./mapas.js"></script>
    <script src="./marcadores.js"></script>
    <script src="./rodovias.js"></script>

               
    <script>
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

        function removeEarthquakeMarker(earthquakeMarker1) {

            if(map.hasLayer(earthquakeMarker1)) {
                map.removeLayer(earthquakeMarker1);
            }else{
                map.addLayer(earthquakeMarker1);
            }
        }
        function removeEarthquakeMarker(earthquakeMarker2) {
            if(map.hasLayer(earthquakeMarker2)) {
                map.removeLayer(earthquakeMarker2);
            }else{
                map.addLayer(earthquakeMarker2);
            }
        }
        function removeEarthquakeMarker(earthquakeMarker3) {
            if(map.hasLayer(earthquakeMarker3)) {
                map.removeLayer(earthquakeMarker3);
            }else{
                map.addLayer(earthquakeMarker3);
            }
        }
        function removeEarthquakeMarker(earthquakeMarker4) {
            if(map.hasLayer(earthquakeMarker4)) {
                map.removeLayer(earthquakeMarker4);
            }else{
                map.addLayer(earthquakeMarker4);
            }
        }
        function removeEarthquakeMarker(earthquakeMarker5) {
            if(map.hasLayer(earthquakeMarker5)) {
                map.removeLayer(earthquakeMarker5);
            }else{
                map.addLayer(earthquakeMarker5);
            }
        }
          
    </script>

    <script>
        console.log(sistLacustres);
        console.log(rodovia1);
        console.log(sedesMunic1);
        
    </script>

</body>
</html>